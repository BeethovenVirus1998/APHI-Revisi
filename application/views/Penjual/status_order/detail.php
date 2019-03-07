<div class="row">
    <div class="col-lg-9">
        <div class="card">
            <div class="card-header">
                <strong>Informasi</strong><br>
            </div>
            <div class="card-body card-block">
                <?php echo form_open_multipart('InfoTransfer/'); 
                 ?>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label  class=" form-control-label">Nama Bank</label>
                    </div>
                    <?php $no = 1;
                    foreach ($penjual as $row):
                        ?>

                    <div class="col-12 col-md-9">
                        <input type="text" disabled="" value="<?php  echo $row->bank ?>"  name="bank" placeholder="Masukan nama bank" class="form-control">
                        
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label class="form-control-label">No Rekening</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" disabled="" name="no_rek" value="<?php echo $row->no_rek ?>" placeholder="No Rekening" class="form-control">
                    </div>
                </div>

                 <div class="row form-group">
                    <div class="col col-md-3">
                        <label class="form-control-label">Atas Nama</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" disabled="" name="nama" value="<?php echo $row->atas_nama ?>" placeholder="Nama" class="form-control">
                    </div>
                </div>
                <ul>
                <li>Silahkan transfer ke Bank dan Nomor Rekening di atas</li>
                <li>Silahkan Upload bukti pembayaran jika sudah transfer</li>
                </ul>
            </div>
            <?php endforeach; ?>

            <?php echo form_close(); ?>



            <div class="card-footer">

                <?php echo anchor('Status_pembeli', '<i class="fa fa-ban"></i>Kembali', array('class' => 'btn btn-danger btn-sm')) ?>
            </div>
        </div>
    </div>
</div>
