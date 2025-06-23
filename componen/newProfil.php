<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <form action="Register2.php" method="POST" class="bg-white p-8 rounded-2xl  w-[600px]">
            <h2 class="text-center text-2xl font-bold text-cyan-900 mb-6">REGISTER</h2>
    
            <label class="block text-sm text-cyan-900 font-semibold">NIK</label>
            <input name="nik" placeholder="Masukkan NIK Anda" required
                class="w-full text-sm px-4 py-2 mt-1 mb-2 border rounded shadow text-gray-700" />
            
            <label class="block text-sm text-cyan-900 font-semibold">Nama Lengkap</label>
            <input name="nama" placeholder="Masukkan Nama Lengkap Anda" required
                class="w-full text-sm px-4 py-2 mt-1 mb-2 border rounded shadow text-gray-700" />
            
            <div>
            <label class="block text-sm font-medium text-gray-700">Tempat Lahir <span class="text-red-500">*</span></label>
            <input type="text" name="tempat_lahir" class="w-full mt-1 p-2 border rounded-md text-gray-500" value="Sidoarjo" required>
            </div>
            <div>
            <label class="block text-sm font-medium text-gray-700">Tanggal Lahir <span class="text-red-500">*</span></label>
            <input type="date" name="tanggal_lahir" class="w-full mt-1 p-2 border rounded-md text-gray-500" value="2004-05-04" required>
            </div>

            <label class="block text-sm text-cyan-900 font-semibold">NIK</label>
            <input name="nama" placeholder="Masukkan Nama Lengkap Anda" required
                class="w-full text-sm px-4 py-2 mt-1 mb-2 border rounded shadow text-gray-700" />

           
            <div class="col-span-3 flex justify-end mt-6">
                <button type="submit" class="bg-blue-700 text-white px-6 py-2 rounded-md hover:bg-blue-800">
                    Simpan Perubahan
                </button>
            </div>
    </form>


<form action="newProfil.php" id="" class="w-sm">

    <div class="md:col-span-2 grid grid-cols-2 gap-4">
        <div class="col-span-2">
          <label class="block text-sm font-medium text-gray-700">NIK <span class="text-red-500">*</span></label>
          <input type="text" name="nik" class="w-full mt-1 p-2 border rounded-md text-gray-500" placeholder="c/n: 218298638485848002" required>
        </div>
        <div class="col-span-2">
          <label class="block text-sm font-medium text-gray-700">Nama Lengkap <span class="text-red-500">*</span></label>
          <input type="text" name="nik" class="w-full mt-1 p-2 border rounded-md text-gray-500" placeholder="c/n: Sutarman Adi" required>
        </div>
        <div class="col-span-2">
          <label class="block text-sm font-medium text-gray-700">NIK <span class="text-red-500">*</span></label>
          <input type="text" name="nik" class="w-full mt-1 p-2 border rounded-md text-gray-500" placeholder="c/n: 218298638485848002" required>
        </div>
        <div class="col-span-2">
          <label class="block text-sm font-medium text-gray-700">NIK <span class="text-red-500">*</span></label>
          <input type="text" name="nik" class="w-full mt-1 p-2 border rounded-md text-gray-500" placeholder="c/n: 218298638485848002" required>
        </div>
        <div class="col-span-2">
          <label class="block text-sm font-medium text-gray-700">NIK <span class="text-red-500">*</span></label>
          <input type="text" name="nik" class="w-full mt-1 p-2 border rounded-md text-gray-500" placeholder="c/n: 218298638485848002" required>
        </div>
    </div>

      <!-- Tombol Simpan -->
      
</form>
</body>
</html>