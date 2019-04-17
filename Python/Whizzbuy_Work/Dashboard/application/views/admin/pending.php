<?php require 'base.php' ?>
            <?php startblock('sidebar') ?>
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
                        <li class="nav-item start active open">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-home"></i>
                                <span class="title">Registration</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item start active open">
                                    <a href="<?php echo base_url('index.php/admin/pending') ?>" class="nav-link ">
                                        <i class="icon-bar-chart"></i>
                                        <span class="title">Pending</span>
                                        <span class="badge badge-success"><?php echo count($pending_merchants) ?></span>
                                    </a>
                                </li>
                                <li class="nav-item start ">
                                    <a href="<?php echo base_url('index.php/admin/approved') ?>" class="nav-link ">
                                        <i class="icon-bulb"></i>
                                        <span class="title">Approved</span>
                                    </a>
                                </li>
                                
                            </ul>
                        </li>
                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-diamond"></i>
                                <span class="title">Advertisements</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item active open">
                                    <a href="<?php echo base_url('index.php/admin/ad_pending') ?>" class="nav-link ">
                                        <span class="title">Pending</span>
                                        <span class="badge badge-success"><? echo count($pending_merchants) ?></span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                         <li class="nav-item  ">
                            <a href="<?php echo base_url('index.php/admin/parameters') ?>" class="nav-link nav-toggle">
                                <i class="icon-list"></i>
                                <span class="title">Parameters</span>
                                <span class="arrow"></span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="<?php echo base_url('index.php/admin/transactions') ?>" class="nav-link nav-toggle">
                                <i class="icon-credit-card"></i>
                                <span class="title">Transactions</span>
                                <span class="arrow"></span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="<?php echo base_url('index.php/admin/customer') ?>" class="nav-link nav-toggle">
                                <i class="icon-users"></i>
                                <span class="title">Customers</span>
                                <span class="arrow"></span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="<?php echo base_url('index.php/admin/merchants') ?>" class="nav-link nav-toggle">
                                <i class="icon-users"></i>
                                <span class="title">Merchants</span>
                                <span class="arrow"></span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-settings"></i>
                                <span class="title">Filters</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="<?php echo base_url('index.php/admin/filter_lifestyle') ?>" class="nav-link ">
                                        <span class="title">Lifestyle</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="<?php echo base_url('index.php/admin/filter_city') ?>" class="nav-link ">
                                        <span class="title">City</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-bar-chart"></i>
                                <span class="title">Metrics</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="<?php echo base_url('index.php/admin/ad_metrics') ?>" class="nav-link nav-toggle">
                                        <span class="title">Advetisement 
                                        <br> Metrics</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="<?php echo base_url('index.php/admin/performance') ?>" class="nav-link nav-toggle">
                                        <span class="title">Performance
                                        <br> Metrics</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <!-- END SIDEBAR MENU -->
                </div>
                <!-- END SIDEBAR -->
            </div>
            <!-- END SIDEBAR -->
            <?php endblock() ?>

            <?php startblock('content') ?>
            <!-- BEGIN CONTENT -->
            
                    <!-- END THEME PANEL -->
                    <h3 class="page-title"> Pending Merchants
                    </h3>
                    <div class="page-bar">
                        <ul class="page-breadcrumb">
                            <li>
                                <i class="icon-home"></i>
                                <a href="<?php echo base_url('index.php/admin/pending') ?>">Home</a>
                                <i class="fa fa-angle-right"></i>
                            </li>
                            <li>
                                <span>Registrations</span>
                            </li>
                        </ul>
                        
                    <!-- write your content here -->
                    
                    </div>
                  
                    <!-- END PAGE HEADER-->
                    <!-- BEGIN ACCORDION PORTLET-->
                            <div class="portlet box red">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="fa fa-gift"></i>Merchants </div>
                                    <div class="tools">
                                        <a href="javascript:;" class="collapse"> </a>
                                        <a href="javascript:;" class="reload"> </a>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="panel-group accordion scrollable" id="accordion2">
                                      <?php if (isset($records)): ?>
                                      <?php $counter = 1; ?>
                                      <?php foreach($records as $row): ?>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#pending_merchant<?php echo $counter; ?>"> <?php echo $row->companyname; ?> | <?php echo $row->brandname; ?> </a>
                                                </h4>
                                            </div>
                                            <div id="pending_merchant<?php echo $counter; ?>" class="panel-collapse in">
                                                <div class="panel-body">
                                                  <table class="table table-noborder" border="0">
                                                      <tr>
                                                        <td width="30%">Company</td>
                                                        <td><?php echo $row->companyname; ?></td>
                                                      </tr>
                                                      <tr>
                                                        <td width="30%">Brand</td>
                                                        <td><?php echo $row->brandname; ?></td>
                                                      </tr>
                                                      <tr>
                                                        <td width="30%">Registered Address</td>
                                                        <td><?php echo $row->regaddr; ?></td>
                                                      </tr>
                                                      <tr>
                                                        <td width="30%">E-Mail Address</td>
                                                        <td><?php echo $row->email; ?></td>
                                                      </tr>
                                                      <tr>
                                                        <td width="30%">Mobile</td>
                                                        <td>6446989426<?php echo $row->mobile; ?></td>
                                                      </tr>
                                                      <tr>
                                                        <td width="30%">PAN</td>
                                                        <td><?php echo $row->pan; ?></td>
                                                      </tr>
                                                      <tr>
                                                        <td width="30%">Bank Account Name</td>
                                                        <td><?php echo $row->bankaccname; ?></td>
                                                      </tr>
                                                      <tr>
                                                        <td width="30%">Bank Account Number</td>
                                                        <td><?php echo $row->bankaccno; ?></td>
                                                      </tr>
                                                    </table>
                                                    <a href="<?php echo base_url('index.php/update/approve_merchant/'.$row->merchantid); ?>" class="btn btn-xs btn-success">Approve</a>
                                                    <a data-toggle="collapse" href="#reject<?php echo $row->merchantid; ?>" aria-expanded="false" aria-controls="reject<?php echo $row->merchantid; ?>" class="btn btn-xs btn-warning">Reject</a>
                                                    <div class="collapse" id="reject<?php echo $row->merchantid; ?>">
                                                      <div class="well">
                                                        <form class="form-horizontal" action="<?php echo base_url('index.php/update/reject_merchant/'.$row->merchantid); ?>" method="post">
                                                          <input type="hidden" value="<?php echo $row->merchantid; ?>" name="merrid">
                                                         <div class="form-group">
                                                            <label for="inputEmail3" class="col-sm-2 control-label">Reason</label>
                                                            <div class="col-sm-10">
                                                              <input type="text" class="form-control" name="reason" required>
                                                            </div>
                                                          </div>
                                                          <div class="form-group">
                                                            <label for="inputPassword3" class="col-sm-2 control-label">Corrective Action</label>
                                                            <div class="col-sm-10">
                                                              <input type="text" class="form-control" name="caction" required>
                                                            </div>
                                                          </div>
                                                          <div class="form-group">
                                                            <div class="col-sm-offset-2 col-sm-10">
                                                              <button type="submit" class="btn btn-default">Reject</button>
                                                            </div>
                                                          </div>
                                                        </form>
                                                      </div>
                                                    </div>
                                                    <a href="<?php echo base_url('index.php/update/discard_merchant/'.$row->merchantid); ?>" class="btn btn-xs btn-danger">Discard</a>
                                                  </div>
                                                </div>
                                                 
                                                <?php $counter++; ?>
                                                <?php endforeach; ?>
                                                <?php else: ?>
                                                No pending merchants.
                                                <?php endif; ?>
                                             </div>
                                          </div>
                                        
                                        
                                    </div>
                                
                            </div>
                            <!-- END ACCORDION PORTLET-->
                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
            <?php endblock() ?>
            <!-- BEGIN QUICK SIDEBAR -->

           