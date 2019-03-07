
   <div class="row">
    <div class="col-lg-12">
        <div class="au-card recent-report">

    <?php
        foreach($produk as $data){
            $nama_produk[] = $data->nama_produk;
            $harga_produk[] = (float) $data->harga_produk;
        }
    ?>


    <canvas id="canvas" width="1000" height="280"></canvas>

    <!--Load chart js-->
    <script type="text/javascript" src="<?php echo base_url().'assets/chartjs/chart.min.js'?>"></script>
    <script>

            var lineChartData = {
                labels : <?php echo json_encode($nama_produk);?>,
                datasets : [
                    
                    {
                        fillColor: "rgba(60,141,188,0.9)",
                        strokeColor: "rgba(60,141,188,0.8)",
                        pointColor: "#3b8bba",
                        pointStrokeColor: "#fff",
                        pointHighlightFill: "#fff",
                        pointHighlightStroke: "rgba(152,235,239,1)",
                        data : <?php echo json_encode($harga_produk);?>
                    }

                ]
                
            }

        var myLine = new Chart(document.getElementById("canvas").getContext("2d")).Bar(lineChartData);
        
    </script>
</div>
</div>
</div>
