<div class="row">
          <div class="col-md-3">            
            <h3><a>Home</a> <i class="fa fa-angle-right fa-custom"></i> <a href="">bac</a></h3>           
          </div>
          <div class="col-md-9">  
            <div class="left-pagination-section">              
              <div class="category-pagination left-active">
                <a class="firt_short" href="#">Newest</a>
                <a href="#">Popular</a>
                <a href="#">Low Price</a>
                <a class="last_short active" href="#">High Price</a>
              </div>
              <div class="category-pagination right-pagination-section right-active">
                <a  href="#"><i class="fa fa-chevron-left"></i></a>
                <a class="active" href="#">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
                <a href="#">...</a>
                <a href="#">6</a>
                <a href="#"><i class="fa fa-chevron-right"></i></a>
              </div>
            </div>
          </div>          
        </div>
        <div class="toolbox">                    
        </div>        
        <div class="row product-section">  
                 
         <?php if (!empty($product)) {
           foreach ($product as $key => $value) { ?>
            <div class="col-xl-3 col-md-4 col-sm-4 col-xs-12" >
              <div class="product-box">
                <img class="product-image" src="http://desktop-backgrounds-org.s3.amazonaws.com/400x300/twitter-nature-high-definition.jpg">              
                <div class="text-center">                
                  <p class="main-product-name">Product Name</p>
                  <p class="product-description">Product Description</p>
                </div>
                <div class="product-price-category">                                      
                  <span class="offer-price-text">10% off</span>
                  <p class="product-sell-price">200</p>

                  <button class="btn-default add-cart-button-category">ADD</button>
                  <div class="def-number-input number-input safari_only add-quantity  add-quantity-category hide-button">
                    <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
                    <input class="quantity" min="0" name="quantity" value="1" type="number">
                    <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                  </div>
                </div> 
              </div>
            </div>
          <?php }
         } ?>
<?php echo $pagination; ?> 
        </div>

 