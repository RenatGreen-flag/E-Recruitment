<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
  <div class="p-6 max-w-4xl mx-auto">
  <h1 class="text-3xl font-bold text-slate-800 mb-1">Lamaran Saya</h1>
  <a href="#" class="text-sm text-blue-500 underline mb-6 inline-block">
    Kelola dan pantau lamaran pekerjaan Anda disini.
  </a>

  <div class="w-full bg-red-500">
    <table class="w-full text-left border-separate border-spacing-y-2">
      <thead>
        <tr class="text-slate-700 font-semibold">
          <th class="px-4 py-2">Nomor Lamaran</th>
          <th class="px-4 py-2">Title</th>
          <th class="px-4 py-2">Tanggal Melamar</th>
          <th class="px-4 py-2">Status</th>
        </tr>
      </thead>
      <tbody class="text-slate-700">
        <tr class="bg-white">
          <td class="px-4 py-2">APP20220827598</td>
          <td class="px-4 py-2">Junior Web Dev</td>
          <td class="px-4 py-2">01/06/2025</td>
          <td class="px-4 py-2">
            <span class="bg-green-500 text-white text-sm px-3 py-1 rounded-md">
              Tahap Interview
            </span>
          </td>
        </tr>
        <tr class="bg-white">
          <td class="px-4 py-2">APJ20220827598</td>
          <td class="px-4 py-2">Admin Sosmed</td>
          <td class="px-4 py-2">01/06/2023</td>
          <td class="px-4 py-2">
            <span class="bg-orange-500 text-white text-sm px-3 py-1 rounded-md">
              Tutup
            </span>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

</body>
</html>