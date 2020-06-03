<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="<?php echo base_url(); ?>vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>build/css/style.css" rel="stylesheet">
	<script src="<?php echo base_url(); ?>vendors/jquery/dist/jquery.min.js"></script>  
</head>
<body>

	<section class="container-fluid registration_content">
	  <div class="row">
	    <div class="col-md-8"> 
	      
	    </div>
	    <div class="col-md-4">      
	      <form id="registratio_form" method="post" action="<?php echo base_url('doctor/doctorregistration'); ?>">
	        <div class="form-content">
	            <img src="<?php echo base_url(); ?>assets/img/snake2.png" class="registration-logo" id="preview">       
	            <p>Medicin Managment</p>
	        </div>
	        <div class="content-box">
	          <h6>Register</h6>
	          <div class="form-group">
	            <input type="email" class="form-control transparent-back" name="email" placeholder="Email or Phone" value="<?php echo set_value('email')?>" autocomplete="off">
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
	          <p>Already have an account <a href="<?php echo base_url('doctor/login');?>">Login</a> here</p>        
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
    var password = $("#txtNewPassword").val();
    var confirmPassword = $("#txtConfirmPassword").val();     
    if(password==confirmPassword){      
      $('#registratio_form').submit()
    }
  }

</script>
</body>
</html>