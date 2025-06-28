<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <title>Sidebar Material Icon</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
  <style>
    .material-symbols-outlined {
      font-variation-settings:
        'FILL' 0,
        'wght' 400,
        'GRAD' 0,
        'opsz' 24;
    }
  </style>
</head>
<body class="flex">

  <!-- Sidebar -->
  <div id="sidebar" class="w-64 bg-blue-900 text-white min-h-screen p-4 transition-all duration-300 ease-in-out">
    <div class="flex items-center justify-between mb-6">
      <h1 class="text-xl font-bold">E-Recruitment</h1>
      <button onclick="toggleSidebar()" class="text-white md:hidden">
        <span class="material-symbols-outlined">close</span>
      </button>
    </div>
    <nav class="space-y-2 text-sm">
      <a href="http://e-recruitment.test/admin/dashboard.php" class="flex items-center gap-2 px-3 py-2 rounded hover:bg-blue-700 transition">
        <span class="material-symbols-outlined">dashboard</span> Dashboard
      </a>
      <a href="http://e-recruitment.test/admin/panelLoker.php" class="flex items-center gap-2 px-3 py-2 rounded hover:bg-blue-700 transition">
        <span class="material-symbols-outlined">work</span> Lowongan Kerja
      </a>
      <a href="http://e-recruitment.test/admin/kelolaKandidat.php" class="flex items-center gap-2 px-3 py-2 rounded hover:bg-blue-700 transition">
        <span class="material-symbols-outlined">person</span> Kandidat
      </a>
      <a href="http://e-recruitment.test/admin/seleksiBerkas.php" class="flex items-center gap-2 px-3 py-2 rounded bg-blue-700">
        <span class="material-symbols-outlined">folder</span> Seleksi Berkas
      </a>
      <a href="http://e-recruitment.test/admin/kelolaPengumuman.php" class="flex items-center gap-2 px-3 py-2 rounded hover:bg-blue-700 transition">
        <span class="material-symbols-outlined">notifications</span> Pengumuman
      </a>
    </nav>
  </div>

  <!-- Main Content -->
  <div class="flex-1 p-6">
    <button onclick="toggleSidebar()" class="mb-4 text-blue-800 font-semibold md:hidden">
      <span class="material-symbols-outlined">menu</span> Menu
    </button>
    <?php 
        include 'menungguReview.php';
    ?>
  </div>

  <script>
    function toggleSidebar() {
      const sidebar = document.getElementById("sidebar");
      sidebar.classList.toggle("translate-x-[-100%]");
    }
  </script>

</body>
</html>
