
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
            <div class="product-module">
              <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-6">
                  <div class="home-page-head">
                    <h4>Home Modules</h4>
                  </div>
                  <div class="home-page-content">
                    <p class="home-page-box"> Features Brands </p>
                    <p class="home-page-box">  Shop By Health Concens  </p>
                    <p class="home-page-box">  Offers  </p>
                  </div>
                </div>
                <div class="col-md-9 col-sm-9 col-xs-6">
                  <div class="home-page-head">
                    <h4>Actions</h4>
                  </div>
                  <form name="sectionForm" id="sectionForm" method="post">
                    <div class="home-page-btn">
                      <div class="switch-btn">
                        <label class="switch">
                          <input type="checkbox" class="switch-input" name="feature_brand" <?php echo ($home_module->feature_brand > 0) ? 'checked' : ''  ?> >
                          <span class="slider round"></span>
                        </label>
                      </div>
                      <div class="switch-btn">
                        <label class="switch">
                          <input type="checkbox" class="switch-input" name="shop_by_health" <?php echo ($home_module->shop_by_health > 0) ? 'checked' : ''  ?>>
                          <span class="slider round"></span>
                        </label>
                      </div>
                      <div class="switch-btn">
                        <label class="switch">
                          <input type="checkbox" class="switch-input" name="offers" <?php echo ($home_module->offers > 0) ? 'checked' : ''  ?>>
                          <span class="slider round"></span>
                        </label>
                      </div>
                    </div>
                  </form>                  
                </div>
              </div> 
              <div class="row">
                <form action="<?php echo base_url('admin/add_home_category'); ?>" method="post" style="width:100%">
                  <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="home-page-head">
                      <h4>Product Category</h4>
                    </div>
                    <div class="home-page-content">
                      <?php 
                      if (!empty($home_category)) {
                        foreach ($home_category as $key => $value) {
                          echo '<p class="home-page-box">'.$value->home_category.'</p>';
                        } 
                      }
                       ?>
                      <input type="text" name="home_category" placeholder="Enter category name" class="form-control ">
                    </div>
                  </div>
                  <div class="col-md-9 col-sm-9 col-xs-6">                  
                    <div class="home-page-btn product-cat-btn">
                      <?php 
                      if (!empty($home_category)) {
                        foreach ($home_category as $key => $value) { ?>
                          <div class="switch-btn">
                            <label class="switch">
                              <input type="checkbox" class="switch-input" name="is_active_category" <?php echo ($value->status=='active') ? 'checked':''; ?> onchange="UpdateHomeCategory(this,'<?php echo $value->id; ?>')" >
                              <span class="slider round"></span>
                            </label>
                          </div>
                      <?php  } 
                      }
                       ?>
                      <div class="switch-btn">
                        <input type="submit" class="btn btn-success" value="Add" name="">
                      </div>
                    </div>
                  </div>
                </form>
              </div>
              <!-- <div class="pull-right">
                <div class="submit-btn">
                  <button type="button" class="btn previous-btn">Previous</button>
                  <button type="button" class="btn active-btn">Cancle</button>
                  <button type="button" class="btn active-btn">Next</button> 
                </div> 
              </div>  -->    
            </div>
          </div>
        </div>
      </div> 
    </div>
  </div>
  <!-- /page content -->
  <script type="text/javascript">
    $('#sectionForm input').change(function() {
      $.ajax({
          type: "post",
          url: "<?php echo base_url('admin/UpdateHomeModule'); ?>",
          data: $('#sectionForm').serialize(),
          success: function (data) {
          }
      });
    })
    function UpdateHomeCategory(th,id) {
      var category = ($(th).is(':checked')) ? 'active' : 'deactive'      
      $.ajax({
          type: "post",
          url: "<?php echo base_url('admin/update_home_category'); ?>",
          data: {id: id, category : category },
          success: function (data) {
          }
      });
    }
  </script>

      


