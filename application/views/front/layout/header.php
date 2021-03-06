<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="OneTech shop project">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="<?php echo base_url(); ?>assets/img/fevicon.png" type="image/ico" />

	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/front/styles/bootstrap4/bootstrap.min.css">
	<link href="<?php echo base_url(); ?>assets/front/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/front/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/front/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/front/plugins/OwlCarousel2-2.2.1/animate.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/front/plugins/slick-1.8.0/slick.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/front/styles/main_styles.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/front/styles/responsive.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- Custom -->
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDcMN_eJSbhtN-L0UjFL1JgsEgojxK6p9I&libraries=places"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" media="print">      
		<link href='https://fonts.googleapis.com/css?family=Lato:300,400,700,400italic,300italic' rel='stylesheet' type='text/css'>
		<!-- <link rel="stylesheet" href="<?php echo base_url('assets/owlcarousel/docs.theme.min.css');?>"> -->
		<!-- Owl Stylesheets -->
		<!-- <link rel="stylesheet" href="<?php echo base_url('assets/owlcarousel/owl.carousel.min.css');?>"> -->
		<link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.css">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick-theme.css">
		<link rel="stylesheet" href="<?php echo base_url('assets/owlcarousel/owl.theme.default.min.css');?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/css/style.css');?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/css/main.css');?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/css/user_style.css');?>">
		<script src='https://kit.fontawesome.com/a076d05399.js'></script>
		<script src="<?php echo base_url('assets/owlcarousel/jquery.min.js');?>"></script>
		<script src="<?php echo base_url('assets/owlcarousel/owl.carousel.js');?>"></script>
		<link href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/css/intlTelInput.css" rel="stylesheet">
   	 	<script src="<?php echo base_url(); ?>assets/js/intlTelInput.js"></script>
	<!--  -->
	<link href="<?php echo base_url(); ?>vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/main.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/style.css');?>">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php echo base_url('assets/js/jquery.typeahead.css');?>">

	<title>Rxkin</title>

<style>
.tt-query {
	box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset;
}
.tt-hint {
	color: #999999;
}
.tt-menu {
	background-color: #FFFFFF;
	border: 1px solid rgba(0, 0, 0, 0.2);
	border-radius: 8px;
	box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
	margin-top: 12px;
	padding: 8px 0;
	width: 422px;
}
.tt-suggestion {
	font-size: 22px;  /* Set suggestion dropdown font size */
	padding: 3px 20px;
}
.tt-suggestion:hover {
	cursor: pointer;
	background-color: #0097CF;
	color: #FFFFFF;
}
.tt-suggestion p {
	margin: 0;
}
.content {
  padding: 16px;
}

.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}

.sticky + .content {
  padding-top: 102px;
}
.all-section {
    z-index: 9;
}
.stick-header.sticky {
    background-color: white;
    box-shadow: -1px 6px 12px rgba(0, 0, 0, 0.06);
    z-index: 999;
}

