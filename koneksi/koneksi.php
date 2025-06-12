<?php 
$host = "localhost";
$user = "root";
$password = "2004";
$db = "hr_rekrutmen";
$koneksi = mysqli_connect($host, $user, $password, $db);

if (!$koneksi) {
    die("Koneksi Gagal !" .mysqli_connect_error());
}else {
    echo "Koneksi Berhasil !";
}
?>