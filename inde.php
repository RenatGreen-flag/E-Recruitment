<?php
include __DIR__. '/controller/userauth.php';
include __DIR__. '/koneksi/koneksi.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT. Ananda Lintas Cakrawala</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alata&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Titan+One&display=swap" rel="stylesheet">
    
    <style>
        :root{
            /*Variabel color*/
            --var-color-tersier: #035F79;
            --var-color-font-gray: #666666;
            --var-color-font-tosca: #D4FADB; 
            --var-color-font-red: #D23201; 
            --var-color-1: #1F4E78;
            --var-color-darkblue: #001F3F;
            --var-col-btn-green: #34C759;
            --var-col-btn-orange: #FF9500;
            --var-font-basic: poppins ;
        }
        header{
            background-color: var(--var-color-tersier);
        }
    </style>
</head>
<body class="font-poppins antialiased text-gray-800">

    
    
    <!-- Navbar -->
    <nav>
      <?php 
        include ('componen/navbarIndex.php');
      ?>
    </nav>

    <!-- Hero Section -->
    <section class="flex flex-col md:flex-row items-center justify-between px-8 py-12 bg-gray-50">
        <div class="md:w-1/2 space-y-4">
            <h1 class="text-3xl font-bold text-gray-800 leading-snug">
                Selamat <br><?= $_SESSION['nama'] ?>
            </h1>
            <p class="text-blue-800 text-sm">
                Kami membuka peluang bagi individu berdedikasi dan bersemangat untuk menjadi bagian dari revolusi digital di dunia distribusi.
            </p>
        </div>
        <div class="md:w-1/2 mt-6 md:mt-0">
            <img src="../assets/img/meeting.jpg" alt="Meeting" class="rounded-lg shadow-lg">
        </div>
    </section>

    <!-- Mengapa Bergabung -->
    <section class="flex flex-col md:flex-row items-center px-8 py-16 bg-white">
        <div class="md:w-1/2 mb-6 md:mb-0">
            <img src="assets/images/perempuan.png" alt="Wanita" class="w-3/4 mx-auto">
        </div>
        <div class="md:w-1/2 space-y-4">
            <h2 class="text-2xl font-bold text-teal-900">Mengapa Bergabung Bersama Kami?</h2>
            <ul class="space-y-3 text-sm text-blue-900">
                <li class="flex items-start gap-2">
                    ✅ Ruang untuk tumbuh dan berkembang
                </li>
                <li class="flex items-start gap-2">
                    ✅ Budaya kerja yang terbuka, saling menghargai, dan kolaboratif
                </li>
                <li class="flex items-start gap-2">
                    ✅ Kebijakan kerja fleksibel dan mendukung kesejahteraan secara holistik
                </li>
            </ul>
        </div>
    </section>

    <!-- Posisi -->
    <section class="px-8 py-12 bg-gray-50 text-center">
        <h2 class="text-2xl font-bold text-teal-900 mb-8">Posisi Yang Ditawarkan</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-4xl mx-auto">
            <div class="bg-white p-4 rounded-lg shadow">
                <img src="assets/images/warehouse.jpg" alt="Warehouse Staff" class="rounded mb-3">
                <h3 class="font-semibold text-blue-900">Warehouse Staff</h3>
            </div>
            <div class="bg-white p-4 rounded-lg shadow">
                <img src="assets/images/officer.jpg" alt="Officer Staff" class="rounded mb-3">
                <h3 class="font-semibold text-blue-900">Officer Staff</h3>
            </div>
        </div>
    </section>

    <!-- Partner -->
    <section class="px-8 py-12 bg-white text-center">
        <h3 class="text-xl font-semibold text-gray-700 mb-4">Berkesempatan Kolaborasi dengan Partner</h3>
        <div class="flex flex-wrap justify-center gap-8 items-center mt-6">
            <img src="assets/images/nescafe.png" class="h-10" alt="Nescafe">
            <img src="assets/images/nestle.png" class="h-10" alt="Nestle">
            <img src="assets/images/indofood.png" class="h-10" alt="Indofood">
            <img src="assets/images/mayora.png" class="h-10" alt="Mayora">
            <img src="assets/images/otsuka.png" class="h-10" alt="Otsuka">
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <?php include 'componen/footer.php'; ?>
    </footer>

</body>
</html>
