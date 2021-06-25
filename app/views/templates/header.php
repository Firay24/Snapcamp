<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SnapCamp</title>
    <link rel="icon" type="image/png" href="<?= BASEURL; ?>/img/icon.jpg">

    <!-- Custom fonts for this template-->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <!-- Custom styles for this template-->
    <link href="<?= BASEURL; ?>/css/sb-admin-2.min.css" rel="stylesheet">
    <style>
        * {
            font-family: Century Gothic;
        }
    </style>

</head>

<body id="page-top">
    <?php 
        $word = explode("/", $_GET['url'], 2);
        $_GET['url'] = $word[0];
    ?>

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-dark accordion" style="background-color:#383b40ff;" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html" style="box-shadow: 0px 1px 1px #2c2f32ff;">
                <div class="sidebar-brand-icon">
                    <img src="<?= BASEURL; ?>/img/log2.png" width="120px">
                </div>
                <div class="sidebar-brand-text mx-3">

                </div>
            </a>

            <!-- Divider -->
            <!-- <hr class="sidebar-divider my-0"> -->

            <!-- Nav Item - Dashboard -->
            <?php if($_GET['url'] == "dashboard"): ?>
            <li class="nav-item active">
                <a class="nav-link" href="<?= BASEURL; ?>/dashboard">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>DASHBOARD</span></a>
            </li>
            <?php else: ?>
            <li class="nav-item">
                <a class="nav-link" href="<?= BASEURL; ?>/dashboard">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>DASHBOARD</span></a>
            </li>
            <?php endif; ?>

            <?php if($_GET['url'] == "Kelas_saya"): ?>
            <li class="nav-item active">
                <a class="nav-link" href="<?= BASEURL; ?>/Kelas_saya">
                    <i class="fad fa-chalkboard-teacher"></i>
                    <span>KELAS SAYA</span>
                </a>
            </li>
            <?php else: ?>
                <li class="nav-item">
                <a class="nav-link" href="<?= BASEURL; ?>/Kelas_saya">
                    <i class="fad fa-chalkboard-teacher"></i>
                    <span>KELAS SAYA</span>
                </a>
            </li>
            <?php endif; ?>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-user"></i>
                    <span>PROFIL</span>
                </a>
            </li>
            <?php if($_GET['url'] == "transaksi"): ?>
            <li class="nav-item active">
                <a class="nav-link" href="<?= BASEURL; ?>/transaksi">
                    <i class="fas fa-exchange-alt"></i>
                    <span>TRANSAKSI</span>
                </a>
            </li>
            <?php else: ?>
                <li class="nav-item">
                <a class="nav-link" href="<?= BASEURL; ?>/transaksi">
                    <i class="fas fa-exchange-alt"></i>
                    <span>TRANSAKSI</span>
                </a>
            </li>
            <?php endif; ?>
            <li class="nav-item">
                <a class="nav-link" href="<?= BASEURL; ?>/sertifikat">
                    <i class="fas fa-file-certificate"></i>
                    <span>SERTIFIKAT</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>KELUAR</span>
                </a>
            </li>


        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    <div>
                        
                    </div>
                </nav>