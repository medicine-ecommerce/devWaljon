
<style type="text/css">
	.nav-md .container.body .right_col {    
    background-color: #fff;
	}
</style>
<script src="<?php echo base_url(); ?>assets/js/countrystatecity.js"></script>
<script src="<?php echo base_url(); ?>vendors/jquery/dist/jquery.min.js"></script>    
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="right_col registration-page">

	<div class="green-section alert-section  <?= ($status->is_active)==0 ? "show-section":"hide-section" ?>  " >
	  <a class="alert-box alert-yellow-box profileverify-alert">
	    <span class="alert-icon"><i class="fa fa-exclamation-triangle"></i></span>
	    <span class="alert-content"><p> Your profile is inactive status please complete you profile.</p></span>
	  </a>  
	</div>
	<div class="custom-error-alert front-end-validation">		
		<a class="remove-red-alert"><span class="glyphicon glyphicon-remove custom-remove"></span></a>
		<span class="glyphicon glyphicon-warning-sign"></span>
		<p id="error-text"></p>
	</div>

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

	<form id="personal_details" method="post" action="<?php echo base_url() ?>/vendor/vendor_profile/<?= base64_encode($this->session->userdata('user_id')); ?>" enctype="multipart/form-data">		
		<div class="row padding-bottom20 padding-top50">
			<div class="col-md-3">
				<h5>Personal Information </h5>
			</div>
			<div class="col-md-9">
				<hr class="custom-form-hr">
			</div>		
		</div>		
		<div class="row"> 
			<div class="col-md-8">
				<div class="col-md-4">
					<div class="form-group label-float-top">
						<input id="full_name" type="text" class="form-control control-float-top" name="full_name" value="<?php echo set_value('full_name'); ?>">
						<label for="name">Full Name</label>
				  	</div>
				</div>				
				<div class="col-md-4">
					<div class="form-group label-float-top">
						<input type="date" class="form-control control-float-top" id="date_of_birth" name="date_of_birth" value="<?php echo set_value('date_of_birth')?>" >
						<label class="date-type-format">Date Of Birth</label>
					</div>
				</div>
				<div class="col-md-4">
					 <div class="form-group label-float-top">
						<input type="text" class="form-control control-float-top" id="address" name="address" value="<?php echo set_value('address')?>">
						<label for="email">Address</label>
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group label-float-top">
						<select name="country" class="form-control control-float-top custom-select countries" id="countryId" value="<?php echo set_value('country')?>">
							<option></option>
						</select>
						<label for="email">Country</label>					
					</div>
				</div>			
				<div class="col-md-4">
					<div class="form-group label-float-top find-state">
						<select name="state" class="form-control control-float-top custom-select states" id="stateId" value="<?php echo set_value('state')?>">		    			
						</select>		
						<label class="custom-state" for="country">State</label>
					</div>
				</div>
				<div class="col-md-4">
					 <div class="form-group label-float-top">
					 	<select name="city" class="form-control control-float-top custom-select cities" id="cityId" value="<?php echo set_value('city')?>">					    
						</select>
						<label for="country">City</label>
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group label-float-top">
						<input type="text" maxlength="6" id="pin_code" class="form-control control-float-top" name="pin_code" value="<?php echo set_value('pin_code')?>">
						<label for="email">Zip Postal Code</label>
					</div>
				</div>			
				<div class="col-md-4">
					<div class="form-group label-float-top">						
						<input onkeyup="checkExistMobile()" id="mobile" class="form-control control-float-top mobile-intel" type="tel" minlength="10" maxlength="11" name="mobile" onkeypress="return (event.charCode == 8 || event.charCode == 0) ? null : event.charCode >= 48 && event.charCode <= 57" value="<?php if(!empty($this->session->userdata('mobile'))){ ?> <?php  echo $this->session->userdata('mobile'); echo "readonly"; ?> <?php } ?>"<?= (!empty($this->session->userdata('mobile'))) ? 'readonly=""' :"" ?> >
						<!-- <label for="email">Mobile</label> -->
							<span class="input-error-message " id="mobile-error"></span>
							<a onclick="updateMobile()" class="update-text">Update Mobile</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group label-float-top">
						<input onkeyup="checkExistEmail()" type="email" id="email" class="form-control control-float-top" name="email" value="<?php if(!empty($this->session->userdata('email'))){ ?> <?php  echo $this->session->userdata('email'); ?> <?php } ?>" <?= (!empty($this->session->userdata('email'))) ? 'readonly=""' :"" ?>  >
						<label id="email-label" for="email">Email</label>
						<span class="input-error-message error-position-ab" id="email-error"></span>
						<a onclick="updateEmail()" class="update-text">Update Email</a>
					</div>
				</div>
			</div>
			<div class="col-md-4 text-right">
				<div class="profile-image-section">								
					<label class="image-title">Upload Profile Image</label>
					<div>					
						<img src="<?php echo base_url(); ?>assets/img/profile_dummy.png" class="profile-images-custom" id="preview">
					</div>
					<button type="button" class="btn btn-primary image-upload-button">Upload</button>
					<input type="file" id="profile_image" name="profile_image" class="image-upload-input licence-img">
				</div>
			</div>
		</div>
		<div class="row padding-top-bottom-20">
			<div class="col-md-3">
				<h5>Professional Information </h5>
			</div>
			<div class="col-md-9">
				<hr class="custom-form-hr">
			</div>		
		</div>
		<div class="row">		
			<div class="col-md-8">
				<div class="col-md-4">
					<div class="form-group label-float-top">					  
					  <!-- <select class="form-control control-float-top" name="degree" value="<?php echo set_value('degree')?>">
					    <option></option>
					    <option>List 1</option>
					    <option>List 2</option>
					    <option>List 3</option>
					  </select> -->
					  <input type="text" id="degree" class="form-control control-float-top" name="degree" value="<?php echo set_value('degree')?>">					  
					  <label for="Address">Degree</label>
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group label-float-top">
						<input type="date" id="working_from" class="form-control control-float-top" name="working_from" onblur="getExperienceYear()" value="<?php echo set_value('working_from')?>">
						<label class="date-type-format">Working From</label>
					</div>
				</div>			
				<div class="col-md-4">
					<div class="form-group label-float-top">
						<select id="experience" class="form-control control-float-top custom-select" name="experience">
							<option></option>
						    <?php 
								foreach ($profile_data as $key => $value) { ?>
									<option  value="<?=$value['key']?>"><?=$value['value']?></option> 
								<?php } ?>	
						</select>
					  <label for="Address">Year of Experience</label>
					</div>
				</div>
				<!-- <div class="col-md-3">
					 <div class="form-group label-float-top">
						<select class="form-control control-float-top custom-select" name="marital_status" value="<?php echo set_value('marital_status')?>">
						    <option></option>
						    <option>Married</option>
						    <option>Unmarried</option>
						</select>
					  <label for="Address">Marital Status</label>
					</div>
				</div>	 -->		
			</div>
			<div class="col-md-4 text-right">			
			</div>
		</div>	
		<div class="row padding-top-bottom-20">
			<div class="col-md-3">
				<h5>Account Details </h5>
			</div>
			<div class="col-md-9">
				<hr class="custom-form-hr">
			</div>		
		</div>
		<div class="row padding-top-bottom-20"> 
			<div class="col-md-8">
				<div class="col-md-6">
					 <div class="form-group label-float-top">
					 	<select id="bank_name" class="form-control control-float-top custom-select" name="bank_name" value="<?php echo set_value('bank_name')?>">
							<option></option>
						    <?php foreach ($bank as $value) { ?>
								<option  value="<?=$value->id ?>"><?=$value->bank_name?></option> 
							<?php } ?>	
						</select>						
						<label for="Address">Bank Name</label>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group label-float-top">
						<input id="account_number" type="text" class="form-control control-float-top" name="account_number" value="<?php echo set_value('account_number')?>" onkeypress="return (event.charCode == 8 || event.charCode == 0) ? null : event.charCode >= 48 && event.charCode <= 57">
						<label for="Address">Account Number</label>
					</div>
				</div>			
				<div class="col-md-4">
					<div class="form-group label-float-top">
						<input id="branch_name" type="text" class="form-control control-float-top" name="branch_name" value="<?php echo set_value('branch_name')?>">
						<label for="Address">Branch Name</label>
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group label-float-top">
						<input id="ifc_code" type="text" class="form-control control-float-top" name="ifc_code" value="<?php echo set_value('ifc_code')?>">
						<label for="Address">IFSC Code</label>
					</div>
				</div>
				<div class="col-md-4">
					 <div class="form-group label-float-top">
						<select id="account_type" class="form-control control-float-top custom-select" name="account_type" value="<?php echo set_value('account_type')?>">
							<option></option>
						    <?php foreach ($account_type as $value) { ?>
								<option  value="<?=$value['key'] ?>"><?=$value['value']?></option> 
							<?php } ?>	
						</select>						
						<label for="Address">Account Type</label>
					</div>
				</div>			
			</div>
			<div class="col-md-4 text-right">			
			</div>
		</div>		
		<div class="row padding-top-bottom-20">
			<div class="col-md-3">
				<h5>Medical Information</h5>
			</div>
			<div class="col-md-9">
				<hr class="custom-form-hr">
			</div>		
		</div>
		<div class="row"> 
			<div class="col-md-8">
				<div class="col-md-6">
					 <div class="form-group label-float-top">
						<input type="text" class="form-control control-float-top" id="company_name" name="company_name" value="<?php echo set_value('company_name')?>">
						<label for="Address">Medical Name</label>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group label-float-top">
						<input type="date" id="medical_since" class="form-control control-float-top" name="medical_since" value="<?php echo set_value('medical_since')?>">
						<label class="date-type-format">Registration Date</label>
					</div>
				</div>			
				<div class="col-md-6">
					<div class="form-group label-float-top">
						<input id="phone" class="form-control control-float-top mobile-intel" type="tel" minlength="10" maxlength="11" name="medical_phone" value="<?php echo set_value('medical_phone')?>" onkeypress="return (event.charCode == 8 || event.charCode == 0) ? null : event.charCode >= 48 && event.charCode <= 57">
						<!-- <label for="Address">Phone</label> -->
					</div>
				</div>
				<div class="col-md-6">
					 <div class="form-group label-float-top">
						<input type="email" id="medical_email" class="form-control control-float-top" name="medical_email" value="<?php echo set_value('medical_email')?>">
						<label for="Address">Email</label>
					</div>
				</div>			
			</div>
			<div class="col-md-4 text-right">			
				<div class="profile-image-section">								
					<label class="image-title">Please upload licence</label>
					<div>					
						<img src="<?php echo base_url(); ?>assets/img/prescription.png" class="profile-images-custom" id="preview2">
					</div>
					<button type="button" class="btn btn-primary image-upload-button">Upload</button>
					<input type="file" id="licenceImg" name="licence" class="image-upload-input licence-img">
				</div>
			</div>
		</div>	
		<div class="row"> 
			<div class="col-md-12 padding-top-bottom50">
				<button type="button" id="submit_form" class="btn btn-default submit_button float-right">Save</button>		
			</div>
		</div>
	</form>
