<?php 
include "sesi_admin.php";

if (isset($_POST['simpan'])) {
    include('../koneksi.php');
    
    $tanggal     = $_POST['tanggal'];
    $noinv       = $_POST['noinv'];
    $supplier    = $_POST['supplier'];
    $kode_brg    = $_POST['kode_brg'];
    $nama_brg    = $_POST['nama_brg'];
    $stok        = $_POST['stok'];
    $jml_masuk   = $_POST['jml_masuk'];
    $jam         = $_POST['jam'];
    $petugas     = $_POST['petugas'];
    $tambahStok  = $stok + $jml_masuk;

    // Periksa apakah nomor invoice sudah ada
    $checkQuery = "SELECT COUNT(*) as count FROM tb_barang_in WHERE noinv = '$noinv'";
    $checkResult = mysqli_query($koneksi, $checkQuery);
    $checkData = mysqli_fetch_assoc($checkResult);

    if ($checkData['count'] > 0) {
        // Jika nomor invoice sudah ada, tambahkan suffix angka untuk menghindari bentrok
        $uniqueNoInv = $noinv . '-' . time();
        $noinv = $uniqueNoInv;
    }

    // Update stok barang
    $update = "UPDATE tb_barang SET stok = '$tambahStok' WHERE kode_brg = '$kode_brg'";
    $result = mysqli_query($koneksi, $update);
    if (!$result) {
        die('Error: ' . mysqli_error($koneksi));
    }

    // Simpan data barang masuk
    $sql = "INSERT INTO tb_barang_in SET 
                tanggal = '$tanggal', 
                noinv = '$noinv', 
                supplier = '$supplier', 
                kode_brg = '$kode_brg', 
                nama_brg = '$nama_brg', 
                stok = '$stok', 
                jml_masuk = '$jml_masuk', 
                jam = '$jam', 
                petugas = '$petugas'";
    $insertResult = mysqli_query($koneksi, $sql);
    
    if ($insertResult) {
        header("location: ?m=barangMasuk&s=awal");
    } else {
        echo "Gagal menyimpan data: " . mysqli_error($koneksi);
    }
}
?>
