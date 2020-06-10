
  <!-- page content -->
  <div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>Invertory > Home Modules</h3>
        </div>
      </div>

      <div class="col-md-12 col-sm-12 col-xs-12 home-module-pages">
        <div class="x_panel">
          <div class="x_content">
            <div class="img-upload-page"> 
              <div class="home-page-head">
                <h4>Upload Advertisement Banners</h4>
              </div> 
                <form action="<?php echo base_url('admin/home_banners'); ?>" enctype="multipart/form-data" class="dropzone"></form>
              <!-- <div class="img-upload-div">
              	<img src="" alt="Upload Image">
              </div> 
               --><p>Banner Size 1920X600</p> 
              <div class="img-upload-btn">
              	<!-- <button type="button" class="btn active-btn btn-round">Upload</button> -->
              	<!-- <span class="transh-btn"><i class="fa fa-trash"></i></span> -->	
              </div>
            </div>
            <div class="previous-upload-img">
            	<div class="home-page-head">
                <h4>Previous Advertisement Banners </h4>
              </div>
              <ul class="previous-img-gallery">
                <?php if (!empty($banners)) {
                  foreach ($banners as $key => $value) { ?>
                    <li class="previous-img">
                      <span class="remove-img"><i class="fa fa-close"></i></span>
                      <span class="gallery-img">
                        <img src="<?php echo base_url('assets/banner-images/'.$value->image); ?>">
                      </span>
                      <div class="home-page-btn">
                        <div class="switch-btn banner-img">
                          <label class="switch">
                            <input type="checkbox" class="switch-input" name="trending" >
                            <span class="slider round"></span>
                          </label>
                        </div>
                      </div>
                    </li>
                 <?php }
                } ?>
              </ul> 
            	<!-- <div class="pull-right">
                <div class="submit-btn">
                  <button type="button" class="btn previous-btn">Cancle</button>
                  <button type="button" class="btn active-btn">Save</button>
                </div> 
              </div> -->	
            </div>
          </div>
        </div>
      </div> 
    </div>
  </div>
  <!-- /page content -->

      


