<div class="info-tabs">
  <div class="container">
    <div class="hambergar"> 
      <div class="toolbox-left">
        <h3> <a>Home</a> > <a href=""> Order List </a></h3> 
      </div>
      <div class="pull-right">
        <form action="#">
          <input type="search" required="required" class="product_search_input" placeholder="Search">
          <button type="submit" class="product_search_button" value="Submit"><i class="fa fa-search"></i></button>
        </form>
      </div>
    </div>
    <div class="row">
      <div class="tab-heading">
        <ul class="nav nav-tabs product_tab" id="myTab" role="tablist">
          <li class="product_li1">
            <a class="nav-link active" id="about-tab" data-toggle="tab" href="#about" role="tab" aria-controls="about" aria-selected="true">Panding Order</a>
          </li>
          <!-- <li class="product_li">
            <a class="nav-link" id="benefits-tab" data-toggle="tab" href="#benefits" role="tab" aria-controls="benefits" aria-selected="false">Order History</a>
          </li> -->
          <li class="product_li">
            <a class="nav-link" id="uses-tab" data-toggle="tab" href="#uses" role="tab" aria-controls="uses" aria-selected="true">All Product List</a>
          </li>
        
        </ul>   
      </div>
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="about" role="tabpanel" aria-labelledby="about-tab">
          <div class="product-main-heading">
            <h4>Pending Order</h4>
          </div>
          <div class="order-table"> 
            <table class="table-shopping-cart">
              <tbody>
                <tr class="table_head">
                  <!-- <th class="column-1">Product Image</th>
                  <th class="column-2">Product Name</th>
                  <th class="column-5">Price</th>
                  <th class="column-3">Quantity</th> -->
                  <th class="column-5">No.</th>
                  <th class="column-5">Order Number</th>
                  <th class="column-5">Order Date</th>
                  <th class="column-5">Order Status</th>
                  <th class="column-5">View Order</th>  
                  <!-- <th class="column-5">Delivery Date</th>
                  <th class="column-5">Delivery Status</th> -->
                  <th class="column-5">Cancel &amp; Return </th>
                </tr>
                <?php if (!empty($order_list)) {
                    $i= 1;
                    foreach ($order_list as $key => $value) { ?>                    
                    <tr class="table_row">
                      <td class="column-3"><?php echo $i; ?> </td>
                      <td class="column-3"><?php echo $value->order_number; ?> </td>
                      <td class="column-3"><?php echo date('d F Y H:i A',strtotime($value->created_at)); ?> </td>
                      <td class="column-3"><?php echo ucfirst($value->status); ?> </td>
                      <td class="column-3"><a href="<?php echo base_url('user/orderView/'.$value->id); ?>">View Order</a></td>
                      <td class="column-5"><a onclick="orderCancel(<?= $value->id; ?>)" class="canel-order">Cancel Order</a> </td>
                    </tr>
                  <?php $i+=1; } 
                  } ?>
              </tbody>
            </table>
          </div>
        </div>
        <div class="tab-pane fade" id="uses" role="tabpanel" aria-labelledby="uses-tab">
          <div class="product-main-heading">
            <h4>All Product List</h4>
          </div>
          <div class="order-table"> 
            <table class="table-shopping-cart">
              <tbody>
                <tr class="table_head">
                  <!-- <th class="column-1">Product Image</th>
                  <th class="column-2">Product Name</th>
                  <th class="column-5">Price</th>
                  <th class="column-3">Quantity</th> -->
                  <th class="column-5">No.</th>
                  <th class="column-5">Order Number</th>
                  <th class="column-5">Order Date</th>
                  <th class="column-5">Order Status</th>
                  <th class="column-5">Delivery Date</th>
                  <th class="column-5">Delivery Status</th>
                  <th class="column-5">View Order</th>                  
                  <th class="column-5">Cancel &amp; Return </th>
                </tr>
                <?php if (!empty($order_list)) {
                    $i= 1;
                    foreach ($order_list as $key => $value) {
                    if ($value->status=='Pending') {
                     ?>                    
                    <tr class="table_row">
                      <td class="column-3"><?php echo $i; ?> </td>
                      <td class="column-3"><?php echo $value->order_number; ?> </td>
                      <td class="column-3"><?php echo date('d F Y H:i A',strtotime($value->created_at)); ?> </td>
                      <td class="column-3"><?php echo ucfirst($value->status); ?> </td>
                      <td class="column-3"><a href="<?php echo base_url('user/orderView/'.$value->id); ?>">View Order</a></td>
                      <td class="column-5"></td>
                      <td class="column-5"></td>
                      <td class="column-5"></td>
                    </tr>
                  <?php  } 
                    } ;
                  } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>    
</div>
<div class="modal fade" id="cancelOrder" role="dialog">
    <div class="modal-dialog registration-done order-success-modal">
    <!-- Modal content-->
      <div class="modal-content welldon-modal">
          <!-- <h4 class="modal-title">Modal Header</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button> -->
        
        <div class="modal-body image-content">
          <div class="text-center">
          <img src="<?php echo base_url(); ?>assets/img/Cancel-Order.png" class="success-order-image" id="preview">
          <h1 id="pass-message"></h1>   
          <p id="sub-pass-message"></p>
        </div>
        <div class="text-center succes-buttons">
          <button type="button" class="btn btn-default submit_button cancel-button" data-dismiss="modal" >OK</button>
        </div>
        </div>
      </div>  
    </div>
  </div>
<script type="text/javascript">
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

</script>