<?php 
$koneksi = mysqli_connect("192.168.0.50", "inventoryusr", "sZh8QKcKCfWB/Lcf", "inventory");

if (mysqli_connect_errno()) {
	echo "Koneksi gagal".mysqli_connect_error();
}
 ?>