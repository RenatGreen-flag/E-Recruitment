<?php 
include __DIR__.'../controller/userauth.php';
include __DIR__.'../koneksi/koneksi.php';


class SeleksiBerkas{
    private $koneksi;

    public function __construct($koneksi){
        $this->koneksi = $koneksi;
    }

    public function tampilkanKandidat(){
        global $koneksi;
        $id_kandiadat = $_SESSION['id'];
        $query = "SELECT 
            k.nama_kandidat,
            rp.skor,
            l.tgl_pengajuan,
            loker.judul,
            l.status
            
            FROM lamaran l
            JOIN kandidat k ON l.id_kandidat = k.id_kandidat
            JOIN riwayat_pendidikan rp ON rp.id_kandidat = k.id_kandidat
            JOIN lowongan loker ON l.kd_lowongan = loker.kd_lowongan
            INNER JOIN status ON l.id_kandidat =  k.id_kandidat
            WHERE l.id_kandidat = ?
            ORDER BY l.tgl_pengajuan DESC
        ";
        $stmt = $koneksi->prepare($query);
        $stmt->bind_param("i", $id_kandiadat);
        $stmt->excecute();
        $result = $stmt->get_result();
    }
}
?>