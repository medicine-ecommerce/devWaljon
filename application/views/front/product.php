
<div class="super_container">
	<!-- Single Product -->
	<div class="single_product">
		<div class="container">
			<div class="hambergar">	
				<div class="toolbox-left">
					<?php			
						$question = $product['question'];											
						$product_item = $product['product'];											
					 ?>
			    <h3><a>home</a> > <a href=""><?= $product_item->category_name; ?></a> > <a href=""><?= $product_item->name; ?></a></h3> 
			  </div>
			  <!-- <div class="pull-right">
			  	<form action="#">
						<input type="search" required="required" class="product_search_input" placeholder="Search">
						<button type="submit" class="product_search_button" value="Submit"><i class="fa fa-search"></i></button>
					</form>
			  </div> -->
			</div>
			<div class="row">
				<!-- Selected Image -->
				<div class="col-lg-5 order-lg-2 order-1">
					<?php 					
					if(!empty($product["product_images"])){
					foreach($product["product_images"] as $main_value) { ?>					
					 <div class="image_selected">
						<div class="img-zoom-lens"></div>
						<img class="demo cursor" src="<?php echo base_url().$main_value->image; ?>" alt="" height="200">
						<div class="img-zoom-result"></div>
					</div> 
					<?php  } } ?>					 
					<div class="related-img">
					<?php								
					$slide_id = 1;
						if(!empty($product["product_images"])){
						foreach($product["product_images"] as $gallary_image) { 
						if($slide_id < 5){ ?>					

						 <div class="related-img-section">
							<img class="demo cursor" src="<?php echo base_url().$gallary_image->image; ?>" alt="" onclick="currentSlide(<?= $slide_id; ?>)">
						</div> 

					<?php }
					$slide_id += 1; } }?>				
					</div>
				</div>

				<!-- Description -->
				<div class="col-lg-7 order-3">
					<div class="product_description">
						<!-- <div class="product_category">Laptops</div> -->
						<div class="product_name"><?= $product_item->name; ?></div>
						<div class="product_rating"><i class="fa fa-star"></i>  4.4</div>
						<div class="date-time">
							<i class="fa fa-clock-o"></i> <p>03:02 PM, 15 Jan 2020</p>
						</div>
						<div class="product-required product-description">
							<h4>Rx Prescription Required</h4>
						</div>
						<div class="product-manufaturer product-description">
							<h4 class="product-description-heading">Manufaturer : </h4>
							<p><?= $product_item->manufacturer_name; ?></p>
						</div>
						<div class="product-salt product-description">
							<h4 class="product-description-heading">Salt Composition : </h4>
							<p><?= $product_item->saltcomposition_name; ?></p>
						</div>
						<div class="product-expdate product-description">
							<h4 class="product-description-heading">Expiry Date : </h4>
							<p><?= $product_item->expiry_date; ?></p>
						</div>
						<div class="product-AnsQues product-description">
							<i class='fas fa-arrow-down'></i>
							<p><a href="#questionsSection">105 Answereq Questions</a></p>
						</div>
						<div class="product-alternate-brnd product-description">
							<i class='fas fa-arrow-down'></i>
							<p><a href="#alternateBrands">105 View Alternate Brands</a></p>
						</div>
						<div class="order_info d-flex flex-row">
							<form action="#">
								<div class="product-price-details">
									<div class="row">
										<div class="col-md-2">
											<div class="product_price">
												<h5 class="product-price-head">Price</h5>
												<p>MRP <?= $product_item->mrp; ?></p>
												<h4><i class='fas fa-rupee-sign'></i> <?= $product_item->sale_price; ?></h4>
											</div>
										</div>
										<div class="col-md-10">
											<div class="product_quantity">	
												<h5 class="product-price-head">Quantity</h5>
												<div class="def-number-input number-input safari_only add-quantity  add-quantity-product">
				                  <button type="button"  onclick="this.parentNode.querySelector('input[type=number]').stepDown(); updateCart(<?= $product_item->product_id; ?>,this.parentNode.querySelector('input[value]'),'minus')" class="minus"></button>
				                  <input class="quantity" min="1" id="quantity" name="quantity" value="1" type="number">
				                  <button type="button" onclick="this.parentNode.querySelector('input[type=number]').stepUp(); updateCart(<?= $product_item->product_id; ?>,this.parentNode.querySelector('input[value]'),'plus')" class="plus"></button>
				                </div>
												<input id="quantity_input" type="text" pattern="[0-9]*" value="1">
												<!-- <div class="quantity_buttons">
													<div id="quantity_inc_button" class="quantity_inc quantity_control"><i class="fas fa-chevron-up"></i></div>
													<div id="quantity_dec_button" class="quantity_dec quantity_control"><i class="fas fa-chevron-down"></i></div>
												</div> -->
												<div class="product-tablets-count">
													<p>10 Tablets in 1 strip</p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="button_container">
									<div class="price-total">
										<p class="total-heading">Total</p>
										<h4><i class='fas fa-rupee-sign'></i> <?= $product_item->sale_price; ?></h4>
										<p class="price-off">Get 20% off</p>
									</div>
									<div class="pull-right">
										<button type="button" class="button cart_button" onclick="addToCart(<?= $product_item->product_id; ?>,'single')">Add to Cart</button>
									</div>
								</div>
								
							</form>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<div class="info-tabs">
		<div class="container">
			<div class="row">
				<div class="tab-heading">
					<ul class="nav nav-tabs product_tab" id="myTab" role="tablist">
			      <li class="product_li1">
			        <a class="nav-link active" id="about-tab" data-toggle="tab" href="#about" role="tab" aria-controls="about" aria-selected="true">About</a>
			      </li>
			      <li class="product_li">
			        <a class="nav-link" id="benefits-tab" data-toggle="tab" href="#benefits" role="tab" aria-controls="benefits" aria-selected="false">Benefits</a>
			      </li>
			      <li class="product_li">
			        <a class="nav-link" id="uses-tab" data-toggle="tab" href="#uses" role="tab" aria-controls="uses" aria-selected="true">Uses</a>
			      </li>
			      <li class="product_li">
			        <a class="nav-link" id="side-eff-tab" data-toggle="tab" href="#side-eff" role="tab" aria-controls="side-eff" aria-selected="false">Side Effects</a>
			      </li>
			      <li class="product_li">
			        <a class="nav-link" id="how-use-tab" data-toggle="tab" href="#how-use" role="tab" aria-controls="how-use" aria-selected="true">How to use</a>
			      </li>
			      <li class="product_li">
			        <a class="nav-link" id="how-work-tab" data-toggle="tab" href="#how-work" role="tab" aria-controls="how-work" aria-selected="false">How It Works</a>
			      </li>
			      <li class="product_li">
			        <a class="nav-link" id="strong-info-tab" data-toggle="tab" href="#strong-info" role="tab" aria-controls="strong-info" aria-selected="true">Strong Information</a>
			      </li>
			      <li class="product_li">
			        <a class="nav-link" id="safety-info-tab" data-toggle="tab" href="#safety-info" role="tab" aria-controls="safety-info" aria-selected="false">Safety Information</a>
			      </li>
			    </ul>	
				</div>
				<div class="tab-content" id="myTabContent">
		      <div class="tab-pane fade show active" id="about" role="tabpanel" aria-labelledby="about-tab">
		      	<div class="tab-sub-content">	
		        	<p><?= $product_item->about_product; ?></p>
		      	</div>
		      	<!-- <div class="tab-sub-content">
			        <span class="product-sub-heading">Benefits</span>
			        <ul>
			        	<li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
			        	<li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
			        	<li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
			        	<li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
			        </ul>
		      	</div>
		      	<div class="tab-sub-content">	
			        <span class="product-sub-heading">How to use</span>
			        <p>Lorem Ipsum is simply dummy</p>
		      	</div>
		      	<div class="tab-sub-content">	
			        <span class="product-sub-heading">Indication</span>
			        <p>Lorem Ipsum is simply dummy</p>
		      	</div> -->
		      </div>
		      <div class="tab-pane fade" id="benefits" role="tabpanel" aria-labelledby="benefits-tab">
		        <p><?= $product_item->how_to_use; ?></p> 
		      </div>
		      <div class="tab-pane fade" id="uses" role="tabpanel" aria-labelledby="uses-tab">
		        <p><?= $product_item->when_to_use; ?></p> 
		      </div>
		      <div class="tab-pane fade" id="side-eff" role="tabpanel" aria-labelledby="side-eff-tab">
		        <p><?= $product_item->side_effect; ?></p> 
		      </div>
		      <div class="tab-pane fade" id="how-use" role="tabpanel" aria-labelledby="how-use-tab">
		        <p><?= $product_item->how_to_use; ?></p> 
		      </div>
		      <div class="tab-pane fade" id="how-work" role="tabpanel" aria-labelledby="how-work-tab">
		        <p><?= $product_item->how_to_work; ?></p> 
		      </div>
		      <div class="tab-pane fade" id="strong-info" role="tabpanel" aria-labelledby="strong-info-tab">
		        <p><?= $product_item->how_to_store; ?></p> 
		      </div>
		      <div class="tab-pane fade" id="safety-info" role="tabpanel" aria-labelledby="safety-info-tab">
		        <p><?= $product_item->safety_info; ?></p> 		        
		      </div>
		    </div>
		  </div>
		</div>    
	</div>

	<div class="feedback" id="questionsSection">
		<div class="container">
			<div class="row">
				<div class="col-md-7">
					<div class="product-main-heading">
						<h4>Frequently Asked Questions</h4>
					</div>
					<div class="faq-accordine">
						<div class="containers">
						  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
						    
						    <?php 	
						    	$Qcount = 1;				
								if(!empty($question)){
								foreach($question as $Qvalue) { ?>					
									<div class="panel panel-default panel-questions">
							      <div class="panel-heading" role="tab" id="headingOne<?= $Qvalue->id; ?>">
							        <h4 class="panel-title">
							        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne<?= $Qvalue->id; ?>" aria-expanded="<?= (count($question)) < 1 ? "true":"false"  ?>" aria-controls="collapseOne">
							          <?php echo $Qcount.". ";
							           echo $Qvalue->question; ?> 
							        </a>
							      </h4>
							      </div>
							      <div id="collapseOne<?= $Qvalue->id; ?>" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne<?= $Qvalue->id; ?>">
							        <div class="panel-body questions-body">
							          <?= $Qvalue->answer; ?> 
							        </div>
							      </div>
							    </div>								 
								<?php $Qcount+=1;  } } ?>					 
						  </div>
						</div>
					</div>
				</div>
				<div class="col-md-5">
					<div class="customer-feedback-sec">
						<h5>Customer Feedback</h5>
						<div class="scroll-div">	
							<div id="showAllComments">							
							</div>
						</div>						
						<div class="add-comment">
							<div>
								<form method="post" id="product_comment_byuser">
									<input id="comment_input" type="search" required="required" name="product_comment" class="product_comment_input" placeholder="Comment Something">
									<input id="get_product_id" type="hidden" name="product_id" value="<?= $product_item->product_id; ?>">
									<button type="button" onclick="productComment()" class="product_comment_button" value="Submit"><i class="fa fa-paper-plane"></i></button>
								</form>
							</div>
						</div>
					</div>	
				</div>
			</div>
		</div>
	</div>	
	<!-- Recently Viewed -->

	<div class="alternate-brnd" id="alternateBrands">
		<div class="container">
			<div class="product-main-heading">
				<h4>Alternate Brands</h4>
			</div>
        <div class="product-slider-block slider-arrow alternate-slider-arrow">        
          <div class="row alternate-product">
            <div class="col-md-6 title-section">                          
            </div>
            <div class="col-md-6 all-section">            
              <a href=""><span class="product-heading-all">View All</span></a>            
            </div>
          </div>
          <div class="product-slider">
            <div class="owl-slider-alternate" >
              <div id="carousel5" class="owl-carousel product-slider" >
                <?php                 
                if(!empty($alternate_product)){
                foreach ($alternate_product as $key => $value) { ?>
                  <div class="item">
                    <div class="product-main-block">
                      <div class="product-block">  
                        <div class="product-image-section">                                              
	                        <a href="<?php echo base_url('user/product/'.base64_encode($value->product_id)); ?>">	
	                          <img src="<?php echo (!empty($value->image))? base_url().$value->image : base_url('assets/front/images/best_2.png');  ?>" >
	                      	</a>
                        </div>
                        <div class="shape product-page-shape">
                          <span class="offer-text">10% </span><span class="off-text">Off</span>
                        </div>
                        <div class="product-description-section">                      
                          <p><a href="<?php echo base_url('user/product/'.base64_encode($value->product_id)); ?>">	<?php echo $value->name; ?></a></p>
                          <hr class="inside-form-hr">
                          <span><?php echo $value->product_form; ?></span> 
                        </div>
                      </div>                  
                      <div class="product-price-block">                  
                         <span><i class="fa fa-inr" aria-hidden="true"></i> <?php echo $value->sale_price; ?></span> 
                        <button class="btn-default add-cart-button" onclick="addToCart(<?= $value->product_id ?>,'slider')">ADD</button>
                        <div class="def-number-input number-input safari_only add-quantity hide-button">
                          <button onclick="this.parentNode.querySelector('input[type=number]').stepDown(); updateCart(<?= $value->product_id; ?>,this.parentNode.querySelector('input[value]'),'minus')" class="minus"></button>
                          <input class="quantity" min="0" value="1" name="quantity" type="number">
                          <button onclick="this.parentNode.querySelector('input[type=number]').stepUp(); updateCart(<?= $value->product_id; ?>,this.parentNode.querySelector('input[value]'),'plus')" class="plus"></button>
                        </div>
                      </div>                  
                    </div>               
                  </div>
                <?php } } ?>              
              </div>
            </div>
          </div>
        </div>
		</div>
	</div>
