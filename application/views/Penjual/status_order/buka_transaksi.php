<div class="row">
    <div class="col-lg-12">
        <div class="au-card recent-report">
            <div class="au-card-inner">
                <h3 class="title-2">Pesan</h3>
                <div class="chart-info">
                    <div class="chart-info__left">
                        <div class="chart-note">
                            <span class="dot dot--blue"></span>
                            <span>Transaksi telah disetujui oleh Penjual</span>
                        </div>
                        <?php foreach ($order as $row):  ?>

                         <td><?php echo anchor('Admin/AccPenjual/buka_transaksi/' . $row->id, 'Lihat Detail Transaksi', array('class' => 'btn btn-success')) ?></td>
                         <?php endforeach; ?>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
