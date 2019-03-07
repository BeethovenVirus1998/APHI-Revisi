
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
                <nav class="navbar-mobile">
                    <div class="container-fluid">
                        <ul class="navbar-mobile__list list-unstyled">
                            <?php if ($this->session->userdata('level') == 'pembeli'): ?>

                                
                            
                                <li>
                                    <?php echo anchor('Penjual/Pesan', '<i class="fas  fa-archive"></i>Informasi</a>') ?>
                                </li>

                                 <li>
                                    <a class="js-arrow" href="#">
                                        <i class="fas fa-tachometer-alt"></i>Pemesanan</a>
                                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                                        <li>
                                            <?php echo anchor('Penjual/Order', 'Padi') ?>
                                        </li>
                                        <li>
                                            <?php echo anchor('Penjual/Palawija', 'Palawija') ?>
                                        </li>
                                    </ul>
                                </li>
                                

                                

                            <?php endif; ?>

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
                            <?php if ($this->session->userdata('level') == 'pembeli'): ?>

                               
                                
                            
                                
                                    <?php
                                        foreach ($order as $row):
                                        ?>


                                    <?php if ($row->informasi == TRUE): ?>

                                        <?php $id = $this->session->userdata('id');
                                        $pesan = $this->db->get_where('order', array('id' => $id))->num_rows(); ?>

                                    <li>
                                         <a href="<?php echo base_url()?>Informasi"><i class="fa  fa-envelope"></i>Pesan <span class="badge badge-light" style="background-color: red;"> <?php echo $pesan ?> </span></a> 
                                    </li>
                                    <?php else: ?>
                                    <li>
                                        <?php echo anchor('Informasi', '<i class="fa fa-envelope"></i>Pesan</a>') ?>
                                    </li>
                                    <?php endif; ?>

                                    

                                     

                                    <?php if ($row->status == 1): ?>
                                     
                                        <?php $id = $this->session->userdata('id');
                                        $jumlah = $this->db->get_where('order', array('id' => $id))->num_rows(); ?>
                                    <li>
                                        <a href="<?php echo base_url()?>Status_pembeli"><i class="fa fa-handshake"></i>Transaksi <span class="badge badge-light" style="background-color: red;"> <?php echo $jumlah ?> </span></a> 
                                    </li>
                                    <?php else: ?>
                                    <li>
                                        <?php echo anchor('Status_pembeli', '<i class="fa fa-handshake"></i>Transaksi</a>') ?>  
                                    </li>
                                    <?php endif; ?>
                                    <?php endforeach; ?>

                                    

                                     <li>
                                        <?php echo anchor('Informasi_pembeli', '<i class="fa fa-info"></i>Informasi</a>') ?>
                                    </li>

                                      

                                    <li>
                                    <a class="js-arrow" href="#">
                                        <i class="fa fa-shopping-cart"></i>Beli Produk</a>
                                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                                        <li>
                                            <?php echo anchor('UserPadi', 'Padi') ?>
                                        </li>
                                        <li>
                                            <?php echo anchor('Penjual/Palawija', 'Palawija') ?>
                                        </li>
                                    </ul>
                                </li>
                                
                            <?php endif; ?>
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
                                                <img style="size: 50px;" src="<?php echo base_url() ?>assets/img/user.png" alt="APHI" />
                                            </div>
                                            <div class="content">
                                                <a class="js-acc-btn" href="#"><?php echo $this->session->userdata('nama') ?></a>
                                            </div>
                                            <div class="account-dropdown js-dropdown">
                                                <div class="info clearfix">
                                                    <div class="image">
                                                        <a href="#">
                                                            <img src="<?php echo base_url() ?>assets/img/user.png" alt="APHI" />
                                                        </a>
                                                    </div>
                                                    <div class="content">
                                                        <h5 class="name">
                                                            <a href="#"><?php echo $this->session->userdata('nama') ?></a>
                                                        </h5>
                                                        <span class="email"><?php echo $this->session->userdata('nama') ?></span>
                                                    </div>
                                                </div>
                                                
                                                 <?php
                                                 $idp = $this->session->userdata('email');
                                        $id2p = $this->session->userdata('password');
                                        $id4p = $this->session->userdata('level');
                                        $id3p = $this->session->userdata('id_penjual');
                                        

                                        $session_data2 = $this->session->set_userdata(array('level' => 'penjual','status_login' => 'ok'));
                                        $this->session->set_userdata($session_data2);
                                        $this->session->set_userdata('id_order');

                                        $this->session->set_userdata('level', 'pembeli');

                                        $sebagaipembeli = $this->db->get_where('pembeli', array('email' => $idp, 'password' => $id2p, 'level' => 'pembeli'))->result(); ?>
                                      
                                  
                                                <?php
                                                 $idpj = $this->session->userdata('email');
                                        $id2pj = $this->session->userdata('password');
                                        $id4pj = $this->session->userdata('level');
                                        $id3pj = $this->session->userdata('id');

                                        $session_data = $this->session->set_userdata(array('level' => 'pembeli','status_login' => 'ok'));
                                        $this->session->set_userdata($session_data);

                                        $this->session->set_userdata('level', 'penjual');

                                        $sebagaipenjual = $this->db->get_where('penjual', array('email' => $idpj, 'password' => $id2pj, 'level' => 1))->result(); ?>
                                      
                                    <?php if ($sebagaipenjual == TRUE): ?>

                                      
                                    <div class="account-dropdown__body">
                                        
                                                <div class="account-dropdown__item">
                                                    <a href="<?php echo site_url('Penjual/Dashboard') ?>">
                                                        <i class="fa fa-user"></i>Penjual</a>

                                                </div>
                                    
                                    <?php elseif ($sebagaipembeli == TRUE): ?>
                                         <div class="account-dropdown__body">
                                         <div class="account-dropdown__item">
                                                    <a href="<?php echo site_url('Bepenjual/add') ?>">
                                                        <i class="fa fa-plus-circle"></i>Sebagai Penjual</a>

                                                </div>
                                     <?php else: ?>
                                     
                                        
                                                <div class="account-dropdown__item">
                                                    <a href="<?php echo site_url('Dashboard_pembeli') ?>">
                                                        <i class="fa fa-user"></i>Pembeli</a>

                                                </div>
                                            </div>


                                    
                                    <?php endif; ?>
                                    



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
