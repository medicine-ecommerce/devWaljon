		<footer class="footer">
			<div class="container-fluid footer-content">
				<div class="row">
					<div class="col-md-4">
					
					</div>
					<div class="col-md-8">
						<!-- <div class="row">
							<div class="col-md-4">
								<div class="ft-box text-center">
									<div class="ft-logo">
										<img src="<?php echo base_url('assets/img/thumbs-up.png');  ?>">			
									</div>
									<div class="ft-title">
										<h3>Reliable</h3>	
									</div>
									<div class="ft-content">
										Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="ft-box text-center">
									<div class="ft-logo">
										<img src="<?php echo base_url('assets/img/secure.png');  ?>">		
									</div>
									<div class="ft-title">
										<h3>Secure</h3>	
									</div>
									<div class="ft-content">
										Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
									</div>
								</div>	
							</div>
							<div class="col-md-4">
								<div class="ft-box text-center">
									<div class="ft-logo">
										<img src="<?php echo base_url('assets/img/rupee.png');  ?>">			
									</div>
									<div class="ft-title">
										<h3>Affordable</h3>	
									</div>
									<div class="ft-content">
										Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
									</div>
								</div>	
							</div>
						</div> -->
						<div class="other-section">
							<div class="os-content">
								<span class="ft-os-heading">Know Us</span>	
								<span class="ft-os">
									<span class="round"> About Us	</span>
									<span class="round"> Contact Us	</span>
									<span class="round"> Press Coverage	</span>
									<span class="round"> Business Partnership	</span>
									<span class="round"> Careers	</span>
								</span>
							</div>	
							<div class="os-content">
								<span class="ft-os-heading">Our Policies</span>	
								<span class="ft-os">
									<span class="round"> Privacy Policy	</span>
									<span class="round"> Terms & Condition	</span>
									<span class="round"> Editorial Policy	</span>
									<span class="round"> Return Policy	</span>
									<span class="round"> IP Policy	</span>
								</span>
							</div>
							<div class="os-content">
								<span class="ft-os-heading">Our Services</span>	
								<span class="ft-os">
									<span class="round"> Other Medicines	</span>
									<span class="round"> consult Doctor Online	</span>
									<span class="round"> Ayurved Articles	</span>
									<span class="round"> Hindi Articles	</span>
									<span class="round"> Diabetes Care Plan	</span>
								</span>
							</div>
						</div>
						<div class="connect-on">
							<div class="row">
								<div class="col-md-4">
									<div class="cn-heading">
										<h4>Connect On</h4>
									</div>
									<div class="cn-content">
										<ul class="social-media">
			                <li><a href="" target="_blank" class="instagram"><i class='fab fa-instagram'></i></a></li>
			                <li><a href="" target="_blank" class="facebook"><i class='fab fa-facebook-f'></i></a></li>
			                <li><a href="" target="_blank" class="twitter"><i class='fab fa-twitter'></i></a></li>
			                <li><a href="" target="_blank" class="google-plus"><i class='fab fa-google-plus-g'></i></a></li>
			              </ul>	
									</div>	
								</div>
								<div class="col-md-8">
									<!-- <img src="<?php echo base_url('assets/img/thumbs-up.png');?>"> -->
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>
			<div class="copyright-sec">
				<div class="row">
					<div class="col-md-12">
						<div class="text-center">
							<!-- <p>Copyright &copy; 2020. All Rights Reserved</p> -->
							<p>&copy;2020 rxkin.com All rights reserved. In compliance with Drugs and Cosmetics Act, 1940 and Drugs and Cosmetics Rules, 1945, we don't process requests for Schedule X and other habit forming drugs.</p>
						</div>	
					</div>	
				</div>
			</div>
		</footer>
<script src="<?php echo base_url(); ?>assets/front/js/jquery-3.3.1.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.typeahead.js"></script>

<script src="<?php echo base_url(); ?>assets/front/styles/bootstrap4/popper.js"></script>
<script src="<?php echo base_url(); ?>assets/front/styles/bootstrap4/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/front/plugins/greensock/TweenMax.min.js"></script>
<script src="<?php echo base_url(); ?>assets/front/plugins/greensock/TimelineMax.min.js"></script>
<script src="<?php echo base_url(); ?>assets/front/plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="<?php echo base_url(); ?>assets/front/plugins/greensock/animation.gsap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/front/plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="<?php echo base_url(); ?>assets/front/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="<?php echo base_url(); ?>assets/front/plugins/slick-1.8.0/slick.js"></script>
<script src="<?php echo base_url(); ?>assets/front/plugins/easing/easing.js"></script>
<script src="<?php echo base_url(); ?>assets/front/js/custom.js"></script>

