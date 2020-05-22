<script src="<?php echo base_url(); ?>assets/js/countrystatecity.js"></script>
<div class="right_col registration-page">
	<div class="row padding-top50 padding-bottom20">
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
					<select name="country" class="form-control control-float-top countries" id="countryId">
						<option>Select Country</option>
					</select>
					<!-- <label for="email">Country</label> -->					
				</div>
			</div>			
			<div class="col-md-4">
				<div class="form-group label-float-top">
					<select name="state" class="form-control control-float-top states" id="stateId">		    			
					</select>		
					<label for="country">State</label>
				</div>
			</div>
			<div class="col-md-3">
				 <div class="form-group label-float-top">
				 	<select name="city" class="form-control control-float-top cities" id="cityId">					    
					</select>
					<label for="country">City</label>
				</div>
			</div>
			<div class="col-md-3">
				<div class="form-group label-float-top">
					<input type="text" class="form-control control-float-top" name="address">
					<label for="email">Zip Postal Code</label>
				</div>
			</div>			
			<div class="col-md-3">
				<div class="form-group label-float-top">
					<input type="text" class="form-control control-float-top" name="State">
					<label for="email">Phone</label>
				</div>
			</div>
			<div class="col-md-3">
				<div class="form-group label-float-top">
					<input type="text" class="form-control control-float-top" name="State" >
					<label for="email">Email</label>
				</div>
			</div>
		</div>
		<div class="col-md-4 text-right">
			<div class="profile-image-section">								
				<div>					
					<img src="<?php echo base_url(); ?>assets/img/profile_dummy.png" class="profile-images-custom" id="preview">
				</div>
				<button type="button" class="btn btn-primary image-upload-button">Upload</button>
				<input type="file" id="filetag" class="image-upload-input">
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
				  <select class="form-control control-float-top" >
				    <option></option>
				    <option>List 1</option>
				    <option>List 2</option>
				    <option>List 3</option>
				  </select>
				  <label for="Address">Degree</label>
				</div>
			</div>
			<div class="col-md-3">
				<div class="form-group label-float-top">
					<input type="date" class="form-control control-float-top" name="working_from_date">
					<!-- <label for="Address">Working From</label> -->
				</div>
			</div>			
			<div class="col-md-3">
				<div class="form-group label-float-top">
					<select class="form-control control-float-top" >
					    <option></option>
					    <option value="List1" >List 1</option>
					    <option value="List1">List 2</option>
					    <option value="List1">List 3</option>
					</select>
				  <label for="Address">Year of Experience</label>
				</div>
			</div>
			<div class="col-md-3">
				 <div class="form-group label-float-top">
					<select class="form-control control-float-top" >
					    <option></option>
					    <option value="List1" >List 1</option>
					    <option value="List1">List 2</option>
					    <option value="List1">List 3</option>
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
					<input type="text" class="form-control control-float-top" name="first_name">
					<label for="Address">Bank Name</label>
				</div>
			</div>
			<div class="col-md-3">
				<div class="form-group label-float-top">
					<input type="text" class="form-control control-float-top" name="last_name">
					<label for="Address">Account Number</label>
				</div>
			</div>			
			<div class="col-md-3">
				<div class="form-group label-float-top">
					<input type="text" class="form-control control-float-top" name="date_of_birth">
					<label for="Address">IFSC Code</label>
				</div>
			</div>
			<div class="col-md-3">
				 <div class="form-group label-float-top">
					<input type="text" class="form-control control-float-top" name="address">
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
					<input type="text" class="form-control control-float-top" name="medical_name">
					<label for="Address">Medical Name</label>
				</div>
			</div>
			<div class="col-md-3">
				<div class="form-group label-float-top">
					<input type="date" class="form-control control-float-top" name="medical_from_date">
					<!-- <label for="Address">Account Number</label> -->
				</div>
			</div>			
			<div class="col-md-3">
				<div class="form-group label-float-top">
					<input type="text" class="form-control control-float-top" name="medical_phone">
					<label for="Address">Phone</label>
				</div>
			</div>
			<div class="col-md-3">
				 <div class="form-group label-float-top">
					<input type="email" class="form-control control-float-top" name="medical_email">
					<label for="Address">Email</label>
				</div>
			</div>			
		</div>
		<div class="col-md-4 text-right">			
			<div class="profile-image-section">								
				<div>					
					<img src="<?php echo base_url(); ?>assets/img/prescription.png" class="profile-images-custom" id="preview">
				</div>
				<button type="button" class="btn btn-primary image-upload-button">Upload</button>
				<input type="file" id="filetag" class="image-upload-input">
			</div>
		</div>
	</div>	
	<div class="row"> 
		<div class="col-md-12 padding-top-bottom50">
			<button type="submit" class="btn btn-default submit_button float-right" data-toggle="modal" data-target="#myModal">Save</button>		
		</div>
	</div>
</div>

 <!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
<div class="modal-dialog registration-done">

  <!-- Modal content-->
  <div class="modal-content welldon-modal">
    <div >
		<img src="<?php echo base_url(); ?>assets/img/green_tick.jpg" class="green-tick-img" id="preview">
		<h1> Well Done</h1>		
		<p>Congratulations your medical storr has been created succesfully now you can add staff member after continue</p>
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



<script type="text/javascript">
	var fileTag = document.getElementById("filetag"),
    preview = document.getElementById("preview");
    
	fileTag.addEventListener("change", function() {
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

	$(document).ready(function(){
	
  $(".form-group .form-control .control-float-top").blur(function(){
		   if($(this).val()!=""){
			   $(this).siblings("label").addClass("active");
		   }else{
			    $(this).siblings("label").removeClass("active");
		   }
	  });
	});
</script>