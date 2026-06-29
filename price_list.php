<?php 
// Memuat koneksi database dari file eksternal sebelum merender HTML
include '../PHP Database/config.php'; 
?>
<!doctype html>
<html lang="id" class="scroll-smooth">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Price List - PD UG Audio & Visual Rental</title>

  <link rel="stylesheet" href="../css/style.css" />

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
<body class="font-sans bg-light-gray text-primary-dark">

  <header class="fixed top-6 left-0 right-0 z-50 px-4 sm:px-6 lg:px-8 transition-all duration-300">
  <div class="max-w-6xl mx-auto bg-white/70 backdrop-blur-lg border border-white/50 rounded-full px-6 py-3 flex justify-between items-center shadow-xl">
    
    <a href="index.php" class="text-xl font-extrabold text-primary-dark tracking-tight hover:text-primary-blue transition duration-300 flex items-center gap-1.5">
      PD UG <span class="font-medium text-primary-blue/80 text-lg">Audio & Visual</span>
    </a>

    <nav class="hidden lg:flex items-center space-x-1">
      <a href="index.php" class="text-primary-dark hover:bg-white/60 px-5 py-2 rounded-full text-sm font-medium transition-all duration-300">Home</a>
      <a href="index.php#services" class="text-primary-dark hover:bg-white/60 px-5 py-2 rounded-full text-sm font-medium transition-all duration-300">Our Services</a>
      <a href="price_list.php" class="bg-secondary-yellow font-bold shadow-md px-5 py-2 rounded-full text-sm transition-all duration-300">Price List</a>
      <a href="index.php#tentangkami" class="text-primary-dark hover:bg-white/60 px-5 py-2 rounded-full text-sm font-medium transition-all duration-300">About Us</a>
    </nav>

    <div class="flex items-center space-x-3">
      <a href="index.php#Feedback" class="hidden sm:flex items-center gap-2 bg-primary-dark hover:bg-primary-blue text-white text-sm font-semibold py-2.5 px-6 rounded-full transition-all duration-300 shadow-md group">
        Hubungi Kami
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="group-hover:translate-x-1 group-hover:-translate-y-1 transition-transform">
          <path d="M7 7h10v10"/><path d="M7 17 17 7"/>
        </svg>
      </a>

      <button id="mobile-menu-button" class="lg:hidden p-2 text-primary-dark hover:bg-white/60 rounded-full transition-colors focus:outline-none" aria-label="Toggle Menu">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <line x1="4" y1="12" x2="20" y2="12"></line>
          <line x1="4" y1="6" x2="20" y2="6"></line>
          <line x1="4" y1="18" x2="20" y2="18"></line>
        </svg>
      </button>
    </div>
  </div>

  <nav id="mobile-menu" class="mobile-menu lg:hidden absolute top-full left-4 right-4 mt-3 bg-white/95 backdrop-blur-xl border border-white/50 rounded-2xl shadow-2xl transition-all duration-300 opacity-0 invisible [&.open]:opacity-100 [&.open]:visible">
    <div class="px-4 py-4 space-y-1 flex flex-col">
      <a href="index.php" class="text-primary-dark hover:bg-primary-blue hover:text-white font-medium p-3 rounded-xl transition duration-150">Home</a>
      <a href="index.php#services" class="text-primary-dark hover:bg-primary-blue hover:text-white font-medium p-3 rounded-xl transition duration-150">Our Services</a>
      <a href="price_list.php" class="bg-secondary-yellow text-primary-dark font-bold p-3 rounded-xl shadow-sm transition duration-150">Price List</a>
      <a href="index.php#tentangkami" class="text-primary-dark hover:bg-primary-blue hover:text-white font-medium p-3 rounded-xl transition duration-150">About Us</a>
      <a href="index.php#Feedback" class="bg-secondary-yellow text-primary-dark font-semibold py-3 px-4 rounded-xl text-center mt-4 block hover:bg-yellow-400 transition duration-150 shadow-md">Hubungi Kami</a>
    </div>
  </nav>
