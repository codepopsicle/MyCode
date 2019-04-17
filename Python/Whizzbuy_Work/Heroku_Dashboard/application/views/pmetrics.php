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

        <title>WhizzBuy | Performance Metrics</title>

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

        <!-- _______________________
        ____________________________
        GRAPH DATA STARTS
        ____________________________
        -->
        <script type="text/javascript" src="https://www.google.com/jsapi"></script>
        <!--Total number of transactions at their stores via Whizzbuy-->
        <script type="text/javascript">
          google.load('visualization', '1', {packages: ['corechart', 'bar']});
          google.setOnLoadCallback(drawBasic);

          function drawBasic() {

                var data = google.visualization.arrayToDataTable([
                   ['Month', 'Transactions', { role: 'style' }],
                   ['Jan', 102, 'color: #e5e4e2'],            // RGB value
                   ['Feb', 265, 'color: #959595'],   
                   ['Mar', 412, 'color: #e5e4e2'],
                   ['Apr', 010, 'color: #959595' ],
                    ['May', 321, 'color: #e5e4e2' ],
                    ['Jun', 055, 'color: #959595' ],
                    ['Jul', 143, 'color: #e5e4e2' ],
                    ['Aug', 125, 'color: #959595' ],
                    ['Sep', 265, 'color: #e5e4e2' ],
                    ['Oct', 235, 'color: #959595' ],
                    ['Nov', 332, 'color: #e5e4e2' ],
                    ['Dec', 411, 'color: #959595' ]
                ]);

                var options = {
                  title: 'Total number of transactions at their stores via Whizzbuy',
                  'height':300,
                  legend: { position: "none" },
                  chartArea: {width: '80%'},
                  hAxis: {
                    title: 'Total Number of Transactions',
                    minValue: 0
                  },
                  vAxis: {
                    title: 'Months'
                  }
                };

                var chart = new google.visualization.BarChart(document.getElementById('numTransactions'));

                chart.draw(data, options);
              }
        </script><!-- //.Total number of transactions at their stores via Whizzbuy ENDS-->

        <!--Products with highest volume of sale-->
        <script type="text/javascript">
          google.load('visualization', '1', {packages: ['corechart', 'bar']});
          google.setOnLoadCallback(drawBasic);

          function drawBasic() {

                var data = google.visualization.arrayToDataTable([
                   ['Month', 'Gross Transaction Value', { role: 'style' }],
                   ['Jan', 25402, 'color: #0504f2'],            // RGB value
                   ['Feb', 32565, 'color: #959595'],   
                   ['Mar', 14212, 'color: #0504f2'],
                   ['Apr', 21410, 'color: #959595' ],
                    ['May', 36221, 'color: #0504f2' ],
                    ['Jun', 14505, 'color: #959595' ],
                    ['Jul', 25743, 'color: #0504f2' ],
                    ['Aug', 26425, 'color: #959595' ],
                    ['Sep', 14265, 'color: #0504f2' ],
                    ['Oct', 21435, 'color: #959595' ],
                    ['Nov', 21532, 'color: #0504f2' ],
                    ['Dec', 26411, 'color: #959595' ]
                ]);

                var options = {
                  title: 'Products with highest volume of sale',
                  

                  'height':300,
                  legend: { position: "none" },
                  chartArea: {width: '80%'},
                  hAxis: {
                    title: 'Gross Transaction Value',
                    minValue: 10000,
                  },
                  vAxis: {
                    title: 'Months'
                  }
                };

                var chart = new google.visualization.BarChart(document.getElementById('productSale'));

                chart.draw(data, options);
              }
        </script><!-- //.Products with highest volume of sale ENDS-->

        <!--Gross sales across Whizzbuy outlets-->
        <script type="text/javascript">
          google.load('visualization', '1', {packages: ['corechart', 'bar']});
          google.setOnLoadCallback(drawBasic);

          function drawBasic() {

                var data = google.visualization.arrayToDataTable([
                   ['Month', 'Gross Transaction Value', { role: 'style' }],
                   ['Jan', 25402, 'color: #f504f2'],            // RGB value
                   ['Feb', 32565, 'color: #959595'],   
                   ['Mar', 14212, 'color: #f504f2'],
                   ['Apr', 21410, 'color: #959595' ],
                    ['May', 36221, 'color: #f504f2' ],
                    ['Jun', 14505, 'color: #959595' ],
                    ['Jul', 25743, 'color: #f504f2' ],
                    ['Aug', 26425, 'color: #959595' ],
                    ['Sep', 14265, 'color: #f504f2' ],
                    ['Oct', 21435, 'color: #959595' ],
                    ['Nov', 21532, 'color: #f504f2' ],
                    ['Dec', 26411, 'color: #959595' ]
                ]);

                var options = {
                  title: 'Gross sales across WhizzBuy outlets',
                  'height':300,
                  chartArea: {width: '80%'},
                  legend: { position: "none" },
                  hAxis: {
                    title: 'Gross Transaction Value',
                    minValue: 10000
                  },
                  vAxis: {
                    title: 'Months'
                  }
                };

                var chart = new google.visualization.BarChart(document.getElementById('grossSales'));

                chart.draw(data, options);
              }
        </script><!-- //.Gross sales across Whizzbuy outlets ENDS-->

        <!--Top Selling Products-->
        <script type="text/javascript">
        
          // Load the Visualization API and the piechart package.
          google.load('visualization', '1.0', {'packages':['corechart']});
          
          // Set a callback to run when the Google Visualization API is loaded.
          google.setOnLoadCallback(drawChart);

          // Callback that creates and populates a data table, 
          // instantiates the pie chart, passes in the data and
          // draws it.
          function drawChart() {

          // Create the data table.
          var data = new google.visualization.DataTable();
          data.addColumn('string', 'Products');
          data.addColumn('number', 'Sales');
          data.addRows([
            ['Patanjali Dant Kanti', 102],
            ['Smartfish', 43],
            ['Lays Classic Salt', 55], 
            ['Oleev Active', 66],
            ['Surf Excel 400g', 38]
          ]);

          // Set chart options
          var options = {'title':'Top Selling Products',
                         chartArea: {width: '80%'},
                         'height':300};

          // Instantiate and draw our chart, passing in some options.
          var chart = new google.visualization.PieChart(document.getElementById('topProducts'));
          chart.draw(data, options);
        }
        </script><!-- //.Top Selling Products ENDS-->

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

        foreach ($records5 as $row)
        {
          $num_transaction = $row->num_transaction;
          $num_outlets = $row->num_outlets;
          $gross = $row->gross;
        }

        foreach ($records6 as $row)
        {
          $total_transaction = $row->total_transaction;
        }

    ?>
    <!-- Merchant Profile Php Ends-->

    <!--Hearder Starts-->
    <header>
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
                  <li role="presentation" class="active"><a href="<?php echo base_url('index.php/home/performance_metrics') ?>">Performance metrics</a></li>
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
    <div class="container-fluid main-content">
        <div class="row">
           <h4>Summary</h4>
            <div class="col-md-3">
                <div class="well datapoint">
                  <p class="smalls text-center weights">184</p>
                  <p class="list1txt text-center smalls disabled">Total WhizzBuy Users</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="well datapoint">
                  <p class="smalls text-center weights">114</p>
                  <p class="list1txt text-center smalls disabled">Returning Customers at your Store</p>
                </div>
           </div>
          <div class="col-md-3">
              <div class="well datapoint">
                <p class="smalls text-center weights"><?php echo $num_transaction; ?></p>
                <p class="list1txt text-center smalls disabled">Total Transactions</p>
              </div>
          </div>
          <div class="col-md-3">
            <div class="well datapoint">
              <p class="smalls text-center weights">₹ <?php echo $gross; ?></p>
              <p class="list1txt text-center smalls disabled">Gross sales value via Whizzbuy</p>
            </div>
          </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="well datapoint">
                  <p class="smalls text-center weights"><?php echo $total_transaction; ?></p>
                  <p class="list1txt text-center smalls disabled">Total transactions on WhizzBuy</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="well datapoint">
                  <p class="smalls text-center weights"><?php echo $num_outlets; ?></p>
                  <p class="list1txt text-center smalls disabled">Registered Outlets</p>
                </div>
            </div>
        </div>

        <div class ="row">
          <h4>Trends</h4>
              <div class="col-md-6">
                <div class="well datapoint">
                    <p class="list1txt text-center smalls disabled">Total number of transactions at your stores via Whizzbuy
                      <!-- <form class="form-inline">
                        <div class="form-group">
                          <label class="smalls">Filter</label>
                          <select class="form-control">
                            <option>This Months</option>
                            <option>Total</option>
                            <option>Last Month</option>
                            <option>4</option>
                            <option>5</option>
                          </select>
                        </div>
                      </form> -->
                    </p>
                    <div id="numTransactions"></div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="well datapoint">
                  <p class="list1txt text-center smalls disabled">Products with highest volume of sale</p>
                  <div id="productSale"></div>
                </div>
             </div>
        </div>

        <div class ="row">
          <div class="col-md-6">
              <div class="well datapoint">
                <p class="list1txt text-center smalls disabled">Gross sales across Whizzbuy outlets</p>
                <div id="grossSales"></div>
              </div>
          </div>
          <div class="col-md-6">
              <div class="well datapoint">
                <p class="list1txt text-center smalls disabled">Top Selling Products</p>
                <div id="topProducts"></div>
              </div>
          </div>
        </div>

        <div class ="row">
          <div class="col-md-3"></div>
          <div class="col-md-6">
            <div class="well datapoint">
                <p class="list1txt text-center smalls disabled">Top 10 Spenders</p>
                  <table class="table table-condensed list1txt smalls">
                    <tr>
                      <th>S.No.</th>
                      <th>Name</th>
                      <th>Amount Spent</th>
                    </tr>
                    <tr>
                      <td>1.</td>
                      <td>Abhinav Pandey</td>
                      <td>₹ 25146</td>
                    </tr>
                    <tr>
                      <td>2.</td>
                      <td>Harshit Mishra</td>
                      <td>₹ 21146</td>
                    </tr>
                    <tr>
                      <td>3.</td>
                      <td>Ashish Verma</td>
                      <td>₹ 20046</td>
                    </tr>
                    <tr>
                      <td>4.</td>
                      <td>Yogesh</td>
                      <td>₹ 19996</td>
                    </tr>
                    <tr>
                      <td>5.</td>
                      <td>Disha Pal</td>
                      <td>₹ 19625</td>
                    </tr>
                    <tr>
                      <td>6.</td>
                      <td>Amitabh</td>
                      <td>₹ 15423</td>
                    </tr>
                    <tr>
                      <td>7.</td>
                      <td>Salman Khan</td>
                      <td>₹ 14253</td>
                    </tr>
                    <tr>
                      <td>8.</td>
                      <td>Irrfan Khan</td>
                      <td>₹ 13254</td>
                    </tr>
                    <tr>
                      <td>9.</td>
                      <td>Rahul Dubey</td>
                      <td>₹ 11024</td>
                    </tr>
                    <tr>
                      <td>10.</td>
                      <td>Bejan</td>
                      <td>₹ 101</td>
                    </tr>
                  </table>
            </div>
          </div>
          <div class="col-md-3"></div>
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
