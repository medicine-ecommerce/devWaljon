
<section class="main-page">
  <div class="container">
    <div class="order-view"> 
      <div class="order-date-detail">
        <h4>Order Details</h4>
        <ul>
          <li>
            Ordered on <?php echo date('d F Y H:i A',strtotime($order['created_at'])); ?>
          </li>
          <li> | </li>
          <li>
            Order #<?php echo $order['order_number']; ?>
          </li>
        </ul>
      </div>   
      <div class="order-detail">
        <div class="row">
          <div class="col-md-4">
            <div class="order-content"> 
              <div class="order-head">
                <h4>Shipping Address</h4>
              </div>
              <p>Name</p>
              <p>Address: <?php echo $order['address'].', '.$order['city'].' '.$order['state'].'<br>'.$order['country']; ?></p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="order-content"> 
              <div class="order-head">
                <h4>Payment Method</h4>
              </div>
              <p><?php echo strtoupper($order['payment_method']); ?></p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="order-content"> 
              <div class="order-head">
                <h4>Order Summary</h4>
              </div>
              <div class="price-details"> 
                <p><span class="order-sum"> Item(s) Subtotal : </span> <span><i class="fa fa-inr"></i> <?php echo $order['order_subtotal']; ?> </span></p>
                <p><span class="order-sum"> Shipping : </span> <span><i class="fa fa-inr"></i> 0</span></p>
                <p><span class="order-sum"> Total : </span> <span><i class="fa fa-inr"></i> <?php echo $order['order_subtotal']; ?> </span></p>
                <p><span class="order-sum"> <strong>Grand Total : </strong> </span> <span><strong><i class="fa fa-inr"></i> <?php echo $order['order_subtotal']; ?> </strong></span></p>
              </div>
            </div>
          </div>
        </div>
      </div> 
      <div class="order-detail">
        <div>
          <h4 class="deliver-date">Delivered - 26/2/2020</h4>
        </div>
        <div class="card-box table-responsive">                
          <table class="table">
            <tbody>
              <?php foreach ($order['item'] as $key => $value) { ?>                
              <tr>
                <td style="width: 15%">
                  <div class="order-product-img">
                    <img src="<?php echo ($value->product_image) ? $value->product_image : base_url('assets/brand-images/da1d850aff1b5994c62200e0d3e34ffa.jpg'); ?>">
                  </div>
                </td>
                <td>
                  <div class="order-product-detail">
                    <h6 class="order-product-name"> <?php echo $value->product_name; ?></h6>
                    <p>Price- <i class="fa fa-inr"></i> <?php echo $value->price; ?>/-</p>
                  </div>
                </td>
                <td><?php echo $value->qty; ?></td>
                <td><?php echo $value->subtotal; ?></td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>            
    </div>
  </div> 
</section>
