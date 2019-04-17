<!DOCTYPE html>
<?php require_once 'ti.php' ?>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.5
Version: 4.5.1
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
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>Metronic | Blank Page Layout</title>
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

      <?php startblock('sidebar'); ?>
      <?php endblock(); ?>

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
      <?php startblock('content') ?>
      <?php endblock() ?>

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
        </div>
        <!--END THEME PANKL -- >
        
        <!-- BEGIN FOOTER -->
         <!-- BEGIN FOOTER -->
        <!-- BEGIN PRE-FOOTER -->
        <div class="page-prefooter">
            <div class="container">
                <div class="row">
                <div class="col-md-2 col-sm-0 col-xs-0 footer-block">
                </div>
                    
                    <div class="col-md-4 col-sm-6 col-xs-12 footer-block" >
                        <h2 style="font-weight: 700;font-size: 15px;text-transform: uppercase;letter-spacing: 1px;">Subscribe Email</h2>
                        <div class="subscribe-form" style="margin-right: 48px">
                            <form action="javascript:;">
                                <div class="input-group">
                                    <input type="text" placeholder="mail@email.com" class="form-control">
                                    <span class="input-group-btn">
                                        <button class="btn" type="submit">Submit</button>
                                    </span>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 footer-block" >
                        <h2 style="font-weight: 700;font-size: 15px;text-transform: uppercase;letter-spacing: 1px;">Follow Us On</h2>
                        <ul class="social-icons" >
                            
                            <li>
                                <a href="https://www.facebook.com/Whizzbuy-1605782719694831/" data-original-title="facebook" class="facebook"></a>
                            </li>
                            <li>
                                <a href="https://twitter.com/whizzbuy" data-original-title="twitter" class="twitter"></a>
                            </li>
                            <li>
                                <a href="javascript:;" data-original-title="googleplus" class="googleplus"></a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/company/whizzbuy" data-original-title="linkedin" class="linkedin"></a>
                            </li>
                            <li>
                                <a href="javascript:;" data-original-title="youtube" class="youtube"></a>
                            </li>
                            <li>
                                <a href="javascript:;" data-original-title="vimeo" class="vimeo"></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12 footer-block">
                        <h2 style="font-weight: 700;font-size: 15px;text-transform: uppercase;letter-spacing: 1px;">Contact Us</h2>
                        <address class="margin-bottom-40"> Phone: +91-7506091276
                            <br> Email:
                            <a href="mailto:info@metronic.com">support@whizzbuy.com</a>
                        </address>
                    </div>
                </div>
            </div>
        </div>
        <!-- END PRE-FOOTER -->
        <!-- BEGIN INNER FOOTER -->
        <div class="page-footer">
            <div class="container"> 2015 &copy; Metronic by kleenthemes.
                <a href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" title="Purchase Metronic just for 27$ and get lifetime updates for free" target="_blank">Purchase Metronic!</a>
            </div>
        </div>
        <div class="scroll-to-top">
            <i class="icon-arrow-up"></i>
        </div>
        <!-- END INNER FOOTER -->
        <!-- END FOOTER --><!-- END FOOTER -->
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
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="<?php echo base_url('assets/global/scripts/app.min.js'); ?>" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="<?php echo base_url('assets/layouts/layout2/scripts/layout.min.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/layouts/layout2/scripts/demo.min.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/layouts/global/scripts/quick-sidebar.min.js'); ?>" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>

</html>