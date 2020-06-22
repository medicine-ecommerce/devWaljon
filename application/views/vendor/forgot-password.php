<link href="<?php echo base_url(); ?>vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>build/css/style.css" rel="stylesheet">
<script src="<?php echo base_url(); ?>vendors/jquery/dist/jquery.min.js"></script>    
<link href="<?php echo base_url(); ?>vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<section class="container-fluid login_content">
  <div class="row">
    <div class="col-md-8">       
    </div>
    <div class="col-md-4">
      <div class="form-content">
          <!-- <img src="<?php echo base_url(); ?>assets/img/snake2.png" class="registration-logo" id="preview">       
          <p>Medicin Managment</p> -->
      </div> 
      <!-- <div class="custom-error-alert front-end-validation">   
        <a class="remove-red-alert"><span class="glyphicon glyphicon-remove custom-remove"></span></a>
        <span class="glyphicon glyphicon-warning-sign"></span>
        <p id="error-text"></p>
      </div>             -->
      <!-- <div class="content-box">        
        <h6>Forgot Password</h6>
        <form id="login_form" method="post" action="<?php echo base_url();?>/vendor/vendorLogin">
          <div class="form-group">
            <input type="text" id="email" class="form-control transparent-back" name="email" placeholder="Enter your email" onkeyup="checkExistEmail()">
          </div>                               
          <div class="button-division text-center">          
            <button type="button" onclick="submitFunction()" class="btn btn-primary registration-button">Submit</button>
          </div>
        </form>
        <p>Don't have an account <a href="<?php echo base_url();?>/Vendor/vendorregister">Submit</a> here</p>  
        
      </div>  --> 

      <form id="forgot_form" method="post">
        <div class="form-content">           
        </div>
        <div class="content-box front-end-error">   
          <a class="remove-red-alert"><span class="glyphicon glyphicon-remove custom-remove"></span></a>
          <span class="glyphicon glyphicon-warning-sign"></span>
          <p id="error-text"></p>
        </div>                  
        <div class="content-box front-end-error-otp">   
          <a class="remove-red-alert"><span class="glyphicon glyphicon-remove custom-remove"></span></a>
          <span class="glyphicon glyphicon-warning-sign"></span>
          <p id="error-text-otp"></p>
        </div>      
        <div class="content-box front-end-success">   
          <a class="remove-red-alert"><span class="glyphicon glyphicon-remove custom-remove"></span></a>
          <span class="glyphicon glyphicon-warning-sign"></span>
          <p id="success-text"></p>
        </div>      
        <div class="custom-add login-block">          
          <div class="content-box forgot-password-section">
            <div id="registration-section">            
              <h6>Forgot Password</h6>
              <div class="form-group">
                <input type="email" class="form-control transparent-back" id="email" name="email" placeholder="Enter your registered email" onkeyup="checkExistEmail()" autocomplete="off">
              </div>                           
            </div>
            <div id="verification-section">                                    
              <h6>Verify OTP</h6>
              <div class="form-group">
                <input type="text" minlength="6" maxlength="6" class="form-control transparent-back" id="verification_code" name="verification_code" placeholder="Enter verification code" autocomplete="off">
              </div>        
            </div>
            <div id="new-password-section">                                    
              <h6>Create New Password</h6>
              <div class="form-group">
                <input type="Password" onchange="checkPasswordMatch()" class="form-control transparent-back" id="txtNewPassword" name="password" placeholder="Enter Password" autocomplete="off">
              </div>                  
              <div class="form-group">
                <input type="password" class="form-control transparent-back" id="txtConfirmPassword" onchange="checkPasswordMatch()"  name="re-password" placeholder="Re-enter Password" autocomplete="off">
              </div>        
              <span class="input-error-message"><div class="registrationFormAlert" id="divCheckPasswordMatch"></div></span>
            </div>

            
            <div class="button-division forgot-section text-center">          
              <button type="button" onclick="submitFunction(event)" class="btn btn-primary registration-button" id="send-button"></button>
              <button type="button" onclick="submitPassword(event)" class="btn btn-primary registration-button" id="new-password-button">Submit</button>
            </div>        
          </div>
        </div>
      </form>



    </div>
  </div>
</section>

