<?php
include 'koneksi.php';

$judul = $_POST['judul'];
$isi = $_POST['isi'];
$kategori = $_POST['kategori'];
$status = '';
$tanggal = date('Y-m-d');

if (isset($_POST['kirim'])) {
    $status = 'published';
} elseif (isset($_POST['draft'])) {
    $status = 'draft';
} elseif (isset($_POST['jadwal'])) {
    $status = 'scheduled';
}

mysqli_query($koneksi, "INSERT INTO pengumuman (judul, isi, kategori, status, tanggal_publish, jumlah_penerima)
VALUES ('$judul', '$isi', '$kategori', '$status', '$tanggal', 0)");

header("Location: pengumuman.php");
?>
