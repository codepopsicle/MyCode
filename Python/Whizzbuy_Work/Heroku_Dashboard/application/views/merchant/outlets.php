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
                         <li class="nav-item ">
                            <a href="<?php echo base_url('index.php/merchant/qrcode') ?>" class="nav-link nav-toggle">
                                <i class="icon-notebook"></i>
                                <span class="title">QR Code</span>
                                <span class="arrow"></span>
                            </a>
                        </li>
                         <li class="nav-item active open ">
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
        <div class="row">

            <h3 class="page-title">My Outlets</h3>
             <div class="page-bar">
                <ul class="page-breadcrumb">
                    <li>
                        <i class="icon-home"></i>
                        <a href="index.html">Home</a>
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li>
                        <span>Outlets</span>
                    </li>
                </ul>
            </div>
            <div class="row portlet">
            <div class="portlet-title">
                <button class="btn btn-block red btn-lg" data-toggle="modal" data-target="#addOutlet">Add New Outlet</button>
            </div>

            <div class="portlet-body util-btn-margin-bottom-5">
                <?php if(isset($records2)): ?>
                <?php foreach ($records2 as $row): ?>
                <div class="col-md-12 ">
                    <!-- BEGIN Portlet PORTLET-->
                    <div class="portlet box green">
                        <div class="portlet-title">
                            <div class="caption">
                                <?php echo $row->locality; ?> </div>
                            <div class="tools">
                                <a href="javascript:;" class="collapse"> </a>
                            </div>
                            <div class="actions">
                                <button class="btn btn-sm green" data-toggle="modal" data-target="#my<?php echo $row->outletid; ?>">Edit</button>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div style="height:200px" data-always-visible="1" data-rail-visible="1" data-rail-color="blue" data-handle-color="red">
                                <br/>
                                <table class="table borderless">
                                    <tr>
                                      <td>Username</td>
                                      <td><?php echo $row->username; ?></td>
                                    </tr>
                                    <tr>
                                      <td>Password</td>
                                      <td>****</td>
                                    </tr>
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
                                  </table>
                             </div>
                        </div>
                    </div>
                    <!-- END Portlet PORTLET-->
                </div>
                <?php endforeach; ?>
                <?php else: ?>
                    <p><?php echo 'No Outlets Registered<br>Register New Outlets'; ?></p>
                <?php endif; ?>
            </div>
            </div>
        
            <!-- Edit form -->
            <div class="col-md-8">
             
              <?php if(isset($records2)): ?>
              <?php foreach ($records2 as $row): ?>
                  <!-- Modal -->
                  <div class="modal fade" id="my<?php echo $row->outletid; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog modal-lg" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Edit Outlet: <?php echo $row->outletaddr; ?></h4>
                        </div>
                      <div class="modal-body">
                        
                          <form class="form-horizontal" action="<?php echo base_url('index.php/update/outlet'); ?>" method="post">
                            <div class="form-group">
                            <input type="hidden"  class="form-control" name="outletid" value="<?php echo $row->outletid; ?>" >
                            <input type="hidden"  class="form-control" name="old_username" value="<?php echo $row->username; ?>" >
                            </div>
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Username</label>
                                <div class="col-sm-10">
                                  <input class="form-control" rows="3" name="username" value="<?php echo $row->username; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Password</label>
                                <div class="col-sm-10">
                                  <input class="form-control" rows="3" name="password" value="" placeholder="****">
                                </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Outlet Address</label>
                                <div class="col-sm-10">
                                  <textarea class="form-control" rows="3" name="address"><?php echo $row->outletaddr; ?></textarea>
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
                     

                              <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Save changes</button>
                          </form>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>

                      </div>
                    </div>
                  </div>
              </div>
            </div>
            <?php endforeach; ?>
          <?php else: ?>
          
        <?php endif; ?>

         <!-- new outlet form -->
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
              <!-- new outlet form end -->
        
        </div>
      </div>

    <?php endblock() ?>