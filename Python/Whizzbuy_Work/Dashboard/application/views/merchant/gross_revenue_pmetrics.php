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
 <link href="<?php echo base_url('assets/global/css/daterangepicker.css'); ?>" rel="stylesheet" type="text/css" />
  
<style>
/* bootstrap hack: fix content width inside hidden tabs */
.tab-content > .tab-pane,
.pill-content > .pill-pane {
    display: block;     /* undo display:none          */
    height: 0;          /* height:0 is also invisible */ 
    overflow-y: hidden; /* no-overflow                */
}
.tab-content > .active,
.pill-content > .active {
    height: auto;       /* let the content decide it  */
} /* bootstrap hack end */
</style>
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
       
        <!-- BEGIN TAB PORTLET-->
                            <div class="portlet light ">
                            <div class="caption" style="height: 40px">
                                        <i class="icon-share font-dark"></i>
                                        <span class="caption-subject font-dark bold uppercase">Gross Revenue</span>
                                    </div>
                                <div class="portlet-title tabbable-line">
                                   <form id="form1" action="#" method="get">
                                    <span><b>Show:</b></span>
                                    <div id="reportrange"  style="background: #fff;cursor: pointer;margin-left:10px;margin-right:10px;display: inline-block; padding: 5px 10px; border: 1px solid #ccc; width: 250px">
    <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>&nbsp;
    <span id="date"></span> <b class="caret"></b>
</div>
<input type="hidden" id="start" name="start" value="" />
<input type="hidden" id="end" name="end" value="" />
<input id="apply" type="submit" value="Apply" class="btn btn-success"></input>
</form>
                                    <ul class="nav nav-tabs">
                                        <li>
                                            <a href="#portlet_tab3" data-toggle="tab"> Day </a>
                                        </li>
                                        <li class="active">
                                            <a href="#portlet_tab2" data-toggle="tab"> Month </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="portlet-body">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="portlet_tab2">
                                            <div class="row" id="revenue_metrics_month">
                                                <script src="<?php echo base_url('assets/global/plugins/jquery.min.js'); ?>" type="text/javascript"></script>
                                                <input type="hidden" name="jsonarray" value="<?php echo htmlspecialchars($revenue_by_month_count,ENT_QUOTES); ?>" >
                                                <div class="col-md-12">
                                                    <!-- BEGIN ROW -->
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <!-- BEGIN CHART PORTLET-->
                                                            <div class="portlet light bordered">
                                                                <div class="portlet-title">
                                                                    <div class="caption">
                                                                        <i class="icon-bar-chart font-green-haze"></i>
                                                                        <span class="caption-subject bold uppercase font-green-haze"> Number of revenue</span>
                                                                    </div>
                                                                   
                                                                </div>
                                                                <div class="portlet-body">
                                                                    <div id="chart_3_2" class="chart" style="height: 300px;"> </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- END CHART PORTLET-->
                                                    </div>
                                                    <!-- END ROW -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="portlet_tab3">
                                            <div class="row" id="revenue_metrics_day">
                                                <script src="<?php echo base_url('assets/global/plugins/jquery.min.js'); ?>" type="text/javascript"></script>
                                                <input type="hidden" name="jsonarray" value="<?php echo htmlspecialchars($revenue_by_day_count,ENT_QUOTES); ?>" >
                                                <div class="col-md-12">
                                                    <!-- BEGIN ROW -->
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <!-- BEGIN CHART PORTLET-->
                                                            <div class="portlet light bordered">
                                                                <div class="portlet-title">
                                                                    <div class="caption">
                                                                        <i class="icon-bar-chart font-green-haze"></i>
                                                                        <span class="caption-subject bold uppercase font-green-haze"> Number of revenue</span>
                                                                    </div>
                                                                   
                                                                </div>
                                                                <div class="portlet-body">
                                                                    <div id="chart_3_3" class="chart" style="height: 300px;"> </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- END CHART PORTLET-->
                                                    </div>
                                                    <!-- END ROW -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END TAB PORTLET-->
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
        <script src="<?php echo base_url('assets/global/scripts/jquery.min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/global/scripts/bootstrap.min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/global/scripts/moment.min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/global/scripts/daterangepicker.js'); ?>" type="text/javascript"></script>
        
 <script src="<?php echo base_url('assets/global/plugins/highcharts/highstock.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/global/plugins/highcharts/modules/exporting.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/pages/scripts/daterange.js'); ?>" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function(){
        
        $("#apply").click(function(){
         var monthNames = ["Jan", "Feb", "Mar", "Apr", "May", "Jun",
  "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
        var str = $('#date').text();
        var res = str.split("-");
        var a=res[0].split(" ");
        var mm=a[0];
        var yy=a[2];
        var dd=a[1].replace(',','');
        for(var i = 0; i < monthNames.length; i++)
        {  if(mm == monthNames[i])
            {
                var m=i+1;
            }
        }
    if(dd<10)
        {
            dd='0'+dd.toString();
        }
    if(m<10)
        {
            m='0'+m.toString();
        }
    startdate=yy.toString()+'-'+m.toString()+'-'+dd.toString();
    
    
    var a=res[1].split(" ");
    var mm1=a[1];
    var yy1=a[3];
    var dd1=a[2].replace(',','');
    for(var i = 0; i < monthNames.length; i++)
        {  if(mm1 == monthNames[i])
            {
                var m1=i+1;
            }
        }
    if(dd1<10)
        {
            dd1='0'+dd1.toString();
        }
    if(m1<10)
        {
            m1='0'+m1.toString();
        }
    enddate=yy1.toString()+'-'+m1.toString()+'-'+dd1.toString();
    
    $('#start').val(startdate);
    $('#end').val(enddate);
    $("#form1").attr("action","<?php echo base_url('index.php/merchant/gross_revenue_performance_metrics_1'); ?>");
    

    });
});
</script>
        <!-- END PAGE LEVEL PLUGINS -->
    <?php endblock(); ?>
       

    <?php startblock('page_level_scripts'); ?>
      <!-- BEGIN  PAGE LEVEL SCRIPTS -->                                  
        <script src="<?php echo base_url('assets/pages/scripts/revenue_pmetrics.js'); ?>" type="text/javascript"></script>                                          
        <!-- END PAGE LEVEL PLUGINS -->
    <?php endblock(); ?>
