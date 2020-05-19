
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
                      <div class="card-box table-responsive">                
                        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                          <thead>
                            <tr>
                              <th>S.No.</th>
                              <th>First name</th>
                              <th>Last name</th>
                              <th>Email</th>
                              <th>Mobile</th>
                              <th>Status</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php 
                            if (!empty($vendors)) {
                              $i = 1;
                              foreach ($vendors as $key => $value) { ?>
                                <tr>
                                  <td><?php echo $i++; ?></td>
                                  <td><?php echo $value->first_name; ?></td>
                                  <td><?php echo $value->last_name; ?></td>
                                  <td><?php echo $value->email; ?></td>
                                  <td><?php echo $value->mobile; ?></td>
                                  <td><?php echo ($value->is_active > 0)?'Active':'Deactive'; ?></td>
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
