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
                         <li class="nav-item ">
                            <a href="<?php echo base_url('index.php/merchant/transactions') ?>" class="nav-link nav-toggle">
                                <i class="icon-credit-card"></i>
                                <span class="title">Transactions</span>
                                <span class="arrow"></span>
                            </a>
                        </li>
                         <li class="nav-item active open">
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
        <h3 class="page-title">QR Code</h3>
             <div class="page-bar">
                <ul class="page-breadcrumb">
                    <li>
                        <i class="icon-home"></i>
                        <a href="index.html">Home</a>
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li>
                        <span>QR Code</span>
                    </li>
                </ul>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="portlet light portlet-fit ">
                        <div class="portlet-title">
                            <div class="caption">
                                <span class="caption-subject font-red bold uppercase">Generate QR Code</span>
                            </div>
                        </div>
                        <div class="portlet-body">
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
                                          document.getElementById("data2").value= '1';
                                          document.getElementById("data3").value = '';
                                          document.getElementById("data4").value= '';
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
                                          <button class="btn yellow" onclick="saveImage()"><i class="fa fa-floppy-o"></i> Save</button>
                                        </div>
                                         <div class="col-md-6 pull-right">
                                          <button class="btn purple" onclick="printDiv('qr')"><i class="fa fa-print"></i> Print</button>
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
                        </div>
                    </div>
                </div>
            </div>

    <?php endblock() ?>