</style>
</head>
<body>
	<!-- Header -->
	
	<header class="header">

		<div class="stick-header" id="myHeader">			
			<!-- Top Bar -->
			<div class="top_bar">
				<div class="container">
					<div class="row">
						<div class="col d-flex flex-row main-header-section">
							<div class="top_bar_logo">
								<a href="<?php echo base_url();?>">
									<img src="<?php echo base_url(); ?>assets/img/logo.png">
								</a>
							</div>
							<div class="top_bar_contact_btn">
								<!-- <a href="<?php echo base_url('user');?>">Medicine</a>
								<a href="#">Consult A Doctor</a>
								<a href="#">Book Appointment</a> -->
							</div>

							<div class="top_bar_content ml-auto">
								<div class="top_bar_user">
									<a href="<?php echo base_url('user/login');?>" class="top-login-img mobile-show">
										<span class="dummy-img"> <img src="<?php echo base_url('assets/img/dummy_images.png');?>"> </span>
									</a>
									<a href="<?php echo base_url('user/cart');?><?php echo base_url('user/cart');?>" class="top_bar_cart"><i class="fa fa-cart-plus"></i>
										<span class="cart-quantity <?php if(!empty($cart_quantity)){ echo "show-cart";}else{ echo  "hide-cart" ;} ?> "> <?php if(!empty($cart_quantity)){ echo $cart_quantity; } ?> </span>
									</a>
									<?php if(empty($this->session->userdata('user_type'))){ ?>
										<div class="top_bar_user_content"><a href="<?php echo base_url();?>/user/login">Login</a></div>
										<div class="top_bar_user_content"><a href="<?php echo base_url();?>/user/signup">Register</a></div>
									<?php } ?> 
									<?php 
									if(!empty($this->session->userdata('user_type'))){ ?>				
									<div class="main_nav_menu">
										<ul class="standard_dropdown header-image">
											<li>
												<div class="head-profile-img">	
													<img src="<?= !empty($profile->image) ? base_url()."assets/user-profile/".$profile->image : base_url()."assets/img/dummy_images.png" ?>" alt="" class="header-profile-img">
												</div>
												<ul class="user-menu">
													<li><a href="<?php echo base_url('user/profile');?>">Your Profile</a></li>
													<li><a href="<?php echo base_url('user/orderListing');?>">Your Order</a></li>
													<li><a href="<?php echo base_url('user/logout');?>">Logout</a></li>
												</ul>
											</li>
										</ul>				
									</div>	
									<?php } ?>								
								</div>
							</div>
						</div>
					</div>
				</div>		
			</div>
			<!-- Header Main -->
			<div class="header_main">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-12 order-lg-2 order-3 text-lg-left text-right">
							<div class="header_search">
								<div class="header_search_content">
									<div class="header_search_form_container">
										<form action="#" class="header_search_form clearfix">
											<span class="location-logo"><i class="fa fa-map-marker"></i></i></span>
											<input type="search" required="required" class="header_search_input" placeholder="Enter Delivery Location" id="location">
										</form>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-5 col-12 order-lg-2 order-3 text-lg-left text-right">
							<div class="header_search mobile-show">
								<div class="header_search_content">
									<div class="header_search_form_container">
										<form class="header_search_form clearfix">
										    <div class="typeahead__container">
									            <input class="header_search_input" name="text" placeholder="Search" autocomplete="off">
									            <button type="submit" class="header_search_button trans_300" value="Submit"><i class="fa fa-search"></i></button>
										    </div>
										</form>
										<!-- <form action="#" class="header_search_form clearfix">
											<input type="search" required="required" class="header_search_input typeahead" placeholder="Search for Medicine">

											<button type="submit" class="header_search_button trans_300" value="Submit"><i class="fa fa-search"></i></button>
										</form> -->
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-12 order-lg-2 order-3 text-lg-left text-right">
							<div class="header_search">
								<div class="header_search_content">
									<div class="header_search_form_container">
										<a href="<?php echo base_url('user/order_with_prescription');?>" class="upload-pres">Upload Prescription</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>		
		</div>	
		<!-- Main Navigation -->
		<nav class="main_nav">
			<div class="container">
				<div class="row menu-section">
					<div class="col menu-column">						
						<div class="main_nav_content d-flex flex-row">
							<!-- Main Nav Menu -->							
							<div class="main_nav_menu">
								<ul class="standard_dropdown main_nav_dropdown">
									<?php									
									if(!empty($product_subcategory)){ 
										$c = 1;
										foreach ($product_subcategory as $key => $value) { ?>
									
									<li class="hassubs <?php if($c==5){ echo "menu-float-right05"; } ?> ">				
										<a href="#" class="main-menu-n"><?= $value['main_category_name']; ?> <i class="fas fa-chevron-up"></i></a>
										<ul class="ul-menu" id="limheight">
											<?php  
											$i = 1;											
											if(!empty($value['sub_category'])){
												foreach ($value['sub_category'] as $value1) {  ?>
													<!-- <div class="<?php if($i < 4){ echo "div-float-left"; }else{ echo "div-float-right"; }  ?> "> -->
													<div class="div-float-right">

											 		<li><a href="<?php echo base_url('user/category/'.base64_encode($value['main_category_id'])."/".base64_encode($value1['category_id'])); ?>"  class="sub-category-name"><?= $value1['category_name']; ?></a></li>
											 <?php 
												if(!empty($value1['nested_category'])){
													foreach ($value1['nested_category'] as $value2) {  ?>

													<li><a href="<?php echo base_url('user/category/'.base64_encode($value['main_category_id'])."/".base64_encode($value1['category_id'])); ?>"><?= $value2->nested_category_name; ?></a></li>

													<?php 
													$i+= 1;
													  } } ?>		
													</div>
												<?php } } ?>											
										</ul>										
									</li>
									<?php $c+=1;
									 } } ?>									
									<!-- <li class="hassubs">
										<a href="#">Pages<i class="fas fa-chevron-down"></i></a>
										<ul>
											<li><a href="<?php echo base_url('user/shop'); ?>">Shop<i class="fas fa-chevron-down"></i></a></li>
											<li><a href="<?php echo base_url('user/product'); ?>">Product<i class="fas fa-chevron-down"></i></a></li>
											<li><a href="blog.html">Blog<i class="fas fa-chevron-down"></i></a></li>
											<li><a href="blog_single.html">Blog Post<i class="fas fa-chevron-down"></i></a></li>
											<li><a href="regular.html">Regular Post<i class="fas fa-chevron-down"></i></a></li>
											<li><a href="cart.html">Cart<i class="fas fa-chevron-down"></i></a></li>
											<li><a href="contact.html">Contact<i class="fas fa-chevron-down"></i></a></li>
										</ul>
									</li> -->
								</ul>
							</div>
							<!-- Menu Trigger -->
							<div class="menu_trigger_container ml-auto">
								<div class="menu_trigger d-flex flex-row align-items-center justify-content-end">
									<div class="menu_burger">
										<div class="menu_trigger_text">menu</div>
										<div class="cat_burger menu_burger_inner"><span></span><span></span><span></span></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</nav>				
		<!-- Menu -->
		<div class="page_menu">
			<div class="container">
				<div class="row">
					<div class="col">						
						<div class="page_menu_content">							
							<div class="page_menu_search">
								<form action="#">
									<input type="search" required="required" class="page_menu_search_input" placeholder="Search for products...">
								</form>
							</div>
							<ul class="page_menu_nav">
								<li class="page_menu_item has-children">
									<a href="#">Language<i class="fa fa-angle-down"></i></a>
									<ul class="page_menu_selection">
										<li><a href="#">English<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Italian<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Spanish<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Japanese<i class="fa fa-angle-down"></i></a></li>
									</ul>
								</li>
								<li class="page_menu_item has-children">
									<a href="#">Currency<i class="fa fa-angle-down"></i></a>
									<ul class="page_menu_selection">
										<li><a href="#">US Dollar<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">EUR Euro<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">GBP British Pound<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">JPY Japanese Yen<i class="fa fa-angle-down"></i></a></li>
									</ul>
								</li>
								<li class="page_menu_item">
									<a href="#">Home<i class="fa fa-angle-down"></i></a>
								</li>
								<li class="page_menu_item has-children">
									<a href="#">Super Deals<i class="fa fa-angle-down"></i></a>
									<ul class="page_menu_selection">
										<li><a href="#">Super Deals<i class="fa fa-angle-down"></i></a></li>
										<li class="page_menu_item has-children">
											<a href="#">Menu Item<i class="fa fa-angle-down"></i></a>
											<ul class="page_menu_selection">
												<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
												<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
												<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
												<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
											</ul>
										</li>
										<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
									</ul>
								</li>
								<li class="page_menu_item has-children">
									<a href="#">Featured Brands<i class="fa fa-angle-down"></i></a>
									<ul class="page_menu_selection">
										<li><a href="#">Featured Brands<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
									</ul>
								</li>
								<li class="page_menu_item has-children">
									<a href="#">Trending Styles<i class="fa fa-angle-down"></i></a>
									<ul class="page_menu_selection">
										<li><a href="#">Trending Styles<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
									</ul>
								</li>
								<li class="page_menu_item"><a href="blog.html">blog<i class="fa fa-angle-down"></i></a></li>
								<li class="page_menu_item"><a href="contact.html">contact<i class="fa fa-angle-down"></i></a></li>
							</ul>
							
							<div class="menu_contact">
								<div class="menu_contact_item"><div class="menu_contact_icon"><img src="<?php echo base_url(); ?>assets/front/images/phone_white.png" alt=""></div>+38 068 005 3570</div>
								<div class="menu_contact_item"><div class="menu_contact_icon"><img src="<?php echo base_url(); ?>assets/front/images/mail_white.png" alt=""></div><a href="mailto:fastsales@gmail.com">fastsales@gmail.com</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</header>
	<div class="container">		
		<?php if($this->session->flashdata('success')){ ?>
	    <div class="custom-success-alert">    
	      <a class="remove-alert"> <span class="glyphicon glyphicon-remove custom-remove"></span></a>
	      <p>   
	        <span class="glyphicon glyphicon-ok-sign"></span>
	        <?= $this->session->flashdata('success');?> 
	      </p>
	    </div>
	    <?php }?>
	    <?php if($this->session->flashdata('error')){ ?>
	    <div class="custom-error-alert">    
	      <a class="remove-red-alert"><span class="glyphicon glyphicon-remove custom-remove"></span></a>
	      <span class="glyphicon glyphicon-warning-sign"></span>
	      <?= $this->session->flashdata('error');?> 
	    </div>
	    <?php }?>
	</div>

<script type="text/javascript">
	$(document).ready(function () {
		// $("#location").attr("placeholder","Enter Delivery Location");		
		
	   google.maps.event.addDomListener(window, 'load', initialize);
	});

	function initialize() {
	    var input = document.getElementById('location');
	    var autocomplete = new google.maps.places.Autocomplete(input);
	}
	$(document).ready(function () {
		$('.ul-menu').mouseover(function(){
			$(this).parents('.hassubs').find('.main-menu-n').addClass("main-menu-name");
		});
		$('.ul-menu').mouseleave(function(){
			$(this).parents('.hassubs').find('.main-menu-n').removeClass("main-menu-name");
		});
	});

	window.onscroll = function() {myFunction()};

	var header = document.getElementById("myHeader");
	var sticky = header.offsetTop;

	function myFunction() {
	  	// console.log(window.pageYOffset);
	  	// console.log(sticky);
	  if (window.pageYOffset > sticky) {
	    header.classList.add("sticky");
	  } else {
	    header.classList.remove("sticky");
	  }
	}


	
</script>