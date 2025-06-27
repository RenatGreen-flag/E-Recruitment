<?php include 'sidebar.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard E-Recruitment</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body class="bg-gray-50 font-inter">
<main class="p-6 sm:ml-64">
    <div class="max-w-7xl mx-auto">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-gray-800">Dashboard E-Recruitment</h1>
            <span class="text-sm text-gray-500">Jumat, 27 Juni 2025</span>
        </div>

        <!-- Statistik -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
            <div class="bg-white rounded-lg shadow p-4 flex justify-between items-center">
                <div>
                    <p class="text-sm text-gray-500">Total Lowongan</p>
                    <p class="text-2xl font-bold">12</p>
                </div>
                <div class="bg-blue-500 text-white p-2 rounded-full">
                    <i data-lucide="file-text" class="w-6 h-6"></i>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow p-4 flex justify-between items-center">
                <div>
                    <p class="text-sm text-gray-500">Total Kandidat</p>
                    <p class="text-2xl font-bold">248</p>
                </div>
                <div class="bg-green-500 text-white p-2 rounded-full">
                    <i data-lucide="users" class="w-6 h-6"></i>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow p-4 flex justify-between items-center">
                <div>
                    <p class="text-sm text-gray-500">Menunggu Seleksi</p>
                    <p class="text-2xl font-bold">89</p>
                </div>
                <div class="bg-yellow-400 text-white p-2 rounded-full">
                    <i data-lucide="user-clock" class="w-6 h-6"></i>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow p-4 flex justify-between items-center">
                <div>
                    <p class="text-sm text-gray-500">Lulus Seleksi</p>
                    <p class="text-2xl font-bold">34</p>
                </div>
                <div class="bg-purple-500 text-white p-2 rounded-full">
                    <i data-lucide="calendar-check" class="w-6 h-6"></i>
                </div>
            </div>
        </div>

        <!-- Lowongan dan Aktivitas -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="bg-white rounded-lg shadow p-4">
                <h2 class="text-lg font-semibold mb-4">Lowongan Terbaru</h2>
                <div class="space-y-2">
                    <div class="bg-gray-100 rounded p-3 flex justify-between">
                        <div>
                            <p class="font-semibold">Software Engineer</p>
                            <p class="text-sm text-gray-600">45 pelamar</p>
                        </div>
                        <p class="text-sm text-gray-500">Deadline: 2024-01-15</p>
                    </div>
                    <div class="bg-gray-100 rounded p-3 flex justify-between">
                        <div>
                            <p class="font-semibold">Marketing Manager</p>
                            <p class="text-sm text-gray-600">32 pelamar</p>
                        </div>
                        <p class="text-sm text-gray-500">Deadline: 2024-01-20</p>
                    </div>
                    <div class="bg-gray-100 rounded p-3 flex justify-between">
                        <div>
                            <p class="font-semibold">UI/UX Designer</p>
                            <p class="text-sm text-gray-600">28 pelamar</p>
                        </div>
                        <p class="text-sm text-gray-500">Deadline: 2024-01-25</p>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow p-4">
                <h2 class="text-lg font-semibold mb-4">Aktivitas Terbaru</h2>
                <div class="space-y-2">
                    <div class="bg-gray-100 rounded p-3 flex justify-between items-center">
                        <div class="flex items-center gap-2">
                            <span class="w-2 h-2 bg-green-500 rounded-full"></span>
                            <p class="text-sm">Kandidat baru mendaftar</p>
                        </div>
                        <span class="text-sm text-gray-500">2 menit lalu</span>
                    </div>
                    <div class="bg-gray-100 rounded p-3 flex justify-between items-center">
                        <div class="flex items-center gap-2">
                            <span class="w-2 h-2 bg-blue-500 rounded-full"></span>
                            <p class="text-sm">Seleksi berkas selesai</p>
                        </div>
                        <span class="text-sm text-gray-500">1 jam lalu</span>
                    </div>
                    <div class="bg-gray-100 rounded p-3 flex justify-between items-center">
                        <div class="flex items-center gap-2">
                            <span class="w-2 h-2 bg-purple-500 rounded-full"></span>
                            <p class="text-sm">Lowongan baru dipublikasikan</p>
                        </div>
                        <span class="text-sm text-gray-500">3 jam lalu</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<script>
    lucide.createIcons();
</script>
</body>
</html>
