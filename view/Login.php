<?php 
include '../koneksi/koneksi.php';
include '../controller/userauth.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $userData = [
        'email' => $_POST['email'],
        'password' => $_POST['password']
    ];
$auth = new user($koneksi);
$auth->userLogin($userData['email'],$userData['password']);

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="../assets/css/style.css"> 
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-blue-300 min-h-screen gap-20 flex items-center justify-center">

        <form action="Login.php" method="POST" class="bg-white p-8 rounded-2xl shadow-md w-[350px]">
            <h2 class="text-center text-2xl font-bold text-cyan-900 mb-6">LOGIN</h2>
    
            <label class="block text-sm text-cyan-900 font-semibold">Email</label>
            <input name="email" placeholder="example@gmail.com" required
                class="w-full text-sm px-4 py-1 mt-1 mb-2 border rounded shadow text-gray-700" />

            <label class="block text-sm text-cyan-900 font-semibold">Password</label>
            <input type="password" name="password" placeholder="Enter Password" required
                class="w-full text-sm px-4 py-1 mt-1 mb-1 border rounded shadow text-gray-700" />

            <div class="text-right text-xs text-cyan-500 mb-3">
                <a href="#">Forgot Password?</a>
            </div>

            <button type="submit"
                 class="w-full text-sm bg-cyan-800 hover:bg-cyan-900 text-white py-1 rounded-md font-semibold">
                LOGIN
            </button>

            <div class="w-full text-sm border mt-2 rounded-md border-cyan-800">
                <a href="#" class="flex justify-center items-center gap-2 py-1 text-cyan-800 font-semibold">
                    <img src="https://www.svgrepo.com/show/475656/google-color.svg" alt="Google" class="w-4 h-4">
                    Continue with Google
                </a>
            </div>

            <p class="text-center text-xs mt-1 text-gray-500">
                Don’t Have an Account?
                <a href="Register2.php" class="text-cyan-600 font-semibold">Register</a>
            </p>
        </form>

        <div class="logo">
            <img src="../assets/img/COMPANY LOGO-white-lg.png" alt="logo company" class=" w-[300px]">
        </div>

        <?php if (isset($_GET['error']) && $_GET['error'] == 'gagal'): ?>
            <div class="mt-4 text-center text-red-500 text-sm font-medium">
                Email atau password salah!
            </div>
        <?php endif; ?>
</body>
</html>
