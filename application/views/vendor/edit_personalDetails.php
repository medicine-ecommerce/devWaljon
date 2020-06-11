
<style type="text/css">
	.nav-md .container.body .right_col {    
    background-color: #fff;
	}
</style>
<script src="<?php echo base_url(); ?>assets/js/countrystatecity.js"></script>
<span class="input-error-message"><?php echo form_error('email', '<div class="error">', '</div>'); ?></span>     
<div class="right_col registration-page ">

	<div class="green-section alert-section  <?= ($status->is_active)==0 ? "show-section":"hide-section" ?> " >
	  <a onclick="redirectToEditProfile()" class="alert-box alert-yellow-box profileverify-alert">
	    <span class="alert-icon"><i class="fa fa-exclamation-triangle"></i></span>
	    <span class="alert-content"><p> Your profile is under review, Our team will get back to you within 72 hours.</p></span>
	  </a>  
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
	<?php if($this->session->flashdata('info')){ ?>
	<div class="custom-info-alert">		
		<a class="remove-alert"> <span class="glyphicon glyphicon-remove custom-remove"></span></a>
		<p>		
			<span class="glyphicon glyphicon-ok-sign"></span>
			<?= $this->session->flashdata('info');?>	
		</p>
	</div>
	<?php }?>

	<form method="post" action="<?php echo base_url() ?>/vendor/vendor_profile/<?= base64_encode($this->session->userdata('user_id')); ?>" enctype="multipart/form-data">		
		<div class="row padding-bottom20 padding-top50">
			<div class="col-md-3">
				<h5>Personal Information </h5>
				<a onclick="editEnable()">
					<img src="<?php echo base_url(); ?>assets/img/edit_dark.png"  class="edit-pencil">
				</a>
			</div>
			<div class="col-md-9"> 
				<hr class="custom-form-hr">
			</div>		
		</div>
		<div class="row"> 
			<div class="col-md-8">
				<div class="col-md-4">
					<div class="form-group label-float-top">
						<input type="text" class="form-control control-float-top personal-section" name="full_name" value="<?php echo $edit_data->full_name ?>" >
						<label for="name">First Name</label>
				  	</div>
				</div>				
				<div class="col-md-4">					
					<div class="form-group label-float-top">
						<input type="date" class="form-control control-float-top personal-section" name="date_of_birth" value="<?= !empty($edit_data->date_of_birth) ? date('Y-m-d',strtotime($edit_data->date_of_birth)) : "" ?>">
						<label for="email">Date Of Birth</label>
					</div>
				</div>
				<div class="col-md-4">
					 <div class="form-group label-float-top">
						<input type="text" class="form-control control-float-top personal-section" name="address" value="<?= $edit_data->address ?>"> 
						<label for="email">Address</label>
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group label-float-top">
						<select name="country" class="form-control control-float-top custom-select countries personal-section" id="countryId" value="<?= $edit_data->country ?>">							
							<option><?= $edit_data->country ?></option>
							<!-- <option>Select Country</option> -->
						</select>
						<label for="email">Country</label>					
					</div>
				</div>			
				<div class="col-md-4">
					<div class="form-group label-float-top">
						<select name="state" class="form-control control-float-top custom-select states personal-section" id="stateId" value="<?= $edit_data->state ?>">		    			
							<option><?= $edit_data->state ?></option>
						</select>		
						<label for="country">State</label>
					</div>
				</div>
				<div class="col-md-4">
					 <div class="form-group label-float-top">
					 	<select name="city" class="form-control control-float-top custom-select cities personal-section" id="cityId" value="<?= $edit_data->city ?>">					    
					 		<option><?= $edit_data->city ?></option>
						</select>
						<label for="country">City</label>
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group label-float-top">
						<input type="text" maxlength="6" class="form-control control-float-top personal-section" name="pin_code" value="<?= !empty($edit_data->pin_code) ?$edit_data->pin_code : "" ?>">
						<label for="email">Zip Postal Code</label>
					</div>
				</div>			
				<div class="col-md-4">
					<div class="form-group label-float-top">
						<input id="mobile" class="form-control control-float-top personal-section" type="tel" name="mobile" minlength="10" maxlength="10" value="<?= $edit_data->mobile ?>">
						<label for="email">Mobile</label>
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group label-float-top">
						<input type="email" class="form-control control-float-top personal-section" name="email" value="<?= $edit_data->email ?>">
						<label for="email">Email</label>
					</div>
				</div>
			</div>
			<div class="col-md-4 text-right">
				<div class="profile-image-section">								
					<label class="image-title">Upload profile image</label>
					<div>	
						<a target="_blank" href="<?php echo base_url(); ?>assets/vendor_profile/<?php echo $edit_data->image ?>">
						<img <?php if($edit_data->image){ ?> src="<?php echo base_url(); ?>assets/vendor_profile/<?php echo $edit_data->image ?>" <?php }else{ ?>src="<?php echo base_url(); ?>assets/img/profile_dummy.png" <?php } ?>  class="profile-images-custom" id="preview">				
						</a>
						
					</div>
					<button type="button" class="btn btn-primary image-upload-button">Upload</button>
					<input type="file" id="profile_image" name="profile_image" class="image-upload-input edit-profile-image licence-img">
					<input type="hidden" name="edit_profile_image" value="<?php echo $edit_data->image ?>">
					

				</div>
			</div>
		</div>
		<div class="row padding-top-bottom-20">
			<div class="col-md-3">
				<h5>Professional Information </h5>
				<a onclick="editEnableWorking()">
					<img src="<?php echo base_url(); ?>assets/img/edit_dark.png"  class="edit-pencil">
				</a>
			</div>
			<div class="col-md-9">
				<hr class="custom-form-hr">
			</div>		
		</div>
		<div class="row">		
			<div class="col-md-8">
				<div class="col-md-4">
					<div class="form-group label-float-top">					  
					  <!-- <select class="form-control control-float-top" name="degree" value="<?= $edit_data->degree ?>">
					    <option></option>
					    <option>List 1</option>
					    <option>List 2</option>
					    <option>List 3</option>
					  </select> -->
					  <input type="text" class="form-control control-float-top working-section" name="degree" value="<?php echo $edit_data->degree ?>">
					  <label for="Address">Degree</label>
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group label-float-top">
						<input type="date" class="form-control control-float-top working-section" name="working_from" value="<?= !empty($edit_data->working_from) ? date('Y-m-d',strtotime($edit_data->working_from)) : "" ?>">
						<label for="Address">Working From</label>
					</div>
				</div>			
				<div class="col-md-4">
					<div class="form-group label-float-top">
						<select class="form-control control-float-top custom-select working-section" name="experience">
							
							<?php 
								foreach ($working_experience as $key => $value) { ?>
									<option <?php if($edit_data->experience==$value['key']){ ?> selected <?php } ?> value="<?=$value['key']?>"><?=$value['value']?></option> 
							<?php } ?>													    
						</select>
					  <label for="Address">Year of Experience</label>
					</div>
				</div>
				<!-- <div class="col-md-3">
					 <div class="form-group label-float-top">
						<select class="form-control control-float-top custom-select working-section" name="marital_status" value="<?= $edit_data->marital_status ?>">							
						    <option <?php if($edit_data->marital_status==""){ ?> selected <?php } ?>>Select Option</option>
						    <option <?php if($edit_data->marital_status=="married"){ ?> selected <?php } ?> value="married">Married</option>
						    <option <?php if($edit_data->marital_status=="unmarried"){ ?> selected <?php } ?> value="unmarried">Unmarried</option>
						</select>
					  <label for="Address">Marital Status</label>
					</div>
				</div>		 -->	
			</div>
			<div class="col-md-4 text-right">			
			</div>
		</div>	
		<div class="row padding-top-bottom-20">
			<div class="col-md-3">
				<h5>Account Details </h5>
				<a onclick="editEnableBank()">
					<img src="<?php echo base_url(); ?>assets/img/edit_dark.png"  class="edit-pencil">
				</a>
			</div>
			<div class="col-md-9">
				<hr class="custom-form-hr">
			</div>		
		</div>
		<div class="row padding-top-bottom-20"> 
			<div class="col-md-8">
				<div class="col-md-6">
					 <div class="form-group label-float-top">
						<select class="form-control control-float-top custom-select bank-section" name="bank_name" value="<?php echo set_value('bank_name')?>">
							<option></option>
						    <?php foreach ($bank as $value) { ?>
								<option <?php if($bank_data->bank_id==$value->id){ ?> selected <?php } ?>  value="<?=$value->id ?>"  ><?=$value->bank_name?></option> 
							<?php } ?>	
						</select>						
						<label for="Address">Bank Name</label>
					</div>
				</div>
				<div class="col-md-6">					
					<div class="form-group label-float-top">
						<input type="text" class="form-control control-float-top bank-section" name="account_number" value="<?= !empty($bank_data->account_number) ? $bank_data->account_number :"" ?>">
						<label for="Address">Account Number</label>
					</div>
				</div>			
				<div class="col-md-4">
					<div class="form-group label-float-top">
						<input type="text" class="form-control control-float-top bank-section" name="branch_name" value="<?= !empty($bank_data->branch_name) ? $bank_data->branch_name : "" ?>">
						<label for="Address">Branch Name</label>
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group label-float-top">
						<input type="text" class="form-control control-float-top bank-section" name="ifc_code" value="<?= !empty($bank_data->ifc_code) ? $bank_data->ifc_code : "" ?>">
						<label for="Address">IFSC Code</label>
					</div>
				</div>
				<div class="col-md-4">
					 <div class="form-group label-float-top">
					 	<select class="form-control control-float-top custom-select bank-section" name="account_type" value="<?php echo set_value('account_type')?>">
							<option></option>
						    <?php foreach ($account_type as $value) { ?>
								<option <?php if($bank_data->account_type_id==$value['key']){ ?> selected <?php } ?>  value="<?=$value['key'] ?>"><?=$value['value']?></option> 
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
				<a onclick="editEnableMedical()">
					<img src="<?php echo base_url(); ?>assets/img/edit_dark.png"  class="edit-pencil">
				</a>
			</div>
			<div class="col-md-9">
				<hr class="custom-form-hr">
			</div>		
		</div>
		<div class="row"> 
			<div class="col-md-8">
				<div class="col-md-6">
					 <div class="form-group label-float-top">
						<input type="text" class="form-control control-float-top medical-section" name="company_name" value="<?= $edit_data->company_name ?>">
						<label for="Address">Company Name</label>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group label-float-top">
						<input type="date" class="form-control control-float-top medical-section" name="medical_since" value="<?=  !empty($edit_data->medical_since) ? date('Y-m-d',strtotime($edit_data->medical_since)): "" ?>">
						<label for="Address">Medical Since</label>
					</div>
				</div>			
				<div class="col-md-6">
					<div class="form-group label-float-top">
						<input id="phone" class="form-control control-float-top mobile-intel" type="tel" minlength="10" maxlength="10" name="medical_phone" value="<?= $edit_data->medical_phone ?>">
						<label for="Address">Phone</label>
					</div>
				</div>
				<div class="col-md-6">
					 <div class="form-group label-float-top">
						<input type="email" class="form-control control-float-top medical-section" name="medical_email" value="<?= $edit_data->medical_email ?>">
						<label for="Address">Email</label>
					</div>
				</div>			
			</div>
			<div class="col-md-4 text-right">			
				<div class="profile-image-section">								
					<label class="image-title">Please upload licence</label>
					<div>					
						<img <?php if($edit_data->licence){ ?> src="<?php echo base_url(); ?>assets/licence/<?php echo $edit_data->licence ?>" <?php }else{ ?>src="<?php echo base_url(); ?>assets/img/prescription.png" <?php } ?>  class="profile-images-custom" id="preview2">		
					</div>
					<button type="button" class="btn btn-primary image-upload-button">Upload</button>
					<input type="file" id="licenceImg" name="licence" class="image-upload-input edit-licence-upload licence-img">
					<input type="hidden" name="edit_licence" value="<?php echo $edit_data->licence ?>">
				</div>
			</div>
		</div>	
		<div class="row"> 
			<div class="col-md-12 padding-top-bottom50">
				<button type="submit" class="btn btn-default submit_button float-right">Save</button>		
			</div>
		</div>
	</form>
</div>
<!-- data-toggle="modal" data-target="#myModal" -->
 <!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
	<div class="modal-dialog registration-done">
  <!-- Modal content-->
	  <div class="modal-content welldon-modal">
	    <div >
			<img src="<?php echo base_url(); ?>assets/img/green_tick.jpg" class="green-tick-img" id="preview">
			<h1> Well Done</h1>		
			<p>Congratulations your medical store has been created succesfully now you can add staff member after continue</p>
	      <!-- <h4 class="modal-title">Modal Header</h4>
	      <button type="button" class="close" data-dismiss="modal">&times;</button> -->
	    </div>
	    <div class="modal-body">
	      
	    </div>
	    <div class="text-center">
	      <button type="button" class="btn btn-default submit_button" data-dismiss="modal">Continue</button>
	    </div>
	  </div>  
	</div>
</div>

<!-- <input type="hidden" name="" class="success_id" value="<?= $this->session->flashdata('success') ?>">
<input type="hidden" name="" class="prev_url" value="<?= $_SERVER['HTTP_REFERER'] ?>"> -->
<script src="<?php echo base_url(); ?>vendors/jquery/dist/jquery.min.js"></script>    
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
		$(window).load(function(){  	
	  		$(".label-float-top").find("label").addClass("active");
		});	
		// $('#jquery-intl-phone').intlTelInput("setCountry", 'in');
	});

	$(document).ready(function(){
	
  $(".form-group .form-control").blur(function(){  	
		   if($(this).val()!=""){		   			   		
			   $(this).siblings("label").addClass("active");
		   }else{
			    $(this).siblings("label").removeClass("active");
		   }
	  });
	});	
	$(document).ready(function(){
		$(".personal-section").attr("readonly","");
		$(".working-section").attr("readonly","");
		
		$('.remove-alert').click(function() {
			$('.custom-success-alert').fadeOut("slow")
		})
		// var id = document.getElementsByClassName("hid_id")[0].value;
		// if(id!=''){
		// 	$('#error-myModal').modal('show'); 
		// }					
		$('.remove-alert').click(function() {
			$('.custom-success-alert').fadeOut("slow")
		})
		setInterval(function () {
	        $('.custom-success-alert').fadeOut("slow")
    	}, 7000);
    	
    	$('.remove-red-alert').click(function() {
			$('.custom-error-alert').fadeOut("slow")
		})
		setInterval(function () {
	        $('.custom-error-alert').fadeOut("slow")
    	}, 7000);

    	$('.remove-alert').click(function() {
			$('.custom-info-alert').fadeOut("slow")
		})
		setInterval(function () {
	        $('.custom-info-alert').fadeOut("slow")
    	}, 7000);
    	jQuery(".states").on("click", function() {
        var countryIdS = jQuery('#countryId').val();
        	if(countryIdS=='Select Country'){
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
	$(".label-float-top").click(function(){
	  	$(this).find("label").addClass("active");
	  	$(this).find("input").focus();  	
  	});
  	
	


	// $(document).ready(function(){
	// 	var id = document.getElementsByClassName("success_id")[0].value;
	// 	var prev_url = document.getElementsByClassName("prev_url")[0].value;		
		
	// 	if(prev_url!= BaseUrl+''+'/vendor/vendorregister' && prev_url!= BaseUrl+''+'/vendor/vendor_login' && id!='' ){
	// 			$('#myModal').modal('show'); 
	// 	}

	// });
	// scripts.js custom js file
	// $(document).ready(function () {
	// 	$("#location").attr("placeholder","");		
		
	//    google.maps.event.addDomListener(window, 'load', initialize);
	// });

	// function initialize() {
	//     var input = document.getElementById('location');
	//     var autocomplete = new google.maps.places.Autocomplete(input);
	// }
	function editEnable(){
		$(".personal-section").removeAttr("readonly");
		$(".form-control").removeClass('personal-section');

	}
	function editEnableWorking(){
		$(".working-section").removeAttr("readonly");
		$(".form-control").removeClass('working-section');
	}
	function editEnableBank(){
		$(".bank-section").removeAttr("readonly");
		$(".form-control").removeClass('bank-section');
	}
	function editEnableMedical(){
		$(".medical-section").removeAttr("readonly");
		$(".form-control").removeClass('medical-section');
	}



</script>
  <script>

    var input_mobile = document.querySelector("#mobile");
    var input = document.querySelector("#phone");
    window.intlTelInput(input, {
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
      utilsScript: "build/js/utils.js",
    });
     window.intlTelInput(input_mobile, {
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
      utilsScript: "build/js/utils.js",
    });
  </script>