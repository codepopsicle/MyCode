<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>WhizzBuy</title>
    <meta name="description" content="WhizzBuy"/>

    <meta name="viewport" content="width=1000, initial-scale=1.0, maximum-scale=1.0">

    <!-- Loading Bootstrap -->
    <style type="text/css">
      
ul.nav li.dropdown:hover ul.dropdown-menu { 
  display: block; 
  }

    </style>
    <link href="<?php echo base_url('dist/css/vendor/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('dist/css/daterangepicker.css'); ?>" rel="stylesheet">
    <script src="<?php echo base_url('dist/js/vendor/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('dist/js/vendor/video.js'); ?>"></script>
    <script src="<?php echo base_url('dist/js/flat-ui.min.js'); ?>"></script>
    <script src="<?php echo base_url('docs/assets/js/application.js'); ?>"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <script type="text/javascript" src="<?php echo base_url('dist/js/moment.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('dist/js/daterangepicker.js'); ?>"></script>
    <script type="text/javascript">
      $('ul.nav li.dropdown').hover(function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
}, function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
});
    </script>
    <!--Nested Tab Script-->
    <script type="text/javascript">
    $("ul.nav-tabs a").click(function (e) {
  e.preventDefault();  
    $(this).tab('show');
});

    </script>
    <script type="text/javascript">
      $('#interest_tabs').on('click', 'a[data-toggle="tab"]', function(e) {
      e.preventDefault();

      var $link = $(this);

      if (!$link.parent().hasClass('active')) {

        //remove active class from other tab-panes
        $('.tab-content:not(.' + $link.attr('href').replace('#','') + ') .tab-pane').removeClass('active');

        // click first submenu tab for active section
        $('a[href="' + $link.attr('href') + '_all"][data-toggle="tab"]').click();

        // activate tab-pane for active section
        $('.tab-content.' + $link.attr('href').replace('#','') + ' .tab-pane:first').addClass('active');
      }

    });
    </script>

    <!-- Loading Flat UI -->
    <link href="<?php echo base_url('dist/css/flat-ui.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('docs/assets/css/demo.css'); ?>" rel="stylesheet">


    <link rel="shortcut icon" href="<?php echo base_url('img/favicon.ico'); ?>">

<script type="text/javascript">
$(document).ready(function() {
if(location.hash) {
    $('a[href=' + location.hash + ']').tab('show');
}
  $(document.body).on("click", "a[data-toggle]", function(event) {
      location.hash = this.getAttribute("href");
  });
});
$(window).on('popstate', function() {
  var anchor = location.hash || $("a[data-toggle=tab]").first().attr("href");
  $('a[href=' + anchor + ']').tab('show'); });
</script>

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
    </style>

    <style type="text/css">
      @import "compass/css3";
    </style>
    
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
   </script>

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
    </script>

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
    </script>

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
    </script>

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
    </script>
    <script type="text/javascript">
      function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
    }
    </script>

    <!--Ad MEtrics VIEWS-->
    <script type="text/javascript">
      google.load('visualization', '1', {packages: ['corechart', 'bar']});
      google.setOnLoadCallback(drawBasic);

      function drawBasic() {

            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Day');
            data.addColumn('number', 'Views');

            data.addRows([
              ['Tue' , 1],
              ['Wed' , 2],
              ['Thu' , 3],
              ['Fri' , 10],
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
              document.getElementById('ad_views'));

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
              ['Tue' , 1],
              ['Wed' , 2],
              ['Thu' , 3],
              ['Fri' , 10],
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
              document.getElementById('ad_clicks'));

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
              ['Tue' , 1],
              ['Wed' , 2],
              ['Thu' , 3],
              ['Fri' , 10],
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
              document.getElementById('ad_purchases'));

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
              ['Tue' , 1],
              ['Wed' , 2],
              ['Thu' , 3],
              ['Fri' , 10],
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
              document.getElementById('ad_shopping'));

            chart.draw(data, options);
          }
    </script>

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

<!--       <div class="nav3">
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
        <ul class="nav nav-tabs" id="interest_tabs">
          <li class="dropdown active">
            <a class="dropdown-toggle" data-toggle="dropdown" href="">Metrics <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#metrics">Performance</a></li>
              <li><a href="#ad">Ad</a></li>
            </ul>
          </li>
          <li><a href="#transactions" data-toggle="tab">Transactions</a></li>
          <li><a href="#qrcode" data-toggle="tab">QR Code</a></li>
          <li><a href="#myoutlets" data-toggle="tab">My Outlets</a></li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#wads">Whizzbuy Ads <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#premium">Premium Ad</a></li>
              <li><a href="#standard">Standard Ad</a></li>
            </ul>
          </li>
        </ul>

        <!-- Tab panes -->
        

      </div>
    </div>

    </header>
    





