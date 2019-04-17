<!DOCTYPE html>
<html lang="en">
  <!-- ____________________________
  _________________________________
            Head Starts
  _________________________________
  _________________________________
  -->
  <head>

        <meta charset="utf-8">

        <title>WhizzBuy | Outlets</title>

        <meta name="description" content="WhizzBuy"/>
        <meta name="viewport" content="width=1000, initial-scale=1.0, maximum-scale=1.0">

        <!--Stylesheets-->
        <link href="<?php echo base_url('dist/css/vendor/bootstrap.min.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('dist/css/flat-ui.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('docs/assets/css/demo.css'); ?>" rel="stylesheet">
        <link rel="shortcut icon" href="<?php echo base_url('img/favicon.ico'); ?>">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <!--Javascripts-->
        <script src="<?php echo base_url('dist/js/vendor/jquery.min.js'); ?>"></script>
        <script src="<?php echo base_url('dist/js/flat-ui.min.js'); ?>"></script>
        <script src="<?php echo base_url('dist/js/verify.notify.min.js'); ?>"></script>
        <!--Common Scripts and Stylesheets Included-->

        <!--Navbar Style-->
        <style type="text/css">

            .navbar-brand { position: relative; z-index: 2; }

            .navbar-nav.navbar-right .btn { position: relative; z-index: 2; padding: 4px 20px; margin: 10px auto; transition: transform 0.3s; }

            .navbar .navbar-collapse { position: relative; overflow: hidden !important; }
            .navbar .navbar-collapse .navbar-right > li:last-child { padding-left: 22px; }

            .navbar .nav-collapse { position: absolute; z-index: 1; top: 0; left: 0; right: 0; bottom: 0; margin: 0; padding-right: 120px; padding-left: 80px; width: 100%; }
            .navbar.navbar-default .nav-collapse { background-color: #f8f8f8; }
            .navbar.navbar-inverse .nav-collapse { background-color: #222; }
            .navbar .nav-collapse .navbar-form { border-width: 0; box-shadow: none; }
            .nav-collapse>li { float: right; }

            .btn.btn-circle { border-radius: 50px; }
            .btn.btn-outline { background-color: transparent; }

            .navbar-nav.navbar-right .btn:not(.collapsed) {
                background-color: rgb(111, 84, 153);
                border-color: rgb(111, 84, 153);
                color: rgb(255, 255, 255);
            }

            .navbar.navbar-default .nav-collapse,
            .navbar.navbar-inverse .nav-collapse {
                height: auto !important;
                transition: transform 0.3s;
                transform: translate(0px,-50px);
            }
            .navbar.navbar-default .nav-collapse.in,
            .navbar.navbar-inverse .nav-collapse.in {
                transform: translate(0px,0px);
            }


            @media screen and (max-width: 767px) {
                .navbar .navbar-collapse .navbar-right > li:last-child { padding-left: 15px; padding-right: 15px; } 
                
                .navbar .nav-collapse { margin: 7.5px auto; padding: 0; }
                .navbar .nav-collapse .navbar-form { margin: 0; }
                .nav-collapse>li { float: none; }
                
                .navbar.navbar-default .nav-collapse,
                .navbar.navbar-inverse .nav-collapse {
                    transform: translate(-100%,0px);
                }
                .navbar.navbar-default .nav-collapse.in,
                .navbar.navbar-inverse .nav-collapse.in {
                    transform: translate(0px,0px);
                }
                
                .navbar.navbar-default .nav-collapse.slide-down,
                .navbar.navbar-inverse .nav-collapse.slide-down {
                    transform: translate(0px,-100%);
                }
                .navbar.navbar-default .nav-collapse.in.slide-down,
                .navbar.navbar-inverse .nav-collapse.in.slide-down {
                    transform: translate(0px,0px);
                }
                
            }
        </style>
        <!--Fon size Reduction-->
        <style>body{font-size: 14px}</style>
        <!--Nabar Style Ends-->

        <!--General Stylesheet-->
        <style type="text/css">
            .nav1txt{
              font-size: 60%;
            }
            .list1txt{
              font-size: 80%
            }
            .nav1{padding-bottom: -5px;
              margin-bottom: -20px;}

            .shrink{
              margin-top: -25px;
              margin-right: -40px;
            }

            .nav2, .nav3{
              padding: 20px;
              padding-top: 0px;
              padding-bottom: 0px;
              
            }
            

            header{
              background-color: #99FFCC;
                  width:100%;
                  position:fixed;
                  top:0px;
                  z-index: 1;
            }

            .btn-transparent{
              background: transparent;

            }
            .btn-transparent:hover{
              background: #000000;
            }

            .main-content{
              padding-top: 140px;
              padding-left: 90px;
              padding-right: 90px;
            }

            .borderless tbody tr td, .borderless tbody tr th, .borderless thead tr th {
              border: none;
              }
            .datapoint{
              padding: 10px;
              background: #EAFFFF;
              -o-transition:.5s;
              -ms-transition:.5s;
              -moz-transition:.5s;
              -webkit-transition:.5s;
               transition:.5s;

            }

            .datapoint:hover{
              color:#ffffff;
              background: #000000;

            }
            .well{
              border-radius: 0px;
              box-shadow: 2px 2px 5px #888888;
            }

            p.smalls{
              line-height: 90%;

            }

            .disabled{
              color:#858585;
            }

            p.weights{
              font-weight: 900;
            }
        </style>



        <!--Script for automatic dropdown on hover-->
        <script type="text/javascript">
            $(function(){
                $(".dropdown").hover(            
                        function() {
                            $('.dropdown-menu', this).stop( true, true ).fadeIn("fast");
                            $(this).toggleClass('open');
                            $('b', this).toggleClass("caret caret-up");                
                        },
                        function() {
                            $('.dropdown-menu', this).stop( true, true ).fadeOut("fast");
                            $(this).toggleClass('open');
                            $('b', this).toggleClass("caret caret-up");                
                        });
                });
        </script><!--//.Automatic Dropdown-->



  </head>
  <!-- ____________________________
  _________________________________
            Head Ends
  _________________________________
  _________________________________
  -->
  <!-- ____________________________
  _________________________________
            BODY STARTS
  _________________________________
  _________________________________
  -->
  <body>
    <!--Data from merchant profile table-->
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
        }

    ?>
    <!-- Merchant Profile Php Ends-->

    <!--Hearder Starts-->
    <header  id="wrap">
        <div class="head-navbar" style="background:#99FFCC;">
            <!-- Second navbar for categories -->
            <nav class="navbar navbar-default " style="background:none;margin-bottom: 0">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="#"><img src="<?php echo base_url('img/logo.png'); ?>" width="37">WhizzBuy</a>
                </div>
            
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-collapse-1">
                  <ul class="nav navbar-nav navbar-right">
                    <li><a href="">Account Status: <span><?php if($isactive == 1) echo '&nbsp;&nbsp;ACTIVE'; else echo '&nbsp;&nbsp;INACTIVE'; ?></span></a></li>
                    <li>
                      <a class="btn btn-default btn-outline btn-circle collapsed"  data-toggle="collapse" href="#nav-collapse1" aria-expanded="false" aria-controls="nav-collapse1"><?php echo $brandname; ?></a>
                    </li>
                    <li><a href="#"><button class="btn btn-xs btn-info" style="margin:0;padding:1;">Contact</button></a></li>
                  </ul>
                  <ul class="collapse nav navbar-nav nav-collapse" id="nav-collapse1" style="background:#99FFCC;">
                    <li><a href="#">&nbsp;</a></li>
                    <li><a href="#">&nbsp;</a></li>
                    <li><a href="#">&nbsp;</a></li>
                    <li><a href="#">&nbsp;</a></li>
                    <li><a href="<?php echo base_url('index.php/home/logout'); ?>"><button class="btn btn-xs btn-danger" style="margin:0;padding:1;">Logout</button></a></li>
                    <li><a href="<?php echo base_url('index.php/home/profile'); ?>"><button class="btn btn-xs btn-info" style="margin:0;padding:1;">Manage Profile</button></a></li>

                  </ul>
                </div><!-- /.navbar-collapse -->
            </nav><!-- /.navbar -->


            <!--Navtabs-->
            <ul class="nav nav-tabs" style="padding-left:20px;">
              <li role="presentation" class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="" role="button" aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-line-chart"></i>  Metrics <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                  <li role="presentation"><a href="<?php echo base_url('index.php/home/performance_metrics') ?>">Performance metrics</a></li>
                  <li role="presentation"><a href="<?php echo base_url('index.php/home/ad_metrics') ?>">Ad Metrics</a></li>
                </ul>
              </li>
              <li role="presentation"><a href="<?php echo base_url('index.php/home/transactions') ?>"><i class="fa fa-inr"></i> Transactions</a></li>
              <li role="presentation"><a href="<?php echo base_url('index.php/home/qrcode') ?>"><i class="fa fa-qrcode"></i> QR Code</a></li>
              <li role="presentation" class="active"><a href="<?php echo base_url('index.php/home/outlets') ?>"><i class="fa fa-shopping-cart"></i> My Outlets</a></li>
              <li role="presentation" class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="" role="button" aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-buysellads"></i> Whizzbuy Ads <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                  <li role="presentation"><a href="<?php echo base_url('index.php/home/standard_ads') ?>">Standard</a></li>
                  <li role="presentation" class="bg-warning"><a href="<?php echo base_url('index.php/home/premium_ads') ?>">Premium</a></li>
                </ul>
              </li>
            </ul>

        </div><!-- /.nav-header -->
    </header>
    <!-- Header Ends -->
    <!-- Main Content Starts -->
    <div class="container-fluid main-content"  id="wrap">
      <div class="row">
        
        bhjnk
          <div class="col-md-8">
            <?php if(isset($records2)): ?>
            <?php foreach ($records2 as $row): ?>
              <div class="well">
                  <table class="table borderless">
                    <tr>
                      <td class="list1txt" width="30%">Outlet Code<br></td>
                      <td class="list1txt" width="70%"><?php echo $row->uniqueoutletcode; ?></td>
                    </tr>
                    <tr>
                      <td class="list1txt">Outlet Name</td>
                      <td class="list1txt"><?php echo $row->locality; ?></td>
                    </tr>
                    <tr>
                      <td class="list1txt">Outlet Address</td>
                      <td class="list1txt"><?php echo $row->outletaddr; ?></td>
                    </tr>
                    <tr>
                      <td class="list1txt"></td>
                      <td class="list1txt"><button class="btn btn-xs btn-danger" data-toggle="modal" data-target="#my<?php echo $row->outletid; ?>">Edit</button></td>
                    </tr>
                  </table>

                  <!--Edit Outlet modal Modal -->
                  <div class="modal fade" id="my<?php echo $row->outletid; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog modal-lg" role="document">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Edit Outlet: <?php echo $row->outletaddr; ?></h4>
                        </div>
                        <div class="modal-body">
                          <form class="form-horizontal" action="<?php echo base_url('index.php/update/personal'); ?>" method="post">
                            <div class="form-group">
                              <input type="hidden"  class="form-control" name="outletid" value="<?php echo $row->outletid; ?>" >
                            </div>
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Outlet Address</label>
                                <div class="col-sm-10">
                                  <textarea class="form-control" rows="3" name="address" data-validate="required">"<?php echo $row->outletaddr; ?>"</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Outlet PIN Code</label>
                                  <div class="col-sm-10">
                                    <input type="text" class="form-control" name="pin" value="<?php echo $row->outpincode; ?>" data-validate="required,number,size(6)">
                                  </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Outlet Location</label>
                                  <div class="col-sm-10">
                                    <input type="text" class="form-control" name="location" value="<?php echo $row->outlocation; ?>" data-validate="required">
                                  </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Outlet Locality</label>
                                  <div class="col-sm-10">
                                    <input type="text" class="form-control" name="locality" value="<?php echo $row->locality; ?>" data-validate="required">
                                  </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Outlet City</label>
                                  <div class="col-sm-10">
                                    <input type="text" class="form-control" name="city" value="<?php echo $row->outletcity; ?>" data-validate="required">
                                  </div>
                            </div>
                        </div><!--modal body Ends-->

                        <div class="modal-footer">
                              <button type="submit" class="btn btn-primary">Save changes</button>
                            </form>
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>

                      </div><!--.//.Modal Content-->
                    </div>
                  </div><!--.//Modal End-->
              </div><!--well END-->
            <?php endforeach; ?>
          <?php else: ?>
          <?php echo '<h3>No Outlets Registered<br>Register New Outlets</h3>'; ?>
        <?php endif; ?>



            </div><!--col Ends-->

            <div class="col-md-4">
                <button class="btn btn-block btn-success btn-lg" data-toggle="modal" data-target="#addOutlet">Add New Outlet</button>
            </div>

              <!-- Modal for new outlet-->
              <div class="modal fade" id="addOutlet" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="myModalLabel">Add New Outlet</h4>
                    </div>

                    <div class="modal-body">
                      <form class="form-horizontal" action="<?php echo base_url('index.php/update/outletadd'); ?>" method="post" name="add_outlet">
                            <div class="form-group">
                              <input type="hidden"  class="form-control" name="company" value="<?php echo $companyname; ?>">
                              <input type="hidden"  class="form-control" name="parentmerchant" value="<?php echo $brandname; ?>">
                              <input type="hidden"  class="form-control" name="merchantcode" value="<?php echo $merchantcode; ?>">
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Username</label>
                                  <div class="col-sm-10">
                                    <input type="text"  class="form-control" name="username" placeholder="Username for login" data-validate="required,min(6)">
                                  </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Password</label>
                                  <div class="col-sm-10">
                                    <input type="password"  class="form-control" name="password" placeholder="Password" data-validate="required,min(6)">
                                  </div>
                            </div>
                            <!-- <div class="form-group">
                                <label class="col-sm-2 control-label">Email ID</label>
                                  <div class="col-sm-10">
                                    <input type="text"  class="form-control" name="email" placeholder="Email ID">
                                  </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Mobile</label>
                                  <div class="col-sm-10">
                                    <input type="text"  class="form-control" name="mobile" placeholder="Mobile Number">
                                  </div>
                            </div> -->
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Outlet Address</label>
                                <div class="col-sm-10">
                                  <textarea class="form-control" rows="3" name="address" data-validate="required"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Outlet PIN Code</label>
                                  <div class="col-sm-10">
                                    <input type="text" class="form-control" name="pin" placeholder="PIN Code of the Outlet" data-validate="required,number,size(6)">
                                  </div>
                            </div>
                            <!-- <div class="form-group">
                                <label class="col-sm-2 control-label">Outlet Location</label>
                                  <div class="col-sm-10">
                                    <input type="text" class="form-control" name="location" placeholder="Location of the Outlet">
                                  </div>
                            </div> -->
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Outlet Locality</label>
                                  <div class="col-sm-10">
                                    <input type="text" class="form-control" name="locality" placeholder="Locality of the Outlet" data-validate="required">
                                  </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Outlet City</label>
                                  <div class="col-sm-10">
                                    <input type="text" class="form-control" name="city" placeholder="City of the Outlet" data-validate="required">
                                  </div>
                            </div>
                           <!--  <div class="form-group">
                                <label class="col-sm-2 control-label">PAN Card</label>
                                  <div class="col-sm-10">
                                    <input type="text"  class="form-control" name="pan" placeholder="PAN Card Number">
                                  </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Bank Account Holder Name</label>
                                  <div class="col-sm-10">
                                    <input type="text"  class="form-control" name="bankholder" placeholder="Bank Account Holder\'s Name">
                                  </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Bank Account Number</label>
                                  <div class="col-sm-10">
                                    <input type="text"  class="form-control" name="bankaccount" placeholder="Bank Account Number">
                                  </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">VAT TIN Number</label>
                                  <div class="col-sm-10">
                                    <input type="text"  class="form-control" name="vat" placeholder="VAT TIN Number">
                                  </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">CST TIN Number</label>
                                  <div class="col-sm-10">
                                    <input type="text"  class="form-control" name="cst" placeholder="CST TIN Number">
                                  </div>
                            </div> -->
                      </div><!--Modal Body ends-->

                      <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Add</button>
                          </form>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div><!--Modal Footer Ends-->
                  </div>
                </div>
              </div><!--Modal Ends-->



          </div><!--Row Ends-->
         
        
    </div>
   
  </body>
  <!-- ____________________________
  _________________________________
            BODY ENDS
  _________________________________
  _________________________________
  -->
</html>
