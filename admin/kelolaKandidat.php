<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Kandidat</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body class="bg-gray-50 font-inter">
<main class="p-6 sm:ml-64">
    <div class="max-w-7xl mx-auto">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-gray-800">Manajemen Kandidat</h1>
            <button class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded flex items-center gap-2">
                <i data-lucide="file-text"></i>
                Export Data
            </button>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-6">
            <div class="bg-white p-4 rounded shadow text-center">
                <i data-lucide="users" class="mx-auto mb-1 text-blue-500"></i>
                <p class="text-sm text-gray-500">Total Kandidat</p>
                <p class="text-xl font-bold">248</p>
            </div>
            <div class="bg-white p-4 rounded shadow text-center">
                <i data-lucide="file-text" class="mx-auto mb-1 text-yellow-500"></i>
                <p class="text-sm text-gray-500">Review</p>
                <p class="text-xl font-bold">89</p>
            </div>
            <div class="bg-white p-4 rounded shadow text-center">
                <i data-lucide="user-check" class="mx-auto mb-1 text-green-500"></i>
                <p class="text-sm text-gray-500">Shortlist</p>
                <p class="text-xl font-bold">34</p>
            </div>
            <div class="bg-white p-4 rounded shadow text-center">
                <i data-lucide="mail-x" class="mx-auto mb-1 text-red-500"></i>
                <p class="text-sm text-gray-500">Ditolak</p>
                <p class="text-xl font-bold">125</p>
            </div>
        </div>

        <div class="bg-white p-4 rounded-lg shadow mb-4">
            <div class="flex flex-wrap gap-2 mb-4">
                <input type="text" placeholder="Cari kandidat..." class="flex-1 min-w-[200px] border border-gray-300 rounded px-3 py-2">
                <button class="border border-gray-300 px-4 py-2 rounded hover:bg-gray-100">Filter Posisi</button>
                <button class="border border-gray-300 px-4 py-2 rounded hover:bg-gray-100">Filter Status</button>
            </div>

            <div class="overflow-x-auto">
                <table class="min-w-full bg-white rounded-lg shadow text-sm">
                    <thead class="bg-gray-100 text-gray-700 font-semibold">
                        <tr>
                            <th class="px-4 py-2 text-left">Kandidat</th>
                            <th class="px-4 py-2 text-left">Posisi</th>
                            <th class="px-4 py-2 text-left">Pengalaman</th>
                            <th class="px-4 py-2 text-left">Status</th>
                            <th class="px-4 py-2 text-left">Tgl Melamar</th>
                            <th class="px-4 py-2 text-left">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-t hover:bg-gray-50">
                            <td class="px-4 py-3">
                                <p class="font-semibold">Ahmad Rizki</p>
                                <p class="text-xs text-gray-500">ahmad.rizki@email.com</p>
                                <p class="text-xs text-gray-500">S1 Teknik Informatika</p>
                            </td>
                            <td class="px-4 py-3">Software Engineer</td>
                            <td class="px-4 py-3">3 tahun</td>
                            <td class="px-4 py-3">
                                <span class="bg-yellow-100 text-yellow-800 px-2 py-1 rounded text-xs">Review</span>
                            </td>
                            <td class="px-4 py-3">2023-12-20</td>
                            <td class="px-4 py-3 flex gap-2">
                                <button class="hover:text-blue-600"><i data-lucide="eye" class="w-5 h-5"></i></button>
                                <button class="hover:text-green-600"><i data-lucide="file-text" class="w-5 h-5"></i></button>
                                <button class="hover:text-purple-600"><i data-lucide="mail" class="w-5 h-5"></i></button>
                            </td>
                        </tr>
                        <tr class="border-t hover:bg-gray-50">
                            <td class="px-4 py-3">
                                <p class="font-semibold">Sari Dewi</p>
                                <p class="text-xs text-gray-500">sari.dewi@email.com</p>
                                <p class="text-xs text-gray-500">S1 Manajemen</p>
                            </td>
                            <td class="px-4 py-3">Marketing Manager</td>
                            <td class="px-4 py-3">5 tahun</td>
                            <td class="px-4 py-3">
                                <span class="bg-green-100 text-green-800 px-2 py-1 rounded text-xs">Shortlist</span>
                            </td>
                            <td class="px-4 py-3">2023-12-18</td>
                            <td class="px-4 py-3 flex gap-2">
                                <button class="hover:text-blue-600"><i data-lucide="eye" class="w-5 h-5"></i></button>
                                <button class="hover:text-green-600"><i data-lucide="file-text" class="w-5 h-5"></i></button>
                                <button class="hover:text-purple-600"><i data-lucide="mail" class="w-5 h-5"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>

<script>
    lucide.createIcons();
</script>
</body>
</html>