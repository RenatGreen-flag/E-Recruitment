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

    <header class="border-b border-gray-200 px-6 py-2 flex items-center justify-between">
      <div class="flex items-center space-x-2 text-xs">
        <span class="text-white font-semibold">📞 021 038 778</span>
        <span class="text-white">|</span>
        <span class="text-white">JL.JAGAKARSA RAYA, RT.014/01,KEL.JAGAKARSA, Jakarta Selatan.</span>
      </div>
    </header>
    
    <!-- Navbar -->
    <nav class="flex justify-between items-center px-6 py-4 bg-white shadow">
      <div class="flex items-center space-x-2">
        <img src="../assets/img/COMPANY LOGO.png" alt="Logo" class="h-10 w-auto" />
        <span class="font-bold text-xl text-blue-900">PT. ANANDA LINTAS CAKRAWALA</span>
      </div>
      <div class="flex space-x-6 text-blue-900 font-semibold">
        <a href="#" class="border-b-2 border-blue-900 pb-1">Tentang</a>
        <a onclick="OnchangeBtn('view/test.php')">Lamaran Saya</a>
        <a href="#">Profil</a>
        <a href="#">Pengumuman</a>
      </div>
    </nav>

    <!-- Hero Section -->
    <section class="flex flex-col md:flex-row items-center justify-between px-8 py-12 bg-gray-50">
        <div class="md:w-1/2 space-y-4">
            <h1 class="text-3xl font-bold text-gray-800 leading-snug">
                Bergabunglah Bersama<br>PT. Ananda Lintas Cakrawala
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
    <footer class="bg-teal-900 text-white px-8 py-10 mt-12">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-sm">
            <div>
                <h4 class="font-semibold mb-2">Jadilah Mitra Kami</h4>
                <form>
                    <input type="email" placeholder="Email Bisnis Anda" class="w-full px-3 py-2 rounded text-black mb-2">
                    <button type="submit" class="bg-white text-teal-900 px-4 py-2 rounded font-semibold">Kirim</button>
                </form>
                <p class="mt-3 text-gray-300">Jl. Jagakarsa Raya, RT.014/01, KEL. Jagakarsa</p>
            </div>
            <div class="text-center">
                <img src="assets/images/logo-white.png" class="h-16 mx-auto mb-2" alt="Ananda Logo">
                <p>© 2023 Ananda Lintas Cakrawala. All rights reserved.</p>
            </div>
            <div>
                <h4 class="font-semibold mb-2">Layanan Kami</h4>
                <ul class="space-y-1">
                    <li><a href="#" class="hover:underline">Mitra</a></li>
                    <li><a href="#" class="hover:underline">Produk Partner</a></li>
                    <li><a href="#" class="hover:underline">Karir</a></li>
                    <li><a href="#" class="hover:underline">Hubungi Kami</a></li>
                </ul>
                <div class="flex gap-3 mt-3">
                    <a href="#"><img src="assets/images/icon-fb.png" class="h-5" alt=""></a>
                    <a href="#"><img src="assets/images/icon-ig.png" class="h-5" alt=""></a>
                    <a href="#"><img src="assets/images/icon-wa.png" class="h-5" alt=""></a>
                    <a href="#"><img src="assets/images/icon-x.png" class="h-5" alt=""></a>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>
