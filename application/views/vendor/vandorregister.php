<link href="<?php echo base_url(); ?>vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>build/css/style.css" rel="stylesheet">
<script src="<?php echo base_url(); ?>vendors/jquery/dist/jquery.min.js"></script>    

<section class="container-fluid registration_content">
  <div class="row">
    <div class="col-md-8"> 
      
    </div>
    <div class="col-md-4">
      <div class="custom-error-alert front-end-validation">   
        <a class="remove-red-alert"><span class="glyphicon glyphicon-remove custom-remove"></span></a>
        <span class="glyphicon glyphicon-warning-sign"></span>
        <p id="error-text"></p>
      </div>                  
      <form id="registratio_form" method="post" action="<?php echo base_url(); ?>/vendor/vendorregister">
        <div class="form-content">           
        </div>
        <div class="content-box">
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
          <div class="button-division text-center">          
            <button type="button" onclick="submitFunction()" class="btn btn-primary registration-button">Register</button>
          </div>
          <p>Already have an account <a href="<?php echo base_url();?>/Vendor/vendor_login">Login</a> here</p>        
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
  function submitFunction() {
    var email = $("#email").val();
    var password = $("#txtNewPassword").val();
    var confirmPassword = $("#txtConfirmPassword").val();     
    if(password==confirmPassword && email!='' && password!=''){      
      $('#registratio_form').submit()
    }else{
      $("#error-text").html('Please fill required details');     
        $('.front-end-validation').show();
        window.scrollTo(0, 0);

    }
  }
  $(document).ready(function(){ 
    $('.front-end-validation').hide();
    $('.remove-red-alert').click(function() {
        $('.custom-error-alert').fadeOut("slow")
    })
    setInterval(function () {
        $('.custom-error-alert').fadeOut("slow")
    }, 4000);
});

</script>