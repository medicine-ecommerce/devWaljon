
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Vendors</h3>
              </div>
            </div>

            <div class="col-md-12 col-sm-12 ">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Vendors<small>List</small></h2>
                  
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
                              <th>Full name</th>
                              <!-- <th>Last name</th> -->
                              <th>Email</th>
                              <th>Mobile</th>
                              <th>Status</th>
                              <th>Action</th>
                              
                            </tr>
                          </thead>
                          <tbody>
                            <?php 
                            if (!empty($vendors)) {
                              $i = 1;
                              foreach ($vendors as $key => $value) { ?>
                                <tr>
                                  <td><?php echo $i++; ?></td>
                                  <td><?php echo $value->full_name; ?></td>
                                  <td><?php echo $value->email; ?></td>
                                  <td><?php echo $value->mobile; ?></td>
                                  <td>
                                  <?php if ($value->is_active=='1') {
                                    echo '<span class="approved">Active</span>';
                                  } else {
                                    echo '<span class="rejected">Deactive</span>';
                                  } ?>
                                </td>
                                <td>
                                  <a href="<?php echo base_url('admin/editPersonalDetails/'.base64_encode($value->id)); ?>"><span class="status-approve"><i class="fa fa-pencil"></i></span></a>
                                  <a href="<?php echo base_url('admin/vendor_delete/'.$value->id); ?>"><span class="status-cancle"><i class="fa fa-close"></i></span></a>
                                  <a id="drop5" href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false"><span class="status-Review">Action <span class="caret"></span></span></a>
                                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 44px, 0px);">
                                  <?php if ($value->is_active=='0') { ?>
                                    <a class="dropdown-item" href="<?php echo base_url('admin/vendor_status/1/'.$value->id);?>">Active</a>
                                  <?php }
                                  else { ?>
                                    <a class="dropdown-item" href="<?php echo base_url('admin/vendor_status/0/'.$value->id);?>">Deactive</a>
                                  <?php } ?>
                                  </div>
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
