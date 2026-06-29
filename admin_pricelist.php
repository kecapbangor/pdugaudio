<?php
session_start();
include 'config.php';

// Proteksi halaman: Jika belum login, tendang ke login.php
if (!isset($_SESSION['user']) || $_SESSION['role'] !== 'admin') {
    echo "<script>alert('Akses Ditolak! Anda bukan Admin.'); window.location='dashboard_pricelist.php';</script>";
    exit();
}

// 1. Logika TAMBAH Data (Sudah diperbarui dengan data_item)
if (isset($_POST['add'])) {
    $nama = mysqli_real_escape_string($conn, $_POST['nama_layanan']);
    $harga = mysqli_real_escape_string($conn, $_POST['harga']);
    $desc = mysqli_real_escape_string($conn, $_POST['deskripsi']);
    $kategori = mysqli_real_escape_string($conn, $_POST['kategori']);
    $item = mysqli_real_escape_string($conn, $_POST['data_item']); // Kolom baru
    
    $query = "INSERT INTO pricelist (nama_layanan, harga, deskripsi, kategori, data_item) VALUES ('$nama', '$harga', '$desc', '$kategori', '$item')";
    if (mysqli_query($conn, $query)) {
        header("Location: admin_pricelist.php");
        exit();
    }
}

// 2. Logika HAPUS Data
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    mysqli_query($conn, "DELETE FROM pricelist WHERE id=$id");
    header("Location: admin_pricelist.php");
    exit();
}

