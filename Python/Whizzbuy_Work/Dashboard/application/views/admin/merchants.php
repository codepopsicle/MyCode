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
                        <li class="nav-item ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-diamond"></i>
                                <span class="title">Advertisements</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item">
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
                        <li class="nav-item  active open ">
                            <a href="<?php echo base_url('index.php/admin/merchants') ?>" class="nav-link nav-toggle">
                                <i class="icon-puzzle"></i>
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
                    <h3 class="page-title"> Merchants
                    </h3>
                    <div class="page-bar">
                        <ul class="page-breadcrumb">
                            <li>
                                <i class="icon-home"></i>
                                <a href="<?php echo base_url('index.php/admin/pending') ?>">Home</a>
                                <i class="fa fa-angle-right"></i>
                            </li>
                            <li>
                                <span>Merchants</span>
                            </li>
                        </ul>
                     </div>
                     <div class="portlet box blue">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="fa fa-gift"></i>Merchants </div>
                                    <div class="tools">
                                        <a href="javascript:;" class="collapse"> </a>
                                        <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="row">
                                        <div class="col-md-3 col-sm-3 col-xs-3">
                                            <ul class="nav nav-tabs tabs-left">
                                            	<?php $counter = 0; ?>
							                    <?php foreach($records as $row): ?>
							                    	<?php if ($counter == 0): ?>
		                                                <li class="active">
		                                                    <a href="#sub<?php echo $counter; ?>" data-toggle="tab"><?php echo $row->brandname; ?> </a>
		                                                </li>
                                                	<?php else : ?>
                                                		<li >
		                                                    <a href="#sub<?php echo $counter; ?>" data-toggle="tab"><?php echo $row->brandname; ?> </a>
		                                                </li>
                                                	<?php endif; ?>

                                                <?php $counter++; ?>
							                    <?php endforeach; ?>
                                                
                                            </ul>
                                        </div>
                                        <div class="col-md-9 col-sm-9 col-xs-9">
                                            <div class="tab-content">
                                            	<?php $cnt=0; $cnt2=0; ?>
								                <?php while(isset($records2[$cnt]->looper)): ?>
								                <?php if ($cnt == 0): ?>
                                                <div class="tab-pane active" id="sub<?php echo $cnt; ?>">

                                                	<div class="portlet box yellow">
						                                <div class="portlet-title">
						                                    <div class="caption">
						                                        <i class="fa fa-gift"></i>Details </div>
						                                    <div class="tools">
						                                        <a href="javascript:;" class="collapse"> </a>
						                                        
						                                    </div>
						                                </div>
						                                <div class="portlet-body">
						                                    <div class="panel-group accordion scrollable" id="accordion2">
						                                    	<?php for ($i=0; $i < $records2[$cnt]->looper; $i++): ?>
						                                    		
							                                        <div class="panel panel-default">
							                                            <div class="panel-heading">
							                                                <h4 class="panel-title">
							                                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#out<?php echo $cnt2; ?>"> <?php echo $records3[$cnt2]->outletid;  ?> | <?php echo $records3[$cnt2]->uniqueoutletcode;  ?></a>
							                                                </h4>
							                                            </div>
							                                            <div id="out<?php echo $cnt2; ?>" class="panel-collapse collapse">
							                                                <div class="panel-body">
							                                                    <div id="out<?php echo $cnt2; ?>" class="outs well">
																                  <table class="table" border="0">
																                    <tr width="30%">
																                      <td>City</td>
																                      <td><?php echo $records3[$cnt2]->outletcity; ?></td>
																                    </tr>
																                    <tr width="30%">
																                      <td>Locality</td>
																                      <td><?php echo $records3[$cnt2]->locality; ?></td>
																                    </tr>
																                    <tr width="30%">
																                      <td>Address</td>
																                      <td><?php echo $records3[$cnt2]->outletaddr; ?></td>
																                    </tr>
																                    <tr width="30%">
																                      <td>Store Manager</td>
																                      <td><?php echo $records3[$cnt2]->storemanager; ?></td>
																                    </tr>
																                    <tr width="30%">
																                      <td>Contact Number</td>
																                      <td><?php echo $records3[$cnt2]->contactnum; ?></td>
																                    </tr>
																                  </table>

																                </div>
							                                                </div>
							                                            </div>
							                                        </div>
							                                       
							                                    <?php $cnt2++; ?>
											                    <?php endfor; ?>
						                                    </div>
						                                </div>
						                            </div>
					                            </div>

                                                <?php else : ?>
                                                <div class="tab-pane " id="sub<?php echo $cnt; ?>">

                                                	<div class="portlet box yellow">
						                                <div class="portlet-title">
						                                    <div class="caption">
						                                        <i class="fa fa-gift"></i>Details </div>
						                                    <div class="tools">
						                                        <a href="javascript:;" class="collapse"> </a>
						                                        
						                                    </div>
						                                </div>
						                                <div class="portlet-body">
						                                    <div class="panel-group accordion scrollable" id="accordion2">
						                                    	<?php for ($i=0; $i < $records2[$cnt]->looper; $i++): ?>
						                                    		
							                                        <div class="panel panel-default">
							                                            <div class="panel-heading">
							                                                <h4 class="panel-title">
							                                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#out<?php echo $cnt2; ?>"> <?php echo $records3[$cnt2]->outletid;  ?> | <?php echo $records3[$cnt2]->uniqueoutletcode;  ?></a>
							                                                </h4>
							                                            </div>
							                                            <div id="out<?php echo $cnt2; ?>" class="panel-collapse collapse">
							                                                <div class="panel-body">
							                                                    
																                <div id="out<?php echo $cnt2; ?>" class="outs well">
																                  <table class="table" border="0">
																                    <tr width="30%">
																                      <td>City</td>
																                      <td><?php echo $records3[$cnt2]->outletcity; ?></td>
																                    </tr>
																                    <tr width="30%">
																                      <td>Locality</td>
																                      <td><?php echo $records3[$cnt2]->locality; ?></td>
																                    </tr>
																                    <tr width="30%">
																                      <td>Address</td>
																                      <td><?php echo $records3[$cnt2]->outletaddr; ?></td>
																                    </tr>
																                    <tr width="30%">
																                      <td>Store Manager</td>
																                      <td><?php echo $records3[$cnt2]->storemanager; ?></td>
																                    </tr>
																                    <tr width="30%">
																                      <td>Contact Number</td>
																                      <td><?php echo $records3[$cnt2]->contactnum; ?></td>
																                    </tr>
																                  </table>

																                </div>
																                
							                                                </div>
							                                            </div>
							                                        </div>
							                                       
							                                    <?php $cnt2++; ?>
											                    <?php endfor; ?>
						                                    </div>
						                                </div>
						                            </div>
					                            </div>
					                        	<?php endif ?>
					                        	<?php $cnt++; ?>
							                    <?php endwhile; ?>
			                                </div>
			                            </div>
			                        </div>
			                    </div>
                            </div> 
                    <!-- write your content here -->
                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
           <?php endblock() ?>
            <!-- BEGIN QUICK SIDEBAR -->