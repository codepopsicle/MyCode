<!DOCTYPE html>
<?php require 'base.php' ?>
            <?php startblock('sidebar') ?>
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
                        <li class="nav-item start ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-home"></i>
                                <span class="title">Registration</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item start ">
                                    <a href="<?php echo base_url('index.php/admin/pending') ?>" class="nav-link ">
                                        <i class="icon-bar-chart"></i>
                                        <span class="title">Pending</span>
                                        <span class="badge badge-success"><?php echo count($pending_merchants) ?></span>
                                    </a>
                                </li>
                                <li class="nav-item start ">
                                    <a href="<?php echo base_url('index.php/admin/approved') ?>" class="nav-link ">
                                        <i class="icon-bulb"></i>
                                        <span class="title">Approved</span>
                                    </a>
                                </li>
                                
                            </ul>
                        </li>
                        <li class="nav-item ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-diamond"></i>
                                <span class="title">Advertisements</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="<?php echo base_url('index.php/admin/ad_pending') ?>" class="nav-link ">
                                        <span class="title">Pending</span>
                                        <span class="badge badge-success"><?php echo count($pending_ads) ?></span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                         <li class="nav-item active open ">
                            <a href="<?php echo base_url('index.php/admin/parameters') ?>" class="nav-link nav-toggle">
                                <i class="icon-list"></i>
                                <span class="title">Parameters</span>
                                <span class="arrow"></span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="<?php echo base_url('index.php/admin/transactions') ?>" class="nav-link nav-toggle">
                                <i class="icon-exchange"></i>
                                <span class="title">Transactions</span>
                                <span class="arrow"></span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="<?php echo base_url('index.php/admin/customer') ?>" class="nav-link nav-toggle">
                                <i class="icon-users"></i>
                                <span class="title">Customers</span>
                                <span class="arrow"></span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="<?php echo base_url('index.php/admin/merchants') ?>" class="nav-link nav-toggle">
                                <i class="icon-users"></i>
                                <span class="title">Merchants</span>
                                <span class="arrow"></span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-settings"></i>
                                <span class="title">Filters</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="<?php echo base_url('index.php/admin/filter_lifestyle') ?>" class="nav-link ">
                                        <span class="title">Lifestyle</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="<?php echo base_url('index.php/admin/filter_city') ?>" class="nav-link ">
                                        <span class="title">City</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-bar-chart"></i>
                                <span class="title">Metrics</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="<?php echo base_url('index.php/admin/ad_metrics') ?>" class="nav-link nav-toggle">
                                        <span class="title">Advetisement 
                                        <br> Metrics</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="<?php echo base_url('index.php/admin/performance') ?>" class="nav-link nav-toggle">
                                        <span class="title">Performance
                                        <br> Metrics</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <!-- END SIDEBAR MENU -->
                </div>
                <!-- END SIDEBAR -->
            </div>
            <!-- END SIDEBAR -->
            <?php endblock() ?>

            <?php startblock('content') ?>
            <!-- BEGIN CONTENT -->
            
                    <!-- END THEME PANEL -->
                    <h3 class="page-title"> Parameters
                    </h3>
                    <div class="page-bar">
                        <ul class="page-breadcrumb">
                            <li>
                                <i class="icon-home"></i>
                                <a href="<?php echo base_url('index.php/admin/pending') ?>">Home</a>
                                <i class="fa fa-angle-right"></i>
                            </li>
                            <li>
                                <span>Parameters</span>
                            </li>
                        </ul>
                       </div>
                    <!-- write your content here -->
                    <!-- BEGIN ACCORDION PORTLET-->
                           
                     <div class="row">
                        <div class="col-md-12">
                            <div class="tabbable-line boxless tabbable-reversed">
                                <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a href="#tab_0" data-toggle="tab"> Countdown Timer </a>
                                    </li>
                                    
                                    <li>
                                        <a href="#tab_1" data-toggle="tab"> Advertisements </a>
                                    </li>

                                     <li>
                                        <a href="#tab_2" data-toggle="tab"> Discount Coupon </a>
                                    </li>

                                    
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab_0">
                                        <div class="portlet box red ">
                                            <div class="portlet-title">
                                                <div class="caption">
                                                    <i class="fa fa-gift"></i>Countdown Timer </div>
                                                <div class="tools">
                                                    <a href="javascript:;" class="collapse"> </a>
                                                    <a href="javascript:;" class="reload"> </a>
                                                </div>
                                            </div>
                                            <div class="portlet-body form">
                                                <!-- BEGIN FORM-->
                                                <form action="<?php echo base_url('index.php/update/countdown_timer_add') ?>" method="post" class="form-horizontal form-bordered form-label-stripped">
                                                    <div class="form-body">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">PreLaunch Description</label>
                                                            <div class="col-md-9">
                                                                <input type="text" placeholder="small" name="prelaunch" class="form-control" />
                                                                <span class="help-block"> Description </span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">PostLaunch Description</label>
                                                            <div class="col-md-9">
                                                                <input type="text" placeholder="medium" name="PostLaunchDescription" class="form-control" />
                                                                <span class="help-block"> Link to the app’s Play Store link </span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Target App Version</label>
                                                            <div class="col-md-9">
                                                                <input type="text" placeholder="medium" name="TargetAppVersion" class="form-control" />
                                                                <span class="help-block"> Enter the app version </span>
                                                            </div>
                                                        </div>
                                                        
                                                         <div class="form-group">
                                                            <label class="control-label col-md-3">Is Displayed</label>
                                                            <div class="col-md-9">
                                                                <div class="radio-list">
                                                                    <label>
                                                                        <input type="radio" name="IsDisplayed" value=1 /> Yes </label>
                                                                    <label>
                                                                        <input type="radio" name="IsDisplayed" value=0 checked/> No </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Launch Date</label>
                                                            <div class="col-md-9">
                                                                <input type="text" name="LaunchDate" class="form-control form-control-inline input-medium date-picker" placeholder="yyyy-mm-dd">
                                                                 <span class="help-block"> Select date </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-actions">
                                                        <div class="row">
                                                            <div class="col-md-offset-3 col-md-9">
                                                                <button type="submit" class="btn green">
                                                                    <i class="fa fa-check"></i> Submit</button>
                                                                <button type="button" class="btn default">Cancel</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                                <!-- END FORM-->
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="tab-pane " id="tab_1">
                                        <div class="portlet box purple ">
                                            <div class="portlet-title">
                                                <div class="caption">
                                                    <i class="fa fa-gift"></i>Form Sample </div>
                                                <div class="tools">
                                                    <a href="javascript:;" class="collapse"> </a>
                                                    <a href="javascript:;" class="reload"> </a>
                                                </div>
                                            </div>
                                            <div class="portlet-body form">
                                                <!-- BEGIN FORM-->
                                                <form action="#" class="form-horizontal form-bordered form-label-stripped">
                                                    <div class="form-body">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">First Name</label>
                                                            <div class="col-md-9">
                                                                <input type="text" placeholder="small" class="form-control" />
                                                                <span class="help-block"> This is inline help </span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Last Name</label>
                                                            <div class="col-md-9">
                                                                <input type="text" placeholder="medium" class="form-control" />
                                                                <span class="help-block"> This is inline help </span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Gender</label>
                                                            <div class="col-md-9">
                                                                <select class="form-control">
                                                                    <option value="">Male</option>
                                                                    <option value="">Female</option>
                                                                </select>
                                                                <span class="help-block"> Select your gender. </span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Date of Birth</label>
                                                            <div class="col-md-9">
                                                                <input type="text" class="form-control" placeholder="dd/mm/yyyy"> </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Category</label>
                                                            <div class="col-md-9">
                                                                <select class="form-control select2_category">
                                                                    <option value="Category 1">Category 1</option>
                                                                    <option value="Category 2">Category 2</option>
                                                                    <option value="Category 3">Category 5</option>
                                                                    <option value="Category 4">Category 4</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Multi-Value Select</label>
                                                            <div class="col-md-9">
                                                                <select class="form-control select2_sample1" multiple>
                                                                    <optgroup label="NFC EAST">
                                                                        <option>Dallas Cowboys</option>
                                                                        <option>New York Giants</option>
                                                                        <option>Philadelphia Eagles</option>
                                                                        <option>Washington Redskins</option>
                                                                    </optgroup>
                                                                    <optgroup label="NFC NORTH">
                                                                        <option>Chicago Bears</option>
                                                                        <option>Detroit Lions</option>
                                                                        <option>Green Bay Packers</option>
                                                                        <option>Minnesota Vikings</option>
                                                                    </optgroup>
                                                                    <optgroup label="NFC SOUTH">
                                                                        <option>Atlanta Falcons</option>
                                                                        <option>Carolina Panthers</option>
                                                                        <option>New Orleans Saints</option>
                                                                        <option>Tampa Bay Buccaneers</option>
                                                                    </optgroup>
                                                                    <optgroup label="NFC WEST">
                                                                        <option>Arizona Cardinals</option>
                                                                        <option>St. Louis Rams</option>
                                                                        <option>San Francisco 49ers</option>
                                                                        <option>Seattle Seahawks</option>
                                                                    </optgroup>
                                                                    <optgroup label="AFC EAST">
                                                                        <option>Buffalo Bills</option>
                                                                        <option>Miami Dolphins</option>
                                                                        <option>New England Patriots</option>
                                                                        <option>New York Jets</option>
                                                                    </optgroup>
                                                                    <optgroup label="AFC NORTH">
                                                                        <option>Baltimore Ravens</option>
                                                                        <option>Cincinnati Bengals</option>
                                                                        <option>Cleveland Browns</option>
                                                                        <option>Pittsburgh Steelers</option>
                                                                    </optgroup>
                                                                    <optgroup label="AFC SOUTH">
                                                                        <option>Houston Texans</option>
                                                                        <option>Indianapolis Colts</option>
                                                                        <option>Jacksonville Jaguars</option>
                                                                        <option>Tennessee Titans</option>
                                                                    </optgroup>
                                                                    <optgroup label="AFC WEST">
                                                                        <option>Denver Broncos</option>
                                                                        <option>Kansas City Chiefs</option>
                                                                        <option>Oakland Raiders</option>
                                                                        <option>San Diego Chargers</option>
                                                                    </optgroup>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Membership</label>
                                                            <div class="col-md-9">
                                                                <div class="radio-list">
                                                                    <label>
                                                                        <input type="radio" name="optionsRadios2" value="option1" /> Free </label>
                                                                    <label>
                                                                        <input type="radio" name="optionsRadios2" value="option2" checked/> Professional </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Street</label>
                                                            <div class="col-md-9">
                                                                <input type="text" class="form-control"> </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">City</label>
                                                            <div class="col-md-9">
                                                                <input type="text" class="form-control"> </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">State</label>
                                                            <div class="col-md-9">
                                                                <input type="text" class="form-control"> </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Post Code</label>
                                                            <div class="col-md-9">
                                                                <input type="text" class="form-control"> </div>
                                                        </div>
                                                        <div class="form-group last">
                                                            <label class="control-label col-md-3">Country</label>
                                                            <div class="col-md-9">
                                                                <select class="form-control"> </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-actions">
                                                        <div class="row">
                                                            <div class="col-md-offset-3 col-md-9">
                                                                <button type="submit" class="btn green">
                                                                    <i class="fa fa-check"></i> Submit</button>
                                                                <button type="button" class="btn default">Cancel</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                                <!-- END FORM-->
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="tab-pane" id="tab_2">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                           
                                
                            <!-- END ACCORDION PORTLET-->
                
                <!-- END CONTENT BODY -->
           
            <!-- END CONTENT -->
            <?php endblock() ?>
            <!-- BEGIN QUICK SIDEBAR -->