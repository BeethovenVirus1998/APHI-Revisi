<?php $this->load->view('layout/head'); ?>
<?php $this->load->view('layout/header'); ?>
<!-- start banner Area -->
<section class="banner-area relative" id="home">	
    <div class="overlay overlay-bg"></div>
    <div class="container">				
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Buah		
                </h1>	
                <p class="text-white link-nav"><a href="<?php echo site_url('Welcome') ?>">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="<?php echo site_url('Buah') ?>">Buah</a></p>
            </div>	
        </div>
    </div>
</section>
<!-- End banner Area -->	


<!-- Start training Area -->
<section class="training-area section-gap">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-9 pb-40 header-text text-center">
                <h1 class="pb-10">Buah</h1>
                <p>
                    Jenis Jenis Buah :
                </p>
            </div>
        </div>	
        <div class="row">
            <?php foreach ($produk as $p): ?>
                <div class="col-lg-4 cl-md-6">
                    <div class="single-training">
                        <div class="thumb relative">
                            <div class="overlay-bg"></div>
                            <img class="img-fluid image-responsive"  src="<?php echo base_url() ?>uploads/produk/<?php echo $p->foto ?>" alt="">
                            
                            	

                            <a  class="admission-btn btn btn-default fa fa-cart-plus" href="<?php echo site_url('Buah/pesan/'.$p->id_produk) ?>"></a>
                        </div>
                        <div class="details">
                            <div class="title justify-content-between d-flex">
                                <a href="#"><h4><?php echo $p->nama_produk ?></h4></a>
                                <p class="price">
                                    <?php echo $p->harga_produk ?>
                                </p>
                            </div>
                            <br>
                            <p style="size: 10px;">Seller : <?php echo $p->seller ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

           </div>	
</section>
<!-- End training Area -->







         



<?php $this->load->view('layout/footer') ?>
