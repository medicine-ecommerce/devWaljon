
<section class="main-page">
  <div class="container">
    <div class="order-view">  
      <form id="form">
        <div class="row" id="step1">
          <div class="col-md-5">
            <div class="order-date-detail">
              <h4>Upload Prescription</h4>
              <ul>
                <li>
                  Please attach a prescription to proceed
                </li>
              </ul>
            </div>
            <div class="order-detail">
              <div class="upload-div">
                <a class="upload-pres back-white">
                  <input type="file" name="file" multiple accept="image/*" class="upload-new-pres" visbility="hidden" onchange="readURL(this)">
                  <span class="upload-img">
                    <img src="<?php echo base_url();?>assets/img/file.png">
                  </span>
                  <span class="upload-name">
                    <p>Upload New</p>
                  </span>
                </a>
              </div>
              <div class="upload-div">
                <a href="<?php echo base_url('user/saved_prescription'); ?>" class="upload-pres back-white">
                  <span class="upload-img">
                    <img src="<?php echo base_url();?>assets/img/file.png">
                  </span>
                  <span class="upload-name">
                    <p>Saved Prescription</p>
                  </span>
                </a>
              </div>  
             <!--  <hr> -->
              <div class="show-upload">
                <h5>Attached Prescription</h5>
                <div class="show-upload-content">
                  <div class="show-upload-img">
                    <img src="<?php echo base_url();?>assets/img/file.png">
                  </div>
                  <div class="show-upload-name">
                    <p>Uploaded prescriptions will be shown here</p>                
                  </div>
                </div>
                <div class="upload-img">
                  <div class="upload-img-sec">
                    <ul id="attach-preview">
                      <?php 
                      if (!empty($prescription)) {
                         foreach ($prescription as $key => $value) { ?>
                        <li class="uplod-img-prse">
                          <a class="cross-img-upload"><i class="fa fa-close"></i></a>
                          <img src="<?php echo base_url($value->prescription); ?>">
                        </li>
                      <?php   }
                       } ?>
                      <!-- <li class="uplod-img-prse">
                        <a class="cross-img-upload"><i class="fa fa-close"></i></a>
                        <img src="<?php echo base_url();?>assets/img/file.png">
                      </li> -->
                    </ul>
                  </div>  
                </div>
              </div>
            </div> 
            <div class="upload-continue">
              <button type="button" id="continue_btn" class="upload-continue-btn">Continue</button>
            </div>
          </div>
          <div class="col-md-7">
            <div class="order-date-detail">
              <h4>Guide for a valid prescription</h4>
              <ul>
                <li>
                  Government regulations require a valid prescription
                </li>
              </ul>
            </div>
            <div class="order-detail">
              <div class="row">
                <div class="col-md-6">
                  <div class="guide-img">
                    <img src="<?php echo base_url('assets/img/validate.svg'); ?>">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="guide-content">
                    <ul class="guide-content-ul">
                      <li>Don’t crop out any part of the image</li>
                      <li>Avoid blurred image</li>
                      <li>Include details of doctor and patient + clinic visit date</li>
                      <li>Medicines will be dispensed as per prescription</li>
                      <li>Supported files type: jpeg , jpg , png , pdf</li>
                      <li>Maximum allowed file size: 5MB</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- <div class="row">
          <div class="col-md-12">
            <div class="order-date-detail">
              <a class="back-btn">← Back to options</a>
              <h4>Saved Prescriptions (3 selected)</h4>
            </div>
            <div class="order-detail">
              <div class="upload-img-sec">
                <ul>
                  <li class="uplod-prec-img">
                    <input type="checkbox" name="select" class="check-presc">
                    <img src="<?php echo base_url();?>assets/img/file.png">
                  </li>
                </ul>
              </div>  
            </div> 
            <div class="upload-continue">
              <button class="upload-continue-btn">Continue</button>
            </div>
          </div>
        </div> -->

        <div class="row" id="step2">
          <div class="col-md-7">  
            <div class="order-date-detail">
              <h4>Medicines</h4>
            </div>
            <div class="order-detail">
              <div> 
                <div class="show-upload-content">
                  <div class="show-upload-name">  
                    <input type="radio" id="Order" class="search-dron" name="drone" value="" checked>
                    <label for="Order">Order everything as per prescription</label>
                  </div>
                </div>
                <div class="show-upload-content">
                  <div class="show-upload-name">
                    <input type="radio" id="Search" class="search-dron" name="drone" >
                    <label for="Search">Search and add medicines to cart</label>
                    <p>There are 2 items added in your cart</p>
                    <button class="add-medicines">Add Medicines</button>
                  </div>
                </div> 
                <div class="show-upload-content">
                  <div class="show-upload-name">
                    <input type="radio" id="Call" class="search-dron" name="drone" value="" >
                    <label for="Call">Call me for details </label>
                  </div>
                </div> 
                <div class="show-upload">
                  <h5>LAB TESTS</h5>
                  <div class="show-upload-content">
                    <div class="show-upload-name">
                      <input type="checkbox" id="lab-tests" name="lab-tests" value="1" >
                      <label for="lab-tests">Also include lab tests</label>               
                    </div>
                  </div>
                </div>
              </div>
              <div class="add-medicines-sec section-block-none" id="search-product-sec">
                <a class="back-btn">← Back to options</a>
                <div class="Search-medicine">
                  <input type="text" id="search_input" name="search_input" onkeyup="getSearchProduct()" placeholder="Enter Medicine Name">
                </div>
                <div class="search-result">
                  <div id="dataList">  
                 </div>              
                </div>
              </div>
            </div> 
            <p class="note-tag"><strong>Note:</strong>We dispense full strips of tablets/capsules</p>
            <div class="upload-continue">
              <button class="upload-continue-btn">Continue</button>
            </div>
          </div>
          <div class="col-md-5">
            <div class="order-date-detail">
              <h4>Attached Prescriptions</h4>
            </div>
            <div class="order-detail">
              <div class="row">
                <div class="col-md-12">
                  <div class="slider-img">
                    <div class="slider">
                      <?php 
                      if (!empty($prescription)) {
                           foreach ($prescription as $key => $value) { ?>
                        <div class="slick-slideshow__slide <?php echo ($key=='0')?'slick-active':''?>">
                          <!-- <h3>1</h3> -->
                          <img src="<?php echo base_url($value->prescription); ?>">
                        </div>
                      <?php }
                      } ?>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> 
      </form>               
    </div>
  </div> 
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.js"></script>

