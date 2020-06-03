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
    <div class="col-md-12 col-sm-12  home-module-pages">
      <div class="x_panel">
        <div class="x_content">
          <form method="post" action="<?php echo base_url() ?>vendor/bulk_product_update">
            <table id="dtBasicExample" class="table table-striped table-bordered table-sm bulk-uoload-table" cellspacing="0" width="100%" class="table bulk-uoload-table">
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
                <?php foreach ($bulk_data as $value) { ?>
                <tr>
                  <td>
                    <div class="bulk-images">                    
                      <a data-toggle="modal" data-target="#myModal" class="img-uplod-modal active">
                        <img  src="<?php echo base_url('assets/img/main_product_image.png');?>"></a>
                      <a data-toggle="modal" data-target="#myModal" class="img-uplod-modal">
                        <img  src="<?php echo base_url('assets/img/imgpsh_fullsize_anim.png');?>"></a>  
                    </div>
                  </td>
                  <td><?php echo $value->product_sku_id; ?></td>
                  <td><?php echo $value->name; ?></td>
                  <td><?php echo $value->manufacturer_name; ?></td>
                  <td><?php echo $value->product_form; ?></td>
                  <td><?php echo $value->varieties; ?></td>
                  <td><?php echo $value->unit; ?></td>
                  <td><?php echo $value->mrp; ?></td>
                  <td><?php echo $value->sale_price; ?></td>                
                  <td><?php echo $value->quantity; ?></td>                                
                  <td>
                    <input type="hidden" name="prpduct_id[]" value="<?php echo $value->id;?>">
                    <div class="form-group label-float-top">
                      <select class="form-control control-float-top bulk-dropdown" name="bulk_priscription[]">
                         <option></option>
                         <option <?php if($value->quantity==1){ ?> selected <?php } ?> value="1">Yes</option>
                         <option <?php if($value->quantity==0){ ?> selected <?php } ?> value="0">No</option>                       
                      </select>
                      <label for="Address">Select</label>
                    </div>
                  </td>
                  <td>
                    <div class="form-group label-float-top">
                      <select class="form-control control-float-top bulk-dropdown" name="bulk_product_category[]">
                        <option></option>
                        <?php foreach ($category as $value) { ?>
                          <option value="<?=$value->id ?>"><?= $value->category_name ?></option> 
                        <?php } ?>  
                         
                         <option>List 1</option>
                         <option>List 2</option>
                         <option>List 3</option>
                      </select>
                      <label for="Address">Select</label>
                    </div>
                  </td>
                </tr>
                <?php } ?>
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
          </form>
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
                  <img src="<?php echo base_url('assets/img/main_product_image.png');?>"> 
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

// Basic example
$(document).ready(function () {
  $('#dtBasicExample').DataTable();
  $('.dataTables_length').addClass('bs-select');
});

</script>