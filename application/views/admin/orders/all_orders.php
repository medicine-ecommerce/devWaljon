  <!-- page content -->
  <div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left order-heading">
          <h3 class="product_form_heading">Orders > All Orders</h3>
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
              <div class="card-box table-responsive">                
                <table id="datatable-responsive" class="table user-detail-table" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Order Number</th>
                      <th>Order By</th>
                      <th>Mobile</th>
                      <th>Order On</th>
                      <th>Order status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                    <tbody>
                    <?php 
                    if (!empty($orders)) {
                      $i = 1;
                      foreach ($orders as $key => $value) { ?>
                      <tr>
                        <td><?php echo $i++; ?></td>
                        <td><?php echo $value->order_number; ?></td>
                        <td><?php echo $value->full_name; ?></td>
                        <td><?php echo $value->mobile; ?></td>
                        <td><?php echo date('d F Y H:i A',strtotime($value->created_at)); ?></td>
                        <td>
                          <?php if ($value->status=='pending') {
                            echo '<span class="pending">Pending</span>';
                          } elseif ($value->status=='active') {
                            echo '<span class="approved">Active</span>';
                          } else {
                            echo '<span class="rejected">Canceled</span>';
                          } ?>
                        </td>
                        <td><a href="<?php echo base_url('admin/order_view/'.$value->order_id); ?>"><span class="pending">View Order</span></a></td>
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

      

