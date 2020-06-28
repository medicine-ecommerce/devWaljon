
<div class="super_container">
	<!-- Single Product -->
	<div class="single_product">
		<div class="container">
			<div class="hambergar">	
				<div class="toolbox-left">
					<?php					
						$product = $product['product'] ;					
					 ?>
			    <h3><a>home</a> > <a href=""><?= $product->category_name; ?></a> > <a href=""><?= $product->name; ?></a></h3> 
			  </div>
			  <div class="pull-right">
			  	<form action="#">
						<input type="search" required="required" class="product_search_input" placeholder="Search">
						<button type="submit" class="product_search_button" value="Submit"><i class="fa fa-search"></i></button>
					</form>
			  </div>
			</div>
			<div class="row">
				<!-- Selected Image -->
				<div class="col-lg-5 order-lg-2 order-1">
					<div class="image_selected">
						<div class="img-zoom-lens"></div>
						<img class="demo cursor" src="<?php echo base_url(); ?>assets/front/images/single_4.jpg" alt="">
						<div class="img-zoom-result"></div>
					</div>
					<div class="image_selected">
						<div class="img-zoom-lens"></div>
						<img class="demo cursor" src="<?php echo base_url(); ?>assets/front/images/single_2.jpg" alt="">
						<div class="img-zoom-result"></div>
					</div>
					<div class="image_selected">
						<div class="img-zoom-lens"></div>
						<img class="demo cursor" src="<?php echo base_url(); ?>assets/front/images/single_3.jpg" alt="">
						<div class="img-zoom-result"></div>
					</div>
					<div class="image_selected">
						<div class="img-zoom-lens"></div>
						<img class="demo cursor" src="<?php echo base_url(); ?>assets/front/images/single_1.jpg" alt="">
						<div id="myresult" class="img-zoom-result"></div>
					</div>
					<div class="related-img">
						<div class="related-img-section">
							<img class="demo cursor" src="<?php echo base_url(); ?>assets/front/images/single_4.jpg" alt="" onclick="currentSlide(1)">
						</div>
						<div class="related-img-section">
							<img class="demo cursor" src="<?php echo base_url(); ?>assets/front/images/single_2.jpg" alt="" onclick="currentSlide(2)">
						</div>	
						<div class="related-img-section">
							<img class="demo cursor" src="<?php echo base_url(); ?>assets/front/images/single_3.jpg" alt="" onclick="currentSlide(3)">
						</div>	
						<div class="related-img-section">
							<img class="demo cursor" src="<?php echo base_url(); ?>assets/front/images/single_1.jpg" alt="" onclick="currentSlide(4)">
						</div>		
					</div>
				</div>

				<!-- Description -->
				<div class="col-lg-7 order-3">
					<div class="product_description">
						<!-- <div class="product_category">Laptops</div> -->
						<div class="product_name"><?= $product->name; ?></div>
						<div class="product_rating"><i class="fa fa-star"></i>  4.4</div>
						<div class="date-time">
							<i class="fa fa-clock-o"></i> <p>03:02 PM, 15 Jan 2020</p>
						</div>
						<div class="product-required product-description">
							<h4>Rx Prescription Required</h4>
						</div>
						<div class="product-manufaturer product-description">
							<h4 class="product-description-heading">Manufaturer : </h4>
							<p><?= $product->manufacturer_name; ?></p>
						</div>
						<div class="product-salt product-description">
							<h4 class="product-description-heading">Salt Composition : </h4>
							<p><?= $product->salt_composition; ?></p>
						</div>
						<div class="product-expdate product-description">
							<h4 class="product-description-heading">Expiry Date : </h4>
							<p><?= $product->expiry_date; ?></p>
						</div>
						<div class="product-AnsQues product-description">
							<i class='fas fa-arrow-down'></i>
							<p>105 Answereq Questions</p>
						</div>
						<div class="product-alternate-brnd product-description">
							<i class='fas fa-arrow-down'></i>
							<p>105 View Alternate Brands</p>
						</div>
						<div class="order_info d-flex flex-row">
							<form action="#">
								<div class="product-price-details">
									<div class="row">
										<div class="col-md-2">
											<div class="product_price">
												<h5 class="product-price-head">Price</h5>
												<p>MRP <?= $product->mrp; ?></p>
												<h4><i class='fas fa-rupee-sign'></i> <?= $product->sale_price; ?></h4>
											</div>
										</div>
										<div class="col-md-10">
											<div class="product_quantity">	
												<h5 class="product-price-head">Quantity</h5>
												<div class="def-number-input number-input safari_only add-quantity  add-quantity-product">
				                  <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
				                  <input class="quantity" min="0" name="quantity" value="1" type="number">
				                  <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
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
										<h4><i class='fas fa-rupee-sign'></i> <?= $product->sale_price; ?></h4>
										<p class="price-off">Get 20% off</p>
									</div>
									<div class="pull-right">
										<button type="button" class="button cart_button">Add to Cart</button>
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
			      <li class="product_li">
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
		        	<p><?= $product->about_product; ?></p>
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
		        <p><?= $product->how_to_use; ?></p> 
		      </div>
		      <div class="tab-pane fade" id="uses" role="tabpanel" aria-labelledby="uses-tab">
		        <p><?= $product->when_to_use; ?></p> 
		      </div>
		      <div class="tab-pane fade" id="side-eff" role="tabpanel" aria-labelledby="side-eff-tab">
		        <p><?= $product->side_effect; ?></p> 
		      </div>
		      <div class="tab-pane fade" id="how-use" role="tabpanel" aria-labelledby="how-use-tab">
		        <p><?= $product->how_to_use; ?></p> 
		      </div>
		      <div class="tab-pane fade" id="how-work" role="tabpanel" aria-labelledby="how-work-tab">
		        <p><?= $product->how_to_work; ?></p> 
		      </div>
		      <div class="tab-pane fade" id="strong-info" role="tabpanel" aria-labelledby="strong-info-tab">
		        <p><?= $product->how_to_store; ?></p> 
		      </div>
		      <div class="tab-pane fade" id="safety-info" role="tabpanel" aria-labelledby="safety-info-tab">
		        <p><?= $product->safety_info; ?></p> 		        
		      </div>
		    </div>
		  </div>
		</div>    
	</div>

	<div class="feedback">
		<div class="container">
			<div class="row">
				<div class="col-md-7">
					<div class="product-main-heading">
						<h4>Frequently Asked Questions</h4>
					</div>
					<div class="faq-accordine">
						<div class="container">
						  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
						    <div class="panel panel-default">
						      <div class="panel-heading" role="tab" id="headingOne">
						        <h4 class="panel-title">
						        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
						          Collapsible Group Item #1
						        </a>
						      </h4>
						      </div>
						      <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
						        <div class="panel-body">
						          Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
						          on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table,
						          raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
						        </div>
						      </div>
						    </div>
						    <div class="panel panel-default">
						      <div class="panel-heading" role="tab" id="headingTwo">
						        <h4 class="panel-title">
						        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
						          Collapsible Group Item #2
						        </a>
						      </h4>
						      </div>
						      <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
						        <div class="panel-body">
						          Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
						          on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table,
						          raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
						        </div>
						      </div>
						    </div>
						    <div class="panel panel-default">
						      <div class="panel-heading" role="tab" id="headingThree">
						        <h4 class="panel-title">
						        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
						          Collapsible Group Item #3
						        </a>
						      </h4>
						      </div>
						      <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
						        <div class="panel-body">
						          Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
						          on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table,
						          raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
						        </div>
						      </div>
						    </div>
						  </div>
						</div>
					</div>
				</div>
				<div class="col-md-5">
					<div class="customer-feedback-sec">
						<h5>Customer Feedback</h5>						
						<div id="showAllComments">							
						</div>
						<div class="add-comment">
							<div>
								<form method="post" id="product_comment_byuser">
									<input type="search" required="required" name="product_comment" class="product_comment_input" placeholder="Comment Something">
									<input id="get_product_id" type="hidden" name="product_id" value="<?= $product->product_id; ?>">
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

	<div class="alternate-brnd">
		<div class="container">
			<div class="product-main-heading">
				<h4>Alternate Brands</h4>
			</div>
			<div class="alternate-brnd-content">
				<div class="row">
					<div class="col-md-3">
						<div class="alternate-brnd-box">
							<div class="alternate-brnd-top">
								<div class="alternate-brnd-top-left">
									<div class="alternate-brnd-img">
										<img src="<?php echo base_url(); ?>assets/front/images/single_2.jpg" alt="">
									</div>
									<span class="offer-green">10% <i class='fas fa-arrow-down'></i></span>
								</div>
								<div class="alternate-brnd-top-right">
									<div class="alternate-brnd-details">
										<div class="alternate-brnd-name">
											Tablet Name
										</div>
										<div class="alternate-brnd-form">
											Liquied
										</div>
									</div>
								</div>
							</div>
							<div class="alternate-brnd-bown">
								<div class="alternate-brnd-bown-left">
									<p><i class='fas fa-rupee-sign'></i> 36</p>
								</div>
								<div class="alternate-brnd-bown-right">
									<a class="add-cart-btn">Add</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="alternate-brnd-box">
							<div class="alternate-brnd-top">
								<div class="alternate-brnd-top-left">
									<div class="alternate-brnd-img">
										<img src="<?php echo base_url(); ?>assets/front/images/single_2.jpg" alt="">
									</div>
									<span class="offer-green">10% <i class='fas fa-arrow-down'></i></span>
								</div>
								<div class="alternate-brnd-top-right">
									<div class="alternate-brnd-details">
										<div class="alternate-brnd-name">
											Tablet Name
										</div>
										<div class="alternate-brnd-form">
											Liquied
										</div>
									</div>
								</div>
							</div>
							<div class="alternate-brnd-bown">
								<div class="alternate-brnd-bown-left">
									<p><i class='fas fa-rupee-sign'></i> 36</p>
								</div>
								<div class="alternate-brnd-bown-right">
									<a class="add-cart-btn">Add</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="alternate-brnd-box">
							<div class="alternate-brnd-top">
								<div class="alternate-brnd-top-left">
									<div class="alternate-brnd-img">
										<img src="<?php echo base_url(); ?>assets/front/images/single_2.jpg" alt="">
									</div>
									<span class="offer-green">10% <i class='fas fa-arrow-down'></i></span>
								</div>
								<div class="alternate-brnd-top-right">
									<div class="alternate-brnd-details">
										<div class="alternate-brnd-name">
											Tablet Name
										</div>
										<div class="alternate-brnd-form">
											Liquied
										</div>
									</div>
								</div>
							</div>
							<div class="alternate-brnd-bown">
								<div class="alternate-brnd-bown-left">
									<p><i class='fas fa-rupee-sign'></i> 36</p>
								</div>
								<div class="alternate-brnd-bown-right">
									<a class="add-cart-btn">Add</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="alternate-brnd-box">
							<div class="alternate-brnd-top">
								<div class="alternate-brnd-top-left">
									<div class="alternate-brnd-img">
										<img src="<?php echo base_url(); ?>assets/front/images/single_2.jpg" alt="">
									</div>
									<span class="offer-red">10% <i class='fas fa-arrow-down'></i></span>
								</div>
								<div class="alternate-brnd-top-right">
									<div class="alternate-brnd-details">
										<div class="alternate-brnd-name">
											Tablet Name
										</div>
										<div class="alternate-brnd-form">
											Liquied
										</div>
									</div>
								</div>
							</div>
							<div class="alternate-brnd-bown">
								<div class="alternate-brnd-bown-left">
									<p><i class='fas fa-rupee-sign'></i> 36</p>
								</div>
								<div class="alternate-brnd-bown-right">
									<a class="add-cart-btn">Add</a>
								</div>
							</div>
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
                    	html +='<div class="customer-feedback-block"><div class="customer-feedback-content"><div class="profile-text"><h3>'+
                    								''+'<img src="<?=base_url();?>assets/img/vendor_profile/'+data[i].image+'" style="width:40px;height:40px;">'+
                                    '</h3></div><div class="profile-details"><h3>'+data[i].full_name+'</h3><span>Commented at <p>'+data[i].comment_date +'</p></span></div><div class="product-detail"><p>'+data[i].comments +'</p></div></div></div>';
                    }
                    $('#showAllComments').html(html);
                },
                error: function(){
                    alert('Could not get Data from Database');
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
		$(".image_selected").mouseover(function(){
			$('#myresult').show();
		});
		$(".image_selected").mouseout(function(){
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
		  cx = result.offsetWidth / lens.offsetWidth;
		  cy = result.offsetHeight / lens.offsetHeight;
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

	 //  $(".imgzoom").hover(function(){
		//   	$("#myresult").css("display", "block");
		// 	}, function(){
		// 		$("#myresult").css("display", "none");
		// });		
	}

</script>
