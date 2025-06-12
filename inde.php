<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ananda Lintas Cakrawala - Lowongan</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alata&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Titan+One&display=swap" rel="stylesheet">
    <style>
      body {
        font-family: 'poppins', sans-serif;
      }
    </style>
  </head>
  <body class="bg-white text-gray-800">
    <!-- Header -->
    <header class="bg-white border-b border-gray-200 px-6 py-4 flex items-center justify-between">
      <div class="flex items-center space-x-2 text-sm">
        <span class="text-blue-800 font-semibold">📞 021 038 778</span>
        <span class="text-gray-400">|</span>
        <span>JL.JAGAKARSA RAYA, RT.014/01,KEL.JAGAKARSA, Jakarta Selatan.</span>
      </div>
    </header>

    <!-- Navbar -->
    <nav class="flex justify-between items-center px-6 py-4 bg-white shadow">
      <div class="flex items-center space-x-2">
        <img src="assets/img/COMPANY LOGO.png" alt="Logo" class="h-10 w-auto" />
        <span class="font-bold text-xl text-blue-900">ANANDA</span>
      </div>
      <div class="flex space-x-6 text-blue-900 font-semibold">
        <a href="#" class="border-b-2 border-blue-900 pb-1">Lowongan</a>
        <a onclick="OnchangeBtn('view/test.php')">Lamaran Saya</a>
        <a href="#">Profil</a>
        <a href="#">Pengumuman</a>
      </div>
    </nav>

    <!-- Main Content -->
    <main class="max-w-6xl mx-auto px-6 py-10 bg-yellow-500 grid grid-cols-4 gap-8">
      <!-- Sidebar -->
      <aside class="col-span-1">
        <h2 class="text-lg font-semibold text-blue-900 mb-2">Lowongan Terbaru</h2>
        <p class="text-gray-400">Masih Terbuka</p>
      </aside>

      <!-- Job Listings -->
      <section class="col-span-3">
        <h3 class="text-sm text-gray-500 mb-4">Lowongan yang sesuai dengan Profil anda</h3>

        <div class="space-y-6">
          <!-- Job Card -->
          <div class="border-b pb-4">
            <a href="#" class="text-lg font-semibold text-blue-900 hover:underline">
              Junior Web Developer (Front-End & Back End)
            </a>
            <p class="text-sm text-gray-600 mt-1">
              Bersedia magang di kantor pusat. Dapat membuat website yang responsive, familiar dengan framework Laravel, Memiliki etos kerja yang tinggi. Bersedia bekerja dikantor.
            </p>
            <div class="text-sm text-blue-600 mt-2 flex justify-between">
              <span>2 jam yang lalu</span>
              <a href="#" class="text-sm italic text-gray-500">lihat selengkapnya...</a>
            </div>
          </div>

          <div class="border-b pb-4">
            <a href="#" class="text-lg font-semibold text-blue-900 hover:underline">
              Software Engineer
            </a>
            <p class="text-sm text-gray-600 mt-1">
              Dapat membuat aplikasi penunjang kantor yang responsive, familiar dengan aplikasi, dapat memodifikasi dan custom sesuai kebutuhan perusahaan. Memiliki etos kerja yang tinggi. Bersedia bekerja dikantor.
            </p>
            <div class="text-sm text-blue-600 mt-2 flex justify-between">
              <span>1 hari yang lalu</span>
              <a href="#" class="text-sm italic text-gray-500">lihat selengkapnya...</a>
            </div>
          </div>

          <div class="border-b pb-4">
            <a href="#" class="text-lg font-semibold text-blue-900 hover:underline">
              UI/UX Designer
            </a>
            <p class="text-sm text-gray-600 mt-1">
              Membuat Design user Interface aplikasi mobile dan web yang responsive interaktif dan user friendly serta mampu membelah lautan.
            </p>
            <div class="text-sm text-blue-600 mt-2 flex justify-between">
              <span>3 hari yang lalu</span>
              <a href="#" class="text-sm italic text-gray-500">lihat selengkapnya...</a>
            </div>
          </div>
        </div>
      </section>
    </main>

    <!-- Footer -->
    <footer class="bg-blue-950 text-white py-10 px-6">
      <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- Mitra -->
        <div>
          <h4 class="text-lg font-semibold mb-2">Jadilah Mitra Kami</h4>
          <input type="email" placeholder="Email Bisnis Anda" class="w-full px-3 py-2 rounded text-gray-900 mb-2" />
          <button class="bg-blue-700 hover:bg-blue-600 px-4 py-2 rounded">Kirim</button>
          <p class="text-sm mt-4">Kunjungi Warehouse Kami</p>
          <p class="text-sm">JL.JAGAKARSA RAYA, RT.014/01, KEL.JAGAKARSA</p>
        </div>

        <!-- Logo Tengah -->
        <div class="flex flex-col items-center">
          <div class="bg-white text-blue-900 px-4 py-6 rounded shadow w-full text-center">
            <p class="font-semibold tracking-wide text-xs">SINCE</p>
            <h3 class="text-2xl font-bold my-2">ANANDA</h3>
            <p class="text-xs tracking-wide">LINTAS CAKRAWALA</p>
            <p class="text-sm mt-2">2010</p>
          </div>
        </div>

        <!-- Layanan Kami -->
        <div>
          <h4 class="text-lg font-semibold mb-2">Layanan Kami</h4>
          <ul class="space-y-1 text-sm">
            <li><a href="#" class="hover:underline">Mitra</a></li>
            <li><a href="#" class="hover:underline">Produk Partner Kami</a></li>
            <li><a href="#" class="hover:underline">Brand Kami</a></li>
            <li><a href="#" class="hover:underline">Karir</a></li>
            <li><a href="#" class="hover:underline">Hubungi Kami</a></li>
          </ul>
          <div class="flex space-x-4 mt-4">
            <a href="#"><img src="/icon-fb.png" alt="Facebook" class="h-5" /></a>
            <a href="#"><img src="/icon-ig.png" alt="Instagram" class="h-5" /></a>
            <a href="#"><img src="/icon-wa.png" alt="WhatsApp" class="h-5" /></a>
            <a href="#"><img src="/icon-yt.png" alt="YouTube" class="h-5" /></a>
          </div>
        </div>
      </div>
      <div class="text-center text-sm text-gray-400 mt-8">
        &copy; 2023 Ananda Lintas Cakrawala. All rights reserved.
      </div>
    </footer>
    <script>
       function OnchangeBtn(page){
        fetch(page)
          .then(response => response.text())
          .then(html => {
            document.querySelector('main').innerHTML = html;
          })
          .catch(error => console.error('Error fetching page:', error));
      }
    </script>
  </body>
</html>
