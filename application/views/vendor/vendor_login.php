<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url();?>vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url();?>vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url();?>vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?php echo base_url();?>vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url();?>build/css/custom.min.css" rel="stylesheet">
    <style type="text/css">
      .venderform{
        background-color: #808080;
            width: 350px;
          }
          .venderinput{
                  padding-left: 20px;
                  padding-right: 20px;

            }

 
           
    </style>
  </head>

  <body class="login" style="background-color: #c8c8c8;">
    <div>
     

      <div class="login_wrapper" >
        <div class="animate form login_form" style="    width: 100%;
    left: 300px;">
          <section class="login_content">
            <?php if (!empty($this->session->flashdata('error'))) {
              echo '<div class="alert alert-danger">
                    '.$this->session->flashdata('error').'
                  </div>';
            } ?>
            <form action="<?php echo base_url('admin/vandorLogin')?>" method="post" class="venderform">
              <h1 style="color: white;">Login </h1>
              <div class="venderinput">
                <input type="text" class="form-control" style="background-color: #a0a0a0;" placeholder="Username/Email" required="" name="username" />
              </div>
              <div class="venderinput">
                <input type="password" class="form-control" style="background-color: #a0a0a0; color: white;"  placeholder="Password" required="" name="password" />
              </div>
              <div>
                <button type="button" class="btn btn-round btn-primary" style="color: #fff;background-color: #808080; border-color: #fff; width: 50%;">Login</button>
               
              </div>

              <div class="clearfix"></div>

              <div class="separator" style="color: white;">
                <p class="change_link">you don't have an account?
                  <a href="<?php echo base_url('admin/vandorregister')?>" class="to_register" style="color: white;"> Create Account </a>
                </p>

                <div class="clearfix"></div>
                <br />

                
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form>
              <h1>Create Account</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" required="" />
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Email" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <a class="btn btn-default submit" href="index.html">Submit</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                  <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
