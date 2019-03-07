<?php $this->load->view('layout/head'); ?>
<?php $this->load->view('layout/header'); ?>
<!-- start banner Area -->
<section class="banner-area relative" id="home">    
    <div class="overlay overlay-bg"></div>
    <div class="container">             
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Beli        
                </h1>   
                <p class="text-white link-nav"><a href="<?php echo site_url('Welcome') ?>">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="<?php echo site_url('Padi') ?>">Beli</a></p>
            </div>  
        </div>
    </div>
</section>
<!-- End banner Area -->    


<!-- Start training Area -->
<section class="training-area section-gap">
    <div class="container">
        <?php echo form_open('Padi/pesan', 'class="form-area" class="contact-form text-right"') ?>
        <div class="row">
            <div class="col-md-6">
                <div style="background-color:#9ACD32" class="booking-right">
                    <label >Nama</label>
                    <input name="nama" placeholder="masukan nama" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Masukan Nama'" class="common-input mb-20 form-control" required="" type="text">
                    <label >Email</label>
                    <input name="email" placeholder="masukan email anda" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Masukan Email'" class="common-input mb-20 form-control" required="" type="email">
                    <label >No Telpon</label>
                    <input name="no_telpon" placeholder="masukan no telpon" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Masukan No HP'" class="common-input mb-20 form-control" required="" type="number">

                     

                    <label>Alamat lengkap</label>
                    <textarea class="common-textarea form-control" name="alamat" placeholder="alamat" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Alamat'" required=""></textarea>

                    <label >Tanggal Order</label>
                    <input name="tgl_order" placeholder="Tanggal Order" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Tanggal Order'" class="common-input mb-20 form-control" required="" type="date">
                </div>
            </div>
            <div class="col-md-6">
                <div style="background-color:#9ACD32" class="booking-right">

                    
                    <label>Nama Produk</label>
                    <select name="id_produk" class="form-control">
                        <option value="<?php echo $produk['id_produk'] ?>"><?php echo $produk['nama_produk'] ?></option>
                    </select>
                    <label>Harga/Kg</label>
                    <select name="harga_produk" class="form-control">
                        <option id="txt1"  onkeyup="sum();" value="<?php echo $produk['harga_produk'] ?>"><?php echo $produk['harga_produk'] ?></option>
                    </select>
                    <label >Jumlah Kg</label>
                    <input id="txt2"  onkeyup="sum();" name="kg" placeholder="Jumlah produk/Kg" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Berapa Kg yang ingin anda beli'" class="common-input mb-20 form-control" required="" type="number">

                    <label >Total</label>
                    <input id="txt3" name="total" readonly="readonly" placeholder="Total" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Berapa Kg yang ingin anda beli'" class="common-input mb-20 form-control" required="" type="number">

                    <label>Seller</label>
                    <select name="penjual" class="form-control">
                        <option value="<?php echo $produk['seller'] ?>"><?php echo $produk['seller'] ?></option>
                    </select>
                    <label>buat password untuk login</label>
                    <input name="password" placeholder="password untuk login" placeholder="password untuk login" class="common-input mb-20 form-control" required="" type="password">
                    <button type="submit" name="submit" class="btn btn-default btn-lg btn-block text-center">PESAN</button>
                </div>
            </div>
        </div>
        <?php echo form_close() ?>
    </div>
</section>

<script>
function sum() {
      var txtFirstNumberValue = document.getElementById('txt1').value;
      var txtSecondNumberValue = document.getElementById('txt2').value;
      var result = parseInt(txtFirstNumberValue) * parseInt(txtSecondNumberValue);
      if (!isNaN(result)) {
         document.getElementById('txt3').value = result;
      }
}
</script>

<!-- End training Area -->




           



<?php $this->load->view('layout/footer') ?>
