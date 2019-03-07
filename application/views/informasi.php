<div class="row">
    <div class="col-lg-9">
        <div class="card">
            <div class="card-header">
                <strong>Informasi</strong>
            </div>
            <div class="card-body card-block">
                <?php echo form_open_multipart('UserPesanPadi/pesan');
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

               
            </div>

               

            <?php echo form_close(); ?>
        </div>
    </div>
</div>
