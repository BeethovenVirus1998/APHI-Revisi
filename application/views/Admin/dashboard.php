

                <div class="section__content section__content--p30">
                   <div class="row m-t-25">
                            <div class="col-sm-6 col-lg-4">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="fa fa-user"></i>
                                            </div>
                                            <div class="text">
                                                <?php $jmlpenjual = $this->db->get('penjual')->num_rows(); ?>
                                                <h2><?php echo $jmlpenjual; ?></h2>
                                                <span><b>Data Penjual</b></span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart1"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="overview-item overview-item--c2">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                               <i class="fa fa-group"></i>
                                            </div>
                                            <div class="text">
                                                <?php $jmlpembeli = $this->db->get('pembeli')->num_rows(); ?>
                                                <h2><?php echo $jmlpembeli; ?></h2>
                                                <span><b>Data Pembeli</b></span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart2"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="overview-item overview-item--c4">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <a href="dt_transaksi.html"><i class="zmdi zmdi-money"></i></a>
                                            </div>
                                            <div class="text">
                                                <?php $jmltransaksi = $this->db->get('order')->num_rows(); ?>
                                                <h2><?php echo $jmltransaksi; ?></h2>
                                                <span><b>Data Transaksi</b></span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart4"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2019 with APHI</p>
                                </div>
                            </div>
                        </div>
                    </div>
             
<!-- end document-->
