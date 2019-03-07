 <?php $this->load->view('layout/head'); ?>
 <div class="row">
    <div class="col-lg-9">
        <div class="card">
            <div class="card-header">
                <strong>Informasi</strong>
            </div>
            <div class="card-body card-block">
                <?php echo form_open_multipart('UserPadi/pesan');
                // echo form_hidden('token',$token);
                 ?>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label  class=" form-control-label">Nama</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text"  name="nama" disabled="" value="<?php echo $this->session->userdata('nama') ?>" class="form-control">
                        
                    </div>
                </div>

                 <div class="row form-group">
                    <div class="col col-md-3">
                        <label  class=" form-control-label">Email</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text"  name="email" disabled="" value="<?php echo $this->session->userdata('email') ?>"  class="form-control">
                        
                    </div>
                </div>
                
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label class="form-control-label">Nomor Telepon</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="number" disabled="" value="<?php echo $this->session->userdata('no_telpon') ?>" name="no_telp"  class="form-control">
                        
                    </div>
                </div>


                <div class="row form-group">
                    <div class="col col-md-3">
                        <label  class=" form-control-label">Alamat</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" disabled="" name="alamat" value="<?php echo $this->session->userdata('alamat') ?>"  class="form-control">
                        
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label  class=" form-control-label">Tanggal Order</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input name="tgl_order" placeholder="Tanggal Order" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Tanggal Order'" class="common-input mb-20 form-control" required="" type="date">
                        
                    </div>
                </div>
        
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label  class=" form-control-label">Nama Produk</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <select name="id_produk" class="form-control">
                        <option value="<?php echo $produk['id_produk'] ?>"><?php echo $produk['nama_produk'] ?></option>
                    </select>
                        
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label  class=" form-control-label">Harga/Kg</label>
                    </div>
                    <div class="col-12 col-md-9">
                         <select name="harga_produk" class="form-control">
                        <option id="txt1"  onkeyup="sum();" value="<?php echo $produk['harga_produk'] ?>"><?php echo $produk['harga_produk'] ?></option>
                    </select>
                        
                    </div>
                </div>

                 <div class="row form-group">
                    <div class="col col-md-3">
                        <label  class=" form-control-label">Jumlah/Kg</label>
                    </div>
                    <div class="col-12 col-md-9">
                         <input id="txt2"  onkeyup="sum();" name="kg" placeholder="Jumlah produk/Kg" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Berapa Kg yang ingin anda beli'" class="common-input mb-20 form-control" required="" type="number">
                        
                    </div>
                </div>
                    

                       <div class="row form-group">
                    <div class="col col-md-3">
                        <label  class=" form-control-label">Total</label>
                    </div>
                    <div class="col-12 col-md-9">
                         <input id="txt3" name="total" readonly="readonly" placeholder="Total" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Berapa Kg yang ingin anda beli'" class="common-input mb-20 form-control" required="" type="number">

                        
                    </div>
                </div>

                  <div class="row form-group">
                    <div class="col col-md-3">
                        <label  class=" form-control-label">Seller</label>
                    </div>
                    <div class="col-12 col-md-9">
                         <select name="penjual" class="form-control">
                        <option value="<?php echo $produk['seller'] ?>"><?php echo $produk['seller'] ?></option>
                    </select>

                        
                    </div>
                </div>
                <br>
                 <button type="submit" name="submit" class="btn btn-primary text-center">PESAN</button>
               
                    


               
            </div>

               

            <?php echo form_close(); ?>
        </div>
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




           




