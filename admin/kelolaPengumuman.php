<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Manajemen Pengumuman</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
  <style>
    .material-symbols-outlined {
      font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
    }
  </style>
</head>
<body class="bg-gray-100 flex">

  <!-- Sidebar -->
  <div class="w-64 min-h-screen bg-blue-900 text-white p-4">
    <h2 class="text-xl font-bold mb-6">E-Recruitment</h2>
    <nav class="space-y-2 text-sm">
      <a href="#" class="flex items-center gap-2 px-3 py-2 rounded hover:bg-blue-700">
        <span class="material-symbols-outlined">dashboard</span> Dashboard
      </a>
      <a href="#" class="flex items-center gap-2 px-3 py-2 rounded hover:bg-blue-700">
        <span class="material-symbols-outlined">work</span> Lowongan Kerja
      </a>
      <a href="#" class="flex items-center gap-2 px-3 py-2 rounded hover:bg-blue-700">
        <span class="material-symbols-outlined">person</span> Kandidat
      </a>
      <a href="#" class="flex items-center gap-2 px-3 py-2 rounded hover:bg-blue-700">
        <span class="material-symbols-outlined">folder</span> Seleksi Berkas
      </a>
      <a href="#" class="flex items-center gap-2 px-3 py-2 bg-blue-700 rounded">
        <span class="material-symbols-outlined">notifications</span> Pengumuman
      </a>
    </nav>
  </div>

  <!-- Konten Utama -->
  <div class="flex-1 p-6">
    <div class="flex justify-between items-center mb-4">
      <h1 class="text-2xl font-bold">Manajemen Pengumuman</h1>
      <a href="buat_pengumuman.php" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded text-sm flex items-center gap-1">
        <span class="material-symbols-outlined">add</span> Buat Pengumuman
      </a>
    </div>

    <!-- Statistik -->
    <div class="grid grid-cols-1 sm:grid-cols-4 gap-4 mb-4 text-center">
      <?php
      $total = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM pengumuman"));
      $terkirim = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM pengumuman WHERE status='published'"));
      $draft = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM pengumuman WHERE status='draft'"));
      $terjadwal = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM pengumuman WHERE status='scheduled'"));
      ?>
      <div class="bg-white p-4 rounded shadow">
        <div class="text-2xl text-blue-700"><span class="material-symbols-outlined text-3xl">notifications</span></div>
        <p class="font-semibold">Total Pengumuman</p>
        <p class="text-xl font-bold"><?= $total ?></p>
      </div>
      <div class="bg-white p-4 rounded shadow">
        <div class="text-2xl text-green-600"><span class="material-symbols-outlined text-3xl">send</span></div>
        <p class="font-semibold">Terkirim</p>
        <p class="text-xl font-bold"><?= $terkirim ?></p>
      </div>
      <div class="bg-white p-4 rounded shadow">
        <div class="text-2xl text-yellow-500"><span class="material-symbols-outlined text-3xl">edit</span></div>
        <p class="font-semibold">Draft</p>
        <p class="text-xl font-bold"><?= $draft ?></p>
      </div>
      <div class="bg-white p-4 rounded shadow">
        <div class="text-2xl text-purple-500"><span class="material-symbols-outlined text-3xl">visibility</span></div>
        <p class="font-semibold">Terjadwal</p>
        <p class="text-xl font-bold"><?= $terjadwal ?></p>
      </div>
    </div>

    <!-- Tab -->
    <div class="flex gap-2 mb-4 bg-white rounded shadow overflow-hidden text-sm">
      <span class="px-4 py-2 bg-gray-100 font-semibold">Daftar Pengumuman</span>
      <a href="buat_pengumuman.php" class="px-4 py-2 text-gray-500">Buat Pengumuman</a>
    </div>

    <!-- Daftar Pengumuman -->
    <?php
    $data = mysqli_query($koneksi, "SELECT * FROM pengumuman ORDER BY tanggal_publish DESC");
    while ($row = mysqli_fetch_assoc($data)) {
    ?>
    <div class="bg-white border border-blue-200 p-4 mb-4 rounded shadow-sm">
      <div class="flex justify-between items-start">
        <div>
          <h2 class="font-bold text-lg"><?= $row['judul'] ?></h2>
          <div class="flex gap-2 text-sm mt-1">
            <span class="bg-gray-200 px-2 py-0.5 rounded"><?= $row['kategori'] ?></span>
            <?php if ($row['status'] == 'published') { ?>
              <span class="bg-green-100 text-green-800 px-2 py-0.5 rounded">Dipublikasikan</span>
            <?php } elseif ($row['status'] == 'draft') { ?>
              <span class="bg-yellow-100 text-yellow-800 px-2 py-0.5 rounded">Draft</span>
            <?php } else { ?>
              <span class="bg-purple-100 text-purple-800 px-2 py-0.5 rounded">Terjadwal</span>
            <?php } ?>
          </div>
          <p class="text-sm mt-2 text-gray-800"><?= substr($row['isi'], 0, 100) ?>...</p>
          <p class="text-sm mt-2 text-gray-600">
            <strong>Penerima:</strong> <?= $row['jumlah_penerima'] ?> orang |
            <strong>Tanggal Publikasi:</strong> <?= $row['tanggal_publish'] ?> |
            <strong>Status:</strong> <?= $row['status'] ?>
          </p>
        </div>
        <div class="flex gap-2 text-sm mt-2">
          <a href="lihat_pengumuman.php?id=<?= $row['id'] ?>" class="bg-white border p-1 rounded hover:bg-gray-100">
            <span class="material-symbols-outlined">visibility</span>
          </a>
          <a href="edit_pengumuman.php?id=<?= $row['id'] ?>" class="bg-white border p-1 rounded hover:bg-gray-100">
            <span class="material-symbols-outlined">edit</span>
          </a>
          <?php if ($row['status'] == 'draft') { ?>
            <form method="post" action="kirim_pengumuman.php">
              <input type="hidden" name="id" value="<?= $row['id'] ?>">
              <button class="bg-green-600 text-white px-3 py-1 rounded flex items-center gap-1 hover:bg-green-700" type="submit">
                <span class="material-symbols-outlined">send</span> Kirim
              </button>
            </form>
          <?php } ?>
        </div>
      </div>
    </div>
    <?php } ?>

  </div>
</body>
</html>
