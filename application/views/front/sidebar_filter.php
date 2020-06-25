  <div class="panel-group filter-sidebar-section" id="accordionMenu" role="tablist" aria-multiselectable="true">
    <div class="panel panel-default category-panel">
      <div class="panel-heading" role="tab" id="headingOne">
        <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordionMenu" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Health Conditions
        </a>
      </h4>
      </div>
      <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
        <div class="panel-body category-filter">
          <?php
          if(!empty($sub_category)) {
            foreach ($sub_category as $key => $value) { ?>
              <a href=""><p><?= $value->subcategory; ?> </p></a>              
          <?php } } ?>  
        </div>
      </div>
    </div>
    <div class="panel panel-default category-panel">
      <div class="panel-heading" role="tab" id="headingTwo">
        <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordionMenu" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Brands
        </a>
      </h4>
      </div>
      <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
        <div class="panel-body category-filter-radio">
          <div class="seacrh-section">            
            <input placeholder="Search..." type="text" value="" />
            <div class="underline"></div>   
            <i class="fa fa-search custom-search" aria-hidden="true"></i>
          </div>  
          <?php
          if(!empty($brand)) {
            foreach ($brand as $key => $value) { ?>
              <div class="form-group">
                <input type="checkbox" id="brand<?= $value->id ?>" value="<?= $value->id ?>" name="brand_name[]" class="search_paramiter_checkbox" >
                <label for="brand<?= $value->id ?>" class="flt-checkbox-label"><?= $value->brand_name; ?> </label>
              </div>              
          <?php } } ?>  
        </div>
      </div>
    </div>
    <div class="panel panel-default category-panel">
      <div class="panel-heading" role="tab" id="headingThree">
        <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordionMenu" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Descount
        </a>
      </h4>
      </div>
      <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
        <div class="panel-body category-filter-radio">          

          <div class="form-group">
            <input type="checkbox" class="search_paramiter_checkbox" >
            <label for="item" class="flt-checkbox-label">Item</label>
          </div>
          <div class="form-group">
            <input type="checkbox" class="search_paramiter_checkbox" >
            <label for="item" class="flt-checkbox-label">Item</label>
          </div>
          <div class="form-group">
            <input type="checkbox" class="search_paramiter_checkbox" >
            <label for="item" class="flt-checkbox-label">Item</label>
          </div>
        </div>
      </div>
    </div>
    
    
    <div class="panel panel-default category-panel">
      <div class="panel-heading" role="tab" id="headingFour">
        <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordionMenu" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
          Product Forms
        </a>
      </h4>
      </div>
      <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
        <div class="panel-body category-filter-radio">
          <div class="seacrh-section">            
            <input placeholder="Search..." type="text" value="" />
            <div class="underline"></div>   
            <i class="fa fa-search custom-search" aria-hidden="true"></i>
          </div>
          <?php
          if(!empty($product_form)) {
            foreach ($product_form as $key => $value) { ?>
              <div class="form-group">
                <input type="checkbox" id="product_form<?= $value->id ?>" value="<?= $value->id ?>" name="product_form[]" class="search_paramiter_checkbox" >
                <label for="product_form<?= $value->id ?>" class="flt-checkbox-label"><?= $value->name; ?> </label>
              </div>              
          <?php } } ?>            
        </div>
      </div>
    </div>
    
  </div>
