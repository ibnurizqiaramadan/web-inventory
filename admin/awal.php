<?php
include '../koneksi.php';

if (!isset($_SESSION["idinv"])) {
    header("Location: login.php");
    exit();
}

$id = $_SESSION['idinv'];
$sql = "SELECT * FROM tb_admin WHERE id_admin = '$id'";
$query = mysqli_query($koneksi, $sql);
$r = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php echo $judul; ?></title>

    <!-- Bootstrap CSS -->
    <link href="../vendor/css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Custom CSS -->
    <link href="../css/tampilanadmin.css" rel="stylesheet">
</head>

<body>
    <!-- Menu -->
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand">Inventory Pury Electronic</a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <img src="../images/admin/<?php echo $r['foto']; ?>" height="50"> <?php echo $r['nama']; ?>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li>
                            <form action="logout.php" method="post" onsubmit="return confirm('Apakah anda ingin logout?');">
                                <button class="btn btn-default" type="submit" name="keluar"><i class="fa fa-sign-out"></i> Logout</button>
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>

            <!-- Sidebar Menu -->
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li><a href="?m=awal.php"><i class="fa fa-dashboard"></i> Beranda</a></li>
                        <li><a href="?m=admin&s=awal"><i class="fa fa-user"></i> Data Admin</a></li>
                        <li><a href="?m=petugas&s=awal"><i class="fa fa-users"></i> Data Karyawan</a></li>
                        <li><a href="?m=rak&s=awal"><i class="fa fa-cubes"></i> Data Rak</a></li>
                        <li><a href="?m=supplier&s=awal"><i class="fa fa-building"></i> Data Supplier</a></li>
                        <li><a href="?m=barang&s=awal"><i class="fa fa-archive"></i> Data Barang</a></li>
                        <li><a href="?m=barangKeluar&s=awal"><i class="fa fa-cart-arrow-down"></i> Data Barang Keluar</a></li>
                        <li><a href="logout.php" onclick="return confirm('Apakah anda ingin logout?')"><i class="fa fa-warning"></i> Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Selamat Datang, <?php echo $r['nama']; ?></h1>
                </div>
            </div>

            <div class="row">
                <?php
                $panels = [
                    ['icon' => 'fa-users', 'count' => 'SELECT count(id_admin) as jadmin FROM tb_admin', 'label' => 'Jumlah Admin', 'link' => '?m=admin&s=awal'],
                    ['icon' => 'fa-building', 'count' => 'SELECT count(id_sup) as jsup FROM tb_sup', 'label' => 'Jumlah Supplier', 'link' => '?m=supplier&s=awal'],
                    ['icon' => 'fa-cubes', 'count' => 'SELECT count(id_rak) as jrak FROM tb_rak', 'label' => 'Jumlah Rak', 'link' => '?m=rak&s=awal'],
                    ['icon' => 'fa-archive', 'count' => 'SELECT count(kode_brg) as jbrg FROM tb_barang', 'label' => 'Jumlah Barang', 'link' => '?m=barang&s=awal'],
                    ['icon' => 'fa-cart-plus', 'count' => 'SELECT count(id_brg_in) as jbrg_in FROM tb_barang_in', 'label' => 'Jumlah Barang Masuk', 'link' => '#'],
                    ['icon' => 'fa-gift', 'count' => 'SELECT count(no_ajuan) as jajuan FROM tb_ajuan', 'label' => 'Jumlah Ajuan', 'link' => '#'],
                    ['icon' => 'fa-cart-arrow-down', 'count' => 'SELECT count(no_brg_out) as jbrg_out FROM tb_barang_out', 'label' => 'Jumlah Barang Keluar', 'link' => '#'],
                ];

                foreach ($panels as $panel) {
                    $query = mysqli_query($koneksi, $panel['count']);
                    $result = mysqli_fetch_assoc($query);
                    $count = $result[array_keys($result)[0]];

                    // Periksa apakah label termasuk yang ingin dihapus "View Details"
                    $hideViewDetails = in_array($panel['label'], ['Jumlah Barang Masuk', 'Jumlah Ajuan', 'Jumlah Barang Keluar']);

                    echo "
                    <div class='col-lg-3 col-md-6'>
                        <div class='panel panel-" . ($panel['icon'] == 'fa-cart-plus' || $panel['icon'] == 'fa-gift' ? 'yellow' : 'red') . "'>
                            <div class='panel-heading'>
                                <div class='row'>
                                    <div class='col-xs-3'>
                                        <i class='fa " . $panel['icon'] . " fa-5x'></i>
                                    </div>
                                    <div class='col-xs-9 text-right'>
                                        <h3>$count</h3>
                                        <div>{$panel['label']}</div>
                                    </div>
                                </div>
                            </div>";

                    // Tampilkan "View Details" hanya jika bukan di kolom yang diminta
                    if (!$hideViewDetails) {
                        echo "
                            <a href='{$panel['link']}'>
                                <div class='panel-footer'>
                                    <span class='pull-left'>View Details</span>
                                    <span class='pull-right'><i class='fa fa-arrow-circle-right'></i></span>
                                    <div class='clearfix'></div>
                                </div>
                            </a>";
                    }

                    echo "
                        </div>
                    </div>";
                }

                ?>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="text-center">
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <p class="text-muted" style="font-size: 16px;">Copyright &copy;<script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="../vendor/css/js/bootstrap.min.js"></script>
</body>

</html>