<?php include 'sidebar.php';
    include '../model/Lowongan.php';
    include '../koneksi/koneksi.php';
    $lowongan = new Lowongan($koneksi);
    $hasil = $lowongan->tampilkanLowongan();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Lowongan Kerja</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
    <style>
        .modal {
            display: none;

        }

        .modal.show {
            display: block;
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
</head>

<body class="bg-gray-50 font-inter">
    <main class="p-6 w-full main">
        <div class="max-w-7xl mx-auto">
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-2xl font-bold text-gray-800">Manajemen Lowongan Kerja</h1>
                <button class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded flex items-center gap-2" onclick="toggleModal()">
                    <i data-lucide="plus"></i>
                    Tambah Lowongan
                </button>
            </div>
            <!-- Overlay Modal -->
            <div class="modal  fixed w-1/2 bg-black bg-opacity-40 flex justify-center items-center z-50  mx-auto">
                <!-- Konten Modal -->
                <div class="bg-[#d3cdcdf5] w-full max-w-3xl rounded-lg shadow-lg p-6">
                    <!-- Header -->
                    <div class="flex justify-between items-center mb-4">
                        <h2 class="text-xl font-semibold">Tambah Lowongan Kerja Baru</h2>
                        <button onclick="toggleModal()" class="text-gray-500 hover:text-red-600 text-xl">&times;</button>
                    </div>

                    <!-- Form -->
                    <form class="space-y-4" action="../controller/tambahlowongan.php" method="post">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block mb-1 font-medium">Kode Lowongan *</label>
                                <input type="text" placeholder="Contoh: PWL" name="kode" class="w-full border border-gray-300 rounded px-3 py-2" required>
                            </div>
                            <div>
                                <label class="block mb-1 font-medium">Nama Posisi *</label>
                                <input type="text" placeholder="Contoh: Software Engineer" name="nama" class="w-full border border-gray-300 rounded px-3 py-2" required>
                            </div>
                            <div>
                                <label class="block mb-1 font-medium">Departemen *</label>
                                <select class="w-full border border-gray-300 rounded px-3 py-2" required name="departemen">
                                    <option>Pilih departemen</option>
                                    <option value="SDM">SDM</option>
                                    <option value="IT">IT</option>
                                    <option value="Pemasaran">Pemasaran</option>
                                </select>
                            </div>
                            <div>
                                <label class="block mb-1 font-medium">Tipe Pekerjaan *</label>
                                <select class="w-full border border-gray-300 rounded px-3 py-2" required name="tipe">
                                    <option>Pilih tipe</option>
                                    <option value="Full time">Full time</option>
                                    <option value="Kontrak">kontrak</option>
                                </select>
                            </div>
                            <div>
                                <label class="block mb-1 font-medium">Deadline *</label>
                                <input type="date" class="w-full border border-gray-300 rounded px-3 py-2" required name="deadline">
                            </div>
                            <div>
                                <label class="block mb-1 font-medium">Gaji (Opsional)</label>
                                <input type="text" placeholder="Contoh: 8.000.000 - 12.000.000" class="w-full border border-gray-300 rounded px-3 py-2" name="gaji">
                            </div>
                        </div>

                        <div class="detail flex w-full  justify-around ">
                            <div>
                                <label class="block mb-1 font-medium">Deskripsi Pekerjaan</label>
                                <textarea placeholder="Jelaskan tanggung jawab dan tugas untuk posisi ini..." class="w-full border border-gray-300 rounded px-3 py-2 h-24" name="deskripsi"></textarea>
                            </div>

                            <div>
                                <label class="block mb-1 font-medium">Persyaratan</label>
                                <textarea placeholder="Tuliskan kualifikasi dan persyaratan yang dibutuhkan..." class="w-full border border-gray-300 rounded px-3 py-2 h-24" name="persyaratan"></textarea>
                            </div>
                        </div>

                        <!-- Aksi -->
                        <div class="flex justify-end gap-2 pt-4">
                            <button type="button" onclick="toggleModal()" class="px-4 py-2 border rounded hover:bg-gray-100">Batal</button>
                            <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Simpan Lowongan</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="bg-white p-4 rounded-lg shadow mb-4">
                <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-2">
                    <input type="text" placeholder="Cari lowongan kerja..." class="w-full md:w-1/3 border border-gray-300 rounded px-3 py-2">
                    <button class="border border-gray-300 px-4 py-2 rounded hover:bg-gray-100">Filter</button>
                </div>
            </div>

            <div class="overflow-x-auto">
                <table class="min-w-full bg-white rounded-lg shadow text-sm">
                    <thead class="bg-gray-100 text-gray-700 font-semibold">
                        <tr>
                            <th class="px-4 py-2 text-left">Posisi</th>
                            <th class="px-4 py-2 text-left">Departemen</th>
                            <th class="px-4 py-2 text-left">Status</th>
                            <th class="px-4 py-2 text-left">Deadline</th>
                            <th class="px-4 py-2 text-left">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                       <?php foreach($hasil as $data): ?>
                        <tr class="border-t hover:bg-gray-50">
                            <td class="px-4 py-3">
                                <p class="font-semibold"><?php echo $data['posisi']?></p>
                                <p class="text-xs text-gray-500"><?php echo $data['tipe_pekerja']?></p>
                            </td>
                            <td class="px-4 py-3"><?php echo $data['departemen']?></td>
                            <td class="px-4 py-3">
                                <span class="bg-green-100 text-green-700 px-2 py-1 rounded text-xs">Aktif</span>
                            </td>
                            <td class="px-4 py-3"><?php echo $data['tgl_penutupan']?></td>
                            <td class="px-4 py-3 flex gap-2">
                                <button class="hover:text-blue-600"><i data-lucide="eye" class="w-5 h-5"></i></button>
                                <button class="hover:text-yellow-600"><i data-lucide="edit" class="w-5 h-5"></i></button>
                            </td>
                        </tr>

                        <?php endforeach?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>

    <script>
        lucide.createIcons();
        let modal = document.querySelector('.modal');

        function toggleModal() {

            modal.classList.toggle('show');
        }
        form.addEventListener("submit", function(e) {
            e.preventDefault();

            const formData = new FormData(form);

            fetch("../controller/tambahlowongan.php", {
                    method: "POST",
                    body: formData
                })
                .then(response => response.text())
                .then(data => {
                    alert("Lowongan berhasil disimpan!");
                    form.reset();
                    modal.classList.remove("show");
                    console.log("Respon server:", data); // Untuk debug
                })
                .catch(error => {
                    console.error("Error saat submit:", error);
                    alert("Gagal menyimpan lowongan. Coba lagi.");
                });
        });
    </script>
</body>

</html>