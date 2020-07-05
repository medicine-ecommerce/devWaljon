	
  <div class="main-page-container">   
  	<div class="main-slider-top">
		<div class="owl-slider">
	      <div id="carousel" class="owl-carousel banner-slider">
          <?php if (!empty($banner)) {
            foreach ($banner as $key => $value) { ?>
              <div class="item">
                <img class="owl-lazy mains-slider" data-src="<?php echo base_url('assets/banner-images/'.$value->image);  ?>" alt="" >
              </div>
            <?php }
          } ?>      
	      </div>
	    </div>		
		<div class="brand-section">  
		    <div class="brand-heading">
		      <h3 style="color: #545c5e;">
		        <img src="<?php echo base_url('assets/icon/heartrate_for_left.png');  ?>"> Features Brands <img src="<?php echo base_url('assets/icon/heartrate_for_right.png');  ?>">
		      </h3>
		    </div>
		    <div class="brand-slider">
		      <div class="owl-slider remove-dots">
		        <div id="carousel2" class="owl-carousel remove-dots">
              <?php if (!empty($brand)) {
                foreach ($brand as $key => $value) { ?>
                  <div class="item">
                    <img class="owl-lazy" data-src="<?php echo base_url('assets/brand-images/'.$value->brand_img);?>" alt="">
                  </div>
              <?php  }
              } ?><!-- 
		          
		          <div class="item">
		            <img class="owl-lazy" data-src="http://desktop-backgrounds-org.s3.amazonaws.com/400x300/twitter-nature-high-definition.jpg" alt="">
		          </div>
		          <div class="item">
		            <img class="owl-lazy" data-src="https://i.pinimg.com/originals/84/67/26/846726299dc5abbeb5d60016f0fb32e9.jpg" alt="">
		          </div>
		          <div class="item">
		            <img class="owl-lazy" data-src="http://desktop-backgrounds-org.s3.amazonaws.com/400x300/twitter-nature-high-definition.jpg" alt="">
		          </div>
		            <div class="item">
		            <img class="owl-lazy" data-src="https://i.pinimg.com/originals/84/67/26/846726299dc5abbeb5d60016f0fb32e9.jpg" alt="">
		          </div>
		          <div class="item">
		            <img class="owl-lazy" data-src="http://desktop-backgrounds-org.s3.amazonaws.com/400x300/twitter-nature-high-definition.jpg" alt="">
		          </div>
		          <div class="item">
		            <img class="owl-lazy" data-src="https://i.pinimg.com/originals/84/67/26/846726299dc5abbeb5d60016f0fb32e9.jpg" alt="">
		          </div>
		          <div class="item">
		            <img class="owl-lazy" data-src="http://desktop-backgrounds-org.s3.amazonaws.com/400x300/twitter-nature-high-definition.jpg" alt="">
		          </div>
		            <div class="item">
		            <img class="owl-lazy" data-src="https://i.pinimg.com/originals/84/67/26/846726299dc5abbeb5d60016f0fb32e9.jpg" alt="">
		          </div>
		          <div class="item">
		            <img class="owl-lazy" data-src="http://desktop-backgrounds-org.s3.amazonaws.com/400x300/twitter-nature-high-definition.jpg" alt="">
		          </div> -->
		        </div>
		      </div>
		    </div>
		</div>
	    <div class="icon-slider-section">
	    	<div class="icon-heading-section">	    		
	      		<h4><img src="<?php echo base_url('assets/icon/heartrate_for_left_white.png');  ?>">  Shop By Health Concens  <img src="<?php echo base_url('assets/icon/heartrate_for_right_white.png');  ?>"></h4>
	    	</div>

	      <div class="owl-slider icon-slider" >
	        <div id="carousel3" class="owl-carousel icon-slider remove-dots" >
	          <div class="item">
	            <img class="owl-lazy icon-slider " data-src="<?php echo base_url('assets/icon/icon_white_cardiac.png');  ?>" alt="">
	          </div>
	          <div class="item">
	            <img class="owl-lazy icon-slider" data-src="<?php echo base_url('assets/icon/icon_white_diabetes.png');  ?>" alt="">
	          </div>
	          <div class="item">
	            <img class="owl-lazy icon-slider" data-src="<?php echo base_url('assets/icon/icon_white_eye.png');  ?>" alt="">
	          </div>
	          <div class="item">
	            <img class="owl-lazy icon-slider" data-src="<?php echo base_url('assets/icon/icon_white_jointpain.png');  ?>" alt="">
	          </div>
	            <div class="item">
	            <img class="owl-lazy icon-slider" data-src="<?php echo base_url('assets/icon/icon_white_kidney.png');  ?>" alt="">
	          </div>
	          <div class="item">
	            <img class="owl-lazy icon-slider" data-src="<?php echo base_url('assets/icon/icon_white_liver.png');  ?>" alt="">
	          </div>
	          <div class="item">
	            <img class="owl-lazy icon-slider" data-src="<?php echo base_url('assets/icon/icon_white_personal.png');  ?>" alt="">
	          </div>
	          <div class="item">
	            <img class="owl-lazy icon-slider" data-src="<?php echo base_url('assets/icon/icon_white_stomach.png');  ?>" alt="">
	          </div>
	        </div>
	      </div>
	    </div>
	</div>
    <div class="countdown-section">
      <div class="countdown-section-heading text-center">
        <span><img src="<?php echo base_url('assets/icon/heartrate_for_left.png');  ?>"> Features Brands <img src="<?php echo base_url('assets/icon/heartrate_for_right.png');  ?>"></span>
      </div>
      <div class="row offer-block">
        <div class="col-md-6 offer-block text-center">
          <h3>Get 0 - 70% Discount</h3>
          <p class="help-text">On all types of medicines </p>


          <p class="deal-text">Deal of the Day Ends</p>
          
          <div class="countdown-clock">
            <p id="demo" class="countdown-text"></p>
            <button class="countdown-button">Order Now</button>
          </div>
        </div>
        <div class="col-md-6">
          
        </div>
        
      </div>
      
      <!-- <img src="<?php echo base_url('assets/slider-image/offers_jpg2.jpg');  ?>" class="count-down-image"> -->  
    </div>
    <div class="product-slider-section"> 
    <?php if (!empty($product)) {
      foreach ($product as $key => $value) { ?>
        <div class="product-slider-block slider-arrow">        
          <div class="row product-heading">
            <div class="col-md-6 title-section">            
              <img src="<?php echo base_url('assets/icon/icon_new_arrivals.png');  ?>" >
              <h4 class="product-heading-h4"><?php echo $value['category_name']; ?></h4>
            </div>
            <div class="col-md-6 all-section">            
              <a href=""><span class="product-heading-all">View All</span></a>            
            </div>
          </div>
          <div class="product-slider">
            <div class="owl-slider product-slider" >
              <div id="carousel<?php echo $key; ?>" class="owl-carousel product-slider" >
                <?php foreach ($value['category_product'] as $key => $value) { ?>
                  <div class="item">
                    <div class="product-main-block">
                      <div class="product-block">  
                        <div class="product-image-section">                      
                          <a href="<?php echo base_url('user/product/'.base64_encode($value->product_id)); ?>">
                            <img src="<?php echo (!empty($value->image))?base_url($value->image):base_url('assets/front/images/best_2.png');  ?>" >
                          </a>
                        </div>
                        <div class="shape">
                          <span class="offer-text">10% </span><span class="off-text">Off</span>
                        </div>
                        <div class="product-description-section">                      
                          <p class="main-product-name"><a href="<?php echo base_url('user/product/'.base64_encode($value->product_id)); ?>"><?php echo $value->name; ?></a></p>
                          <hr class="inside-form-hr">
                          <span><?php echo $value->product_form; ?></span> 
                        </div>
                      </div>                  
                      <div class="product-price-block">                  
                         <span><i class="fa fa-inr" aria-hidden="true"></i> <?php echo $value->sale_price; ?></span> 
                        <button class="btn-default add-cart-button" onclick="addToCart(<?= $value->product_id ?>)">ADD</button>
                        <div class="def-number-input number-input safari_only add-quantity hide-button">
                          <button onclick="this.parentNode.querySelector('input[type=number]').stepDown(); updateCart(<?= $value->product_id; ?>,this.parentNode.querySelector('input[value]'),'minus')" class="minus"></button>
                          <input class="quantity" min="0" value="1" name="quantity" type="number">
                          <button onclick="this.parentNode.querySelector('input[type=number]').stepUp(); updateCart(<?= $value->product_id; ?>,this.parentNode.querySelector('input[value]'),'plus')" class="plus"></button>
                        </div>
                      </div>                  
                    </div>               
                  </div>
                <?php } ?>
                
                <!-- <div class="item">
                  <div class="product-main-block">
                    <div class="product-block">  
                      <div class="product-image-section">                      
                        <img src="<?php echo base_url('assets/front/images/best_2.png');  ?>" >
                      </div>
                      <div class="shape">
                        <span class="offer-text">10% </span><span class="off-text">Off</span>
                      </div>
                      <div class="product-description-section">                      
                        <p>product name this is given and 900gm</p>
                        <hr class="inside-form-hr">
                        <span>Liquid</span> 
                      </div>
                    </div>                  
                    <div class="product-price-block">                  
                       <span><i class="fa fa-inr" aria-hidden="true"></i> 198</span> 
                      <button class="btn-default add-cart-button">ADD</button>
                      <div class="def-number-input number-input safari_only add-quantity hide-button">
                        <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
                        <input class="quantity" min="0" name="quantity" value="1" type="number">
                        <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                      </div>
                    </div>                  
                  </div>
                </div>
                <div class="item">
                  <div class="product-main-block">
                    <div class="product-block">  
                      <div class="product-image-section">                      
                        <img src="<?php echo base_url('assets/front/images/best_2.png');  ?>" >
                      </div>
                      <div class="shape">
                        <span class="offer-text">10% </span><span class="off-text">Off</span>
                      </div>
                      <div class="product-description-section">                      
                        <p>product name this is given and 900gm</p>
                        <hr class="inside-form-hr">
                        <span>Liquid</span> 
                      </div>
                    </div>                  
                    <div class="product-price-block">                  
                       <span><i class="fa fa-inr" aria-hidden="true"></i> 198</span> 
                      <button class="btn-default add-cart-button">ADD</button>
                      <div class="def-number-input number-input safari_only add-quantity hide-button">
                        <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
                        <input class="quantity" min="0" name="quantity" value="1" type="number">
                        <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                      </div>
                    </div>                  
                  </div>
                </div>
                <div class="item">
                  <div class="product-main-block">
                    <div class="product-block">  
                      <div class="product-image-section">                      
                        <img src="<?php echo base_url('assets/front/images/best_2.png');  ?>" >
                      </div>
                      <div class="shape">
                        <span class="offer-text">10% </span><span class="off-text">Off</span>
                      </div>
                      <div class="product-description-section">                      
                        <p>product name this is given and 900gm</p>
                        <hr class="inside-form-hr">
                        <span>Liquid</span> 
                      </div>
                    </div>                  
                    <div class="product-price-block">                  
                       <span><i class="fa fa-inr" aria-hidden="true"></i> 198</span> 
                      <button class="btn-default add-cart-button">ADD</button>
                      <div class="def-number-input number-input safari_only add-quantity hide-button">
                        <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
                        <input class="quantity" min="0" name="quantity" value="1" type="number">
                        <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                      </div>
                    </div>                  
                  </div>
                </div>
                <div class="item">
                  <div class="product-main-block">
                    <div class="product-block">  
                      <div class="product-image-section">                      
                        <img src="<?php echo base_url('assets/front/images/best_2.png');  ?>" >
                      </div>
                      <div class="shape">
                        <span class="offer-text">10% </span><span class="off-text">Off</span>
                      </div>
                      <div class="product-description-section">                      
                        <p>product name this is given and 900gm</p>
                        <hr class="inside-form-hr">
                        <span>Liquid</span> 
                      </div>
                    </div>                  
                    <div class="product-price-block">                  
                       <span><i class="fa fa-inr" aria-hidden="true"></i> 198</span> 
                      <button class="btn-default add-cart-button">ADD</button>
                      <div class="def-number-input number-input safari_only add-quantity hide-button">
                        <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
                        <input class="quantity" min="0" name="quantity" value="1" type="number">
                        <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                      </div>
                    </div>                  
                  </div>
                </div>
                <div class="item">
                  <div class="product-main-block">
                    <div class="product-block">  
                      <div class="product-image-section">                      
                        <img src="<?php echo base_url('assets/front/images/best_2.png');  ?>" >
                      </div>
                      <div class="shape">
                        <span class="offer-text">10% </span><span class="off-text">Off</span>
                      </div>
                      <div class="product-description-section">                      
                        <p>product name this is given and 900gm</p>
                        <hr class="inside-form-hr">
                        <span>Liquid</span> 
                      </div>
                    </div>                  
                    <div class="product-price-block">                  
                       <span><i class="fa fa-inr" aria-hidden="true"></i> 198</span> 
                      <button class="btn-default add-cart-button">ADD</button>
                      <div class="def-number-input number-input safari_only add-quantity hide-button">
                        <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
                        <input class="quantity" min="0" name="quantity" value="1" type="number">
                        <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                      </div>
                    </div>                  
                  </div>
                </div>
                <div class="item">
                  <div class="product-main-block">
                    <div class="product-block">  
                      <div class="product-image-section">                      
                        <img src="<?php echo base_url('assets/front/images/best_2.png');  ?>" >
                      </div>
                      <div class="shape">
                        <span class="offer-text">10% </span><span class="off-text">Off</span>
                      </div>
                      <div class="product-description-section">                      
                        <p>product name this is given and 900gm</p>
                        <hr class="inside-form-hr">
                        <span>Liquid</span> 
                      </div>
                    </div>                  
                    <div class="product-price-block">                  
                       <span><i class="fa fa-inr" aria-hidden="true"></i> 198</span> 
                      <button class="btn-default add-cart-button">ADD</button>
                      <div class="def-number-input number-input safari_only add-quantity hide-button">
                        <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
                        <input class="quantity" min="0" name="quantity" value="1" type="number">
                        <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                      </div>
                    </div>                  
                  </div>
                </div>
                <div class="item">
                  <div class="product-main-block">
                    <div class="product-block">  
                      <div class="product-image-section">                      
                        <img src="<?php echo base_url('assets/front/images/best_2.png');  ?>" >
                      </div>
                      <div class="shape">
                        <span class="offer-text">10% </span><span class="off-text">Off</span>
                      </div>
                      <div class="product-description-section">                      
                        <p>product name this is given and 900gm</p>
                        <hr class="inside-form-hr">
                        <span>Liquid</span> 
                      </div>
                    </div>                  
                    <div class="product-price-block">                  
                       <span><i class="fa fa-inr" aria-hidden="true"></i> 198</span> 
                      <button class="btn-default add-cart-button">ADD</button>
                      <div class="def-number-input number-input safari_only add-quantity hide-button">
                        <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
                        <input class="quantity" min="0" name="quantity" value="1" type="number">
                        <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                      </div>
                    </div>                  
                  </div>
                </div>
                <div class="item">
                  <div class="product-main-block">
                    <div class="product-block">  
                      <div class="product-image-section">                      
                        <img src="<?php echo base_url('assets/front/images/best_2.png');  ?>" >
                      </div>
                      <div class="shape">
                        <span class="offer-text">10% </span><span class="off-text">Off</span>
                      </div>
                      <div class="product-description-section">                      
                        <p>product name this is given and 900gm</p>
                        <hr class="inside-form-hr">
                        <span>Liquid</span> 
                      </div>
                    </div>                  
                    <div class="product-price-block">                  
                       <span><i class="fa fa-inr" aria-hidden="true"></i> 198</span> 
                      <button class="btn-default add-cart-button">ADD</button>
                      <div class="def-number-input number-input safari_only add-quantity hide-button">
                        <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
                        <input class="quantity" min="0" name="quantity" value="1" type="number">
                        <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                      </div>
                    </div>                  
                  </div>
                </div>
                <div class="item">
                  <div class="product-main-block">
                    <div class="product-block">  
                      <div class="product-image-section">                      
                        <img src="<?php echo base_url('assets/front/images/best_2.png');  ?>" >
                      </div>
                      <div class="shape">
                        <span class="offer-text">10% </span><span class="off-text">Off</span>
                      </div>
                      <div class="product-description-section">                      
                        <p>product name this is given and 900gm</p>
                        <hr class="inside-form-hr">
                        <span>Liquid</span> 
                      </div>
                    </div>                  
                    <div class="product-price-block">                  
                       <span><i class="fa fa-inr" aria-hidden="true"></i> 198</span> 
                      <button class="btn-default add-cart-button">ADD</button>
                      <div class="def-number-input number-input safari_only add-quantity hide-button">
                        <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
                        <input class="quantity" min="0" name="quantity" value="1" type="number">
                        <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                      </div>
                    </div>                  
                  </div>
                </div> -->
              </div>
            </div>
          </div>
        </div>
    <?php  }
    } ?>     
      <!-- <div class="product-slider-block slider-arrow">        
        <div class="row product-heading">
          <div class="col-md-6 title-section">            
            <img src="<?php echo base_url('assets/icon/icon_new_arrivals.png');  ?>" >
            <h4 class="product-heading-h4">New Arrivals</h4>
          </div>
          <div class="col-md-6 all-section">            
            <a href=""><span class="product-heading-all">View All</span></a>            
          </div>
        </div>
        <div class="product-slider">
          <div class="owl-slider product-slider" >
            <div id="carousel4" class="owl-carousel product-slider" >
              <div class="item">
                <div class="product-main-block">
                  <div class="product-block">  
                    <div class="product-image-section">                      
                      <img src="<?php echo base_url('assets/front/images/best_2.png');  ?>" >
                    </div>
                    <div class="shape">
                      <span class="offer-text">10% </span><span class="off-text">Off</span>
                    </div>
                    <div class="product-description-section">                      
                      <p>product name this is given and 900gm</p>
                      <hr class="inside-form-hr">
                      <span>Liquid</span> 
                    </div>
                  </div>                  
                  <div class="product-price-block">                  
                     <span><i class="fa fa-inr" aria-hidden="true"></i> 198</span> 
                    <button class="btn-default add-cart-button">ADD</button>
                    <div class="def-number-input number-input safari_only add-quantity hide-button">
                      <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
                      <input class="quantity" min="0" name="quantity" type="number">
                      <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                    </div>
                  </div>                  
                </div>               
              </div>
              <div class="item">
                <div class="product-main-block">
                  <div class="product-block">  
                    <div class="product-image-section">                      
                      <img src="<?php echo base_url('assets/front/images/best_2.png');  ?>" >
                    </div>
                    <div class="shape">
                      <span class="offer-text">10% </span><span class="off-text">Off</span>
                    </div>
                    <div class="product-description-section">                      
                      <p>product name this is given and 900gm</p>
                      <hr class="inside-form-hr">
                      <span>Liquid</span> 
                    </div>
                  </div>                  
                  <div class="product-price-block">                  
                     <span><i class="fa fa-inr" aria-hidden="true"></i> 198</span> 
                    <button class="btn-default add-cart-button">ADD</button>
                    <div class="def-number-input number-input safari_only add-quantity hide-button">
                      <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
                      <input class="quantity" min="0" name="quantity" value="1" type="number">
                      <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                    </div>
                  </div>                  
                </div>
              </div>
              <div class="item">
                <div class="product-main-block">
                  <div class="product-block">  
                    <div class="product-image-section">                      
                      <img src="<?php echo base_url('assets/front/images/best_2.png');  ?>" >
                    </div>
                    <div class="shape">
                      <span class="offer-text">10% </span><span class="off-text">Off</span>
                    </div>
                    <div class="product-description-section">                      
                      <p>product name this is given and 900gm</p>
                      <hr class="inside-form-hr">
                      <span>Liquid</span> 
                    </div>
                  </div>                  
                  <div class="product-price-block">                  
                     <span><i class="fa fa-inr" aria-hidden="true"></i> 198</span> 
                    <button class="btn-default add-cart-button">ADD</button>
                    <div class="def-number-input number-input safari_only add-quantity hide-button">
                      <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
                      <input class="quantity" min="0" name="quantity" value="1" type="number">
                      <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                    </div>
                  </div>                  
                </div>
              </div>
              <div class="item">
                <div class="product-main-block">
                  <div class="product-block">  
                    <div class="product-image-section">                      
                      <img src="<?php echo base_url('assets/front/images/best_2.png');  ?>" >
                    </div>
                    <div class="shape">
                      <span class="offer-text">10% </span><span class="off-text">Off</span>
                    </div>
                    <div class="product-description-section">                      
                      <p>product name this is given and 900gm</p>
                      <hr class="inside-form-hr">
                      <span>Liquid</span> 
                    </div>
                  </div>                  
                  <div class="product-price-block">                  
                     <span><i class="fa fa-inr" aria-hidden="true"></i> 198</span> 
                    <button class="btn-default add-cart-button">ADD</button>
                    <div class="def-number-input number-input safari_only add-quantity hide-button">
                      <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
                      <input class="quantity" min="0" name="quantity" value="1" type="number">
                      <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                    </div>
                  </div>                  
                </div>
              </div>
              <div class="item">
                <div class="product-main-block">
                  <div class="product-block">  
                    <div class="product-image-section">                      
                      <img src="<?php echo base_url('assets/front/images/best_2.png');  ?>" >
                    </div>
                    <div class="shape">
                      <span class="offer-text">10% </span><span class="off-text">Off</span>
                    </div>
                    <div class="product-description-section">                      
                      <p>product name this is given and 900gm</p>
                      <hr class="inside-form-hr">
                      <span>Liquid</span> 
                    </div>
                  </div>                  
                  <div class="product-price-block">                  
                     <span><i class="fa fa-inr" aria-hidden="true"></i> 198</span> 
                    <button class="btn-default add-cart-button">ADD</button>
                    <div class="def-number-input number-input safari_only add-quantity hide-button">
                      <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
                      <input class="quantity" min="0" name="quantity" value="1" type="number">
                      <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                    </div>
                  </div>                  
                </div>
              </div>
              <div class="item">
                <div class="product-main-block">
                  <div class="product-block">  
                    <div class="product-image-section">                      
                      <img src="<?php echo base_url('assets/front/images/best_2.png');  ?>" >
                    </div>
                    <div class="shape">
                      <span class="offer-text">10% </span><span class="off-text">Off</span>
                    </div>
                    <div class="product-description-section">                      
                      <p>product name this is given and 900gm</p>
                      <hr class="inside-form-hr">
                      <span>Liquid</span> 
                    </div>
                  </div>                  
                  <div class="product-price-block">                  
                     <span><i class="fa fa-inr" aria-hidden="true"></i> 198</span> 
                    <button class="btn-default add-cart-button">ADD</button>
                    <div class="def-number-input number-input safari_only add-quantity hide-button">
                      <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
                      <input class="quantity" min="0" name="quantity" value="1" type="number">
                      <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                    </div>
                  </div>                  
                </div>
              </div>
              <div class="item">
                <div class="product-main-block">
                  <div class="product-block">  
                    <div class="product-image-section">                      
                      <img src="<?php echo base_url('assets/front/images/best_2.png');  ?>" >
                    </div>
                    <div class="shape">
                      <span class="offer-text">10% </span><span class="off-text">Off</span>
                    </div>
                    <div class="product-description-section">                      
                      <p>product name this is given and 900gm</p>
                      <hr class="inside-form-hr">
                      <span>Liquid</span> 
                    </div>
                  </div>                  
                  <div class="product-price-block">                  
                     <span><i class="fa fa-inr" aria-hidden="true"></i> 198</span> 
                    <button class="btn-default add-cart-button">ADD</button>
                    <div class="def-number-input number-input safari_only add-quantity hide-button">
                      <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
                      <input class="quantity" min="0" name="quantity" value="1" type="number">
                      <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                    </div>
                  </div>                  
                </div>
              </div>
              <div class="item">
                <div class="product-main-block">
                  <div class="product-block">  
                    <div class="product-image-section">                      
                      <img src="<?php echo base_url('assets/front/images/best_2.png');  ?>" >
                    </div>
                    <div class="shape">
                      <span class="offer-text">10% </span><span class="off-text">Off</span>
                    </div>
                    <div class="product-description-section">                      
                      <p>product name this is given and 900gm</p>
                      <hr class="inside-form-hr">
                      <span>Liquid</span> 
                    </div>
                  </div>                  
                  <div class="product-price-block">                  
                     <span><i class="fa fa-inr" aria-hidden="true"></i> 198</span> 
                    <button class="btn-default add-cart-button">ADD</button>
                    <div class="def-number-input number-input safari_only add-quantity hide-button">
                      <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
                      <input class="quantity" min="0" name="quantity" value="1" type="number">
                      <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                    </div>
                  </div>                  
                </div>
              </div>
              <div class="item">
                <div class="product-main-block">
                  <div class="product-block">  
                    <div class="product-image-section">                      
                      <img src="<?php echo base_url('assets/front/images/best_2.png');  ?>" >
                    </div>
                    <div class="shape">
                      <span class="offer-text">10% </span><span class="off-text">Off</span>
                    </div>
                    <div class="product-description-section">                      
                      <p>product name this is given and 900gm</p>
                      <hr class="inside-form-hr">
                      <span>Liquid</span> 
                    </div>
                  </div>                  
                  <div class="product-price-block">                  
                     <span><i class="fa fa-inr" aria-hidden="true"></i> 198</span> 
                    <button class="btn-default add-cart-button">ADD</button>
                    <div class="def-number-input number-input safari_only add-quantity hide-button">
                      <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
                      <input class="quantity" min="0" name="quantity" value="1" type="number">
                      <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                    </div>
                  </div>                  
                </div>
              </div>
              <div class="item">
                <div class="product-main-block">
                  <div class="product-block">  
                    <div class="product-image-section">                      
                      <img src="<?php echo base_url('assets/front/images/best_2.png');  ?>" >
                    </div>
                    <div class="shape">
                      <span class="offer-text">10% </span><span class="off-text">Off</span>
                    </div>
                    <div class="product-description-section">                      
                      <p>product name this is given and 900gm</p>
                      <hr class="inside-form-hr">
                      <span>Liquid</span> 
                    </div>
                  </div>                  
                  <div class="product-price-block">                  
                     <span><i class="fa fa-inr" aria-hidden="true"></i> 198</span> 
                    <button class="btn-default add-cart-button">ADD</button>
                    <div class="def-number-input number-input safari_only add-quantity hide-button">
                      <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
                      <input class="quantity" min="0" name="quantity" value="1" type="number">
                      <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                    </div>
                  </div>                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="winter-section slider-arrow">
        <div class="row product-heading winter-heading">
          <div class="col-md-6 title-section">            
            <img src="<?php echo base_url('assets/icon/icon_winter.png');  ?>" >
            <h4 class="product-heading-h4">Winter</h4>
          </div>
          <div class="col-md-6 all-section">            
            <a href=""><span class="product-heading-all">View All</span></a>            
          </div>
        </div>
        <div class="product-slider">
            <div class="owl-slider product-slider" >
              <div id="carousel5" class="owl-carousel product-slider" >
                <div class="item">
                  <div class="product-main-block">
                    <div class="product-block">  
                      <div class="product-image-section">                      
                        <img src="<?php echo base_url('assets/front/images/best_2.png');  ?>" >
                      </div>
                      <div class="shape">
                        <span class="offer-text">10% </span><span class="off-text">Off</span>
                      </div>
                      <div class="product-description-section">                      
                        <p>product name this is given and 900gm</p>
                        <hr class="inside-form-hr">
                        <span>Liquid</span> 
                      </div>
                    </div>                  
                    <div class="product-price-block">                  
                       <span><i class="fa fa-inr" aria-hidden="true"></i> 198</span> 
                      <button class="btn-default add-cart-button">ADD</button>
                      <div class="def-number-input number-input safari_only add-quantity hide-button">
                        <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
                        <input class="quantity" min="0" name="quantity" value="1" type="number">
                        <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                      </div>
                    </div>                  
                  </div>               
                </div>
                <div class="item">
                  <div class="product-main-block">
                    <div class="product-block">  
                      <div class="product-image-section">                      
                        <img src="<?php echo base_url('assets/front/images/best_2.png');  ?>" >
                      </div>
                      <div class="shape">
                        <span class="offer-text">10% </span><span class="off-text">Off</span>
                      </div>
                      <div class="product-description-section">                      
                        <p>product name this is given and 900gm</p>
                        <hr class="inside-form-hr">
                        <span>Liquid</span> 
                      </div>
                    </div>                  
                    <div class="product-price-block">                  
                       <span><i class="fa fa-inr" aria-hidden="true"></i> 198</span> 
                      <button class="btn-default add-cart-button">ADD</button>
                      <div class="def-number-input number-input safari_only add-quantity hide-button">
                        <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
                        <input class="quantity" min="0" name="quantity" value="1" type="number">
                        <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                      </div>
                    </div>                  
                  </div>
                </div>
                <div class="item">
                  <div class="product-main-block">
                    <div class="product-block">  
                      <div class="product-image-section">                      
                        <img src="<?php echo base_url('assets/front/images/best_2.png');  ?>" >
                      </div>
                      <div class="shape">
                        <span class="offer-text">10% </span><span class="off-text">Off</span>
                      </div>
                      <div class="product-description-section">                      
                        <p>product name this is given and 900gm</p>
                        <hr class="inside-form-hr">
                        <span>Liquid</span> 
                      </div>
                    </div>                  
                    <div class="product-price-block">                  
                       <span><i class="fa fa-inr" aria-hidden="true"></i> 198</span> 
                      <button class="btn-default add-cart-button">ADD</button>
                      <div class="def-number-input number-input safari_only add-quantity hide-button">
                        <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
                        <input class="quantity" min="0" name="quantity" value="1" type="number">
                        <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                      </div>
                    </div>                  
                  </div>
                </div>
                <div class="item">
                  <div class="product-main-block">
                    <div class="product-block">  
                      <div class="product-image-section">                      
                        <img src="<?php echo base_url('assets/front/images/best_2.png');  ?>" >
                      </div>
                      <div class="shape">
                        <span class="offer-text">10% </span><span class="off-text">Off</span>
                      </div>
                      <div class="product-description-section">                      
                        <p>product name this is given and 900gm</p>
                        <hr class="inside-form-hr">
                        <span>Liquid</span> 
                      </div>
                    </div>                  
                    <div class="product-price-block">                  
                       <span><i class="fa fa-inr" aria-hidden="true"></i> 198</span> 
                      <button class="btn-default add-cart-button">ADD</button>
                      <div class="def-number-input number-input safari_only add-quantity hide-button">
                        <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
                        <input class="quantity" min="0" name="quantity" value="1" type="number">
                        <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                      </div>
                    </div>                  
                  </div>
                </div>
                <div class="item">
                  <div class="product-main-block">
                    <div class="product-block">  
                      <div class="product-image-section">                      
                        <img src="<?php echo base_url('assets/front/images/best_2.png');  ?>" >
                      </div>
                      <div class="shape">
                        <span class="offer-text">10% </span><span class="off-text">Off</span>
                      </div>
                      <div class="product-description-section">                      
                        <p>product name this is given and 900gm</p>
                        <hr class="inside-form-hr">
                        <span>Liquid</span> 
                      </div>
                    </div>                  
                    <div class="product-price-block">                  
                       <span><i class="fa fa-inr" aria-hidden="true"></i> 198</span> 
                      <button class="btn-default add-cart-button">ADD</button>
                      <div class="def-number-input number-input safari_only add-quantity hide-button">
                        <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
                        <input class="quantity" min="0" name="quantity" value="1" type="number">
                        <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                      </div>
                    </div>                  
                  </div>
                </div>
                <div class="item">
                  <div class="product-main-block">
                    <div class="product-block">  
                      <div class="product-image-section">                      
                        <img src="<?php echo base_url('assets/front/images/best_2.png');  ?>" >
                      </div>
                      <div class="shape">
                        <span class="offer-text">10% </span><span class="off-text">Off</span>
                      </div>
                      <div class="product-description-section">                      
                        <p>product name this is given and 900gm</p>
                        <hr class="inside-form-hr">
                        <span>Liquid</span> 
                      </div>
                    </div>                  
                    <div class="product-price-block">                  
                       <span><i class="fa fa-inr" aria-hidden="true"></i> 198</span> 
                      <button class="btn-default add-cart-button">ADD</button>
                      <div class="def-number-input number-input safari_only add-quantity hide-button">
                        <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
                        <input class="quantity" min="0" name="quantity" value="1" type="number">
                        <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                      </div>
                    </div>                  
                  </div>
                </div>
                <div class="item">
                  <div class="product-main-block">
                    <div class="product-block">  
                      <div class="product-image-section">                      
                        <img src="<?php echo base_url('assets/front/images/best_2.png');  ?>" >
                      </div>
                      <div class="shape">
                        <span class="offer-text">10% </span><span class="off-text">Off</span>
                      </div>
                      <div class="product-description-section">                      
                        <p>product name this is given and 900gm</p>
                        <hr class="inside-form-hr">
                        <span>Liquid</span> 
                      </div>
                    </div>                  
                    <div class="product-price-block">                  
                       <span><i class="fa fa-inr" aria-hidden="true"></i> 198</span> 
                      <button class="btn-default add-cart-button">ADD</button>
                      <div class="def-number-input number-input safari_only add-quantity hide-button">
                        <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
                        <input class="quantity" min="0" name="quantity" value="1" type="number">
                        <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                      </div>
                    </div>                  
                  </div>
                </div>
                <div class="item">
                  <div class="product-main-block">
                    <div class="product-block">  
                      <div class="product-image-section">                      
                        <img src="<?php echo base_url('assets/front/images/best_2.png');  ?>" >
                      </div>
                      <div class="shape">
                        <span class="offer-text">10% </span><span class="off-text">Off</span>
                      </div>
                      <div class="product-description-section">                      
                        <p>product name this is given and 900gm</p>
                        <hr class="inside-form-hr">
                        <span>Liquid</span> 
                      </div>
                    </div>                  
                    <div class="product-price-block">                  
                       <span><i class="fa fa-inr" aria-hidden="true"></i> 198</span> 
                      <button class="btn-default add-cart-button">ADD</button>
                      <div class="def-number-input number-input safari_only add-quantity hide-button">
                        <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
                        <input class="quantity" min="0" name="quantity" value="1" type="number">
                        <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                      </div>
                    </div>                  
                  </div>
                </div>
                <div class="item">
                  <div class="product-main-block">
                    <div class="product-block">  
                      <div class="product-image-section">                      
                        <img src="<?php echo base_url('assets/front/images/best_2.png');  ?>" >
                      </div>
                      <div class="shape">
                        <span class="offer-text">10% </span><span class="off-text">Off</span>
                      </div>
                      <div class="product-description-section">                      
                        <p>product name this is given and 900gm</p>
                        <hr class="inside-form-hr">
                        <span>Liquid</span> 
                      </div>
                    </div>                  
                    <div class="product-price-block">                  
                       <span><i class="fa fa-inr" aria-hidden="true"></i> 198</span> 
                      <button class="btn-default add-cart-button">ADD</button>
                      <div class="def-number-input number-input safari_only add-quantity hide-button">
                        <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
                        <input class="quantity" min="0" name="quantity" value="1" type="number">
                        <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                      </div>
                    </div>                  
                  </div>
                </div>
                <div class="item">
                  <div class="product-main-block">
                    <div class="product-block">  
                      <div class="product-image-section">                      
                        <img src="<?php echo base_url('assets/front/images/best_2.png');  ?>" >
                      </div>
                      <div class="shape">
                        <span class="offer-text">10% </span><span class="off-text">Off</span>
                      </div>
                      <div class="product-description-section">                      
                        <p>product name this is given and 900gm</p>
                        <hr class="inside-form-hr">
                        <span>Liquid</span> 
                      </div>
                    </div>                  
                    <div class="product-price-block">                  
                       <span><i class="fa fa-inr" aria-hidden="true"></i> 198</span> 
                      <button class="btn-default add-cart-button">ADD</button>
                      <div class="def-number-input number-input safari_only add-quantity hide-button">
                        <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
                        <input class="quantity" min="0" name="quantity" value="1" type="number">
                        <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                      </div>
                    </div>                  
                  </div>
                </div>
              </div>
            </div>
        </div>         
      </div>
          
      <div class="row product-heading trending-heading">
        <div class="col-md-6 title-section">            
          <img src="<?php echo base_url('assets/icon/icon_trending.png');  ?>" >
          <h4 class="product-heading-h4">Trending</h4>
        </div>
        <div class="col-md-6 all-section">            
          <a href=""><span class="product-heading-all">View All</span></a>            
        </div>
      </div>     
      <div class="product-slider slider-arrow">
        <div class="owl-slider product-slider" >
          <div id="carousel6" class="owl-carousel product-slider" >
            <div class="item">
              <div class="product-main-block">
                <div class="product-block">  
                  <div class="product-image-section">                      
                    <img src="<?php echo base_url('assets/front/images/best_2.png');  ?>" >
                  </div>
                  <div class="shape">
                    <span class="offer-text">10% </span><span class="off-text">Off</span>
                  </div>
                  <div class="product-description-section">                      
                    <p>product name this is given and 900gm</p>
                    <hr class="inside-form-hr">
                    <span>Liquid</span> 
                  </div>
                </div>                  
                <div class="product-price-block">                  
                   <span><i class="fa fa-inr" aria-hidden="true"></i> 198</span> 
                  <button class="btn-default add-cart-button">ADD</button>
                  <div class="def-number-input number-input safari_only add-quantity hide-button">
                    <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
                    <input class="quantity" min="0" name="quantity" value="1" type="number">
                    <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                  </div>
                </div>                  
              </div>               
            </div>
            <div class="item">
              <div class="product-main-block">
                <div class="product-block">  
                  <div class="product-image-section">                      
                    <img src="<?php echo base_url('assets/front/images/best_2.png');  ?>" >
                  </div>
                  <div class="shape">
                    <span class="offer-text">10% </span><span class="off-text">Off</span>
                  </div>
                  <div class="product-description-section">                      
                    <p>product name this is given and 900gm</p>
                    <hr class="inside-form-hr">
                    <span>Liquid</span> 
                  </div>
                </div>                  
                <div class="product-price-block">                  
                   <span><i class="fa fa-inr" aria-hidden="true"></i> 198</span> 
                  <button class="btn-default add-cart-button">ADD</button>
                  <div class="def-number-input number-input safari_only add-quantity hide-button">
                    <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
                    <input class="quantity" min="0" name="quantity" value="1" type="number">
                    <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                  </div>
                </div>                  
              </div>
            </div>
            <div class="item">
              <div class="product-main-block">
                <div class="product-block">  
                  <div class="product-image-section">                      
                    <img src="<?php echo base_url('assets/front/images/best_2.png');  ?>" >
                  </div>
                  <div class="shape">
                    <span class="offer-text">10% </span><span class="off-text">Off</span>
                  </div>
                  <div class="product-description-section">                      
                    <p>product name this is given and 900gm</p>
                    <hr class="inside-form-hr">
                    <span>Liquid</span> 
                  </div>
                </div>                  
                <div class="product-price-block">                  
                   <span><i class="fa fa-inr" aria-hidden="true"></i> 198</span> 
                  <button class="btn-default add-cart-button">ADD</button>
                  <div class="def-number-input number-input safari_only add-quantity hide-button">
                    <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
                    <input class="quantity" min="0" name="quantity" value="1" type="number">
                    <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                  </div>
                </div>                  
              </div>
            </div>
            <div class="item">
              <div class="product-main-block">
                <div class="product-block">  
                  <div class="product-image-section">                      
                    <img src="<?php echo base_url('assets/front/images/best_2.png');  ?>" >
                  </div>
                  <div class="shape">
                    <span class="offer-text">10% </span><span class="off-text">Off</span>
                  </div>
                  <div class="product-description-section">                      
                    <p>product name this is given and 900gm</p>
                    <hr class="inside-form-hr">
                    <span>Liquid</span> 
                  </div>
                </div>                  
                <div class="product-price-block">                  
                   <span><i class="fa fa-inr" aria-hidden="true"></i> 198</span> 
                  <button class="btn-default add-cart-button">ADD</button>
                  <div class="def-number-input number-input safari_only add-quantity hide-button">
                    <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
                    <input class="quantity" min="0" name="quantity" value="1" type="number">
                    <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                  </div>
                </div>                  
              </div>
            </div>
            <div class="item">
              <div class="product-main-block">
                <div class="product-block">  
                  <div class="product-image-section">                      
                    <img src="<?php echo base_url('assets/front/images/best_2.png');  ?>" >
                  </div>
                  <div class="shape">
                    <span class="offer-text">10% </span><span class="off-text">Off</span>
                  </div>
                  <div class="product-description-section">                      
                    <p>product name this is given and 900gm</p>
                    <hr class="inside-form-hr">
                    <span>Liquid</span> 
                  </div>
                </div>                  
                <div class="product-price-block">                  
                   <span><i class="fa fa-inr" aria-hidden="true"></i> 198</span> 
                  <button class="btn-default add-cart-button">ADD</button>
                  <div class="def-number-input number-input safari_only add-quantity hide-button">
                    <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
                    <input class="quantity" min="0" name="quantity" value="1" type="number">
                    <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                  </div>
                </div>                  
              </div>
            </div>
            <div class="item">
              <div class="product-main-block">
                <div class="product-block">  
                  <div class="product-image-section">                      
                    <img src="<?php echo base_url('assets/front/images/best_2.png');  ?>" >
                  </div>
                  <div class="shape">
                    <span class="offer-text">10% </span><span class="off-text">Off</span>
                  </div>
                  <div class="product-description-section">                      
                    <p>product name this is given and 900gm</p>
                    <hr class="inside-form-hr">
                    <span>Liquid</span> 
                  </div>
                </div>                  
                <div class="product-price-block">                  
                   <span><i class="fa fa-inr" aria-hidden="true"></i> 198</span> 
                  <button class="btn-default add-cart-button">ADD</button>
                  <div class="def-number-input number-input safari_only add-quantity hide-button">
                    <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
                    <input class="quantity" min="0" name="quantity" value="1" type="number">
                    <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                  </div>
                </div>                  
              </div>
            </div>
            <div class="item">
              <div class="product-main-block">
                <div class="product-block">  
                  <div class="product-image-section">                      
                    <img src="<?php echo base_url('assets/front/images/best_2.png');  ?>" >
                  </div>
                  <div class="shape">
                    <span class="offer-text">10% </span><span class="off-text">Off</span>
                  </div>
                  <div class="product-description-section">                      
                    <p>product name this is given and 900gm</p>
                    <hr class="inside-form-hr">
                    <span>Liquid</span> 
                  </div>
                </div>                  
                <div class="product-price-block">                  
                   <span><i class="fa fa-inr" aria-hidden="true"></i> 198</span> 
                  <button class="btn-default add-cart-button">ADD</button>
                  <div class="def-number-input number-input safari_only add-quantity hide-button">
                    <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
                    <input class="quantity" min="0" name="quantity" value="1" type="number">
                    <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                  </div>
                </div>                  
              </div>
            </div>
            <div class="item">
              <div class="product-main-block">
                <div class="product-block">  
                  <div class="product-image-section">                      
                    <img src="<?php echo base_url('assets/front/images/best_2.png');  ?>" >
                  </div>
                  <div class="shape">
                    <span class="offer-text">10% </span><span class="off-text">Off</span>
                  </div>
                  <div class="product-description-section">                      
                    <p>product name this is given and 900gm</p>
                    <hr class="inside-form-hr">
                    <span>Liquid</span> 
                  </div>
                </div>                  
                <div class="product-price-block">                  
                   <span><i class="fa fa-inr" aria-hidden="true"></i> 198</span> 
                  <button class="btn-default add-cart-button">ADD</button>
                  <div class="def-number-input number-input safari_only add-quantity hide-button">
                    <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
                    <input class="quantity" min="0" name="quantity" value="1" type="number">
                    <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                  </div>
                </div>                  
              </div>
            </div>
            <div class="item">
              <div class="product-main-block">
                <div class="product-block">  
                  <div class="product-image-section">                      
                    <img src="<?php echo base_url('assets/front/images/best_2.png');  ?>" >
                  </div>
                  <div class="shape">
                    <span class="offer-text">10% </span><span class="off-text">Off</span>
                  </div>
                  <div class="product-description-section">                      
                    <p>product name this is given and 900gm</p>
                    <hr class="inside-form-hr">
                    <span>Liquid</span> 
                  </div>
                </div>                  
                <div class="product-price-block">                  
                   <span><i class="fa fa-inr" aria-hidden="true"></i> 198</span> 
                  <button class="btn-default add-cart-button">ADD</button>
                  <div class="def-number-input number-input safari_only add-quantity hide-button">
                    <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
                    <input class="quantity" min="0" name="quantity" value="1" type="number">
                    <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                  </div>
                </div>                  
              </div>
            </div>
            <div class="item">
              <div class="product-main-block">
                <div class="product-block">  
                  <div class="product-image-section">                      
                    <img src="<?php echo base_url('assets/front/images/best_2.png');  ?>" >
                  </div>
                  <div class="shape">
                    <span class="offer-text">10% </span><span class="off-text">Off</span>
                  </div>
                  <div class="product-description-section">                      
                    <p>product name this is given and 900gm</p>
                    <hr class="inside-form-hr">
                    <span>Liquid</span> 
                  </div>
                </div>                  
                <div class="product-price-block">                  
                   <span><i class="fa fa-inr" aria-hidden="true"></i> 198</span> 
                  <button class="btn-default add-cart-button">ADD</button>
                  <div class="def-number-input number-input safari_only add-quantity hide-button">
                    <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
                    <input class="quantity" min="0" name="quantity" value="1" type="number">
                    <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                  </div>
                </div>                  
              </div>
            </div>
          </div>
        </div>
      </div>      
      <div class="row product-heading health-heading">
        <div class="col-md-6 title-section">            
          <img src="<?php echo base_url('assets/icon/icon_health.png');  ?>" >
          <h4 class="product-heading-h4">Health</h4>
        </div>
        <div class="col-md-6 all-section">            
          <a href=""><span class="product-heading-all">View All</span></a>            
        </div>
      </div>
      <div class="product-slider">
        <div class="owl-slider product-slider slider-arrow" >
          <div id="carousel7" class="owl-carousel product-slider" >
            <div class="item">
              <div class="product-main-block">
                <div class="product-block">  
                  <div class="product-image-section">                      
                    <img src="<?php echo base_url('assets/front/images/best_2.png');  ?>" >
                  </div>
                  <div class="shape">
                    <span class="offer-text">10% </span><span class="off-text">Off</span>
                  </div>
                  <div class="product-description-section">                      
                    <p>product name this is given and 900gm</p>
                    <hr class="inside-form-hr">
                    <span>Liquid</span> 
                  </div>
                </div>                  
                <div class="product-price-block">                  
                   <span><i class="fa fa-inr" aria-hidden="true"></i> 198</span> 
                  <button class="btn-default add-cart-button">ADD</button>
                  <div class="def-number-input number-input safari_only add-quantity hide-button">
                    <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
                    <input class="quantity" min="0" name="quantity" value="1" type="number">
                    <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                  </div>
                </div>                  
              </div>               
            </div>
            <div class="item">
              <div class="product-main-block">
                <div class="product-block">  
                  <div class="product-image-section">                      
                    <img src="<?php echo base_url('assets/front/images/best_2.png');  ?>" >
                  </div>
                  <div class="shape">
                    <span class="offer-text">10% </span><span class="off-text">Off</span>
                  </div>
                  <div class="product-description-section">                      
                    <p>product name this is given and 900gm</p>
                    <hr class="inside-form-hr">
                    <span>Liquid</span> 
                  </div>
                </div>                  
                <div class="product-price-block">                  
                   <span><i class="fa fa-inr" aria-hidden="true"></i> 198</span> 
                  <button class="btn-default add-cart-button">ADD</button>
                  <div class="def-number-input number-input safari_only add-quantity hide-button">
                    <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
                    <input class="quantity" min="0" name="quantity" value="1" type="number">
                    <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                  </div>
                </div>                  
              </div>
            </div>
            <div class="item">
              <div class="product-main-block">
                <div class="product-block">  
                  <div class="product-image-section">                      
                    <img src="<?php echo base_url('assets/front/images/best_2.png');  ?>" >
                  </div>
                  <div class="shape">
                    <span class="offer-text">10% </span><span class="off-text">Off</span>
                  </div>
                  <div class="product-description-section">                      
                    <p>product name this is given and 900gm</p>
                    <hr class="inside-form-hr">
                    <span>Liquid</span> 
                  </div>
                </div>                  
                <div class="product-price-block">                  
                   <span><i class="fa fa-inr" aria-hidden="true"></i> 198</span> 
                  <button class="btn-default add-cart-button">ADD</button>
                  <div class="def-number-input number-input safari_only add-quantity hide-button">
                    <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
                    <input class="quantity" min="0" name="quantity" value="1" type="number">
                    <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                  </div>
                </div>                  
              </div>
            </div>
            <div class="item">
              <div class="product-main-block">
                <div class="product-block">  
                  <div class="product-image-section">                      
                    <img src="<?php echo base_url('assets/front/images/best_2.png');  ?>" >
                  </div>
                  <div class="shape">
                    <span class="offer-text">10% </span><span class="off-text">Off</span>
                  </div>
                  <div class="product-description-section">                      
                    <p>product name this is given and 900gm</p>
                    <hr class="inside-form-hr">
                    <span>Liquid</span> 
                  </div>
                </div>                  
                <div class="product-price-block">                  
                   <span><i class="fa fa-inr" aria-hidden="true"></i> 198</span> 
                  <button class="btn-default add-cart-button">ADD</button>
                  <div class="def-number-input number-input safari_only add-quantity hide-button">
                    <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
                    <input class="quantity" min="0" name="quantity" value="1" type="number">
                    <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                  </div>
                </div>                  
              </div>
            </div>
            <div class="item">
              <div class="product-main-block">
                <div class="product-block">  
                  <div class="product-image-section">                      
                    <img src="<?php echo base_url('assets/front/images/best_2.png');  ?>" >
                  </div>
                  <div class="shape">
                    <span class="offer-text">10% </span><span class="off-text">Off</span>
                  </div>
                  <div class="product-description-section">                      
                    <p>product name this is given and 900gm</p>
                    <hr class="inside-form-hr">
                    <span>Liquid</span> 
                  </div>
                </div>                  
                <div class="product-price-block">                  
                   <span><i class="fa fa-inr" aria-hidden="true"></i> 198</span> 
                  <button class="btn-default add-cart-button">ADD</button>
                  <div class="def-number-input number-input safari_only add-quantity hide-button">
                    <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
                    <input class="quantity" min="0" name="quantity" value="1" type="number">
                    <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                  </div>
                </div>                  
              </div>
            </div>
            <div class="item">
              <div class="product-main-block">
                <div class="product-block">  
                  <div class="product-image-section">                      
                    <img src="<?php echo base_url('assets/front/images/best_2.png');  ?>" >
                  </div>
                  <div class="shape">
                    <span class="offer-text">10% </span><span class="off-text">Off</span>
                  </div>
                  <div class="product-description-section">                      
                    <p>product name this is given and 900gm</p>
                    <hr class="inside-form-hr">
                    <span>Liquid</span> 
                  </div>
                </div>                  
                <div class="product-price-block">                  
                   <span><i class="fa fa-inr" aria-hidden="true"></i> 198</span> 
                  <button class="btn-default add-cart-button">ADD</button>
                  <div class="def-number-input number-input safari_only add-quantity hide-button">
                    <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
                    <input class="quantity" min="0" name="quantity" value="1" type="number">
                    <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                  </div>
                </div>                  
              </div>
            </div>
            <div class="item">
              <div class="product-main-block">
                <div class="product-block">  
                  <div class="product-image-section">                      
                    <img src="<?php echo base_url('assets/front/images/best_2.png');  ?>" >
                  </div>
                  <div class="shape">
                    <span class="offer-text">10% </span><span class="off-text">Off</span>
                  </div>
                  <div class="product-description-section">                      
                    <p>product name this is given and 900gm</p>
                    <hr class="inside-form-hr">
                    <span>Liquid</span> 
                  </div>
                </div>                  
                <div class="product-price-block">                  
                   <span><i class="fa fa-inr" aria-hidden="true"></i> 198</span> 
                  <button class="btn-default add-cart-button">ADD</button>
                  <div class="def-number-input number-input safari_only add-quantity hide-button">
                    <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
                    <input class="quantity" min="0" name="quantity" value="1" type="number">
                    <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                  </div>
                </div>                  
              </div>
            </div>
            <div class="item">
              <div class="product-main-block">
                <div class="product-block">  
                  <div class="product-image-section">                      
                    <img src="<?php echo base_url('assets/front/images/best_2.png');  ?>" >
                  </div>
                  <div class="shape">
                    <span class="offer-text">10% </span><span class="off-text">Off</span>
                  </div>
                  <div class="product-description-section">                      
                    <p>product name this is given and 900gm</p>
                    <hr class="inside-form-hr">
                    <span>Liquid</span> 
                  </div>
                </div>                  
                <div class="product-price-block">                  
                   <span><i class="fa fa-inr" aria-hidden="true"></i> 198</span> 
                  <button class="btn-default add-cart-button">ADD</button>
                  <div class="def-number-input number-input safari_only add-quantity hide-button">
                    <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
                    <input class="quantity" min="0" name="quantity" value="1" type="number">
                    <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                  </div>
                </div>                  
              </div>
            </div>
            <div class="item">
              <div class="product-main-block">
                <div class="product-block">  
                  <div class="product-image-section">                      
                    <img src="<?php echo base_url('assets/front/images/best_2.png');  ?>" >
                  </div>
                  <div class="shape">
                    <span class="offer-text">10% </span><span class="off-text">Off</span>
                  </div>
                  <div class="product-description-section">                      
                    <p>product name this is given and 900gm</p>
                    <hr class="inside-form-hr">
                    <span>Liquid</span> 
                  </div>
                </div>                  
                <div class="product-price-block">                  
                   <span><i class="fa fa-inr" aria-hidden="true"></i> 198</span> 
                  <button class="btn-default add-cart-button">ADD</button>
                  <div class="def-number-input number-input safari_only add-quantity hide-button">
                    <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
                    <input class="quantity" min="0" name="quantity" value="1" type="number">
                    <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                  </div>
                </div>                  
              </div>
            </div>
            <div class="item">
              <div class="product-main-block">
                <div class="product-block">  
                  <div class="product-image-section">                      
                    <img src="<?php echo base_url('assets/front/images/best_2.png');  ?>" >
                  </div>
                  <div class="shape">
                    <span class="offer-text">10% </span><span class="off-text">Off</span>
                  </div>
                  <div class="product-description-section">                      
                    <p>product name this is given and 900gm</p>
                    <hr class="inside-form-hr">
                    <span>Liquid</span> 
                  </div>
                </div>                  
                <div class="product-price-block">                  
                   <span><i class="fa fa-inr" aria-hidden="true"></i> 198</span> 
                  <button class="btn-default add-cart-button">ADD</button>
                  <div class="def-number-input number-input safari_only add-quantity hide-button">
                    <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
                    <input class="quantity" min="0" name="quantity" value="1" type="number">
                    <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                  </div>
                </div>                  
              </div>
            </div>
          </div>
        </div>
      </div>  --> 
    </div>
  </div>

  <script>
    jQuery("#carousel").owlCarousel(
    {
      autoplay: true,
      lazyLoad: true,
      loop: true,
      margin: 20,
                 responsiveClass: true,
      autoHeight: true,
      autoplayTimeout: 3000,
      smartSpeed: 800,
      nav: true,
      responsive: {
        0: {
          items: 1
        },

        600: {
          items: 3
        },

        1024: {
          items: 1
        },

        
      }
    });
    var owl = $("#carousel");                 
    $('#carousel .item').on('mouseover',function(e){
        owl.trigger('stop.owl.autoplay');
    })
    $('#carousel .item').on('mouseleave',function(e){
        owl.trigger('play.owl.autoplay');
    })
    jQuery("#carouse0").owlCarousel(
    {
      autoplay: true,
      lazyLoad: true,
      loop: true,
      margin: 20,
                 responsiveClass: true,
      autoHeight: true,
      autoplayTimeout: 3000,
      smartSpeed: 800,
      nav: true,
      responsive: {
        0: {
          items: 1
        },

        600: {
          items: 3
        },

        1024: {
          items: 1
        },

        
      }
    });
    var owl = $("#carouse0");                 
    $('#carouse0 .item').on('mouseover',function(e){
        owl.trigger('stop.owl.autoplay');
    })
    $('#carouse0 .item').on('mouseleave',function(e){
        owl.trigger('play.owl.autoplay');
    })
    jQuery("#carousel1").owlCarousel(
    {
      autoplay: true,
      lazyLoad: true,
      loop: true,
      margin: 20,
                 responsiveClass: true,
      autoHeight: true,
      autoplayTimeout: 3000,
      smartSpeed: 800,
      nav: true,
      responsive: {
        0: {
          items: 1
        },

        600: {
          items: 3
        },

        1024: {
          items: 4
        },

        
      }
    });
    var owl1 = $("#carousel1");                 
    $('#carousel1 .item').on('mouseover',function(e){
        owl1.trigger('stop.owl.autoplay');
    })
    $('#carousel1 .item').on('mouseleave',function(e){
        owl1.trigger('play.owl.autoplay');
    })
    jQuery("#carousel2").owlCarousel(
    {
      autoplay: true,
      lazyLoad: true,
      loop: true,
      margin: 20,
      responsiveClass: true,
      autoHeight: true,
      autoplayTimeout: 3000,
      smartSpeed: 800,
      nav: true,
      responsive: {
        0: {
          items: 1
        },

        600: {
          items: 3
        },

        1024: {
          items: 4
        },

        
      }
    });
    var owl2= $("#carousel2");                 
    $('#carousel2 .item').on('mouseover',function(e){
        owl2.trigger('stop.owl.autoplay');
    })
    $('#carousel2 .item').on('mouseleave',function(e){
        owl2.trigger('play.owl.autoplay');
    })
    jQuery("#carousel3").owlCarousel(
    {
      autoplay: false,
      lazyLoad: true,
      loop: true,
      margin: 20,
      responsiveClass: true,
      autoHeight: true,
      autoplayTimeout: 4000,
      smartSpeed: 800,
      nav: true,
      responsive: {
        0: {
          items: 1
        },

        600: {
          items: 3
        },

        1024: {
          items: 4
        },

        
      }
    });
    var owl3 = $("#carousel3");                 
    $('#carousel3 .item').on('mouseover',function(e){
        owl3.trigger('stop.owl.autoplay');
    })
    $('#carousel3 .item').on('mouseleave',function(e){
        owl3.trigger('play.owl.autoplay');
    })
    jQuery("#carousel4").owlCarousel(
    {
      autoplay: true,
      lazyLoad: true,
      loop: true,
      margin: 20,
      responsiveClass: true,
      autoHeight: true,
      autoplayTimeout: 5000,
      smartSpeed: 800,
      nav: true,
      responsive: {
        0: {
          items: 1
        },

        600: {
          items: 3
        },

        1024: {
          items: 4
        },

        
      }
    });
    var owl4 = $("#carousel4");                 
    $('#carousel4 .item').on('mouseover',function(e){
        owl4.trigger('stop.owl.autoplay');
    })
    $('#carousel4 .item').on('mouseleave',function(e){
        owl4.trigger('play.owl.autoplay');
    })
    jQuery("#carousel6").owlCarousel(
    {
      autoplay: true,
      lazyLoad: true,
      loop: true,
      margin: 20,
      responsiveClass: true,
      autoHeight: true,
      autoplayTimeout: 6000,
      smartSpeed: 800,
      nav: true,
      responsive: {
        0: {
          items: 1
        },

        600: {
          items: 3
        },

        1024: {
          items: 4
        },

        
      }
    });
    var owl5 = $("#carousel6");                 
    $('#carousel6 .item').on('mouseover',function(e){
        owl5.trigger('stop.owl.autoplay');
    })
    $('#carousel6 .item').on('mouseleave',function(e){
        owl5.trigger('play.owl.autoplay');
    })
    jQuery("#carousel5").owlCarousel(
    {
      autoplay: true,
      lazyLoad: true,
      loop: true,
      margin: 20,
      responsiveClass: true,
      autoHeight: true,
      autoplayTimeout: 6000,
      smartSpeed: 800,
      nav: true,
      responsive: {
        0: {
          items: 1
        },

        600: {
          items: 3
        },

        1024: {
          items: 4
        },

        
      }
    });
    var owl6 = $("#carousel5");                 
    $('#carousel5 .item').on('mouseover',function(e){
        owl6.trigger('stop.owl.autoplay');
    })
    $('#carousel5 .item').on('mouseleave',function(e){
        owl6.trigger('play.owl.autoplay');
    })

    // Set the date we're counting down to
    var countDownDate = new Date("Jan 5, 2021 15:37:25").getTime();
    // Update the count down every 1 second
    var x = setInterval(function() 
    {

      // Get today's date and time
      var now = new Date().getTime();
        
      // Find the distance between now and the count down date
      var distance = countDownDate - now;
        
      // Time calculations for days, hours, minutes and seconds
      var days = Math.floor(distance / (1000 * 60 * 60 * 24));
      var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);
        
      // Output the result in an element with id="demo"
      document.getElementById("demo").innerHTML =  hours + ":"
      + minutes + ":" + seconds + "";
        
      // If the count down is over, write some text 
      if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "EXPIRED";
      }
    }, 1000);
    $(document).ready(function(){      
      $('.add-cart-button').click(function(){
        $(this).addClass("hide-button");
        $(this).siblings("div").removeClass("hide-button");
        // $(this).siblings("div").addClass("show-button");

      });
      $('.minus').click(function(){        
        if($(this).siblings("input").val()==0){          
          $(this).parent().addClass("hide-button");
          $(this).parents('.product-price-block').find(".add-cart-button").addClass("show-button");
          $(this).parents('.product-price-block').find(".add-cart-button").removeClass("hide-button");
        }
      })
      
    });

  </script>



</body>

</html>