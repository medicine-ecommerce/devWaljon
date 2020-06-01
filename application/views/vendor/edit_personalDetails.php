<style type="text/css">
	.nav-md .container.body .right_col {    
    background-color: #fff;
	}
</style>
<script src="<?php echo base_url(); ?>assets/js/countrystatecity.js"></script>
<span class="input-error-message"><?php echo form_error('email', '<div class="error">', '</div>'); ?></span>     

<div class="right_col registration-page ">
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

	<form method="post" action="<?php echo base_url() ?>/vendor/vendor_profile" enctype="multipart/form-data">		
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
						<input type="text" class="form-control control-float-top" name="first_name" value="<?php echo $edit_data->first_name ?>">
						<label for="name">First Name</label>
				  	</div>
				</div>
				<div class="col-md-4">
					<div class="form-group label-float-top">
						<input type="text" class="form-control control-float-top" name="last_name" value="<?php echo $edit_data->last_name ?>">
						<label for="email">Last Name</label>
					</div>
				</div>			
				<div class="col-md-4">
					<div class="form-group label-float-top">
						<input type="date" class="form-control control-float-top" name="date_of_birth"  value="<?php echo date('Y-m-d',strtotime($edit_data->date_of_birth)) ?>">
						<label for="email">Date Of Birth</label>
					</div>
				</div>
				<div class="col-md-4">
					 <div class="form-group label-float-top">
						<input type="text" class="form-control control-float-top" name="address" value="<?= $edit_data->address ?>">
						<label for="email">Address</label>
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group label-float-top">
						<select name="country" class="form-control control-float-top countries" id="countryId" value="<?= $edit_data->country ?>">							
							<option><?= $edit_data->country ?></option>
							<!-- <option>Select Country</option> -->
						</select>
						<label for="email">Country</label>					
					</div>
				</div>			
				<div class="col-md-4">
					<div class="form-group label-float-top">
						<select name="state" class="form-control control-float-top states" id="stateId" value="<?= $edit_data->state ?>">		    			
							<option><?= $edit_data->state ?></option>
						</select>		
						<label for="country">State</label>
					</div>
				</div>
				<div class="col-md-3">
					 <div class="form-group label-float-top">
					 	<select name="city" class="form-control control-float-top cities" id="cityId" value="<?= $edit_data->city ?>">					    
					 		<option><?= $edit_data->city ?></option>
						</select>
						<label for="country">City</label>
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group label-float-top">
						<input type="text" class="form-control control-float-top" name="pin_code" value="<?= $edit_data->pin_code ?>">
						<label for="email">Zip Postal Code</label>
					</div>
				</div>			
				<div class="col-md-3">
					<div class="form-group label-float-top">
						<input type="text" class="form-control control-float-top" name="mobile" value="<?= $edit_data->mobile ?>">
						<label for="email">Mobile</label>
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group label-float-top">
						<input type="text" class="form-control control-float-top" name="email" value="<?= $edit_data->email ?>">
						<label for="email">Email</label>
					</div>
				</div>
			</div>
			<div class="col-md-4 text-right">
				<div class="profile-image-section">								
					<div>	
						<a target="_blank" href="<?php echo base_url(); ?>assets/vendor_profile/<?php echo $edit_data->image ?>">
						<img <?php if($edit_data->image){ ?> src="<?php echo base_url(); ?>assets/vendor_profile/<?php echo $edit_data->image ?>" <?php }else{ ?>src="<?php echo base_url(); ?>assets/img/profile_dummy.png" <?php } ?>  class="profile-images-custom" id="preview">				
						</a>
						
					</div>
					<button type="button" class="btn btn-primary image-upload-button">Upload</button>
					<input type="file" id="profile_image" name="profile_image" class="image-upload-input edit-profile-image">
					<input type="hidden" name="edit_profile_image" value="<?php echo $edit_data->image ?>">
					

				</div>
			</div>
		</div>
		<div class="row padding-top-bottom-20">
			<div class="col-md-3">
				<h5>Working Information </h5>
			</div>
			<div class="col-md-9">
				<hr class="custom-form-hr">
			</div>		
		</div>
		<div class="row">		
			<div class="col-md-8">
				<div class="col-md-3">
					<div class="form-group label-float-top">					  
					  <!-- <select class="form-control control-float-top" name="degree" value="<?= $edit_data->degree ?>">
					    <option></option>
					    <option>List 1</option>
					    <option>List 2</option>
					    <option>List 3</option>
					  </select> -->
					  <input type="text" class="form-control control-float-top" name="degree" value="<?php echo $edit_data->degree ?>">
					  <label for="Address">Degree</label>
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group label-float-top">
						<input type="date" class="form-control control-float-top" name="working_from" value="<?php echo date('Y-m-d',strtotime($edit_data->working_from)) ?>">
						<label for="Address">Working From</label>
					</div>
				</div>			
				<div class="col-md-3">
					<div class="form-group label-float-top">
						<select class="form-control control-float-top" name="experience">
							
							<?php 
								foreach ($working_experience as $key => $value) { ?>
									<option <?php if($edit_data->experience==$value['key']){ ?> selected <?php } ?> value="<?=$value['key']?>"><?=$value['value']?></option> 
							<?php } ?>													    
						</select>
					  <label for="Address">Year of Experience</label>
					</div>
				</div>
				<div class="col-md-3">
					 <div class="form-group label-float-top">
						<select class="form-control control-float-top" name="marital_status" value="<?= $edit_data->marital_status ?>">
						    <option>Select Option</option>
						    <option <?php if($edit_data->marital_status=="married"){ ?> selected <?php } ?> value="married">Married</option>
						    <option <?php if($edit_data->marital_status=="unmarried"){ ?> selected <?php } ?> value="unmarried">Unmarried</option>
						</select>
					  <label for="Address">Marital Status</label>
					</div>
				</div>			
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
				<div class="col-md-3">
					 <div class="form-group label-float-top">
						<input type="text" class="form-control control-float-top" name="bank_name"  value="<?php !empty($bank_data->bank_name)? $bank_data->bank_name : "" ?>">
						<label for="Address">Bank Name</label>
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group label-float-top">
						<input type="text" class="form-control control-float-top" name="account_number" value="<?php !empty($bank_data->account_number) ? $bank_data->account_number :"" ?>">
						<label for="Address">Account Number</label>
					</div>
				</div>			
				<div class="col-md-3">
					<div class="form-group label-float-top">
						<input type="text" class="form-control control-float-top" name="ifc_code" value="<?php !empty($bank_data->ifc_code) ? $bank_data->ifc_code : "" ?>">
						<label for="Address">IFSC Code</label>
					</div>
				</div>
				<div class="col-md-3">
					 <div class="form-group label-float-top">
						<input type="text" class="form-control control-float-top" name="account_type" value="<?php !empty($bank_data->account_type) ? $bank_data->account_type :"" ?>">
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
				<div class="col-md-3">
					 <div class="form-group label-float-top">
						<input type="text" class="form-control control-float-top" name="company_name" value="<?= $edit_data->company_name ?>">
						<label for="Address">Company Name</label>
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group label-float-top">
						<input type="date" class="form-control control-float-top" name="medical_since" value="<?php echo date('Y-m-d',strtotime($edit_data->medical_since)) ?>">
						<label for="Address">Medical Since</label>
					</div>
				</div>			
				<div class="col-md-3">
					<div class="form-group label-float-top">
						<input type="text" class="form-control control-float-top" name="medical_phone" value="<?= $edit_data->medical_phone ?>">
						<label for="Address">Phone</label>
					</div>
				</div>
				<div class="col-md-3">
					 <div class="form-group label-float-top">
						<input type="email" class="form-control control-float-top" name="medical_email" value="<?= $edit_data->medical_email ?>">
						<label for="Address">Email</label>
					</div>
				</div>			
			</div>
			<div class="col-md-4 text-right">			
				<div class="profile-image-section">								
					<div>					
						
						<img <?php if($edit_data->licence){ ?> src="<?php echo base_url(); ?>assets/licence/<?php echo $edit_data->licence ?>" <?php }else{ ?>src="<?php echo base_url(); ?>assets/img/prescription.png" <?php } ?>  class="profile-images-custom" id="preview2">				

					</div>
					<button type="button" class="btn btn-primary image-upload-button">Upload</button>
					<input type="file" id="licenceImg" name="licence" class="image-upload-input">
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
	
</script>