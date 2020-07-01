<script src="<?php echo base_url(); ?>assets/js/countrystatecity.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<div class="right_col registration-page">
  <div class="page-title">
    <div class="title_left">
      <h3>Invertory > Add Product</h3>
    </div>
  </div>
   <?php    
    $productImages = $product['product_images'];
    $question = $product['question'];
    $product_item = $product['product'];
    
    ?>
  <form id="addSingleProduct" method="post" enctype="multipart/form-data" action="<?php echo base_url() ?>/admin/edit_singleProduct/<?= base64_encode("23"); ?>">

    <div class="custom-error-alert front-end-validation">   
      <a class="remove-red-alert"><span class="glyphicon glyphicon-remove custom-remove"></span></a>
      <span class="glyphicon glyphicon-warning-sign"></span>
      <p id="error-text"></p>
    </div>

    <div class="x_panel add-product">
      <?php if (!empty($this->session->flashdata('error'))) {
            echo '<div class="alert alert-danger">
                  '.$this->session->flashdata('error').'
                </div>';
          }
          elseif (!empty($this->session->flashdata('success'))) {
            echo '<div class="alert alert-success">
                  '.$this->session->flashdata('success').'
                </div>';
          } ?>
        <div class="row">
          
          
          <div class="col-md-8">
            <div class="row padding-top-bottom-20">
              <div class="col-md-3">
                <h6>Product Information </h6>
              </div>
              <div class="col-md-9">
                  <hr class="custom-form-hr">
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                  <div class="col-md-6">
                     <div class="form-group label-float-top">
                        <select class="form-control control-float-top" id="category_id" name="category_id" onchange="getSubcategory(this.value)">
                           <option></option>
                           <?php if (!empty($category)) {
                             foreach ($category as $key => $value) { ?>
                              <option <?php if($product_item->subcategory == $value->subcategory){ echo "selected"; } ?> value="<?php echo $value->id; ?>"><?php echo $value->subcategory; ?></option>
                            <?php }
                           } ?>
                        </select>
                        <label for="Address">Product Category</label>
                     </div>
                  </div>
                  <!-- <div class="col-md-6">
                     <div class="form-group label-float-top">
                        <select class="form-control control-float-top" id="subcategory">
                           <option></option>
                        </select>
                        <label for="Address">Product SubCategory</label>
                     </div>
                  </div> -->
                  <div class="col-md-6">
                     <div class="form-group label-float-top">
                        <select class="form-control control-float-top" name="product_form_id" id="product_form">
                           <option></option>
                           <?php if (!empty($product_form)) {
                             foreach ($product_form as $key => $value) { ?>
                              <option <?php if($product_item->product_form == $value->name){ echo "selected"; } ?> value="<?php echo $value->id; ?>"><?php echo $value->name; ?></option>
                            <?php }
                           } ?>
                        </select>
                        <label for="Address">Product Form</label>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group label-float-top">
                        <select class="form-control control-float-top" name="manufacturer_id" id="manufacturer">
                           <option></option>
                           <?php if (!empty($manufacturer)) {
                             foreach ($manufacturer as $key => $value) { ?>
                              <option <?php if($product_item->manufacturer_name == $value->name){ echo "selected"; } ?>  value="<?php echo $value->id; ?>"><?php echo $value->name; ?></option>
                            <?php }
                           } ?>
                        </select>
                        <label for="Address">Manufacturer</label>
                        <!-- <label for="email">Date Of Birth</label> -->
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group label-float-top">
                        <select class="form-control control-float-top" name="brand_id" id="brand">
                           <option></option>
                           <?php if (!empty($brand)) {
                             foreach ($brand as $key => $value) { ?>
                              <option <?php if($product_item->brand_name == $value->brand_name){ echo "selected"; } ?> value="<?php echo $value->id; ?>"><?php echo $value->brand_name; ?></option>
                            <?php }
                           } ?>
                        </select>
                        <label for="Address">Brand</label>
                        <!-- <label for="email">Date Of Birth</label> -->
                     </div>
                  </div>
                  <div class="col-md-12">
                     <table class="table no-border-table append-table" id="dynamic_field">
                        <tr>
                          <td>
                            <div style="width: 210px;">
                              <div class="form-group label-float-top" style="width: 100px;display: inline-block;"> 
                                <input type="text" class="form-control control-float-top" id="quantity" name="quantity[]" value="<?= $product_item->quantity; ?> ">
                                <label for="email">Quantity</label>
                              </div>
                              <div class="form-group label-float-top" style="width: 100px;display: inline-block;"> 
                                <select name="measurement[]" id="measurement" class="form-control control-float-top states" >
                                  <option value="1">kg</option>
                                  <option value="2">gm</option>
                                  <option value="3">ltr</option>
                                </select>
                                <label for="country">measurement</label>
                              </div>
                            </div>
                           </td>
                           <td  >
                              <div class="form-group label-float-top" style="width: 100px;">
                                <input type="text" class="form-control control-float-top" id="MRP" name="mrp[]" value="<?= $product_item->mrp; ?> ">
                                <label for="email">MRP</label>
                              </div>
                           </td>
                           <td >
                              <div class="form-group label-float-top" style="width: 100px;">
                                 <input type="text" class="form-control control-float-top" id="sellprice" name="sellprice[]" value="<?= $product_item->sale_price; ?> ">
                                 <label for="email">Sell Price</label>
                              </div>
                           </td>
                           <td >
                              <div class="form-group label-float-top" style="width: 100px;">
                                 <input type="text" class="form-control control-float-top" id="sellprice" name="offerprice[]" value="<?= $product_item->sale_price; ?> ">
                                 <label for="email">Offer Price</label>
                              </div>
                           </td>
                           <td >
                              <div class="form-group label-float-top" style="width: 100px;">
                                 <input type="date" class="form-control control-float-top" id="expriydate" name="expriydate[]" value="<?= $product_item->expiry_date; ?>">
                                  <label for="email">Expiry Date</label>
                                    
                              </div>
                           </td>
                           <td style="width: 5%;"><button type="button" name="add" id="add" class="btn addMore-btn"><i class="fa fa-plus"></i></button></td>
                        </tr>
                     </table>
                  </div>
                  <div class="col-md-12">
                     <div class="form-group label-float-top">
                        <input type="text" class="form-control control-float-top" name="name" id="productName" value="<?= $product_item->name; ?>">
                        <label for="country">Product Name</label>
                     </div>
                  </div>
                  <div class="col-md-3">
                     <div class="form-group padding-top-bottom-20">
                        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" id="prescriptionRequired">
                        <label for="vehicle1"> Prescription Required</label><br>
                     </div>
                  </div>
                  <div class="col-md-9">
                     <div class="form-group label-float-top">
                        <select class="form-control control-float-top" name="salt_composition_id" id="brand">
                           <option></option>
                           <?php if (!empty($salt_composition)) {
                             foreach ($salt_composition as $key => $value) { ?>
                              <option <?php if($product_item->saltcomposition_name == $value->name){ echo "selected"; } ?> value="<?php echo $value->id; ?>"><?php echo $value->name; ?></option>
                            <?php }
                           } ?>
                        </select>
                        <label for="country">Salt Composition</label>
                     </div>
                  </div>
              </div>
            </div>
            <div class="row padding-top-bottom-20">
               <div class="col-md-3">
                  <h6>Additional Information </h6>
               </div>
               <div class="col-md-9">
                  <hr class="custom-form-hr">
               </div>  
            </div>
            <div class="row">
               <div class="col-md-12 col-sm-12">
                  <div class="x_panel">
                     <div class="x_content">
                        <div class="col-md-3">
                           <div class="nav nav-tabs flex-column  bar_tabs" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                              <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">About</a>
                              <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Side Effect</a>
                              <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">When to Use</a>
                              <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">How to Use</a>
                              <a class="nav-link" id="v-pills-use-tab" data-toggle="pill" href="#v-pills-use" role="tab" aria-controls="v-pills-use" aria-selected="false">How to Works</a>
                              <a class="nav-link" id="v-pills-store-tab" data-toggle="pill" href="#v-pills-store" role="tab" aria-controls="v-pills-store" aria-selected="false">How to Store</a>
                              <a class="nav-link" id="v-pills-imformation-tab" data-toggle="pill" href="#v-pills-imformation" role="tab" aria-controls="v-pills-imformation" aria-selected="false">Safety Information</a>
                           </div>
                        </div>
                        <div class="col-md-9">
                           <div class="tab-content" id="v-pills-tabContent">
                              <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                <textarea name="about_product" style="width: 100%;height: 260px;" class="form-control" ><?= $product_item->about_product; ?></textarea >
                              </div>
                              <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                <textarea name="side_effect" style="width: 100%;height: 260px;" class="form-control" ><?= $product_item->side_effect; ?></textarea >
                              </div>
                              <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                <textarea name="when_to_use" style="width: 100%;height: 260px;" class="form-control" ><?= $product_item->when_to_use; ?></textarea >
                              </div>
                              <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                <textarea name="how_to_use" style="width: 100%;height: 260px;" class="form-control" ><?= $product_item->how_to_use; ?></textarea >
                              </div>
                              <div class="tab-pane fade" id="v-pills-use" role="tabpanel" aria-labelledby="v-pills-use-tab">
                                <textarea name="how_to_work" style="width: 100%;height: 260px;" class="form-control" ><?= $product_item->how_to_work; ?></textarea >
                              </div>
                              <div class="tab-pane fade" id="v-pills-store" role="tabpanel" aria-labelledby="v-pills-store-tab">
                                <textarea name="how_to_store" style="width: 100%;height: 260px;" class="form-control" ><?= $product_item->how_to_store; ?></textarea >
                              </div>
                              <div class="tab-pane fade" id="v-pills-imformation" role="tabpanel" aria-labelledby="v-pills-information-tab">
                                <textarea name="safety_info" style="width: 100%;height: 260px;" class="form-control" ><?= $product_item->safety_info; ?></textarea >
                              </div>
                           </div>
                        </div>
                        <div class="clearfix"></div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row padding-top-bottom-20">
               <div class="col-md-4">
                  <h6>Frequently Asked Question</h6>
               </div>
               <div class="col-md-8">
                  <hr class="custom-form-hr">
               </div> 
            </div>
            <div class="row">
              <div class="col-md-12">
                     <table class="table no-border-table append-table" id="dynamic_field2">
                      <?php           
                      if(!empty($question)){
                        $i =1 ;
                      foreach($question as $Qvalue) { ?>  
                        <tr>
                           <td>
                              <div class="form-group label-float-top" >
                                 <input type="text" class="form-control control-float-top question_input" name="faq_question[]" value="<?= $Qvalue->question; ?>">
                                 <label for="email">What is the product for ?</label>
                                 <textarea type="text" class="form-control faq-textarea answer_input" rows="5" placeholder="About this product" name="faq_answar[]"><?= $Qvalue->answer; ?> </textarea>
                                 <input type="hidden" name="question_id[]" value="<?= $Qvalue->question_id; ?>">
                              </div>
                           </td>
                          <?php if($i==1){ ?>
                           <td style="width: 5%;"><button type="button" name="add2" id="add2" class="btn addMore-btn"><i class="fa fa-plus"></i></button></td>
                          <?php } ?>
                        </tr>
                        <?php $i+=1; } } ?>          
                     </table>
                </div>
            </div>  
          </div> 
          <div class="col-md-4">
            <div>
              <div class="padding-top-bottom-20">
                <h6>Attachments</h6>
              </div>
              <div class="attachment-box">
                <div class="preview-box">
                  <div class="defaultSlides">
                    <img src="<?php echo base_url(); ?>assets/img/imgpsh_fullsize_anim.png" style="width:100%">
                  </div>
                </div>
                  <?php                    
                  if(!empty($productImages)){                    
                  foreach($productImages as $Qvalue) { ?>  
                  <div class="preview-box edit-images">
                    <div class="defaultSlides">
                      <a onclick="deleteProductImages(<?= $Qvalue->product_image_id ?>,'<?= $Qvalue->image; ?>')" class="close-icon"><i class="fa fa-times" aria-hidden="true"></i></a>
                      <img src="<?php echo base_url().$Qvalue->image; ?> " style="width:100%">
                    </div>
                  </div>
                  <?php } }?>
                  
                <div class="upload-img-sec">
                  <div class="img-upload">
                  </div>
                </div>
                <div class="upload-btn text-center padding-top-bottom-20">
                  <div id="drop-area">
                      <h5>Drag here or uploade images</h5>
                      <input type="file" id="fileElem" name="file[]" multiple accept="image/*" onchange="handleFiles(this.files)">
                      <label class="btn active-btn btn-round Bulk-upload-btn" for="fileElem">Upload</label>
                    <progress id="progress-bar" max=100 value=0 style="display: none;"></progress>
                   <!--  <div id="gallery" /></div> -->
                  </div>
                </div> 
              </div>
            </div> 
          </div> 
        </div>
        <div class="row"> 
          <div class="col-md-12 padding-top-bottom50">
            <button type="submit" class="btn btn-default submit_button float-right">Cancel</button>   
            <button type="button" id="submit_form" class="btn btn-default submit_button float-right">Save</button> 
          </div>
        </div>
    </div>
  </form>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -
