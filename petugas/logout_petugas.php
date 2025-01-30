<?php
session_start();

// Menambahkan header untuk mencegah caching halaman
header("Cache-Control: no-cache, no-store, must-revalidate"); // Direktif untuk menghentikan cache
header("Pragma: no-cache"); // Untuk kompatibilitas dengan browser lama
header("Expires: 0"); // Menetapkan waktu kedaluwarsa ke waktu lampau

// Menghapus semua data sesi
unset($_SESSION['idinv2']);
unset($_SESSION['userinv2']);
unset($_SESSION['passinv2']);
unset($_SESSION['namainv2']);
unset($_SESSION['teleponinv2']);

// Menghancurkan sesi
session_destroy();

// Redirect ke halaman utama
echo "<script>window.location='../'</script>";
exit(); // Pastikan script berhenti setelah redirect
?>
