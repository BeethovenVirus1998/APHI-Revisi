
<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- Required meta tags-->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="au theme template">
        <meta name="author" content="Hau Nguyen">
        <meta name="keywords" content="au theme template">

        <!-- Title Page-->
        <title>Dashboard</title>

        <!-- Fontfaces CSS-->
        <link href="<?php echo base_url() ?>admin/css/font-face.css" rel="stylesheet" media="all">
        <link href="<?php echo base_url() ?>admin/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
        <link href="<?php echo base_url() ?>admin/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
        <link href="<?php echo base_url() ?>admin/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

        <!-- Bootstrap CSS-->
        <link href="<?php echo base_url() ?>admin/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/bootstrap.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/bootstrap4.min.css"/>

        <!-- Vendor CSS-->
        <link href="<?php echo base_url() ?>admin/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
        <link href="<?php echo base_url() ?>admin/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
        <link href="<?php echo base_url() ?>admin/vendor/wow/animate.css" rel="stylesheet" media="all">
        <link href="<?php echo base_url() ?>admin/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
        <link href="<?php echo base_url() ?>admin/vendor/slick/slick.css" rel="stylesheet" media="all">
        <link href="<?php echo base_url() ?>admin/vendor/select2/select2.min.css" rel="stylesheet" media="all">
        <link href="<?php echo base_url() ?>admin/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

        <!-- Main CSS-->
        <link href="<?php echo base_url() ?>admin/css/theme.css" rel="stylesheet" media="all">

    </head>

    <body class="animsition">
        <div class="page-wrapper">
            <!-- HEADER MOBILE-->
            <header class="header-mobile d-block d-lg-none">
                <div class="header-mobile__bar">
                    <div class="container-fluid">
                        <div class="header-mobile-inner">
                            <a class="logo" href="index.html">
                                <img src="<?php echo base_url() ?>assets/img/dashboard.png" alt="CoolPenjual" />
                            </a>
                            <button class="hamburger hamburger--slider" type="button">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- START HERE -->
                <nav class="navbar-mobile">
                    <div class="container-fluid">
                        <ul class="navbar-mobile__list list-unstyled">
                           <li class="active has-sub">
                            <a class="js-arrow" href="Dashboard.html">
                                <i class="fas fa-home"></i>Dashboard</a>
                        </li>


                                     
                                        <?php 
                                        $jumlah = $this->db->get_where('penjual', array('status' => 2))->num_rows(); ?>
                                    <li>
                                        <a href="<?php echo base_url()?>Admin/DataPenjual"><i class="fas fa-chart-bar"></i>Transaksi <span class="badge badge-light" style="background-color: red;"> <?php echo $jumlah ?> </span></a> 
                                    </li>
                                    
                                     <li>
                                    <?php echo anchor('Admin/DataPenjual', '<i class="fas fa-chart-bar"></i>Data Penjual</a>') ?>
                                      </li>
                                    
                                    



                       
                         <li>
                            <?php echo anchor('Admin/DataPembeli', '<i class="fas fa-chart-bar"></i>Data Pembeli</a>') ?>
                        </li>
                       <li>
                            <?php echo anchor('Admin/DataTransaksi', '<i class="fas fa-handshake"></i>Data Transaksi</a>') ?>
                        </li>

                        </ul>
                    </div>
                </nav>

            </header>

            <!-- END HEADER MOBILE-->

            <!-- MENU SIDEBAR-->
            <aside class="menu-sidebar d-none d-lg-block">
                <div class="logo">
                    <a href="#">
                        <img src="<?php echo base_url() ?>assets/img/dashboard.png" alt="Cool Penjual" />
                    </a>
                </div>
                <div class="menu-sidebar__content js-scrollbar1">
                    <nav class="navbar-sidebar">
                        <ul class="list-unstyled navbar__list">
                           <li class="active has-sub">
                            <a class="js-arrow" href="Dashboard.html">
                                <i class="fas fa-home"></i>Dashboard</a>
                        </li>

                                 <?php 
                                        $jumlah = $this->db->get_where('penjual', array('status' => 2))->num_rows(); ?>
                               
                                    <?php if ($jumlah == TRUE): ?>
                                     
                                        
                                    <li>
                                        <a href="<?php echo base_url()?>Admin/DataPenjual"><i class="fas fa-chart-bar"></i>Data Penjual <span class="badge badge-light" style="background-color: red;"> <?php echo $jumlah ?> </span></a> 
                                    </li>
                                    <?php else: ?>
                                     <li>
                                    <?php echo anchor('Admin/DataPenjual', '<i class="fas fa-chart-bar"></i>Data Penjual</a>') ?>
                                      </li>
                                    <?php endif; ?>

                                     <?php 
                                        $jumlah1 = $this->db->get_where('produk', array('status' => 0))->num_rows(); ?>
                               
                                    <?php if ($jumlah1 == TRUE): ?>
                                     
                                        
                                    <li>
                                        <a href="<?php echo base_url()?>Admin/AccProduk"><i class="fas fa-chart-bar"></i>Permintaan  <span class="badge badge-light" style="background-color: red;"> <?php echo $jumlah1 ?> </span></a> 
                                    </li>
                                    <?php else: ?>
                                     <li>
                                    <?php echo anchor('Admin/AccProduk', '<i class="fas fa-chart-bar"></i>Permintaan </a>') ?>
                                      </li>
                                    <?php endif; ?>
                                   

                         <li>
                           <li>
                            <?php echo anchor('Admin/DataPembeli', '<i class="fas fa-chart-bar"></i>Data Pembeli</a>') ?>
                        </li>
                        </li>
                        <li>
                            <?php echo anchor('Admin/DataTransaksi', '<i class="fas fa-handshake"></i>Data Transaksi</a>') ?>
                        </li>
                        </ul>
                    </nav>
                </div>
            </aside>
            <!-- END MENU SIDEBAR-->

            <!-- PAGE CONTAINER-->
            <div class="page-container">
                <!-- HEADER DESKTOP-->
                <header class="header-desktop">
                    <div class="section__content section__content--p30">
                        <div class="container-fluid">
                            <div class="header-wrap">
                                <form class="form-header" action="" method="POST">

                                </form>
                                <div class="header-button">
                                    <div class="account-wrap">
                                        <div class="account-item clearfix js-item-menu">
                                            <div class="image">
                                                <img src="<?php echo base_url() ?>assets/img/imy2.png" alt="APHI" />
                                            </div>
                                            <div class="content">
                                                <a class="js-acc-btn" href="#"><?php echo $this->session->userdata('username') ?></a>
                                            </div>
                                            <div class="account-dropdown js-dropdown">
                                                <div class="info clearfix">
                                                    <div class="image">
                                                        <a href="#">
                                                            <img src="<?php echo base_url() ?>assets/img/imy2.png" alt="APHI" />
                                                        </a>
                                                    </div>
                                                    <div class="content">
                                                        <h5 class="name">
                                                            <a href="#"><?php echo $this->session->userdata('username') ?></a>
                                                        </h5>
                                                        <span class="email"><?php echo $this->session->userdata('nama') ?></span>
                                                    </div>
                                                </div>
                                                 
                                                <div class="account-dropdown__footer">
                                                    <a href="<?php echo site_url('Penjual/Auth/logout') ?>">
                                                        <i class="zmdi zmdi-power"></i>Logout</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
                <!-- HEADER DESKTOP-->

                <!-- MAIN CONTENT-->
                <div class="main-content">





                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Tambah Foto</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <?php echo form_open_multipart('Penjual/Foto/add') ?>
                                    <div class="col-sm-4">
                                        <span class="icon-picture">
                                            <label class="icon-apple">Masukan Foto
                                                <input type="file" name="userfile" class="form-control"></label>
                                        </span>
                                    </div>
                                    <div class="col-sm-8">
                                        <label class="icon-apple">Nama Foto
                                            <input type="text" name="nama_foto" class="form-control">
                                        </label>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" name="submit" class="btn btn-primary">Save changes</button>
                                </div>

                                <?php echo form_close(); ?>
                            </div>
                        </div>
                    </div>






                    <div class="section__content section__content--p30">
                        <div class="container-fluid">

                            <?php echo $contents; ?>


                        </div>
                    </div>
                </div>


                <!-- Modal for edit -->
                <div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="Modal" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Edit Foto</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">

                                <div class="widget-content">
                                    <?php echo form_open_multipart('Penjual/Foto/edit') ?>
                                    <div>
                                        <input type="hidden" id="id_foto" name="id_foto">
                                        <label class="icon-android">Nama Foto</label>
                                        <input type="text" id="nama_foto" name="nama_foto" required="" class="form-control">
                                        <hr>
                                        <hr>
                                        <input type="file" name="userfile" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                <button type="submit" name="submit" class="btn btn-primary">Edit</button>
                            </div>
                            <?php echo form_close(); ?>
                        </div>
                    </div>
                </div>
                <!-- Modal for edit -->

                <!-- END MAIN CONTENT-->
                <!-- END PAGE CONTAINER-->
            </div>

        </div>

        <!-- Jquery JS-->
        <script src="<?php echo base_url() ?>admin/vendor/jquery-3.2.1.min.js"></script>
        <!-- Bootstrap JS-->
        <script src="<?php echo base_url() ?>admin/vendor/bootstrap-4.1/popper.min.js"></script>
        <script src="<?php echo base_url() ?>admin/vendor/bootstrap-4.1/bootstrap.min.js"></script>
        <!-- Vendor JS       -->
        <script src="<?php echo base_url() ?>admin/vendor/slick/slick.min.js">
        </script>
        <script src="<?php echo base_url() ?>admin/vendor/wow/wow.min.js"></script>
        <script src="<?php echo base_url() ?>admin/vendor/animsition/animsition.min.js"></script>
        <script src="<?php echo base_url() ?>admin/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
        </script>
        <script src="<?php echo base_url() ?>admin/vendor/counter-up/jquery.waypoints.min.js"></script>
        <script src="<?php echo base_url() ?>admin/vendor/counter-up/jquery.counterup.min.js">
        </script>
        <script src="<?php echo base_url() ?>admin/vendor/circle-progress/circle-progress.min.js"></script>
        <script src="<?php echo base_url() ?>admin/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
        <script src="<?php echo base_url() ?>admin/vendor/chartjs/Chart.bundle.min.js"></script>
        <script src="<?php echo base_url() ?>admin/vendor/select2/select2.min.js">
        </script>

        <!-- Main JS-->
        <script src="<?php echo base_url() ?>admin/js/main.js"></script>

        <script type="text/javascript" src="<?php echo base_url() ?>assets/jquery-3.3.1.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/dataTables.bootstrap4.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/ckeditor.js"></script>


        <script type="text/javascript">
            $(document).ready(function () {
                $('#example').DataTable();
            });
        </script>
        <script>
            ClassicEditor
                    .create(document.querySelector('#editor'))
                    .then(editor => {
                        console.log(editor);
                    })
                    .catch(error => {
                        console.error(error);
                    });
        </script>

    </body>

</html>
<!-- end document-->
