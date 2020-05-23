<script src="<?php echo base_url(); ?>assets/js/countrystatecity.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<div class="right_col registration-page">
	<div class="row padding-top50 padding-bottom20">
		<div class="col-md-3">
			<h5>Product Information </h5>
		</div>
		<div class="col-md-6">
			<hr class="custom-form-hr">
		</div>		
		<div class="col-md-3">
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
				  <label for="Address">Product Category</label>
				</div>
			</div>
			<div class="col-md-3">
				<div class="form-group label-float-top">
					<select class="form-control control-float-top" >
				    <option></option>
				    <option>List 1</option>
				    <option>List 2</option>
				    <option>List 3</option>
				  </select>
				  <label for="Address">Product Form</label>
				</div>
			</div>			
			<div class="col-md-6">
				<div class="form-group label-float-top">
					<select class="form-control control-float-top" >
				    <option></option>
				    <option>List 1</option>
				    <option>List 2</option>
				    <option>List 3</option>
				  </select>
				  <label for="Address">Manufacturer</label>
					<!-- <label for="email">Date Of Birth</label> -->
				</div>
			</div>
			<div class="col-md-8">
			<table class="table table-bordered" id="dynamic_field">  
                <tr>  
                    <td >
                    	<div class="form-group label-float-top" style="width: 100px;">
							<select name="quantity[][quantity]" class="form-control control-float-top states" >	
								<option></option>
								<option>750gm</option>		    			
							</select>		
							<label for="country">Quantity</label>
						</div>
					</td> 
                    <td  >
                    	<div class="form-group label-float-top" style="width: 100px;">
							<input type="text" class="form-control control-float-top" name="mrp[][mrp]">
							<label for="email">MRP</label>
						</div>
                    </td> 
                    <td >
                    	<div class="form-group label-float-top" style="width: 100px;">
							<input type="text" class="form-control control-float-top"  name="sellprice[][sellprice]">
							<label for="email">Sell Price</label>
						</div>
                    </td> 
                    <td >
                    	<div class="form-group label-float-top" >
							<input type="date" class="form-control control-float-top" name="expriydate[][expriydate]">
<!-- 							<label for="email">Expiry Date</label>
 -->						</div>
                    </td>  
                    <td style="width: 5%;"><button type="button" name="add" id="add" class="btn btn-success">Add</button></td> 
                   
				</tr>  
		    </table> 
		</div>
			<div class="col-md-12">
				 <div class="form-group label-float-top">
				 	<input type="text" class="form-control control-float-top" name="address">
					<label for="country">Product</label>
				</div>
			</div>		
			<div class="col-md-3">
				 <div class="form-group">
				 	<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
        			<label for="vehicle1"> Prescription Required</label><br>
				</div>
			</div>		
			<div class="col-md-9">
				 <div class="form-group label-float-top">
				 	<input type="text" class="form-control control-float-top" name="address">
					<label for="country">Salt Composition</label>
				</div>
			</div>			
		</div>
		<div class="col-md-4 text-right">
			<div class="profile-image-section">								
				<div class="form-group">
					<div id="coba"></div>
				</div>			
			</div>
		</div>
	</div>
	<div class="row padding-top-bottom-20">
		<div class="col-md-3">
			<h5>Additional Information </h5>
		</div>
		<div class="col-md-6">
			<hr class="custom-form-hr">
		</div>		
		<div class="col-md-3">			
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
<script type="text/javascript">

    $(document).ready(function(){      
      var i=1;  
      $('#add').click(function(){  
           i++;  
           $('#dynamic_field').append('<tr id="row'+i+'" class="dynamic-added"><td><div class="form-group label-float-top"><select name="quantity[][quantity]" class="form-control control-float-top states" >	<option></option><option>750gm</option></select><label for="country">Quantity</label></div><td><div class="form-group label-float-top"><input type="text" class="form-control control-float-top" name="mrp[][mrp]"><label for="email">MRP</label></div></td><td><div class="form-group label-float-top"><input type="text" class="form-control control-float-top" name="sellprice[][sellprice]"><label for="email">Sell Price</label></div></td><td><div class="form-group label-float-top"><input type="date" class="form-control control-float-top" name="expriydate[][expriydate]"><label for="email">Expiry Date</label>	</div></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
      });
      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();  
      });  					  
    });  
</script>
<script type="text/javascript">
		$(function(){

			$("#coba").spartanMultiImagePicker({
				fieldName:        'fileUpload[]',
				directUpload : {
					status: true,
					loaderIcon: '<i class="fas fa-sync fa-spin"></i>',
					url: '../c.php',
					additionalParam : {
						name : 'My Name'
					},
					success : function(data, textStatus, jqXHR){
					},
					error : function(jqXHR, textStatus, errorThrown){
					}
				}
			});
		});
	</script>