<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Profil</title>
  <script src="https://unpkg.com/lucide@latest"></script>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50 py-10">
  <div class="max-w-5xl mx-auto bg-white p-8 shadow-lg rounded-lg">
    <h2 class="text-2xl font-semibold text-gray-700 mb-6">Ubah Profil anda</h2>
    <form action="proses-edit.php" method="POST" enctype="multipart/form-data" class="grid md:grid-cols-3 gap-6">

      <!-- Foto Profil -->
      <div class="flex flex-col items-center col-span-1">
        <div class="relative">
          <img src="../assets/img/officeST.jpg" alt="Foto Profil" class="rounded-full w-40 h-40 border border-gray-400 object-cover">
          <label for="foto" class="absolute bottom-0 right-0 bg-blue-900 text-white rounded-full p-2 cursor-pointer">
            <i data-lucide="edit" class="w-4 h-4"></i>
          </label>
          <input type="file" id="foto" name="foto" class="hidden">
        </div>
        <button type="button" class="mt-4 px-4 py-2 bg-gray-200 text-gray-700 rounded-md">Unggah Foto</button>
        <span class="text-sm text-red-600 mt-2">* Gunakan Foto anda yang formal</span>
      </div>

      <!-- Form Input -->
      <div class="md:col-span-2 grid grid-cols-2 gap-4">
        <div class="col-span-2">
          <label class="block text-sm font-medium text-gray-700">NIK <span class="text-red-500">*</span></label>
          <input type="text" name="nik" class="w-full mt-1 p-2 border rounded-md text-gray-500" value="218298638485848002" required>
        </div>

        <div class="col-span-2">
          <label class="block text-sm font-medium text-gray-700">Nama Lengkap <span class="text-red-500">*</span></label>
          <input type="text" name="nama" class="w-full mt-1 p-2 border rounded-md text-gray-500" value="Renata Amelia Agatha" required>
        </div>

        <div>
          <label class="block text-sm font-medium text-gray-700">Tempat Lahir <span class="text-red-500">*</span></label>
          <input type="text" name="tempat_lahir" class="w-full mt-1 p-2 border rounded-md text-gray-500" value="Sidoarjo" required>
        </div>
        <div>
          <label class="block text-sm font-medium text-gray-700">Tanggal Lahir <span class="text-red-500">*</span></label>
          <input type="date" name="tanggal_lahir" class="w-full mt-1 p-2 border rounded-md text-gray-500" value="2004-05-04" required>
        </div>

        <div class="col-span-2">
          <label class="block text-sm font-medium text-gray-700">Alamat Domisili <span class="text-red-500">*</span></label>
          <input type="text" name="alamat" class="w-full mt-1 p-2 border rounded-md text-gray-500" value="Jl. Remaja 2" required>
        </div>

        <div>
          <label class="block text-sm font-medium text-gray-700">RT/RW</label>
          <input type="text" name="rt_rw" class="w-full mt-1 p-2 border rounded-md text-gray-500" value="07/002">
        </div>
        <div></div>

        <div>
          <label class="block text-sm font-medium text-gray-700">Kecamatan</label>
          <input type="text" name="kecamatan" class="w-full mt-1 p-2 border rounded-md text-gray-500" value="Gedong">
        </div>
        <div>
          <label class="block text-sm font-medium text-gray-700">Kode pos</label>
          <input type="text" name="kode_pos" class="w-full mt-1 p-2 border rounded-md text-gray-500" value="65434">
        </div>
      </div>

      <!-- Tombol Simpan -->
      <div class="col-span-3 flex justify-end mt-6">
        <button type="submit" class="bg-blue-700 text-white px-6 py-2 rounded-md hover:bg-blue-800">
          Simpan Perubahan
        </button>
      </div>
    </form>
  </div>

  <script>
    lucide.createIcons();
  </script>
</body>
</html>