<script type="text/javascript">

  $(document).ready(function(){         
    $(".label-float-top").find("label").addClass("active");    
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
    // $(".label-float-top").click(function(){
    //   $(this).find("label").addClass("active");
    //   $(this).find("input").focus();    
    // });



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
          $('#dynamic_field').append('<tr id="row'+i+'" class="dynamic-added"><td> <div style="width: 210px;"><div class="form-group label-float-top" style="width: 100px;display: inline-block;"><input type="text" id="quantity'+i+'" class="form-control control-float-top" name="quantity[]"><label for="email">Quantity</label></div><div class="form-group label-float-top" style="width: 100px;display: inline-block;"><select name="measurement[]" class="form-control control-float-top states" id="measurement'+i+'"><option>l</option><option>gm</option></select><label for="country">measurement</label></div></div><td><div class="form-group label-float-top"><input type="text" id="MRP'+i+'" class="form-control control-float-top" name="mrp[]"><label for="email">MRP</label></div></td><td><div class="form-group label-float-top"><input type="text" id="sellprice'+i+'" class="form-control control-float-top" name="sellprice[]"><label for="email">Sell Price</label></div></td><td ><div class="form-group label-float-top" style="width: 100px;"><input type="text" class="form-control control-float-top" id="offerprice'+i+'" name="offerprice[]"><label for="email">Offer Price</label> </div></td><td><div class="form-group label-float-top" style="width: 100px;"><input type="date" class="form-control control-float-top" name="expriydate[]" id="expriydate'+i+'"></div></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-custom-rev btn_remove"><i class="fa fa-trash-o"></i></button></td></tr>');  
     });
     $(document).on('click', '.btn_remove', function(){  
          var button_id = $(this).attr("id");   
          $('#row'+button_id+'').remove();  
     });  					  
   });  
   $(document).ready(function(){      
     var i=1;  
     $('#add2').click(function(){  
          i++;  
          $('#dynamic_field2').append('<tr id="row'+i+'" class="dynamic-added"><td><div class="form-group label-float-top"><input type="text" class="form-control control-float-top" name="faq_question[]"><label for="email">What is the product for ?</label><textarea class="form-control faq-textarea" rows="5" placeholder="About this product" name="faq_answar[]"></textarea></div></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-custom-rev btn_remove"><i class="fa fa-trash-o"></i></button></td></tr>');  
     });
     $(document).on('click', '.btn_remove', function(){  
          var button_id = $(this).attr("id");   
          $('#row'+button_id+'').remove();  
     });  					  
   });  
