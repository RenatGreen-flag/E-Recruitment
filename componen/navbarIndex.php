<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Navbar Frame</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="../assets/css/navStyle.css">
  <script src="../assets/js/navStyle.js"></script>
</head>
<body class="font-sans">

  <header class="bg-[#065f73] border-b border-gray-200 px-6 py-2 flex items-center justify-between">
      <div class="flex items-center space-x-2 text-xs">
        <span class="text-white font-semibold">📞 021 038 778</span>
        <span class="text-white">|</span>
        <span class="text-white">JL.JAGAKARSA RAYA, RT.014/01,KEL.JAGAKARSA, Jakarta Selatan.</span>
      </div>
    </header>

  <!-- Navbar -->
  <nav class="flex items-center justify-between px-10 py-4 bg-white border-b">
    <!-- Logo -->
    <div class="flex items-center space-x-2">
      <img src="http://e-recruitment.test/assets/img/COMPANY%20LOGO-blue.png" alt="Logo" class="h-10">
      <div class="text-xs text-[#065f73] font-semibold uppercase">PT. ANANDA<br><span class="text-[10px] tracking-widest">Lintas Cakrawala</span></div>
    </div>

    <!-- Menu -->
    <ul class="flex space-x-5 text-[#065f73] font-medium">
      <li>
        <button onclick="showSection('tentang')" class="nav-link"><a href="http://e-recruitment.test/view/landingPage.php">Tentang</a></button>
      </li>
      <li>
        <button onclick="showSection('lamaran')" class="nav-link"><a href="http://e-recruitment.test/view/navLowongan.php">Lowongan</a></button>
      </li>
      <li>
        <button onclick="showSection('lamaran')" class="nav-link"><a href="http://e-recruitment.test/view/lamaranSaya.php">Lamaran Saya</a></button>
      </li>
      <li>
        <button onclick="showSection('profil')" class="nav-link"><a href="http://e-recruitment.test/view/navProfil.php">Profil</a></button>
      </li>
      <li>
        <button onclick="showSection('pengumuman')" class="nav-link"><a href="http://e-recruitment.test/view/navPengumuman.php">Pengumuman</a></button>
      </li>
    </ul>
  </nav>

  
</body>
</html>
