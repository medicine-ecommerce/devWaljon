<link href="<?php echo base_url(); ?>vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>build/css/style.css" rel="stylesheet">
<script src="<?php echo base_url(); ?>vendors/jquery/dist/jquery.min.js"></script>    
<link href="<?php echo base_url(); ?>vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<section class="container-fluid user-login-content">
  <div class="row">
    <div class="col-md-8">       
    </div>
    <div class="col-md-4">
      <div class="form-content">
          <!-- <img src="<?php echo base_url(); ?>assets/img/snake2.png" class="registration-logo" id="preview">       
          <p>Medicin Managment</p> -->
      </div> 
      <div class="custom-error-alert front-end-validation">   
        <a class="remove-red-alert"><span class="glyphicon glyphicon-remove custom-remove"></span></a>
        <span class="glyphicon glyphicon-warning-sign"></span>
        <p id="error-text"></p>
      </div>            
      <div class="content-box">        
        <h6>Login</h6>
        <form id="login_form" method="post" action="<?php echo base_url();?>/user/login_code">
          <div class="form-group">
            <input type="text" id="email" class="form-control transparent-back <?php if ($this->session->flashdata('error')) { echo "input-red-border" ?>  <?php } ?> " name="email" placeholder="Email or Phone" value="<?php if (get_cookie('email')) { echo base64_decode(get_cookie('email')); } ?>">
          </div>        
          <div class="form-group">
            <input type="password" id="password" class="form-control transparent-back <?php if ($this->session->flashdata('error')) { echo "input-red-border" ?>  <?php } ?> " name="password" placeholder="Enter Password" value="<?php if (get_cookie('password')) { echo base64_decode(get_cookie('password')); } ?>">
          </div>        
          <span class="input-error-message"><?= $this->session->flashdata('error') ?></span>
          <div>            
            <input type="checkbox" id="remember_password" name="remember_password" value="remember_password" <?php if(get_cookie('email')) { echo "checked"; } ?> >
            <label for="vehicle1"> Remember Password</label>
          </div>
          <br>
          <input type="hidden" name="type" id="user_type" value="user">
          <div class="button-division text-center">          
            <button type="button" onclick="submitFunction()" class="btn btn-primary registration-button">Login</button>
          </div>
        </form>
        <p>Don't have an account <a href="<?php echo base_url();?>/user/signup">Register</a> here</p>        
        <p><a href="<?php echo base_url();?>/user/forgot_password">Forgot Password </a></p>        
      </div>      
    </div>
  </div>
</section>

<script type="text/javascript">
  
  function submitFunction() {
    var email = $("#email").val();
    var password = $("#password").val();    
    if(email!='' && password!=''){      
      $('#login_form').submit()
    }else{
      $("#error-text").html('Please enter valid credential');     
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