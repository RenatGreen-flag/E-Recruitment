<?php
include '../koneksi/koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Register - Ananda</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">
  <div class="min-h-screen flex items-center justify-center px-4 py-8">
    <div class="bg-white shadow-2xl rounded-3xl overflow-hidden flex flex-col md:flex-row w-full max-w-5xl">
      
      <!-- Left Form -->
      <div class="w-full md:w-1/2 bg-gradient-to-br from-cyan-700 to-blue-500 p-8 text-white flex flex-col justify-center">
        <h2 class="text-3xl font-bold mb-6">Register</h2>
        
        <div class="space-y-4">
          <div class="flex items-center border-b border-white py-2">
            <span class="mr-3">👤</span>
            <input type="text" placeholder="Name" class="w-full bg-transparent border-none text-white placeholder-white focus:outline-none" />
          </div>
          <div class="flex items-center border-b border-white py-2">
            <span class="mr-3">✉️</span>
            <input type="email" placeholder="Email" class="w-full bg-transparent border-none text-white placeholder-white focus:outline-none" />
          </div>
          <div class="flex items-center border-b border-white py-2">
            <span class="mr-3">💳</span>
            <input type="password" placeholder="Password" class="w-full bg-transparent border-none text-white placeholder-white focus:outline-none" />
          </div>
        </div>

        <button class="mt-6 bg-white text-blue-800 font-semibold py-2 rounded-full w-full hover:bg-gray-200 transition">Sign In</button>
        <button class="mt-3 border border-white flex items-center justify-center py-2 rounded-full w-full hover:bg-white hover:text-blue-800 transition">
          <img src="https://www.svgrepo.com/show/355037/google.svg" alt="Google" class="w-5 h-5 mr-2" />
          Continue with Google
        </button>
        <p class="text-sm mt-4 text-center text-white/80">Have an Account? <a href="#" class="underline">Let's Login.</a></p>
      </div>

      <!-- Right Image -->
      <div class="w-full md:w-1/2">
        <img src="https://images.pexels.com/photos/3184426/pexels-photo-3184426.jpeg" alt="Register Image" class="object-cover w-full h-full" />
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="bg-[#061c31] text-white mt-12">
    <div class="max-w-6xl mx-auto py-10 px-4 grid md:grid-cols-3 gap-6">
      
      <!-- Mitra Section -->
      <div>
        <h3 class="text-lg font-semibold mb-2">Jadilah Mitra Kami</h3>
        <input type="email" placeholder="Email Bisnis Anda" class="w-full p-2 rounded bg-white text-black mb-2" />
        <button class="bg-teal-500 px-4 py-2 rounded text-white">Kirim</button>
        <p class="mt-4 text-sm">Kunjungi Warehouse Kami<br>JL. JAGAKARSA RAYA, RT.014/01,<br>KEL. JAGAKARSA</p>
      </div>

      <!-- Logo -->
      <div class="flex flex-col items-center justify-center">
        <div class="text-3xl font-bold">ANANDA</div>
        <p class="text-sm text-gray-400">LINTAS CAKRAWALA</p>
      </div>

      <!-- Layanan -->
      <div>
        <h3 class="text-lg font-semibold mb-2">Layanan Kami</h3>
        <ul class="space-y-1 text-sm">
          <li><a href="#" class="hover:underline">Mitra</a></li>
          <li><a href="#" class="hover:underline">Produk Partner Kami</a></li>
          <li><a href="#" class="hover:underline">Brand Kami</a></li>
          <li><a href="#" class="hover:underline">Karir</a></li>
          <li><a href="#" class="hover:underline">Hubungi Kami</a></li>
        </ul>
        <div class="flex space-x-4 mt-4">
          <a href="#"><img src="https://www.svgrepo.com/show/349535/facebook.svg" class="w-5" alt="Facebook" /></a>
          <a href="#"><img src="https://www.svgrepo.com/show/349330/instagram.svg" class="w-5" alt="Instagram" /></a>
          <a href="#"><img src="https://www.svgrepo.com/show/349604/whatsapp.svg" class="w-5" alt="WhatsApp" /></a>
          <a href="#"><img src="https://www.svgrepo.com/show/349418/email.svg" class="w-5" alt="Email" /></a>
        </div>
      </div>
    </div>
    <div class="text-center py-4 text-sm text-gray-400 border-t border-gray-700">
      © 2023 Ananda Lintas Cakrawala. All rights reserved.
    </div>
  </footer>
</body>
</html>