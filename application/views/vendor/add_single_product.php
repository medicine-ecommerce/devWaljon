<script src="<?php echo base_url(); ?>assets/js/countrystatecity.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<div class="right_col registration-page">
  <div class="page-title">
    <div class="title_left">
      <h3>Invertory > Add Product</h3>
    </div>
  </div>
  <div class="x_panel add-product">
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
                 <table class="table no-border-table" id="dynamic_field">
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
                             <!--               <label for="email">Expiry Date</label>
                                -->           
                          </div>
                       </td>
                       <td style="width: 5%;"><button type="button" name="add" id="add" class="btn addMore-btn"><i class="fa fa-plus"></i></button></td>
                    </tr>
                 </table>
              </div>
              <div class="col-md-12">
                 <div class="form-group label-float-top">
                    <input type="text" class="form-control control-float-top" name="address">
                    <label for="country">Product Name</label>
                 </div>
              </div>
              <div class="col-md-3">
                 <div class="form-group" style="margin-top: 10px;">
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
                          <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab"><textarea style="width: 100%;height: 260px;" class="form-control"></textarea></div>
                          <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab"><textarea style="width: 100%;height: 260px;" class="form-control"></textarea></div>
                          <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab"><textarea style="width: 100%;height: 260px;" class="form-control"></textarea></div>
                          <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab"><textarea style="width: 100%;height: 260px;" class="form-control"></textarea></div>
                          <div class="tab-pane fade" id="v-pills-use" role="tabpanel" aria-labelledby="v-pills-use-tab"><textarea style="width: 100%;height: 260px;" class="form-control"></textarea></div>
                          <div class="tab-pane fade" id="v-pills-store" role="tabpanel" aria-labelledby="v-pills-store-tab"><textarea style="width: 100%;height: 260px;" class="form-control"></textarea></div>
                          <div class="tab-pane fade" id="v-pills-information" role="tabpanel" aria-labelledby="v-pills-information-tab"><textarea style="width: 100%;height: 260px;" class="form-control"></textarea></div>
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
                 <table class="table no-border-table" id="dynamic_field2">
                    <tr>
                       <td>
                          <div class="form-group label-float-top" >
                             <input type="text" class="form-control control-float-top" name="faq_question">
                             <label for="email">What is the product for ?</label>
                             <textarea class="form-control faq-textarea" rows="5" placeholder="About this product"></textarea>
                          </div>
                       </td>
                       <td style="width: 5%;"><button type="button" name="add2" id="add2" class="btn addMore-btn"><i class="fa fa-plus"></i></button></td>
                    </tr>
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
              <div class="mySlides">
                <img src="<?php echo base_url(); ?>assets/img/profile_dummy.png" style="width:100%">
              </div>

              <div class="mySlides">
                <img src="<?php echo base_url(); ?>assets/img/snake2.png" style="width:100%">
              </div>

              <div class="mySlides">
                <img src="<?php echo base_url(); ?>assets/img/profile_dummy.png" style="width:100%">
              </div>
                
              <div class="mySlides">
                <img src="<?php echo base_url(); ?>assets/img/snake2.png" style="width:100%">
              </div>

              <div class="mySlides">
                <img src="<?php echo base_url(); ?>assets/img/profile_dummy.png" style="width:100%">
              </div>
                
              <div class="mySlides">
                <img src="<?php echo base_url(); ?>assets/img/snake2.png" style="width:100%">
              </div> 
            </div>
            <div class="upload-img-sec">
              <div class="row img-upload">
                <div class="column">
                  <img class="demo cursor" src="<?php echo base_url(); ?>assets/img/profile_dummy.png" onclick="currentSlide(1)" alt="The Woods">
                </div>
                <div class="column">
                  <img class="demo cursor" src="<?php echo base_url(); ?>assets/img/snake2.png" onclick="currentSlide(2)" alt="Cinque Terre">
                </div>
                <div class="column">
                  <img class="demo cursor" src="<?php echo base_url(); ?>assets/img/profile_dummy.png" onclick="currentSlide(3)" alt="Mountains and fjords">
                </div>
                <div class="column">
                  <img class="demo cursor" src="<?php echo base_url(); ?>assets/img/snake2.png" onclick="currentSlide(4)" alt="Northern Lights">
                </div>
                <div class="column">
                  <img class="demo cursor" src="<?php echo base_url(); ?>assets/img/profile_dummy.png" onclick="currentSlide(5)" alt="Nature and sunrise">
                </div>    
                <div class="column">
                  <img class="demo cursor" src="<?php echo base_url(); ?>assets/img/snake2.png" onclick="currentSlide(6)" alt="Snowy Mountains">
                </div>
              </div>
            </div>
            <div class="upload-btn text-center padding-top-bottom-20">
              <div id="drop-area">
                <form class="my-form">
                  <h5>Drag here or uploade images</h5>
                  <input type="file" id="fileElem" multiple accept="image/*" onchange="handleFiles(this.files)">
                  <label class="btn active-btn btn-round Bulk-upload-btn" for="fileElem">Upload</label>
                </form>
                <progress id="progress-bar" max=100 value=0 style="display: none;"></progress>
               <!--  <div id="gallery" /></div> -->
              </div>
            </div> 
          </div>
        </div> 
      </div> 
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
          $('#dynamic_field').append('<tr id="row'+i+'" class="dynamic-added"><td><div class="form-group label-float-top"><select name="quantity[][quantity]" class="form-control control-float-top states" >	<option></option><option>750gm</option></select><label for="country">Quantity</label></div><td><div class="form-group label-float-top"><input type="text" class="form-control control-float-top" name="mrp[][mrp]"><label for="email">MRP</label></div></td><td><div class="form-group label-float-top"><input type="text" class="form-control control-float-top" name="sellprice[][sellprice]"><label for="email">Sell Price</label></div></td><td><div class="form-group label-float-top"><input type="date" class="form-control control-float-top" name="expriydate[][expriydate]"><label for="email">Expiry Date</label>	</div></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-custom-rev btn_remove"><i class="fa fa-trash-o"></i></button></td></tr>');  
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
          $('#dynamic_field2').append('<tr id="row'+i+'" class="dynamic-added"><td><div class="form-group label-float-top"><input type="text" class="form-control control-float-top" name="faq_question"><label for="email">What is the product for ?</label><textarea class="form-control faq-textarea" rows="5" placeholder="About this product"></textarea></div></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-custom-rev btn_remove"><i class="fa fa-trash-o"></i></button></td></tr>');  
     });
     $(document).on('click', '.btn_remove', function(){  
          var button_id = $(this).attr("id");   
          $('#row'+button_id+'').remove();  
     });  					  
   });  
</script>
<!-- <script type="text/javascript">
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
</script> -->
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
let imgCount = 0;
function handleFiles(files) {
  files = [...files]
  initializeProgress(files.length)
  files.forEach(uploadFile)
  files.forEach(previewFile,imgCount++);
}

function previewFile(file) {
  let reader = new FileReader()
  reader.readAsDataURL(file);
  reader.onloadend = function() {
    let img = document.createElement('img');
    img.src = reader.result;
    //document.getElementById('gallery').appendChild(img);
    $(".preview-box").append('<div class="mySlides"><img src="'+img.src+'" style="width:100%"></div>');
    $(".img-upload").append('<div class="column"><img class="demo cursor" src="'+img.src+'" style="width:100%" onclick="currentSlide('+imgCount+')"></div>');
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
</script>