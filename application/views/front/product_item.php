        
                 
         <?php if (!empty($product)) {
           foreach ($product as $key => $value) {   ?>
            <div class="col-xl-3 col-md-4 col-sm-4 col-xs-12" >
              <div class="product-box">
                <img class="product-image" src="<?php echo ($value->product_image) ? base_url($value->product_image):'http://desktop-backgrounds-org.s3.amazonaws.com/400x300/twitter-nature-high-definition.jpg'?>">              
                <div class="text-center">                
                  <p class="main-product-name"><?php echo $value->product_name;?></p>
                  <p class="product-description"><?php echo $value->about_product;?></p>
                </div>
                <div class="product-price-category">
                  <?php echo ($value->offerprice > 0)?'<span class="offer-price-text">'.$value->offerprice.'% off</span>':'';?>
                  <p class="product-sell-price"><?php echo $value->sale_price;?></p>

                  <button class="btn-default add-cart-button-category" onclick="addToCart(<?= $value->product_id ?>)">ADD</button>
                  <div class="def-number-input number-input safari_only add-quantity  add-quantity-category hide-button">
                    <button onclick="this.parentNode.querySelector('input[type=number]').stepDown(); updateCart(<?= $value->product_id; ?>,this.parentNode.querySelector('input[value]'))" class="minus"></button>
                    <input class="quantity" min="0" name="quantity" value="1" type="number">
                    <button onclick="this.parentNode.querySelector('input[type=number]').stepUp(); updateCart(<?= $value->product_id; ?>,this.parentNode.querySelector('input[value]'))" class="plus"></button>
                  </div>
                </div> 
              </div>
            </div>
          <?php }
         } ?>

        </div>
        <?php echo $pagination; ?> 


<script>


  /*var acc = document.getElementsByClassName("accordion");
  var i;

  for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
      this.classList.toggle("active");
      var panel = this.nextElementSibling;
      if (panel.style.display === "block") {
        panel.style.display = "none";
      } else {
        panel.style.display = "block";
      }
    });
  }*/

  $(document).ready(function(){      
      $('.add-cart-button-category').click(function(){
        $(this).addClass("hide-button");
        $(this).siblings("div").removeClass("hide-button");
        // $(this).siblings("div").addClass("show-button");

      });
      $('.minus').click(function(){        
        if($(this).siblings("input").val()==0){          
          $(this).parent().addClass("hide-button");
          $(this).parents('.product-price-category').find(".add-cart-button-category").addClass("show-button");
          $(this).parents('.product-price-category').find(".add-cart-button-category").removeClass("hide-button");
          $(this).siblings("input").val("1");
        }
      })
      
      
    });
</script>

 