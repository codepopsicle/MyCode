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
                                <li class="nav-item active">
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
                                <li class="nav-item">
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
    <script src="<?php echo base_url('assets/global/plugins/jquery.min.js'); ?>" type="text/javascript"></script>
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
                        <span>Advertisements Metrics</span>
                    </li>
                </ul>
            </div>

        <div class="row">
            <?php if(isset($records4)): ?>
            <?php $cnt=1; ?>
            <div class="col-md-12">
                <!-- Begin: life time stats -->
                <div class="portlet light portlet-fit portlet-datatable ">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="icon-settings font-dark"></i>
                            <span class="caption-subject font-dark sbold uppercase">Advertisements</span>
                        </div>
                        <div class="actions">
                            <div class="btn-group">
                                <a class="btn red btn-outline btn-circle" href="javascript:;" data-toggle="dropdown">
                                    <i class="fa fa-share"></i>
                                    <span class="hidden-xs"> Tools </span>
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li>
                                        <a href="javascript:;"> Export to Excel </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;"> Export to CSV </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;"> Export to XML </a>
                                    </li>
                                    <li class="divider"> </li>
                                    <li>
                                        <a href="javascript:;"> Print Invoices </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div class="table-container">
                            <div class="table-actions-wrapper">
                                <span> </span>
                                <select class="table-group-action-input form-control input-inline input-small input-sm">
                                    <option value="">Select...</option>
                                    <option value="scheduled">Scheduled</option>
                                    <option value="active">Active</option>
                                    <option value="paused">Paused</option>
                                    <option value="completed">Completed</option>
                                    <option value="pending">Pending</option>
                                    <option value="rejected">Rejected</option>
                                </select>
                                <button class="btn btn-sm green table-group-action-submit">
                                    <i class="fa fa-check"></i> Submit</button>
                            </div>
                            <table class="table table-striped table-bordered table-hover table-checkable" id="datatable_ajax">
                                <thead>
                                    <tr role="row" class="heading">
                                        <th width="2%">
                                            <input type="checkbox" class="group-checkable"> </th>
                                        <th width="5%"> Advertisement&nbsp;# </th>
                                        <th width="15%"> Date </th>
                                        <th width="20%"> Product/Event </th>
                                        <th width="10%"> Run Time </th>
                                        <th width="15%"> Status </th>
                                        <th width="10%"> Action </th>
                                        <th width="10%"> View Detals </th>
                                    </tr>
                                    <tr role="row" class="filter">
                                        <td> </td>
                                        <td>
                                            <input type="text" class="form-control form-filter input-sm" name="order_id"> </td>
                                        <td>
                                            <div class="input-group date date-picker margin-bottom-5" data-date-format="dd/mm/yyyy">
                                                <input type="text" class="form-control form-filter input-sm" readonly name="order_date_from" placeholder="From">
                                                <span class="input-group-btn">
                                                    <button class="btn btn-sm default" type="button">
                                                        <i class="fa fa-calendar"></i>
                                                    </button>
                                                </span>
                                            </div>
                                            <div class="input-group date date-picker" data-date-format="dd/mm/yyyy">
                                                <input type="text" class="form-control form-filter input-sm" readonly name="order_date_to" placeholder="To">
                                                <span class="input-group-btn">
                                                    <button class="btn btn-sm default" type="button">
                                                        <i class="fa fa-calendar"></i>
                                                    </button>
                                                </span>
                                            </div>
                                        </td>
                                        <td>
                                            <input type="text" class="form-control form-filter input-sm" name="order_customer_name"> </td>
                                        <td>
                                            <input type="text" class="form-control form-filter input-sm" name="order_ship_to"> </td>
                                        <td>
                                            <select name="order_status" class="form-control form-filter input-sm">
                                                <option value="">Select...</option>
                                                <option value="scheduled">Scheduled</option>
                                                <option value="active">Active</option>
                                                <option value="paused">Paused</option>
                                                <option value="completed">Completed</option>
                                                <option value="pending">Pending</option>
                                                <option value="rejected">Rejected</option>
                                            </select>
                                        </td>
                                        <td></td>
                                        <td>
                                            <div class="margin-bottom-5">
                                                <button class="btn btn-sm green btn-outline filter-submit margin-bottom">
                                                    <i class="fa fa-search"></i> Search</button>
                                            </div>
                                            <button class="btn btn-sm red btn-outline filter-cancel">
                                                <i class="fa fa-times"></i> Reset</button>
                                        </td>
                                    </tr>
                                </thead>
                                <tbody> 
                                    <?php foreach ($records4 as $row): ?>
                                    <tr <?php if ($row->pricingmarker === '2') {echo ' class="bg-warning"';} ?>>
                                        <td><?php echo $cnt; ?></td>
                                        <td><?php echo $row->advertid; ?><br><b><?php if ($row->pricingmarker === '2') {echo '(Premium)';} else {echo '(Standard)';} ?></b></td>
                                        <td><?php echo $row->startdate; echo ' to '; echo $row->enddate; ?></td>
                                        <td><?php if (isset($row->advertprodname)) {echo $row->advertprodname;}
                                                  else {echo $row->adverteventname;}
                                             ?>
                                        </td>
                                        <td><?php echo $row->adruntime; echo ' days'; ?></td>
                                        <td><?php if ($row->isactive === '1') {echo 'Scheduled';}
                                                  elseif ($row->isactive === '2') {echo 'Active';}
                                                  elseif ($row->isactive === '3') {echo 'Disabled';} 
                                                  elseif ($row->isactive === '4') {echo 'Completed';} 
                                                  elseif ($row->isactive === '5') {echo 'Pending';} 
                                                  elseif ($row->isactive === '6') {echo 'Rejected';} 
                                            ?>
                                        </td>
                                        <td><?php if ($row->isactive === '1'):?>
                                            <a href="<?php echo base_url('index.php/update/cancel'); echo '/'.$row->advertid; ?>"><button class="btn btn-xs btn-danger">Cancel</button></a>
                                            <a href="<?php echo base_url('index.php/update/cancel'); echo '/'.$row->advertid; ?>"><button class="btn btn-xs btn-danger">Cancel</button></a>
                                            <?php      elseif ($row->isactive === '2'): ?>
                                            <a href="<?php echo base_url('index.php/update/disable'); echo '/'.$row->advertid; ?>"><button class="btn btn-xs btn-danger">Disable</button></a>
                                            <?php      elseif ($row->isactive === '3'):?>
                                            <a href="<?php echo base_url('index.php/update/enable'); echo '/'.$row->advertid; ?>"><button class="btn btn-xs btn-primary">Enable</button></a>
                                            <?php      elseif ($row->isactive === '4'):?>
                                            <button class="btn btn-xs btn-success">Completed</button>
                                            <?php      elseif ($row->isactive === '5'):?>
                                            <a href="<?php echo base_url('index.php/update/cancel'); echo '/'.$row->advertid; ?>"><button class="btn btn-xs btn-danger">Cancel</button></a>
                                            <?php      elseif ($row->isactive === '6'):?>
                                            <a href="<?php echo base_url('index.php/update/reupload'); echo '/'.$row->advertid; echo '/'.$row->adtype; echo '/'.$row->pricingmarker; ?>"><button class="btn btn-xs btn-danger">Re-Upload</button></a>
                                          <?php endif; ?>
                                        </td>
                                        
                                        <td>
                                        <a href="<?php echo base_url('index.php/merchant/ad_metrics_details')."?advertid=".$row->advertid; ?>" class="btn btn-sm btn-outline grey-salsa"><i class="fa fa-search"></i> View</a>
                                        <!-- <cript src="<php echo base_url('assets/pages/scripts/metrics.js'); ?>" type="text/javascript"></script> -->
                                            <!-- BEGIN ROW -->
                                            <!-- <div class="row">
                                                <div class="col-md-12"> -->
                                                    <!-- BEGIN CHART PORTLET-->
                                                    <!-- <div class="portlet light bordered">
                                                        <div class="portlet-title">
                                                            <div class="caption">
                                                                <i class="icon-bar-chart font-green-haze"></i>
                                                                <span class="caption-subject bold uppercase font-green-haze"> Bar Charts</span>
                                                                <span class="caption-helper">column and line mix</span>
                                                            </div>
                                                            <div class="tools">
                                                                <a href="javascript:;" class="collapse"> </a>
                                                                <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                                                                <a href="javascript:;" class="reload"> </a>
                                                                <a href="javascript:;" class="fullscreen"> </a>
                                                                <a href="javascript:;" class="remove"> </a>
                                                            </div>
                                                        </div>
                                                        <div class="portlet-body">
                                                            <div id="chart_<php echo $cnt; ?>" class="chart" style="height: 200px;"> </div>
                                                        </div>
                                                    </div> -->
                                                    <!-- END CHART PORTLET-->
                                                <!-- </div>
                                            </div> -->
                                            <!-- END ROW -->
                                        </td>
                                    </tr>
                                <?php $cnt++; ?>
                                <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- End: life time stats -->
            </div>
             <?php else: ?>
            No Ads Created
            <?php endif; ?>
        </div>
       
     <?php endblock() ?>   
   
    <?php startblock('page_level_plugins_scripts'); ?>
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="<?php echo base_url('assets/global/scripts/datatable.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/global/plugins/datatables/datatables.min.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js'); ?>" type="text/javascript"></script>
        <!-- ======================================== -->
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
        <script src="<?php echo base_url('assets/pages/scripts/table-datatables-ajax.min.js'); ?>" type="text/javascript"></script>                                  
        <!-- <script src="<php echo base_url('assets/pages/scripts/charts-amcharts.js'); ?>" type="text/javascript"></script>                                           -->
        <!-- END PAGE LEVEL PLUGINS -->
    <?php endblock(); ?>
