  <!-- page content -->
  <div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
        <ul class="nav nav-tabs product_tab" id="myTab" role="tablist">
          <li class="product_li">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Brands</a>
          </li>
          <li class="product_li">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><?php echo ($this->session->userdata('user_type') == 'vendor') ? 'Requests By You' :'Request'; ?></a>
          </li>
        </ul>
          <h3 class="product_form_heading">Brands</h3>
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
                  <div class="pull-right">
                    <?php if($_SESSION["user_type"]=='admin'){ ?>
                      <a href="<?php echo base_url('admin/brand_add'); ?>" class="btn btn-primary">Add Brand</a> 
                    <?php }
                    elseif($_SESSION["user_type"]=='vendor'){ ?>
                      <a href="<?php echo base_url('vendor/brand_add'); ?>" class="btn btn-primary">Add Brand</a> 
                    <?php } ?>  
                  </div>                  
                  <div class="card-box table-responsive">                
                    <table id="datatable-responsive" class="table user-detail-table" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Image</th>
                          <th>Created By</th>
                          <th>Brand Name</th>
                          <th>Description</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                      </thead>  
                      <tbody>
                        <?php 
                        if (!empty($brand)) {
                          $i = 1;
                          foreach ($brand as $key => $value) {
                          if($value->status!='pending'){ ?>
                          <tr>
                            <td><?php echo $i++; ?></td>
                            <td><span class="brand_img"><img src="<?php echo base_url(); ?>assets/brand-images/<?php echo $value->brand_img ?>" ></span></td>
                            <td><?php echo $value->username; ?></td>
                            <td><?php echo $value->brand_name; ?></td>
                            <td><?php echo $value->brand_desc; ?></td>
                            <td>
                              <?php if ($value->status=='pending') {
                                echo '<span class="pending">Pending</span>';
                              } elseif ($value->status=='active') {
                                echo '<span class="approved">Active</span>';
                              } else {
                                echo '<span class="rejected">Inactivate</span>';
                              } ?>
                            </td>
                            <td>
                            <?php  if($this->session->userdata('user_type')=='admin') { ?>
                            <a id="drop5" href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false"><span class="status-Review">Action <span class="caret"></span></span></a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 44px, 0px);">
                              <?php if ($value->status=='pending' || $value->status=='reject') { ?>
                                <a class="dropdown-item" href="<?php echo base_url('admin/brand_status/active/'.$value->id);?>">Activate</a>
                              <?php }
                              if ($value->status=='pending' || $value->status=='active') { ?>
                                <a class="dropdown-item" href="<?php echo base_url('admin/brand_status/reject/'.$value->id);?>">Inactivate</a>
                              <?php } ?>
                            </div>
                          <?php } ?>
                          </td>
                          </tr>
                        <?php }
                        } 
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
                          <th>Brand Name</th>
                          <th>Description</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                        if (!empty($brand)) {
                          $i = 1;
                          foreach ($brand as $key => $value) { 
                            if($value->status=='pending'){?>
                          <tr>
                            <td><?php echo $i++; ?></td>
                            <td><span class="brand_img"><img src="<?php echo base_url(); ?>assets/brand-images/<?php echo $value->brand_img ?>" ></span></td>
                            <td><?php echo $value->username; ?></td>
                            <td><?php echo $value->brand_name; ?></td>
                            <td><?php echo $value->brand_desc; ?></td>
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
                            <?php if($this->session->userdata('user_type')=='admin') { ?>
                            <a id="drop5" href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false"><span class="status-Review">Action <span class="caret"></span></span></a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 44px, 0px);">
                              <?php if ($value->status=='pending' || $value->status=='reject') { ?>
                                <a class="dropdown-item" href="<?php echo base_url('admin/brand_status/active/'.$value->id);?>">Inactivate</a>
                              <?php }
                              if ($value->status=='pending' || $value->status=='active') { ?>
                                <a class="dropdown-item" href="<?php echo base_url('admin/brand_status/reject/'.$value->id);?>">Inactivate</a>
                              <?php } ?>
                            </div>
                          <?php } ?>
                          </td>
                          </tr>
                        <?php }} 
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
