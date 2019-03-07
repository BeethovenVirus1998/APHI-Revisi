<div class="row">
    <div class="col-md-12">
        <div class="overview-wrap">
            <h2 class="title-1">Data Tanaman</h2>
            <?php echo anchor('Penjual/Tanaman/add', '
            <button class="au-btn au-btn-icon au-btn--blue">
                <i class="zmdi zmdi-plus"></i>Tambah Tanaman</button>') ?>
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


<div class="col-lg-12">
    <div class="au-card chart-percent-card">
        <div class="au-card-inner">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Tanaman</th>
                        <th>Foto</th>
                        <th>Harga Tanaman</th>
                        <th>Edit</th>
                        <th>Hapus</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($produk as $row):
                        ?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo$row->nama_produk ?></td>
                            <td><img src="<?php echo base_url() ?>uploads/produk/<?php echo $row->foto ?>" class="image-responsive" width="50" height="50"></td>
                            <td><?php echo $row->harga_produk ?></td>
                            <td><?php echo anchor('Penjual/Tanaman/edit/' . $row->id_produk, 'Edit', array('class' => 'btn btn-info')) ?></td>
                            <td><?php echo anchor('Penjual/Tanaman/hapus/' . $row->id_produk, 'Hapus', array('class' => 'btn btn-danger')) ?></td>
                        </tr>
                        <?php $no++; ?>
<?php endforeach; ?>
            </table>
        </div>
    </div>
</div>
