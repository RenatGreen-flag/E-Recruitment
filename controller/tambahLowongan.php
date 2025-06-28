<?php 
include '../model/Lowongan.php';
include '../koneksi/koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $data = [
        'kd_lowongan' => $_POST['kode'],
        'nama' => $_POST['nama'],
        'departemen' => $_POST['departemen'],
        'tipe' => $_POST['tipe'],
        'deadline' => $_POST['deadline'],
        'gaji' => $_POST['gaji'],
        'deskripsi' => $_POST['deskripsi'],
        'persyaratan' => $_POST['persyaratan']

    ]; 
    $lowongan = new Lowongan($koneksi);
    $lowongan->tambahLowongan($data['kd_lowongan'],$data['nama'],$data['departemen'],$data['tipe'],
    $data['deadline'],$data['gaji'],$data['deskripsi'],$data['persyaratan']);
}
header('location:../admin/panelloker.php')
?>