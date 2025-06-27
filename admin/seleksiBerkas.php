<?php 
include 'koneksi.php'; 
include __DIR__.'../model/seleksiBerkas.php';

?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Seleksi Berkas</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex">

    <!-- Sidebar -->
    <?php 
    include __DIR__.'sidebar.php';
    ?>

    <!-- Main Content -->
    <div class="flex-1 p-6">
        <h1 class="text-2xl font-bold mb-4">Proses Seleksi Berkas</h1>

        <!-- Statistik -->
        <div class="grid grid-cols-3 gap-4 mb-6">
            <?php
            $get = 
            ?>
            <div class="bg-white p-4 rounded shadow text-center">
                <div class="text-yellow-500 text-2xl">⏰</div>
                <div class="font-bold text-xl"><?= $get('menunggu') ?></div>
                <div class="text-gray-600">Menunggu Review</div>
            </div>
            <div class="bg-white p-4 rounded shadow text-center">
                <div class="text-green-500 text-2xl">✅</div>
                <div class="font-bold text-xl"><?= $get('diterima') ?></div>
                <div class="text-gray-600">Diterima</div>
            </div>
            <div class="bg-white p-4 rounded shadow text-center">
                <div class="text-red-500 text-2xl">❌</div>
                <div class="font-bold text-xl"><?= $get('ditolak') ?></div>
                <div class="text-gray-600">Ditolak</div>
            </div>
        </div>

        <!-- Kandidat List -->
        <div class="space-y-4">
            <?php
            $query = mysqli_query($koneksi, "SELECT * FROM lamaran WHERE status='menunggu' ORDER BY tanggal_melamar DESC");
            while($data = mysqli_fetch_assoc($query)) {
            ?>
            <div class="bg-white rounded shadow p-4 flex flex-col md:flex-row justify-between items-start md:items-center">
                <div>
                    <h3 class="font-bold text-lg"><?= $data['nama'] ?></h3>
                    <span class="bg-gray-200 text-sm px-2 py-1 rounded"><?= $data['posisi'] ?></span>
                    <div class="mt-2 text-sm text-gray-700">
                        <p><strong>Skor:</strong> <?= $data['skor'] ?>/100</p>
                        <p><strong>Tanggal Melamar:</strong> <?= $data['tanggal_melamar'] ?></p>
                        <p><strong>Dokumen:</strong></p>
                        <div class="flex gap-2 mt-1">
                            <?php if ($data['dokumen_cv']) echo "<span class='bg-gray-300 px-2 rounded'>CV</span>"; ?>
                            <?php if ($data['dokumen_portofolio']) echo "<span class='bg-gray-300 px-2 rounded'>Portfolio</span>"; ?>
                            <?php if ($data['dokumen_lain']) echo "<span class='bg-gray-300 px-2 rounded'>Sertifikat</span>"; ?>
                        </div>
                    </div>
                </div>
                <div class="flex gap-2 mt-4 md:mt-0">
                    <a href="<?= $data['dokumen_cv'] ?>" class="bg-white border px-3 py-1 rounded flex items-center gap-1 text-sm hover:bg-gray-100">📄 Lihat CV</a>
                    <a href="action.php?id=<?= $data['id'] ?>&aksi=terima" class="bg-green-500 text-white px-3 py-1 rounded hover:bg-green-600">✔ Terima</a>
                    <a href="action.php?id=<?= $data['id'] ?>&aksi=tolak" class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">✖ Tolak</a>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</body>
</html>


<?php
include 'koneksi.php';

$id = $_GET['id'];
$aksi = $_GET['aksi'];

$status = ($aksi == 'terima') ? 'diterima' : 'ditolak';

mysqli_query($koneksi, "UPDATE lamaran SET status='$status' WHERE id=$id");

header("Location: seleksi_berkas.php");
?>
