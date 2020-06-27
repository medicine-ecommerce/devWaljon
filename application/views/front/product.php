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
						<img src="<?php echo base_url(); ?>assets/front/images/single_4.jpg" alt="">
					</div>
					<div class="related-img">
						<div class="related-img-section">
							<img src="<?php echo base_url(); ?>assets/front/images/single_4.jpg" alt="">
						</div>
						<div class="related-img-section">
							<img src="<?php echo base_url(); ?>assets/front/images/single_2.jpg" alt="">
						</div>	
						<div class="related-img-section">
							<img src="<?php echo base_url(); ?>assets/front/images/single_3.jpg" alt="">
						</div>	
						<div class="related-img-section">
							<img src="<?php echo base_url(); ?>assets/front/images/single_1.jpg" alt="">
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
												<input id="quantity_input" type="text" pattern="[0-9]*" value="1">
												<div class="quantity_buttons">
													<div id="quantity_inc_button" class="quantity_inc quantity_control"><i class="fas fa-chevron-up"></i></div>
													<div id="quantity_dec_button" class="quantity_dec quantity_control"><i class="fas fa-chevron-down"></i></div>
												</div>
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
						<div class="customer-feedback-block">
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
						</div>
						<div class="customer-feedback-block">
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
						</div>
						<div class="customer-feedback-block">
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
						</div>
						<div class="customer-feedback-block">
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
						</div>
						<div class="add-comment">
							<div>
								<form action="#">
									<input type="search" required="required" class="product_comment_input" placeholder="Comment Something">
									<button type="submit" class="product_comment_button" value="Submit"><i class="fa fa-paper-plane"></i></button>
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
