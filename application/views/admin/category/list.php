  <!-- page content -->
  <div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>Category</h3>
        </div>

        <div class="title_right">
          <div class="col-md-6 col-sm-6 form-group pull-right top_search">
            <div class="input-group">
              <input type="text" class="form-control product-form" placeholder="Search ">
            </div>
          </div>
        </div>
      </div>
      <div class="">
        <div class="col-md-12 col-sm-12 home-module-pages">
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
          <div class="x_panel">
            <div class="x_title">
              <h2>Category<small>List</small></h2>
              <div class="pull-right">
                <?php if($_SESSION["user_type"]=='admin'){ ?>
                  <a href="<?php echo base_url('admin/category_add'); ?>" class="btn btn-primary">Add Category</a> 
                <?php }
                elseif($_SESSION["user_type"]=='vendor'){ ?>
                  <a href="<?php echo base_url('vendor/category_add'); ?>" class="btn btn-primary">Add Category</a> 
                <?php } ?>  
              </div>
              <div class="clearfix"></div>
            </div>
            <div class="tab-content" id="myTabContent">
              <div class="card-box table-responsive">                
                <table id="datatable-responsive" class="table user-detail-table" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Requested By</th>
                      <th>Requested For</th>
                      <th>Requested On</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                    if (!empty($category)) {
                      $i = 1;
                      foreach ($category as $key => $value) { ?>
                      <tr>
                        <td><?php echo $i++; ?></td>
                        <td><?php echo $value->username; ?></td>
                        <td><?php echo $value->category_name; ?></td>
                        <td><?php echo date('d F Y H:i A',strtotime($value->created_at)); ?></td>
                        <td>
                          <?php if ($value->status=='pending') {
                            echo '<span class="pending">Pending</span>';
                          } elseif ($value->status=='active') {
                            echo '<span class="approved">Approved</span>';
                          } else {
                            echo '<span class="rejected">Rejected</span>';
                          } ?>
                        </td>
                        <td>
                          <?php if ($this->session->userdata('user_type')=='vendor' && $value->status=='pending') { ?>
                            <a href="<?php echo base_url('admin/category_edit/'.$value->id); ?>"><span class="status-approve"><i class="fa fa-check"></i></span></a>
                            <a href="<?php echo base_url('admin/category_delete/'.$value->id); ?>"><span class="status-cancle"><i class="fa fa-close"></i></span></a>
                          <?php }
                          else{ ?>
                            <a href="<?php echo base_url('admin/category_edit/'.$value->id); ?>"><span class="status-approve"><i class="fa fa-check"></i></span></a>
                            <a href="<?php echo base_url('admin/category_delete/'.$value->id); ?>"><span class="status-cancle"><i class="fa fa-close"></i></span></a> 
                            <a id="drop5" href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false"><span class="status-Review">Action <span class="caret"></span></span></a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 44px, 0px);">
                              <?php if ($value->status=='pending' || $value->status=='reject') { ?>
                                <a class="dropdown-item" href="<?php echo base_url('admin/category_status/active/'.$value->id);?>">Approve</a>
                              <?php }
                              if ($value->status=='pending' || $value->status=='active') { ?>
                                <a class="dropdown-item" href="<?php echo base_url('admin/category_status/reject/'.$value->id);?>">Reject</a>
                              <?php } ?>
                            </div>
                          <?php } ?> 
                        </td>
                        </tr>
                      <?php } 
                    }?>
                  </tbody>
                </table>
              </div>
            </div>            
          </div>
        </div>        
      </div>
    </div>
  </div>
  <!-- /page content -->

      
