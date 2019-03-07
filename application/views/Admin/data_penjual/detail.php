<div class="row">
    <div class="col-md-12">
        <div class="overview-wrap">
            <h2 class="title-1">Data Penjual</h2>
            <?php 
             $jumlah = $this->db->get_where('penjual', array('status' => 2))->num_rows(); ?>
                               
                                    <?php if ($jumlah == TRUE): ?>
                                     
                                        
                                    
                                        <a href="<?php echo base_url()?>Admin/AccPenjual"><button class="btn btn-primary">
                                        <i class="fa fa-user-plus"></i>  Permintaan Penjual   <span class="badge badge-light" style="background-color: red;"> <?php echo $jumlah ?> </span></button></a> 
                                    
                                    <?php else: ?>
                                     
                                    <?php echo anchor('Admin/DataPenjual/acc', '
                                    <button class="au-btn au-btn-icon au-btn--blue">
                                        <i class="zmdi zmdi-plus"></i>Permintaan Penjual</button>') ?>
                                      
                                    <?php endif; ?>

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
    echo "<span class='badge badge-pill badge-primary'>Success</span>";
    echo $this->session->flashdata('edit');
    echo "<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
          </button>";
    echo "</div>";
    echo "</div>";
} elseif ($this->session->flashdata('hapus')) {
    echo "<div class='card-body'>";
    echo "<div class='sufee-alert alert with-close alert-success alert-dismissible fade show'>";
    echo "<span class='badge badge-pill badge-primary'>Success</span>";
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
                       <th>Aksi</th>
                        <th>Hapus</th>
                        
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

                              <?php if ($row->status == 0): ?>
                                 <td><?php echo anchor('Admin/DataPenjual/aktif/' . $row->id_penjual, 'Aktifkan', array('class' => 'btn btn-success')) ?></td>
                            <?php else: ?>
                                 <td><?php echo anchor('Admin/DataPenjual/nonaktif/' . $row->id_penjual, 'Nonaktifkan', array('class' => 'btn btn-danger')) ?></td>
                            <?php endif; ?>
                            
                            <td><?php echo anchor('Admin/DataPenjual/hapus/' . $row->id_penjual, 'Hapus', array('class' => 'btn btn-danger')) ?></td>
                        </tr>
                        <?php $no++; ?>
<?php endforeach; ?>
<?php echo form_close(); ?>
            </table>
        </div>
    </div>
</div>
