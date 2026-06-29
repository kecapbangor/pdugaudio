<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>PD UG Audio - Rental Sound & Lighting</title>

  <link rel="stylesheet" href="../css/style.css" />
  
  <script src="https://cdn.tailwindcss.com"></script>
  
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            "primary-dark": "#141E46",      // Warna biru tua utama
            "primary-blue": "#27376D",      // Warna biru sedang
            "secondary-yellow": "#FFC436",  // Warna aksen kuning
            "light-gray": "#F5F5F5",        // Warna background terang
            "placeholder-gray": "#E0E0E0",  // Warna abu-abu untuk kotak gambar
            "soft-blue": "#edf2f7",         // Warna biru lembut
            "card-dark-blue": "#1D2A57",    // Warna untuk kartu
            "premium-bg": "#141E46",        // Background paket premium
          },
          fontFamily: {
            sans: ["Inter", "sans-serif"],
          },
        },
      },
    };
  </script>
</head>

<body class="font-sans bg-white text-primary-dark">

  <header class="fixed top-6 left-0 right-0 z-50 px-4 sm:px-6 lg:px-8 transition-all duration-300">
    <!-- Single Glassmorphism Bar -->
    <div class="max-w-6xl mx-auto bg-white/70 backdrop-blur-lg border border-white/50 rounded-full px-6 py-3 flex justify-between items-center shadow-xl">
      
      <!-- Minimalist Brand Text -->
      <a href="#" class="text-xl font-extrabold text-primary-dark tracking-tight hover:text-primary-blue transition duration-300 flex items-center gap-1.5">
        PD UG <span class="font-medium text-primary-blue/80 text-lg">Audio & Visual</span>
      </a>

      <!-- Center Navigation -->
      <nav class="hidden lg:flex items-center space-x-1">
  <a href="#" class="nav-item text-primary-dark hover:bg-white/60 px-5 py-2 rounded-full text-sm font-medium transition-all duration-300">Home</a>
  <a href="index.php#services" class="nav-item text-primary-dark hover:bg-white/60 px-5 py-2 rounded-full text-sm font-medium transition-all duration-300">Our Services</a>
  <a href="price_list.php" class="nav-item text-primary-dark hover:bg-white/60 px-5 py-2 rounded-full text-sm font-medium transition-all duration-300">Price List</a>
  <a href="index.php#tentangkami" class="nav-item text-primary-dark hover:bg-white/60 px-5 py-2 rounded-full text-sm font-medium transition-all duration-300">About Us</a>
