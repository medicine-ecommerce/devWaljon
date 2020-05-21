<script src="<?php echo base_url(); ?>assets/js/countrystatecity.js"></script>
<div class="right_col">
	<div class="row padding-top50">
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
	<div class="row">
		<div class="col-md-3">
			<h5>Working Information </h5>
		</div>
		<div class="col-md-9">
			<hr class="custom-form-hr">
		</div>		
		<div class="row"> 
			<div class="col-md-8">
				<div class="col-md-3">
					<div class="form-group label-float-top">					  
					  <select class="form-control control-float-top" id="sel1">
					    <option></option>
					    <option>2</option>
					    <option>3</option>
					    <option>4</option>
					  </select>
					  <label for="Address">City</label>
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group label-float-top">
						<input type="text" class="form-control control-float-top" name="last_name">
						<label for="email">Last Name</label>
					</div>
				</div>			
				<div class="col-md-3">
					<div class="form-group label-float-top">
						<input type="date" class="form-control control-float-top" name="date_of_birth">
						<!-- <label for="email">Last Name</label> -->
					</div>
				</div>
				<div class="col-md-3">
					 <div class="form-group label-float-top">
						<input type="text" class="form-control control-float-top" name="address" placeholder="Address">
						<label for="Address">Address</label>
					</div>
				</div>			
			</div>
			<div class="col-md-4 text-right">			
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-3">
			<h5>Account Details </h5>
		</div>
		<div class="col-md-9">
			<hr class="custom-form-hr">
		</div>		
		<div class="row"> 
			<div class="col-md-8">
				<div class="col-md-3">
					 <div class="form-group label-float-top">
						<input type="text" class="form-control control-float-top" name="first_name">
						<label for="Address">First Name</label>
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group label-float-top">
						<input type="text" class="form-control control-float-top" name="last_name">
						<label for="Address">Last Name</label>
					</div>
				</div>			
				<div class="col-md-3">
					<div class="form-group label-float-top">
						<input type="date" class="form-control control-float-top" name="date_of_birth">
					</div>
				</div>
				<div class="col-md-3">
					 <div class="form-group label-float-top">
						<input type="text" class="form-control control-float-top" name="address">
						<label for="Address">Address</label>
					</div>
				</div>			
			</div>
			<div class="col-md-4 text-right">			
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