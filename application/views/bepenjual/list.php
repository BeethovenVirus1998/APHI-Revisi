<div class="row">
    <div class="col-lg-9">
        <div class="card">
            <div class="card-header">
                
            </div>
            <div class="card-body card-block">
                <?php echo form_open_multipart('BePenjual/add');
                
                 ?>
               
                <div class="row form-group">
                    <h3>Permintaan anda sudah terkirim dan menunggu konfirmasi dari admin</h3>
                                            </div>
                </div>

             
            <div class="card-footer">
              


                <?php echo anchor('Dashboard_pembeli', '<i class="fa fa-ban"></i>Kembali', array('class' => 'btn btn-danger btn-sm')) ?>
            </div>

            <?php echo form_close(); ?>
        </div>
    </div>
</div>