</nav>

      <!-- Right Button & Mobile Toggle -->
      <div class="flex items-center space-x-3">
        <!-- Solid Call-to-Action Button inside the glass bar -->
        <a href="#Feedback" class="hidden sm:flex items-center gap-2 bg-primary-dark hover:bg-primary-blue text-white text-sm font-semibold py-2.5 px-6 rounded-full transition-all duration-300 shadow-md group">
          Hubungi Kami
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="group-hover:translate-x-1 group-hover:-translate-y-1 transition-transform">
            <path d="M7 7h10v10"/><path d="M7 17 17 7"/>
          </svg>
        </a>

        <!-- Mobile Menu Button -->
        <button id="mobile-menu-button" class="lg:hidden p-2 text-primary-dark hover:bg-white/60 rounded-full transition-colors focus:outline-none" aria-label="Toggle Menu">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <line x1="4" y1="12" x2="20" y2="12"></line>
            <line x1="4" y1="6" x2="20" y2="6"></line>
            <line x1="4" y1="18" x2="20" y2="18"></line>
          </svg>
        </button>
      </div>
    </div>

    <!-- Mobile Menu Dropdown -->
    <nav id="mobile-menu" class="mobile-menu lg:hidden absolute top-full left-4 right-4 mt-3 bg-white/95 backdrop-blur-xl border border-white/50 rounded-2xl shadow-2xl transition-all duration-300 opacity-0 invisible [&.open]:opacity-100 [&.open]:visible">
      <div class="px-4 py-4 space-y-1 flex flex-col">
        <a href="#" class="bg-primary-blue/10 text-primary-dark font-semibold p-3 rounded-xl shadow-sm transition duration-150">Home</a>
        <a href="index.php#services" class="text-primary-dark hover:bg-primary-blue hover:text-white font-medium p-3 rounded-xl transition duration-150">Our Services</a>
        <a href="price_list.php" class="text-primary-dark hover:bg-primary-blue hover:text-white font-medium p-3 rounded-xl transition duration-150">Price List</a>
        <a href="index.php#tentangkami" class="text-primary-dark hover:bg-primary-blue hover:text-white font-medium p-3 rounded-xl transition duration-150">About Us</a>
        <a href="#Feedback" class="bg-secondary-yellow text-primary-dark font-semibold py-3 px-4 rounded-xl text-center mt-4 block hover:bg-yellow-400 transition duration-150 shadow-md">Hubungi Kami</a>
      </div>
    </nav>
  </header>

  <main>
    
    <section id="hero-section" class="h-[70vh] flex items-center">
      <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-white max-w-4xl animate-on-scroll opacity-0 translate-y-12 transition-all duration-1000 ease-out">
        <h1 class="text-4xl sm:text-5xl md:text-5xl font-extrabold leading-tight mb-4">
          PD UG Audio & Visual Rental
          <br />
          <span class="text-5xl text-secondary-yellow">Solusi Alat Event Terpercaya</span>
        </h1>
        <p class="text-lg sm:text-xl mb-8 opacity-90">
          Layanan Rental Sound System, Lighting, Dan Alat Event Lainnya.
        </p>
        <a href="https://wa.me/625717300974?text=Halo%20PD%20UG%20Audio,%20saya%20tertarik%20untuk%20melakukan%20pemesanan%20alat%20event.%20Bisa%20bantu%20jelaskan%20prosedurnya?" class="inline-block bg-secondary-yellow hover:bg-yellow-400 text-primary-dark text-lg font-bold py-3 px-8 rounded-full transition duration-300 transform hover:scale-105 shadow-xl">
          Pesan Sekarang
        </a>
      </div>
    </section>

    <section class="py-16 sm:py-24 bg-white">
      <div id="tentangkami" class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
          
          <div class="lg:sticky lg:top-24">
            <p class="text-primary-blue font-semibold uppercase text-sm mb-3">About US</p>
            <h2 class="text-4xl md:text-5xl font-extrabold leading-tight mb-8">
              Kami Hadir & Terlibat Sejak <span class="text-primary-blue">Ide Pertama Muncul</span>
            </h2>

            <div class="space-y-8">
              <div class="flex items-start space-x-4">
                <div class="w-12 h-12 flex-shrink-0 flex items-center justify-center rounded-xl bg-blue-50 border border-primary-blue/30 text-primary-blue p-2">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-award">
                    <circle cx="12" cy="8" r="6" />
                    <path d="M15.477 12.89 17 22l-5-3-5 3 1.523-9.11" />
                  </svg>
                </div>
                <div>
                  <h3 class="text-xl font-bold mb-1">Kualitas Produksi</h3>
                  <p class="text-gray-600">Standar Produksi Teruji, Audio & Visual Profesional. Kami memastikan sistem tata suara, pencahayaan, dan perangkat live streaming bekerja optimal sesuai spesifikasi. Konsistensi dan keandalan adalah janji kami pada setiap event.</p>
                </div>
              </div>

              <div class="flex items-start space-x-4">
                <div class="w-12 h-12 flex-shrink-0 flex items-center justify-center rounded-xl bg-blue-50 border border-primary-blue/30 text-primary-blue p-2">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-tag">
                    <path d="M12.586 2.586A2 2 0 0 0 11.172 2H4a2 2 0 0 0-2 2v7.172a2 2 0 0 0 .586 1.414l8.586 8.586a2 2 0 0 0 2.828 0l7.172-7.172a2 2 0 0 0 0-2.828l-8.586-8.586z" />
                    <circle cx="7.5" cy="7.5" r=".5" fill="currentColor" />
                  </svg>
                </div>
                <div>
                  <h3 class="text-xl font-bold mb-1">Harga Terbaik</h3>
                  <p class="text-gray-600">Harga Optimal untuk Kualitas yang Diharapkan. Dapatkan paket sewa yang transparan dan kompetitif, dirancang untuk memberikan nilai terbaik sesuai anggaran Anda. Kami mengutamakan kualitas gear yang terawat.</p>
                </div>
              </div>

              <div class="flex items-start space-x-4">
                <div class="w-12 h-12 flex-shrink-0 flex items-center justify-center rounded-xl bg-blue-50 border border-primary-blue/30 text-primary-blue p-2">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-users">
                    <path d="M16 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2" />
                    <circle cx="12" cy="7" r="4" />
                    <path d="M21 21v-2a4 4 0 0 0-3-3.87" />
                    <path d="M21 7a4 4 0 0 0-4-4" />
                  </svg>
                </div>
                <div>
                  <h3 class="text-xl font-bold mb-1">Team Berpengalaman</h3>
                  <p class="text-gray-600">Partner Teknis yang Sigap dan Berpengalaman. Tim PDUG Audio & Visual siap bekerja sama dengan event organizer Anda. Kami menjamin kesiapan teknis 100% dan respon cepat terhadap kebutuhan di lapangan.</p>
                </div>
              </div>
            </div>
          </div>

          <div class="relative group">
            <div class="relative w-full aspect-[4/3] sm:aspect-video lg:aspect-square bg-placeholder-gray shadow-xl overflow-hidden" style="border-top-left-radius: 3rem; border-bottom-right-radius: 3rem;">
              
              <div id="sliderWrapper" class="flex transition-transform duration-700 ease-in-out h-full w-full">
                <img src="../img/WhatsApp Image 2025-10-21 at 01.49.45_d9781025.jpg" class="w-full h-full object-cover flex-shrink-0" alt="Portfolio 1">
                <img src="../img/WhatsApp Image 2025-10-21 at 01.49.46_92abe03a.jpg" class="w-full h-full object-cover flex-shrink-0" alt="Portfolio 2">
              </div>

              <button onclick="prevSlide()" class="absolute left-3 top-1/2 -translate-y-1/2 bg-white/80 hover:bg-white p-2 rounded-full shadow-md opacity-0 group-hover:opacity-100 transition-all z-30">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m15 18-6-6 6-6"/></svg>
              </button>
              <button onclick="nextSlide()" class="absolute right-3 top-1/2 -translate-y-1/2 bg-white/80 hover:bg-white p-2 rounded-full shadow-md opacity-0 group-hover:opacity-100 transition-all z-30">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
              </button>

              <div id="sliderDots" class="absolute bottom-3 left-1/2 -translate-x-1/2 flex space-x-1.5 z-30"></div>
            </div>

            <a href="#" class="absolute top-[270px] left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-white text-primary-dark font-semibold py-3 px-8 rounded-full shadow-lg border-2 border-primary-blue hover:bg-primary-blue hover:text-white transition duration-200 z-20">
              Info Lebih Lanjut
            </a>
          </div>

        </div>
      </div>
    </section>

    <section class="pt-16 pb-16 sm:pt-24 sm:pb-20 bg-light-gray relative" id="services">
      <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl md:text-4xl font-extrabold leading-tight max-w-10xl mx-auto mb-12 text-white animate-on-scroll opacity-0 translate-y-12 transition-all duration-1000 ease-out">
          Partner Rental Event Profesional & Solusi Terpercaya se-Jabodetabek
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 animate-on-scroll opacity-0 translate-y-12 transition-all duration-1000 ease-out" style="transition-delay: 200ms;">
          
          <div class="service-card bg-white p-8 rounded-2xl shadow-lg text-left border border-gray-100">
            <div class="w-14 h-14 flex items-center justify-center rounded-2xl bg-primary-blue text-white mb-6">
              <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-speaker">
                <rect width="16" height="20" x="4" y="2" rx="2" />
                <circle cx="12" cy="14" r="3" />
                <circle cx="12" cy="7" r="1" />
              </svg>
            </div>
            <h3 class="text-xl font-bold mb-3 text-primary-dark">Rental Sound System</h3>
            <p class="text-gray-600 text-sm mb-4">Menyediakan berbagai paket sound system mulai dari kapasitas kecil hingga konser besar. Kualitas audio terbaik terjamin.</p>
            <a href="price_list.php#soundsystem" class="text-primary-blue text-sm font-semibold flex items-center group">
              Cek Harga
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="ml-2 group-hover:translate-x-1 transition duration-150">
                <path d="M5 12h14" />
                <path d="m12 5 7 7-7 7" />
              </svg>
            </a>
          </div>

          <div class="service-card bg-white p-8 rounded-2xl shadow-lg text-left border border-gray-100">
            <div class="w-14 h-14 flex items-center justify-center rounded-2xl bg-primary-blue text-white mb-6">
              <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-spotlight">
                <path d="M12 2v2" />
                <path d="m4.93 4.93 1.41 1.41" />
                <path d="M20 12h2" />
                <path d="m19.07 4.93-1.41 1.41" />
                <path d="M2 12h2" />
                <path d="m6.34 17.66-1.41 1.41" />
                <path d="M12 20v2" />
                <path d="m17.66 17.66 1.41 1.41" />
                <path d="m12 12-4 4" />
                <path d="m16 8-4 4" />
              </svg>
            </div>
            <h3 class="text-xl font-bold mb-3 text-primary-dark">Rental Stage Lighting</h3>
            <p class="text-gray-600 text-sm mb-4">Solusi pencahayaan untuk menciptakan suasana yang tepat, mulai dari lampu, hingga efek visual panggung.</p>
            <a href="price_list.php#stage-lighting" class="text-primary-blue text-sm font-semibold flex items-center group">
              Cek Harga
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="ml-2 group-hover:translate-x-1 transition duration-150">
                <path d="M5 12h14" />
                <path d="m12 5 7 7-7 7" />
              </svg>
            </a>
          </div>

          <div class="service-card bg-white p-8 rounded-2xl shadow-lg text-left border border-gray-100">
            <div class="w-14 h-14 flex items-center justify-center rounded-2xl bg-primary-blue text-white mb-6">
              <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-users">
                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                <circle cx="9" cy="7" r="4" />
                <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                <path d="M16 3.13a4 4 0 0 1 0 7.75" />
              </svg>
            </div>
            <h3 class="text-xl font-bold mb-3 text-primary-dark">Jasa Operator & Teknisi</h3>
            <p class="text-gray-600 text-sm mb-4">Didukung oleh tim teknisi berpengalaman untuk memastikan kelancaran setiap acara dari awal hingga akhir.</p>
            <a href="price_list.php#add-ons" class="text-primary-blue text-sm font-semibold flex items-center group">
              Cek Harga
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="ml-2 group-hover:translate-x-1 transition duration-150">
                <path d="M5 12h14" />
                <path d="m12 5 7 7-7 7" />
              </svg>
            </a>
          </div>

          <div class="service-card bg-white p-8 rounded-2xl shadow-lg text-left border border-gray-100">
            <div class="w-14 h-14 flex items-center justify-center rounded-2xl bg-primary-blue text-white mb-6">
              <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-radio">
                <path d="M12 6H8a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h4a2 2 0 0 0 2-2V8a2 2 0 0 0-2-2Z" />
                <path d="M9 2v4" />
                <path d="M10 10h.01" />
                <path d="M10 14h.01" />
                <path d="M14 12h1" />
                <path d="M14 15h1" />
              </svg>
            </div>
            <h3 class="text-xl font-bold mb-3 text-primary-dark">Rental Alat Event Lainnya</h3>
            <p class="text-gray-600 text-sm mb-4">Menyediakan rental kebutuhan alat event anda yang optimal sesuai dengan jenis kebutuhan, dan anggaran acara Anda.</p>
            <a href="price_list.php#add-ons" class="text-primary-blue text-sm font-semibold flex items-center group">
              Cek Harga
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="ml-2 group-hover:translate-x-1 transition duration-150">
                <path d="M5 12h14" />
                <path d="m12 5 7 7-7 7" />
              </svg>
            </a>
          </div>

        </div> </div> </section>
    

  <section id="Feedback" class="py-16 sm:py-20 bg-light-gray">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">

      <div class="max-w-4xl mx-auto bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden grid grid-cols-1 lg:grid-cols-5">

        <!-- Kiri: Info strip -->
        <div class="lg:col-span-2 bg-primary-dark text-white p-7 flex flex-col gap-6">
          <div>
            <span class="text-[10px] font-bold tracking-[0.2em] uppercase text-secondary-yellow">Konsultasi Gratis</span>
            <h2 class="text-xl font-extrabold leading-snug mt-2 mb-2">
              Hubungi Kami Sekarang
            </h2>
            <p class="text-white/60 text-xs leading-relaxed">
              Tim kami akan segera menghubungi Anda via WhatsApp.
            </p>
          </div>

          <ul class="space-y-3 text-xs text-white/75">
            <li class="flex items-center gap-2.5">
              <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#FFC436" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
              Melayani se-Jabodetabek
            </li>
            <li class="flex items-center gap-2.5">
              <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#FFC436" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
              Respons cepat via WhatsApp
            </li>
            <li class="flex items-center gap-2.5">
              <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#FFC436" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
              Peralatan terawat & bergaransi
            </li>
          </ul>

          <div class="mt-auto pt-5 border-t border-white/10">
            <a href="https://www.instagram.com/pdug.audio/" target="_blank" class="flex items-center gap-2 text-xs text-white/50 hover:text-secondary-yellow transition-colors">
              <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>
              @pdug.audio
            </a>
          </div>
        </div>

        <!-- Kanan: Form -->
        <div class="lg:col-span-3 p-7">
          <form id="formWhatsApp" onsubmit="kirimKeWhatsApp(event)" class="space-y-3.5">

            <div class="grid grid-cols-2 gap-3">
              <div>
                <label for="wa-nama" class="block text-[10px] font-bold mb-1 text-gray-400 uppercase tracking-widest">Nama</label>
                <input type="text" id="wa-nama" required class="w-full px-3 py-2 rounded-lg border border-gray-200 focus:outline-none focus:border-primary-blue focus:ring-1 focus:ring-primary-blue/20 transition-all bg-gray-50 text-primary-dark text-sm" placeholder="Nama Anda">
              </div>
              <div>
                <label for="wa-perusahaan" class="block text-[10px] font-bold mb-1 text-gray-400 uppercase tracking-widest">Organisasi</label>
                <input type="text" id="wa-perusahaan" required class="w-full px-3 py-2 rounded-lg border border-gray-200 focus:outline-none focus:border-primary-blue focus:ring-1 focus:ring-primary-blue/20 transition-all bg-gray-50 text-primary-dark text-sm" placeholder="BEM / PT ...">
              </div>
            </div>

            <div class="grid grid-cols-2 gap-3">
              <div>
                <label for="wa-peruntukan" class="block text-[10px] font-bold mb-1 text-gray-400 uppercase tracking-widest">Peruntukan</label>
                <input type="text" id="wa-peruntukan" required class="w-full px-3 py-2 rounded-lg border border-gray-200 focus:outline-none focus:border-primary-blue focus:ring-1 focus:ring-primary-blue/20 transition-all bg-gray-50 text-primary-dark text-sm" placeholder="Konser, Seminar...">
              </div>
              <div>
                <label for="wa-nomor" class="block text-[10px] font-bold mb-1 text-gray-400 uppercase tracking-widest">No. WhatsApp</label>
                <input type="tel" id="wa-nomor" required class="w-full px-3 py-2 rounded-lg border border-gray-200 focus:outline-none focus:border-primary-blue focus:ring-1 focus:ring-primary-blue/20 transition-all bg-gray-50 text-primary-dark text-sm" placeholder="08xxxxxxxxx">
              </div>
            </div>

            <div>
              <label for="wa-kebutuhan" class="block text-[10px] font-bold mb-1 text-gray-400 uppercase tracking-widest">Kebutuhan</label>
              <textarea id="wa-kebutuhan" required rows="3" class="w-full px-3 py-2 rounded-lg border border-gray-200 focus:outline-none focus:border-primary-blue focus:ring-1 focus:ring-primary-blue/20 transition-all bg-gray-50 text-primary-dark text-sm resize-none" placeholder="Ceritakan kebutuhan alat atau paket Anda..."></textarea>
            </div>

            <button type="submit" class="w-full flex items-center justify-center gap-2 bg-primary-dark hover:bg-primary-blue text-white font-bold py-2.5 px-5 rounded-lg transition-all duration-200 text-sm mt-1">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512" fill="currentColor">
                <path d="M414.73,97.1A222.14,222.14,0,0,0,256.94,32C134,32,33.92,131.58,33.87,254A220.61,220.61,0,0,0,63.65,365L32,480l118.25-30.87a223.63,223.63,0,0,0,106.6,27h.09c122.93,0,223-99.59,223.06-222A220.18,220.18,0,0,0,414.73,97.1ZM256.94,438.66h-.08a185.75,185.75,0,0,1-94.36-25.72l-6.77-4L85.56,427.26l18.73-68.09-4.41-7A183.46,183.46,0,0,1,71.53,254c0-101.73,83.21-184.5,185.48-184.5A185,185,0,0,1,442.34,254.14C442.3,355.88,359.13,438.66,256.94,438.66Z"/>
              </svg>
              Chat di WhatsApp Sekarang!
            </button>

          </form>
        </div>

      </div>
    </div>
  </section>

    <!-- Script Logika WhatsApp -->
    <script>
      function kirimKeWhatsApp(event) {
        event.preventDefault(); // Mencegah form melakukan refresh halaman

        // Mengambil data dari inputan form
        const nama = document.getElementById('wa-nama').value;
        const perusahaan = document.getElementById('wa-perusahaan').value;
        const peruntukan = document.getElementById('wa-peruntukan').value;
        const nomor = document.getElementById('wa-nomor').value;
        const kebutuhan = document.getElementById('wa-kebutuhan').value;

        // Menyusun format pesan
        const pesan = `Halo PD UG Audio & Visual, saya tertarik untuk menyewa alat event. Berikut detail data saya:\n\n` +
                      `*Nama:* ${nama}\n` +
                      `*Perusahaan / Organisasi:* ${perusahaan}\n` +
                      `*Peruntukan:* ${peruntukan}\n` +
                      `*Kebutuhan:* ${kebutuhan}\n` +
                      `*Nomor WhatsApp:* ${nomor}\n\n` +
                      `Mohon info lebih lanjutnya. Terima kasih.`;

        // Nomor WhatsApp tujuan (gunakan kode negara 62)
        const nomorTujuan = "6285717300974"; 

        // Membuat URL WhatsApp dengan data yang di-encode
        const urlWhatsApp = `https://wa.me/${nomorTujuan}?text=${encodeURIComponent(pesan)}`;

        // Membuka tab baru yang mengarah ke WhatsApp
        window.open(urlWhatsApp, '_blank');
      }
    </script>
  </main>

  <footer class="bg-primary-dark pt-16 pb-8 text-gray-400">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-2 md:grid-cols-4 gap-10 border-b border-gray-700 pb-12">
        
        <div>
          <h3 class="text-2xl font-bold text-secondary-yellow mb-4">
            PD UG <span class="text-white">Audio & Visual Rental.</span>
          </h3>
          <p class="text-sm leading-relaxed max-w-xs">
            Solusi Audio, Lighting, Dan Alat Profesional Untuk Setiap Acara Anda.
          </p>
        </div>

        <div>
          <h4 class="text-lg font-bold text-secondary-yellow mb-4">Services</h4>
          <ul class="space-y-2 text-sm">
            <li><a href="price_list.php#soundsystem" class="hover:text-white transition duration-150">Sewa Sound System</a></li>
            <li><a href="price_list.php#stage-lighting" class="hover:text-white transition duration-150">Sewa Stage Lighting</a></li>
            <li><a href="price_list.php#add-ons" class="hover:text-white transition duration-150">Jasa Operator</a></li>
            <li><a href="price_list.php#add-ons" class="hover:text-white transition duration-150">Sewa Alat Event</a></li>
          </ul>
        </div>

        <div>
          <h4 class="text-lg font-bold text-secondary-yellow mb-4">About Us</h4>
          <ul class="space-y-2 text-sm">
            <li><a href="index.php#tentangkami" class="hover:text-white transition duration-150">Portofolio</a></li>
          </ul>
        </div>

        <div>
          <h4 class="text-lg font-bold text-secondary-yellow mb-4">Contact</h4>
          <ul class="space-y-2 text-sm">
            <li> 
              <a href="https://maps.app.goo.gl/XtxkrFrE7EVAYb616" class="flex items-start">
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2 mt-1 flex-shrink-0">
                  <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z" />
                  <circle cx="12" cy="10" r="3" />
                </svg>
                Jl. Sirsak No.22, RT.001/RW.003, Pondok Cina, Kecamatan Beji, Kota Depok, Jawa Barat 16424
              </a>
            </li> 
            <li> 
              <a href="https://www.instagram.com/pdug.audio/" class="flex items-center font-semibold">
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2 flex-shrink-0">
                  <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                  <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                  <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                </svg>
                pdug.audio
              </a>
            </li>
          </ul>
        </div>

      </div>

      <div class="text-center pt-8 text-xs text-gray-500">
        © 2026 PD UG Audio. Hak Cipta Dilindungi.
      </div>
    </div>
  </footer>

  <script>
    document.addEventListener("DOMContentLoaded", () => {
      // Mengambil elemen tombol dan menu mobile berdasarkan ID
      const button = document.getElementById("mobile-menu-button");
      const menu = document.getElementById("mobile-menu");

      // Menambahkan event click untuk memunculkan/menyembunyikan menu
      button.addEventListener("click", () => {
        menu.classList.toggle("open");
      });
    });
  </script>

  <script>
    // Inisialisasi elemen DOM yang dibutuhkan slider
    const wrapper = document.getElementById('sliderWrapper');
    const dotsContainer = document.getElementById('sliderDots');
    let currentIndex = 0;
    const slides = wrapper.querySelectorAll('img');
    const totalSlides = slides.length;
    let slideInterval;

    // Fungsi setup awal saat slider pertama dimuat
    function initSlider() {
      // Buat elemen indikator titik (dot navigasi) dinamis sesuai jumlah gambar
      for (let i = 0; i < totalSlides; i++) {
        const dot = document.createElement('div');
        dot.className = `h-2 transition-all duration-300 rounded-full cursor-pointer ${i === 0 ? 'bg-white w-6' : 'bg-white/50 w-2'}`;
        dot.onclick = () => goToSlide(i);
        dotsContainer.appendChild(dot);
      }
      startAutoSlide(); // Mulai rotasi otomatis
    }

    // Fungsi untuk memperbarui tampilan gambar dan titik yang aktif
    function updateSlider() {
      wrapper.style.transform = `translateX(-${currentIndex * 100}%)`;
      const dots = dotsContainer.querySelectorAll('div');
      dots.forEach((dot, i) => {
        if (i === currentIndex) {
          dot.classList.replace('w-2', 'w-6');
          dot.classList.replace('bg-white/50', 'bg-white');
        } else {
          dot.classList.replace('w-6', 'w-2');
          dot.classList.replace('bg-white', 'bg-white/50');
        }
      });
    }

    // Fungsi untuk geser ke gambar berikutnya
    function nextSlide() {
      currentIndex = (currentIndex + 1) % totalSlides;
      updateSlider();
    }

    // Fungsi untuk geser ke gambar sebelumnya
    function prevSlide() {
      currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
      updateSlider();
    }

    // Fungsi untuk melompat ke gambar spesifik berdasarkan klik dot
    function goToSlide(index) {
      currentIndex = index;
      updateSlider();
      resetTimer(); // Reset timer auto-slide agar tidak ganti tiba-tiba setelah diklik
    }

    // Fungsi untuk menjalankan auto-slide setiap 5 detik
    function startAutoSlide() {
      slideInterval = setInterval(nextSlide, 5000);
    }

    // Fungsi mereset timer (dipakai saat user interaksi manual)
    function resetTimer() {
      clearInterval(slideInterval);
      startAutoSlide();
    }

    // Jalankan inisialisasi jika ada gambar di dalam slider
    if(totalSlides > 0) initSlider();
  </script>


