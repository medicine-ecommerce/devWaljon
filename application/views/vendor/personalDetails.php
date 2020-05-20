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
				 <div class="form-group">
					<input type="text" class="form-control" name="first_name" placeholder="First Name">
				</div>
			</div>
			<div class="col-md-4">
				<div class="form-group">
					<input type="text" class="form-control" name="last_name" placeholder="Last Name">
				</div>
			</div>			
			<div class="col-md-4">
				<div class="form-group">
					<input type="date" class="form-control" name="date_of_birth">
				</div>
			</div>
			<div class="col-md-4">
				 <div class="form-group">
					<input type="text" class="form-control" name="address" placeholder="Address">
				</div>
			</div>
			<div class="col-md-4">
				<div class="form-group">
					<input type="text" class="form-control" name="city" placeholder="City">
				</div>
			</div>			
			<div class="col-md-4">
				<div class="form-group">
					<input type="text" class="form-control" name="State" placeholder="State">
				</div>
			</div>
			<div class="col-md-3">
				 <div class="form-group">
					<input type="text" class="form-control" name="address" placeholder="Zip Postal Code">
				</div>
			</div>
			<div class="col-md-3">
				<div class="form-group">
					<input type="text" class="form-control" name="city" placeholder="Country">
				</div>
			</div>			
			<div class="col-md-3">
				<div class="form-group">
					<input type="text" class="form-control" name="State" placeholder="Phone">
				</div>
			</div>
			<div class="col-md-3">
				<div class="form-group">
					<input type="text" class="form-control" name="State" placeholder="Email">
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
					<div class="form-group">					  
						  <select class="form-control" id="sel1">
						    <option>Pharmacist</option>
						    <option>2</option>
						    <option>3</option>
						    <option>4</option>
						  </select>
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<input type="text" class="form-control" name="last_name" placeholder="Last Name">
					</div>
				</div>			
				<div class="col-md-3">
					<div class="form-group">
						<input type="date" class="form-control" name="date_of_birth">
					</div>
				</div>
				<div class="col-md-3">
					 <div class="form-group">
						<input type="text" class="form-control" name="address" placeholder="Address">
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
					 <div class="form-group">
						<input type="text" class="form-control" name="first_name" placeholder="First Name">
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<input type="text" class="form-control" name="last_name" placeholder="Last Name">
					</div>
				</div>			
				<div class="col-md-3">
					<div class="form-group">
						<input type="date" class="form-control" name="date_of_birth">
					</div>
				</div>
				<div class="col-md-3">
					 <div class="form-group">
						<input type="text" class="form-control" name="address" placeholder="Address">
					</div>
				</div>			
			</div>
			<div class="col-md-4 text-right">			
			</div>
		</div>
		<select name="country" class="countries" id="countryId">
		    <option value="">Select Country</option>
		</select>
		<select name="state" class="states" id="stateId">
		    <option value="">Select State</option>
		</select>
		<select name="city" class="cities" id="cityId">
		    <option value="">Select City</option>
		</select>
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

</script>