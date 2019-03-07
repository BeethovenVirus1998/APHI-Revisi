<div class="row">
    <div class="col-lg-9">
        <div class="card">
            <div class="card-header">
                <strong>Edit Padi</strong>
            </div>
            <div class="card-body card-block">
                <?php echo form_open_multipart('BePenjual/add'); 
                echo form_hidden('nama',$pembeli['nama']);
                 ?>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label  class=" form-control-label">Nama</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" value="<?php  echo $pembeli['nama'] ?>"  name="nama" placeholder="Masukan nama" class="form-control">
                        
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label class="form-control-label">Foto</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="file" name="foto_ktp" placeholder="masukan Foto" class="form-control">
                        
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label class="form-control-label">Alamat</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" name="alamat" value="<?php echo $pembeli['alamat'] ?>" placeholder="alamat" class="form-control">
                        
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <input type="submit" name="submit" class="btn btn-primary btn-sm">


                <?php echo anchor('BePenjual', '<i class="fa fa-ban"></i>Kembali', array('class' => 'btn btn-danger btn-sm')) ?>
            </div>

            <?php echo form_close(); ?>
        </div>
    </div>
</div>
