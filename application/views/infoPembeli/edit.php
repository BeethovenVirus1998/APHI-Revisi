<div class="row">
    <div class="col-lg-9">
        <div class="card">
            <div class="card-header">
                <strong>Edit Informasi</strong>
            </div>
            <div class="card-body card-block">
                <?php echo form_open_multipart('Informasi_pembeli/edit'); 
                
                 ?>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label  class=" form-control-label">Nama</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" value="<?php  echo $pembeli['nama'] ?>"  name="nama" placeholder="Nama Lengkap" class="form-control">
                        
                    </div>
                </div>
                

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label class="form-control-label">Email</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="number" name="email" value="<?php echo $pembeli['email'] ?>" placeholder="email" class="form-control">
                        
                    </div>
                </div>
            </div>

            <div class="row form-group">
                    <div class="col col-md-3">
                        <label class="form-control-label">Alamat</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" name="alamat" value="<?php echo $pembeli['alamat'] ?>" placeholder="Alamat Lengkap" class="form-control">
                     
                    </div>
                </div>
            </div>

            <div class="row form-group">
                    <div class="col col-md-3">
                        <label class="form-control-label">No Telepon</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="number" name="no_telp" value="<?php echo $pembeli['no_telp'] ?>" placeholder="Nomor Telepon yang bisa dihubungi" class="form-control">
                     
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <input type="submit" name="submit" class="btn btn-primary btn-sm">


                <?php echo anchor('Informasi_pembeli', '<i class="fa fa-ban"></i>Kembali', array('class' => 'btn btn-danger btn-sm')) ?>
            </div>

            <?php echo form_close(); ?>
        </div>
    </div>
</div>
