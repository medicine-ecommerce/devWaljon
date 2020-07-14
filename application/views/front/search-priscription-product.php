<?php 
if(!empty($productOne)){
foreach ($productOne as $key => $value) { ?>
<div class="row">
	<div class="col-md-8">
	  <h5><?= $value->name; ?>  </h5>
	  <p></p>
	  <p class="tablet-count"><?= $value->category_name; ?> </p>
	</div>
	<div class="col-md-4">
	  <p class="medicine-price">MRP <strong><i class="fa fa-rupee"></i> <?= $value->sale_price; ?></strong></p>
	  <p class="medicine-price"><span class="offer-tag"><?= $value->offerprice; ?>% off</span> <span>MRP <s><i class="fa fa-rupee"></i><?= $value->mrp; ?></s></span></p>
	  <div class="product-price-block">                  	     
	    <button class="btn-default add-cart-button" onclick="addToCart(<?= $value->id ?>,'slider')">ADD</button>
	    <div class="def-number-input number-input safari_only add-quantity hide-button">
	      <button onclick="this.parentNode.querySelector('input[type=number]').stepDown(); updateCart(<?= $value->id; ?>,this.parentNode.querySelector('input[value]'),'minus')" class="minus"></button>
	      <input class="quantity" min="0" value="1" name="quantity" type="number">
	      <button onclick="this.parentNode.querySelector('input[type=number]').stepUp(); updateCart(<?= $value->id; ?>,this.parentNode.querySelector('input[value]'),'plus')" class="plus"></button>
	    </div>
	  </div>	 
	</div>
	</div>
	<hr>
</div>
<?php } }else{
	echo "<p class='not-found-product'>Product not found</p>";
} ?>


<script type="text/javascript">  

$(document).ready(function(){
  $('.add-cart-button').click(function(){        
    $(this).addClass("hide-button");
    $(this).siblings("div").removeClass("hide-button");
    $(this).siblings("input").val("1");
    // $(this).siblings("div").addClass("show-button");

  });
  $('.minus').click(function(){        
    if($(this).siblings("input").val()==0){          
      $(this).parent().addClass("hide-button");
      $(this).parents('.product-price-block').find(".add-cart-button").addClass("show-button");
      $(this).parents('.product-price-block').find(".add-cart-button").removeClass("hide-button");
      $(this).siblings("input").val("1");
    }
  })
  
})

</script>