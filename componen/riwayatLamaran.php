<?php

include '../koneksi/koneksi.php';

$id_kandidat = $_SESSION['id']; // pastikan ini sudah diset saat login
var_dump($id_kandidat);

$query = "
SELECT 
    l.no_lamaran_custom, 
    lw.judul AS title, 
    l.tgl_pengajuan AS tanggal, 
    hp.putusan AS status
FROM lamaran l
JOIN lowongan lw ON l.kd_lowongan = lw.kd_lowongan
LEFT JOIN hasil_putusan hp ON l.no_lamaran = hp.no_lamaran_custom
ORDER BY l.tgl_pengajuan DESC
WHERE l.id_kandidat = ?
";

$stmt = $koneksi->prepare($query);
$stmt->bind_param("i", $id_kandidat);


$stmt->execute();
$result = $stmt->get_result()->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>riwayat Lamaran</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alata&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Titan+One&display=swap" rel="stylesheet">
</head>
<body>
    <main>
            <div class="max-w-5xl mx-auto mt-10">
                <h2 class="text-2xl font-bold mb-4 text-blue-800">Riwayat Lamaran</h2>
                <table class="min-w-full bg-white border border-gray-200 rounded shadow text-sm">
                <thead class="bg-blue-100 text-blue-900 font-semibold">
                    <tr>
                        <th class="text-left px-4 py-2 border-b">Nomor Lamaran</th>
                        <th class="text-left px-4 py-2 border-b">Title</th>
                        <th class="text-left px-4 py-2 border-b">Tanggal Melamar</th>
                        <th class="text-left px-4 py-2 border-b">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($result as $row): ?>
                    <tr class="border-b">
                        <td class="px-4 py-2"><?= $row['no_lamaran_custom']; ?></td>
                        <td class="px-4 py-2"><?= $row['title']; ?></td>
                        <td class="px-4 py-2"><?= date('d/m/Y', strtotime($row['tanggal'])); ?></td>
                        <td class="px-4 py-2">
                            <?php
                            // Pilih warna sesuai status
                            $status = strtolower($row['status']);
                            switch ($status) {
                                case 'lolos':
                                case 'interview':
                                case 'tahap interview':
                                    $warna = 'bg-green-500';
                                break;
                                case 'review_berkas':
                                case 'tertunda':
                                    $warna = 'bg-yellow-400';
                                break;
                                case 'tidak_lolos':
                                    $warna = 'bg-red-500';
                                break;
                                case 'tutup':
                                case 'sudah_tutup':
                                    $warna = 'bg-gray-600';
                                break;
                                default:
                                    $warna = 'bg-gray-300 text-gray-800';
                            }
                            ?>
                            <span class="px-3 py-1 text-white text-xs rounded <?= $warna; ?>">
                            <php?= ucfirst($row['status']) ?: 'Belum diproses'; ?>
                            </span>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </main>
    
</body>
</html>


