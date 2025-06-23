<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>PT. Ananda Lintas Cakrawala</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="text-gray-800">
  <!-- Navbar -->
  <header class="bg-white shadow-md">
    <?php 
        include ('../componen/navbarIndex.php');
    ?>
  </header>

  <!-- Hero Section -->
  <section class="bg-white py-12">
    <div class="container mx-auto px-4 flex flex-col md:flex-row items-center">
      <div class="w-full md:w-1/2 mb-8 md:mb-0">
        <h1 class="text-3xl md:text-4xl font-bold mb-4">Bergabunglah Bersama PT. Ananda Lintas Cakrawala</h1>
        <p class="text-lg text-gray-600">Kami membuka peluang bagi individu berdedikasi dan bersemangat untuk menjadi bagian dari revolusi digital di dunia distribusi.</p>
      </div>
      <div class="w-full md:w-1/2">
        <img src="http://e-recruitment.test/assets/img/meeting.jpg" alt="Team presentation" class="rounded-lg shadow-lg">
      </div>
    </div>
  </section>

  <!-- Why Join Section -->
  <section class="bg-gray-50 py-12">
    <div class="container mx-auto px-4 flex flex-col md:flex-row items-center">
      <div class="w-full md:w-1/2 mb-8 md:mb-0">
        <img src="http://e-recruitment.test/assets/img/wanita.png" alt="Woman smiling" class="rounded-lg">
      </div>
    </div>
  </section>

  <!-- Posisi Ditawarkan -->
  <section class="py-12">
    <div class="container mx-auto px-4 text-center">
      <h2 class="text-2xl font-bold mb-8">Posisi Yang Ditawarkan</h2>
      <div class="grid md:grid-cols-2 gap-6">
        <div class="bg-white rounded-lg shadow p-4">
          <img src="http://e-recruitment.test/assets/img/warehouseST.jpg" class="rounded mb-4" alt="Warehouse Staff">
          <h3 class="font-semibold text-lg">Warehouse Staff</h3>
        </div>
        <div class="bg-white rounded-lg shadow p-4">
          <img src="http://e-recruitment.test/assets/img/officeST.jpg" class="rounded mb-4" alt="Officer Staff">
          <h3 class="font-semibold text-lg">Officer Staff</h3>
        </div>
      </div>
    </div>
  </section>

  <!-- Partner Section -->
  <section class="py-12 bg-gray-50">
    <div class="container mx-auto px-4 text-center">
      <p class="text-lg font-medium mb-4">Berkesempatan Kolaborasi dengan Partner</p>
      <div class="flex flex-wrap justify-center gap-6">
        <img src="https://via.placeholder.com/100x50?text=Nescafe" alt="Nescafe" class="h-12">
        <img src="https://via.placeholder.com/100x50?text=Nestle" alt="Nestle" class="h-12">
        <img src="https://via.placeholder.com/100x50?text=Indofood" alt="Indofood" class="h-12">
        <img src="https://via.placeholder.com/100x50?text=Mayora" alt="Mayora" class="h-12">
        <img src="https://via.placeholder.com/100x50?text=Otsuka" alt="Otsuka" class="h-12">
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-blue-900 text-white py-8">
    <div class="container mx-auto px-4 grid md:grid-cols-2 lg:grid-cols-3 gap-8">
      <div>
        <h4 class="font-semibold text-lg mb-2">Jadilah Mitra Kami</h4>
        <input type="email" placeholder="Email Bisnis Anda" class="w-full p-2 rounded text-black mb-2" />
        <button class="bg-white text-blue-900 px-4 py-2 rounded font-semibold">Kirim</button>
        <p class="text-sm mt-4">Kunjungi Warehouse Kami: <br> Jl. Jagakarsa Raya, RT.014/01, Kel. Jagakarsa</p>
      </div>
      <div>
        <h4 class="font-semibold text-lg mb-2">ANANDA</h4>
        <p>Lintas Cakrawala</p>
        <p class="text-sm">&copy; 2023 Ananda Lintas Cakrawala. All rights reserved.</p>
      </div>
      <div>
        <h4 class="font-semibold text-lg mb-2">Layanan Kami</h4>
        <ul class="space-y-1">
          <li><a href="#" class="hover:underline">Mitra</a></li>
          <li><a href="#" class="hover:underline">Produk Partner</a></li>
          <li><a href="#" class="hover:underline">Karir</a></li>
          <li><a href="#" class="hover:underline">Hubungi Kami</a></li>
        </ul>
        <div class="flex space-x-4 mt-4">
          <a href="#"><i class="text-2xl text-[#E1FFE1] fab fa-facebook"></i></a>
          <a href="#">📱</a>
          <a href="#">📘</a>
          <a href="#">✉️</a>
        </div>
      </div>
    </div>
  </footer>
</body>
</html>
