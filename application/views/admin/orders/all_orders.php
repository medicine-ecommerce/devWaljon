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
                          }elseif ($value->status=='delivered') {
                            echo '<span class="approved">Delivered</span>';
                          }elseif ($value->status=='on_shipping') {
                            echo '<span class="approved">Order Shipped</span>';
                          }elseif ($value->status=='cancel') {
                            echo '<span class="cancel-ordr">Order Canceled</span>';
                            if(empty($value->shiprocket_order_id)){ echo "<p class='no-shipping'>No Shipping</p>"; }
                          }elseif ($value->status=='return') {
                            echo '<span class="return-ord">Order Return</span>';
                          } else {
                            echo '<span class="rejected">Canceled</span>';
                          } ?>
                        </td>
                        <td><a href="<?php echo base_url('admin/order_view/'.$value->order_id); ?>"><span class="pending">View Order</span></a><br>                          
                          <a id="drop5" href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false"><span class="status-Review">Action <span class="caret"></span></span></a>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 44px, 0px);">

                            <?php if($value->status=='pending'){ ?>
                              <a class="dropdown-item ship-now1" onclick="showModelForShipping(<?= $value->order_id; ?>)">Ship Now</a>
                            <?php }else if($value->status == "on_shipping"){ ?>
                              <a onclick="orderCancel(<?= $value->order_id; ?>)" class="dropdown-item order-cancel1">Cancel</a>
                            <?php }else if($value->status == "delivered"){ ?>
                              <a onclick="returnOrder(<?= $value->order_id; ?>)" class="dropdown-item order-return1">Return</a>
                            <?php } ?>
                            <?php if($value->status == "on_shipping"){ ?>
                              <a href="<?php echo base_url('admin/getOrderStatus/'.$value->order_id); ?>" class="dropdown-item track-order">Track Order</a>
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
          </div>
        </div>        
      </div>
    </div>
  </div>
  <!-- /page content -->

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <form id="order_shipping" method="post">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Box Dimention</h4>
          <button type="button" onclick="clearInput()" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">                
                 <input type="number" class="form-control custom-input" id="length" placeholder="Length in cms" name="length" required="">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                 <input type="number" class="form-control custom-input" id="breadth" placeholder="Breadth in cms" name="breadth" required="">
              </div>              
            </div>            
            <div class="col-md-6">
              <div class="form-group">
                 <input type="number" class="form-control custom-input" id="height" placeholder="Height in cms" name="height" required="">
              </div>              
            </div>
            <div class="col-md-6">
              <div class="form-group">
                 <input type="number" class="form-control custom-input" id="weight" placeholder="Weight in cms" name="weight" required="">
              </div>              
            </div>            
            <input type="hidden" name="order_id" id="order_id">
          </div>
          <span class="error-block" id="error-mssg"></span>
        </div>
        <div class="modal-footer">
          <button type="button" onclick="orderShipping()" class="btn btn-default ship-now">Ship Now</button>
        </div>
      </div>
      </form>      
    </div>
  </div>


  <div class="modal fade" id="successModal" role="dialog">
    <div class="modal-dialog registration-done shipping-done">
    <!-- Modal content-->
      <div class="modal-content welldon-modal">
        <div >
        <img src="<?php echo base_url(); ?>assets/img/shipping-truck.gif" class="shipping-image" id="preview">
        <h1> Order Placed</h1>   
        <p>Congratulations your order shipping done</p>
          <!-- <h4 class="modal-title">Modal Header</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button> -->
        </div>
        <div class="modal-body">
          
        </div>
        <div class="text-center">
          <button type="button" class="btn btn-default submit_button" ><a href="https://app.shiprocket.in/orders/processing?page=1&perPage=15&shop=&ids=&rto=" target="_blank">View Order</a></button>

          <button type="button" class="btn btn-default submit_button cancel_buton" id="close-admin-success" data-dismiss="modal">Close</button>
        </div>
      </div>  
    </div>
  </div>
  <div class="modal fade" id="cancelOrder" role="dialog">
    <div class="modal-dialog registration-done order-success-modal">    
      <div class="modal-content welldon-modal">        
        <div class="modal-body image-content">
          <div class="text-center">
          <img src="<?php echo base_url(); ?>assets/img/Cancel-Order.png" class="success-order-image" id="preview">
          <h1 id="pass-message"></h1>   
          <p id="sub-pass-message"></p>
        </div>
        <div class="text-center succes-buttons">
          <button type="button" class="btn btn-default submit_button cancel-button" id="closeOrder" data-dismiss="modal" >OK</button>
        </div>
        </div>
      </div>  
    </div>
  </div>
  

      

<script type="text/javascript">
  function showModelForShipping(id){
        $('#order_id').val(id);
        $('#myModal').modal('show');
        

  }
  function clearInput() {    
        $('#length').val('');
        $('#breadth').val('');
        $('#height').val('');
        $('#weight').val('');
        $('#error-mssg').text('');
  }
  
  function orderShipping(){
    var length = $('#length').val();
    var breadth = $('#breadth').val();
    var height = $('#height').val();
    var weight = $('#weight').val();

    var valid = true;
    if(length=='' || breadth=='' || height=='' || weight==''){
        valid = false;
        $('#error-mssg').text('Please add all required details');
        return false;
    }else if(length < 0.5 || breadth < 0.5 || height < 0.5 ){
        $('#error-mssg').text('The value of the item in cms. Must be more than 0.5.');
        valid = false;
        return false;
    }

    if(valid){
      $('#error-mssg').text('');
      $.ajax({
            url:"<?php echo base_url() ?>/shiprocket/shiping_order",
            method:"POST",
            dataType: 'JSON',
            data: $("#order_shipping").serialize(),        
            success:function(data){                    
                 
              if(data.status==1){
                $('#myModal').modal('hide');
                $('#successModal').modal('show');
                clearInput();
              }else{
                clearInput();
                $('#error-mssg').text(data.msg);
              }
              // window.location.href = "<?php echo base_url() ?>vendor/bulk_upload";        
            }
      })      
    }
  }
  function orderCancel(id){
        
    $.ajax({
              url:"<?php echo base_url() ?>/shiprocket/shiping_cancel",
              method:"POST",
              dataType: 'JSON',
              data: {order_number:id},        
              success:function(data){                    
                   
                if(data.status==1){                                    
                  $('#cancelOrder').modal('show');
                  $('#pass-message').text('Order Canceled')
                  $('#sub-pass-message').text('Your order has been successfully Canceled')

                }else{
                  $('#cancelOrder').modal('show');
                  $('#pass-message').text('Order Already Canceled')                  
                }
                // window.location.href = "<?php echo base_url() ?>vendor/bulk_upload";        
              }
        })
  }
  function trackOrder(id){
    alert(id);
        
    $.ajax({
              url:"<?php echo base_url() ?>/shiprocket/getOrderStatus",
              method:"POST",
              dataType: 'JSON',
              data: {order_number:id},        
              success:function(data){                    
                   console.log(data);
                // if(data.status==1){                                    
                //   $('#cancelOrder').modal('show');
                //   $('#pass-message').text('Order Canceled')
                //   $('#sub-pass-message').text('Your order has been successfully Canceled')

                // }else{
                //   $('#cancelOrder').modal('show');
                //   $('#pass-message').text('Order Already Canceled')                  
                // }
                // window.location.href = "<?php echo base_url() ?>vendor/bulk_upload";        
              }
        })
  }
</script>