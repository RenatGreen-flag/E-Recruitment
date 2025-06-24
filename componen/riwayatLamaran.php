<?php
include '../controller/userauth.php';
include '../koneksi/koneksi.php';

$id_kandidat = $_SESSION['id'];

$query = "
SELECT 
    l.no_lamaran_custom, 
    lw.judul AS title, 
    l.tgl_pengajuan AS tanggal, 
    hp.putusan AS status
FROM lamaran l
JOIN lowongan lw ON l.kd_lowongan = lw.kd_lowongan
LEFT JOIN hasil_putusan hp ON l.no_lamaran_custom = hp.no_lamaran_custom
WHERE l.id_kandidat = ?
ORDER BY l.tgl_pengajuan DESC
";

$stmt = $koneksi->prepare($query);
$stmt->bind_param("i", $id_kandidat);
$stmt->execute();
$result = $stmt->get_result();
?>

<!-- HTML -->
<div class="max-w-6xl mx-auto mt-10 p-4">
    <h2 class="text-2xl font-bold mb-6 text-blue-800">Riwayat Lamaran</h2>

    <div class="overflow-x-auto bg-white rounded-lg shadow border border-gray-200">
        <table class="min-w-full text-sm text-left text-gray-700">
            <thead class="bg-blue-100 text-blue-800 uppercase text-xs font-semibold">
                <tr>
                    <th class="px-6 py-3 border-b">No Lamaran</th>
                    <th class="px-6 py-3 border-b">Judul</th>
                    <th class="px-6 py-3 border-b">Tanggal Pengajuan</th>
                    <th class="px-6 py-3 border-b">Hasil Putusan</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()): ?>
                <tr class="border-b hover:bg-gray-50 transition">
                    <td class="px-6 py-3"><?= $row['no_lamaran_custom']; ?></td>
                    <td class="px-6 py-3"><?= $row['title']; ?></td>
                    <td class="px-6 py-3"><?= date('d/m/Y', strtotime($row['tanggal'])); ?></td>
                    <td class="px-6 py-3">
                        <?php
                        $status = $row['status'];
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
                        <span class="px-3 py-1 rounded text-white text-xs font-medium <?= $warna; ?>">
                            <?= ucfirst($row['status'] ?? 'Belum diproses'); ?>
                        </span>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</div>
</tbody>