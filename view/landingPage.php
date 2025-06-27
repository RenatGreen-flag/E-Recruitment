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
  <nav>
    <?php 
        include ('../componen/navbarIndex.php');
    ?>
  </nav>

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
  <footer>
    <?php include '../componen/footer.php' ?>
  </footer>
</body>
</html>
