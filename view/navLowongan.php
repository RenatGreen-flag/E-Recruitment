<?php
include ('../koneksi/koneksi.php');

?>

<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ananda Lintas Cakrawala - Lowongan</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alata&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Titan+One&display=swap" rel="stylesheet">
    <style>
      body {
        font-family: 'poppins', sans-serif;
      }
    </style>
  </head>
  <body class="bg-white text-gray-800">
    <!-- Header -->
      <nav>
        <?php 
          include ('../componen/navbarIndex.php');
        ?>
      </nav>
  
    <!-- Main Content -->
    <main class="w-full mx-auto">
        <div class="container my-50 mx-auto max-w-screen-md ">
            <section class="col-span-3 justify-center ">
                <h3 class="text-sm mx-auto text-gray-500 mb-2">Lowongan yang sesuai dengan Profil anda</h3>

                <div class="space-y-6  mx-auto">
                <!-- Job Card -->
                <?php 
                    include ('../componen/card.php');
                ?>
                </div>
            </section>
        </div>
      <!-- Job Listings -->
      
    </main>

    <!-- Footer -->
    <footer>
      <?php 
        include ('../componen/footer.php');
      ?>
    </footer>

    <script>
       function OnchangeBtn(page){
        fetch(page)
          .then(response => response.text())
          .then(html => {
            document.querySelector('main').innerHTML = html;
          })
          .catch(error => console.error('Error fetching page:', error));
      }
    </script>
  </body>
</html>
