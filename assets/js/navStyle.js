
    function showSection(id) {
      // Sembunyikan semua section
      document.querySelectorAll('.section').forEach(el => el.classList.add('hidden'));

      // Tampilkan yang dipilih
      document.getElementById(id).classList.remove('hidden');

      // Atur underline menu aktif
      document.querySelectorAll('.nav-link').forEach(btn => btn.classList.remove('active'));
      event.target.classList.add('active');
    }
