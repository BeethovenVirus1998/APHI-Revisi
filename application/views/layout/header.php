<header id="header" id="home">
    <div class="container">
        <div class="row header-top align-items-center">
            <div class="col-lg-4 col-sm-4 menu-top-left">
                <img class="img-fluid" src="<?php echo base_url() ?>assets/img/imy.png" size="30px" alt="">
            </div>
            <div class="col-lg-4 menu-top-middle justify-content-center d-flex">
                <a href="#">
                    <img class="img-fluid" src="<?php echo base_url() ?>assets/img/lg.jpg" alt="">
                </a>
            </div>
            <div class="col-lg-4 col-sm-4 menu-top-right">
                <img class="img-fluid" src="<?php echo base_url() ?>assets/img/aphi.png" alt="">
            </div>
        </div> 
    </div>
    <hr>
    <div class="container">
        <div class="row align-items-center justify-content-center d-flex">
            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li><a href="<?php echo site_url('Welcome') ?>">Home</a></li>
                    
                    
                           
                            
                    <li class="menu-has-children"><a href="#">Kategori</a>
                        <ul>
                            <li><a href="<?php echo site_url('Padi') ?>">Padi</a></li>
                            <li><a href="<?php echo site_url('Palawija') ?>">Palawija</a></li>
                            <li><a href="<?php echo site_url('Tanaman') ?>">Tanaman</a></li>
                            <li><a href="<?php echo site_url('Buah') ?>">Buah-Buahan</a></li>
                            <li><a href="<?php echo site_url('Sayuran') ?>">Sayuran</a></li>
                        </ul>
                    </li>

                     <li class="menu-has-children"><a href="#">Login</a>
                        <ul>
                            <li><a href="<?php echo site_url('Login') ?>">Pembeli</a></li>
                            <li><a href="<?php echo site_url('Penjual/Auth') ?>">Penjual</a></li>
                            <li><a href="<?php echo site_url('Admin/Auth') ?>">Admin</a></li>
                        </ul>
                    </li>
                    
                </ul>
            </nav><!-- #nav-menu-container -->
        </div>
    </div>
</header><!-- #header -->
