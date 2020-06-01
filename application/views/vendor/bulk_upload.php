  			
<!-- <script src="<?php echo base_url(); ?>vendor/countrystatecity.js"></script> -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
       <div class="title_left">
          <h3> Inventory > Image Upload</h3>
       </div>
       <div class="title_right">
          <div class="col-md-12 col-sm-8 form-group pull-right top_search">
            <div class="input-group btn-linking-div">
              <a class="btn-linking-page active">Bulk Upload</a>
              <hr class="active">
              <a class="btn-linking-page next">Image Upload</a>
              <hr>
              <a class="btn-linking-page ">Additional information</a>
              <hr>
              <a class="btn-linking-page ">FAQ</a>
            </div>
          </div>
        </div>
    </div>
    <form id="import_form" method="post"  enctype="multipart/form-data">      
        <input type="file" name="file">
        <button type="submit"> Upload </button>
    </form>


    <div class="col-md-12 col-sm-12  home-module-pages">
      <div class="x_panel">
        <div class="x_content">
          <table class="table bulk-uoload-table">
            <thead>
              <tr>
                <th class="column-title">Image</th>
                <th>Product ID</th>
                <th>Product Name</th>
                <th>Product Manufacturer</th>
                <th>Product Form</th>
                <th>Varieties</th>
                <th>Unit Type</th>
                <th>MRP</th>
                <th>Sell Price</th>
                <th>Stock Quantity</th>
                <th>Pricscription Yes/No</th>
                <th>Product Category</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <div class="bulk-images">                    
                    <a data-toggle="modal" data-target="#myModal" class="img-uplod-modal active">
                      <img  src="<?php echo base_url('assets/img/imgpsh_fullsize_anim.png');?>"></a>
                    <a data-toggle="modal" data-target="#myModal" class="img-uplod-modal">
                      <img  src="<?php echo base_url('assets/img/imgpsh_fullsize_anim.png');?>"></a>  
                  </div>
                </td>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
                <td>@twitter</td>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
                <td>@twitter</td>
                <td>@twitter</td>
                <td>
                  <div class="form-group label-float-top">
                    <select class="form-control control-float-top bulk-dropdown" >
                       <option></option>
                       <option value="1">Yes</option>
                       <option value="0">No</option>                       
                    </select>
                    <label for="Address">Select</label>
                  </div>
                </td>
                <td>
                  <div class="form-group label-float-top">
				            <select class="form-control control-float-top bulk-dropdown" >
				               <option></option>
				               <option>List 1</option>
				               <option>List 2</option>
				               <option>List 3</option>
				            </select>
				            <label for="Address">Select</label>
				          </div>
			     	    </td>
              </tr>
				      
            </tbody>
          </table>
          <div class=""> 
            <div class="col-md-6">
              <div class="upload-details">
                <p>Total Products : 0</p>
                <p>Products link with images : 0</p>
                <p>Products not link with images : 0</p>
              </div>
            </div>
            <div class="col-md-6 padding-top50">
              <button type="submit" class="btn btn-default submit_button float-right">Next</button>
              <button type="submit" class="btn btn-default submit_button float-right">Previous</button> 
              <button type="submit" class="btn btn-default submit_button float-right">Cancle</button>   
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
  <div class="modal fade imageuploadModel" id="myModal" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <div class="Varieties-upload">  
            <p>Varieties</p>
            <div id="gender" class="btn-group bulk-uoload-varieties stock-btn" data-toggle="buttons">
              <label class="btn label-btn active" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                <input type="radio" name="graph" value="monthly" class="join-btn"> &nbsp; 200gm &nbsp;
              </label>
              <label class="btn label-btn" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                <input type="radio" name="graph" value="weekly" class="join-btn"> 500gm
              </label>
              <label class="btn label-btn" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                <input type="radio" name="graph" value="weekly" class="join-btn"> 1Kg
              </label>
            </div>
          </div> 
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-4">
              <div class="bulk-upload-image">
                <div class="text-center">
                  <p>Main Images</p>
                </div>
                <div class="bulk-img-div">
                  <img src=""> 
                </div>
              </div> 
            </div>
            <div class="col-md-8">
              <div class="bulk-product-detail">
                <span>
                  <span>Product ID : </span> 
                  <p>fgdrrg</p>
                </span>
                <span> 
                  <span>Product Name : </span> 
                  <p>fgg</p>
                </span>
                <span>
                  <span>Manufacturer : </span> 
                  <p>fdgg</p>
                </span>
              </div> 
              <hr>
              <div class="upload-details padding-top-bottom-20">
                <p><i class="fa fa-upload"></i> Ipload Main Image</p>
                <p><i class="fa fa-trash" style="color:red"></i> Delete Main Image</p>
              </div>
            </div>
          </div>
          <div class="row margin-top20">
            <div id="coba" style="width: 100%"></div>  
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" data-dismiss="modal" class="btn btn-default submit_button float-right">Cancle</button>              
          <button type="submit" class="btn btn-default submit_button float-right">Save</button> 
        </div>
      </div> 
    </div>
  </div>

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
      $(this).find("input").focus();
    
    });
});

</script>
<script type="text/javascript">
  
  $('#import_form').on('submit', function(event){
    event.preventDefault();
    $.ajax({
      url:"<?php echo base_url() ?>vendor/import_data",
      method:"POST",
      data:new FormData(this),
      contentType:false,
      cache:false,
      processData:false,
      success:function(data){
        $('#file').val('');
        //load_data();
        alert(data);
        console.log("success");
      }
    })
  });


</script>