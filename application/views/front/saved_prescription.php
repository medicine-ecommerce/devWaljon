
<section class="main-page">
  <div class="container">
    <div class="order-view">  
      

      <div class="row">
        <div class="col-md-12">
          <div class="order-date-detail">
            <a href="<?php echo base_url('user/order_with_prescription'); ?>" class="back-btn">← Back to options</a>
            <h4>Saved Prescriptions (<?php echo count($prescription); ?> selected)</h4>
          </div>
          <div class="order-detail">
            <div class="upload-img-sec">
              <ul>
                <?php 
                  if (!empty($prescription)) {
                     foreach ($prescription as $key => $value) { ?>
                    <li class="uplod-prec-img">
                      <a href="javascript:void(0)"  onclick="return confirm('Are you sure？')" onclick="update('<?php echo $value->id; ?>',$(this))"><i class="fa fa-close close-prescription"></i></a>

                      <!-- <input type="checkbox" name="select" onchange="update('<?php echo $value->id; ?>',$(this))" class="check-presc" <?php echo ($value->is_active) ?'checked':'' ?>> -->
                      <img src="<?php echo base_url($value->prescription); ?>">
                    </li>
                  <?php   }
                   } ?>
              </ul>
            </div>  
          </div> 
          <div class="upload-continue">
            <a href="<?php echo base_url('user/order_with_prescription'); ?>" class="upload-continue-btn">Continue</a>
          </div>
        </div>
      </div>
                
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

function update(id,val) {
  
  if(val.is(':checked')) {
    var status = 1;
  }
  else{
    var status = 0;
  }
  $.get("<?php echo base_url('user/UpdatePrescription/');?>"+id+"/"+status, function(data, status){
    val.parents('li').remove();
  });
}
</script>