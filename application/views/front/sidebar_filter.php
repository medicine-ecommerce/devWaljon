<form id="filter">
  <div class="panel-group filter-sidebar-section" id="accordionMenu" role="tablist" aria-multiselectable="true">
    <input type="hidden" name="sortby" value="">
    <div class="panel panel-default category-panel">
      <div class="panel-heading" role="tab" id="headingTwo">
        <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordionMenu" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
          Health Conditions
        </a>
      </h4>
      </div>
      <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
        <div class="panel-body category-filter-radio">
          <div class="seacrh-section">            
            <input id="brandInput" onkeyup="brandFilter()" placeholder="Search..." type="text" value="" />
            <div class="underline"></div>   
            <i class="fa fa-search custom-search" aria-hidden="true"></i>
          </div>  
          <div id="brandDiv">            
            <?php
            if(!empty($sub_category)) {
              foreach ($sub_category as $key => $value) { ?>
                <div class="form-group">
                  <input type="checkbox" id="product_category_<?= $value->id ?>" value="<?= $value->id ?>" name="product_category_id[]" class="search_paramiter_checkbox" >
                  <label for="product_category_<?= $value->id ?>" class="flt-checkbox-label"><?= $value->subcategory; ?> </label>
                </div>              
            <?php } } ?>  
          </div>
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
            <input id="brandInput" onkeyup="brandFilter()" placeholder="Search..." type="text" value="" />
            <div class="underline"></div>   
            <i class="fa fa-search custom-search" aria-hidden="true"></i>
          </div>  
          <div id="brandDiv">            
            <?php
            if(!empty($brand)) {
              foreach ($brand as $key => $value) { ?>
                <div class="form-group">
                  <input type="checkbox" id="brand<?= $value->id ?>" value="<?= $value->id ?>" name="brand_id[]" class="search_paramiter_checkbox" >
                  <label for="brand<?= $value->id ?>" class="flt-checkbox-label"><?= $value->brand_name; ?> </label>
                </div>              
            <?php } } ?>  
          </div>
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
            <input id="myInput" onkeyup="productFromFilter()" placeholder="Search..." type="text" />
            <div class="underline"></div>   
            <i class="fa fa-search custom-search" aria-hidden="true"></i>
          </div>
          <div id="productFrom">            
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
    
  </div>
</form>

  <!-- <input type="text"  onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
 -->
<!-- <ul id="myUL">
  <li><a href="#">Adele</a></li>
  <li><a href="#">Agnes</a></li>

  <li><a href="#">Billy</a></li>
  <li><a href="#">Bob</a></li>

  <li><a href="#">Calvin</a></li>
  <li><a href="#">Christina</a></li>
  <li><a href="#">Cindy</a></li>
</ul> -->

<script type="text/javascript">
  
  function productFromFilter() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("productFrom");
    li = ul.getElementsByTagName("div");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("label")[0];
        txtValue = a.textContent || a.innerText;        
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}
// $('#myInput').blur(function(){
//   var inputdata = $(this).val();
//   if(inputdata!=''){    
//     setInterval(function () {
//     $("#myInput").val(inputdata);          
//         }, 500);
//   }
  
//     // $(this).val("hi");
// });



 function brandFilter() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("brandInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("brandDiv");
    li = ul.getElementsByTagName("div");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("label")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}


</script>