<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->


    <!-- Bootstrap -->
    <link href="<?php echo base_url("dist/css/vendor/bootstrapflat.min.css"); ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url("js/bootstrap.min.js"); ?>"></script>
    <script src="<?php echo base_url('dist/js/verify.notify.min.js'); ?>"></script>
    


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


<title>WhizzBuy Merchant Dashboard</title>

<style type="text/css">
    body {
    padding-top: 10px;
    }
    .panel-login {
      border-color: #ccc;
      -webkit-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
      -moz-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
      box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
    }
    .panel-login>.panel-heading {
      color: #00415d;
      background-color: #fff;
      border-color: #fff;
      text-align:center;
    }
    .panel-login>.panel-heading a{
      text-decoration: none;
      color: #666;
      font-weight: bold;
      font-size: 15px;
      -webkit-transition: all 0.1s linear;
      -moz-transition: all 0.1s linear;
      transition: all 0.1s linear;
    }
    .panel-login>.panel-heading a.active{
      color: #029f5b;
      font-size: 18px;
    }
    .panel-login>.panel-heading hr{
      margin-top: 10px;
      margin-bottom: 0px;
      clear: both;
      border: 0;
      height: 1px;
      background-image: -webkit-linear-gradient(left,rgba(0, 0, 0, 0),rgba(0, 0, 0, 0.15),rgba(0, 0, 0, 0));
      background-image: -moz-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
      background-image: -ms-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
      background-image: -o-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
    }
    .panel-login input[type="text"],.panel-login input[type="email"],.panel-login input[type="password"] {
      height: 45px;
      border: 1px solid #ddd;
      font-size: 16px;
      -webkit-transition: all 0.1s linear;
      -moz-transition: all 0.1s linear;
      transition: all 0.1s linear;
    }
    .panel-login input:hover,
    .panel-login input:focus {
      outline:none;
      -webkit-box-shadow: none;
      -moz-box-shadow: none;
      box-shadow: none;
      border-color: #ccc;
    }
    .btn-login {
      background-color: #59B2E0;
      outline: none;
      color: #fff;
      font-size: 14px;
      height: auto;
      font-weight: normal;
      padding: 14px 0;
      text-transform: uppercase;
      border-color: #59B2E6;
    }
    .btn-login:hover,
    .btn-login:focus {
      color: #fff;
      background-color: #53A3CD;
      border-color: #53A3CD;
    }

    .btn-register {
      background-color: #1CB94E;
      outline: none;
      color: #fff;
      font-size: 14px;
      height: auto;
      font-weight: normal;
      padding: 14px 0;
      text-transform: uppercase;
      border-color: #1CB94A;
    }
    .btn-register:hover,
    .btn-register:focus {
      color: #fff;
      background-color: #1CA347;
      border-color: #1CA347;
    }
    

</style>



</head>

<body>
  

  <?php
      if(isset($records))
        foreach ($records as $row) 
        {
          $username = $row->username;
          $password = $row->password;
          $brandname = $row->brandname;
          $parentcompany = $row->parentcompany;
         
        }

    ?>

  <!--Login form starts-->
      <div class="container">
        <h1 class="text-center"><strong>WhizzBuy Registration</strong></h1>
        <hr>
      <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-login">
         
          <div class="panel-body">
            <div class="row">
              <div class="col-lg-12">
                <form id="register-form" action="<?php echo base_url('index.php/register/final_register'); ?>" method="post" role="form" style="display: block;">
                  <div class="form-group">
                    <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="<?php echo $username; ?>" data-validate="required">
                  </div>
                  <div class="form-group">
                    <input type="text" name="brandname" id="brandname" tabindex="2" class="form-control" placeholder="Brand Name" value="<?php echo $brandname; ?>" data-validate="required">
                  </div>
                  <div class="form-group">
                    <input type="password" name="password" id="password" tabindex="3" class="form-control" placeholder="Password" value="<?php echo $password; ?>" data-validate="required">
                  </div>
                  <!-- <div class="form-group">
                    <input type="password" name="confirmpassword" id="confirmpassword" tabindex="4" class="form-control" placeholder="Confirm Password">
                  </div> -->
                  <div class="form-group">
                    <input type="text" name="parentcompany" id="parentcompany" tabindex="5" class="form-control" placeholder="Parent Company Name" value="<?php echo $companyname; ?>" data-validate="required">
                  </div>
                  <hr>
                  <h4>Contact Details</h4>
                  <div class="form-group">
                    <input type="email" name="email" id="email" tabindex="5" class="form-control" placeholder="Email ID" data-validate="required,email">
                  </div>
                  <div class="form-group">
                    <input type="text" name="mobile" id="mobile" tabindex="5" class="form-control" placeholder="Mobile Number" data-validate="required,number,size(10)">
                  </div>
                  <div class="form-group">
                    <textarea class="form-control" rows="3" name="address" placeholder="Address" data-validate="required"></textarea>
                  </div>
                  <div class="form-group">
                    <input type="text" name="city" id="city" tabindex="5" class="form-control" placeholder="City" data-validate="required">
                  </div>
                  <div class="form-group">
                    <input type="text" name="pin" id="pin" tabindex="5" class="form-control" placeholder="PIN Number" data-validate="required,number,size(6)">
                  </div>
                  <hr>
                  <h4>Bank Details</h4>
                  <div class="form-group">
                    <input type="text" name="bankholder" id="bankholder" tabindex="5" class="form-control" placeholder="Bank Holder Name" data-validate="required">
                  </div>
                  <div class="form-group">
                    <input type="text" name="bankaccount" id="bankaccount" tabindex="5" class="form-control" placeholder="Bank Account Number" data-validate="required,number">
                  </div>
                  <hr>
                  <h4>Merchant Details</h4>
                  <div class="form-group">
                    <input type="text" name="pan" id="pan" tabindex="5" class="form-control" placeholder="PAN Card Number" data-validate="required">
                  </div>
                  <div class="form-group">
                    <input type="text" name="vattin" id="vattin" tabindex="5" class="form-control" placeholder="VAT Number" data-validate="required">
                  </div>
                  <div class="form-group">
                    <input type="text" name="csttin" id="csttin" tabindex="5" class="form-control" placeholder="CST Number" data-validate="required">
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-sm-6 col-md-offset-3 ">
                        <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-success" value="Complete Registration">
                      </div>
                    </div>
                    
                  </div>
                </form>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--Login form ends-->
  



  </body>
</html>
