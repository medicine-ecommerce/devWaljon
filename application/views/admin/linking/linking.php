
  <!-- page content -->
  <div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>Inventory > Linking</h3>
        </div>

        <!-- <div class="title_right">
          <div class="col-md-6 col-sm-6 form-group pull-right top_search">
            <div class="input-group">
              <input type="text" class="form-control product-form" placeholder="Search ">
            </div>
          </div>
        </div> -->
      </div>
      <div class="">
        <div class="col-md-12 col-sm-12 home-module-pages">
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
          <div class="x_panel">
            <div class="tab-content" id="myTabContent">
              <div class="card-box">                
                <table class="table user-detail-table linking-table" cellspacing="0">
                  <thead>
                    <tr>
                      <th style="width: 30%">Home Categories</th>
                      <th style="width: 20%"></th>
                      <th style="width: 50%">Product Categories</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($category as $key => $value) { ?>
                    <tr>                      
                        <td><?php echo $value->category_name ?></td>
                        <td><span class="dot">............</span><img src="<?php echo base_url(); ?>assets/img/link.png" class="link-img"><span class="dot">............</span></td>
                        <td>
                          <select class="multiselect" name="product_category_id" multiple="multiple" data-id="<?php echo $value->id; ?>" >
                            <?php foreach ($product_category as $key => $value1) { ?>
                              <option value="<?php echo $value1->id; ?>" <?php echo ($value1->category_id == $value->id)? 'selected':'' ?> ><?php echo $value1->subcategory; ?></option>
                            <?php } ?>
                          </select>
                        </td>                        
                    </tr>

                    <?php } ?>
                  </tbody>
                </table>
              </div>
              <div class="pull-right padding-top50">
                <div class="submit-btn">
                  <button type="button" class="btn previous-btn">Previous</button>
                  <button type="button" class="btn active-btn">Cancle</button>
                  <button type="button" class="btn active-btn">Next</button> 
                </div> 
              </div>
            </div>            
          </div>
        </div>        
      </div>
    </div>
  </div>
  <!-- /page content -->
  <script type="text/javascript">
    var cat_id = '';
    function UpdateProductCate(cat_id) {
      alert(cat_id);
       cat_id = cat_id
      
    }
  </script>

  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css" />
<script>
$(document).ready(function(){
 $('.multiselect').multiselect({
  nonSelectedText: 'Select Product category',
  enableFiltering: true,
  enableCaseInsensitiveFiltering: true,
  onChange: function() {
        var selected = this.$select.val();
        var catid = this.$select.data("id");
        $.ajax({
          type: "POST",
          url: '<?php echo base_url('admin/ProductLinking'); ?>',
          data: {cat_id : catid,subcat_id:selected}, // serializes the form's elements.
          success: function(data)
          {
          }
        });
        // ...
    }
 }); 
});
</script>
        
 