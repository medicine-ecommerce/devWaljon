<script src="<?php echo base_url(); ?>assets/js/countrystatecity.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<div class="right_col registration-page">
  <div class="page-title">
    <div class="title_left">
      <h3>Invertory > Add Product</h3>
    </div>
  </div>
  <form method="post" enctype="multipart/form-data">
    <div class="x_panel add-product">
        <div class="row">
          <?php if (!empty($this->session->flashdata('error'))) {
            echo '<div class="alert alert-danger">
                  '.$this->session->flashdata('error').'
                </div>';
          }
          elseif (!empty($this->session->flashdata('success'))) {
            echo '<div class="alert alert-success">
                  '.$this->session->flashdata('success').'
                </div>';
          } ?>
          
          <div class="col-md-12">
            <div class="row padding-top-bottom-20">
               <div class="col-md-3">
                  <h6>Additional Information </h6>
               </div>
               <div class="col-md-9">
                  <hr class="custom-form-hr">
               </div>  
            </div>
            <div class="row">
               <div class="col-md-12 col-sm-12">
                  <div class="x_panel">
                     <div class="x_content">
                        <div class="col-md-3">
                           <div class="nav nav-tabs flex-column  bar_tabs" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                              <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">About</a>
                              <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Side Effect</a>
                              <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">When to Use</a>
                              <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">How to Use</a>
                              <a class="nav-link" id="v-pills-use-tab" data-toggle="pill" href="#v-pills-use" role="tab" aria-controls="v-pills-use" aria-selected="false">How to Works</a>
                              <a class="nav-link" id="v-pills-store-tab" data-toggle="pill" href="#v-pills-store" role="tab" aria-controls="v-pills-store" aria-selected="false">How to Store</a>
                              <a class="nav-link" id="v-pills-imformation-tab" data-toggle="pill" href="#v-pills-imformation" role="tab" aria-controls="v-pills-imformation" aria-selected="false">Safety Information</a>
                           </div>
                        </div>
                        <div class="col-md-9">
                           <div class="tab-content" id="v-pills-tabContent">
                              <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                <textarea name="about_product" style="width: 100%;height: 260px;" class="form-control" placeholder="about this Product"></textarea >
                              </div>
                              <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                <textarea name="side_effect" style="width: 100%;height: 260px;" class="form-control"></textarea >
                              </div>
                              <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                <textarea name="when_to_use" style="width: 100%;height: 260px;" class="form-control"></textarea >
                              </div>
                              <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                <textarea name="how_to_use" style="width: 100%;height: 260px;" class="form-control"></textarea >
                              </div>
                              <div class="tab-pane fade" id="v-pills-use" role="tabpanel" aria-labelledby="v-pills-use-tab">
                                <textarea name="how_to_work" style="width: 100%;height: 260px;" class="form-control"></textarea >
                              </div>
                              <div class="tab-pane fade" id="v-pills-store" role="tabpanel" aria-labelledby="v-pills-store-tab">
                                <textarea name="how_to_store" style="width: 100%;height: 260px;" class="form-control"></textarea >
                              </div>
                              <div class="tab-pane fade" id="v-pills-information" role="tabpanel" aria-labelledby="v-pills-information-tab">
                                <textarea name="safety_info" style="width: 100%;height: 260px;" class="form-control"></textarea >
                              </div>
                           </div>
                        </div>
                        <div class="clearfix"></div>
                     </div>
                  </div>
               </div>
            </div> 
          </div> 
        </div>
        <div class="row"> 
          <div class="col-md-12 padding-top-bottom50">
            <button type="submit" class="btn btn-default submit_button float-right">Cancle</button>   
            <button type="submit" class="btn btn-default submit_button float-right">Save</button> 
          </div>
        </div>
    </div>
  </form>
</div>  
	