// 3. Logika PENCARIAN & TAMPIL Data (Pencarian diperluas ke kolom data_item)
if (isset($_GET['search']) && !empty($_GET['search'])) {
    $keyword = mysqli_real_escape_string($conn, $_GET['search']);
    $result = mysqli_query($conn, "SELECT * FROM pricelist WHERE nama_layanan LIKE '%$keyword%' OR deskripsi LIKE '%$keyword%' OR data_item LIKE '%$keyword%'");
} else {
    $result = mysqli_query($conn, "SELECT * FROM pricelist");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Kelola Pricelist</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; margin: 40px; background: #f4f4f4; color: #333; }
        .container { background: white; padding: 30px; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); max-width: 1100px; margin: auto; }
        
        h2 { color: #007bff; margin-top: 0; }
        hr { border: 0; border-top: 1px solid #eee; margin: 20px 0; }

        /* Form Styling */
        .form-section { background: #f9f9f9; padding: 20px; border-radius: 8px; margin-bottom: 30px; border: 1px solid #ddd; }
        .form-grid { display: flex; flex-wrap: wrap; gap: 10px; align-items: center; }
        input[type="text"], input[type="number"] { padding: 10px; border: 1px solid #ccc; border-radius: 4px; flex: 1; min-width: 180px; }
        .btn-save { background: #28a745; color: white; border: none; padding: 10px 20px; cursor: pointer; border-radius: 4px; font-weight: bold; }
        .btn-save:hover { background: #218838; }

        /* Search Box */
        .search-box { margin-bottom: 20px; display: flex; gap: 10px; align-items: center; }
        .input-search { padding: 10px; border: 1px solid #007bff; border-radius: 4px; width: 300px; }
        .btn-search { background: #007bff; color: white; border: none; padding: 10px 15px; border-radius: 4px; cursor: pointer; }

        /* Table Styling */
        table { width: 100%; border-collapse: collapse; margin-top: 10px; background: white; }
        th, td { border: 1px solid #ddd; padding: 12px; text-align: left; vertical-align: top; }
        th { background-color: #007bff; color: white; }
        tr:nth-child(even) { background-color: #f2f2f2; }
        tr:hover { background-color: #f1f7ff; }

        .btn-edit { color: #007bff; text-decoration: none; font-weight: bold; }
        .btn-delete { color: #dc3545; text-decoration: none; font-weight: bold; }
        .btn-edit:hover, .btn-delete:hover { text-decoration: underline; }
        
        .nav-links { margin-bottom: 20px; font-size: 0.9em; }
        .small-note { display: block; font-size: 0.8em; color: #777; margin-top: 4px; }
    </style>
</head>
<body>

<div class="container">
    <h2>Dashboard Admin - PDUG Audio</h2>
    <div class="nav-links">
        <span>Login sebagai: <strong><?= htmlspecialchars($_SESSION['user']); ?></strong></span> | 
        <a href="dashboard_pricelist.php">Tampilan User</a> | 
        <a href="logout.php" style="color: red;">Logout</a>
    </div>

    <div class="form-section">
        <h3>Tambah Layanan Baru</h3>
        <form method="POST">
            <div class="form-grid">
                <input type="text" name="nama_layanan" placeholder="Nama Layanan (Contoh: Paket Sound 1)" required>
                <input type="number" name="harga" placeholder="Harga (Contoh: 1500000)" required>
                <input type="text" name="deskripsi" placeholder="Deskripsi Singkat">
                <select name="kategori" required style="padding: 10px; border: 1px solid #ccc; border-radius: 4px; flex: 1; min-width: 180px;"> //nambah kategori file
                <option value="" disabled selected>-- Pilih Kategori --</option>
                <option value="Soundsystem">Soundsystem</option>
                <option value="Stage Lighting">Stage Lighting</option>
                <option value="Add ons">Add ons</option>
                </select>
                
                <input type="text" name="data_item" placeholder="Data Item (Pisahkan dengan koma)" required>
                
                <button type="submit" name="add" class="btn-save">Simpan Data</button>
            </div>
            <span class="small-note">*Format Data Item: <strong>Speaker | 2 Unit, Mic | 2 Unit, Soundman</strong> (Gunakan koma sebagai pemisah item)</span>
        </form>
    </div>

    <hr>

    <h3>Daftar Pricelist</h3>
    
    <div class="search-box">
        <form method="GET">
            <input type="text" name="search" class="input-search" placeholder="Cari layanan, deskripsi, atau item..." value="<?= isset($_GET['search']) ? htmlspecialchars($_GET['search']) : '' ?>">
            <button type="submit" class="btn-search">Cari</button>
            <?php if(isset($_GET['search'])): ?>
                <a href="admin_pricelist.php" style="font-size: 0.8em; color: #666; margin-left: 10px;">Reset Pencarian</a>
            <?php endif; ?>
        </form>
    </div>

    <table>
        <thead>
            <tr>
                <th>Nama Layanan</th>
                <th>Deskripsi</th>
                <th>Kategori</th>
                <th>Data Item</th>
                <th>Harga per Day / Event / Pack</th>
                <th style="width: 120px;">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php if(mysqli_num_rows($result) > 0): ?>
                <?php while($row = mysqli_fetch_assoc($result)) : ?>
                <tr>
                    <td><strong><?= htmlspecialchars($row['nama_layanan']); ?></strong></td>
                    <td><?= htmlspecialchars($row['deskripsi']); ?></td>
                    <td><?= htmlspecialchars($row['kategori']); ?></td>
                    <td>
                     <span style="font-size: 0.9em; line-height: 1.4;">
                        <?php 
                        if (!empty($row['data_item'])) {
                // Tambahkan '• ' di awal, lalu ganti ', ' dengan '<br>• '
                        echo '• ' . str_replace(', ', '<br>• ', htmlspecialchars($row['data_item']));
                        }
                        ?>
    </span>
</td>
                    
                    <td>Rp <?= number_format($row['harga'], 0, ',', '.'); ?></td>
                    <td>
                        <a href="edit_pricelist.php?id=<?= $row['id']; ?>" class="btn-edit">Edit</a> | 
                        <a href="admin_pricelist.php?delete=<?= $row['id']; ?>" class="btn-delete" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            <?php else: ?>
                <tr>
                    <td colspan="5" style="text-align: center; padding: 20px; color: #999;">Data tidak ditemukan atau tabel kosong.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>

</body>
</html>