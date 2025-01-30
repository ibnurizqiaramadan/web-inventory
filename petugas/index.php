<?php
session_start();
include_once "sesi_petugas.php";
$modul=(isset($_GET['m']))?$_GET['m']:"awal";
$jawal="Karyawan || Pury Electronic Karyawan";
switch($modul){
    case 'awal': default: $aktif="Beranda"; $judul="Beranda $jawal"; include "awal.php"; break;
    case 'barangMasuk': $aktif="Barang Masuk"; $judul="Barang Masuk $jawal"; include "modul/barangMasuk/index.php"; break;
    case 'ajuan': $aktif="Ajuan"; $judul="Ajuan $jawal"; include "modul/ajuan/index.php"; break;
    
    
   
}

?>
