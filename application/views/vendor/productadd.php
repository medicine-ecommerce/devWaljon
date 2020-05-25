<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<div class="right_col">
	<div class="row padding-top50">
		<div class="col-md-3">
			<h5>Product Information </h5>
		</div>
		<div class="col-md-9">
			<hr class="custom-form-hr">
		</div>		
	</div>
	<div class="row"> 
		<div class="col-md-8">
			<div class="col-md-4">
				<div class="form-group label-float-top">
					<select name="product_category" class="form-control control-float-top countries" >
						<option></option>
						<option>Diabetic Diet</option>
					</select>
					<label for="email">Product Category</label>					
				</div>
			</div>			
			<div class="col-md-3">
				<div class="form-group label-float-top">
					<select name="produtc_form" class="form-control control-float-top states" >
					<option></option>
						<option>Paste</option>		    			
					</select>		
					<label for="country">Product Form</label>
				</div>
			</div>
			<div class="col-md-5">
				<div class="form-group label-float-top">
					<select name="produtc_form" class="form-control control-float-top states" >	
						<option></option>
						<option>Dabur India Ltd</option>		    			
					</select>		
					<label for="country">Manufacturer</label>
				</div>
			</div>										
		</div>
		<div class="col-md-12">
			<table class="table table-bordered" id="dynamic_field">  
                <tr>  
                    <td>
                    	<div class="form-group label-float-top">
							<select name="quantity[][quantity]" class="form-control control-float-top states" >	
								<option></option>
								<option>750gm</option>		    			
							</select>		
							<label for="country">Quantity</label>
						</div>
					</td> 
                    <td  style="width: 10%;">
                    	<div class="form-group label-float-top">
							<input type="text" class="form-control control-float-top" name="mrp[][mrp]">
							<label for="email">MRP</label>
						</div>
                    </td> 
                    <td style="width: 10%;">
                    	<div class="form-group label-float-top">
							<input type="text" class="form-control control-float-top"  name="sellprice[][sellprice]">
							<label for="email">Sell Price</label>
						</div>
                    </td> 
                    <td style="width: 15%;">
                    	<div class="form-group label-float-top">
							<input type="date" class="form-control control-float-top" name="expriydate[][expriydate]">
							<label for="email">Expiry Date</label>
						</div>
                    </td>  
                    <td style="width: 5%;"><button type="button" name="add" id="add" class="btn btn-success">Add</button></td> 
                    <td>
						<div class="form-group">
							<div id="coba"></div>
						</div>	
					</td>
				</tr>  
		    </table> 
		</div>
	</div>
</div>



<script type="text/javascript">
	
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
           $('#dynamic_field').append('<tr id="row'+i+'" class="dynamic-added"><td><div class="form-group label-float-top"><select name="quantity[][quantity]" class="form-control control-float-top states" >	<option></option><option>750gm</option></select><label for="country">Quantity</label></div><td><div class="form-group label-float-top"><input type="text" class="form-control control-float-top" name="mrp[][mrp]"><label for="email">MRP</label></div></td><td><div class="form-group label-float-top"><input type="text" class="form-control control-float-top" name="sellprice[][sellprice]"><label for="email">Sell Price</label></div></td><td><div class="form-group label-float-top"><input type="date" class="form-control control-float-top" name="expriydate[][expriydate]"><label for="email">Expiry Date</label>	</div></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td><td><div class="form-group"><div id="coba"></div></div></td></tr>');  
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

