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
    <link href="<?php echo base_url('assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css'); ?>" rel="stylesheet" type="tet/css" />

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
                         <li class="nav-item  ">
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
                        <li class="nav-item active open">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-diamond"></i>
                                <span class="title">Advertisements</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  active open">
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
    <!-- BEGIN CONTENT -->
        <h3 class="page-title">Premium Advertisements</h3>
             <div class="page-bar">
                <ul class="page-breadcrumb">
                    <li>
                        <i class="icon-home"></i>
                        <a href="index.html">Home</a>
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li>
                        <span>Premium Advertisements</span>
                    </li>
                </ul>
            </div>

        <div class="row">
            <div class="col-md-12">
                <div class="tabbable-line boxless tabbable-reversed">
                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a href="#premium_product" data-toggle="tab"> Product Ad </a>
                        </li>
                        <li>
                            <a href="#premium_event" data-toggle="tab"> Event Ad </a>
                        </li>
                    </ul>
                     <div class="tab-content">
                        <div class="tab-pane active" id="premium_product">
                            <div class="portlet box red">
                                <div class="portlet-title">
                                    <div class="caption">
                                        Product Ad </div>
                                    <div class="tools">
                                        <a href="javascript:;" class="collapse"> </a>
                                        <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                                        <a href="javascript:;" class="reload"> </a>
                                        <a href="javascript:;" class="remove"> </a>
                                    </div>
                                </div>
                                <div class="portlet-body form">
                                    <?php $attributes = array('class' => 'form-horizontal'); ?>
                                    <!-- BEGIN FORM-->
                                    <?php echo form_open_multipart('merchant/pproduct',$attributes); ?>
                                        <div class="form-body">
                                            <input type="hidden" name="merchantc" value="<?php echo $merchantcode; ?>">
                                            <div class="form-group">
                                                <label class="control-label col-sm-2">Date Range</label>
                                                <div class="col-sm-5">
                                                    <div class="input-group" id="defaultrange">
                                                        <input type="text" name="daterange" class="form-control">
                                                        <span class="input-group-btn">
                                                            <button class="btn default date-range-toggle" type="button">
                                                                <i class="fa fa-calendar"></i>
                                                            </button>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                              <label class="col-sm-2 control-label">Upload Image File</label>
                                              <div class="col-sm-5">
                                                <input type="file"  name="userfile">
                                              </div>
                                            </div>
                                            <div class="form-group">
                                              <label class="col-sm-2 control-label">Brand Name</label>
                                              <div class="col-sm-6">
                                                <input type="text" class="form-control" name="bname" placeholder="Name of the Brand">
                                              </div>
                                            </div>
                                            <div class="form-group">
                                              <label class="col-sm-2 control-label">Product Name</label>
                                              <div class="col-sm-6">
                                                <input type="text" class="form-control" name="pname" placeholder="Name of the Product">
                                              </div>
                                            </div>
                                            <div class="form-group">
                                              <label class="col-sm-2 control-label">Product Barcode</label>
                                              <div class="col-sm-6">
                                                <input type="text" class="form-control" name="barcode" placeholder="Enter Product Barcode">
                                              </div>
                                            </div>
                                            <div class="form-group">
                                              <label class="col-sm-2 control-label">Product Description for Click</label>
                                              <div class="col-sm-6">
                                                <textarea class="form-control" rows="3" name="cdescription" placeholder="Max 100 Words"></textarea>
                                              </div>
                                            </div>
                                            <div class="form-group">
                                              <label class="col-sm-2 control-label">Target Lifestyle</label>
                                              <div class="col-sm-6">
                                                <select class="form-control" name="lifestyle">
                                                  <option>Health Freak</option>
                                                  <option>Sweet Tooth</option>
                                                  <option>Fashionista</option>
                                                  <option>Working Professional</option>
                                                </select>
                                              </div>
                                            </div>
                                            <div class="form-group">
                                              <label class="col-sm-2 control-label">App Notification Content</label>
                                              <div class="col-sm-6">
                                                <textarea class="form-control" rows="2" name="anotification" placeholder="Max 15 Words"></textarea>
                                              </div>
                                            </div>
                                            <div class="form-group">
                                              <label class="col-sm-2 control-label">Description for Notification (Expanded)</label>
                                              <div class="col-sm-6">
                                                <textarea class="form-control" rows="3" name="dnotification" placeholder="Max 100 Words"></textarea>
                                              </div>
                                            </div>
                                        </div>
                                        <div class="form-actions">
                                            <div class="row">
                                                <div class="col-md-offset-3 col-md-9">
                                                    <button type="submit" class="btn btn-circle red">Submit</button>
                                                    <button type="button" class="btn btn-circle grey-salsa btn-outline">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                      <?php echo form_close(); ?> 
                                      <!-- END FORM-->
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="premium_event">
                            <div class="portlet box red">
                                <div class="portlet-title">
                                    <div class="caption">
                                        Event Ad</div>
                                    <div class="tools">
                                        <a href="javascript:;" class="collapse"> </a>
                                        <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                                        <a href="javascript:;" class="reload"> </a>
                                        <a href="javascript:;" class="remove"> </a>
                                    </div>
                                </div>
                                <div class="portlet-body form">
                                    <?php $attributes = array('class' => 'form-horizontal'); ?>
                                    <!-- BEGIN FORM-->
                                    <?php echo form_open_multipart('merchant/pevent',$attributes); ?>
                                        <div class="form-body">
                                            <input type="hidden" name="merchantc" value="<?php echo $merchantcode; ?>">
                                             <div class="form-group ">
                                                <label class="control-label col-md-2">Advance Date Ranges</label>
                                                <div class="col-md-5">
                                                    <input id="reportrange" name="daterange" class="btn default">
                                                        <i class="fa fa-calendar"></i> &nbsp;
                                                        <span> </span>
                                                        <b class="fa fa-angle-down"></b>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                              <label class="col-sm-2 control-label">Upload Image File</label>
                                              <div class="col-sm-5">
                                                <input type="file"  name="userfile">
                                              </div>
                                            </div>
                                            <div class="form-group">
                                              <label class="col-sm-2 control-label">Event Name</label>
                                              <div class="col-sm-6">
                                                <input type="text" class="form-control" name="bname" placeholder="Name of the Event">
                                              </div>
                                            </div>
                                            
                                            <div class="form-group">
                                              <label class="col-sm-2 control-label">Event Description for Click</label>
                                              <div class="col-sm-6">
                                                <textarea class="form-control" rows="3" name="cdescription" placeholder="Max 100 Words"></textarea>
                                              </div>
                                            </div>
                                            <div class="form-group">
                                              <label class="col-sm-2 control-label">Target Lifestyle</label>
                                              <div class="col-sm-6">
                                                <select class="form-control" name="lifestyle">
                                                  <option>Health Freak</option>
                                                  <option>Sweet Tooth</option>
                                                  <option>Fashionista</option>
                                                  <option>Working Professional</option>
                                                </select>
                                              </div>
                                            </div>
                                        </div>
                                        <div class="form-actions">
                                            <div class="row">
                                                <div class="col-md-offset-3 col-md-9">
                                                    <button type="submit" class="btn btn-circle red">Submit</button>
                                                    <button type="button" class="btn btn-circle grey-salsa btn-outline">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                      <?php echo form_close(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
     <?php endblock() ?>   
        
    <?php startblock('page_level_plugins_scripts'); ?>
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="<?php echo base_url('assets/global/plugins/moment.min.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js'); ?>" type="text/javascript"></script>
        <!-- <cript src="<php echo base_url('assets/global/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js'); ?>" type="text/javascript"></script> -->
        <script src="<?php echo base_url('assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/global/plugins/clockface/js/clockface.js'); ?>" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
    <?php endblock(); ?>
       

    <?php startblock('page_level_scripts'); ?>
        <!-- BEGIN  PAGE LEVEL SCRIPTS -->
        <script src="<?php echo base_url('assets/pages/scripts/components-date-time-pickers.min.js" type="text/javascript'); ?>"></script>
        <!-- END PAGE LEVEL PLUGINS -->
    <?php endblock(); ?>

    