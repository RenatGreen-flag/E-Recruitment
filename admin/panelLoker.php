<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Lowongan Kerja</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body class="bg-gray-50 font-inter">
<main class="p-6 sm:ml-64">
    <div class="max-w-7xl mx-auto">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-gray-800">Manajemen Lowongan Kerja</h1>
            <button class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded flex items-center gap-2">
                <i data-lucide="plus"></i>
                Tambah Lowongan
            </button>
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
                        <th class="px-4 py-2 text-left">Lokasi</th>
                        <th class="px-4 py-2 text-left">Status</th>
                        <th class="px-4 py-2 text-left">Pelamar</th>
                        <th class="px-4 py-2 text-left">Deadline</th>
                        <th class="px-4 py-2 text-left">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-t hover:bg-gray-50">
                        <td class="px-4 py-3">
                            <p class="font-semibold">Software Engineer</p>
                            <p class="text-xs text-gray-500">Full-time</p>
                        </td>
                        <td class="px-4 py-3">IT</td>
                        <td class="px-4 py-3">Jakarta</td>
                        <td class="px-4 py-3">
                            <span class="bg-green-100 text-green-700 px-2 py-1 rounded text-xs">Aktif</span>
                        </td>
                        <td class="px-4 py-3 flex items-center gap-1">
                            <i data-lucide="users" class="w-4 h-4"></i> 45
                        </td>
                        <td class="px-4 py-3 flex items-center gap-1">
                            <i data-lucide="calendar" class="w-4 h-4"></i> 2024-01-15
                        </td>
                        <td class="px-4 py-3 flex gap-2">
                            <button class="hover:text-blue-600"><i data-lucide="eye" class="w-5 h-5"></i></button>
                            <button class="hover:text-yellow-600"><i data-lucide="edit" class="w-5 h-5"></i></button>
                        </td>
                    </tr>
                    <tr class="border-t hover:bg-gray-50">
                        <td class="px-4 py-3">
                            <p class="font-semibold">Marketing Manager</p>
                            <p class="text-xs text-gray-500">Full-time</p>
                        </td>
                        <td class="px-4 py-3">Marketing</td>
                        <td class="px-4 py-3">Surabaya</td>
                        <td class="px-4 py-3">
                            <span class="bg-green-100 text-green-700 px-2 py-1 rounded text-xs">Aktif</span>
                        </td>
                        <td class="px-4 py-3 flex items-center gap-1">
                            <i data-lucide="users" class="w-4 h-4"></i> 32
                        </td>
                        <td class="px-4 py-3 flex items-center gap-1">
                            <i data-lucide="calendar" class="w-4 h-4"></i> 2024-01-20
                        </td>
                        <td class="px-4 py-3 flex gap-2">
                            <button class="hover:text-blue-600"><i data-lucide="eye" class="w-5 h-5"></i></button>
                            <button class="hover:text-yellow-600"><i data-lucide="edit" class="w-5 h-5"></i></button>
                        </td>
                    </tr>
                    <tr class="border-t hover:bg-gray-50">
                        <td class="px-4 py-3">
                            <p class="font-semibold">UI/UX Designer</p>
                            <p class="text-xs text-gray-500">Contract</p>
                        </td>
                        <td class="px-4 py-3">Design</td>
                        <td class="px-4 py-3">Bandung</td>
                        <td class="px-4 py-3">
                            <span class="bg-red-100 text-red-700 px-2 py-1 rounded text-xs">Ditutup</span>
                        </td>
                        <td class="px-4 py-3 flex items-center gap-1">
                            <i data-lucide="users" class="w-4 h-4"></i> 28
                        </td>
                        <td class="px-4 py-3 flex items-center gap-1">
                            <i data-lucide="calendar" class="w-4 h-4"></i> 2023-12-31
                        </td>
                        <td class="px-4 py-3 flex gap-2">
                            <button class="hover:text-blue-600"><i data-lucide="eye" class="w-5 h-5"></i></button>
                            <button class="hover:text-yellow-600"><i data-lucide="edit" class="w-5 h-5"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</main>

<script>
    lucide.createIcons();
</script>
</body>
</html>
