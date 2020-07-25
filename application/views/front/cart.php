<div class="container">
  <div class="cart transition is-open cart-content-section"> 

  <?php if (!empty($this->cart->contents())) { ?> 
    <div class="table">
      <div class="layout-inline cart-heading row th ">
        <div class="col col-pro"> No.</div>
        <div class="col col-pro">Product</div>
        <div class="col col-price align-center "> 
          Price
        </div>
        <div class="col col-qty align-center">QTY</div>
        <!-- <div class="col">VAT</div> -->
        <div class="col">Total</div>
      </div>
      <?php 
      $total = 0;      
      if(!empty($this->cart->contents())){ 
        $i = 1 ;
        
      foreach ($this->cart->contents() as $value) {
      $total = $total + $value['subtotal']; ?>
      <div class="layout-inline cart-content row">
        <div class="col col-vat">
          <p><?php echo $i++; ?></p>          
        </div>        
        <div class="col col-pro layout-inline">
          <img style="width: 50%;" src="<?= base_url().$value['image']; ?>" >
          <p class="cart-product-name"><?= $value['name']; ?></p>
        </div>        
        <div class="col col-price col-numeric align-center ">
          <p><i class='fas fa-rupee-sign'></i> <?= $value['price']; ?></p>
        </div>
        <div class="col col-qty layout-inline">
          <div class="def-number-input number-input safari_only add-quantity cart-update-quantity">
            <button onclick="this.parentNode.querySelector('input[type=number]').stepDown(); updateCart(<?= $value['id']; ?>,this.parentNode.querySelector('input[value]'),'minus')" class="minus"></button>
            <input class="quantity" min="0" value="<?= $value['qty']; ?>" name="quantity" type="number">
            <button onclick="this.parentNode.querySelector('input[type=number]').stepUp(); updateCart(<?= $value['id']; ?>,this.parentNode.querySelector('input[value]'),'plus')" class="plus"></button>
          </div>          
        </div>        
        <!-- <div class="col col-vat col-numeric">
          <p><i class='fas fa-rupee-sign'></i> 2.95</p>          
        </div> -->
         <div class="col col-total col-numeric">  
           <p><i class='fas fa-rupee-sign'></i><?php echo $value['subtotal'] ?></p>
           <p class="remove-product"><a onclick="updateCart(<?= $value['id']; ?>,'0','remove')" ><i class='fa fa-close'></i></a></p>
         </div>         
      </div>  
      <?php }
      }else{ echo "<h2><center>No product in cart</center></h2>"; } ?>
      <div class="cart-total cart-total-left">
        <!-- <span class="heading-total">Total Item - <span class="total-qty"><?php echo count($this->cart->contents()); ?> </span> </span><br><br> -->
        <span class="heading-total">Total = <?php echo $total; ?> </span> 
      </div>         
    </div>
    <div class="row update-button">      
      <div class="col-md-12">        
        <a href="<?php echo base_url('user/checkout');?>" class="btn btn-update-cart ">Checkout</a>
      </div>
    </div>
  <?php }else{ ?>    
    <div class="col-xl-12 col-md-12 col-sm-12 col-xs-12">
      <div class="empty-category">
        <div class="empty-img">
          <img src="<?php echo base_url('assets/img/empty-cart.png'); ?>">
        </div>
        <div class="payment-btn">
          <a  href="<?php echo base_url('user');?>">Back to Store</a>
        </div>
       <!--  <h4>Currenty there is no product in your cart</h4> -->
      </div>
    </div>
  <?php } ?>

  </div>    
</div>
  
