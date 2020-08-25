<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?php echo base_url(); ?>assets/img/fevicon.png" type="image/ico" />
    <title>Rxkin </title>
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
          <div class="col-md-6 col-sm-6 col-xs-6 admin-side-6" onclick='location.href = "<?=base_url('admin');?>"'>
            <div class="banner-half-sec dev-half-sec">
              <div class="banner-vector-bg dev-vector-bg">
                <img src="<?= base_url('assets/img/a1.jpg')?>">
              </div>
              <div class="banner-sec-btn">
                <a href="<?=base_url('admin');?>" class="btn btn-banner-action btn-work">Go to Admin Dashboard</a>
              </div>
            </div>
          </div>
          <div class="dev-page-half"></div>
          <div class="col-md-6 col-sm-6 col-xs-6 vendor-side-6" onclick='location.href = "<?=base_url('vendor');?>"'>
            <div class="banner-half-sec client-half-sec">
              <div class="banner-vector-bg client-vector-bg">
                <img src="<?= base_url('assets/img/v2.jpg')?>">
              </div>
              <div class="banner-sec-btn">
                <a href="<?=base_url('vendor');?>" class="btn btn-banner-action btn-hire">Go to Vendor Dashboard</a>
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

      


