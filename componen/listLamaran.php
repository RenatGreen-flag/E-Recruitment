<?php 
include ('../model/riwayatLamaran.php');

$lamaran = new RiwayatLamaran();
$result = $lamaran->riwayatLamaran();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Lamaran yang Telah di Lamar</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<div class="p-6 max-w-4xl mx-auto">
  <h1 class="text-3xl font-bold text-slate-800 mb-1">Lamaran Saya</h1>
  <p class="text-sm text-blue-500 underline mb-6 inline-block">
    Kelola dan pantau amaran pekerjaan Anda disini.
</p>

<div class="w-full">
    <table class="w-full text-left border-separate border-spacing-y-2">
      <thead>
        <tr class="text-slate-700 font-semibold">
          <th class="px-4 py-2">Nomor Lamaran</th>
          <th class="px-4 py-2">Title</th>
          <th class="px-4 py-2">Tanggal Melamar</th>
          <th class="px-4 py-2">Status</th>
        </tr>
      </thead>
      <tbody class="text-slate-700">
        <?php while ($data = $lamaran->fetch_assoc()) ?>
        <tr class="bg-white">
          <td class="px-4 py-2"><?= htmlspecialchars($data['no_lamaran'])?></td>
          <td class="px-4 py-2"><?= htmlspecialchars($data['posisi'])?></td>
          <td class="px-4 py-2"><?= date('d/m/y',strtotime($data['tanggal']))?></td>
          <td class="px-4 py-2">
            <?php
                $status = strtolower($data['status']);
                $bg = $status === 'Interview' ? 'bg-green-500' : 'bg-orange-500';
            ?>
            <span class="<?= $bg ?> text-white text-sm px-3 py-1 rounded-md">
              <?=htmlspecialchars($data['status']) ?>
            </span>
          </td>
        </tr>
        
      </tbody>
    </table>
  </div>
</div>
</body>
</html>