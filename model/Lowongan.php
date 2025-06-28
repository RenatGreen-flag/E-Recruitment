<?php 

class Lowongan{

    private $koneksi;

    public function __construct($koneksi){
        $this->koneksi = $koneksi;
    }
    public function tampilkanLowongan(){
        $sql = "SELECT posisi, tgl_penutupan, tipe_pekerja, departemen, persyaratan, gaji, deskripsi from lowongan";
        $statement = mysqli_query($this->koneksi, $sql);
        $result = $statement->fetch_all(MYSQLI_ASSOC);
        return $result;
    }
    public function tambahLowongan($kode_lowongan,$nama,$departemen,$tipe,$deadline,$gaji,$deskripsi,$persyaratan){
        $sql = "INSERT INTO lowongan(kd_lowongan,posisi,departemen,tipe_pekerja,tgl_penutupan,gaji,deskripsi,persyaratan) values(?,?,?,?,?,?,?,?)  ";
        $prepare = mysqli_prepare($this->koneksi,$sql);
        $prepare->bind_param('sssssiss',$kode_lowongan,$nama,$departemen,$tipe,$deadline,$gaji,$deskripsi,$persyaratan);
        $prepare->execute();
    }
}

?>