<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Medicine   | </title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url(); ?>vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- NProgress -->
    <link href="<?php echo base_url(); ?>vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo base_url(); ?>vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	 <link href="<?php echo base_url(); ?>/vendors/dropzone/dist/min/dropzone.min.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="<?php echo base_url(); ?>vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="<?php echo base_url(); ?>vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="<?php echo base_url(); ?>vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
     <!-- <link href="<?php echo base_url(); ?>vendors/select2/dist/css/select2.min.css" rel="stylesheet"> -->

    <!-- Datatables -->
    <link href="<?php echo base_url(); ?>vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url(); ?>build/css/custom.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>build/css/style.css" rel="stylesheet">
    <script src="<?php echo base_url(); ?>vendors/jquery/dist/jquery.min.js"></script>    
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBQ9GyWMzIoUSeTvXLg8YatVBOt9UCwkB8&libraries=places"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" integrity="sha256-uXf0U0UCIqBp2J3S53b28h+fpC9uFcA8f+b/NNmiwVk=" crossorigin="anonymous" />

    <link href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/css/intlTelInput.css" rel="stylesheet">
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/intlTelInput-jquery.js"></script>    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/intlTelInput.js"></script>   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/utils.js"></script>     -->

    <script src="<?php echo base_url(); ?>assets/js/intlTelInput.js"></script>

  </head>  
  <body class="nav-md">
    <script type="text/javascript">       
       var BaseUrl = "<?=base_url()?>";
    </script>
    <div class="container body">
      <div class="main_container">
        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <nav class="nav navbar-nav">
              <ul class=" navbar-right">
                <li class="nav-item dropdown open">
                  <a href="javascript:;" class="user-profile" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-user"></i>
                    <span class="head-title">Account</span>
                  </a>
                  <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                  <?php
                    if($_SESSION["user_type"]=='vendor' && $status->full_name!=''){ ?>
                    <a class="dropdown-item"  href="<?php echo base_url() ?>/vendor/editPersonalDetails/<?= base64_encode($this->session->userdata('user_id')); ?>"> Profile</a>
                  <?php } ?>
                      <!-- <a class="dropdown-item"  href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a> -->
                    <a class="dropdown-item"  href="javascript:;">Help</a>
                    <?php if($_SESSION["user_type"]=='admin'){ ?>
                      <a class="dropdown-item"  href="<?php echo base_url('admin/logout'); ?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                     <?php }
                    elseif($_SESSION["user_type"]=='vendor'){ ?>
                      <a class="dropdown-item"  href="<?php echo base_url('vendor/logout'); ?>"><i class="fa fa-sign-out pull-right"></i>Log Out</a>
                    <?php } ?>
                  </div>
                </li>

                <li role="presentation" class="nav-item">
                  <a href="javascript:;" class="info-number" aria-expanded="false">
                    <i class="fa fa-commenting"></i>
                    <span class="head-title">Support</span>
                  </a>
                </li>

                <li role="presentation" class="nav-item">
                  <a href="javascript:;" class="info-number" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="head-title">Contact</span>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->