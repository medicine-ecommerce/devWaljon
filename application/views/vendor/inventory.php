
  <!-- page content -->
  <div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3> Invertory </h3>
        </div>
      </div>

      <div class="col-md-12 col-sm-12 col-xs-12 home-module-pages">
        <div class="x_panel">
          <div class="x_content">
            <div class="invertory-module">
              <div class="invertory-head text-center">
                <h6>
                 Select a process to continue 
                </h6> 
              </div>
              <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-6">
                  <div class="text-center single-upload"> 
                    <div class="invertory-box">
                      <div class="invertory-box-head">
                        <h4>Single Upload</h4> 
                      </div>
                      <div class="invertory-box-img">
                        <img src="<?php echo base_url(); ?>assets/img/imgpsh_fullsize_anim.png"> 
                      </div>    
                    </div>
                    <div class="invertory-content text-center">
                      <p>In this process you have to add product one by one. If you want to continue with this process please click on <strong>continue</strong></p>
                    </div>
                    <a href="<?php echo base_url($this->session->userdata('user_type').'/addSingleProduct'); ?>" class="btn active-btn btn-round single-upload-btn">Continue</a> 
                  </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6">
                  <div class="text-center Bulk-upload"> 
                    <div class="invertory-box">
                      <div class="invertory-box-head">
                        <h4>Bulk Upload</h4> 
                      </div> 
                      <div class="invertory-box-img">
                        <img src="<?php echo base_url(); ?>assets/img/imgpsh_fullsize_anim (1).png">  
                      </div>  
                    </div>
                    <div class="invertory-content text-center">
                      <p>In this process you can add multiple products at once. You can check the sample file by clicking view sample. Click on continue if you are ready to go with this process.</p> 
                    </div>
                    <button type="button" class="btn active-btn btn-round">Preview</button>
                    <button type="button" class="btn active-btn btn-round Bulk-upload-btn"><i class="fa fa-file-excel-o"></i> Upload</button>
                  </div>   
                </div>   
              </div>
            </div>
          </div>
        </div>
      </div> 
    </div>
  </div>
  <!-- /page content -->

      