</div>


<script type="text/javascript">	
	getAllComments();
	function productComment(argument) {		
		$.ajax({
	        url:"<?php echo base_url(); ?>/user/product_comment",
	        method:"POST",
	        dataType: 'JSON',
	        data: $("#product_comment_byuser").serialize(),        
	        success:function(data){  
	        if(data.stage==0){
	          window.location.href = "<?php echo base_url() ?>user/login";        
	        }	        
	        $("#comment_input").val("");

	        getAllComments();
	          
	              // setInterval(function () {
	              //   $('.front-end-error').fadeOut("slow");
	              // }, 7000);
	          
	          // window.location.href = "<?php echo base_url() ?>vendor/bulk_upload";        
	        }
	  })
	}
	function getAllComments(){
					var id = $("#get_product_id").val();
            $.ajax({
                type: 'post',
                url: '<?php echo base_url(); ?>/user/getAllProductComments/'+id,                
                async: false,
                dataType: 'json',
                success: function(data){                	
                	
                		var data = data.data;
                    var html = " ";
                    var i;  
                    for(i=0; i < data.length ; i++){                    	
                    	if(data[i].image==""){
                    		data[i].image = 'dummy_images.png';
                    	}
                    	html +='<div class="customer-feedback-block"><div class="customer-feedback-content"><div class="profile-text"><h3>'+
                    								''+'<img src="<?=base_url();?>assets/user-profile/'+data[i].image+'" style="width:40px;height:40px;">'+
                                    '</h3></div><div class="profile-details"><h3>'+data[i].full_name+'</h3><span>Commented at <p>'+data[i].comment_date +'</p></span></div><div class="product-detail"><p>'+data[i].comments +'</p></div></div></div>';
                    }
                    $('#showAllComments').html(html);
                },
                error: function(){
                    //alert('Could not get Data from Database');
                }
            });
        }


