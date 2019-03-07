<div class="row">
    <div class="col-lg-9">
        <div class="card">
            <div class="card-header">
                <strong>Edit Palawija</strong>
            </div>
            <div class="card-body card-block">
                <?php echo form_open_multipart('Penjual/Buah/edit'); 
                echo form_hidden('id_produk',$produk['id_produk']);
                 ?>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label  class=" form-control-label">Nama Palawija</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" value="<?php  echo $produk['nama_produk'] ?>"  name="nama_produk" placeholder="Masukan nama palawija" class="form-control">
                        
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label class="form-control-label">Foto</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="file" name="userfile" placeholder="masukan Foto" class="form-control">
                        
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label class="form-control-label">Harga/Kg</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="number" name="harga_produk" value="<?php echo $produk['harga_produk'] ?>" placeholder="harga" class="form-control">
                        
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <input type="submit" name="submit" class="btn btn-primary btn-sm">


                <?php echo anchor('Penjual/Palawija', '<i class="fa fa-ban"></i>Kembali', array('class' => 'btn btn-danger btn-sm')) ?>
            </div>

            <?php echo form_close(); ?>
        </div>
    </div>
</div>
