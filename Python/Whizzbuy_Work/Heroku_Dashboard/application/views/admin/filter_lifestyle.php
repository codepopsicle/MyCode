<!DOCTYPE html>
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
                        <li class="nav-item start ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-home"></i>
                                <span class="title">Registration</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item start ">
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
                                <li class="nav-item ">
                                    <a href="<?php echo base_url('index.php/admin/ad_pending') ?>" class="nav-link ">
                                        <span class="title">Pending</span>
                                        <span class="badge badge-success"><?php echo count($pending_ads) ?></span>
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
                        <li class="nav-item active open ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-settings"></i>
                                <span class="title">Filters</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item active open ">
                                    <a href="<?php echo base_url('index.php/admin/filter_lifestyle') ?>" class="nav-link ">
                                        <span class="title">Lifestyle</span>
                                    </a>
                                </li>
                                <li class="nav-item ">
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
                    <h3 class="page-title"> Lifestyle
                    </h3>
                    <div class="page-bar">
                        <ul class="page-breadcrumb">
                            <li>
                                <i class="icon-home"></i>
                                <a href="<?php echo base_url('index.php/admin/pending') ?>">Home</a>
                                <i class="fa fa-angle-right"></i>
                            </li>
                            <li>
                                <span>Filters</span>
                            </li>
                        </ul>
                     </div>
                    <!-- write your content here -->  
                    <!-- BEGIN PORTLET-->
                            <div class="portlet light ">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="icon-social-dribbble font-blue-sharp"></i>
                                        <span class="caption-subject font-blue-sharp bold uppercase">Lifestyle</span>
                                    </div>
                                    <div class="actions">
                                        <a class="btn green-haze btn-outline btn-circle btn-sm" data-toggle="modal" href=".addcity">
                                            ADD LIFESTYLE
                                        </a>
                                       
                                    </div>
                                    <div class="modal fade addcity" tabindex="-100" role="dialog" aria-labelledby="myLargeModalLabel">
                                      <div class="modal-dialog">
                                        <div class="modal-content">
                                          <form class="form-inline" action="<?php echo base_url('index.php/update/lifestyle_add') ?>" method="post" style="padding: 20px; margin-left: 20%;">
                                            <div class="form-group">
                                              <label for="exampleInputName1">Lifestyle</label>
                                              <input type="text" class="form-control" name="lifestyle"><br>
                                              <label for="exampleInputName2">Description</label>
                                              <input type="text" class="form-control" name="LifeStyleDesc"><br>
                                            </div>
                                            
                                            <button type="submit" class="btn green-haze btn-outline btn-circle btn-sm">Add</button>
                                          </form>
                                        </div>
                                      </div>
                                  </div>
                                </div>
                                <div class="portlet-body">
                                    <table class="table" border=0>
                                      <?php foreach ($records as $row): ?>
                                      <tr>
                                        <td><?php echo $row->lifestyle; ?></td>
                                        <td><?php echo $row->lifestyledesc; ?></td>
                                        <td><button class="btn green btn-outline sbold uppercase" data-toggle="modal" data-target="#<?php echo $row->lifestyle; ?>">Modify</button>&nbsp;&nbsp;&nbsp;<a href="<?php echo base_url('index.php/update/lifestyle_delete/'.$row->id) ?>" id="demo_3" class="btn red btn-outline sbold uppercase" >Delete</a></td>
                                        </tr>
                                      <div class="modal fade" id="<?php echo $row->lifestyle; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                        <div class="modal-dialog modal-lg" role="document">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                              <h4 class="modal-title" id="myModalLabel">Edit Lifestyle</h4>
                                            </div>
                                            <div class="modal-body">
                                              <form class="form-horizontal" action="<?php echo base_url('index.php/update/lifestyle_update'); ?>" method="post">
                                                <input type="hidden" name="id" value="<?php echo $row->id; ?>">
                                                 <div class="form-group">
                                                    <label for="inputEmail3" class="col-sm-2 control-label">Lifestyle</label>
                                                    <div class="col-sm-10">
                                                      <input type="text" class="form-control" name="lifestyle" value="<?php echo $row->lifestyle; ?>" required >
                                                    </div>
                                                  </div>
                                                  <br>
                                                  <div class="form-group">
                                                    <label for="inputPassword3" class="col-sm-2 control-label">Description</label>
                                                    <div class="col-sm-10">
                                                      <input type="text" class="form-control" name="lifestyledesc" value="<?php echo $row->lifestyledesc; ?>" >
                                                    </div>
                                                    </div>
                                            </div>
                                                  
                                                  
                                              
                                            <div class="modal-footer">
                                              <button type="submit" class="btn yellow btn-outline sbold uppercase" >Update</button>
                                              <button type="button" class="btn red btn-outline sbold uppercase" data-dismiss="modal">Close</button>
                                            </div>
                                            </form>
                                          </div>
                                        </div>
                                      </div>
                                    <?php endforeach; ?>
                                    </table>
                                </div>
                            </div>
                            <!-- END PORTLET-->
                           
                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
            <?php endblock() ?>
            <!-- BEGIN QUICK SIDEBAR -->