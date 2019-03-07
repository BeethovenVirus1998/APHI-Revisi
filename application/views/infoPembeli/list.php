<div class="row">
    <div class="col-lg-9">
        <div class="card">
            <div class="card-header">
                <strong>Informasi</strong><br>
            </div>
            <div class="card-body card-block">
                <?php echo form_open_multipart('Informasi_pembeli/'); 
                 ?>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label  class=" form-control-label">Nama</label>
                    </div>
                    <?php 
                    foreach ($pembeli as $row):
                        ?>

                    <div class="col-12 col-md-9">
                        <input type="text" disabled="" value="<?php  echo $row->nama ?>"  name="nama" placeholder="Nama" class="form-control">
                        
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label class="form-control-label">Email</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" disabled="" name="email" value="<?php echo $row->email ?>" placeholder="No Rekening" class="form-control">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label class="form-control-label">Alamat</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" disabled="" name="alamat" value="<?php echo $row->alamat ?>" placeholder="No Rekening" class="form-control">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label class="form-control-label">Nomor Telepon</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" disabled="" name="no_telpon" value="<?php echo $row->no_telpon ?>" placeholder="No Telepon" class="form-control">
                    </div>
                </div>
                
            </div>
            <?php endforeach; ?>

            <?php echo form_close(); ?>



            <div class="card-footer">

                <?php echo anchor('Informasi_pembeli/edit', '<i class="fa fa-edit"></i>Edit', array('class' => 'btn btn-primary btn-sm')) ?>
            </div>
        </div>
    </div>
</div>
