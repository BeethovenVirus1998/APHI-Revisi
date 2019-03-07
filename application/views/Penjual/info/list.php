
<div class="row">
    <div class="col-lg-9">
        <div class="card">
            <div class="card-header">
                <strong>Informasi</strong>
            </div>
            <div class="card-body card-block">
               
                <?php
                foreach ($penjual as $row): ?>

                  <div class="row form-group">
                    <div class="col col-md-3">
                        <label  class=" form-control-label">Nama</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" disabled="" value="<?php  echo $row->nama ?>"  name="username" placeholder="Nama" class="form-control">
                        
                    </div>
                </div>

                 <div class="row form-group">
                    <div class="col col-md-3">
                        <label  class=" form-control-label">Alamat</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" disabled="" value="<?php  echo $row->alamat ?>"  name="alamat" placeholder="Alamat" class="form-control">
                        
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label  class=" form-control-label">Nama Bank</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" disabled="" value="<?php  echo $row->bank ?>"  name="bank" placeholder="Data tidak ada" class="form-control">
                        
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label class="form-control-label">No Rekening</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" disabled="" name="no_rek" value="<?php echo $row->no_rek ?>" placeholder="Data tidak ada" class="form-control">
                    </div>
                </div>
            


                <div class="row form-group">
                    <div class="col col-md-3">
                        <label class="form-control-label">Atas Nama</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" disabled="" name="atas_nama" value="<?php echo $row->atas_nama ?>" placeholder="Data tidak ada" class="form-control">
                    </div>
                </div>
            </div>

            
            <?php endforeach; ?>

            <div class="card-footer">
              


                <?php echo anchor('Penjual/Info/edit/' . $row->id_penjual, 'Edit', array('class' => 'btn btn-info')) ?>
            </div>




           
        </div>
    </div>
</div>
