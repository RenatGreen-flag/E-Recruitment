<?php 
    include __DIR__.'/../koneksi/koneksi.php';

class model{
    private $koneksi;
    public function __construct($database){
        $this->koneksi = $database;
    }
    public function userModelLogin($email){
      $sql = "SELECT id_kandidat,nama_kandidat,email,password FROM kandidat where email = ?";
      $prepare = mysqli_prepare($this->koneksi,$sql);
      $prepare->bind_param('s',$email);
       $prepare->execute();
       return $result = $prepare->get_result()->fetch_assoc();  
    }

    public function userModelRegister($nama,$email,$password){
        $hashPw = password_hash($password,PASSWORD_DEFAULT);
        $sql = "INSERT into kandidat(nama_kandidat,email,password) values(?,?,?)";
         $prepare = mysqli_prepare($this->koneksi,$sql);
         $prepare->bind_param('sss',$nama,$email, $hashPw);
         $prepare->execute();
         $result = $prepare->get_result();
         if ($result){
           echo "<script>
            alert('gagal mendaftar, silahkan daftar ulang')
            window.location.href = '../view/Register2.php'
          </script>";
          }else {
             echo "<script>
            alert('Akun Berhasil Dibuat')
            window.location.href = '../view/Login.php'
          </script>";
          }
    }
}
?>