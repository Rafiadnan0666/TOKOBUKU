<?php
require "../config.php";
$id = $_GET["id"];
$pen = mysqli_query($conn, "SELECT * FROM penerbit");
$p = mysqli_query($conn, "SELECT *  FROM buku  WHERE id = $id");
$e = mysqli_fetch_assoc($p);
if (isset($_POST["sub"])) {
    $kode = $_POST["kode"];
    $kategori = $_POST["kategori"];
    $nama_buku = $_POST["nama_buku"];
    $harga = $_POST["harga"];
    $stok = $_POST["stok"];
    $penerbit = $_POST["penerbit"];
    mysqli_query($conn, "UPDATE buku SET kode = '$kode' ,kategori = '$kategori',nama_buku = '$nama_buku', harga = '$harga', stok = '$stok' , penerbit = '$penerbit' WHERE id = $id");
    header("location:index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Focus - Bootstrap Admin Dashboard </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../focus-2/images/favicon.png">
    <!-- Custom Stylesheet -->
    <link href="../../focus-2/css/style.css" rel="stylesheet">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="index.html" class="brand-logo">
                <img class="logo-abbr" src="../focus-2/images/logo.png" alt="">
                <img class="logo-compact" src="../focus-2/images/logo-text.png" alt="">
                <img class="brand-title" src="../focus-2/images/logo-text.png" alt="">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="search_bar dropdown">
                                <span class="search_icon p-3 c-pointer" data-toggle="dropdown">
                                    <i class="mdi mdi-magnify"></i>
                                </span>
                                <div class="dropdown-menu p-0 m-0">
                                    <form>
                                        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                                    </form>
                                </div>
                            </div>
                        </div>

                        <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <i class="mdi mdi-bell"></i>
                                    <div class="pulse-css"></div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <ul class="list-unstyled">
                                        <li class="media dropdown-item">
                                            <span class="success"><i class="ti-user"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Martin</strong> has added a <strong>customer</strong> Successfully
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="primary"><i class="ti-shopping-cart"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Jennifer</strong> purchased Light Dashboard 2.0.</p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="danger"><i class="ti-bookmark"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Robin</strong> marked a <strong>ticket</strong> as unsolved.
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="primary"><i class="ti-heart"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>David</strong> purchased Light Dashboard 1.0.</p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="success"><i class="ti-image"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong> James.</strong> has added a<strong>customer</strong> Successfully
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                    </ul>
                                    <a class="all-notification" href="#">See all notifications <i class="ti-arrow-right"></i></a>
                                </div>
                            </li>
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <i class="mdi mdi-account"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="../focus-2/app-profile.html" class="dropdown-item">
                                        <i class="icon-user"></i>
                                        <span class="ml-2">Profile </span>
                                    </a>
                                    <a href="../focus-2/email-inbox.html" class="dropdown-item">
                                        <i class="icon-envelope-open"></i>
                                        <span class="ml-2">Inbox </span>
                                    </a>
                                    <a href="../focus-2/page-login.html" class="dropdown-item">
                                        <i class="icon-key"></i>
                                        <span class="ml-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="quixnav">
            <div class="quixnav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label first">Main Menu</li>
                    <!-- <li><a href="index.html"><i class="icon icon-single-04"></i><span class="nav-text">Dashboard</span></a>
                    </li> -->
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="../admin.php">Admin</a></li>
                    <li><a href="../pengadaan.php">Pengadaan</a></li>

                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Hi, welcome back!</h4>
                            <p class="mb-0">Your business dashboard template</p>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                            <li class="breadcrumb-item active"><a href="../admin.php">Admin</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Buku</a></li>
                        </ol>
                    </div>
                </div>
                <a href="index.php">
                    <button class="btn btn-warning mb-2">
                        <i class="fa fa-arrow-circle-left"></i> Kembali
                    </button>
                </a>
                <form method="post">
                    <div class="form-group">
                        <div class="row">
                            <label for="kode" class="col-md-2">kode</label>
                            <input type="text" value="<?= $e["kode"] ?>" name="kode" class="form-control mb-2   col-md-6" id="kode">

                        </div>
                        <div class="row">
                            <label for="kategori" class="col-md-2">kategori</label>
                            <input type="text" value="<?= $e["kategori"] ?>" name="kategori" class="form-control mb-2  col-md-6" id="kategori" placeholder="Enter kategori">

                        </div>
                        <div class="row">
                            <label for="nama_buku" class="col-md-2">nama_buku</label>
                            <input type="text" value="<?= $e["nama_buku"] ?>" name="nama_buku" class="form-control mb-2  col-md-6" id="nama_buku" placeholder="Enter nama_buku">

                        </div>
                        <div class="row">
                            <label for="stok" class="col-md-2">stok</label>
                            <input type="text" value="<?= $e["stok"] ?>" name="stok" class="form-control mb-2  col-md-6" id="stok" placeholder="Enter stok">

                        </div>
                        <div class="row">
                            <label for="harga" class="col-md-2">harga</label>
                            <input type="text" value="<?= $e["harga"] ?>" name="harga" class="form-control mb-2  col-md-6" id="harga" placeholder="Enter harga">

                        </div>
                        <div class="row">
                            <label for="penerbit" class="col-md-2">Penerbit:</label>
                            <select name="penerbit" id="penerbit" class="custom-select">
                                <option value="">-- Pilih --</option>
                                <?php foreach ($pen as $pi) : ?>
                                    <option value="<?= $pi['id'] ?>" <?= $pi['id'] === $e['penerbit'] ? 'selected' : '' ?>><?= $pi['nama'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <button class="btn btn-primary mt-3" type="submit" name="sub">
                        <i class="fas fa-save"></i> Simpan
                    </button>

                </form>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="#" target="_blank">Quixkit</a> 2019</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="../focus-2/vendor/global/global.min.js"></script>
    <script src="../focus-2/js/quixnav-init.js"></script>
    <script src="../focus-2/js/custom.min.js"></script>




</body>

</html>