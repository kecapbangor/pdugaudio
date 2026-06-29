<?php
session_start();
include 'config.php';

// Proteksi halaman: Jika belum login, tendang ke login.php
if (!isset($_SESSION['user'])) { 
    header("Location: login.php"); 
    exit(); 
}

// Mengambil data pricelist dari database dan urutkan berdasarkan kategori
$result = mysqli_query($conn, "SELECT * FROM pricelist ORDER BY CASE 
    WHEN kategori = 'Soundsystem' THEN 1 
    WHEN kategori = 'Stage Lighting' THEN 2 
    WHEN kategori = 'Add ons' THEN 3 
    ELSE 4 
END ASC, nama_layanan ASC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pricelist Kami - PDUG Audio</title>
    <style>
        body { 
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; 
            text-align: center; 
            background-color: #f8f9fa;
            margin: 0;
            padding: 40px;
        }
        h1 { color: #333; }
        .user-info { color: #666; margin-bottom: 30px; }
        
        .card-container { 
            display: flex; 
            flex-wrap: wrap; 
            justify-content: flex-start; /* Diubah agar kotak ke-4 dst sejajar di bawah kotak ke-1, tidak ke tengah */
            gap: 25px; 
            padding: 20px; 
            max-width: 1040px; /* Ukuran ini sudah dikalkulasi pas untuk 3 kotak sejajar */
            margin: 0 auto; 
        }
        .card { 
            border: none; 
            padding: 25px; 
            width: 280px; 
            border-radius: 15px; 
            background: #fff; 
            box-shadow: 0 10px 20px rgba(0,0,0,0.05); 
            transition: transform 0.3s ease;
        }
        .card:hover {
            transform: translateY(-10px);
        }
        .card h3 { margin-top: 0; color: #007bff; }
        .price { 
            font-size: 1.6em; 
            color: #28a745; 
            font-weight: bold; 
            margin: 15px 0;
        }
        .desc { color: #555; font-size: 0.9em; line-height: 1.4; margin-bottom: 15px; }
        
        /* Tombol Navigasi Bawah */
        .nav-menu {
            margin-top: 40px;
            padding: 20px;
            border-top: 1px solid #ddd;
            display: inline-block;
        }
        .btn-admin {
            color: #007bff;
            text-decoration: none;
            font-weight: bold;
        }
        .btn-logout {
            color: #dc3545;
            text-decoration: none;
            font-weight: bold;
            margin-left: 10px;
        }
    </style>
</head>
<body>

    <h1>Daftar Harga Layanan PDUG Audio</h1>
    <p class="user-info">
        Halo, <strong><?= htmlspecialchars($_SESSION['user']); ?></strong> (<em><?= htmlspecialchars($_SESSION['role']); ?></em>)!<br>
        Berikut adalah daftar harga terbaru kami:
    </p>

    <!-- MULAI AREA DATA PRICELIST KATEGORI -->
    <?php 
    if(mysqli_num_rows($result) > 0): 
        $kategori_sekarang = ""; 
        
        while($row = mysqli_fetch_assoc($result)) : 
            // Jika kategori berbeda dari sebelumnya, buat judul kategori baru
            if ($kategori_sekarang != $row['kategori']) {
                
                // Tutup penampung flexbox sebelumnya (jika bukan yang pertama)
                if ($kategori_sekarang != "") {
                    echo "</div>"; 
                }
                
                // Ambil nama kategori (jika kosong, tulis 'Lainnya')
                $kategori_sekarang = !empty($row['kategori']) ? $row['kategori'] : 'Lainnya';
                
                // Cetak Judul Kategori
                echo "<div style='width: 100%; text-align: center; margin-top: 40px;'>";
                echo "<h2 style='color: #007bff; border-bottom: 3px solid #007bff; display: inline-block; padding-bottom: 5px; text-transform: uppercase; font-size: 1.5em; margin-bottom: 10px;'>" . htmlspecialchars($kategori_sekarang) . "</h2>";
                echo "</div>";
                
                // Buka penampung flexbox (card-container) baru
                echo "<div class='card-container'>";
            }
    ?>
            
            <div class="card">
                <h3><?= htmlspecialchars($row['nama_layanan']); ?></h3>
                <p class="price">Rp <?= number_format($row['harga'], 0, ',', '.'); ?></p>
                <p class="desc"><?= htmlspecialchars($row['deskripsi']); ?></p>
                
                <?php if (!empty($row['data_item'])): ?>
                    <div style="text-align: left; font-size: 0.85em; line-height: 1.5; color: #444; background: #f0f4f8; padding: 12px; border-radius: 8px; margin-top: 15px; border: 1px solid #e1e8ed;">
                        <strong style="color: #007bff; display: block; margin-bottom: 5px;">Item yang didapat:</strong>
                        <?= '• ' . str_replace(', ', '<br>• ', htmlspecialchars($row['data_item'])); ?>
                    </div>
                <?php endif; ?>
            </div>

    <?php 
        endwhile; 
        
        // Menutup div card-container terakhir
        if ($kategori_sekarang != "") {
            echo "</div>";
        }
    ?>
    
    <?php else: ?>
        <div class="card-container">
            <p>Belum ada data pricelist tersedia.</p>
        </div>
    <?php endif; ?>
    <!-- SELESAI AREA DATA PRICELIST -->

    <!-- BAGIAN TOMBOL ADMIN YANG SEMPAT HILANG -->
    <div class="nav-menu">
        <?php if (isset($_SESSION['role']) && $_SESSION['role'] === 'admin') : ?>
            <a href="admin_pricelist.php" class="btn-admin">⚙️ Ke Halaman Admin (Kelola Data)</a> 
            <span style="color: #ccc; margin: 0 10px;">|</span>
        <?php endif; ?>

        <a href="logout.php" class="btn-logout">Keluar (Logout)</a>
    </div>

</body>
</html>