<div class="main-content">
<div class="row">
<div class="col-md-12">
  <div class="tab-content">
          <div class="tab-pane active" id="metrics">

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
                <p class="smalls text-center weights">542</p>
                <p class="list1txt text-center smalls disabled">Total Transactions</p>
              </div>
             </div>
              <div class="col-md-3">
              <div class="well datapoint">
                <p class="smalls text-center weights">₹ 84214</p>
                <p class="list1txt text-center smalls disabled">Gross sales value via Whizzbuy</p>
              </div>
             </div>
            </div>
            <div class="row">
               <div class="col-md-6">
              <div class="well datapoint">
                <p class="smalls text-center weights">₹ 441125</p>
                <p class="list1txt text-center smalls disabled">Total transactions on WhizzBuy</p>
              </div>
             </div>
              <div class="col-md-6">
              <div class="well datapoint">
                <p class="smalls text-center weights">14</p>
                <p class="list1txt text-center smalls disabled">Registered Outlets</p>
              </div>
             </div>
            </div>
            <div class ="row">
              <h4>Trends</h4>
                 <div class="col-md-6">
              <div class="well datapoint">
                <p class="list1txt text-center smalls disabled">Total number of transactions at your stores via Whizzbuy</p>
                <!-- <div>
                  <select>
                    <option>1</option>
                    <option>2</option>
                  </select>
                </div> -->
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

          <div role="tabpanel" class="tab-pane" id="ad">
            <h3>Ad Metrics</h3>
            <div class="col-md-8">
              <table class="table table-condensed table-hover">
                <tr>
                  <th>S.No.</th>
                  <th>Ad ID</th>
                  <th>Product/Event Name</th>
                  <th>Duration</th>
                  <th>Status</th>
                  <th>Action</th>
                  <th>Run Dates</th>
                </tr>
                <tr>
                  <td>1</td>
                  <td>10245<br>Premium</td>
                  <td>Cadbury Shots</td>
                  <td>2d 17h 33m</td>
                  <td>LIVE</td>
                  <td>Disable</td>
                  <td>1-2-16 to 3-2-16</td>
                </tr>
              </table>
            </div>
          
          <div class="col-md-4 well datapoint">
            <b>Product Name:</b>&nbsp;&nbsp;Cadbury Shots<br>
            <b>Product Barcode:</b>&nbsp;&nbsp;785214<br>
            <b>Ad ID:</b>&nbsp;&nbsp;365214<br>
            <b>Run Time:</b>&nbsp;&nbsp;2d 17h 33m<br>
            <b>Run Dates:</b>&nbsp;&nbsp;1-2-16 to 3-2-16<br>
            <b>Total Views:</b>&nbsp;&nbsp;200<br>
            <b>Total Clicks:</b>&nbsp;&nbsp;100<br>
            <b>Adds to Shopping List after Viewing Ad:</b>&nbsp;&nbsp;20<br>
            <b>Total Purchases After Viewing:</b>&nbsp;&nbsp;5<br>
            <div id="ad_views"></div>
            <div id="ad_clicks"></div>
            <div id="ad_purchases"></div>
            <div id="ad_shopping"></div>
            </div>
        </div>

          <div role="tabpanel" class="tab-pane" id="transactions"><h1>Tab Transactions</h1></div>
          
          <div role="tabpanel" class="tab-pane" id="qrcode">
            <br>
            <div class="row">
              <div class="col-md-6">
                <div class="well ">
                  <h4>Merchant ID: <span id="data1"><?php echo $merchantcode; ?></span></h4>
                  <div class="form-horizontal">
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Outlet ID: </label>
                        <div class="col-sm-8">
                          <select id="data2">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                          </select>
                        </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label">WiFi Ap Name: </label>
                        <div class="col-sm-8">
                          <input type="text" placeholder="WiFi Ap Name" id="data3">
                        </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label">WiFi Ap Password: </label>
                        <div class="col-sm-8">
                          <input type="text" placeholder="WiFi Ap Password" id="data4">
                        </div>
                    </div>
                    <script type="text/javascript">
                     function getImg(){
                      $('#qr').replaceWith('<div id="qr" ></div>');
                      var d1 = document.getElementById("data1").innerHTML;
                      var d2 = document.getElementById("data2").value;
                      var d3 = document.getElementById("data3").value;
                      var d4 = document.getElementById("data4").value;
                      var fin = d1+';'+d2+';'+d3+';'+d4;
                      var urlData="https://api.qrserver.com/v1/create-qr-code/?data="+fin+"&amp; size=250x250";
                      // qrcode.clear();
                      $('#qr').append('<img id="qrimg" src='+urlData+ '>');

                    }
                    function saveImage(){
                      var imgSrcData=document.getElementById("qrimg").src+"/api.qrserver.com.png";
                      // alert(imgSrcData);
                      // var link = document.createElement('a');
                      // link.href = imgSrcData;
                      // link.download = 'qr';
                      // document.body.appendChild(link);
                      // link.click();
                      // window.open(imgSrcData);
                      var a = document.createElement('a');
                      a.href = imgSrcData;
                      a.download = "qrcode.png";
                      document.body.appendChild(a);
                      a.click();
                      document.body.removeChild(a);
                    }

                    
                  </script>
                    <div class="form-group">
                      <label class="col-sm-2 control-label"></label>
                        <div class="col-sm-4 col-sm-offset-2">
                          <button class="btn btn-danger btn-sm btn-block" onclick="getImg()" >Generate</button>
                        </div>
                    </div>
                  </div>
                  
                </div>
              </div>
              <div class="col-md-6">
                <div class="well">
                  <div class="row">
                    <div class="col-md-6 pull-left">
                      <button class="btn btn-primary" onclick="saveImage()"><i class="fa fa-floppy-o"></i> Save</button>
                    </div>
                     <div class="col-md-6 pull-right">
                      <button class="btn btn-primary" onclick="printDiv('qr')"><i class="fa fa-print"></i> Print</button>
                    </div>
                  </div>
                  <hr>
                  <div id="qr">

                  </div>

                  <script type="text/javascript">

                   </script>
                </div>
                
              </div>
            </div>
          </div>
          
          <div role="tabpanel" class="tab-pane" id="myoutlets">
          <div class="row"><h2>My Outlets</h2><br><hr>

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
                      <td class="list1txt"><button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#my<?php echo $row->outletid; ?>">Edit</button></td>
                    </tr>
                  </table>
                  <!-- Modal -->
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
                                  <textarea class="form-control" rows="3" name="address">"<?php echo $row->outletaddr; ?>"</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Outlet PIN Code</label>
                                  <div class="col-sm-10">
                                    <input type="text" class="form-control" name="pin" value="<?php echo $row->outpincode; ?>">
                                  </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Outlet Location</label>
                                  <div class="col-sm-10">
                                    <input type="text" class="form-control" name="location" value="<?php echo $row->outlocation; ?>">
                                  </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Outlet Locality</label>
                                  <div class="col-sm-10">
                                    <input type="text" class="form-control" name="locality" value="<?php echo $row->locality; ?>">
                                  </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Outlet City</label>
                                  <div class="col-sm-10">
                                    <input type="text" class="form-control" name="city" value="<?php echo $row->outletcity; ?>">
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
              </div>
            <?php endforeach; ?>
          <?php else: ?>
          <?php echo '<h3>No Outlets Registered<br>Register New Outlets</h3>'; ?>
        <?php endif; ?>



            </div>

            <div class="col-md-4">
                <button class="btn btn-block btn-success btn-lg" data-toggle="modal" data-target="#addOutlet">Add New Outlet</button>
              </div>

              <!-- Modal -->
              <div class="modal fade" id="addOutlet" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="myModalLabel">Add New Outlet</h4>
                    </div>
                    <div class="modal-body">
                      <form class="form-horizontal" action="<?php echo base_url('index.php/update/outletadd'); ?>" method="post">
                            <div class="form-group">
                              <input type="hidden"  class="form-control" name="company" value="<?php echo $companyname; ?>">
                            <input type="hidden"  class="form-control" name="parentmerchant" value="<?php echo $brandname; ?>">
                            <input type="hidden"  class="form-control" name="merchantcode" value="<?php echo $merchantcode; ?>">
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Username</label>
                                  <div class="col-sm-10">
                                    <input type="text"  class="form-control" name="username" placeholder="Username for login">
                                  </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Password</label>
                                  <div class="col-sm-10">
                                    <input type="password"  class="form-control" name="password" placeholder="Password">
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
                                  <textarea class="form-control" rows="3" name="address" ></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Outlet PIN Code</label>
                                  <div class="col-sm-10">
                                    <input type="text" class="form-control" name="pin" placeholder="PIN Code of the Outlet">
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
                                    <input type="text" class="form-control" name="locality" placeholder="Locality of the Outlet">
                                  </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Outlet City</label>
                                  <div class="col-sm-10">
                                    <input type="text" class="form-control" name="city" placeholder="City of the Outlet">
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
                      </div>

                      <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Add</button>
                          </form>
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      
                    </div>
                  </div>
                </div>
              </div>



          </div>
          </div>


          <?php $attributes = array('class' => 'form-horizontal'); ?>
          <div class="tab-pane" id="premium">
            
            <ul class="nav nav-tabs" id="premium_tabs">
                <li><a href="#premium_product" data-toggle="tab">Product Ad</a></li>
                <li><a href="#premium_event" data-toggle="tab">Event Ad</a></li>
            </ul>
          
          </div>
          <div role="tabpanel" class="tab-pane" id="standard">
            <ul class="nav nav-tabs" id="standard_tabs">
                <li><a href="#standard_product" data-toggle="tab">Product Ad</a></li>
                <li><a href="#estandard" data-toggle="tab">Event Ad</a></li>
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
                        <input type="text" class="form-control" name="daterange" placeholder="Select Dates">
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
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Brand Name</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" name="bname" placeholder="Name of the Brand">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Product Name</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" name="pname" placeholder="Name of the Product">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Product Barcode</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" name="barcode" placeholder="Enter Product Barcode">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Product Description for Click</label>
                      <div class="col-sm-6">
                        <textarea class="form-control" rows="3" name="cdescription" placeholder="Max 100 Words"></textarea>
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
                        <textarea class="form-control" rows="2" name="anotification" placeholder="Max 15 Words"></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Description for Notification (Expanded)</label>
                      <div class="col-sm-6">
                        <textarea class="form-control" rows="3" name="dnotification" placeholder="Max 100 Words"></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-success">Submit</button>
                      </div>
                    </div>
                  <?php echo form_close(); ?> 
              </div>

              <div id="estandard" class="tab-pane">
                  <h4>Standard Event Ad</h4>
                  <?php echo form_open_multipart('home/sevent',$attributes); ?>
                  <input type="hidden" name="merchantc" value="<?php echo $merchantcode; ?>">
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Dates</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" name="daterange" placeholder="Select Dates">
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
                        <input type="text" class="form-control" name="bname" placeholder="Name of the Event">
                      </div>
                    </div>
                    
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Event Description for Click</label>
                      <div class="col-sm-6">
                        <textarea class="form-control" rows="3" name="cdescription" placeholder="Max 100 Words"></textarea>
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
                        <input type="text" class="form-control" name="daterange" placeholder="Select Dates">
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
                        <input type="text" class="form-control" name="ename" placeholder="Name of the Event">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-2 control-label">Event Description for Click</label>
                      <div class="col-sm-6">
                        <textarea class="form-control" rows="3" name="cdescription" placeholder="Max 100 Words"></textarea>
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
                        <textarea class="form-control" rows="2" name="anotification" placeholder="Max 15 Words"></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Description for Notification (Expanded)</label>
                      <div class="col-sm-6">
                        <textarea class="form-control" rows="3" name="dnotification" placeholder="Max 100 Words"></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-success">Submit</button>
                      </div>
                    </div>
                  <?php echo form_close(); ?>  
              </div>

              <div id="standard_product" class="tab-pane">
                  <h4>Standard Product Ad</h4>
                  
                  <?php echo form_open_multipart('home/sproduct',$attributes); ?>
                  <input type="hidden" name="merchantc" value="<?php echo $merchantcode; ?>">
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Dates</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" name="daterange" placeholder="Select Dates">
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
                      <label class="col-sm-2 control-label">Brand Name</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" name="bname" placeholder="Name of the Brand">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Product Name</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" name="pname" placeholder="Name of the Product">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Product Barcode</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" name="barcode" placeholder="Enter Product Barcode">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Product Description for Click</label>
                      <div class="col-sm-6">
                        <textarea class="form-control" rows="3" name="cdescription" placeholder="Max 100 Words"></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Target Lifestyle</label>
                      <div class="col-sm-6">
                        <select class="form-control" name="lifestyle">
                          <option value="Health Freak">Health Freak</option>
                          <option value="Sweet Tooth">Sweet Tooth</option>
                          <option value="Fashionista">Fashionista</option>
                          <option value="Working Professional">Working Professional</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-success">Submit</button>
                      </div>
                    </div>
                  <?php echo form_close(); ?>
              </div>
          
    </div>
    


              
          </div>
  
</div>
</div>
</div> 


    <footer>

    </footer>
    
    <script type="text/javascript">
    $(function() {
        $('input[name="daterange"]').daterangepicker();
    });
    </script>
    <script>
      videojs.options.flash.swf = "<?php echo base_url('dist/js/vendors/video-js.swf'); ?>"
    </script>
  </body>
</html>
