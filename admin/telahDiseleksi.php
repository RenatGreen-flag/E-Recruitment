<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Sudah Direview</title>
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
  <sidebar>
    <?php include __DIR__.'sidebar.php'; ?>
  </sidebar>

  <!-- Konten Utama -->
  <div class="flex-1 p-6">
    <h1 class="text-2xl font-bold mb-4">Proses Seleksi Berkas</h1>

    <!-- Tab -->
    <div class="flex gap-2 mb-4 bg-white rounded shadow overflow-hidden text-sm">
      <a href="menunggu_review.php" class="px-4 py-2 text-gray-500">Menunggu Review</a>
      <span class="px-4 py-2 bg-gray-100 font-semibold">Sudah Direview</span>
    </div>

    <!-- Query dan Data -->
    <?php
    $query = mysqli_query($koneksi, "
      SELECT lamaran.*, kandidat.nama, lowongan.posisi, reviewer.nama_reviewer
      FROM lamaran
      JOIN kandidat ON lamaran.kandidat_id = kandidat.id
      JOIN lowongan ON lamaran.lowongan_id = lowongan.id
      JOIN reviewer ON lamaran.reviewer_id = reviewer.id
      WHERE lamaran.status IN ('diterima','ditolak')
      ORDER BY lamaran.tanggal_review DESC
    ");
    ?>

    <div class="space-y-4">
      <?php while ($row = mysqli_fetch_assoc($query)) { ?>
        <div class="bg-white p-4 rounded shadow flex flex-col md:flex-row justify-between items-start md:items-center">
          <div>
            <h3 class="font-bold text-lg"><?= $row['nama'] ?></h3>
            <div class="flex gap-2 text-sm mt-1">
              <span class="bg-gray-200 px-2 py-0.5 rounded"><?= $row['posisi'] ?></span>
              <?php if ($row['status'] == 'diterima') { ?>
                <span class="bg-green-100 text-green-800 px-2 py-0.5 rounded">Diterima</span>
              <?php } else { ?>
                <span class="bg-red-100 text-red-800 px-2 py-0.5 rounded">Ditolak</span>
              <?php } ?>
            </div>
            <p class="text-sm mt-2 text-gray-700">
              <strong>Skor:</strong> <?= $row['skor'] ?>/100 <br>
              <strong>Direview:</strong> <?= $row['tanggal_review'] ?> <br>
              <strong>Reviewer:</strong> <?= $row['nama_reviewer'] ?>
            </p>
          </div>
          <a href="detail_lamaran.php?id=<?= $row['id'] ?>" class="mt-4 md:mt-0 bg-white border px-4 py-1 rounded hover:bg-gray-100 flex items-center gap-1">
            <span class="material-symbols-outlined">person</span> Detail
          </a>
        </div>
      <?php } ?>
    </div>
  </div>

</body>
</html>
