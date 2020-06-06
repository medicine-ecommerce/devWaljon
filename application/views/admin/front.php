<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="<?php echo base_url(); ?>build/css/style.css" rel="stylesheet"> 

  </head>  
  <body>
    <!-- page content -->
    <div class="">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6 col-sm-6 col-xs-6 admin-side-6" onclick='location.href = "<?=base_url('admin/login');?>"'>
            <div class="banner-half-sec dev-half-sec">
              <div class="banner-vector-bg dev-vector-bg">
                <img src="<?= base_url('assets/img/sp1.png')?>">
              </div>
              <div class="banner-sec-btn">
                <a href="<?=base_url('admin/login');?>" class="btn btn-banner-action btn-work">Work as a Admin</a>
              </div>
            </div>
          </div>
          <div class="dev-page-half"></div>
          <div class="col-md-6 col-sm-6 col-xs-6 vendor-side-6" onclick='location.href = "<?=base_url('vendors');?>"'>
            <div class="banner-half-sec client-half-sec">
              <div class="banner-vector-bg client-vector-bg">
                <img src="<?= base_url('assets/img/v1.png')?>">
              </div>
              <div class="banner-sec-btn">
                <a href="<?=base_url('vendors');?>" class="btn btn-banner-action btn-hire">Work as a Vendor</a>
              </div>
            </div>
          </div>
          <div class="client-page-half"></div>
        </div>      
      </div>
    </div>
    <!-- /page content -->
  </body>
</html>    

      


