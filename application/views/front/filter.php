
<section class="main-page">
  <div class="container">
    <div class="row">
      <div class="col-md-3">      
       <?php require_once(APPPATH."views/front/sidebar_filter.php"); ?>
      </div>
      <div class="col-md-9" >
        <div class="row">
          <div class="col-md-3">            
            <h3><a>Home</a> <i class="fa fa-angle-right fa-custom"></i> <a href="">bac</a></h3>           
          </div>
          <div class="col-md-9">  
            <div class="left-pagination-section">              
              <div class="category-pagination left-active">
                <a class="firt_short active" href="javascript:voide(0)" data-srt="newest">Newest</a>
                <a href="javascript:voide(0)" data-srt="newest">Popular</a>
                <a href="javascript:voide(0)" data-srt="lowest">Low Price</a>
                <a class="last_short " id="st4" data-srt="highest">High Price</a>
              </div>
              <!-- <div class="category-pagination right-pagination-section right-active">
                <a  href="#"><i class="fa fa-chevron-left"></i></a>
                <a class="active" href="#">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
                <a href="#">...</a>
                <a href="#">6</a>
                <a href="#"><i class="fa fa-chevron-right"></i></a>
              </div> -->
            </div>
          </div>          
        </div>
        <div class="toolbox">                    
        </div>
        <div class="row product-section" id="dataList">  
        </div>
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

$('.left-active a').click(function(){                  
            $('.left-active a').removeClass("active");
           $(this).addClass("active");
           $('input[name="sortby"]').val($(this).data('srt'));
           searchFilter(0);
      });
      $('.right-active a').click(function(){                  
            $('.right-active a').removeClass("active");
           $(this).addClass("active");
      });
  function addToCart(id){    
    // var quantity = $('#quantity').val();   
    alert(id);
    var quantity = 1 ;    
    
     $.ajax({
          url:"<?php echo base_url(); ?>/user/add_to_cart",
          method:"POST",
          dataType: 'JSON',
          data: {id:id,quantity:quantity},        
          success:function(data){                                         
            console.log(data);
            $(".cart-quantity").text(data.quantity);
            $(".cart-quantity").addClass("show-cart");
          }
    })

  }
  function updateCart(id,type){   
    
    $.ajax({
          url:"<?php echo base_url(); ?>/user/add_to_cart",
          method:"POST",
          dataType: 'JSON',
          data: {id:id,quantity:type.value},        
          success:function(data){                                        
            console.log(data);
            $(".cart-quantity").text(data.quantity);
            $(".cart-quantity").addClass("show-cart");
          }
    })

  }
</script>