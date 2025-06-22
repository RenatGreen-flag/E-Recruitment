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
      <img src="../assets/img/COMPANY LOGO-blue.png" alt="Logo" class="h-10">
      <div class="text-xs text-[#065f73] font-semibold uppercase">PT. ANANDA<br><span class="text-[10px] tracking-widest">Lintas Cakrawala</span></div>
    </div>

    <!-- Menu -->
    <ul class="flex space-x-5 text-[#065f73] font-medium">
      <li>
        <button onclick="showSection('lowongan')" class="nav-link active">Lowongan</button>
      </li>
      <li>
        <button onclick="showSection('lamaran')" class="nav-link">Lamaran Saya</button>
      </li>
      <li>
        <button onclick="showSection('profil')" class="nav-link">Profil</button>
      </li>
      <li>
        <button onclick="showSection('pengumuman')" class="nav-link">Pengumuman</button>
      </li>
    </ul>
  </nav>

  <!-- Content Sections -->
  <div class="p-6">
    <div id="lowongan" class="section">
    </div>
    <div id="lamaran" class="section hidden">
      <?php include ('riwayatLamaran.php') ?>
    </div>
    <div id="profil" class="section hidden">👤 Ini Halaman Profil</div>
    <div id="pengumuman" class="section hidden">📢 Ini Halaman Pengumuman</div>
  </div>

  
</body>
</html>
