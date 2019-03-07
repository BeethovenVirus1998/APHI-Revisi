<div class="row">
    <div class="col-md-12">
        <div class="overview-wrap">
            <h2 class="title-1">Permintaan Penjualan Produk</h2>
            
                                     
                                    
                                      
                                    

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

  <?php echo form_open_multipart('Admin/AccProduk/'); 
                
                 ?>
<div class="col-lg-12">
    <div class="au-card chart-percent-card">
        <div class="au-card-inner">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
               
                <thead>
                    <tr>
                        
                        <th>No</th>
                        <th>Nama Produk</th>
                        <th>Harga Produk</th>
                        <th>Jenis</th>
                        <th>Foto</th>
                        <th>Nama Penjual</th>
                       <th>Terima</th>
                        <th>Tolak</th>
                        
                    </tr>
                </thead>
                <tbody>
                    
                    
                        <tr>
                             <?php $no = 1;
                    foreach ($produk as $row):
                        ?>
                            <td><?php echo $no; ?></td>
                            <td><?php echo$row->nama_produk ?></td>
                            <td><?php echo$row->harga_produk ?></td>
                            <td><?php echo$row->jenis ?></td>

                            
                            <td><img src="<?php echo base_url() ?>uploads/produk/<?php echo $row->foto ?>" class="image-responsive" width="50" height="50"></td>

                            <td><?php echo$row->seller ?></td>

                              
                                 <td><?php echo anchor('Admin/AccProduk/aprove/' . $row->id_produk, 'Terima', array('class' => 'btn btn-success')) ?></td>
                            
                                 <td><?php echo anchor('Admin/AccProduk/reject/' . $row->id_produk, 'Tolak', array('class' => 'btn btn-danger')) ?></td>
                            
                            
                        </tr>
                        <?php $no++; ?>
<?php endforeach; ?>
<?php echo form_close(); ?>
            </table>
        </div>
    </div>
</div>
