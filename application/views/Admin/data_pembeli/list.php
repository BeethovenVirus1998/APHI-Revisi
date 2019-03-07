<div class="row">
    <div class="col-md-12">
        <div class="overview-wrap">
            <h2 class="title-1">Data Pembeli</h2>
            
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
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Alamat</th>
                        <th>No. Telepon</th>
                        <th>Hapus</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($pembeli as $row):
                        ?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo$row->nama ?></td>
                            <td><?php echo$row->email ?></td>
                            <td><?php echo$row->alamat ?></td>
                            <td><?php echo$row->no_telpon ?></td>
                            
                            <td><?php echo anchor('Admin/DataPembeli/hapus/' . $row->id, 'Hapus', array('class' => 'btn btn-danger')) ?></td>
                        </tr>
                        <?php $no++; ?>
<?php endforeach; ?>
            </table>
        </div>
    </div>
</div>
