<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>WhizzBuy</title>
    <meta name="description" content="WhizzBuy"/>

    <meta name="viewport" content="width=1000, initial-scale=1.0, maximum-scale=1.0">

    <!-- Loading Bootstrap -->
    <link href="<?php echo base_url('dist/css/vendor/bootstrap.min.css'); ?>" rel="stylesheet">
    <script src="<?php echo base_url('dist/js/vendor/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('dist/js/vendor/video.js'); ?>"></script>
    <script src="<?php echo base_url('dist/js/flat-ui.min.js'); ?>"></script>
    <script src="<?php echo base_url('docs/assets/js/application.js'); ?>"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">


    <!-- Loading Flat UI -->
    <link href="<?php echo base_url('dist/css/flat-ui.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('docs/assets/css/demo.css'); ?>" rel="stylesheet">
    <script src="<?php echo base_url('dist/js/qrcode.js'); ?>"></script>
    <script src="<?php echo base_url('dist/js/jquery.qrcode.js'); ?>"></script>
    <link rel="shortcut icon" href="<?php echo base_url('img/favicon.ico'); ?>">
    
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


    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="dist/js/vendor/html5shiv.js"></script>
      <script src="dist/js/vendor/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

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
    
    <header>
      
      <div class="nav2">
        <div class="row">
        <div class="col-md-7">
        <img src="<?php echo base_url('img/logo.png'); ?>" width="60">
        </div>
        <div class="col-md-2 shrink">
          <br><p><small>Account Status: <strong><?php if($isactive == 1) echo '&nbsp;&nbsp;ACTIVE'; else echo '&nbsp;&nbsp;INACTIVE'; ?></strong></small></p>
        </div>
        <div class="col-md-2 shrink"><br>
        <div class="dropdown">
          <button class="btn btn-xs btn-primary dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
            <?php echo $brandname; ?>
            <span class="caret"></span>
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <li><a href="<?php echo base_url('index.php/home/profile'); ?>">Manage Profile</a></li>
            <li><a href="<?php echo base_url('index.php/home/logout'); ?>">Logout</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-2 shrink">
          <br><button class="btn btn-xs btn-primary" >Contact</button>
        </div>
    </div>

      </div>

      <!-- <div class="nav3">
        <div class="row">
          <div class="col-md-1">
            <div class="dropdown">
              <button class="btn btn-transparent dropdown-toggle btn-sm" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                Listings
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <li><a href="#">Add Listings in Bulk</a></li>
                <li><a href="#">Add a Listing</a></li>
                <li><a href="#">My Listings</a></li>
                <li><a href="#">Track Approval Requests</a></li>
              </ul>
            </div>
          </div>

          <div class="col-md-1">
            <div class="dropdown">
              <button class="btn btn-transparent dropdown-toggle btn-sm" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                Orders
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <li><a href="#">Active Orders</a></li>
                <li><a href="#">Cancelled Orders</a></li>
                
              </ul>
            </div>
          </div>

          <div class="col-md-1">
            <div class="dropdown">
              <button class="btn btn-transparent dropdown-toggle btn-sm" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                Returns
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <li><a href="#">Returns</a></li>
                <li><a href="#">Disputes</a></li>
               
              </ul>
            </div>
          </div>

          <div class="col-md-1">
            <div class="dropdown">
              <button class="btn btn-transparent dropdown-toggle btn-sm" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                Payments
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <li><a href="#">Settlements</a></li>
                <li><a href="#">Statements</a></li>
                <li><a href="#">Transactions</a></li>
                <li><a href="#">Invoices</a></li>
              </ul>
            </div>
          </div>

          <div class="col-md-1">
            <div class="dropdown">
              <a href="metrics.html"><button class="btn btn-transparent btn-block  btn-sm" type="button" aria-haspopup="true" aria-expanded="true">
                Metrics

              </button></a>

            </div>
          </div>

          <div class="col-md-1">
            <div class="dropdown">
              <button class="btn btn-transparent dropdown-toggle btn-sm" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                Promotions
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <li><a href="#">My Promotions</a></li>
                <li><a href="#">WhizzBuy Promotions</a></li>

              </ul>
            </div>
          </div>

          <div class="col-md-1">
            <div class="dropdown">
              <button class="btn btn-transparent  btn-sm" type="button" aria-haspopup="true" aria-expanded="true">
                Advertising

              </button>

            </div>
          </div>

        </div>

      </div> -->
      <div class="nav3">
      <br>
      <div>

        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
          <li role="presentation"><a href="<?php echo base_url('index.php/home/admin'); ?>" >Metrics</a></li>
          <li role="presentation"><a href="<?php echo base_url('index.php/home/admin'); ?>" >Transactions</a></li>
          <li role="presentation"><a href="<?php echo base_url('index.php/home/admin'); ?>" >WB Ads</a></li>
          <li role="presentation"><a href="<?php echo base_url('index.php/home/admin'); ?>" >QR Code</a></li>
          <li role="presentation"><a href="<?php echo base_url('index.php/home/admin'); ?>" >My Outlets</a></li>
          <li role="presentation"><a href="<?php echo base_url('index.php/home/admin'); ?>" >Ad Metrics</a></li>
        </ul>

        <!-- Tab panes -->
        

      </div>
    </div>

    </header>





<div class="main-content">

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
              <input type="text" class="form-control" name="companyname" value="<?php echo $companyname; ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Company Address</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="companyaddress" value="<?php echo $regaddr; ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">PIN Code</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="pin" value="<?php echo $pincode; ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">City</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="city" value="<?php echo $city; ?>">
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
              <input type="text" class="form-control" name="email" value="<?php echo $email; ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Mobile Number</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="mobile" value="<?php echo $mobile; ?>">
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




    <footer>

    </footer>


    <script>
      videojs.options.flash.swf = "dist/js/vendors/video-js.swf"
    </script>
  </body>
</html>
