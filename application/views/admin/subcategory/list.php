
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Product Category</h3>
              </div>
            </div>

            <div class="col-md-12 col-sm-12 ">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Product Category<small>List</small></h2>
                  <div class="pull-right">
                    <?php if($_SESSION["user_type"]=='admin'){ ?>
                      <a href="<?php echo base_url('admin/home_category_add'); ?>" class="btn btn-primary">Add Product Category</a>   
                    <?php }
                    elseif($_SESSION["user_type"]=='vendor'){ ?>
                      <a href="<?php echo base_url('vendor/home_category_add'); ?>" class="btn btn-primary">Add Product Category</a>   
                    <?php } ?> 

                  </div>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <div class="row">
                    <div class="col-sm-12">
                      <?php if (!empty($this->session->flashdata('error'))) {
                        echo '<div class="alert alert-danger">
                              '.$this->session->flashdata('error').'
                            </div>';
                      }
                      elseif (!empty($this->session->flashdata('success'))) {
                        echo '<div class="alert alert-success">
                              '.$this->session->flashdata('success').'
                            </div>';
                      } ?>
                      <div class="card-box table-responsive">                
                        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                          <thead>
                            <tr>
                              <th>S.No.</th>
                              <th>Requested By</th>
                              <th>Home Category</th>
                              <th>Product Category</th>
                              <th>Created On</th>
                              <th>Status</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php 
                            if (!empty($subcategory)) {
                              $i = 1;
                              foreach ($subcategory as $key => $value) { ?>
                                <tr>
                                  <td><?php echo $i++; ?></td>
                                  <td><?php echo $value->username; ?></td>
                                  <td><?php echo $value->category_name; ?></td>
                                  <td><?php echo $value->subcategory; ?></td>
                                  <td><?php echo date('d F Y H:i A',strtotime($value->created_at)); ?></td> 
                                  <td>
                                    <?php if ($value->status=='pending') {
                                      echo '<span class="pending">Pending</span>';
                                    } elseif ($value->status=='active') {
                                      echo '<span class="approved">Active</span>';
                                    } else {
                                      echo '<span class="rejected">Deactive</span>';
                                    } ?>
                                  </td>                                 
                                  <td>
                                    <?php if ($this->session->userdata('user_type')=='vendor' && $value->status=='pending') { ?>
                                      <a href="<?php echo base_url('admin/home_category_edit/'.$value->id); ?>"><span class="status-approve"><i class="fa fa-pencil"></i></span></a>
                                      <a href="<?php echo base_url('admin/home_category_delete/'.$value->id); ?>"><span class="status-cancle"><i class="fa fa-trash"></i></span></a>
                                    <?php }
                                    else{ ?>
                                      <a href="<?php echo base_url('admin/home_category_edit/'.$value->id); ?>"><span class="status-approve"><i class="fa fa-pencil"></i></span></a>
                                      <a href="<?php echo base_url('admin/home_category_delete/'.$value->id); ?>"><span class="status-cancle"><i class="fa fa-trash"></i></span></a> 
                                      <a id="drop5" href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false"><span class="status-Review">Action <span class="caret"></span></span></a>
                                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 44px, 0px);">
                                        <?php if ($value->status=='pending' || $value->status=='reject') { ?>
                                          <a class="dropdown-item" href="<?php echo base_url('admin/home_category_status/active/'.$value->id);?>">Activate</a>
                                        <?php }
                                        if ($value->status=='pending' || $value->status=='active') { ?>
                                          <a class="dropdown-item" href="<?php echo base_url('admin/home_category_status/reject/'.$value->id);?>">Deactivate</a>
                                        <?php } ?>
                                      </div>
                                    <?php } ?> 
                                  </td>
                                </tr>
                              <?php }
                            } ?>                            
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
