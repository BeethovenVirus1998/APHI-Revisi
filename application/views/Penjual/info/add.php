<div class="row">
    <div class="col-lg-9">
        <div class="card">
            <div class="card-header">
                <strong>Tambah Informasi</strong>
            </div>
            <div class="card-body card-block">
                <?php echo form_open_multipart('Penjual/Info/add');
                echo form_hidden('token',$token);
                 ?>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label  class=" form-control-label">Nama Bank</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text"  name="bank" placeholder="Masukan nama bank" class="form-control">
                       
                    </div>
                </div>
                

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label class="form-control-label">Nomor Rekening</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" name="no_rek" placeholder="Nomor Rekening" class="form-control">
                                            
                </div>
            </div>

            <div class="row form-group">
                    <div class="col col-md-3">
                        <label class="form-control-label">Atas Nama</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" name="atas_nama" placeholder="Atas Nama" class="form-control">
                                            
                </div>
            </div>
             
            <div class="card-footer">
                <input type="submit" name="submit" class="btn btn-primary btn-sm">


                <?php echo anchor('Penjual/Info', '<i class="fa fa-ban"></i>Kembali', array('class' => 'btn btn-danger btn-sm')) ?>
            </div>

            <?php echo form_close(); ?>
        </div>
    </div>
</div>
