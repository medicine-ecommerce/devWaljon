
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
                    <input type="radio" id="Order" name="drone" value="" checked>
                    <label for="Order">Order everything as per prescription</label>
                  </div>
                </div>
                <div class="show-upload-content">
                  <div class="show-upload-name">
                    <input type="radio" id="Search" name="drone" value="" >
                    <label for="Search">Search and add medicines to cart</label>
                    <p>There are 2 items added in your cart</p>
                    <button class="add-medicines">Add Medicines</button>
                  </div>
                </div> 
                <div class="show-upload-content">
                  <div class="show-upload-name">
                    <input type="radio" id="Call" name="drone" value="" >
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
              <!-- <div class="add-medicines-sec">
                <a class="back-btn">← Back to options</a>
                <div class="Search-medicine">
                  <input type="text" name="" placeholder="Enter Medicine Name">
                </div>
                <div class="search-result">
                  <div class="search-result-data">
                    <div class="row">
                      <div class="col-md-8">
                        <h5>Medicine Name</h5>
                        <p></p>
                        <p class="tablet-count">strip of 10 capsules</p>
                      </div>
                      <div class="col-md-4">
                        <p class="medicine-price">MRP <strong><i class="fa fa-rupee"></i> 26</strong></p>
                        <p class="medicine-price"><span class="offer-tag">12% off</span> <span>MRP <s><i class="fa fa-rupee"></i>29.73</s></span></p>
                        <button class="btn-default add-cart-button float-left" onclick="addToCart()">ADD</button>
                        <div class="def-number-input number-input safari_only add-quantity hide-button">
                          <button onclick="this.parentNode.querySelector('input[type=number]').stepDown(); updateCart()" class="minus"></button>
                          <input class="quantity" min="0" value="1" name="quantity" type="number">
                          <button onclick="this.parentNode.querySelector('input[type=number]').stepUp(); updateCart()" class="plus"></button>
                        </div>
                      </div>
                    </div>
                    <hr>
                  </div>
                  <div class="search-result-data">
                    <div class="row">
                      <div class="col-md-8">
                        <h5>Medicine Name</h5>
                        <p></p>
                        <p class="tablet-count">strip of 10 capsules</p>
                      </div>
                      <div class="col-md-4">
                        <p class="medicine-price">MRP <strong><i class="fa fa-rupee"></i> 26</strong></p>
                        <p class="medicine-price"><span class="offer-tag">12% off</span> <span>MRP <s><i class="fa fa-rupee"></i>29.73</s></span></p>
                        <button class="btn-default add-cart-button float-left" onclick="addToCart()">ADD</button>
                        <div class="def-number-input number-input safari_only add-quantity hide-button">
                          <button onclick="this.parentNode.querySelector('input[type=number]').stepDown(); updateCart()" class="minus"></button>
                          <input class="quantity" min="0" value="1" name="quantity" type="number">
                          <button onclick="this.parentNode.querySelector('input[type=number]').stepUp(); updateCart()" class="plus"></button>
                        </div>
                      </div>
                    </div>
                    <hr>
                  </div>
                </div>
              </div> -->
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
  $('.add-cart-button').click(function(){
    $(this).addClass("hide-button");
    $(this).siblings("div").removeClass("hide-button");
    // $(this).siblings("div").addClass("show-button");
  });

  $('.minus').click(function(){        
    if($(this).siblings("input").val()==0){          
      $(this).parent().addClass("hide-button");
      $(this).parents('.product-price-block').find(".add-cart-button").addClass("show-button");
      $(this).parents('.product-price-block').find(".add-cart-button").removeClass("hide-button");
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