<?php require 'base.php' ?>

<?php
      if(isset($records))
        foreach ($records as $row) 
        {
          $companyname = $row->companyname;
          $brandname = $row->brandname;
          $merchantcode = $row->merchantcode;
        }

?>
<?php startblock('page_level_plugins'); ?>
<?php endblock(); ?>

     <?php startblock('sidebar') ?>
        <!-- BEGIN SIDEBAR -->
            <div class="page-sidebar-wrapper">
                <!-- END SIDEBAR -->
                <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                <div class="page-sidebar navbar-collapse collapse">
                    <!-- BEGIN SIDEBAR MENU -->
                    <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
                    <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
                    <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
                    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                    <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
                    <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                    <ul class="page-sidebar-menu  page-header-fixed page-sidebar-menu-hover-submenu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                         <li class="nav-item  ">
                            <a href="<?php echo base_url('index.php/merchant/dashboard') ?>" class="nav-link nav-toggle">
                                <i class="icon-home"></i>
                                <span class="title">Dashboard</span>
                                <span class="arrow"></span>
                            </a>
                        </li>
                         <li class="nav-item active open ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-bar-chart"></i>
                                <span class="title">Metrics</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="<?php echo base_url('index.php/merchant/ad_metrics') ?>" class="nav-link nav-toggle">
                                        <span class="title">Advetisement 
                                        <br> Metrics</span>
                                    </a>
                                </li>
                                <li class="nav-item active ">
                                    <a href="<?php echo base_url('index.php/merchant/performance_metrics') ?>" class="nav-link nav-toggle">
                                        <span class="title">Performance
                                        <br> Metrics</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                         <li class="nav-item ">
                            <a href="<?php echo base_url('index.php/merchant/revenue') ?>" class="nav-link nav-toggle">
                                <i class="icon-credit-card"></i>
                                <span class="title">revenue</span>
                                <span class="arrow"></span>
                            </a>
                        </li>
                         <li class="nav-item ">
                            <a href="<?php echo base_url('index.php/merchant/qrcode') ?>" class="nav-link nav-toggle">
                                <i class="icon-notebook"></i>
                                <span class="title">QR Code</span>
                                <span class="arrow"></span>
                            </a>
                        </li>
                         <li class="nav-item  ">
                            <a href="<?php echo base_url('index.php/merchant/myoutlets') ?>" class="nav-link nav-toggle">
                                <i class="icon-users"></i>
                                <span class="title">My Outlets</span>
                                <span class="arrow"></span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-diamond"></i>
                                <span class="title">Advertisements</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item">
                                    <a href="<?php echo base_url('index.php/merchant/premium_ads') ?>" class="nav-link ">
                                        <span class="title">Premium Ads</span>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a href="<?php echo base_url('index.php/merchant/standard_ads') ?>" class="nav-link ">
                                        <span class="title">Standard Ads</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <!-- END SIDEBAR MENU -->
                </div>
                <!-- END SIDEBAR -->
            </div>
    <?php endblock() ?>

    <?php startblock('content') ?>
    <!-- BEGIN CONTENT -->
        <h3 class="page-title">Performance Metrics</h3>
             <div class="page-bar">
                <ul class="page-breadcrumb">
                    <li>
                        <i class="icon-home"></i>
                        <a href="index.html">Home</a>
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li>
                        <a href="<?php echo base_url('index.php/merchant/performance_metrics') ?>">Performance Metrics</a>
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li>
                        <span>Gross Revenue</span>
                    </li>
                </ul>
            </div>
       
        <div class="row">
            <div class="col-md-12" id="product_metrics">
                <input type="hidden" name="jsonarray" value="<?php echo htmlspecialchars($product_count,ENT_QUOTES); ?>" >
                <!-- BEGIN CHART PORTLET-->
                <div class="portlet light ">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="icon-bar-chart font-green-haze"></i>
                            <span class="caption-subject bold uppercase font-green-haze"> Product sales</span>
                        </div>
                        
                    </div>
                    <div class="portlet-body">
                        <div id="chart_7" class="chart" style="height: 300px;"> </div>
                    </div>
                </div>
                <!-- END CHART PORTLET-->
            </div>
        </div>
     <?php endblock() ?>   
   
    <?php startblock('page_level_plugins_scripts'); ?>
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="<?php echo base_url('assets/global/plugins/amcharts/amcharts/amcharts.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/global/plugins/amcharts/amcharts/serial.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/global/plugins/amcharts/amcharts/pie.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/global/plugins/amcharts/amcharts/radar.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/global/plugins/amcharts/amcharts/themes/light.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/global/plugins/amcharts/amcharts/themes/patterns.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/global/plugins/amcharts/amcharts/themes/chalk.js'); ?>" type="text/javascript"></script>


        <!-- END PAGE LEVEL PLUGINS -->
    <?php endblock(); ?>
       

    <?php startblock('page_level_scripts'); ?>
      <!-- BEGIN  PAGE LEVEL SCRIPTS -->                                  
        <script src="<?php echo base_url('assets/pages/scripts/product_pmetrics.js'); ?>" type="text/javascript"></script>                                          
        <!-- END PAGE LEVEL PLUGINS -->
    <?php endblock(); ?>
