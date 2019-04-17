az<?php require 'base.php' ?>

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
    <link href="<?php echo base_url('assets/global/plugins/datatables/datatables.min.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css'); ?>" rel="stylesheet" type="text/css" />
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
                                <span class="aritem_details[0]"></span>
                            </a>
                        </li>
                         <li class="nav-item active open ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-bar-chart"></i>
                                <span class="title">Metrics</span>
                                <span class="aritem_details[0]"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item active ">
                                    <a href="<?php echo base_url('index.php/merchant/ad_metrics') ?>" class="nav-link nav-toggle">
                                        <span class="title">Advetisement 
                                        <br> Metrics</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="<?php echo base_url('index.php/merchant/performance_metrics') ?>" class="nav-link nav-toggle">
                                        <span class="title">Performance
                                        <br> Metrics</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                         <li class="nav-item ">
                            <a href="<?php echo base_url('index.php/merchant/transactions') ?>" class="nav-link nav-toggle">
                                <i class="icon-credit-card"></i>
                                <span class="title">Transactions</span>
                                <span class="aritem_details[0]"></span>
                            </a>
                        </li>
                         <li class="nav-item ">
                            <a href="<?php echo base_url('index.php/merchant/qrcode') ?>" class="nav-link nav-toggle">
                                <i class="icon-notebook"></i>
                                <span class="title">QR Code</span>
                                <span class="aritem_details[0]"></span>
                            </a>
                        </li>
                         <li class="nav-item  ">
                            <a href="<?php echo base_url('index.php/merchant/myoutlets') ?>" class="nav-link nav-toggle">
                                <i class="icon-users"></i>
                                <span class="title">My Outlets</span>
                                <span class="aritem_details[0]"></span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-diamond"></i>
                                <span class="title">Advertisements</span>
                                <span class="aritem_details[0]"></span>
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
        <h3 class="page-title">Advertisements Metrics</h3>
             <div class="page-bar">
                <ul class="page-breadcrumb">
                    <li>
                        <i class="icon-home"></i>
                        <a href="index.html">Home</a>
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li>
                        <i class="icon-home"></i>
                        <a href="<?php echo base_url('index.php/merchant/ad_metrics') ?>">Advertisements Metrics</a>
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li>
                        <span>Advertisements Metrics</span>
                    </li>
                </ul>
            </div>

        <div class="row">
            <?php if(isset($item_details)): ?>
            <?php $cnt=1; ?>
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="portlet yellow-crusta box">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-cogs"></i>Details </div>
                        </div>
                        <div class="portlet-body">
                            <div class="row static-info">
                                <div class="col-md-5 name"> Product Name: </div>
                                <div class="col-md-7 value"> <?php if (isset($item_details[0]->advertprodname)) {echo $item_details[0]->advertprodname;}
                                                  else {echo $item_details[0]->adverteventname;}
                                             ?>
                                </div>
                            </div>
                            <div class="row static-info">
                                <div class="col-md-5 name"> Product Barcode: </div>
                                <div class="col-md-7 value"> <?php echo $item_details[0]->advertproductcode; ?> </div>
                            </div>
                            <div class="row static-info">
                                <div class="col-md-5 name"> Advertisement ID: </div>
                                <div class="col-md-7 value">
                                    <span class="label label-success"> <?php echo $item_details[0]->advertid; ?>  </span>
                                </div>
                            </div>
                            <div class="row static-info">
                                <div class="col-md-5 name"> Runtime of the Ad: </div>
                                <div class="col-md-7 value"> <?php  $days = floor($item_details[0]->adruntime/24); $hours = $item_details[0]->adruntime%24; echo $days.':'.$hours; ?> </div>
                            </div>
                            <div class="row static-info">
                                <div class="col-md-5 name"> Total number of viewers: </div>
                                <div class="col-md-7 value"> <?php echo $item_details[1]; ?></div>
                            </div>
                            <div class="row static-info">
                                <div class="col-md-5 name"> Total number of clicks: </div>
                                <div class="col-md-7 value"> <?php echo $item_details[2]; ?> </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row" >
	            <div class="col-md-12">
	                <!-- BEGIN ROW -->
	                <div class="row">
	                    <div class="col-md-6" id="count_views">
	                        <input type="hidden" name="jsonarray" value="<?php echo htmlspecialchars($ad_view_day_count,ENT_QUOTES); ?>" >
	                        <!-- BEGIN CHART PORTLET-->
	                        <div class="portlet light bordered">
	                            <div class="portlet-title">
	                                <div class="caption">
	                                    <i class="icon-bar-chart font-green-haze"></i>
	                                    <span class="caption-subject bold uppercase font-green-haze"> Total number of viewers per day</span>
	                                </div>
	                            </div>
	                            <div class="portlet-body">
	                                <div id="chart_1" class="chart" style="height: 400px;"> </div>
	                            </div>
	                        </div>
	                    </div>
	                    <!-- END CHART PORTLET-->
	                    <div class="col-md-6" id="count_clicks">
	                        <input type="hidden" name="jsonarray" 
	                        value="<?php echo htmlspecialchars($ad_click_day_count,ENT_QUOTES); ?>" >
	                        <!-- BEGIN CHART PORTLET-->
	                        <div class="portlet light ">
	                            <div class="portlet-title">
	                                <div class="caption">
	                                    <i class="icon-bar-chart font-green-haze"></i>
	                                    <span class="caption-subject bold uppercase font-green-haze"> Total number of clicks per day</span>
	                                </div>
	                            </div>
	                            <div class="portlet-body">
	                                <div id="chart_2" class="chart" style="height: 400px;"> </div>
	                            </div>
	                        </div>
	                        <!-- END CHART PORTLET-->
	                    </div>
	                </div>
	                <!-- END ROW -->
	            </div>
	        </div>
            <div class="row">
                <div class="col-md-12" id="count_purchase">
                    <input type="hidden" name="jsonarray" value="<?php echo htmlspecialchars($purchase_day_count,ENT_QUOTES); ?>" >
                    <!-- BEGIN CHART PORTLET-->
                    <div class="portlet light ">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="icon-bar-chart font-green-haze"></i>
                                <span class="caption-subject bold uppercase font-green-haze"> Viewers who bought the product after viewing the ad</span>
                            </div>
                            
                        </div>
                        <div class="portlet-body">
                            <div id="chart_3" class="chart" style="height: 400px;"> </div>
                        </div>
                    </div>
                    <!-- END CHART PORTLET-->
                </div>
            </div>
            <?php else: ?>
            No Ads Created
            <?php endif; ?>
        </div>
       
     <?php endblock() ?>   
   
    <?php startblock('page_level_plugins_scripts'); ?>
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="<?php echo base_url('assets/global/plugins/amcharts/amcharts/amcharts.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/global/plugins/highcharts/highstock.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/global/plugins/highcharts/modules/exporting.js'); ?>" type="text/javascript"></script>
       
        <!-- END PAGE LEVEL PLUGINS -->
    <?php endblock(); ?>
       

    <?php startblock('page_level_scripts'); ?>
      <!-- BEGIN  PAGE LEVEL SCRIPTS -->
      <script src="<?php echo base_url('assets/pages/scripts/ametrics.js'); ?>" type="text/javascript"></script>
      <!-- END PAGE LEVEL PLUGINS -->
    <?php endblock(); ?>