</div>
<!-- data-toggle="modal" data-target="#myModal" -->
<div class="modal fade" id="myModal" role="dialog" data-backdrop="static">
	<div class="modal-dialog registration-done">
  <!-- Modal content-->
	  <div class="modal-content welldon-modal">
	    <div >
			<img src="<?php echo base_url(); ?>assets/img/green_tick.jpg" class="green-tick-img" id="preview">
			<h1> Well Done</h1>		
			<p>Congratulations your medical store has been created succesfully. Our team will get back to you within 72 hours</p>
	      <!-- <h4 class="modal-title">Modal Header</h4>
	      <button type="button" class="close" data-dismiss="modal">&times;</button> -->
	    </div>
	    <div class="modal-body">
	      
	    </div>
	    <div class="text-center">
	      <button type="button" id="profile_waiting" onclick="location.href='<?php echo base_url();?>vendor/profile_waiting_approval'" class="btn btn-default submit_button" data-dismiss="modal">Continue</button>
	    </div>
	  </div>  
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="error-myModal" role="dialog">
	<div class="modal-dialog registration-done">
  <!-- Modal content-->
	  <div class="modal-content welldon-modal">
	    <div >
			<img src="<?php echo base_url(); ?>assets/img/red_tick.jpg" class="green-tick-img" id="preview">
			<h6 style="color:red;"> Error Messages</h6>		
			<span class="input-error-message"><?= $this->session->flashdata('error') ?></span>
	    </div>
	    <div class="modal-body">
	      
	    </div>
	    <div class="text-center">
	      <button type="button" class="btn btn-default submit_button" data-dismiss="modal">Ok</button>
	    </div>
	  </div>  
	</div>
