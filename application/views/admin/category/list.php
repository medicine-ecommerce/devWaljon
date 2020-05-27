
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Category</h3>
              </div>
            </div>

            <div class="col-md-12 col-sm-12 ">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Category<small>List</small></h2>
                  <div class="pull-right">
                    <a href="<?php echo base_url('admin/category_add'); ?>" class="btn btn-primary">Add Category</a>  
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
                              <th>Category name</th>
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
                                  <td><?php echo $value->category_name; ?></td>
                                  <td><a href="<?php echo ($value->is_active > 0)? base_url('admin/category_status/0/'.$value->id): base_url('admin/category_status/1/'.$value->id); ?>"><?php echo ($value->is_active <= 0)?'<span class="status-consulted">Active</span>':'<span class="status-shipped">Deactive</span>'; ?></a></td>
                                  <td>
                                    <a href="<?php echo base_url('admin/category_edit/'.$value->id);?>"><span class="status-approve"><i class="fa fa-check"></i>
                                    </span></a>
                                    <a href="<?php echo base_url('admin/category_delete/'.$value->id); ?>" onclick="return confirm('Are you sure？')"><span class="status-cancle"><i class="fa fa-close"></i></span></a>
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
