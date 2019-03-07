<?php $this->load->view('layout/head'); ?>

<section class="training-area">
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
                            
                           	

                            <a  class="admission-btn btn btn-default fa fa-cart-plus" href="<?php echo site_url('UserPadi/pesan/'.$p->id_produk) ?>"></a>
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







         




