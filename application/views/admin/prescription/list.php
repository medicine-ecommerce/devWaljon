  <!-- page content -->
  <div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
        <ul class="nav nav-tabs product_tab" id="myTab" role="tablist">
          <li class="product_li">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Prescription</a>
          </li>
          <!-- <li class="product_li">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Requests</a>
          </li> -->
        </ul>
          <h3 class="product_form_heading">Prescription</h3>
        </div>

        <!-- <div class="title_right">
          <div class="col-md-6 col-sm-6 form-group pull-right top_search">
            <div class="input-group">
              <input type="text" class="form-control product-form" placeholder="Search ">
            </div>
          </div>
        </div> -->
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
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                  <!-- <div class="pull-right">
                    <?php if($_SESSION["user_type"]=='admin'){ ?>
                      <a href="<?php echo base_url('admin/category_add'); ?>" class="btn btn-primary">Add Category</a> 
                    <?php }
                    elseif($_SESSION["user_type"]=='vendor'){ ?>
                      <a href="<?php echo base_url('vendor/category_add'); ?>" class="btn btn-primary">Add Category</a> 
                    <?php } ?>  
                  </div> -->                  
                  <div class="card-box table-responsive">                
                    <table id="datatable-responsive" class="table user-detail-table" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Created By</th>
                          <th>View Prescription</th>
                          <th>Created On</th>
                          <th>Action</th>
                          
                        </tr>
                      </thead>
                        <tbody>
                        <?php 
                        if (!empty($prescription)) {
                          $i = 1;
                          foreach ($prescription as $key => $value) { ?>
                          <tr>
                            <td><?php echo $i++; ?></td>
                            <td><?php echo $value->username; ?></td>
                            <td><a href="<?php echo base_url($value->prescription); ?>" target="_blank"><span class="approved">View</span> </a></td>
                            <td><?php echo date('d F Y H:i A',strtotime($value->created_at)); ?></td>
                            <td><a href="<?php echo base_url('admin/AddPrescriptionItem/'.$value->user_id);?>"><span class="status-approve">Add Item</span></a></td>
                            
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
                          <th>Requested By</th>
                          <th>Parent Category</th>
                          <th>Category</th>
                          <th>Requested On</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                        if (!empty($category)) {
                          $i = 1;
                          foreach ($category as $key => $value) { 
                            if($value->status=='pending'){?>
                              <tr>
                                <td><?php echo $i++; ?></td>
                                <td><?php echo $value->username; ?></td>
                                <th><?php echo $value->main_category;?></th>
                                <td><?php echo $value->category_name; ?></td>
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
                                  <?php 
                                   if($this->session->userdata('user_type')=='admin'){ ?>
                                    <a id="drop5" href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false"><span class="status-Review">Action <span class="caret"></span></span></a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 44px, 0px);">
                                      <?php if ($value->status=='pending' || $value->status=='reject') { ?>
                                        <a class="dropdown-item" href="<?php echo base_url('admin/category_status/active/'.$value->id);?>">Activate</a>
                                      <?php }
                                      if ($value->status=='pending' || $value->status=='active') { ?>
                                        <a class="dropdown-item" href="<?php echo base_url('admin/category_status/reject/'.$value->id);?>">Deactivate</a>
                                      <?php } ?>
                                    </div>
                                  <?php } ?> 
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
