<?php 
include '../koneksi.php';

$user = $_POST['user'];
$pass = md5($_POST['pass']);

// Query untuk memeriksa username dan password
$sql = "SELECT * FROM tb_admin WHERE username = '$user' AND password = '$pass'";
$login = mysqli_query($koneksi, $sql);
$ketemu = mysqli_num_rows($login);

if ($ketemu > 0) {
    session_start();
    $b = mysqli_fetch_array($login);

    // Simpan data ke session
    $_SESSION['idinv'] = $b['id_admin'];
    $_SESSION['userinv'] = $b['username'];
    $_SESSION['passinv'] = $b['password'];
    $_SESSION['namainv'] = $b['nama'];
    $_SESSION['teleponinv'] = $b['telepon'];
    $_SESSION['fotoinv'] = $b['foto'];

    // Redirect ke halaman awal
    header("location: index.php?m=awal");
    exit();
} else {
    // Redirect ke login dengan pesan error
    $error_message = "Username atau Password salah, atau akun Anda belum aktif.";
    header("location: login.php?error=" . urlencode($error_message));
    exit();
}
?>