</header>

  <main class="pt-32 pb-16 sm:pt-40 sm:pb-24">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      
      <header class="text-center mb-16">
        <h1 class="text-4xl sm:text-5xl font-extrabold text-primary-dark mb-4">
          Daftar Harga Sewa Peralatan
        </h1>
        <p class="text-xl text-primary-blue/80 max-w-3xl mx-auto">
          *Harga di berikut belum termasuk dengan biaya transportasi pengiriman.
        </p>
      </header>

      <?php
      // 1. Mengambil data dari tabel 'pricelist'
      // Logika ORDER BY menggunakan CASE ini berfungsi untuk mengurutkan prioritas kategori 
      // yang akan tampil lebih dulu (Soundsystem -> Stage Lighting -> Add ons -> Lainnya).
      $query = "SELECT * FROM pricelist ORDER BY CASE 
          WHEN kategori = 'Soundsystem' THEN 1 
          WHEN kategori = 'Stage Lighting' THEN 2 
          WHEN kategori = 'Add ons' THEN 3 
          ELSE 4 
      END ASC, nama_layanan ASC";
      
      $result = mysqli_query($conn, $query);

      // Cek apakah ada data di dalam database
      if (mysqli_num_rows($result) > 0) { 
          
          // Variabel ini digunakan untuk melacak kategori sebelumnya, 
          // sehingga kita tahu kapan harus membuat 'Section/Judul Kategori' baru
          $kategori_sekarang = ""; 
          
          // 2. Looping (Perulangan) data dari database
          while ($row = mysqli_fetch_assoc($result)) { 
              
              // Jika kategori pada baris ini BERBEDA dengan kategori sebelumnya,
              // berarti kita harus membuat Judul Kategori baru dan membungkusnya dalam grid baru.
              if ($kategori_sekarang != $row['kategori']) {
                  
                  // Jika ini BUKAN kategori pertama (sudah ada grid sebelumnya), tutup tag HTML-nya
                  if ($kategori_sekarang != "") {
                      echo "</div></section>"; 
                  }
                  
                  // Update pelacak kategori saat ini (Jika kosong, beri nama 'Lainnya')
                  $kategori_sekarang = !empty($row['kategori']) ? $row['kategori'] : 'Lainnya';
                  
                  // Membuat ID untuk anchor link (contoh: "Stage Lighting" -> "stage-lighting")
                  $id_kategori = strtolower(str_replace(' ', '-', $kategori_sekarang));
                  
                  // Render Judul Kategori
                  echo '<div id="' . $id_kategori . '" class="text-center w-full" style="scroll-margin-top: 120px;">';
                  echo '<h2 class="text-3xl font-bold text-primary-dark mb-10 border-b-4 border-secondary-yellow inline-block mx-auto pb-2 uppercase">';
                  echo htmlspecialchars($kategori_sekarang);
                  echo '</h2></div>';
                  
                  // Buka Section Grid Baru untuk kartu-kartu paket
                  // Perhatikan class 'animate-on-scroll', ini yang memicu animasi JS di bawah
                  echo '<section class="flex justify-center mb-20 animate-on-scroll opacity-0 translate-y-12 transition-all duration-1000 ease-out">';
                  echo '<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 w-full max-w-7xl">';
              }
      ?>

              <article class="package-card bg-white rounded-xl shadow-xl overflow-hidden transition transform hover:scale-[1.02] duration-300">
                
                <div class="bg-primary-blue text-white p-6 text-center h-32 flex flex-col justify-center">
                  <h3 class="text-2xl font-bold"><?= htmlspecialchars($row['nama_layanan']); ?></h3>
                  <p class="text-sm opacity-80 mt-1"><?= htmlspecialchars($row['deskripsi']); ?></p>
                </div>
                
                <div class="p-8 flex flex-col justify-between h-full">
                  <div>
                      <div class="price-box mb-6 text-center">
                        <span class="text-4xl font-extrabold text-secondary-yellow">
                          Rp <?= number_format($row['harga'], 0, ',', '.'); ?>
                        </span>
                      </div>

                      <?php if (!empty($row['data_item'])) { ?>
                          <h4 class="text-lg font-bold text-primary-dark border-b pb-2 mb-3">Daftar Item</h4>
                          <ul class="space-y-2 text-gray-700 list-none mb-8">
                              <?php 
                              // Memecah teks item yang dipisah koma (contoh: "Mic, Kabel, Stand") menjadi Array
                              $items = explode(',', $row['data_item']);
                              
                              // Melakukan loop untuk mencetak setiap item ke dalam tag <li>
                              foreach ($items as $item) { 
                              ?>
                              <li class="flex items-start">
                                <svg class="w-5 h-5 mr-2 text-secondary-yellow flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <?= htmlspecialchars(trim($item)); ?>
                              </li>
                              <?php } ?>
                          </ul>
                      <?php } ?>
                  </div>

                  <div class="mt-auto pt-6">
                      <a href="https://wa.me/6285717300974?text=Halo%20PD%20UG%20Audio,%20saya%20tertarik%20dengan%20paket%20<?= urlencode($row['nama_layanan']); ?>" 
                         class="flex items-center justify-center gap-2 w-full py-3 px-4 border-2 border-primary-dark text-primary-dark rounded-xl font-bold hover:bg-primary-dark hover:text-white transition-all duration-300 group">
                          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="group-hover:scale-110 transition-transform">
                              <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                          </svg>
                          Pesan Paket Ini
                      </a>
                  </div>
                </div>
              </article>

      <?php 
          } // Akhir dari perulangan baris (while)
          
          // Setelah perulangan selesai, pastikan menutup grid kategori yang terakhir dibuat
          if ($kategori_sekarang != "") {
              echo "</div></section>";
          }
          
      } else { 
          // Jika database kosong, tampilkan pesan ini
      ?>
          <p class="text-center text-gray-500">Belum ada daftar layanan saat ini.</p>
      <?php } ?>

    </div>
  </main>

  <footer class="bg-primary-dark text-gray-400 py-8 text-center">
    <p>© 2026 PD UG Audio & Visual Rental. All rights reserved.</p>
  </footer>

  <script>
    document.addEventListener("DOMContentLoaded", function() {
      // Intersection Observer API digunakan untuk mendeteksi apakah suatu elemen 
      // sudah masuk ke dalam area pandang pengguna (viewport/layar).
      const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          // Jika elemen ber-class 'animate-on-scroll' terlihat di layar
          if (entry.isIntersecting) {
            // Hapus class transparan dan posisi turun (Tailwind classes)
            entry.target.classList.remove('opacity-0', 'translate-y-12');
            // Tambahkan class agar elemen muncul penuh ke posisi aslinya
            entry.target.classList.add('opacity-100', 'translate-y-0');
          }
        });
      }, {
        threshold: 0.15 // Animasi akan dipicu ketika minimal 15% dari elemen sudah terlihat di layar
      });

      // Mencari semua elemen yang memiliki class 'animate-on-scroll'
      // dan meminta observer untuk mulai memantaunya.
      document.querySelectorAll('.animate-on-scroll').forEach((element) => {
        observer.observe(element);
      });
    });
  </script>

<script>
  document.addEventListener("DOMContentLoaded", () => {
    // Mengambil elemen tombol dan menu mobile berdasarkan ID
    const button = document.getElementById("mobile-menu-button");
    const menu = document.getElementById("mobile-menu");

    // Menambahkan event click untuk memunculkan/menyembunyikan menu
    if(button && menu) {
        button.addEventListener("click", () => {
          menu.classList.toggle("open");
        });
    }
  });
</script>
</body>
</html>