<?php
include __DIR__. '/controller/userauth.php';
include __DIR__. '/koneksi/koneksi.php';
?>

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
  <header class="bg-white shadow-md py-4">
    <div class="container mx-auto flex justify-between items-center px-4">
      <div class="flex items-center space-x-2">
        <img src="http://e-recruitment.test/assets/img/COMPANY%20LOGO-blue.png" alt="Logo" class="h-10">
        <div class="text-xs text-[#065f73] font-semibold uppercase">PT. ANANDA<br><span class="text-[10px] tracking-widest">Lintas Cakrawala</span></div>
      </div>
      <nav class="space-x-6 hidden md:flex">
        <a href="http://e-recruitment.test/inde.php" class="text-blue-900 font-medium hover:underline">Beranda</a>
        <a href="http://e-recruitment.test/lowonganTersedia.php" class="text-blue-900 font-medium hover:underline">Lowongan Tersedia</a>
        <a href="http://e-recruitment.test/tentang.php" class="text-blue-900 font-medium hover:underline">Tentang</a>
      </nav>
       <div class="getStart flex gap-3">
            <a href="http://e-recruitment.test/view/Login.php" class="bg-blue-900 text-white py-2 px-4 rounded-md font-medium hidden md:block">Login </a>
            <a href="http://e-recruitment.test/view/Register2.php" class="bg-blue-900 text-white py-2 px-4 rounded-md font-medium hidden md:block">Sign up </a>
       </div>
    </div>
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
    <div class="container mx-auto px-4 md:flex-row items-center">
      <div class="w-full md:w-full mb-8 md:mb-0">
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
  <footer>
    <?php 
      include 'componen/footer.php';
    ?>
  </footer>
</body>
</html>
