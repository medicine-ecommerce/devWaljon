<!-- <script src="<?php echo base_url(); ?>vendor/countrystatecity.js"></script> -->
<?php 
$allCount = $bulk_data['allCount'];
$bulk_data = $bulk_data['uploaded_bulk_data'];
?>

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
          <form method="post" action="<?php echo base_url() ?>vendor/bulk_product_update" enctype="multipart/form-data">
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
                      <a data-id="<?= $value->id ?>" data-toggle="modal" data-target="#myModal" class="img-uplod-modal active main-image">
                        <img src="<?php echo base_url('assets/img/main_product_image.png');?>" id="preview<?= $value->id ?>"></a>
                        <input type="file" data-id="preview<?= $value->id ?>" class="product_main_img" name="profile_image[]" >
                      <a data-gallery-id="gallery<?= $value->id ?>" data-toggle="modal" data-target="#gallary-Modal" class="img-uplod-modal">
                        <img  src="<?php echo base_url('assets/img/imgpsh_fullsize_anim.png');?>" id="gallery<?= $value->id ?>"></a>  
                        <input type="file" data-id="preview<?= $value->id ?>" class="product_main_img" name="profile_image[]" >
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
                  <p>Total Products : <?php echo $allCount; ?>  </p>                  
                  <p>Products link with images : 0</p>
                  <p>Products not link with images : 0</p>
                </div>
              </div>              
              <div class="col-md-6 padding-top50">
                <button type="button" data-toggle="modal" data-target="#temp-Modal" class="btn btn-default submit_button float-right">Next</button>
                <button data-toggle="modal" data-target="#temp-Modal" type="button" class="btn btn-default submit_button float-right">Previous</button> 
                <button data-toggle="modal" data-target="#temp-Modal" type="button" class="btn btn-default submit_button float-right">Cancle</button>   
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
  <!-- <div class="modal fade imageuploadModel" id="myModal" role="dialog">
    <div class="modal-dialog">             
      <form method="post" action="<?php echo base_url() ?>/vendor/bulk_update_product/<?= base64_encode($this->session->userdata('user_id')); ?>" enctype="multipart/form-data">         
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
                  <img width="200" height="220" src="<?php echo base_url('assets/img/main_product_image.png');?>" class="bulk-img-main" > 
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
                <input type="file" name="product_main_image" id="product_main_image">
                <p><i class="fa fa-upload"></i> Upload Main Image</p>
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
          <button type="button" class="btn btn-default submit_button float-right product-image-save">Save</button> 
        </div>
      </div> 
    </form>
    </div>
  </div> -->


  <!-- Gallary Image Modal -->
  <!-- Modal -->
  <div class="modal fade imageuploadModel" id="gallary-Modal" role="dialog">
    <div class="modal-dialog">             
      <form method="post" action="<?php echo base_url() ?>/vendor/bulk_update_product" enctype="multipart/form-data">   
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <div class="Varieties-upload">  
            <!-- <p>Varieties</p>
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
            </div> -->
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
                  <img width="200" height="220" src="<?php echo base_url('assets/img/main_product_image.png');?>" class="bulk-img-main" > 
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
                <input type="file" name="product_main_image" id="product_main_image">
                <p><i class="fa fa-upload"></i> Upload Main Image</p>
                <p><i class="fa fa-trash" style="color:red"></i> Delete Main Image</p>
              </div>
            </div>
          </div>
          <div class="row margin-top20">
            <div id="gallary-image" style="width: 100%"></div>  
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" data-dismiss="modal" class="btn btn-default submit_button float-right">Cancle</button>              
          <button type="submit" class="btn btn-default submit_button float-right">Cancle</button>              
          <button type="button" class="btn btn-default submit_button float-right product-image-save">Save</button> 
        </div>
      </div> 
    </form>
    </div>
  </div>


  <!-- Temperory modal -->

  <div class="modal fade imageuploadModel" id="temp-Modal" role="dialog">
    <div class="modal-dialog">             
      <form method="post" action="<?php echo base_url() ?>/vendor/bulk_update_product" enctype="multipart/form-data">   
      <!-- Modal content-->
      <div class="modal-content">        
        <div class="modal-body text-center">
           <img src="<?php echo base_url('assets/img/coming-soon.jpg');?>">          
        </div>
        <div class="modal-footer">
          <button type="submit" data-dismiss="modal" class="btn btn-default submit_button float-right">Ok</button>
        </div>
      </div> 
    </form>
    </div>
  </div>

