<link href="<?php echo base_url(); ?>vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>build/css/style.css" rel="stylesheet">
<script src="<?php echo base_url(); ?>vendors/jquery/dist/jquery.min.js"></script>    
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<section class="container-fluid registration_content">
  <div class="row">
    <div class="col-md-8"> 
      
    </div>
    <div class="col-md-4">      
      <form id="registratio_form" method="post">
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
        <div class="custom-add">          
          <div class="content-box">
            <div id="registration-section">            
              <h6>Register</h6>
              <div class="form-group">
                <input type="email" class="form-control transparent-back" id="email" name="email" placeholder="Email or Phone" value="<?php echo set_value('email')?>" autocomplete="off">
              </div>   
              <span class="input-error-message"><?php echo form_error('email', '<div class="error">', '</div>'); ?></span>     
              <div class="form-group">
                <input type="Password" class="form-control transparent-back" id="txtNewPassword" name="password" placeholder="Enter Password" autocomplete="off">
              </div>                  
              <div class="form-group">
                <input type="password" class="form-control transparent-back" id="txtConfirmPassword" onChange="checkPasswordMatch();"  name="re-password" placeholder="Re-enter Password" autocomplete="off">
              </div>        
              <span class="input-error-message"><div class="registrationFormAlert" id="divCheckPasswordMatch"></div></span>
              <input type="checkbox" id="remember_password" name="remember_password" value="remember_password" >
              <label for="vehicle1"> Remember Password</label><br>
            </div>
            <div id="verification-section">                                    
              <h6>Verify OTP</h6>
              <div class="form-group">
                <input type="text" minlength="6" maxlength="6" class="form-control transparent-back" id="verification_code" onChange="checkPasswordMatch();"  name="verification_code" placeholder="Enter verification code" autocomplete="off">
              </div>        
            </div>

            <input type="hidden" name="type" id="user_type" value="user">
            <div class="button-division text-center">          
              <button type="button" onclick="submitFunction(event)" class="btn btn-primary registration-button" id="send-button"></button>
            </div>
            <p>Already have an account <a href="<?php echo base_url();?>/user/login">Login</a> here</p>        
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
  }
  $(document).ready(function () {
      $('.custom-add').removeClass("login-block");
      $('#verification-section').hide();       
      $('#send-button').html('Register');       
      $('.front-end-success').hide();

      
    });
  
  
  $(document).ready(function(){ 
    $('.front-end-error').hide();
    $('.front-end-error-otp').hide();
    $('.remove-red-alert').click(function() {
        $('.front-end-error').fadeOut("slow")
    })
    setInterval(function () {
        $('.front-end-error').fadeOut("slow")
    }, 7000);

});

</script>

<script type="text/javascript">
  $('#import_form').on('submit', function(event){

    
  });

  function isNumber(n) { return /^-?[\d.]+(?:e-?\d+)?$/.test(n); } 


  function submitFunction(event) {
    var email = $("#email").val();
    var password = $("#txtNewPassword").val();
    console.log(isNumber(email));
    if(isNumber(email) && (email).length !=10 ){
        $('#error-text-otp').html("Please enter 10 digit mobile number");       
        $('.front-end-error-otp').show();
        setInterval(function () {
                $('.front-end-error-otp').hide();
        }, 5000);
        return false;
    }

    var confirmPassword = $("#txtConfirmPassword").val();     
    if(password==confirmPassword && email!='' && password!=''){      
       event.preventDefault();
      $.ajax({
        url:"<?php echo base_url(); ?>/vendor/vendorregister",
        method:"POST",
        dataType: 'JSON',
        data: $("#registratio_form").serialize(),        
        success:function(data){  
        console.log(data)                  
          if(data.stage==1 || data.stage==2){            
            $('#verification-section').show("slow");                   
            $('#registration-section').hide();       
            $('.custom-add').addClass("login-block");            
            $('#send-button').html('Verify');                   
            $('#success-text').html(data.message);       
            $('.front-end-success').slideDown("slow");       
            // setInterval(function () {
            //     $('#success-text').fadeOut("slow");
            // }, 5000);

          }else if(data.stage==3){            
            $('.front-end-success').hide();       

            $('#error-text-otp').html(data.message);       
            $('.front-end-error-otp').show();
            setInterval(function () {
                $('#error-text-otp').fadeOut("slow");
                $('.front-end-error-otp').fadeOut("slow");
            }, 7000);
            
          }else if(data.stage==4){
              window.location.href = "<?php echo base_url() ?>user/index";                     
          }else if(data.status==0){
              $("#error-text").html(data.message);                 
              $('.front-end-error').show();
              setInterval(function () {
                $('.front-end-error').fadeOut("slow");
              }, 7000);
          }
          // window.location.href = "<?php echo base_url() ?>vendor/bulk_upload";        
        }
      })
    }else{

      $("#error-text").html('Please fill required details');     
        $('.front-end-validation').show();
        window.scrollTo(0, 0);

    }

      // $('#registratio_form').submit()
  
  }

</script>