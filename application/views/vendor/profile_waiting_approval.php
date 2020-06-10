

<?php 
date_default_timezone_set("Asia/Kolkata");   //India time (GMT+5:30)
$currentDate =  date('Y-m-d h:i:s');
//increment 2 days
$mod_date = strtotime($status->created_at."+ 3 days");
$nexHours =  date("Y-m-d h:i:s",$mod_date);

?>
  <!-- page content -->
  <div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3> Invertory </h3>
        </div>
      </div>

      <div class="col-md-12 col-sm-12 col-xs-12 home-module-pages">
        <div class="x_panel">
          <div class="x_content">
            <div class="col-md-4 col-sm-12 col-xs-12 text-center approval-profile"> 
              <?php if($nexHours > $currentDate){ ?>
              <p>Your profile is under review, Our team will get back to you within 72 hours.</p>
              <?php }else{ ?>
                <p>Your profile is under review, Our team will get back to you within 72 hours. you can send email.</p>
              <?php } ?>
              <div class="email-button-section">                
                <textarea class="form-control faq-textarea send-email" rows="3" placeholder="Type your message here"></textarea>
                <button id="<?php if($nexHours < $currentDate){ echo "show-textarea"; }?>" type="submit" class="btn btn-default submit_button <?php if($nexHours > $currentDate){ echo "disable"; }?>">Send Email</button>
                <button type="submit" class="btn btn-default submit_button send-email float-right">Send </button>
              </div>
            </div>   
            <div class="col-md-8 col-sm-12 col-xs-12 text-center "> 
              <img src="<?php echo base_url(); ?>assets/img/waiting_page.jpg" class="waiting-image">  
            </div>
            <div class="invertory-module excelFormateContent">
              <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">                  
                </div>   
              </div>
            </div>
          </div>
        </div>
      </div> 
    </div>
  </div>
  <!-- /page content -->

<script type="text/javascript">
  
 
  $(document).ready(function(){
    $('.send-email').hide();
    $('#show-textarea').click(function(){
        $('.send-email').show();
        $('#show-textarea').hide();

    });
  });


</script>