<script>
    document.addEventListener("DOMContentLoaded", function() {
      const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.classList.remove('opacity-0', 'translate-y-12');
            entry.target.classList.add('opacity-100', 'translate-y-0');
          }
        });
      }, {
        threshold: 0.15
      });

      document.querySelectorAll('.animate-on-scroll').forEach((element) => {
        observer.observe(element);
      });
    });
  </script>

  <script>
  document.addEventListener("DOMContentLoaded", () => {
    // Menangkap semua link navbar yang memiliki class 'nav-item'
    const navItems = document.querySelectorAll(".nav-item");
    const path = window.location.pathname;

    // Fungsi utama untuk mengatur warna aktif
    const setActive = (targetHref) => {
      navItems.forEach(item => {
        // 1. Hapus efek kuning dari semua menu (Reset)
        item.classList.remove("bg-secondary-yellow", "font-bold", "shadow-md");
        // 2. Kembalikan efek hover default bawaan
        item.classList.add("hover:bg-white/60", "font-medium");

        // 3. Jika href pada menu cocok dengan posisi saat ini, beri warna kuning
        if (item.getAttribute("href") === targetHref) {
          item.classList.remove("hover:bg-white/60", "font-medium"); // Buang hover putih
          item.classList.add("bg-secondary-yellow", "font-bold", "shadow-md"); // Tambah kuning
        }
      });
    };

    // Pengecekan Halaman
    if (path.includes("price_list.php")) {
      // Jika pengguna sedang berada di halaman Price List
      setActive("price_list.php");
    } else {
      // Jika pengguna berada di Home (index.php), gunakan sensor Scroll
      const sections = [
        { id: "hero-section", href: "#" },
        { id: "services", href: "index.php#services" },
        { id: "tentangkami", href: "index.php#tentangkami" }
      ];

      window.addEventListener("scroll", () => {
        let currentHref = "#"; // Default selalu Home di paling atas

        sections.forEach(sec => {
          const el = document.getElementById(sec.id);
          if (el) {
            // Membaca posisi elemen di layar
            const rect = el.getBoundingClientRect(); 
            // Jika bagian atas elemen sudah mencapai 1/3 layar atas
            if (rect.top <= window.innerHeight / 3 && rect.bottom >= window.innerHeight / 3) {
              currentHref = sec.href;
            }
          }
        });
        
        setActive(currentHref); // Terapkan warna
      });

      // Panggil fungsi sekali saat halaman baru saja dimuat
      window.dispatchEvent(new Event("scroll"));
    }
  });
</script>
</body>
</html>