</script>

<script>
  var slideIndex = 1;
  showSlides(slideIndex);

  function plusSlides(n) {
    showSlides(slideIndex += n);
  }

  function currentSlide(n) {
    showSlides(slideIndex = n);
  }

  function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("demo");
    var captionText = document.getElementById("caption");
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
    $(".defaultSlides").hide();
  }
</script>
<script type="text/javascript">
  // ************************ Drag and drop ***************** //
let dropArea = document.getElementById("drop-area")

// Prevent default drag behaviors
;['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
  dropArea.addEventListener(eventName, preventDefaults, false)   
  document.body.addEventListener(eventName, preventDefaults, false)
})

// Highlight drop area when item is dragged over it
;['dragenter', 'dragover'].forEach(eventName => {
  dropArea.addEventListener(eventName, highlight, false)
})

;['dragleave', 'drop'].forEach(eventName => {
  dropArea.addEventListener(eventName, unhighlight, false)
})

// Handle dropped files
dropArea.addEventListener('drop', handleDrop, false)

function preventDefaults (e) {
  e.preventDefault()
  e.stopPropagation()
}

function highlight(e) {
  dropArea.classList.add('highlight')
}

function unhighlight(e) {
  dropArea.classList.remove('active')
}

function handleDrop(e) {
  var dt = e.dataTransfer
  var files = dt.files

  handleFiles(files)
}

