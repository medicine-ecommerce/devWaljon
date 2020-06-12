        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Product Form</h3>
              </div>
            </div>

            <div class="col-md-12 col-sm-12 ">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Product Form<small>List</small></h2>
                  <div class="pull-right">
                    <a href="<?php echo base_url('admin/product_form_add'); ?>" class="btn btn-primary">Add Product Form</a>  
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
                        <table id="datatable-responsive" class="table user-detail-table" cellspacing="0" width="100%">
                          <thead>
                            <tr>
                              <th>S.No.</th>
                              <th>Requested By</th>
                              <th>Requested For</th>
                              <th>Requested On</th>
                              <th>Status</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php 
                            if (!empty($product_form)) {
                              $i = 1;
                              foreach ($product_form as $key => $value) { ?>
                                <tr>
                                  <td><?php echo $i++; ?></td>
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
                                  <td>
                                    <a href="<?php echo base_url('admin/product_form_edit/'.$value->id);?>"><span class="status-approve"><i class="fa fa-check"></i>
                                    </span></a>
                                    <a href="<?php echo base_url('admin/product_form_delete/'.$value->id); ?>" onclick="return confirm('Are you sure？')"><span class="status-cancle"><i class="fa fa-close"></i></span></a>
                                    <a id="drop5" href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false"><span class="status-Review">Action <span class="caret"></span></span></a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 44px, 0px);">
                                      <?php if ($value->status=='pending' || $value->status=='reject') { ?>
                                        <a class="dropdown-item" href="<?php echo base_url('admin/product_form_status/active/'.$value->id);?>">Approve</a>
                                      <?php }
                                      if ($value->status=='pending' || $value->status=='active') { ?>
                                        <a class="dropdown-item" href="<?php echo base_url('admin/product_form_status/reject/'.$value->id);?>">Reject</a>
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
