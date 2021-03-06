  <!-- page content -->
  <div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
        <ul class="nav nav-tabs product_tab" id="myTab" role="tablist">
          <li class="product_li">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Manufacturer</a>
          </li>
          <li class="product_li">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Requests</a>
          </li>
        </ul>
          <h3 class="product_form_heading">Manufacturer</h3>
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
                      <a href="<?php echo base_url('admin/manufacturer_bulk'); ?>" class="btn btn-primary"><i class="fa fa-upload" aria-hidden="true"></i> Upload Manufacturer</a>   

                      <a href="<?php echo base_url('admin/manufacturer_add'); ?>" class="btn btn-primary">+ Add Manufacturer</a>   
                    <?php }
                    elseif($_SESSION["user_type"]=='vendor'){ ?>
                      <a href="<?php echo base_url('vendor/manufacturer_bulk'); ?>" class="btn btn-primary"><i class="fa fa-upload" aria-hidden="true"></i> Upload Manufacturer</a>   
                      <a href="<?php echo base_url('vendor/manufacturer_add'); ?>" class="btn btn-primary">+ Add Manufacturer</a>   
                    <?php } ?>   
                  </div>  
                  <div class="card-box table-responsive">                
                    <table id="datatable-responsive" class="table user-detail-table" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Created By</th>
                          <th>Created For</th>
                          <th>Created On</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                        if (!empty($manufacturer)) {
                          $i = 1;
                          foreach ($manufacturer as $key => $value) {
                          if($value->status!='pending'){ ?>
                          <tr>
                            <td><?php echo $i++; ?></td>
                            <td><?php echo $value->username; ?></td>
                            <td><?php echo $value->name; ?></td>
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
                            <a href="<?php echo base_url('vendor/manufacturer_edit/'.$value->id); ?>"><span class="status-approve"><i class="fa fa-pencil"></i></span></a>
                            <a href="<?php echo base_url('vendor/manufacturer_delete/'.$value->id); ?>"><span class="status-cancle"><i class="fa fa-trash"></i></span></a>
                            <?php }
                          else if($this->session->userdata('user_type')=='vendor' && $value->status!='pending') { ?>
                            <a class="disable" href="<?php echo base_url('vendor/manufacturer_edit/'.$value->id); ?>"><span class="status-approve"><i class="fa fa-pencil"></i></span></a>
                            <a class="disable" href="<?php echo base_url('vendor/manufacturer_delete/'.$value->id); ?>"><span class="status-cancle"><i class="fa fa-trash"></i></span></a>

                          <?php }
                          else if($this->session->userdata('user_type')=='admin') { ?>
                            <a href="<?php echo base_url('admin/manufacturer_edit/'.$value->id); ?>"><span class="status-approve"><i class="fa fa-pencil"></i></span></a>
                            <a href="<?php echo base_url('admin/manufacturer_delete/'.$value->id); ?>"><span class="status-cancle"><i class="fa fa-trash"></i></span></a>
                            <a id="drop5" href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false"><span class="status-Review">Action <span class="caret"></span></span></a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 44px, 0px);">
                              <?php if ($value->status=='pending' || $value->status=='reject') { ?>
                                <a class="dropdown-item" href="<?php echo base_url('admin/manufacturer_status/active/'.$value->id);?>">Activate</a>
                              <?php }
                              if ($value->status=='pending' || $value->status=='active') { ?>
                                <a class="dropdown-item" href="<?php echo base_url('admin/manufacturer_status/reject/'.$value->id);?>">Deactivate</a>
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
                          <th>Requested By</th>
                          <th>Requested For</th>
                          <th>Requested On</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                        if (!empty($manufacturer)) {
                          $i = 1;
                          foreach ($manufacturer as $key => $value) { 
                            if($value->status=='pending'){?>
                          <tr>
                            <td><?php echo $i++; ?></td>
                            <td><?php echo $value->username; ?></td>
                            <td><?php echo $value->name; ?></td>
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
                            <a href="<?php echo base_url('vendor/manufacturer_edit/'.$value->id); ?>"><span class="status-approve"><i class="fa fa-pencil"></i></span></a>
                            <a href="<?php echo base_url('vendor/manufacturer_delete/'.$value->id); ?>"><span class="status-cancle"><i class="fa fa-trash"></i></span></a>
                            <?php }
                          else if($this->session->userdata('user_type')=='vendor' && $value->status!='pending') { ?>
                            <a class="disable" href="<?php echo base_url('vendor/manufacturer_edit/'.$value->id); ?>"><span class="status-approve"><i class="fa fa-pencil"></i></span></a>
                            <a class="disable" href="<?php echo base_url('vendor/manufacturer_delete/'.$value->id); ?>"><span class="status-cancle"><i class="fa fa-trash"></i></span></a>

                          <?php }
                          else if($this->session->userdata('user_type')=='admin') { ?>
                            <a href="<?php echo base_url('admin/manufacturer_edit/'.$value->id); ?>"><span class="status-approve"><i class="fa fa-pencil"></i></span></a>
                            <a href="<?php echo base_url('admin/manufacturer_delete/'.$value->id); ?>"><span class="status-cancle"><i class="fa fa-trash"></i></span></a>
                            <a id="drop5" href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false"><span class="status-Review">Action <span class="caret"></span></span></a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 44px, 0px);">
                              <?php if ($value->status=='pending' || $value->status=='reject') { ?>
                                <a class="dropdown-item" href="<?php echo base_url('admin/manufacturer_status/active/'.$value->id);?>">Activate</a>
                              <?php }
                              if ($value->status=='pending' || $value->status=='active') { ?>
                                <a class="dropdown-item" href="<?php echo base_url('admin/manufacturer_status/reject/'.$value->id);?>">Deactivate</a>
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
  <button class="open-button" onclick="openForm()"><i class="fa fa-minus"></i></button>
  <div class="chat-popup" id="myForm">
    <div class="form-container">
      <div class="single-upload-div">
          <a href="<?php echo ($_SESSION["user_type"]=='admin') ? base_url('admin/manufacturer_add') :  base_url('vendor/manufacturer_add'); ?>">
            <span class="upload-span">Add Manufacturer <span class="rotate-div"></span></span>
            <button type="button" class="btn single-upload-icon"><i class="fa fa-upload"></i></button>
          </a> 
      </div>
      <button type="button" class="btn cancel" onclick="closeForm()"><i class="fa fa-close"></i></button>
    </div>
  </div>

      

<script>
  $(document).ready(function() {
    $('#example').DataTable();
  } );
</script>
  
<script>
  function openForm() {
    document.getElementById("myForm").style.display = "block";
  }

  function closeForm() {
    document.getElementById("myForm").style.display = "none";
  }
</script>

