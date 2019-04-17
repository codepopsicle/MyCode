<script src="<?php echo base_url('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/global/plugins/jquery.sparkline.min.js" type="text/ja'); ?>vascript"></script><!DOCTYPE html>
<?php require 'base.php' ?>
<?php
      if(isset($records))
        foreach ($records as $row) 
        {
          $merchantid  = $row->merchantid;
          $companyname = $row->companyname;
          $brandname = $row->brandname;
          $regaddr = $row->regaddr;
          $mobile = $row->mobile;
          $email = $row->email;
          $pan = $row->pan;
          $username = $row->username;
          $merchantcode = $row->merchantcode;
          $isapproved = $row->isapproved;
          $isloggedin = $row->isloggedin;
          $isactive = $row->isactive;
          $pincode = $row->pincode;
          $city = $row->city;
          $bankaccname = $row->bankaccname;
          $bankaccno = $row->bankaccno;
          $vattin = $row->vattin;
          $csttin = $row->csttin;
          $kycpending = $row->kycpending;
          $account_type = $row->account_type;
          $picture = $row->picture;
        }

    ?>
    <?php startblock('page_level_plugins'); ?>
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="<?php echo base_url('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css'); ?>" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
    <?php endblock(); ?>


    <?php startblock('page_level_styles'); ?>
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link href="<?php echo base_url('assets/pages/css/profile.min.css'); ?>" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL STYLES -->
    <?php endblock(); ?>

      <?php startblock('sidebar_closed'); ?>
        page-sidebar-closed
      <?php endblock(); ?>">
      <?php startblock('sidebar') ?>
            <!-- BEGIN SIDEBAR -->
            <div class="page-sidebar-wrapper ">
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
                    <ul class="page-sidebar-menu  page-header-fixed page-sidebar-menu-closed page-sidebar-menu-hover-submenu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
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
            <!-- END SIDEBAR -->
            <?php endblock() ?>

            <?php startblock('content') ?>
            <!-- BEGIN CONTENT -->
            <!-- Merchant Profile Php Ends-->

        <!-- success message after successfull change password -->

        <?php if(isset($result)): ?>
          
            <script src="<?php echo base_url('assets/global/plugins/jquery.min.js'); ?>" type="text/javascript"></script>
            <script type="text/javascript">
              $(document).ready(function(){
                $("#myModal").modal('show');
              });
            </script>
            <div id="myModal" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                      <?php if ($result == "success"): ?>
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title"><?php print_r($result); ?></h4>
                        </div>
                        <div class="modal-body">
                          <p>Your password is changed successfully.</p>
                        </div>
                      <?php elseif ($result == "unsuccessful"): ?>
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title"><?php print_r($result); ?></h4>
                        </div>
                        <div class="modal-body">
                          <p>Your password is incorrect.</p>
                        </div>
                      <?php endif; ?>
                    </div>
                </div>
            </div>
      <?php endif; ?>
    <!--Hearder Starts-->
                    <!-- END THEME PANEL -->
                    <h3 class="page-title"> User Profile
                        <small>user account page</small>
                    </h3>
                    <!-- END PAGE HEADER-->
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN PROFILE SIDEBAR -->
                            <div class="profile-sidebar">
                                <!-- PORTLET MAIN -->
                                <div class="portlet light profile-sidebar-portlet ">
                                    <!-- SIDEBAR USERPIC -->
                                    <div class="profile-userpic">
                                        <img style="height:100px; width:100px" src="<?php echo $picture; ?>" class="img-responsive" alt=""> </div>
                                    <!-- END SIDEBAR USERPIC -->
                                    <!-- SIDEBAR USER TITLE -->
                                    <div class="profile-usertitle">
                                        <div class="profile-usertitle-name"> <?php echo $username; ?> </div>
                                        <div class="profile-usertitle-job"> <?php echo $account_type; ?> </div>
                                    </div>
                                    <!-- END SIDEBAR USER TITLE -->
                                    <!-- SIDEBAR MENU -->
                                    <div class="profile-usermenu">
                                        <ul class="nav">
                                            <li class="active">
                                                <a href="page_user_profile_1_account.html">
                                                    <i class="icon-settings"></i> Account Settings </a>
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url('index.php/merchant/help'); ?>">
                                                    <i class="icon-info"></i> Help </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- END MENU -->
                                </div>
                                <!-- END PORTLET MAIN -->
                            </div>
                            <!-- BEGIN PROFILE CONTENT -->
                            <div class="profile-content">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="portlet light ">
                                            <div class="portlet-title tabbable-line">
                                                <div class="caption caption-md">
                                                    <i class="icon-globe theme-font hide"></i>
                                                    <span class="caption-subject font-blue-madison bold uppercase">Profile Account</span>
                                                </div>
                                                <ul class="nav nav-tabs">
                                                    <li class="active">
                                                        <a href="#tab_1_0" data-toggle="tab">Company Details</a>
                                                    </li>
                                                     <li>
                                                        <a href="#tab_1_1" data-toggle="tab">Personal Details</a>
                                                    </li>
                                                    <li>
                                                        <a href="#tab_1_2" data-toggle="tab">Change Avatar</a>
                                                    </li>
                                                    <li>
                                                        <a href="#tab_1_3" data-toggle="tab">Change Password</a>
                                                    </li>
                                                    
                                                </ul>
                                            </div>
                                                <div class="tab-content">
                                                    <!-- COMPANY INFO TAB -->
                                                    <div class="tab-pane active" id="tab_1_0">
                                                        <form role="form" method="post" action="<?php echo base_url('index.php/update/profile_update'); ?>">
                                                            <input type="hidden" name="old_username" value="<?php echo $username; ?>" class="form-control" /> 
                                                            
                                                            <div class="form-group">
                                                                <label class="control-label">Company Name</label>
                                                                <text class="form-control" type="text" name="companyname" ><?php echo $companyname; ?> </text></div>
                                                            <div class="form-group">
                                                                <label class="control-label">Brand Name</label> 
                                                                <input type="text" name="brandname" value="<?php echo $brandname; ?>"  class="form-control" /> </div>
                                                             
                                                            <div class="form-group">
                                                                <label class="control-label">City</label>
                                                                <input type="text" name="city" value="<?php echo $city; ?>" class="form-control"  /> </div>
                                                            <div class="form-group">
                                                                <label class="control-label">Pin Code</label>
                                                                <input type="text" name="pincode" value="<?php echo $pincode; ?>" class="form-control" /> </div>
                                                            <hr>
                                                            <div class="form-group">
                                                                <label class="control-label">PAN Card</label>
                                                                <text class="form-control" name="pan"><?php echo $pan; ?></text></div> 
                                                            <div class="form-group">
                                                                <label class="control-label">VAT Number</label>
                                                                <text class="form-control" name="vattin"><?php echo $vattin; ?></text></div>
                                                            <div class="form-group">
                                                                <label class="control-label">CST Number</label>
                                                                <text class="form-control" name="csttin"><?php echo $csttin; ?></text></div>
                                                            <hr>
                                                            <div class="form-group">
                                                                <label class="control-label">Account Holder's name</label>
                                                                <text class="form-control" ><?php echo $bankaccname; ?></text> </div>
                                                            <div class="form-group">
                                                                <label class="control-label">Account Number</label>
                                                                <text class="form-control" /> <?php echo $bankaccno; ?></text></div>
                                                            <div class="form-group">
                                                                <label class="control-label">Bank Name</label>
                                                                <text class="form-control" /><?php echo $bankaccname; ?></text> </div>
                                                            <div class="form-group">
                                                                <label class="control-label">Bank Address</label> 
                                                                <text class="form-control" /> No Database Reference</text></div>
                                                            <div class="margiv-top-10">
                                                                 <button type="submit" class="btn green">Save changes</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <!-- END COMPANY INFO -->
                                                    <!-- PERSONAL INFO TAB -->
                                                    <div class="tab-pane" id="tab_1_1">
                                                        <form role="form" method="post" action="<?php echo base_url('index.php/update/profile_personal_update'); ?>">
                                                            <div class="form-group">
                                                                <label class="control-label">User Name</label>
                                                                <input type="text" name="username" value="<?php echo $username; ?>" class="form-control" /> </div>
                                                            <div class="form-group">
                                                                <label class= "control-label">Email Address</label>
                                                                  <input type="email" class="form-control" name="email" value="<?php echo $email; ?>" >
                                                            </div>
                                                            <div class="form-group">
                                                              <label class= "control-label">Mobile Number</label>
                                                                <input type="text" class="form-control" name="mobile" value="<?php echo $mobile; ?>" data-validate="required,number,size(10)">
                                                            </div>
                                                            <div class="margiv-top-10">
                                                                 <button type="submit" class="btn green">Save changes</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <!-- END PERSONAL INFO TAB -->
                                                    <!-- CHANGE AVATAR TAB -->
                                                    <div class="tab-pane" id="tab_1_2">
                                                        <?php $attributes = array('class' => 'form-horizontal'); ?>
                                                        <?php echo form_open_multipart('merchant/profile_picture',$attributes); ?>
                                                        <!-- <form action="#" role="form"> -->
                                                            <div class="form-group">
                                                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                                                    <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                                        <img src="<?php if(isset($records)){echo($records[0]->picture);} ?>" alt="" /> </div>
                                                                    <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                                                                    <div>
                                                                        <span class="btn default btn-file">
                                                                            <span class="fileinput-new"> Select image </span>
                                                                            <span class="fileinput-exists"> Change </span>
                                                                            <input type="file" name="userfile"> </span>
                                                                        <a href="javascript:;" class="btn default fileinput-exists" data-dismiss="fileinput"> Remove </a>
                                                                    </div>
                                                                </div>
                                                                <div class="clearfix margin-top-10">
                                                                    <span class="label label-danger">NOTE! </span>
                                                                    <span>Attached image thumbnail is supported in Latest Firefox, Chrome, Opera, Safari and Internet Explorer 10 only </span>
                                                                </div>
                                                            </div>
                                                            <div class="margin-top-10">
                                                                 <button type="submit" class="btn green">Submit</button>
                                                                <a href="javascript:;" class="btn default"> Cancel </a>
                                                            </div>
                                                        <!-- </form> -->
                                                        <?php echo form_close(); ?> 
                                                    </div>
                                                    <!-- END CHANGE AVATAR TAB -->
                                                    <!-- CHANGE PASSWORD TAB -->
                                                    <div class="tab-pane" id="tab_1_3">
                                                        <form method="post" action="<?php echo base_url('index.php/update/password_update'); ?>">
                                                            <div class="form-group">
                                                                <label class="control-label">Current Password</label>
                                                                <input type="password" name="password" class="form-control" /> </div>
                                                            <div class="form-group">
                                                                <label class="control-label">New Password</label>
                                                                <input type="password" name="new_password" class="form-control" /> </div>
                                                            <div class="form-group">
                                                                <label class="control-label">Re-type New Password</label>
                                                                <input type="password" class="form-control" /> </div>
                                                            <div class="margin-top-10">
                                                                 <button  type="submit" class="btn btn-primary"> Change Password </button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <!-- END CHANGE PASSWORD TAB -->
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END PROFILE CONTENT -->
                        </div>
                    </div>


            <!-- END CONTENT -->
            <?php endblock() ?>
            <!-- BEGIN QUICK SIDEBAR -->

    <?php startblock('page_level_plugins_scripts'); ?>
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
       <script src="<?php echo base_url('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/global/plugins/jquery.sparkline.min.js'); ?>" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
    <?php endblock(); ?>
       

    <?php startblock('page_level_scripts'); ?>
        <!-- BEGIN  PAGE LEVEL SCRIPTS -->
        <script src="<?php echo base_url('assets/pages/scripts/profile.min.js'); ?>" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
    <?php endblock(); ?>