<?php require 'base.php' ?>

<?php
      if(isset($records))
        foreach ($records as $row) 
        {
          $companyname = $row->companyname;
          $brandname = $row->brandname;
          $merchantcode = $row->merchantcode;
        }

?>
    <?php startblock('page_level_plugins'); ?>
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="<?php echo base_url('assets/global/plugins/datatables/datatables.min.css" rel="stylesheet'); ?>" type="text/css" />
        <link href="<?php echo base_url('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css'); ?>" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
    <?php endblock(); ?>

    <?php startblock('sidebar') ?>
            <!-- BEGIN SIDEBAR -->
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
                         <li class="nav-item active open">
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
    <?php endblock() ?>

    <?php startblock('content') ?>
    <!-- BEGIN CONTENT -->       
            
                    <!-- END THEME PANEL -->
        <h3 class="page-title"> Transactions
        </h3>
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                    <i class="icon-home"></i>
                    <a href="<?php echo base_url('index.php/merchant/pending') ?>">Home</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                
                <li>
                    <span>Transactions</span>
                </li>
            </ul>
           
        </div>
                    <!-- END PAGE HEADER-->
                    
                   
        <div class="row">
           
            <div class="col-md-12">
                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                <div class="portlet box red">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-globe"></i>Transactions </div>
                        <div class="tools"> </div>
                    </div>
                    <div class="portlet-body">
                        <table class="table table-striped table-bordered table-hover dt-responsive" width="100%" id="sample_4">
                            <thead>
                                <tr>
                                    <th class="min-tablet">Transaction ID</th>
                                    <th class="min-phone-l">Customer ID</th>
                                    <th class="all">Transaction Date</th>
                                    <th class="none">Receipt</th>
                                    <th class="desktop">Amount</th>
                                    <th class="desktop">Outlet Name</th>
                                </tr>
                            </thead>
                        
                            <tbody>
                              <?php $counter = 1; ?>
                            <?php if (isset($transactions)): ?>
                            <?php foreach($transactions as $row): ?>
                                  <tr>
                                      <td><?php echo $row->TransactionID; ?></td>
                                      <td><?php echo $row->CustomerID; ?></td>
                                      <td><?php echo $row->TransactionDate; ?></td>
                                      <td> 
                                            <?php

                                                $json = $row->Receipt;
                                                
                                                $json = preg_replace('/^\xEF\xBB\xBF/', '', $json);
                                                // print_r($json);

                                                $obj = json_decode($json);
                                                // print_r($obj->{'receiptString'});//['ID']['TransactionID']; // 12345
                                                // var_dump($obj);
                                                foreach ($obj->{'receiptString'}->{'ID'} as $ID) {
                                                        # code...
                                                        echo '<br>ID : '.$ID->{'TransactionID'};
                                                    }
                                                foreach ($obj->{'receiptString'}->{'Date'} as $date) {
                                                        # code...
                                                        echo '<br>Date : '.$date->{'TransactionDate'};
                                                    }
                                                
                                                    
                                                        # code...
                                                    echo('<br><br><div class="portlet box green">
                                                            <div class="portlet-title">
                                                                <div class="caption">
                                                                    Bill</div>
                                                                <div class="tools">
                                                                    <a href="javascript:;" class="collapse"> </a>
                                                                    <a href="javascript:;" class="reload"> </a>
                                                                    <a href="javascript:;" class="remove"> </a>
                                                                </div>
                                                            </div>
                                                            <div class="portlet-body">
                                                                <div class="table-scrollable">
                                                                    <table class="table table-striped table-hover">
                                                                    <thead>
                                                                        <tr>
                                                                            <th> # </th>
                                                                            <th> Item </th>
                                                                            <th> Price per Unit </th>
                                                                            <th> Quantity </th>
                                                                            <th> Subtotal </th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>');
                                                    $cnt = 0;
                                                    foreach ($obj->{'receiptString'}->{'Items'} as $item) {
                                                        $cnt = $cnt + 1;
                                                        echo "<tr><td>".$cnt."</td>";
                                                        echo "<td>".$item->{'Item'}."</td>";
                                                        echo "<td>".$item->{'Price'}."</td>";
                                                        echo "<td>".$item->{'Quantity'}."</td>";
                                                        echo "<td>".$item->{'TotalValue'}."</td> </tbody>";
                                                    
                                                    }
                                                    echo('</table></div></div></div>');
                                                foreach ($obj->{'receiptString'}->{'Total'} as $Total) {
                                                        # code...
                                                        echo 'Gross : '.$Total->{'Gross'};
                                                    }
                                                foreach ($obj->{'receiptString'}->{'ItemCount'} as $ItemCount) {
                                                        # code...
                                                        echo '<br>Total Items : '.$ItemCount->{'TotalItems'};
                                                    }
                                               
                                            ?>
                                        </td>
                                      <td><?php echo $row->RcptAmount; ?></td>
                                      <td><?php 
                                            $outletname = $row->outletname;
                                            echo($outletname[0]->locality);
                                           ?></td>
                                  </tr>
                                <?php $counter++; ?>
                                <?php endforeach; ?>
                            <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- END EXAMPLE TABLE PORTLET-->
            </div>
        </div>
      <?php endblock() ?>   
   
    <?php startblock('page_level_plugins_scripts'); ?>
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="<?php echo base_url('assets/global/scripts/datatable.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/global/plugins/datatables/datatables.min.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js'); ?>" type="text/javascript"></script>
             <!-- END PAGE LEVEL PLUGINS -->
    <?php endblock(); ?>
       

    <?php startblock('page_level_scripts'); ?>
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="<?php echo base_url('assets/pages/scripts/table-datatables-responsive.min.js'); ?>" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
    <?php endblock(); ?>