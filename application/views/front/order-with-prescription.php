
<section class="main-page">
  <div class="container">
    <div class="order-view">  
      <div class="row">
        <div class="col-md-5">
          <div class="order-date-detail">
            <h4>Upload Prescription</h4>
            <ul>
              <li>
                Please attach a prescription to proceed
              </li>
            </ul>
          </div>
          <div class="order-detail">
            <div class="upload-div">
              <a class="upload-pres">
                <span class="upload-img">
                  <img src="<?php echo base_url();?>assets/img/file.png">
                </span>
                <span class="upload-name">
                  <p>Upload New</p>
                </span>
              </a>
            </div>
            <div class="upload-div">
              <a class="upload-pres">
                <span class="upload-img">
                  <img src="<?php echo base_url();?>assets/img/file.png">
                </span>
                <span class="upload-name">
                  <p>Saved Prescription</p>
                </span>
              </a>
            </div>  
           <!--  <hr> -->
            <div class="show-upload">
              <h5>Attached Prescription</h5>
              <div class="show-upload-content">
                <div class="show-upload-img">
                  <img src="<?php echo base_url();?>assets/img/file.png">
                </div>
                <div class="show-upload-name">
                  <p>Uploaded prescriptions will be shown here</p>                
                </div>
              </div>
            </div>
          </div> 
          <div class="upload-continue">
            <button class="upload-continue-btn">Continue</button>
          </div>
        </div>
        <div class="col-md-7">
          <div class="order-date-detail">
            <h4>Guide for a valid prescription</h4>
            <ul>
              <li>
                Government regulations require a valid prescription
              </li>
            </ul>
          </div>
          <div class="order-detail">
            <div class="row">
              <div class="col-md-6">
                <div class="guide-img">
                  <img src="<?php echo base_url('assets/img/validate.svg'); ?>">
                </div>
              </div>
              <div class="col-md-6">
                <div class="guide-content">
                  <ul class="guide-content-ul">
                    <li>Don’t crop out any part of the image</li>
                    <li>Avoid blurred image</li>
                    <li>Include details of doctor and patient + clinic visit date</li>
                    <li>Medicines will be dispensed as per prescription</li>
                    <li>Supported files type: jpeg , jpg , png , pdf</li>
                    <li>Maximum allowed file size: 5MB</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="order-date-detail">
            <a class="back-btn">← Back to options</a>
            <h4>Saved Prescriptions (3 selected)</h4>
          </div>
          <div class="order-detail">
            <div class="upload-img-sec">
              <ul>
                <li class="uplod-prec-img">
                  <input type="checkbox" name="select" class="check-presc">
                  <img src="<?php echo base_url();?>assets/img/file.png">
                </li>
              </ul>
            </div>  
          </div> 
          <div class="upload-continue">
            <button class="upload-continue-btn">Continue</button>
          </div>
        </div>
      </div>               
    </div>
  </div> 
</section>