</script>

<!-- <div class="customer-feedback-block">
	<div class="customer-feedback-content">
		<div class="profile-text">
			<h3>AA</h3>
		</div>	
		<div class="profile-details">
			<h3> Atul Tiwari </h3>
			<span>Commented at <p>03:02 PM, 15 Jan 2020</p></span>
		</div>
	</div>
	<div class="product-detail">
		<p>Prefect Product</p>
	</div>
</div> -->


<script>

	$(document).ready(function(){
		$('#myresult').hide();
		$('.img-zoom-lens').hide();

		$(".image_selected").mouseover(function(){
			$('.img-zoom-lens').show();
			$('#myresult').show();
		});
		$(".image_selected").mouseout(function(){
			$('.img-zoom-lens').hide();
			 $('#myresult').hide();
		});
			// body...
		
	});


	var slideIndex = 1;
	showSlides(slideIndex);

	function plusSlides(n) {
	  showSlides(slideIndex += n);
	}

	function currentSlide(n) {
	  showSlides(slideIndex = n);
	}

	function showSlides(n) {
	  var i;
	  var slides = document.getElementsByClassName("image_selected");
	  var dots = document.getElementsByClassName("demo");
	  var result_div = document.getElementsByClassName("img-zoom-result");
	 
	  if (n > slides.length) {slideIndex = 1}
	  if (n < 1) {slideIndex = slides.length}
	  for (i = 0; i < slides.length; i++) {
	      slides[i].style.display = "none";
	  }

	  for (i = 0; i < dots.length; i++) {
	      dots[i].className = dots[i].className.replace(" active", "");
	      $(".imgzoom").removeAttr("id");
	      dots[i].className = dots[i].className.replace(" imgzoom", "");
	  }

	  for (i = 0; i < result_div.length; i++) {
	      $(".result1").removeAttr("id");
	  		result_div[i].className = result_div[i].className.replace(" result1", "");
	  }

	  slides[slideIndex-1].style.display = "block";
	  dots[slideIndex-1].className += " active";
	  dots[slideIndex-1].className += " imgzoom";
	  $(".imgzoom").attr("id","myimage");
	  result_div[slideIndex-1].className += " result1";
	  $(".result1").attr("id","myresult");
	  //$("#myresult").css("display", "none");
	  $('.img-zoom-lens').remove();

	  function imageZoom(imgID, resultID) {
		  var img, lens, result, cx, cy;
		  img = document.getElementById(imgID);
		  result = document.getElementById(resultID);
		  /*create lens:*/
		  lens = document.createElement("DIV");
		  lens.setAttribute("class", "img-zoom-lens");
		  /*insert lens:*/
		  img.parentElement.insertBefore(lens, img);
		  /*calculate the ratio between result DIV and lens:*/
		  cx = '300' / lens.offsetWidth;
		  cy = '401' / lens.offsetHeight;
		  /*set background properties for the result DIV:*/
		  result.style.backgroundImage = "url('" + img.src + "')";
		  result.style.backgroundSize = (img.width * cx) + "px " + (img.height * cy) + "px";
		  /*execute a function when someone moves the cursor over the image, or the lens:*/
		  lens.addEventListener("mousemove", moveLens);
		  img.addEventListener("mousemove", moveLens);
		  /*and also for touch screens:*/
		  lens.addEventListener("touchmove", moveLens);
		  img.addEventListener("touchmove", moveLens);

		  function moveLens(e) {
		    var pos, x, y;
		    /*prevent any other actions that may occur when moving over the image:*/
		    e.preventDefault();
		    /*get the cursor's x and y positions:*/
		    pos = getCursorPos(e);
		    /*calculate the position of the lens:*/
		    x = pos.x - (lens.offsetWidth / 2);
		    y = pos.y - (lens.offsetHeight / 2);
		    /*prevent the lens from being positioned outside the image:*/
		    if (x > img.width - lens.offsetWidth) {x = img.width - lens.offsetWidth;}
		    if (x < 0) {x = 0;}
		    if (y > img.height - lens.offsetHeight) {y = img.height - lens.offsetHeight;}
		    if (y < 0) {y = 0;}
		    /*set the position of the lens:*/
		    lens.style.left = x + "px";
		    lens.style.top = y + "px";
		    /*display what the lens "sees":*/
		    result.style.backgroundPosition = "-" + (x * cx) + "px -" + (y * cy) + "px";
		  }

		  function getCursorPos(e) {
		    var a, x = 0, y = 0;
		    e = e || window.event;
		    /*get the x and y positions of the image:*/
		    a = img.getBoundingClientRect();
		    /*calculate the cursor's x and y coordinates, relative to the image:*/
		    x = e.pageX - a.left;
		    y = e.pageY - a.top;
		    /*consider any page scrolling:*/
		    x = x - window.pageXOffset;
		    y = y - window.pageYOffset;
		    return {x : x, y : y};
		  }
		}
			// Initiate zoom effect:
		imageZoom("myimage", "myresult");		
	}

	jQuery("#carousel5").owlCarousel(
    {
      autoplay: true,
      dots:false,
      lazyLoad: true,
      loop: true,
      margin: 20,
      responsiveClass: true,
      autoHeight: true,
      autoplayTimeout: 6000,
      smartSpeed: 800,
      nav: true,
      // navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
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
	var owl = $("#carousel5");                 

	$('#carousel5 .item').on('mouseover',function(e){
	    owl.trigger('stop.owl.autoplay');
	})
	$('#carousel5 .item').on('mouseleave',function(e){
	    owl.trigger('play.owl.autoplay');
	})

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
      
    });	
</script>
