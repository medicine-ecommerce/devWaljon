<link href="<?php echo base_url(); ?>vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>build/css/style.css" rel="stylesheet">
<section class="container-fluid login_content">
  <div class="row">
    <div class="col-md-8">       
    </div>
    <div class="col-md-4">
      <div class="form-content">
          <img src="<?php echo base_url(); ?>assets/img/snake2.png" class="registration-logo" id="preview">       
          <p>Medicin Managment</p>
      </div>             
      <div class="content-box">        
        <h6>Login</h6>
        <form method="post" action="<?php echo base_url();?>/vendor/vendorLogin">
          <div class="form-group">
            <input type="text" class="form-control transparent-back <?php if ($this->session->flashdata('error')) { echo "input-red-border" ?>  <?php } ?> " name="email" placeholder="Email or Phone" value="<?php if (get_cookie('email')) { echo base64_decode(get_cookie('email')); } ?>">
          </div>        
          <div class="form-group">
            <input type="password" class="form-control transparent-back <?php if ($this->session->flashdata('error')) { echo "input-red-border" ?>  <?php } ?> " name="password" placeholder="Enter Password" value="<?php if (get_cookie('password')) { echo base64_decode(get_cookie('password')); } ?>">
          </div>        
          <span class="input-error-message"><?= $this->session->flashdata('error') ?></span>
          <div>            
            <input type="checkbox" id="vehicle1" name="remember_password" value="Bike" <?php if(get_cookie('email')) { echo "checked"; } ?> >
            <label for="vehicle1"> Remember Password</label>
          </div>
          <br>
          <div class="button-division text-center">          
            <button type="submit" class="btn btn-primary registration-button">Login</button>
          </div>
        </form>
        <p>Don't have an account <a href="<?php echo base_url();?>/Vendor/vendorregister">Register</a> here</p>        
      </div>      
    </div>
  </div>
</section>