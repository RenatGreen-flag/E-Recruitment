<?php

include __DIR__.'../model/lowongan.php';
include '../koneksi/koneksi.php';

$lowongan = new Lowongan($koneksi);
$getlowongan = $lowongan->tampilkanLowongan(); //sesuai fungsi di lowongan.php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
        <div class="space-y-6">
          <!-- Job Card -->
          <?php foreach($getlowongan as $data):?>
          <div class="border-b pb-4">
            <a href="#" class="text-lg font-semibold text-blue-900 hover:underline">
              <?php echo $data['judul']?>
            </a>
            <p class="text-sm text-gray-600 mt-1">
              <?php echo $data['deskripsi']?>
            </p>
            <div class="text-sm text-blue-600 mt-2 flex justify-between">
              <span>
                <?php echo $data['tgl_unggahan']?>
              </span>
              <a href="#" class="text-sm italic text-gray-500">lihat selengkapnya...</a>
            </div>
          </div>
          <?php endforeach; ?>
</body>
</html>