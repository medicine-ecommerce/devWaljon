<div class="row">
          <div class="col-md-3">            
            <h3><a>Home</a> <i class="fa fa-angle-right fa-custom"></i> <a href="">bac</a></h3>           
          </div>
          <div class="col-md-9">  
            <div class="left-pagination-section">              
              <div class="category-pagination left-active">
                <a class="firt_short active" href="#" onclick="sortBy('newest')">Newest</a>
                <a href="#" onclick="sortBy('newest')">Popular</a>
                <a href="#" onclick="sortBy('lowest')">Low Price</a>
                <a class="last_short " href="#" onclick="sortBy('highest')">High Price</a>
              </div>
              <!-- <div class="category-pagination right-pagination-section right-active">
                <a  href="#"><i class="fa fa-chevron-left"></i></a>
                <a class="active" href="#">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
                <a href="#">...</a>
                <a href="#">6</a>
                <a href="#"><i class="fa fa-chevron-right"></i></a>
              </div> -->
            </div>
          </div>          
        </div>
        <div class="toolbox">                    
        </div>        
        <div class="row product-section">  
                 
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

 