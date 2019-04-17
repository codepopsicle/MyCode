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

        <title>WhizzBuy | Ad Metrics</title>

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

        <!--CSS For Fade background Modal-->
        <style type="text/css">
          body.modal-open #wrap{
    -webkit-filter: blur(7px);
    -moz-filter: blur(15px);
    -o-filter: blur(15px);
    -ms-filter: blur(15px);
    filter: blur(15px);
}
  
.modal-backdrop {background: #f7f7f7;}

.close {
    font-size: 50px;
    display:block;
}
      </style><!--//.Fade Background modal-->

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

        <!--Table Search Script-->
        <script type="text/javascript">
          $(document).ready(function() {
              var activeSystemClass = $('.list-group-item.active');

              //something is entered in search form
              $('#system-search').keyup( function() {
                 var that = this;
                  // affect all table rows on in systems table
                  var tableBody = $('.table-list-search tbody');
                  var tableRowsClass = $('.table-list-search tbody tr');
                  $('.search-sf').remove();
                  tableRowsClass.each( function(i, val) {
                  
                      //Lower text for case insensitive
                      var rowText = $(val).text().toLowerCase();
                      var inputText = $(that).val().toLowerCase();
                      if(inputText != '')
                      {
                          $('.search-query-sf').remove();
                          tableBody.prepend('<tr class="search-query-sf"><td colspan="6"><strong>Searching for: "'
                              + $(that).val()
                              + '"</strong></td></tr>');
                      }
                      else
                      {
                          $('.search-query-sf').remove();
                      }

                      if( rowText.indexOf( inputText ) == -1 )
                      {
                          //hide rows
                          tableRowsClass.eq(i).hide();
                          
                      }
                      else
                      {
                          $('.search-sf').remove();
                          tableRowsClass.eq(i).show();
                      }
                  });
                  //all tr elements are hidden
                  if(tableRowsClass.children(':visible').length == 0)
                  {
                      tableBody.append('<tr class="search-sf"><td class="text-muted" colspan="6">No entries found.</td></tr>');
                  }
              });
          });
        </script><!-- //.Table Search Script-->

        <!-- _______________________
        ____________________________
        GRAPH DATA STARTS
        ____________________________
        -->
        <script type="text/javascript" src="https://www.google.com/jsapi"></script>
        


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
              <li role="presentation" class="dropdown active">
                <a class="dropdown-toggle" data-toggle="dropdown" href="" role="button" aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-line-chart"></i>  Metrics <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                  <li role="presentation"><a href="<?php echo base_url('index.php/home/performance_metrics') ?>">Performance metrics</a></li>
                  <li role="presentation" class="active"><a href="<?php echo base_url('index.php/home/ad_metrics') ?>">Ad Metrics</a></li>
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
    <div class="container-fluid main-content"  >
        <h3>Ad Metrics</h3>
            <div class="col-md-12">
                <?php if(isset($records4)): ?>
                <?php $cnt=1; ?>
                  <div class="row">
                        <div class="col-md-3">
                            <form action="#" method="get">
                                <div class="input-group">
                                    <!-- USE TWITTER TYPEAHEAD JSON WITH API TO SEARCH -->
                                    <input class="form-control" id="system-search" name="q" placeholder="Search for" required>
                                    <span class="input-group-btn">
                                        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                    </span>
                                </div>
                            </form>

                            <select id="filter">
                              <option>Standard</option>
                              <option>Premium</option>
                              <option value="">All</option>
                            </select>
                            <button onClick="fil()">search</button>
                            <script>
                              function fil(){
                                var filter=$('#filter').val();
                                console.log('filter' , filter);
                                // $('#system-search').value=filter;
                                // document.getElementById("system-search").value=filter;
                                 var that = $('#filter');
                                        // affect all table rows on in systems table
                                        var tableBody = $('.table-list-search tbody');
                                        var tableRowsClass = $('.table-list-search tbody tr');
                                        $('.search-sf').remove();
                                        tableRowsClass.each( function(i, val) {
                                        
                                            //Lower text for case insensitive
                                            var rowText = $(val).text().toLowerCase();
                                            var inputText = $(that).val().toLowerCase();
                                            if(inputText != '')
                                            {
                                                $('.search-query-sf').remove();
                                                tableBody.prepend('<tr class="search-query-sf"><td colspan="6"><strong>Searching for: "'
                                                    + $(that).val()
                                                    + '"</strong></td></tr>');
                                            }
                                            else
                                            {
                                                $('.search-query-sf').remove();
                                            }

                                            if( rowText.indexOf( inputText ) == -1 )
                                            {
                                                //hide rows
                                                tableRowsClass.eq(i).hide();
                                                
                                            }
                                            else
                                            {
                                                $('.search-sf').remove();
                                                tableRowsClass.eq(i).show();
                                            }
                                        //all tr elements are hidden
                                        if(tableRowsClass.children(':visible').length == 0)
                                        {
                                            tableBody.append('<tr class="search-sf"><td class="text-muted" colspan="6">No entries found.</td></tr>');
                                        }
                                      });
                                    }
                            </script>
                        </div>
                    <div class="col-md-9">
                       <table class="table table-list-search" id="wrap">
                                    
                                        <tr class="bg-primary">
                                            <th>S.No.</th>
                                            <th>Ad ID</th>
                                            <th>Product / Event Name</th>
                                            <th>Duration</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                            <th>Run Dates</th>
                                            <th>View Details</th>
                                        </tr>
                                    
                                    
                                      <?php foreach ($records4 as $row): ?>
                                        <tr <?php if ($row->pricingmarker === '2') {echo ' class="bg-warning"';} ?>>
                                            <td><?php echo $cnt; ?></td>
                                            <td><?php echo $row->advertid; ?><br><b><?php if ($row->pricingmarker === '2') {echo '(Premium)';} else {echo '(Standard)';} ?></b></td>
                                            <td><?php if (isset($row->advertprodname)) {echo $row->advertprodname;}
                                                      else {echo $row->adverteventname;}
                                                 ?>
                                            </td>
                                            <td><?php echo $row->adruntime; echo ' days'; ?></td>
                                            <td><?php if ($row->isactive === '1') {echo 'Scheduled';}
                                                      elseif ($row->isactive === '2') {echo 'Active';}
                                                      elseif ($row->isactive === '3') {echo 'Disabled';} 
                                                      elseif ($row->isactive === '4') {echo 'Completed';} 
                                                      elseif ($row->isactive === '5') {echo 'Pending';} 
                                                      elseif ($row->isactive === '6') {echo 'Rejected';} 
                                                ?>
                                            </td>
                                            <td><?php if ($row->isactive === '1'):?>
                                                <a href="<?php echo base_url('index.php/update/cancel'); echo '/'.$row->advertid; ?>"><button class="btn btn-xs btn-danger">Cancel</button></a>
                                                <a href="<?php echo base_url('index.php/update/cancel'); echo '/'.$row->advertid; ?>"><button class="btn btn-xs btn-danger">Cancel</button></a>
                                                <?php      elseif ($row->isactive === '2'): ?>
                                                <a href="<?php echo base_url('index.php/update/disable'); echo '/'.$row->advertid; ?>"><button class="btn btn-xs btn-danger">Disable</button></a>
                                                <?php      elseif ($row->isactive === '3'):?>
                                                <a href="<?php echo base_url('index.php/update/enable'); echo '/'.$row->advertid; ?>"><button class="btn btn-xs btn-primary">Enable</button></a>
                                                <?php      elseif ($row->isactive === '4'):?>
                                                <button class="btn btn-xs btn-success">Completed</button>
                                                <?php      elseif ($row->isactive === '5'):?>
                                                <a href="<?php echo base_url('index.php/update/cancel'); echo '/'.$row->advertid; ?>"><button class="btn btn-xs btn-danger">Cancel</button></a>
                                                <?php      elseif ($row->isactive === '6'):?>
                                                <a href="<?php echo base_url('index.php/update/reupload'); echo '/'.$row->advertid; echo '/'.$row->adtype; echo '/'.$row->pricingmarker; ?>"><button class="btn btn-xs btn-danger">Re-Upload</button></a>
                                              <?php endif; ?>
                                            </td>
                                            <td><?php echo $row->startdate; echo ' to '; echo $row->enddate; ?></td>
                                            <td><button class="btn btn-xs btn-danger" data-toggle="modal" data-target="#myModal<?php echo $cnt; ?>">View</button></td>
                                        </tr>
                                        <!--Graph Scripts-->
                                        <!--Ad MEtrics VIEWS-->
                                        <script type="text/javascript">
                                          google.load('visualization', '1', {packages: ['corechart', 'bar']});
                                          google.setOnLoadCallback(drawBasic);

                                          function drawBasic() {

                                                var data = new google.visualization.DataTable();
                                                data.addColumn('string', 'Day');
                                                data.addColumn('number', 'Views');

                                                data.addRows([
                                                  ['Tue' , <?php echo $row->viewcount; ?>],
                                                  ['Wed' , <?php echo $row->viewcount; ?>],
                                                  ['Thu' , <?php echo $row->viewcount; ?>],
                                                  ['Fri' , <?php echo $row->viewcount; ?>],
                                                ]);

                                                var options = {
                                                  title: 'Views',
                                                  hAxis: {
                                                    title: 'Day',
                                                    
                                                  },
                                                  vAxis: {
                                                    title: 'Views'
                                                  }
                                                };

                                                var chart = new google.visualization.ColumnChart(
                                                  document.getElementById('ad_views<?php echo $cnt; ?>'));

                                                chart.draw(data, options);
                                              }
                                        </script>

                                        <!--Ad MEtrics Purchases-->
                                        <script type="text/javascript">
                                          google.load('visualization', '1', {packages: ['corechart', 'bar']});
                                          google.setOnLoadCallback(drawBasic);

                                          function drawBasic() {

                                                var data = new google.visualization.DataTable();
                                                data.addColumn('string', 'Day');
                                                data.addColumn('number', 'Purchases');

                                                data.addRows([
                                                  ['Tue' , <?php echo $row->purchasecount; ?>],
                                                  ['Wed' , <?php echo $row->purchasecount; ?>],
                                                  ['Thu' , <?php echo $row->purchasecount; ?>],
                                                  ['Fri' , <?php echo $row->purchasecount; ?>],
                                                ]);

                                                var options = {
                                                  title: 'Purchases',
                                                  hAxis: {
                                                    title: 'Day',
                                                    
                                                  },
                                                  vAxis: {
                                                    title: 'Purchases'
                                                  }
                                                };

                                                var chart = new google.visualization.ColumnChart(
                                                  document.getElementById('ad_purchases<?php echo $cnt; ?>'));

                                                chart.draw(data, options);
                                              }
                                        </script>

                                        <!--Ad MEtrics Clicks-->
                                        <script type="text/javascript">
                                          google.load('visualization', '1', {packages: ['corechart', 'bar']});
                                          google.setOnLoadCallback(drawBasic);

                                          function drawBasic() {

                                                var data = new google.visualization.DataTable();
                                                data.addColumn('string', 'Day');
                                                data.addColumn('number', 'Clicks');

                                                data.addRows([
                                                  ['Tue' , <?php echo $row->clickcount; ?>],
                                                  ['Wed' , <?php echo $row->clickcount; ?>],
                                                  ['Thu' , <?php echo $row->clickcount; ?>],
                                                  ['Fri' , <?php echo $row->clickcount; ?>],
                                                ]);

                                                var options = {
                                                  title: 'Clicks',
                                                  hAxis: {
                                                    title: 'Day',
                                                    
                                                  },
                                                  vAxis: {
                                                    title: 'CLicks'
                                                  }
                                                };

                                                var chart = new google.visualization.ColumnChart(
                                                  document.getElementById('ad_clicks<?php echo $cnt; ?>'));

                                                chart.draw(data, options);
                                              }
                                        </script>

                                        

                                        <!--Ad MEtrics Added to shopping List-->
                                        <script type="text/javascript">
                                          google.load('visualization', '1', {packages: ['corechart', 'bar']});
                                          google.setOnLoadCallback(drawBasic);

                                          function drawBasic() {

                                                var data = new google.visualization.DataTable();
                                                data.addColumn('string', 'Day');
                                                data.addColumn('number', 'Adds');

                                                data.addRows([
                                                  ['Tue' , <?php echo $row->purchasecount; ?>],
                                                  ['Wed' , <?php echo $row->purchasecount; ?>],
                                                  ['Thu' , <?php echo $row->purchasecount; ?>],
                                                  ['Fri' , <?php echo $row->purchasecount; ?>],
                                                ]);

                                                var options = {
                                                  title: 'Add to Shopping List',
                                                  hAxis: {
                                                    title: 'Day',
                                                    
                                                  },
                                                  vAxis: {
                                                    title: 'Number'
                                                  }
                                                };

                                                var chart = new google.visualization.ColumnChart(
                                                  document.getElementById('ad_shopping<?php echo $cnt; ?>'));

                                                chart.draw(data, options);
                                              }
                                        </script>
                                        <!-- Modal -->
                                        <div class="modal fade" id="myModal<?php echo $cnt; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                          <div class="container">
                                            <div class="row">
                                              <div class="col-sm-6 col-sm-offset-3">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">×</button>
                                                <br><br>
                                                <h3>Product / Event Name:</h3><h1><?php if (isset($row->advertprodname)) {echo $row->advertprodname;}
                                                      else {echo $row->adverteventname;}
                                                 ?></h1>
                                                <b>Product Barcode:</b>&nbsp;&nbsp;<?php echo $row->advertproductcode; ?><br>
                                                <b>Ad ID:</b>&nbsp;&nbsp;<?php echo $row->advertid; ?><br>
                                                <b>Run Time:</b>&nbsp;&nbsp;<?php echo $row->adruntime; echo ' days'; ?><br>
                                                <b>Run Dates:</b>&nbsp;&nbsp;<?php echo $row->startdate; echo ' to '; echo $row->enddate; ?><br>
                                                <b>Total Views:</b>&nbsp;&nbsp;<?php echo $row->viewcount; ?><br>
                                                <b>Total Clicks:</b>&nbsp;&nbsp;<?php echo $row->clickcount; ?><br>
                                                <b>Adds to Shopping List after Viewing Ad:</b>&nbsp;&nbsp;<?php echo $row->purchasecount; ?><br>
                                                <b>Total Purchases After Viewing:</b>&nbsp;&nbsp;<?php echo $row->purchasecount; ?><br>
                                                
                                                <div id="ad_views<?php echo $cnt; ?>"></div>
                                                <div id="ad_clicks<?php echo $cnt; ?>"></div>
                                                <div id="ad_purchases<?php echo $cnt; ?>"></div>
                                                <div id="ad_shopping<?php echo $cnt; ?>"></div>
                                              </div>
                                            </div>
                                          </div>
                                        </div><!--//.Modal Ends-->
                                        <?php $cnt++; ?>
                                      <?php endforeach; ?>
                                    
                                </table>   
                    </div>
                  </div>
                <?php else: ?>
                <h2>No Ads Created</h2>
                <?php endif; ?>
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
