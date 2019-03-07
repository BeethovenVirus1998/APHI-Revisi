<div class="row">
    <div class="col-md-12">
        <div class="overview-wrap">
            <h2 class="title-1">Permintaan Penjual</h2>
            
                                     
                                    <?php echo anchor('Admin/DataPenjual/', '
                                    <button class="btn btn-danger">
                                        <i class="fa fa-ban"></i>  Kembali</button>') ?>
                                      
                                    

        </div>
    </div>
</div><br>
<?php
if ($this->session->flashdata('berhasil')) {
    echo "<div class='card-body'>";
    echo "<div class='sufee-alert alert with-close alert-primary alert-dismissible fade show'>";
    echo "<span class='badge badge-pill badge-primary'>Success</span>";
    echo $this->session->flashdata('berhasil');
    echo "<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
          </button>";
    echo "</div>";
    echo "</div>";
} elseif ($this->session->flashdata('edit')) {
    echo "<div class='card-body'>";
    echo "<div class='sufee-alert alert with-close alert-danger alert-dismissible fade show'>";
    echo "<span class='badge badge-pill badge-danger'>Rejected  </span>";
    echo $this->session->flashdata('edit');
    echo "<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
          </button>";
    echo "</div>";
    echo "</div>";
} elseif ($this->session->flashdata('hapus')) {
    echo "<div class='card-body'>";
    echo "<div class='sufee-alert alert with-close alert-success alert-dismissible fade show'>";
    echo "<span class='badge badge-pill badge-primary'>Approval Successful   </span>";
    echo $this->session->flashdata('hapus');
    echo "<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
          </button>";
    echo "</div>";
    echo "</div>";
} elseif ($this->session->flashdata('gagal')) {
    echo "<div class='card-body'>";
    echo "<div class='sufee-alert alert with-close alert-warning alert-dismissible fade show'>";
    echo "<span class='badge badge-pill badge-primary'>gagal</span>";
    echo $this->session->flashdata('gagal');
    echo "<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
          </button>";
    echo "</div>";
    echo "</div>";
}
?> 

  <?php echo form_open_multipart('Admin/DataPenjual/nonaktif'); 
                
                 ?>
<div class="col-lg-12">
    <div class="au-card chart-percent-card">
        <div class="au-card-inner">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
               
                <thead>
                    <tr>
                        
                        <th>No</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Foto KTP</th>
                       <th>Terima</th>
                        <th>Tolak</th>
                        
                    </tr>
                </thead>
                <tbody>
                    
                    
                        <tr>
                             <?php $no = 1;
                    foreach ($penjual as $row):
                        ?>
                            <td><?php echo $no; ?></td>
                            <td><?php echo$row->nama ?></td>
                            <td><?php echo$row->alamat ?></td>
                            <td><img src="<?php echo base_url() ?>uploads/penjual/<?php echo $row->foto_ktp ?>" class="image-responsive" width="50" height="50"></td>

                              
                                 <td><?php echo anchor('Admin/AccPenjual/aprove/' . $row->id_penjual, 'Terima', array('class' => 'btn btn-success')) ?></td>
                            
                                 <td><?php echo anchor('Admin/AccPenjual/hapus/' . $row->id_penjual, 'Tolak', array('class' => 'btn btn-danger')) ?></td>
                            
                            
                        </tr>
                        <?php $no++; ?>
<?php endforeach; ?>
<?php echo form_close(); ?>
            </table>
        </div>
    </div>
</div>
