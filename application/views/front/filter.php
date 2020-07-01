
<section class="main-page">
  <div class="container">
    <div class="row">
      <div class="col-md-3">      
       <?php require_once(APPPATH."views/front/sidebar_filter.php"); ?>
      </div>
      <div class="col-md-9" id="dataList">
        
      </div>
    </div>
  </div> 
</section>

<script>
  function searchFilter(page_num){
      page_num = page_num?page_num:0;
      var keywords = $('#keywords').val();
      var sortBy = $('#sortBy').val();
      $.ajax({
          type: 'POST',
          url: '<?php echo base_url('user/ajaxFilterData/'); ?>'+page_num,
          data: $("#filter").serialize(),
          beforeSend: function(){
              $('.loading').show();
          },
          success: function(html){
              $('#dataList').html(html);
              $('.loading').fadeOut("slow");
          }
      });
  }
 searchFilter(0);
 $('input[type=checkbox]').change(function () {
    searchFilter(0);
 });

 function sortBy(val) {
   $('input[name=sortby]').val(val);
   searchFilter(0);
 }

  var acc = document.getElementsByClassName("accordion");
  var i;

  for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
      this.classList.toggle("active");
      var panel = this.nextElementSibling;
      if (panel.style.display === "block") {
        panel.style.display = "none";
      } else {
        panel.style.display = "block";
      }
    });
  }

  $(document).ready(function(){      
      $('.add-cart-button-category').click(function(){
        $(this).addClass("hide-button");
        $(this).siblings("div").removeClass("hide-button");
        // $(this).siblings("div").addClass("show-button");

      });
      $('.minus').click(function(){        
        if($(this).siblings("input").val()==0){          
          $(this).parent().addClass("hide-button");
          $(this).parents('.product-price-category').find(".add-cart-button-category").addClass("show-button");
          $(this).parents('.product-price-category').find(".add-cart-button-category").removeClass("hide-button");
          $(this).siblings("input").val("1");
        }
      })
      $('.left-active a').click(function(){                  
            $('.left-active a').removeClass("active");
           $(this).addClass("active");
      });
      $('.right-active a').click(function(){                  
            $('.right-active a').removeClass("active");
           $(this).addClass("active");
      });
      
    });
</script>