</div>
<input type="hidden" name="" class="hid_id" value="<?= $this->session->flashdata('error') ?>">
<input type="hidden" name="" class="success_id" value="<?= $this->session->flashdata('success') ?>">
<input type="hidden" name="" class="prev_url" value="<?= !empty($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] :"" ?>">

<script type="text/javascript">
	var profile_image = document.getElementById("profile_image"),
    preview = document.getElementById("preview");
    
	profile_image.addEventListener("change", function() {
	  changeImage(this);
	});

	function changeImage(input) {
	  var reader;

	  if (input.files && input.files[0]) {
	    reader = new FileReader();

	    reader.onload = function(e) {
	      preview.setAttribute('src', e.target.result);
	    }

	    reader.readAsDataURL(input.files[0]);
	  }
	}

	var licenceImg = document.getElementById("licenceImg"),
    preview2 = document.getElementById("preview2");
    
	licenceImg.addEventListener("change", function() {
	  changeImage2(this);
	});

	function changeImage2(input) {
	  var reader;

	  if (input.files && input.files[0]) {
	    reader = new FileReader();

	    reader.onload = function(e) {
	      preview2.setAttribute('src', e.target.result);
	    }

	    reader.readAsDataURL(input.files[0]);
	  }
	}

	$(document).ready(function(){
	
  $(".form-group .form-control").blur(function(){
	   if($(this).val()!=""){		   			   		
		   $(this).siblings("label").addClass("active");
	   }else{
		    $(this).siblings("label").removeClass("active");
	   }
	});
  $(".label-float-top").click(function(){
  	$(this).find("label").addClass("active");
  	 
  	$(this).find("input[type=text]").focus();  	
  	$(this).find("option:eq(0)").html("Select "+ $(this).find("label").text());
  	
  	});
	});	
	$(".control-float-top").blur(function(){  			
		
  		if($(this).val()=='Select '+ $(this).siblings("label").text()){
  			$(this).find("option:eq(0)").html("");		
  		}

  	// 	$(this).find("input").focus();

  	// $(this).find("option:eq(0)").html("Select option");
  	
  	});
	
	// $(document).ready(function(){
	// 	var id = document.getElementsByClassName("hid_id")[0].value;
	// 	if(id!=''){
	// 		$('#error-myModal').modal('show'); 
	// 	}					
	// });

	$(document).ready(function(){
		var id = document.getElementsByClassName("success_id")[0].value;
		var prev_url = document.getElementsByClassName("prev_url")[0].value;		
		var newPURL = prev_url.toLowerCase();		
		var CurrentOlds =  BaseUrl+''+'vendor/personaldetails';		
		var Current = CurrentOlds.toLowerCase();
		
		if(newPURL!=''){			
			if(newPURL==Current && id!='' ){
					$('#myModal').modal('show'); 
					$('.registration-page').addClass('blur-background'); 
					$('.custom-sidebar-col').addClass('blur-background'); 				
					$("#myModal").modal({
					    backdrop: 'static',
					    keyboard: false
					});
			}
		}
		// $('#profile_waiting').click(function(){
		// 	$('.registration-page').removeClass('blur-background'); 
		// 	$('.custom-sidebar-col').removeClass('blur-background'); 				
		// })

	});

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

	});
	$(document).ready(function(){			
		$(window).load(function(){  	
	  		$("#email-label").addClass("active");
		});	
	});
	
	//     // scripts.js custom js file
	// $(document).ready(function () {
	// 	$("#location").attr("placeholder","");		
		
	//    google.maps.event.addDomListener(window, 'load', initialize);
	// });

	// function initialize() {
	//     var input = document.getElementById('location');
	//     var autocomplete = new google.maps.places.Autocomplete(input);
	// }
	$(document).ready(function(){			
		$(window).load(function(){  	
	  		$(".date-type-format").addClass("active");
		});	

		jQuery(".countries").on("change", function() {
        var countryIdS = jQuery('#countryId').val();
        	if(countryIdS!='Select Country'){
        		$(".states").siblings("label").addClass("active");            	        		
        	}
    	});
    	jQuery(".states").on("change", function() {
        var countryIdS = jQuery('#countryId').val();
        	if(countryIdS!='Select Country'){
        		$(".cities").siblings("label").addClass("active");            	        		
        	}
    	});
		
		jQuery(".states").on("click", function() {
        var countryIdS = jQuery('#countryId').val();        
        	if(countryIdS==''){
            	alert("please select country first");                        
        	}
    	});
		jQuery(".cities").on("click", function() {
			var stateIdS = jQuery('#stateId').val();        			
			if(!stateIdS){
			            alert("please select state first");                        
			}

		});

	});
	$(document).ready(function(){	
		$('.front-end-validation').hide();
		$('#submit_form').click(function(argument){			
			var error = ''
			var full_name 	 		= $("#full_name").val();
			var date_of_birth 	 	= $("#date_of_birth").val();
			var mobile 		 		= $("#mobile").val();
			var email 		 		= $("#email").val();
			var address 	 		= $("#address").val();
			var company_name 		= $("#company_name").val();
			var licenceImg 	 		= $("#licenceImg").val();
			var country 	 		= $("#countryId").val();
			var state 	 			= $("#stateId").val();
			var city 	 			= $("#cityId").val();
			var degree 	 			= $("#degree").val();
			var working_from 	 	= $("#working_from").val();
			var experience 	 		= $("#experience").val();
			var medical_since 	 	= $("#medical_since").val();
			var medical_phone 	 	= $("#phone").val();
			var medical_email 	 	= $("#medical_email").val();
			var account_number 	 	= $("#account_number").val();
			var branch_name 	 	= $("#branch_name").val();
			var ifc_code 	 		= $("#ifc_code").val();
			var account_type_id 	= $("#account_type_id").val();
			var profile_image 		= $("#profile_image").val();
			var email_exist = document.getElementById("email-error").innerHTML;
			var mobile_exist = document.getElementById("mobile-error").innerHTML;


			if(full_name==''){
				error += "<p>The Full Name field is required.</p>";
			}
			if(date_of_birth==''){
				error += '<p>Date of birth is required.</p>';
			}
			if(address==''){
				error += '<p>The Addresss field is required.</p>';
			}
			if(country==''){
				error += '<p>Country is required.</p>';
			}
			if(state==''){
				error += '<p>State is required.</p>';
			}
			if(city==''){
				error += '<p>City is required.</p>';
			}
			if(pin_code==''){
				error += '<p>Pin code is required.</p>';
			}
			if(mobile==''){
				error += '<p>The mobile number field is required.</p>';
			}
			if(mobile_exist!=''){
				error += '<p>Mobile number already exist.</p>';
			}
			if(email_exist!=''){
				error += '<p>The Email already exist.</p>';
			}
			if(email==''){
				error += '<p>The email field is required.</p>';
			}
			if(profile_image==''){
				error += '<p>Profile image is required.</p>';
			}
			if(degree==''){
				error += '<p>Degree is required.</p>';
			}
			if(working_from==''){
				error += '<p>Working from is required.</p>';
			}
			if(experience==''){
				error += '<p>Experience is required.</p>';
			}			
			if(account_number==''){
				error += '<p>Account number is required.</p>';
			}
			if(branch_name==''){
				error += '<p>Branch name is required.</p>';
			}
			if(ifc_code==''){
				error += '<p>IFSC code is required.</p>';
			}
			if(account_type_id==''){
				error += '<p>Account type is required.</p>';
			}				
			if(company_name==''){
				error += '<p>The Medical Name field is required.</p>';
			}
			if(medical_since==''){
				error += '<p>Medical since is required.</p>';
			}
			if(medical_phone==''){
				error += '<p>Medical phone is required.</p>';
			}
			if(medical_email==''){
				error += '<p>Medical email is required.</p>';
			}	
			if(licenceImg==''){
				error += '<p>Please upload your medical licence.</p>';
			}	

			if(error!=''){				
				$("#error-text").html(error);			
				$('.front-end-validation').show();
				window.scrollTo(0, 0);
			}else{				
				$('#personal_details').submit();
			}
		});

	})
	var date_diff_indays = function(date1, date2) {
		dt1 = new Date(date1);
		dt2 = new Date(date2);
		return Math.floor((Date.UTC(dt2.getFullYear(), dt2.getMonth(), dt2.getDate()) - Date.UTC(dt1.getFullYear(), dt1.getMonth(), dt1.getDate()) ) /(1000 * 60 * 60 * 24));
	}
	
	function getExperienceYear() {
		var working_from 	 	= $("#working_from").val();
		var curentDate1 =  new Date().format('Y-m-d');				
		if(working_from!=''){			
			var diffDays = Math.round(date_diff_indays(working_from, curentDate1)/365);								
			var slectedIndex =  $("#experience").prop('selectedIndex');			
			$('#experience').find("option:eq("+slectedIndex+")").html(diffDays > 1 ?diffDays +" Years": diffDays +" Year" );
			$('#experience').val(diffDays);
			$("#experience").siblings("label").addClass("active");            	        		
		}
	}
	function updateEmail(){		
		$("#email").removeAttr("readonly");
		$("#email").focus();
	}
	function updateMobile(){		
		$("#mobile").removeAttr("readonly");
		$("#mobile").focus();
	}

	
	function checkExistMobile(argument) {
	 	var mobile =  $("#mobile").val();	 	
		event.preventDefault();
	      $.ajax({
	        url:"<?php echo base_url(); ?>/vendor/checkExistMobile",
	        method:"POST",
	        dataType: 'JSON',
	        data: {mobile: mobile,user_id:"<?= $this->session->userdata('user_id');?>"},	        
	        success:function(data){                    
	          if(data.status==1){
	          	$("#mobile-error").html(data.message);	          	
	          }else{
	          	$("#mobile-error").html("");	          	
	          }
	          // window.location.href = "<?php echo base_url() ?>vendor/bulk_upload";        
	        }
	      })
			
		}
	function checkExistEmail(argument) {
	 	var email =  $("#email").val();	

		event.preventDefault();
	      $.ajax({
	        url:"<?php echo base_url(); ?>/vendor/checkExistEmail",
	        method:"POST",
	        dataType: 'JSON',
	        data: {email: email,user_id:"<?= $this->session->userdata('user_id');?>"},	        
	        success:function(data){                    
	          if(data.status==1){
	          	$("#email-error").html(data.message);	          	
	          }else{
	          	$("#email-error").html("");	          	
	          }
	          // window.location.href = "<?php echo base_url() ?>vendor/bulk_upload";        
	        }
	      })
			
		}
	

