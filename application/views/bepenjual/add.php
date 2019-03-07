<div class="row">
    <div class="col-lg-9">
        <div class="card">
            <div class="card-header">
                <strong>Permintaan Sebagai Penjual</strong>
                <br>
                <ul>
                    <br>
                    <li>Upload foto KTP anda</li>
                    <li>Permintaan sebagai penjual akan diproses oleh Admin</li>

                </ul>
            </div>
            <div class="card-body card-block">
                <?php echo form_open_multipart('BePenjual/add');
                echo form_hidden('token',$token);
                 ?>
               
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label class="form-control-label">Foto KTP</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="file" name="userfile" placeholder="masukan Foto" class="form-control">
                                            </div>
                </div>

             
            <div class="card-footer">
                <input type="submit" value="Kirim" name="submit" class="btn btn-primary btn-sm">


                <?php echo anchor('BePenjual', '<i class="fa fa-ban"></i>Kembali', array('class' => 'btn btn-danger btn-sm')) ?>
            </div>

            <?php echo form_close(); ?>
        </div>
    </div>
</div>
