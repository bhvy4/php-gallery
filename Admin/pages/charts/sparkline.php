﻿<?php include '../inc/head.php' ?>

<!-- Page Loader -->
<?php include '../inc/page-loader.php' ?>
<!-- #END# Page Loader -->
<!-- Overlay For Sidebars -->
<div class="overlay"></div>
<!-- #END# Overlay For Sidebars -->
<!-- Search Bar -->
<?php include '../inc/search-bar.php' ?>
<!-- #END# Search Bar -->
<!-- Top Bar -->
<?php include '../inc/navbar.php' ?>
<!-- #Top Bar -->
<section>
    <!-- Left Sidebar -->
    <?php include '../inc/left-sidebar.php' ?>
    <!-- #END# Left Sidebar -->
    <!-- Right Sidebar -->
    <?php include '../inc/right-sidebar.php' ?>
    <!-- #END# Right Sidebar -->
</section>
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    SPARKLINE CHART
                    <small>Taken from <a href="http://omnipotent.net/jquery.sparkline" target="_blank">omnipotent.net/jquery.sparkline</a></small>
                </h2>
            </div>
            <div class="row clearfix">
                <!-- Line Chart -->
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="card">
                        <div class="header">
                            <h2>LINE CHART</h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="sparkline" data-type="line" data-spot-Radius="3" data-highlight-Spot-Color="rgb(233, 30, 99)" data-highlight-Line-Color="#222"
                                 data-min-Spot-Color="rgb(233, 30, 99)" data-max-Spot-Color="rgb(0, 150, 136)" data-spot-Color="rgb(0, 188, 212)"
                                 data-offset="90" data-width="100%" data-height="150px" data-line-Width="2" data-line-Color="rgb(0, 188, 212)"
                                 data-fill-Color="rgba(0, 188, 212, 0.3)">
                                6,4,7,8,4,3,2,2,5,6,7,4,1,5,7,9,9,8,7,6
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# Line Chart -->
                <!-- Bar Chart -->
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="card">
                        <div class="header">
                            <h2>BAR CHART</h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="sparkline" data-type="bar" data-width="97%" data-height="150px" data-bar-Width="16" data-bar-Spacing="7" data-bar-Color="rgb(0, 188, 212)">
                                6,7,8,9,10,5,13,18,21,7,9,11,12,5
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# Bar Chart -->
                <!-- Pie Chart -->
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="card">
                        <div class="header">
                            <h2>PIE CHART</h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body align-center">
                            <div class="sparkline-pie">6,4,8</div>
                        </div>
                    </div>
                </div>
                <!-- #END# Pie Chart -->
            </div>

            <!-- All Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>ALL EXAMPLES</h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <p>
                                        Mouse speed <span id="mousespeed">Loading..</span>
                                    </p>

                                    <p>
                                        Inline <span class="sparkline-1">10,8,9,3,5,8,5</span> line graphs
                                        <span class="sparkline-1">8,4,0,0,0,0,1,4,4,10,10,10,10,0,0,0,4,6,5,9,10</span>
                                    </p>

                                    <p>
                                        Bar charts <span class="sparkbar">10,8,9,3,5,8,5</span> negative values:
                                        <span class="sparkbar">-3,1,2,0,3,-1</span> stacked: <span class="sparkbar">0:2,2:4,4:2,4:1</span>
                                    </p>

                                    <p>
                                        Composite inline
                                        <span id="compositeline">8,4,0,0,0,0,1,4,4,10,10,10,10,0,0,0,4,6,5,9,10</span>
                                    </p>

                                    <p>
                                        Inline with normal range
                                        <span id="normalline">8,4,0,0,0,0,1,4,4,10,10,10,10,0,0,0,4,6,5,9,10</span>
                                    </p>

                                    <p>
                                        Composite bar
                                        <span id="compositebar">4,6,7,7,4,3,2,1,4</span>
                                    </p>

                                    <p>
                                        Discrete
                                        <span class="discrete1">4,6,7,7,4,3,2,1,4,4,5,6,7,6,6,2,4,5</span><br> Discrete with
                                        threshold
                                        <span id="discrete2">4,6,7,7,4,3,2,1,4</span>
                                    </p>

                                    <p>
                                        Bullet charts<br>
                                        <span class="sparkbullet">10,12,12,9,7</span><br>
                                        <span class="sparkbullet">14,12,12,9,7</span><br>
                                        <span class="sparkbullet">10,12,14,9,7</span><br>
                                    </p>
                                </div>
                                <div class="col-sm-6">
                                    <p>
                                        Customize size and colours
                                        <span id="linecustom">10,8,9,3,5,8,5,7</span>
                                    </p>

                                    <p>
                                        Tristate charts
                                        <span class="sparktristate">1,1,0,1,-1,-1,1,-1,0,0,1,1</span><br> (think games won,
                                        lost or drawn)
                                    </p>

                                    <p>
                                        Tristate chart using a colour map:
                                        <span class="sparktristatecols">1,2,0,2,-1,-2,1,-2,0,0,1,1</span>
                                    </p>

                                    <p>
                                        Box Plot: <span class="sparkboxplot">4,27,34,52,54,59,61,68,78,82,85,87,91,93,100</span><br>                                        Pre-computed box plot <span class="sparkboxplotraw">Loading..</span>
                                    </p>

                                    <p>
                                        <span class="sparkpie">1,1,2</span>
                                        <span class="sparkpie">1,5</span>
                                        <span class="sparkpie">20,50,80</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# All Examples -->
        </div>
    </section>

    <!-- Jquery Core Js -->
    <script src="../../plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="../../plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="../../plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="../../plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../../plugins/node-waves/waves.js"></script>

    <!-- Sparkline Plugin Js -->
    <script src="../../plugins/jquery-sparkline/jquery.sparkline.js"></script>

    <!-- Custom Js -->
    <script src="../../js/admin.js"></script>
    <script src="../../js/pages/charts/sparkline.js"></script>

    <!-- Demo Js -->
    <script src="../../js/demo.js"></script>

</body>

</html>
