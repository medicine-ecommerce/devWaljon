<style type="text/css">
	.nav-md .container.body .right_col {    
    background-color: #fff;
	}
</style>
<script src="<?php echo base_url(); ?>assets/js/countrystatecity.js"></script>
<div class="right_col registration-page">
	<form method="post" action="<?php echo base_url() ?>/doctor/doctor_profile" enctype="multipart/form-data">		
		<div class="row padding-bottom20">
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
					<span class="input-error-message"><?php echo  $this->session->flashdata('error'); ?></span>
					<div class="form-group label-float-top">
						<input type="text" class="form-control control-float-top" name="first_name" autocomplete="off">
						<label for="name">First Name</label>
				  	</div>
				</div>
				<div class="col-md-4">
					<div class="form-group label-float-top">
						<input type="text" class="form-control control-float-top" name="last_name">
						<label for="email">Last Name</label>
					</div>
				</div>			
				<div class="col-md-4">
					<div class="form-group label-float-top">
						<input type="date" class="form-control control-float-top" name="date_of_birth">
						<!-- <label for="email">Date Of Birth</label> -->
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group label-float-top">
						<input type="text" class="form-control control-float-top" name="address">
						<label for="email">Address</label>
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group label-float-top">
						<input type="text" class="form-control control-float-top" name="mobile">
						<label for="email">Mobile</label>
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group label-float-top">
						<input type="text" class="form-control control-float-top" name="email" >
						<label for="email">Email</label>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group label-float-top">
						<textarea class="form-control control-float-top" name="specialty"></textarea>
						<label for="email">Specialty</label>
					</div>
				</div>
			</div>
			<div class="col-md-4 text-right">
				<div class="profile-image-section">								
					<div>					
						<img src="<?php echo base_url(); ?>assets/img/profile_dummy.png" class="profile-images-custom" id="preview">
					</div>
					<button type="button" class="btn btn-primary image-upload-button">Upload</button>
					<input type="file" id="profile_image" name="profile_image" class="image-upload-input">
				</div>
			</div>
		</div>
		<div class="row padding-top-bottom-20">
			<div class="col-md-3">
				<h5>Required documents</h5>
			</div>
			<div class="col-md-9">
				<hr class="custom-form-hr">
			</div>		
		</div>
		<div class="row"> 
			<div class="col-md-2">			
				<div class="profile-image-section">								
					<div>					
						<img src="<?php echo base_url(); ?>assets/img/prescription.png" class="profile-images-custom" id="preview2">
					</div>
					<button type="button" class="btn btn-primary image-upload-button">Upload</button>
					<input type="file" id="licenceImg" name="licence_image" class="image-upload-input">
				</div>
			</div>
			<!-- <div class="col-md-2">			
				<div class="profile-image-section">								
					<div>					
						<img src="<?php echo base_url(); ?>assets/img/prescription.png" class="profile-images-custom" id="preview3">
					</div>
					<button type="button" class="btn btn-primary image-upload-button">Upload</button>
					<input type="file" id="documents" name="documents" class="image-upload-input">
				</div>
			</div> -->
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
<input type="hidden" name="" class="prev_url" value="<?= $_SERVER['HTTP_REFERER'] ?>">


<script type="text/javascript">
	var profile_image = document.getElementById("profile_image"),
    preview = document.getElementById("preview");
    
	profile_image.addEventListener("change", function() {
	  changeImage(this);
	});
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
	// var documents = document.getElementById("documents"),
 //    preview3 = document.getElementById("preview3");
    
	// documents.addEventListener("change", function() {
	//   changeImage2(this);
	// });

	// function changeImage3(input) {
	//   var reader;

	//   if (input.files && input.files[0]) {
	//     reader = new FileReader();

	//     reader.onload = function(e) {
	//       preview3.setAttribute('src', e.target.result);
	//     }

	//     reader.readAsDataURL(input.files[0]);
	//   }
	// }


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
		var id = document.getElementsByClassName("hid_id")[0].value;
		if(id!=''){
			$('#error-myModal').modal('show'); 
		}					
	});

	$(document).ready(function(){
		var id = document.getElementsByClassName("success_id")[0].value;
		var prev_url = document.getElementsByClassName("prev_url")[0].value;		
		
		if(prev_url!= BaseUrl+''+'/vendor/vendorregister' && prev_url!= BaseUrl+''+'/vendor/vendor_login' && id!='' ){
				$('#myModal').modal('show'); 
		}

	});
	
</script>