let uploadProgress = []
let progressBar = document.getElementById('progress-bar')

function initializeProgress(numFiles) {
  progressBar.value = 0
  uploadProgress = []

  for(let i = numFiles; i > 0; i--) {
    uploadProgress.push(0)
  }
}

function updateProgress(fileNumber, percent) {
  uploadProgress[fileNumber] = percent
  let total = uploadProgress.reduce((tot, curr) => tot + curr, 0) / uploadProgress.length
  console.debug('update', fileNumber, percent, total)
  progressBar.value = total
}

function handleFiles(files) {
  files = [...files]
  initializeProgress(files.length)
  files.forEach(uploadFile)
  files.forEach(previewFile);
}
var fileArr = [];
function previewFile(file) {
  
  let reader = new FileReader()
  reader.readAsDataURL(file);
  reader.onloadend = function() {
    let img = document.createElement('img');
    var numberOfChildren = $('.img-upload').children('.column').length;
    var imgNumber = numberOfChildren+1;
    img.src = reader.result;
    $(".preview-box").append('<div class="mySlides"><img src="'+img.src+'" style="width:100%"></div>');
    $(".img-upload").append('<div class="column"><img class="demo cursor" src="'+img.src+'" style="width:100%" onclick="currentSlide('+imgNumber+')"></div><input type="hidden" name="base64image[]" value="'+img.src+'">');
    
  } 


}

