<div class="row">
    <div class="col-lg-9">
        <div class="card">
            <div class="card-header">
                <strong>Edit Informasi</strong>
            </div>
            <div class="card-body card-block">
                <?php echo form_open_multipart('Penjual/Info/edit'); 
                echo form_hidden('id_penjual',$penjual['id_penjual']);
                 ?>

                  <div class="row form-group">
                    <div class="col col-md-3">
                        <label  class=" form-control-label">Nama</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" value="<?php  echo $penjual['nama'] ?>"  name="nama" placeholder="Nama" class="form-control">
                        
                    </div>
                </div>

                 <div class="row form-group">
                    <div class="col col-md-3">
                        <label  class=" form-control-label">Alamat</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" value="<?php  echo $penjual['alamat'] ?>"  name="alamat" placeholder="Alamat" class="form-control">
                        
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label  class=" form-control-label">Nama Bank</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" value="<?php  echo $penjual['bank'] ?>"  name="bank" placeholder="Masukan nama bank" class="form-control">
                        
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label class="form-control-label">No Rekening</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" name="no_rek" value="<?php echo $penjual['no_rek'] ?>" placeholder="No Rekening" class="form-control">
                    </div>
                </div>
            

            <div class="row form-group">
                    <div class="col col-md-3">
                        <label class="form-control-label">Atas Nama</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" name="atas_nama" value="<?php echo $penjual['atas_nama'] ?>" placeholder="Atas Nama" class="form-control">
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <input type="submit" value="Edit" name="submit" class="btn btn-primary btn-sm">


                <?php echo anchor('Penjual/Info', '<i class="fa fa-ban"></i>Kembali', array('class' => 'btn btn-danger btn-sm')) ?>
            </div>

            <?php echo form_close(); ?>
        </div>
    </div>
</div>
