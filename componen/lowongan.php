<?php 

class Lowongan{

    private $koneksi;

    public function __construct($koneksi){
        $this->koneksi = $koneksi;
    }
    public function tampilkanLowongan(){
        $sql = "SELECT judul,tgl_unggahan,deskripsi from lowongan";
        $statement = mysqli_query($this->koneksi, $sql);
        $result = $statement->fetch_all(MYSQLI_ASSOC);
        return $result;
    }
}

?>