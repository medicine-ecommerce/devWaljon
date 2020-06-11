  <!-- page content -->
  <div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
        <ul class="nav nav-tabs product_tab" id="myTab" role="tablist">
          <li class="product_li">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Salt Composition</a>
          </li>
          <li class="product_li">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Requests</a>
          </li>
        </ul>
          <h3 class="product_form_heading">Inventory > Salt Composition</h3>
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
          <div class="x_panel">
            <div class="x_title">
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                  <div class="pull-right">
                    <?php if($_SESSION["user_type"]=='admin'){ ?>
                      <a href="<?php echo base_url('admin/saltComposition_add'); ?>" class="btn btn-primary">Add Salt Composition</a> 
                    <?php }
                    elseif($_SESSION["user_type"]=='vendor'){ ?>
                      <a href="<?php echo base_url('vendor/saltComposition_add'); ?>" class="btn btn-primary">Add Salt Composition</a> 
                    <?php } ?>  
                  </div>
                  <div class="card-box table-responsive">                
                    <table id="datatable-responsive" class="table user-detail-table" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Image</th>
                          <th>Salt Composition Name</th>
                          <th>Created by</th>
                          <th>Created on</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                          if (!empty($saltComposition)) {
                            $i = 1;
                            foreach ($saltComposition as $key => $value) { ?>
                            <tr>
                              <td><?php echo $i++; ?></td>
                              <td><span class="brand_img"><img src="<?php echo base_url(); ?>assets/saltComposition-images/<?php echo $value->image ?>" ></span></td>
                              <td><?php echo $value->name; ?></td>
                              <td><?php echo $value->username; ?></td>
                              <td><?php echo date('d F Y H:i A',strtotime($value->created_at)); ?></td>
                              <td>
                                <?php if ($value->status=='pending') {
                                  echo '<span class="pending">Inactive</span>';
                                } elseif ($value->status=='active') {
                                  echo '<span class="approved">Active</span>';
                                } else {
                                  echo '<span class="rejected">Rejected</span>';
                                }?>
                              </td>
                              <td><a href="<?php echo base_url('admin/saltComposition_edit/'.$value->id); ?>"><span class="status-approve"><i class="fa fa-check"></i></span></a>
                              <a href="<?php echo base_url('admin/saltComposition_delete/'.$value->id); ?>"><span class="status-cancle"><i class="fa fa-close"></i></span></a>
                              <a id="drop5" href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false"><span class="status-Review">Action <span class="caret"></span></span></a>
                              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 44px, 0px);">
                                <?php if ($value->status=='pending' || $value->status=='reject') { ?>
                                  <a class="dropdown-item" href="<?php echo base_url('admin/saltComposition_status/active/'.$value->id);?>">Approve</a>
                                <?php }
                                if ($value->status=='pending' || $value->status=='active') { ?>
                                  <a class="dropdown-item" href="<?php echo base_url('admin/saltComposition_status/reject/'.$value->id);?>">Reject</a>
                                <?php } ?>
                              </div>
                            </td>
                            </tr>
                          <?php } 
                        }?>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                  <div class="card-box table-responsive">                
                    <table id="example" class="table user-detail-table" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Image</th>
                          <th>Requested By</th>
                          <th>Requested For</th>
                          <th>Requested On</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                          if (!empty($saltComposition)) {
                            $i = 1;
                            foreach ($saltComposition as $key => $value) { 
                              if($value->status=='pending'){?>
                                <tr>
                                  <td><?php echo $i++; ?></td>
                                  <td><span class="brand_img"><img src="<?php echo base_url(); ?>assets/saltComposition-images/<?php echo $value->image ?>" ></span></td>
                                  <td><?php echo $value->username; ?></td>
                                  <td><?php echo $value->name; ?></td>
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
                                  <td><a href="<?php echo base_url('admin/saltComposition_edit/'.$value->id); ?>"><span class="status-approve"><i class="fa fa-check"></i></span></a>
                                  <a href="<?php echo base_url('admin/saltComposition_delete/'.$value->id); ?>"><span class="status-cancle"><i class="fa fa-close"></i></span></a>
                                  <a id="drop5" href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false"><span class="status-Review">Action <span class="caret"></span></span></a>
                                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 44px, 0px);">
                                    <?php if ($value->status=='pending' || $value->status=='reject') { ?>
                                      <a class="dropdown-item" href="<?php echo base_url('admin/saltComposition_status/active/'.$value->id);?>">Approve</a>
                                    <?php }
                                    if ($value->status=='pending' || $value->status=='active') { ?>
                                      <a class="dropdown-item" href="<?php echo base_url('admin/saltComposition_status/reject/'.$value->id);?>">Reject</a>
                                    <?php } ?>
                                  </div>
                                </td>
                                </tr>
                          <?php } } 
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
    </div>
  </div>
  <!-- /page content -->

      

<script>
  $(document).ready(function() {
    $('#example').DataTable();
  } );
</script>