<script type="text/javascript">
  function checkPasswordMatch() {
        var password = $("#txtNewPassword").val();
        var confirmPassword = $("#txtConfirmPassword").val(); 
        
        if (password == confirmPassword && confirmPassword!=''){      
            $("#divCheckPasswordMatch").html("");
        }
        else if(password != confirmPassword && confirmPassword!='' && password!=''){
            $("#divCheckPasswordMatch").html("Passwords do not match!");
        }else{
            $("#divCheckPasswordMatch").html("");
        }

        $(document).ready(function () {      
           $("#txtNewPassword, #txtConfirmPassword").keyup(checkPasswordMatch);       
        });       
        if(password===confirmPassword && password!='' && confirmPassword!=''){
          $('#new-password-button').removeClass("disable");             
        }else{
          $('#new-password-button').addClass("disable");             
        }
  }
  
  function submitFunction() {

    $.ajax({
          url:"<?php echo base_url(); ?>/vendor/forgotPassword",
          method:"POST",
          dataType: 'JSON',
          data: $("#forgot_form").serialize(),        
          success:function(data){ 
          if(data.stage==1){            
            $('#verification-section').show("slow");                   
            $('#registration-section').hide();       
            $('.custom-add').addClass("login-block");            
            $('#send-button').html('Verify');                   
            $('#success-text').html(data.message);       
            $('.front-end-success').slideDown("slow");       
            // setInterval(function () {
            //     $('#success-text').fadeOut("slow");
            // }, 5000);

          }
          else if(data.stage==2){
            $('#verification-section').hide();                   
            $('#new-password-section').show("slow");                   
            $('#new-password-button').show("slow");                               
            $('#new-password-button').addClass("disable");  
            $('#send-button').hide();                        
            $('.front-end-success').hide();                   
            $('#error-text-otp').hide();
            $('.front-end-error-otp').hide();
          }
          else if(data.stage==3){            
            $('.front-end-success').hide(); 
            $('#error-text-otp').html(data.message);       
            $('.front-end-error-otp').show();
            setInterval(function () {
                $('#error-text-otp').fadeOut("slow");
                $('.front-end-error-otp').fadeOut("slow");
            }, 7000);
            
          }
          //else if(data.stage==4){
          //     window.location.href = "<?php echo base_url() ?>vendor/personalDetails";                     
          // }else if(data.status==0){
          //     $("#error-text").html(data.message);                 
          //     $('.front-end-error').show();
          //     setInterval(function () {
          //       $('.front-end-error').fadeOut("slow");
          //     }, 7000);
          // }

            
            // window.location.href = "<?php echo base_url() ?>vendor/bulk_upload";        
          }
        })
    
  }
  function submitPassword() {

    $.ajax({
          url:"<?php echo base_url(); ?>/vendor/createNewPassword",
          method:"POST",
          dataType: 'JSON',
          data: $("#forgot_form").serialize(),        
          success:function(data){                        
            if(data.status==1 && data.stage==1){
                window.location.href = "<?php echo base_url() ?>vendor/vendor_dashboard";        
            }else if(data.status==1 && data.stage==2){
                window.location.href = "<?php echo base_url() ?>vendor/profile_waiting_approval";        
            }
            else if(data.status==1 && data.stage==3){
                window.location.href = "<?php echo base_url() ?>vendor/personalDetails";        
            }
          // if(data.status==1){            
          //     window.location.href = "<?php echo base_url() ?>vendor/vendor_dashboard";        
          // }       
          
          }
        })
    
  }

$(document).ready(function(){ 
    $('.front-end-error').hide();
    $('.front-end-success').hide();
    $('.front-end-error-otp').hide();
    $('#verification-section').hide();
    $('#new-password-section').hide();                   
    $('#new-password-button').hide();                   

    $('#send-button').html('Send Code');       
    $('#send-button').addClass("disable");            

    $('#send-button').html('Send Code');       

    $('.front-end-validation').hide();
    $('.remove-red-alert').click(function() {
        $('.custom-error-alert').fadeOut("slow")
    })
    setInterval(function () {
        $('.custom-error-alert').fadeOut("slow")
    }, 4000);
});

  function checkExistEmail(argument) {
    var email =  $("#email").val(); 

    event.preventDefault();
        $.ajax({
          url:"<?php echo base_url(); ?>/vendor/forgotPasswordCheckEmail",
          method:"POST",
          dataType: 'JSON',
          data: {email: email},          
          success:function(data){  
            if(data.status==1){
              $('#send-button').removeClass("disable");             
            }else{
              $('#send-button').addClass("disable");             
            }

          
          // if(data.stage==1 || data.stage==2){            
          //   $('#verification-section').show("slow");                   
          //   $('#registration-section').hide();       
          //   $('.custom-add').addClass("login-block");            
          //   $('#send-button').html('Verify');                   
          //   $('#success-text').html(data.message);       
          //   $('.front-end-success').slideDown("slow");       
          //   // setInterval(function () {
          //   //     $('#success-text').fadeOut("slow");
          //   // }, 5000);

          // }else if(data.stage==3){            
          //   $('.front-end-success').hide();       

          //   $('#error-text-otp').html(data.message);       
          //   $('.front-end-error-otp').show();
          //   setInterval(function () {
          //       $('#error-text-otp').fadeOut("slow");
          //       $('.front-end-error-otp').fadeOut("slow");
          //   }, 7000);
            
          // }else if(data.stage==4){
          //     window.location.href = "<?php echo base_url() ?>vendor/personalDetails";                     
          // }else if(data.status==0){
          //     $("#error-text").html(data.message);                 
          //     $('.front-end-error').show();
          //     setInterval(function () {
          //       $('.front-end-error').fadeOut("slow");
          //     }, 7000);
          // }

            
            // window.location.href = "<?php echo base_url() ?>vendor/bulk_upload";        
          }
        })
      
  }

</script>