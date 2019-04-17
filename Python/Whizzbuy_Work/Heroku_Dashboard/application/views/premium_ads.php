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

        <title>WhizzBuy | Premium Ads</title>

        <meta name="description" content="WhizzBuy"/>
        <meta name="viewport" content="width=1000, initial-scale=1.0, maximum-scale=1.0">

        <!--Stylesheets-->
        <link href="<?php echo base_url('dist/css/vendor/bootstrap.min.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('dist/css/flat-ui.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('docs/assets/css/demo.css'); ?>" rel="stylesheet">
        <link rel="shortcut icon" href="<?php echo base_url('img/favicon.ico'); ?>">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link href="<?php echo base_url('dist/css/daterangepicker.css'); ?>" rel="stylesheet">
        <!--Javascripts-->
        <script src="<?php echo base_url('dist/js/vendor/jquery.min.js'); ?>"></script>
        <script src="<?php echo base_url('dist/js/flat-ui.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('dist/js/moment.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('dist/js/daterangepicker.js'); ?>"></script>
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

        <!--Style for image preview-->
        <style type="text/css">
              .image-preview-input {
              position: relative;
              overflow: hidden;
              margin: 0px;    
              color: #333;
              background-color: #fff;
              border-color: #ccc;    
              }
              .image-preview-input input[type=file] {
                position: absolute;
                top: 0;
                right: 0;
                margin: 0;
                padding: 0;
                font-size: 20px;
                cursor: pointer;
                opacity: 0;
                filter: alpha(opacity=0);
              }
              .image-preview-input-title {
                  margin-left:2px;
              }
        </style><!--image Preview-->

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

        <!--Image Preview Script-->
        <script type="text/javascript">
                  $(document).on('click', '#close-preview', function(){ 
                  $('.image-preview').popover('hide');
                  // Hover befor close the preview
                  $('.image-preview').hover(
                      function () {
                         $('.image-preview').popover('show');
                      }, 
                       function () {
                         $('.image-preview').popover('hide');
                      }
                  );    
              });

              $(function() {
                  // Create the close button
                  var closebtn = $('<button/>', {
                      type:"button",
                      text: 'x',
                      id: 'close-preview',
                      style: 'font-size: initial;',
                  });
                  closebtn.attr("class","close pull-right");
                  // Set the popover default content
                  $('.image-preview').popover({
                      trigger:'manual',
                      html:true,
                      title: "<strong>Preview</strong>"+$(closebtn)[0].outerHTML,
                      content: "There's no image",
                      placement:'bottom'
                  });
                  // Clear event
                  $('.image-preview-clear').click(function(){
                      $('.image-preview').attr("data-content","").popover('hide');
                      $('.image-preview-filename').val("");
                      $('.image-preview-clear').hide();
                      $('.image-preview-input input:file').val("");
                      $(".image-preview-input-title").text("Browse"); 
                  }); 
                  // Create the preview image
                  $(".image-preview-input input:file").change(function (){     
                      var img = $('<img/>', {
                          id: 'dynamic',
                          width:250,
                          height:200
                      });      
                      var file = this.files[0];
                      var reader = new FileReader();
                      // Set preview image into the popover data-content
                      reader.onload = function (e) {
                          $(".image-preview-input-title").text("Change");
                          $(".image-preview-clear").show();
                          $(".image-preview-filename").val(file.name);            
                          img.attr('src', e.target.result);
                          $(".image-preview").attr("data-content",$(img)[0].outerHTML).popover("show");
                      }        
                      reader.readAsDataURL(file);
                  });  
              });
        </script><!--.//Image Preview Script-->

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
          $attributes = array('class' => 'form-horizontal');
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
              <li role="presentation" class="dropdown active">
                <a class="dropdown-toggle" data-toggle="dropdown" href="" role="button" aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-buysellads"></i> Whizzbuy Ads <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                  <li role="presentation"><a href="<?php echo base_url('index.php/home/standard_ads') ?>">Standard</a></li>
                  <li role="presentation" class="active"><a href="<?php echo base_url('index.php/home/premium_ads') ?>">Premium</a></li>
                </ul>
              </li>
            </ul>

        </div><!-- /.nav-header -->
    </header>
    <!-- Header Ends -->
    <!-- Main Content Starts -->
    <div class="container-fluid main-content"  id="wrap">
      <div class="tab-pane" id="premium">
            <ul class="nav nav-tabs" id="premium_tabs">
                <li><a href="#premium_product" data-toggle="tab">Product Ad</a></li>
                <li><a href="#premium_event" data-toggle="tab">Event Ad</a></li>
            </ul>
      </div>

      <div class="tab-content">
        <div id="premium_product" class="tab-pane">
                <h4>Premium Product Ad</h4>
                  <?php echo form_open_multipart('home/pproduct',$attributes); ?>
                  <input type="hidden" name="merchantc" value="<?php echo $merchantcode; ?>">
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Dates</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" name="daterange" placeholder="Select Dates" data-validate="required">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Upload Image File</label>
                      <div class="col-sm-5">
                        <div class="input-group image-preview">
                            <input type="text" class="form-control image-preview-filename" disabled="disabled" placeholder="Upload your Ad Image"> <!-- don't give a name === doesn't send on POST/GET -->
                            <span class="input-group-btn">
                                <!-- image-preview-clear button -->
                                <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                                    <i class="fa fa-eraser"></i> Clear
                                </button>
                                <!-- image-preview-input -->
                                <div class="btn btn-default image-preview-input">
                                    <i class="fa fa-folder-open-o"></i>
                                    <span class="image-preview-input-title">Browse</span>
                                    <?php echo form_upload('userfile'); ?>
                                </div>
                            </span>
                        </div>
                      </div>
                    </div>
                    
                        <input type="hidden" class="form-control" name="bname" value="1" data-validate="required">
                      
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Product Name</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" name="pname" placeholder="Name of the Product" data-validate="required">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Product Barcode</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" name="barcode" placeholder="Enter Product Barcode" data-validate="required">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Product Description for Click</label>
                      <div class="col-sm-6">
                        <textarea class="form-control" rows="3" name="cdescription" placeholder="Max 100 Words" data-validate="required,size(6,500)"></textarea>
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
                        <textarea class="form-control" rows="2" name="anotification" placeholder="Max 15 Words" data-validate="required,size(6,75)"></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Description for Notification (Expanded)</label>
                      <div class="col-sm-6">
                        <textarea class="form-control" rows="3" name="dnotification" placeholder="Max 100 Words" data-validate="required,size(6,500)"></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-success">Submit</button>
                      </div>
                    </div>
                  <?php echo form_close(); ?> 
              </div>


               <div id="premium_event" class="tab-pane">
                <h4>Premium Event Ad</h4>
                  <?php echo form_open_multipart('home/pevent',$attributes); ?>
                  <input type="hidden" name="merchantc" value="<?php echo $merchantcode; ?>">
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Dates</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" name="daterange" placeholder="Select Dates" data-validate="required">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Upload Image File</label>
                      <div class="col-sm-5">
                        <div class="input-group image-preview">
                            <input type="text" class="form-control image-preview-filename" disabled="disabled" placeholder="Upload your Ad Image"> <!-- don't give a name === doesn't send on POST/GET -->
                            <span class="input-group-btn">
                                <!-- image-preview-clear button -->
                                <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                                    <i class="fa fa-eraser"></i> Clear
                                </button>
                                <!-- image-preview-input -->
                                <div class="btn btn-default image-preview-input">
                                    <i class="fa fa-folder-open-o"></i></span>
                                    <span class="image-preview-input-title">Browse</span>
                                    <?php echo form_upload('userfile'); ?>
                                </div>
                            </span>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Event Name</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" name="ename" placeholder="Name of the Event" data-validate="required">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-2 control-label">Event Description for Click</label>
                      <div class="col-sm-6">
                        <textarea class="form-control" rows="3" name="cdescription" placeholder="Max 100 Words" data-validate="required"></textarea>
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
                        <textarea class="form-control" rows="2" name="anotification" placeholder="Max 15 Words" data-validate="required,size(6,75)"></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Description for Notification (Expanded)</label>
                      <div class="col-sm-6">
                        <textarea class="form-control" rows="3" name="dnotification" placeholder="Max 100 Words" data-validate="required"></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-success">Submit</button>
                      </div>
                    </div>
                  <?php echo form_close(); ?>  
              </div>

              

      </div><!--Tab content-->

    </div><!--Container-->

  </body>
  <!-- ____________________________
  _________________________________
            BODY ENDS
  _________________________________
  _________________________________
  -->
  <script type="text/javascript">
    $(function() {
        $('input[name="daterange"]').daterangepicker();
    });
    </script>
</html>