function uploadFile(file, i) {
  var url = 'https://api.cloudinary.com/v1_1/joezimim007/image/upload'
  var xhr = new XMLHttpRequest()
  var formData = new FormData()
  xhr.open('POST', url, true)
  xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest')

  // Update progress (can be used to show progress indicator)
  xhr.upload.addEventListener("progress", function(e) {
    updateProgress(i, (e.loaded * 100.0 / e.total) || 100)
  })

  xhr.addEventListener('readystatechange', function(e) {
    if (xhr.readyState == 4 && xhr.status == 200) {
      updateProgress(i, 100) // <- Add this
    }
    else if (xhr.readyState == 4 && xhr.status != 200) {
      // Error. Inform the user
    }
  })

  formData.append('upload_preset', 'ujpu6gyk')
  formData.append('file', file)
  xhr.send(formData)
}
function getSubcategory(cat_id) {
  // alert(cat_id);
  $.ajax({
      type: "POST",
      url: '<?php echo base_url('admin/getSubcategory'); ?>',
      data: {cat_id : cat_id}, // serializes the form's elements.
      success: function(data)
      {
        $('#subcategory').html(data);
        // alert(data); // show response from the php script.
      }
  });
}
$(".form-group .form-control").blur(function(){
       if($(this).val()!=""){                 
         $(this).siblings("label").addClass("active");
       }else{
          $(this).siblings("label").removeClass("active");
       }
    });
  // $(".label-float-top").click(function(){
  //   $(this).find("label").addClass("active");
  //   $(this).find("input").focus();
    
  //   });
  $(".label-float-top").click(function(){
      $(this).find("label").addClass("active");
      // $(this).find("input").focus();    
  });

  $(document).ready(function(){
      
    $('.remove-red-alert').click(function() {
      $('.custom-error-alert').fadeOut("slow")
    })
    setInterval(function () {
      $('.custom-error-alert').fadeOut("slow")
    }, 5000);

  });

  $(document).ready(function(){ 
    $('.front-end-validation').hide();
    $('#submit_form').click(function(argument){     
      var error                   = '';
      var category_id             = $("#category_id").val();
      var subcategory             = $("#subcategory").val();
      var product_form            = $("#product_form").val();
      var manufacturer            = $("#manufacturer").val();
      var brand                   = $("#brand").val();
      var quantity                = $("#quantity").val();
      var measurement             = $("#measurement").val();
      var MRP                     = $("#MRP").val();
      var sellprice               = $("#sellprice").val();
      var expriydate              = $("#expriydate").val();
      var productName             = $("#productName").val();
      var prescriptionRequired    = $("#prescriptionRequired").val();
      var salt_composition        = $("#salt_composition").val();
      // var image                   = $("#fileElem").val();
    
      if(category_id==''){
        error += "<p>The Category field is required.</p>";
      }
      if(subcategory==''){
        error += '<p>The Subcategory field is required.</p>';
      }
      if(product_form==''){
        error += '<p>Product Form field is required.</p>';
      }
      if(manufacturer==''){
        error += '<p>Manufacturer is required.</p>';
      }
      if(brand==''){
        error += '<p>Brand is required.</p>';
      }
      if(quantity==''){
        error += '<p>Quantity is required.</p>';
      }
      if(measurement==''){
        error += '<p>Measurement is required.</p>';
      }
      if(MRP==''){
        error += '<p>MRP is required.</p>';
      }
      if(sellprice==''){
        error += '<p>Sell Price is required.</p>';
      }
      // if(image==''){
      //   error += '<p>Product image is required.</p>';
      // }
      if(expriydate==''){
        error += '<p>Expriy Date is required.</p>';
      }
      if(productName==''){
        error += '<p>Product Name is required.</p>';
      }
      if(prescriptionRequired==''){
        error += '<p>Prescription Required is required.</p>';
      }     
      if(salt_composition==''){
        error += '<p>Salt Composition is required.</p>';
      }
      
      if(error!=''){        
        $("#error-text").html(error);     
        $('.front-end-validation').show();
        window.scrollTo(0, 0);
      }else{        
        $('#addSingleProduct').submit();
      }
    });
    $('.question_input').click(function(){
      $(this).focus();    
    })
    $('.answer_input').click(function(){
      $(this).focus();    
    })

  })

  function deleteProductImages(id,name) {   
    var outputFirst = name.split(/[/]+/).pop();

    // var output = outputFirst.split(/[.]+/).pop();    
    // var imageName  = name.split(/[/]+/).pop().slice(0, name.split(/[/]+/).pop().indexOf("."));
    // alert(outputFirst.slice(0, outputFirst.indexOf(".")))
    // name.substring(name.indexOf(char) + 1);

    $.ajax({
          url:"<?php echo base_url(); ?>/vendor/delete_productImages",
          method:"POST",
          dataType: 'JSON',
          data: {id:id,image_name:outputFirst},        
          success:function(data){                            
            console.log(data);
             location.reload();            
                // setInterval(function () {
                //   $('.front-end-error').fadeOut("slow");
                // }, 7000);
            
            // window.location.href = "<?php echo base_url() ?>vendor/bulk_upload";        
          }
    })
  }

</script>