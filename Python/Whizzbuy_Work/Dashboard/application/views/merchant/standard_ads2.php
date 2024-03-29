<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.5
Version: 4.5.2
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<?php
      if(isset($records))
        foreach ($records as $row) 
        {
          $companyname = $row->companyname;
          $brandname = $row->brandname;
          $merchantcode = $row->merchantcode;
        }

?>
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>Metronic | Date & Time Pickers</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/global/plugins/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/global/plugins/simple-line-icons/simple-line-icons.min.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/global/plugins/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/global/plugins/uniform/css/uniform.default.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css'); ?>" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="<?php echo base_url('assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/global/plugins/clockface/css/clockface.css'); ?>" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="<?php echo base_url('assets/global/css/components.min.css'); ?>" rel="stylesheet" id="style_components" type="text/css" />
        <link href="<?php echo base_url('assets/global/css/plugins.min.css'); ?>" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="<?php echo base_url('assets/layouts/layout2/css/layout.min.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/layouts/layout2/css/themes/blue.min.css'); ?>" rel="stylesheet" type="text/css" id="style_color" />
        <link href="<?php echo base_url('assets/layouts/layout2/css/custom.min.css'); ?>" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> </head>
    <!-- END HEAD -->

    
    <body class="page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid">
        <!-- BEGIN HEADER -->
        <div class="page-header navbar navbar-fixed-top">
            <!-- BEGIN HEADER INNER -->
            <div class="page-header-inner ">
                <!-- BEGIN LOGO -->
                <div class="page-logo">
                    <a href="index.html">
                        <img  style="width:50%; margin:2.5%; margin-left:25%" src="<?php echo base_url('assets/layouts/layout2/img/logo-default.png');?>" alt="logo" class="logo-default" /> </a>
                    <div class="menu-toggler sidebar-toggler" style="height:30%; margin-left:-15%">
                        <!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
                    </div>
                </div>
                <!-- END LOGO -->
                <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"> </a>
                <!-- END RESPONSIVE MENU TOGGLER -->
                
                <!-- BEGIN PAGE TOP -->
                <div class="page-top">
                    
                    <!-- BEGIN TOP NAVIGATION MENU -->
                    <div class="top-menu">
                        <ul class="nav navbar-nav pull-right">
                            <!-- BEGIN NOTIFICATION DROPDOWN -->
                            <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                            
                            
                            <!-- BEGIN USER LOGIN DROPDOWN -->
                            <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                            <li class="dropdown dropdown-user">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                    <img alt="" class="img-circle" src="<?php echo base_url('assets/layouts/layout2/img/avatar3_small.jpg'); ?>" />
                                    <span class="username username-hide-on-mobile"> Admin </span>
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-default">
                                    <li>
                                        <a href="<?php echo base_url('index.php/admin/profile'); ?>">
                                            <i class="icon-user"></i> My Profile </a>
                                    </li>
                                    
                                    <!-- <li>
                                        <a href="<?php echo base_url('index.php/admin/lock_screen'); ?>">
                                            <i class="icon-lock"></i> Lock Screen </a>
                                    </li> -->
                                    <li>
                                        <a href="<?php echo base_url('index.php/adminlogin'); ?>">
                                            <i class="icon-key"></i> Log Out </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- END USER LOGIN DROPDOWN -->
                            <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                            <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                            <li class="dropdown dropdown-extended quick-sidebar-toggler">
                                <span class="sr-only">Toggle Quick Sidebar</span>
                                <i class="icon-logout"></i>
                            </li>
                            <!-- END QUICK SIDEBAR TOGGLER -->
                        </ul>
                    </div>
                    <!-- END TOP NAVIGATION MENU -->
                </div>
                <!-- END PAGE TOP -->
            </div>
            <!-- END HEADER INNER -->
        </div>
        <!-- END HEADER -->
        <!-- BEGIN HEADER & CONTENT DIVIDER -->
        <div class="clearfix"> </div>
        <!-- END HEADER & CONTENT DIVIDER -->
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
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
                                    <a href="<?php echo base_url('index.php/merchant/performance') ?>" class="nav-link nav-toggle">
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
                         <li class="nav-item active open">
                            <a href="<?php echo base_url('index.php/merchant/qrcode') ?>" class="nav-link nav-toggle">
                                <i class="icon-user"></i>
                                <span class="title">QR Code</span>
                                <span class="arrow"></span>
                            </a>
                        </li>
                         <li class="nav-item  ">
                            <a href="<?php echo base_url('index.php/merchant/myoutlets') ?>" class="nav-link nav-toggle">
                                <i class="icon-home"></i>
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
            <!-- Theme panel -->
      <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE HEADER-->
                    <!-- BEGIN THEME PANEL -->
                    <div class="theme-panel">
                        <div class="toggler tooltips" data-container="body" data-placement="left" data-html="true" data-original-title="Click to open advance theme customizer panel">
                            <i class="icon-settings"></i>
                        </div>
                        <div class="toggler-close">
                            <i class="icon-close"></i>
                        </div>
                        <div class="theme-options">
                            <div class="theme-option theme-colors clearfix">
                                <span> THEME COLOR </span>
                                <ul>
                                    <li class="color-default current tooltips" data-style="default" data-container="body" data-original-title="Default"> </li>
                                    <li class="color-grey tooltips" data-style="grey" data-container="body" data-original-title="Grey"> </li>
                                    <li class="color-blue tooltips" data-style="blue" data-container="body" data-original-title="Blue"> </li>
                                    <li class="color-dark tooltips" data-style="dark" data-container="body" data-original-title="Dark"> </li>
                                    <li class="color-light tooltips" data-style="light" data-container="body" data-original-title="Light"> </li>
                                </ul>
                            </div>
                            <div class="theme-option">
                                <span> Theme Style </span>
                                <select class="layout-style-option form-control input-small">
                                    <option value="square" selected="selected">Square corners</option>
                                    <option value="rounded">Rounded corners</option>
                                </select>
                            </div>
                            <div class="theme-option">
                                <span> Layout </span>
                                <select class="layout-option form-control input-small">
                                    <option value="fluid" selected="selected">Fluid</option>
                                    <option value="boxed">Boxed</option>
                                </select>
                            </div>
                            <div class="theme-option">
                                <span> Header </span>
                                <select class="page-header-option form-control input-small">
                                    <option value="fixed" selected="selected">Fixed</option>
                                    <option value="default">Default</option>
                                </select>
                            </div>
                            <div class="theme-option">
                                <span> Top Dropdown</span>
                                <select class="page-header-top-dropdown-style-option form-control input-small">
                                    <option value="light" selected="selected">Light</option>
                                    <option value="dark">Dark</option>
                                </select>
                            </div>
                            <div class="theme-option">
                                <span> Sidebar Mode</span>
                                <select class="sidebar-option form-control input-small">
                                    <option value="fixed">Fixed</option>
                                    <option value="default" selected="selected">Default</option>
                                </select>
                            </div>
                            <div class="theme-option">
                                <span> Sidebar Style</span>
                                <select class="sidebar-style-option form-control input-small">
                                    <option value="default" selected="selected">Default</option>
                                    <option value="compact">Compact</option>
                                </select>
                            </div>
                            <div class="theme-option">
                                <span> Sidebar Menu </span>
                                <select class="sidebar-menu-option form-control input-small">
                                    <option value="accordion" selected="selected">Accordion</option>
                                    <option value="hover">Hover</option>
                                </select>
                            </div>
                            <div class="theme-option">
                                <span> Sidebar Position </span>
                                <select class="sidebar-pos-option form-control input-small">
                                    <option value="left" selected="selected">Left</option>
                                    <option value="right">Right</option>
                                </select>
                            </div>
                            <div class="theme-option">
                                <span> Footer </span>
                                <select class="page-footer-option form-control input-small">
                                    <option value="fixed">Fixed</option>
                                    <option value="default" selected="selected">Default</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- End theme panel -->

                    <!-- BEGIN CONTENT -->
        <h3 class="page-title">QR Code</h3>
             <div class="page-bar">
                <ul class="page-breadcrumb">
                    <li>
                        <i class="icon-home"></i>
                        <a href="index.html">Home</a>
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li>
                        <span>Standard Advertisements</span>
                    </li>
                </ul>
            </div>                                                    

        <div class="row">
            <div class="col-md-12">
                <div class="tabbable-line boxless tabbable-reversed">
                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a href="#standard_product" data-toggle="tab"> Product Ad </a>
                        </li>
                        <li>
                            <a href="#standard_event" data-toggle="tab"> Event Ad </a>
                        </li>
                    </ul>
                     <div class="tab-content">
                        <div class="tab-pane active" id="standard_product">
                            <div class="portlet box green">
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
                                            <!-- <div class="form-group">
                                              <label class="col-sm-2 control-label">Dates</label>
                                              <div class="col-sm-5">
                                                <input type="text" class="form-control" name="daterange" placeholder="Select Dates">
                                              </div>
                                            </div> -->
                                            <div class="form-group">
                                                <label class="control-label col-sm-2">Date Range</label>
                                                <div class="col-sm-5">
                                                    <div class="input-group" id="defaultrange">
                                                        <input type="text" placeholder="01/10/2016 - 01/10/2016" name="daterange" class="form-control">
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
                                                    <button type="submit" class="btn btn-circle green">Submit</button>
                                                    <button type="button" class="btn btn-circle grey-salsa btn-outline">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                      <?php echo form_close(); ?> 
                                      <!-- END FORM-->
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="standard_event">
                            <div class="portlet box green">
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
                                    <?php echo form_open_multipart('merchant/sevent',$attributes); ?>
                                        <div class="form-body">
                                            <input type="hidden" name="merchantc" value="<?php echo $merchantcode; ?>">
                                            <div class="form-group ">
                                                <label class="control-label col-md-2">Date Ranges</label>
                                                <div class="col-md-5">
                                                    <div id="reportrange" name="daterange" class="btn default">
                                                        <i class="fa fa-calendar"></i> &nbsp;
                                                        <span> </span>
                                                        <b class="fa fa-angle-down"></b>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                              <label class="col-sm-2 control-label">Date Range</label>
                                              <div class="col-sm-5">
                                                
                                                <!-- <input type="text" class="form-control" name="daterange" placeholder="Select Dates"> -->
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
                                                    <button type="submit" class="btn btn-circle green">Submit</button>
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
        <a href="javascript:;" class="page-quick-sidebar-toggler">
                <i class="icon-login"></i>
            </a>
            <div class="page-quick-sidebar-wrapper" data-close-on-body-click="false">
                <div class="page-quick-sidebar">
                  <ul class="nav nav-tabs">
                        
                        <li>
                            <a href="javascript:;" data-target="#quick_sidebar_tab_2" data-toggle="tab"> Alerts
                                <span class="badge badge-success"></span>
                            </a>
                        </li>
                       
                    </ul>
                    <ul class="nav nav-tabs">
                        
                        <li>
                            <a href="javascript:;" data-target="#quick_sidebar_tab_1" data-toggle="tab"> Pending
                                <span class="badge badge-success"><?php $total = count($pending_ads)+ count($pending_merchants); echo $total;?></span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" data-target="#quick_sidebar_tab_2" data-toggle="tab"> Settlements  
                                <span class="badge badge-success"></span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab"> System
                                <span class="badge badge-success"></span>
                            </a>
                        </li>
                       
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active page-quick-sidebar-alerts" id="quick_sidebar_tab_1">
                            <div class="page-quick-sidebar-alerts-list">
                                <h3 class="list-heading">Merchants</h3>
                                <ul class="feeds list-items">
                                <!-- Alerts for pending merchants -->
                                    <?php if (isset($pending_merchants)): ?>
                                <?php $counter = 1; ?>
                                <?php foreach($pending_merchants as $row): ?>
                                        <li>
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-info">
                                                            <i class="fa fa-user"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc"> <?php echo $row->companyname; ?> | <?php echo $row->brandname; ?>
                                                            <a href="<?php echo base_url('index.php/admin/pending') ?>/#pending_merchant<?php echo $counter; ?>"><span class="label label-sm label-warning "> Pending
                                                                <i class="fa fa-share"></i>
                                                            </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <?php $counter++; ?>
                                        <?php endforeach; ?>
                                      <?php else: ?>
                                        <li>
                                          <div class="col1">
                                              <div class="cont">
                                                  <div class="cont-col1">
                                                      <div class="label label-sm label-info">
                                                          <i class="fa fa-close"></i>
                                                      </div>
                                                  </div>
                                                  <div class="cont-col2">
                                                      <div class="desc "> 
                                                      No pending merchants
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </li>
                                      <?php endif; ?>
                                      </ul>
                                      <h3 class="list-heading">Advertisements</h3>
                                      <ul class="feeds list-items">
                                      <!-- Alerts for pending advertisements -->
                                    <?php if (isset($pending_ads)): ?>
                                    <?php $counter = 1; ?>
                                    <?php foreach($pending_ads as $row): ?>
                                                    <li>
                                                        <div class="col1">
                                                            <div class="cont">
                                                                <div class="cont-col1">
                                                                    <div class="label label-sm label-danger">
                                                                        <i class="fa fa-user"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="cont-col2">
                                                                    <div class="desc"> <?php echo $row->merchantcode; ?> | <?php if (isset($row->adverteventname))
                                                                              {
                                                            echo $row->adverteventname;
                                                          }
                                                          else
                                                          {
                                                            echo $row->advertprodname;
                                                          }
                                                        ?>
                                                  <a href="<?php echo base_url('index.php/admin/ad_pending') ?>/#pending_merchant<?php echo $counter; ?>"><span class="label label-sm label-warning "> Pending
                                                      <i class="fa fa-share"></i>
                                                  </span></a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </li>
                              <?php $counter++; ?>
                        <?php endforeach; ?>
                      <?php else: ?>
                        <li>
                          <div class="col1">
                              <div class="cont">
                                  <div class="cont-col1">
                                      <div class="label label-sm label-info">
                                          <i class="fa fa-close"></i>
                                      </div>
                                  </div>
                                  <div class="cont-col2">
                                      <div class="desc "> 
                                      No pending advertisements.
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </li>
                      <?php endif; ?>
                </ul>
                            </div>
                        </div>
                        <!-- settlements -->
                        <div class="tab-pane page-quick-sidebar-alerts" id="quick_sidebar_tab_2">
                            <div class="page-quick-sidebar-alerts-list">
                                <h3 class="list-heading">Merchants</h3>
                                <ul class="feeds list-items">
                                <!-- Alerts for pending merchants -->
                                    <?php if (isset($pending_merchants)): ?>
                        <?php $counter = 1; ?>
                        <?php foreach($pending_merchants as $row): ?>
                                        <li>
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-info">
                                                            <i class="fa fa-user"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc"> some settlements
                                                            <a href="<?php echo base_url('index.php/admin/pending') ?>/#pending_merchant<?php echo $counter; ?>"><span class="label label-sm label-warning "> Pending
                                                                <i class="fa fa-share"></i>
                                                            </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <?php $counter++; ?>
                        <?php endforeach; ?>
                      <?php else: ?>
                        <li>
                          <div class="col1">
                              <div class="cont">
                                  <div class="cont-col1">
                                      <div class="label label-sm label-info">
                                          <i class="fa fa-close"></i>
                                      </div>
                                  </div>
                                  <div class="cont-col2">
                                      <div class="desc "> 
                                      No pending merchants
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </li>
                      <?php endif; ?>
                      </ul>
                
                            </div>
                        </div>
                        <!-- System -->
                        <div class="tab-pane page-quick-sidebar-alerts" id="quick_sidebar_tab_3">
                            <div class="page-quick-sidebar-alerts-list">
                                <h3 class="list-heading">Merchants</h3>
                                <ul class="feeds list-items">
                                <!-- Alerts for pending merchants -->
                                    <?php if (isset($pending_merchants)): ?>
                        <?php $counter = 1; ?>
                        <?php foreach($pending_merchants as $row): ?>
                                        <li>
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-info">
                                                            <i class="fa fa-user"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc">some system
                                                            <a href="<?php echo base_url('index.php/admin/pending') ?>/#pending_merchant<?php echo $counter; ?>"><span class="label label-sm label-warning "> Pending
                                                                <i class="fa fa-share"></i>
                                                            </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <?php $counter++; ?>
                        <?php endforeach; ?>
                      <?php else: ?>
                        <li>
                          <div class="col1">
                              <div class="cont">
                                  <div class="cont-col1">
                                      <div class="label label-sm label-info">
                                          <i class="fa fa-close"></i>
                                      </div>
                                  </div>
                                  <div class="cont-col2">
                                      <div class="desc "> 
                                      No pending merchants
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </li>No pending merchants
                      <?php endif; ?>
                </ul>
                
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <!-- END QUICK SIDEBAR -->
           
        </div>
        <!-- END CONTAINER -->
        <!-- BEGIN FOOTER -->
        <div class="page-footer">
            <div class="page-footer-inner"> 2015 &copy; Metronic by keenthemes.
            </div>
            <div class="scroll-to-top">
                <i class="icon-arrow-up"></i>
            </div>
        </div>

<!--[if lt IE 9]>
<script src="<php echo base_url('assets/global/plugins/respond.min.js'); ?>"></script>
<script src="<php echo base_url('assets/global/plugins/excanvas.min.js'); ?>"></script> 
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <script src="<?php echo base_url('assets/global/plugins/jquery.min.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/global/plugins/bootstrap/js/bootstrap.min.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/global/plugins/js.cookie.min.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/global/plugins/jquery.blockui.min.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/global/plugins/uniform/jquery.uniform.min.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js'); ?>" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="<?php echo base_url('assets/global/plugins/moment.min.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js'); ?>" type="text/javascript"></script>
        // <!-- <script src="<?php echo base_url('assets/global/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js'); ?>" type="text/javascript"></script> -->
        <script src="<?php echo base_url('assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/global/plugins/clockface/js/clockface.js'); ?>" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="<?php echo base_url('assets/global/scripts/app.min.js'); ?>" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="<?php echo base_url('assets/pages/scripts/components-date-time-pickers.min.js'); ?>" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="<?php echo base_url('assets/layouts/layout2/scripts/layout.min.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/layouts/layout2/scripts/demo.min.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/layouts/global/scripts/quick-sidebar.min.js'); ?>" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>

</html>