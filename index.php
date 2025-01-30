<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <!-- Bootstrap CSS -->
    <link href="vendor/css/bootstrap/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">

    <!-- Custom Theme CSS -->
    <link href="..css/tampilanadmin.css" rel="stylesheet">

    <title>Inventory Barang</title>
</head>
<body>
    <!-- Menu -->
    <nav class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                    <span class="sr-only">Navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.php">Inventory Pury Electronic</a>
            </div>

            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="page-scroll"><a href="#login">Masuk</a></li>
                    <li class="page-scroll"><a href="#tentang">Tentang</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Carousel -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img class="first-slide" src="images/logistic1.jpg" alt="First slide">
            </div>
            <div class="item">
                <img class="second-slide" src="images/logistic2.jpg" alt="Second slide">
            </div>
            <div class="item">
                <img class="third-slide" src="images/logistic4.jpg" alt="Third slide">
            </div>
        </div>
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="fa fa-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="fa fa-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- Login Feature Section -->
    <section id="login" class="section-margin" style="margin-bottom: 100pt;">
        <div class="row content text-center">
            <div class="col-lg-12 danger zero-panel">
                <h1>Silahkan Masuk Sesuai Dengan Rolenya</h1>
                <a href="admin/login.php" class="btn btn-primary">ADMIN</a>
                <br><br>
                <a href="petugas/login_petugas.php" class="btn btn-warning">KARYAWAN</a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="tentang" class="section-margin" style="margin-bottom: 100pt;">
        <div class="row content text-center">
            <div class="col-lg-12 danger zero-panel">
                <div class="jumbotron">
                    <h1>Tentang Pury Electronic</h1>
                    <p>Pury Electronic menghadirkan solusi navigasi bagi berbagai jenis kapal dan moda transportasi laut. Aplikasi berbasis Web ini mengatur dan mencatat keluar masuk barang di masing-masing gudang dalam satu perusahaan, yang meliputi pencatatan barang masuk dari Supplier dan pencatatan barang keluar.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer container">
        <section class="col-sm-12" style="margin-top: 20px;">
            <div class="col-lg-10 col-lg-offset-1 text-center">
                <hr class="medium">
                <p class="text-muted" style="font-size: 12px;">Copyright &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved</p>
            </div>
        </section>
    </footer>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="vendor/css/js/bootstrap.min.js"></script>
</body>
</html>
