<div class="row">
    <div class="col-lg-9">
        <div class="card">
            <div class="card-header">
                <strong>Tambah Buah</strong>
            </div>
            <div class="card-body card-block">
                <?php echo form_open_multipart('Penjual/Buah/add');
                echo form_hidden('token',$token);
                 ?>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label  class=" form-control-label">Nama Buah</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text"  name="nama_produk" placeholder="Masukan nama buah" class="form-control">
                       
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
                        <input type="number" name="harga_produk" placeholder="harga" class="form-control">
                                            
                </div>
            </div>
              <div class="row form-group">
                    <div class="col col-md-3">
                        <label class="form-control-label">Jenis</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" name="jenis" placeholder="Jenis Produk" class="form-control">
                        
                    </div>
                   
                </div>
            <div class="card-footer">
                <input type="submit" value="Tambah" name="submit" class="btn btn-primary btn-sm">


                <?php echo anchor('Penjual/Buah', '<i class="fa fa-ban"></i>Kembali', array('class' => 'btn btn-danger btn-sm')) ?>
            </div>

            <?php echo form_close(); ?>
        </div>
    </div>
</div>
