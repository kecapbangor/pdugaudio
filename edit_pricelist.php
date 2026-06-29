<?php
session_start();
include 'config.php';

// ==================== 1. PROTEKSI HALAMAN ====================
if (!isset($_SESSION['user'])) { 
    header("Location: login.php"); 
    exit(); 
}

// ==================== 2. LOGIKA SIMPAN PERUBAHAN (UPDATE) ====================
if (isset($_POST['update'])) {
    $id = intval($_POST['id']); // intval memastikan ID adalah angka (keamanan)
    
    // Menangkap data baru dari form
    $nama = mysqli_real_escape_string($conn, $_POST['nama_layanan']);
    $harga = mysqli_real_escape_string($conn, $_POST['harga']);
    $desc = mysqli_real_escape_string($conn, $_POST['deskripsi']);
    $kategori = mysqli_real_escape_string($conn, $_POST['kategori']);
    $item = mysqli_real_escape_string($conn, $_POST['data_item']);

    // Query UPDATE berdasarkan ID
    $sql = "UPDATE pricelist SET nama_layanan='$nama', harga='$harga', deskripsi='$desc', kategori='$kategori', data_item='$item' WHERE id=$id";
    
    if (mysqli_query($conn, $sql)) {
        header("Location: admin_pricelist.php");
        exit();
    } else {
        echo "<script>alert('Gagal menyimpan data: " . mysqli_error($conn) . "');</script>";
    }
}

// ==================== 3. MENGAMBIL DATA LAMA UNTUK DITAMPILKAN ====================
// Jika tidak ada ID di URL, kembalikan ke admin
if (!isset($_GET['id']) || empty($_GET['id'])) {
    header("Location: admin_pricelist.php");
    exit();
}

$id = intval($_GET['id']);
// Tarik data layanan berdasarkan ID tersebut
$data = mysqli_query($conn, "SELECT * FROM pricelist WHERE id=$id");

// Jika data tidak ditemukan di database
if (mysqli_num_rows($data) == 0) {
    header("Location: admin_pricelist.php");
    exit();
}

$row = mysqli_fetch_assoc($data); // Menyimpan data ke variabel $row
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edit Layanan - Sollasi Audio & Visual</title>

    <!-- Memanggil Tailwind CSS agar styling selaras dengan halaman depan -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        "primary-dark": "#141E46",
                        "primary-blue": "#27376D",
                        "secondary-yellow": "#FFC436",
                        "light-gray": "#F5F5F5",
                    },
                    fontFamily: {
                        sans: ["Inter", "sans-serif"],
                    },
                },
            },
        };
    </script>
</head>
<body class="bg-light-gray font-sans text-primary-dark min-h-screen flex items-center justify-center p-4">

    <!-- Card Container Minimalis -->
    <div class="bg-white rounded-2xl shadow-xl w-full max-w-2xl p-8 md:p-10 border border-gray-100">
        
        <div class="mb-8 text-center border-b border-gray-100 pb-6">
            <h2 class="text-3xl font-extrabold text-primary-dark mb-2">Edit Layanan</h2>
            <p class="text-sm text-gray-500">Perbarui informasi paket rental Anda di bawah ini.</p>
        </div>
        
        <form method="POST" action="" class="space-y-5">
            <input type="hidden" name="id" value="<?= htmlspecialchars($id); ?>">

            <div>
                <label class="block text-sm font-bold text-primary-dark mb-2">Nama Layanan</label>
                <input type="text" name="nama_layanan" value="<?= htmlspecialchars($row['nama_layanan']); ?>" required
                    class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-primary-blue focus:border-transparent transition-all">
            </div>
            
            <div>
                <label class="block text-sm font-bold text-primary-dark mb-2">Harga <span class="text-gray-400 font-normal">(Angka saja)</span></label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                        <span class="text-gray-500 font-semibold">Rp</span>
                    </div>
                    <input type="number" name="harga" value="<?= htmlspecialchars($row['harga']); ?>" required
                        class="w-full border border-gray-300 rounded-xl pl-12 pr-4 py-3 focus:outline-none focus:ring-2 focus:ring-primary-blue focus:border-transparent transition-all">
                </div>
            </div>
            
            <div>
                <label class="block text-sm font-bold text-primary-dark mb-2">Deskripsi Singkat</label>
                <textarea name="deskripsi" rows="3" 
                    class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-primary-blue focus:border-transparent transition-all resize-none"><?= htmlspecialchars($row['deskripsi']); ?></textarea>
            </div>
            
            <div>
                <label class="block text-sm font-bold text-primary-dark mb-2">Kategori Layanan</label>
                <select name="kategori" required
                    class="w-full border border-gray-300 rounded-xl px-4 py-3 bg-white focus:outline-none focus:ring-2 focus:ring-primary-blue focus:border-transparent transition-all cursor-pointer">
                    <option value="Soundsystem" <?= ($row['kategori'] == 'Soundsystem') ? 'selected' : ''; ?>>Soundsystem</option>
                    <option value="Stage Lighting" <?= ($row['kategori'] == 'Stage Lighting') ? 'selected' : ''; ?>>Stage Lighting</option>
                    <option value="Add ons" <?= ($row['kategori'] == 'Add ons') ? 'selected' : ''; ?>>Add ons</option>
                </select>
            </div>
            
            <div>
                <label class="block text-sm font-bold text-primary-dark mb-2">Data Item</label>
                <input type="text" name="data_item" value="<?= htmlspecialchars($row['data_item']); ?>" required
                    class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-primary-blue focus:border-transparent transition-all mb-2">
                <p class="text-xs text-gray-500 flex items-start gap-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-secondary-yellow flex-shrink-0 mt-0.5"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
                    <span>Format: <strong>Speaker | 2 Unit, Mic | 2 Unit</strong> (Gunakan koma sebagai pemisah item)</span>
                </p>
            </div>
            
            <div class="pt-4 mt-6 border-t border-gray-100 flex flex-col sm:flex-row gap-4 items-center justify-between">
                <a href="admin_pricelist.php" class="text-sm font-semibold text-gray-500 hover:text-primary-blue transition-colors flex items-center group w-full sm:w-auto justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2 group-hover:-translate-x-1 transition-transform"><path d="m15 18-6-6 6-6"/></svg>
                    Batal & Kembali
                </a>
                
                <button type="submit" name="update" class="w-full sm:w-auto bg-primary-dark hover:bg-primary-blue text-white font-bold py-3 px-8 rounded-xl transition-all shadow-md hover:shadow-lg flex items-center justify-center group">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"/><polyline points="17 21 17 13 7 13 7 21"/><polyline points="7 3 7 8 15 8"/></svg>
                    Simpan Perubahan
                </button>
            </div>
        </form>
    </div>

</body>
</html>