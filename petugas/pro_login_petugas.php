<?php 
include '../koneksi.php';
$user = $_POST['user'];
$pass = md5($_POST['pass']);

// Query untuk memeriksa username dan password
$sql = "SELECT * FROM tb_petugas WHERE username = '$user' AND password = '$pass'";
$login = mysqli_query($koneksi, $sql);
$ketemu = mysqli_num_rows($login);
$b = mysqli_fetch_array($login);

if ($ketemu > 0) {
    // Jika login berhasil, simpan data ke session
    session_start();
    $_SESSION['idinv2'] = $b['id_petugas'];
    $_SESSION['userinv2'] = $b['username'];
    $_SESSION['passinv2'] = $b['password'];
    $_SESSION['namainv2'] = $b['nama'];
    $_SESSION['teleponinv2'] = $b['telepon'];

    // Redirect ke halaman awal
    header("location: index.php?m=awal");
    exit();
} else {
    // Redirect kembali ke halaman login dengan pesan error
    $error_message = "Username atau Password ada yang salah, atau akun Anda belum aktif.";
    header("location: login_petugas.php?error=" . urlencode($error_message));
    exit();
}
?>
