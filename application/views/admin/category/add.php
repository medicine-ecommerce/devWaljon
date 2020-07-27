  <!-- page content -->
  <div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>Add Category</h3>
        </div>

        <!-- <div class="title_right">
          <div class="col-md-5 col-sm-5 form-group pull-right top_search">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-btn">
                <button class="btn btn-default" type="button">Go!</button>
              </span>
            </div>
          </div>
        </div> -->
      </div>
      <div class="row">
        <div class="col-md-12 col-sm-12">
          <?php if (!empty($this->session->flashdata('error'))) {
            echo '<div class="alert alert-danger">
                  '.$this->session->flashdata('error').'
                </div>';
          }
          elseif (!empty($this->session->flashdata('success'))) {
            echo '<div class="alert alert-success">
                  '.$this->session->flashdata('success').'
                </div>';
          } 
          ?>
          <div class="x_panel">
            <div class="x_content">
              <form class="" action="<?php echo(!empty($category)) ? base_url('admin/category_edit/'.$category->id) : base_url('admin/category_add') ?>" method="post" novalidate>
                <span class="section">Add Category</span>
                <div class="field item form-group">
                  <label class="col-form-label col-md-3 col-sm-3  label-align">Parent Category<span
                      class="required">*</span></label>
                  <div class="col-md-6 col-sm-6">
                    <select class="form-control" name="main_category_id">
                      <?php  if (!empty($parentCategory)) {
                        foreach ($parentCategory as $key => $value) { ?>
                          <option value="<?php echo $value->id; ?>" <?php echo (!empty($subcategory) && $value->id == $category->main_category_id) ?'selected':'' ?>><?php echo $value->category_name; ?></option>
                      <?php  }
                      } ?>
                    </select>
                  </div>
                </div>
                <div class="field item form-group">
                  <label class="col-form-label col-md-3 col-sm-3  label-align">Category Name<span
                      class="required">*</span></label>
                  <div class="col-md-6 col-sm-6">
                    <input class="form-control"  name="category_name" required="required" value="<?php echo (!empty($category)) ? $category->category_name: '';?>" />
                  </div>
                </div>
                
                
                <div class="ln_solid">
                  <div class="form-group">
                    <div class="col-md-6 offset-md-3">
                <button type='submit' class="btn btn-primary">Submit</button>
                <button type='reset' class="btn btn-success">Reset</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /page content -->

      


  
  <script src="../vendors/validator/validator.js"></script>

  <script>
    // initialize a validator instance from the "FormValidator" constructor.
    // A "<form>" element is optionally passed as an argument, but is not a must
    var validator = new FormValidator({ "events": ['blur', 'input', 'change'] }, document.forms[0]);
    // on form "submit" event
    document.forms[0].onsubmit = function (e) {
      var submit = true,
        validatorResult = validator.checkAll(this);
      console.log(validatorResult);
      return !!validatorResult.valid;
    };
    // on form "reset" event
    document.forms[0].onreset = function (e) {
      validator.reset();
    };
    // stuff related ONLY for this demo page:
    $('.toggleValidationTooltips').change(function () {
      validator.settings.alerts = !this.checked;
      if (this.checked)
        $('form .alert').remove();
    }).prop('checked', false);
  </script>
