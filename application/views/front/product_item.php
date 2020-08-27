        
         <?php          
          if (!empty($product)) {
           foreach ($product as $key => $value) {   ?>
            <div class="col-xl-3 col-md-4 col-sm-4 col-xs-12">
              <div class="product-box">
                <div class="product-cat-img">  
                  <a href="<?php echo base_url('user/product/'.base64_encode($value->product_id)); ?>">
                    <img class="product-image" src="<?= !empty($value->product_image) ? base_url($value->product_image): base_url('assets/img/product_dummy.png')?>">              
                  </a>
                </div>
                <div class="text-center">                
                  <p class="main-product-name"><a href="<?php echo base_url('user/product/'.base64_encode($value->product_id)); ?>"><?php echo $value->product_name;?></a>
                    <?php if(strlen($value->product_name) > 79 ){ ?>
                      <a class="tool-tip-custom" data-toggle="tooltip" title="<?php echo $value->product_full_name; ?>" href="<?php echo base_url('user/product/'.base64_encode($value->product_id)); ?>"> ...</a> 
                    <?php } ?>
                  </p>
                  <p class="product-description"><?php echo $value->about_product;?></p>
                </div>
                <div class="product-price-category">
                  <?php echo ($value->offerprice > 0)?'<span class="offer-price-text">'.$value->offerprice.'% off</span>':'';?>
                  <p class="product-sell-price"><i class="fa fa-inr" aria-hidden="true"></i><?php echo $value->sale_price;?></p>

                  <button class="btn-default add-cart-button-category" onclick="addToCart(<?= $value->product_id ?>)">ADD</button>
                  <div class="def-number-input number-input safari_only add-quantity  add-quantity-category hide-button">
                    <button onclick="this.parentNode.querySelector('input[type=number]').stepDown(); updateCart(<?= $value->product_id; ?>,this.parentNode.querySelector('input[value]'),'minus')" class="minus"></button>
                    <input class="quantity" min="0" name="quantity" value="1" type="number">
                    <button onclick="this.parentNode.querySelector('input[type=number]').stepUp(); updateCart(<?= $value->product_id; ?>,this.parentNode.querySelector('input[value]'),'plus')" class="plus"></button>
                  </div>
                </div> 
              </div>
            </div>
          <?php }
         }else{ ?>
            <div class="col-xl-12 col-md-12 col-sm-12 col-xs-12">
              <div class="empty-category">
                <div class="empty-img">
                  <img src="<?php echo base_url('assets/img/no_product_5.png'); ?>">
                </div>
                <h4>Currenty there is no product in this category</h4>
              </div>
            </div>
         <?php } ?>
        </div>
        <span id='pagination'><?php echo $pagination; ?> </span>
        


<script>

$('#pagination').on('click','a',function(e){
       e.preventDefault(); 
       var pageno = $(this).attr('data-ci-pagination-page');
       searchFilter(pageno);
     });
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
  $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();   
      });
</script>

 