<script>
$(document).ready(function(){
  $('.search-dron').click(function(){    
    if($(this).attr("id")=='Search'){
        $('#search-product-sec').removeClass("section-block-none");
    }else{
        $('#search-product-sec').addClass("section-block-none");
    }

  })
});

var $carousel = $('.slider');

var settings = {
  dots: true,
  arrows: false,
  slide: '.slick-slideshow__slide',
  slidesToShow: 1,
  centerMode: true,
  centerPadding: '150px',
};

function setSlideVisibility() {
  //Find the visible slides i.e. where aria-hidden="false"
  var visibleSlides = $carousel.find('.slick-slideshow__slide[aria-hidden="false"]');
  //Make sure all of the visible slides have an opacity of 1
  $(visibleSlides).each(function() {
    $(this).css('opacity', 1);
  });

  //Set the opacity of the first and last partial slides.
  $(visibleSlides).first().prev().css('opacity', 0);
}

$carousel.slick(settings);
$carousel.slick('slickGoTo', 1);
setSlideVisibility();

$carousel.on('afterChange', function() {
  setSlideVisibility();
});

function getSearchProduct(){
    if($("#search_input").val()==''){
    }
    
    var keywords = $("#search_input").val()


      var keyword = $("#search_input").val();
        $.ajax({
            type: 'post',
            data:{keyword:keyword},
            url: '<?php echo base_url(); ?>/user/getSearchProduct/',                
            async: false,            
            success: function(response){               
              if(keywords==''){
                $('#dataList').html('');
              }else{
                $('#dataList').html(response);
              }

            },
            error: function(){
                //alert('Could not get Data from Database');
            }
        });
}



function readURL(input) {
    var formData = new FormData($("#form")[0]);
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function(e) {
        $('#attach-preview').append('<li class="uplod-img-prse"><a class="cross-img-upload"><i class="fa fa-close"></i></a> <img src="'+e.target.result+'"></li>');
      }
      reader.readAsDataURL(input.files[0]);
    }

    $.ajax({
      url: '<?php echo base_url('user/AjaxSavePrescription');?>',
      type:'POST',
      data: formData,
      dataType: 'JSON',
      contentType: false,
      cache: false, 
      processData:false,
      success:function(result){
        console.log(result);
      },
      error:function(status){
        // console.log(status.responseText);
      }
    });
  
}

$("#continue_btn").click(function(){
  $('#step1').hide();
  $('#step2').show();
});
$('#step2').hide();

</script>
