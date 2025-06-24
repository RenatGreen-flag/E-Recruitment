<?php 
include __DIR__ . '/../koneksi/koneksi.php';
include __DIR__ . '/../model/userModel.php';

session_start();
  class user{
    private $usermodel;
    public function __construct($database){
        $this->usermodel = new model($database);
    }
    public function userLogin($email,$password){
        $login = $this->usermodel->userModelLogin($email);
        if ($login && password_verify($password,$login['password'])){
            $_SESSION['email'] = $login['email'];
            $_SESSION['id'] = $login['id_kandidat'];
            $_SESSION['nama'] = $login['nama_kandidat'];
            header("location: http://e-recruitment.test/view/landingPage.php");
            exit;
        }else {
          echo "<script>
            alert('gagal, email atau password salah')
            window.location.href = '../view/login.php'
          </script>";
        }
    }
    
    public function authentikasiSesi(){
        if (!isset($_SESSION['email'])){
            header("location=../inde.php");
            exit();
        }
    }
  }
?>