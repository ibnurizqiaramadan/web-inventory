<?php
session_start();

// Menghapus semua data sesi
unset($_SESSION['idinv']);
unset($_SESSION['userinv']);
unset($_SESSION['passinv']);
unset($_SESSION['namainv']);
unset($_SESSION['teleponinv']);
unset($_SESSION['fotoinv']);

// Menghancurkan sesi
session_destroy();

// Redirect ke halaman utama
echo "<script>window.location='../'</script>";
exit(); // Pastikan script berhenti setelah redirect
?>