<script type="text/javascript">

  $(function(){
    $("#gallary-image").spartanMultiImagePicker({
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

$(".product-image-save").click(function(){

   // var getId = $(this).attr("data-gallery-id");
   // alert(getId);
   //  $(".bulk-img-main").attr("id",getId);
   //  $("#product_main_image").attr("custom-data-id",getId);


   var elements = document.getElementsByClassName("product_gallary_img");
   
   console.log(elements.length);
   

    var myFunction = function() {
      var attribute = this.getAttribute("data-id");      
      changeImageGallery(this,attribute);
    };

    for (var i = 0; i < elements.length; i++) {
        elements[i].addEventListener(myFunction, false);
    }
function changeImageGallery(input,imageId) {
    var reader;    
    if (input.files && input.files[0]) {
      reader = new FileReader();
      reader.onload = function(e) {  
      console.log(input.files[0]);
         $("#"+imageId).attr('src',e.target.result);         
      }

      reader.readAsDataURL(input.files[0]);
    }
  }

    
});



// $(".img-uplod-modal").click(function(){
//      var getId =$(this).attr("data-id");
//     $(".bulk-img-main").attr("id",getId);
//     $("#product_main_image").attr("custom-data-id",getId);
//     $(this).find("img").attr("main-preview-id","");
// });
  // $(".product-image-save").click(function(){    
  //    var getIds = $("#product_main_image").val();
  //    var DynamicIds = $('input[custom-data-id]').text();
  //    alert(DynamicIds);
  //     // $("#product_main_image").removeAttr("name");
  //     // $("#product_main_image").removeAttr("id");
  //    $('#my_file').html(filename);
  //    alert(getIds)
  //    var tempSRC =$(".bulk-img-main").attr("src");
  //    console.log(tempSRC);
  //    $(".bulk-img-main").removeAttr("id");
  //   $("img").find("main-preview-id").attr('src',tempSRC);  
     
  //   // $(".bulk-img-main").attr("id",getId);
  //   // $("#product_main_image").attr("custom-data-id",getId);

  // });




var product_main_image = document.getElementById("product_main_image"),
    preview = document.getElementById("SK14");
    
  product_main_image.addEventListener("change", function() {

    var getId = $(this).attr("custom-data-id");    

    changeImage(this,getId);
  });

  function changeImage(input,getId) {
    preview = document.getElementById(getId);
    var reader;

    if (input.files && input.files[0]) {
      reader = new FileReader();

      reader.onload = function(e) {
        console.log(e.target.result);
        preview.setAttribute('src', e.target.result);
      }

      reader.readAsDataURL(input.files[0]);
    }
  } 



  // Mew  
  // var product_main_img = document.getElementsByClassName("product_main_img"),
  //   preview = document.getElementById("preview");

    var elements = document.getElementsByClassName("product_main_img");

    var myFunction = function() {
      var attribute = this.getAttribute("data-id");      
      changeImage(this,attribute);
    };

    for (var i = 0; i < elements.length; i++) {
        elements[i].addEventListener('change', myFunction, false);
    }
    
  // product_main_img.addEventListener("change", function() {

    
  //   alert('hji');
  //   // alert($(this).parent().children().attr("id"));
  //   // $(this).closest('img').find("img[id]").val();   
     
  //   // $(this).find("input[type=text]").focus();   
  //   // $(this).find("option:eq(0)").html("Select "+ $(this).find("label").text());
    
    
  //   changeImage(this);
  // });

  function changeImage(input,imageId) {
    var reader;    
    if (input.files && input.files[0]) {
      reader = new FileReader();
      reader.onload = function(e) {  
      console.log(input.files[0]);
         $("#"+imageId).attr('src',e.target.result);         
      }

      reader.readAsDataURL(input.files[0]);
    }
  }


</script>