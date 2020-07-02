 






<div class="container">
  <div class="cart transition is-open">    
    <div class="table">
      <div class="layout-inline row th">
        <div class="col col-pro">Product</div>
        <div class="col col-price align-center "> 
          Price
        </div>
        <div class="col col-qty align-center">QTY</div>
        <div class="col">VAT</div>
        <div class="col">Total</div>
      </div>
      <?php       
      if(!empty($this->cart->contents())){ 
      foreach ($this->cart->contents() as $value) { ?>
      <div class="layout-inline row">        
        <div class="col col-pro layout-inline">
          <img style="width: 50%;" src="<?= base_url().$value['image']; ?>" alt="kitten" />
          <p><?= $value['name']; ?></p>
        </div>        
        <div class="col col-price col-numeric align-center ">
          <p><i class='fas fa-rupee-sign'></i> <?= $value['price']; ?></p>
        </div>
        <div class="col col-qty layout-inline">
          <div class="def-number-input number-input safari_only add-quantity hide-button">
            <button onclick="this.parentNode.querySelector('input[type=number]').stepDown(); updateCart(<?= $value['id']; ?>,this.parentNode.querySelector('input[value]'),'minus')" class="minus"></button>
            <input class="quantity" min="0" value="<?= $value['qty']; ?>" name="quantity" type="number">
            <button onclick="this.parentNode.querySelector('input[type=number]').stepUp(); updateCart(<?= $value['id']; ?>,this.parentNode.querySelector('input[value]'),'plus')" class="plus"></button>
          </div>          
        </div>        
        <div class="col col-vat col-numeric">
          <p><i class='fas fa-rupee-sign'></i> 2.95</p>          
        </div>
         <div class="col col-total col-numeric">  
           <p><i class='fas fa-rupee-sign'></i><?= $value['subtotal'] ?></p>
         </div>         
      </div>  
      <?php }} ?>
      <div class="cart-total">
        <span class="heading-total">Total Item</span><br><br>
        <span class="heading-total">Total </span> 
      </div>   
    </div>
    <a href="#" class="btn btn-update">Update cart</a>
  </div>    
</div>
  