</script> 
    <script>
    var mobile_input = document.querySelector("#mobile");
    window.intlTelInput(mobile_input, {
    	initialCountry: 'in',
      // allowDropdown: false,
      // autoHideDialCode: false,
      // autoPlaceholder: "off",
      // dropdownContainer: document.body,
      // excludeCountries: ["us"],
      // formatOnDisplay: false,
      // geoIpLookup: function(callback) {
      //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
      //     var countryCode = (resp && resp.country) ? resp.country : "";
      //     callback(countryCode);
      //   });
      // },
      // hiddenInput: "full_number",
      // initialCountry: "auto",
      // localizedCountries: { 'de': 'Deutschland' },
      // nationalMode: false,
      onlyCountries: ['in','us','ch', 'ca', 'do'],
      preferredCountries: ["in", 'us'],
      // placeholderNumberType: "MOBILE",
      // preferredCountries: ['cn', 'jp'],
      separateDialCode: true,
      utilsScript: BaseUrl+''+"assets/js/utils.js",
    });

    var input = document.querySelector("#phone");
    window.intlTelInput(input, {
    	initialCountry: 'in',
      // allowDropdown: false,
      // autoHideDialCode: false,
      autoPlaceholder: "off",
      // dropdownContainer: document.body,
      // excludeCountries: ["us"],
      // formatOnDisplay: false,
      // geoIpLookup: function(callback) {
      //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
      //     var countryCode = (resp && resp.country) ? resp.country : "";
      //     callback(countryCode);
      //   });
      // },
      // hiddenInput: "full_number",
      // initialCountry: "auto",
      // localizedCountries: { 'de': 'Deutschland' },
      // nationalMode: false,
      onlyCountries: ['in','us','ch', 'ca', 'do'],
      preferredCountries: ["in", 'us'],
      // placeholderNumberType: "9874589658",
      // preferredCountries: ['cn', 'jp'],
      separateDialCode: true,
      utilsScript: BaseUrl+''+"/assets/js/utils.js",
    });
  </script>