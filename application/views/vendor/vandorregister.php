<link href="<?php echo base_url(); ?>vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>build/css/style.css" rel="stylesheet">
<script src="<?php echo base_url(); ?>vendors/jquery/dist/jquery.min.js"></script>    

<section class="container-fluid registration_content">
  <div class="row">
    <div class="col-md-8"> 
      
    </div>
    <div class="col-md-4">      
      <form method="post" action="<?php echo base_url(); ?>/vendor/vendorregister">
        <div class="form-content">
            <img src="<?php echo base_url(); ?>assets/img/snake2.png" class="registration-logo" id="preview">       
            <p>Medicin Managment</p>
        </div>
        <div class="content-box">
          <h6>Register</h6>
          <div class="form-group">
            <input type="email" class="form-control transparent-back" name="email" placeholder="Email or Phone" value="<?php echo set_value('email')?>" autocomplete="off">
          </div>        
          <?php echo form_error('email', '<div class="error">', '</div>'); ?>

          <div class="form-group">
            <input type="Password" class="form-control transparent-back" id="txtNewPassword" name="password" placeholder="Enter Password" autocomplete="off">
          </div>                  
          <div class="form-group">
            <input type="password" class="form-control transparent-back" id="txtConfirmPassword" onChange="checkPasswordMatch();"  name="re-password" placeholder="Re-enter Password" autocomplete="off">
          </div>        
          <div class="registrationFormAlert" id="divCheckPasswordMatch"></div>
          <input type="checkbox" id="remember_password" name="remember_password" value="remember_password" >
          <label for="vehicle1"> Remember Password</label><br>
          <div class="button-division text-center">          
            <button type="submit" class="btn btn-primary registration-button">Register</button>
          </div>
          <p>Already have an account <a href="<?php echo base_url();?>/Vendor/vendorLogin">Login</a> here</p>        
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
        $("#divCheckPasswordMatch").html("Passwords match.");
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

</script>