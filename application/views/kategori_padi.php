<?php $this->load->view('layout/head_pembeli'); ?>
<section class="training-area section">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-9 pb-40 header-text text-center">
                <h1 class="pb-10">Padi</h1>
                <p>
                    Jenis Jenis Padi :
                </p>
            </div>
        </div>  
        <div class="row">
            <?php foreach ($padi as $p): ?>
                <div class="col-lg-4 cl-md-6">
                    <div class="single-training">
                        <div class="thumb relative">
                            <div class="overlay-bg"></div>
                            <img class="img-fluid image-responsive"  src="<?php echo base_url() ?>uploads/padi/<?php echo $p->foto ?>" alt="">
                            <a class="admission-btn" href="<?php echo site_url('UserPesanPadi/pesan/'.$p->id_padi) ?>">pesan</a> 
                        </div>
                        <div class="details">
                            <div class="title justify-content-between d-flex">
                                <a href="#"><h4><?php echo $p->nama_padi ?></h4></a>
                                <p class="price">
                                    <?php echo $p->harga_padi ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <?php echo $pagination; ?>
    </div>  
</section>