<script>
$.typeahead({
    input: '.header_search_input',
    minLength: 1,
    order: "asc",
    offset: true,
    hint: true,
    source: {
        ajax: {
            type: "POST",
            url: "<?php echo base_url('user/search'); ?>",
            data: {
                key: $('.header_search_input').val()
            }
        }
    },
    callback: {
        onClick: function (node, a, item, event) {
        	window.location.href = '<?php echo base_url('user/product_category?filter=')?>'+item.display;
 
            console.log(node)
            console.log(a)
            console.log(item)
            console.log(event)
 
            console.log('onClick function triggered');
 
        },
        onSubmit: function (node, form, item, event) {
 
            console.log(node)
            console.log(form)
            console.log(item)
            console.log(event)
 
            console.log('onSubmit override function triggered');
 
        }
    }
});  
</script>
                  
<script type="text/javascript">

    $('a.qty-minus').on('click', function(e) {
        e.preventDefault();
        var $this = $(this);
        var $input = $this.closest('div').find('input');
        var value = parseInt($input.val());
    
        if (value > 1) {
            value = value - 1;
        } else {
            value = 0;
        }
    
    $input.val(value);
        
    });

    $('a.qty-plus').on('click', function(e) {
        e.preventDefault();
        var $this = $(this);
        var $input = $this.closest('div').find('input');
        var value = parseInt($input.val());

        if (value < 100) {
        value = value + 1;
        } else {
            value =100;
        }

        $input.val(value);
    });
    function addToCart(id,type){		
		// var quantity = $('#quantity').val();				
	    $(this).addClass("hide-button");
	    $(this).siblings("div").removeClass("hide-button");
	    $(this).siblings("input").val("1");
		var quantity = 1 ;		
		
		 $.ajax({
          url:"<?php echo base_url(); ?>/user/add_to_cart",
          method:"POST",
          dataType: 'JSON',
          data: {id:id,quantity:quantity},        
          success:function(data){                                         
          	console.log(data);
            $(".cart-quantity").text(data.quantity);
            $(".cart-quantity").addClass("show-cart");
          }
    })

	}
	function updateCart(id,quantity,type){     

      $.ajax({
            url:"<?php echo base_url(); ?>/user/update_cart",
            method:"POST",
            dataType: 'JSON',
            data: {id:id,quantity:quantity.value,type:type},        
            success:function(data){                                                    
              if(data.quantity > 0){              
                $(".cart-quantity").text(data.quantity);
                $(".cart-quantity").addClass("show-cart");
              }
              var page = "<?php echo $this->uri->segment(2); ?>";
              if(page=='checkout' || page=='cart'){
              	location.reload();              	
              }
            
            }
      })

    }
    $(document).ready(function(){
		// var id = document.getElementsByClassName("hid_id")[0].value;
		// if(id!=''){
		// 	$('#error-myModal').modal('show'); 
		// }					
		$('.remove-alert').click(function() {
			$('.custom-success-alert').fadeOut("slow")
		})
		setInterval(function () {
	        $('.custom-success-alert').fadeOut("slow")
    	}, 9000);
    	
    	$('.remove-red-alert').click(function() {
			$('.custom-error-alert').fadeOut("slow")
		})
		setInterval(function () {
	        $('.custom-error-alert').fadeOut("slow")
    	}, 12000);

		
		$(document).ready(function(){
	      $('[data-toggle="tooltip"]').tooltip();   
	    });
    	//
    	//  $(document).ready(function(){
	    //   $('[data-toggle="tooltip"]').tooltip();   
	    // }); 

	});
// RESTRICT INPUTS TO NUMBERS ONLY WITH A MIN OF 0 AND A MAX 100
// $('input').on('blur', function(){

//     var input = $(this);
//     var value = parseInt($(this).val());

//         if (value < 0 || isNaN(value)) {
//             input.val(0);
//         } else if
//             (value > 100) {
//             input.val(100);
//         }
// });
$(window).click(function(e) {          
  if(e.target.id=='cancelOrder' || e.target.id=='closeOrder'){
      location.reload();        
   }
});
</script>


<!-- custom -->
