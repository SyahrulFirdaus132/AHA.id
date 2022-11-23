<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $title; ?></title>


    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <link href="<?= base_url('assets/'); ?>css/style.css" rel="stylesheet">


    <link href="<?= base_url('assets/'); ?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="<?= base_url('assets/'); ?>vendor/datatables/jquery.dataTables.min.js"></script>
    <link href="<?= base_url('assets/'); ?>vendor/datatables/jquery.dataTables.min.css" rel="stylesheet">

</head>

<body id="page-top">


    <div id="wrapper">


        <ul class="navbar-nav bg-gradient-light sidebar sidebar-dark accordion" id="accordionSidebar">


            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-text mx-3">LOGO</div>
            </a>
            <div></div>
            <p style="text-align:center ; font-size: 12px; font-style: italic;">Version 0.12 <span style="width: 28px;
                height: 18px;

                font-family: 'Poppins';
                font-style: normal;
                font-weight: 500;
                font-size: 12px;
                line-height: 18px;
                /* identical to box height */


                /* AHA Mart Colors/Brown-Magenta/Brown Dark */

                color: #98654F;


                /* Inside auto layout */

                flex: none;
                order: 1;
                flex-grow: 0">Beta</span></p>



            <hr class="sidebar-divider my-0">


            <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <img src="assets/icons/dashboard.png" alt="">
                    <span>Dashboard</span></a>
            </li>


            <hr class="sidebar-divider">


            <div class="sidebar-heading">
                Produk
            </div>

            <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <img src="assets/icons/harga.png" alt="">
                    <span>Harga</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <img src="assets/icons/kategori.png" alt="">
                    <span>Kategori</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <img src="assets/icons/produk_listing.png" alt="">
                    <span>Produk Listing</span></a>
            </li>


            <div class="sidebar-heading">
                Marketing
            </div>

            <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <img src="assets/icons/marketing_banner.png" alt="">
                    <span>Banner</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <img src="assets/icons/marketing_promo.png" alt="">
                    <span>Promo Produk</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <img src="assets/icons/marketing_voucher.png" alt="">
                    <span>Voucher</span></a>
            </li>


            <div class="sidebar-heading">
                Toko
            </div>

            <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <img src="assets/icons/toko_zona.png" alt="">
                    <span>Zona</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <img src="assets/icons/toko_geofencing.png" alt="">
                    <span>Geofencing</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <img src="assets/icons/toko_akun.png" alt="">
                    <span>Akun Toko</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <img src="assets/icons/toko_membership.png" alt="">
                    <span>Membership Toko</span></a>
            </li>

            < <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                    <img src="assets/icons/toko_stock.png" alt="">
                    <span>Stock</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Utilities:</h6>
                        <a class="collapse-item" href="utilities-color.html">Banner</a>
                        <a class="collapse-item" href="utilities-border.html">Diskon</a>
                        <a class="collapse-item" href="utilities-animation.html">Promo</a>
                    </div>
                </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="charts.html">
                        <img src="assets/icons/toko_humanresource.png" alt="">
                        <span>Human Resource</span></a>
                </li>

                <div class="sidebar-heading">
                    Driver
                </div>

                <li class="nav-item">
                    <a class="nav-link" href="charts.html">
                        <img src="assets/icons/driver_akun.png" alt="">
                        <span>Akun Driver</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="charts.html">
                        <img src="assets/icons/driver_aktifitas.png" alt="">
                        <span>Aktifitas Order</span></a>
                </li>

                <div class="sidebar-heading">
                    Pengguna
                </div>

                <li class="nav-item">
                    <a class="nav-link" href="charts.html">
                        <img src="assets/icons/pengguna_akun.png" alt="">
                        <span>Akun Pengguna</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="charts.html">
                        <img src="assets/icons/pengguna_membership.png" alt="">
                        <span>Membership Pengguna</span></a>
                </li>

                <div class="sidebar-heading">
                    Customer Service
                </div>

                <li class="nav-item">
                    <a class="nav-link" href="charts.html">
                        <img src="assets/icons/customer_komplain.png" alt="">
                        <span>Komplain</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="charts.html">
                        <img src="assets/icons/customer_aktifitas.png" alt="">
                        <span>Aktifitas Order</span></a>
                </li>



                <hr class="sidebar-divider d-none d-md-block">
        </ul>



        <div id="content-wrapper" class="d-flex flex-column">


            <div id="content">

                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">


                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>


                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search" aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn" style="background: #0095E8;" type="button">
                                    <span style="width: 30px;
                                                height: 21px;

                                                /* Button/Button-Link Semibold 14|22 */

                                                font-family: 'Poppins';
                                                font-style: normal;
                                                font-weight: 600;
                                                font-size: 14px;
                                                line-height: 21px;
                                                /* identical to box height */

                                                text-align: center;

                                                color: #FFFFFF;


                                                /* Inside auto layout */

                                                flex: none;
                                                order: 0;
                                                flex-grow">Cari</span>
                                </button>
                            </div>
                        </div>
                    </form>


                    <ul class="navbar-nav ml-auto">


                        <div class="topbar-divider d-none d-sm-block"></div>


                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="img-profile rounded-circle" src="assets/icons/Group 584.png">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small" style="width: 107px;
                                height: 24px;

                                font-family: 'Poppins';
                                font-style: normal;
                                font-weight: 500;
                                font-size: 16px;
                                line-height: 24px;
                                /* identical to box height */

                                text-align: right;

                                color: #171C32;


                                /* Inside auto layout */

                                flex: none;
                                order: 0;
                                flex-grow: 0;">&nbsp; Done Copper</span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>