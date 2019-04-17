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

        <title>WhizzBuy | Profile</title>

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
              <li role="presentation"><a href="<?php echo base_url('index.php/home/outlets') ?>"><i class="fa fa-shopping-cart"></i> My Outlets</a></li>
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
            <h4>Manage Profile</h4>
            <hr>
          <div class="col-md-3 well">
            <h4>This box needs editing</h4>
              <p style="font-color:#595955" class="nav1txt">&nbsp;&nbsp;&nbsp;<b>ACCOUNT</b></p>
              <a href=""><p class="list1txt">Display Information</p></a>
              <a href=""><p class="list1txt">Pickup Address</p></a>
              <a href=""><p class="list1txt">Login Details</p></a>
              <a href=""><p class="list1txt">Calendar</p></a>
              <a href=""><p class="list1txt">Primary Contact</p></a>
              <br>
              <p style="font-color:#595955" class="nav1txt">&nbsp;&nbsp;&nbsp;<b>BUSINESS</b></p>
              <a href=""><p class="list1txt">Business Details</p></a>
              <a href=""><p class="list1txt">Bank Account</p></a>
              <a href=""><p class="list1txt">KYC Documents</p></a>
              <a href=""><p class="list1txt">Invoicing Settings</p></a>
              <br>
              <p style="font-color:#595955" class="nav1txt">&nbsp;&nbsp;&nbsp;<b>SELLER SUPPORT</b></p>
              <a href=""><p class="list1txt">Contact Seller Support</p></a>
          </div>

          <div class="col-md-8" >
            <div class="well">
                <p class="list1txt"><strong>Personal Details</strong> <span class="pull-right"><button class="btn btn-xs btn-info" data-toggle="modal" data-target="#personaldetails"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Edit</button></span></p>

                <hr>
                <table class="table borderless">
                  <tr>
                    <td class="list1txt" width="30%">Company Name<br></td>
                    <td class="list1txt" width="70%"><?php echo $companyname; ?></td>
                  </tr>
                  <tr>
                    <td class="list1txt">Company Address</td>
                    <td class="list1txt"><?php echo $regaddr; ?></td>
                  </tr>
                  <tr>
                    <td class="list1txt">PIN Code</td>
                    <td class="list1txt"><?php echo $pincode; ?></td>
                  </tr>
                  <tr>
                    <td class="list1txt">City</td>
                    <td class="list1txt"><?php echo $city; ?></td>
                  </tr>
                </table>
            </div>
            
              <div class="well">
                <p class="list1txt"><strong>Contact Details</strong> <span class="pull-right"><button class="btn btn-xs btn-info" data-toggle="modal" data-target="#contact"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Edit</button></span></p>

                <hr>
                <table class="table borderless">
                  <tr>
                    <td class="list1txt" width="30%">E-Mail Address</td>
                    <td class="list1txt" width="70%"><?php echo $email; ?></td>
                  </tr>
                  <tr>
                    <td class="list1txt">Mobile Number</td>
                    <td class="list1txt"><?php echo $mobile; ?></td>
                  </tr>
                </table>
            </div>

              <div class="well">
                <p class="list1txt"><strong>Back Account Details</strong> <span class="pull-right"><button class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> No Edit</button></span></p>

                <hr>
                <table class="table borderless">
                  <tr>
                    <td class="list1txt" width="30%">Account Holder's Name<br></td>
                    <td class="list1txt" width="70%"><?php echo $bankaccname; ?></td>
                  </tr>
                  <tr>
                    <td class="list1txt">Account Number</td>
                    <td class="list1txt"><?php echo $bankaccno; ?></td>
                  </tr>
                  <tr>
                    <td class="list1txt">Bank Name</td>
                    <td class="list1txt"><?php echo $bankaccname; ?></td>
                  </tr>
                  <tr>
                    <td class="list1txt">Bank Address</td>
                    <td class="list1txt danger">No Database Reference</td>
                  </tr>
                  <tr>
                    <td class="list1txt">PAN Card</td>
                    <td class="list1txt"><?php echo $pan; ?></td>
                  </tr>
                </table>
                
            </div>


              </div>

            </div> 
          </div>
          </div>
          </div> 

          <!--Personal Details Update Modal-->
          <div class="modal fade modal" id="personaldetails" tabindex="-1" role="dialog" aria-labelledby="personaldetails">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="myModalLabel">Edit Personal Details</h4>
                </div>
                <div class="modal-body">
                  <form class="form-horizontal" action="<?php echo base_url('index.php/update/personal'); ?>" method="post">
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Company Name</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="companyname" value="<?php echo $companyname; ?>" data-validate="required">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Company Address</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="companyaddress" value="<?php echo $regaddr; ?>" data-validate="required">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">PIN Code</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="pin" value="<?php echo $pincode; ?>" data-validate="required,size(6),number">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">City</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="city" value="<?php echo $city; ?>" data-validate="required">
                      </div>
                    </div>
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-primary">Save changes</button>
                  </form>
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>

          <!--Contact Details Update Modal-->
          <div class="modal fade modal" id="contact" tabindex="-1" role="dialog" aria-labelledby="contact">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="myModalLabel">Edit Contact Details</h4>
                </div>
                <div class="modal-body">
                  <form class="form-horizontal" action="<?php echo base_url('index.php/update/contact'); ?>" method="post">
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Email Address</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="email" value="<?php echo $email; ?>" data-validate="required,email">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Mobile Number</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="mobile" value="<?php echo $mobile; ?>" data-validate="required,number,size(10)">
                      </div>
                    </div>
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-primary">Save changes</button>
                  </form>
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
        
    </div>

  </body>
  <!-- ____________________________
  _________________________________
            BODY ENDS
  _________________________________
  _________________________________
  -->
</html>
