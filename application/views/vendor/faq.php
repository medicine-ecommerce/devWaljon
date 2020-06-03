  			
<!-- <script src="<?php echo base_url(); ?>vendor/countrystatecity.js"></script> -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
       <div class="title_left">
          <h3> Inventory > FAQ</h3>
       </div>
       <div class="title_right">
          <div class="col-md-12 col-sm-8 form-group pull-right top_search">
            <div class="input-group btn-linking-div">
              <a class="btn-linking-page active">Bulk Upload</a>
              <hr class="active">
              <a class="btn-linking-page active">Image Upload</a>
              <hr class="active">
              <a class="btn-linking-page active">Additional information</a>
              <hr>
              <a class="btn-linking-page next">FAQ</a>
            </div>
          </div>
        </div>
    </div>

    
    <div class="col-md-12 col-sm-12  home-module-pages">
      <div class="x_panel">
        <div class="x_content">
          <div class="row">
            <div class="col-md-6 col-sm-12">
              <div class="border-right faq-table">  
                <div class="table-responsive "> 
                  <table class="table bulk-uoload-table">
                    <thead>
                      <tr>
                        <th class="column-title">#</th>
                        <th>Product SKU ID</th>
                        <th>Product Name</th>
                        <th>Manufacturer</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                        <td>Manufacturer1</td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                        <td>Manufacturer1</td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                        <td>Manufacturer1</td>
                      </tr>
                      <tr>
                        <td>4</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                        <td>Manufacturer1</td>
                      </tr>
                      <tr>
                        <td>5</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                        <td>Manufacturer1</td>
                      </tr>
                      <tr>
                        <td>6</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                        <td>Manufacturer1</td>
                      </tr>
                      <tr>
                        <td>7</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                        <td>Manufacturer1</td>
                      </tr>
                      <tr>
                        <td>8</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                        <td>Manufacturer1</td>
                      </tr>
                      <tr>
                        <td>9</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                        <td>Manufacturer1</td>
                      </tr>
                      <tr>
                        <td>10</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                        <td>Manufacturer1</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-sm-12">
              <div class="faq-section">
                <div class="faq-heading"> 
                  <div class="col-md-5">
                    <p>Frequently Asked Question</p>
                  </div>
                  <div class="col-md-6">
                    <hr class="custom-form-hr">
                  </div>
                  <div class="col-md-1">
                    <button type="button" name="add2" id="add2" class="btn addMore-btn"><i class="fa fa-plus"></i></button> 
                  </div>
                </div>
                <div class="faq-content">
                  <table class="table no-border-table append-table" id="dynamic_field2">
                    <tr>
                      <td>
                        <div class="form-group label-float-top" >
                          <input type="text" class="form-control control-float-top" name="faq_question">
                          <label for="email">What is the product for ?</label>
                          <textarea class="form-control faq-textarea" rows="5" placeholder="About this product"></textarea>
                        </div>
                      </td>
                    </tr>
                  </table>
                </div>
              </div>
              <div class="btn-div pull-right">
                <button type="submit" class="btn btn-default submit_button">Cancle</button> 
                <button type="submit" class="btn btn-default submit_button">Previous</button> 
                <button type="submit" class="btn btn-default submit_button disable">Next</button>
              </div>
            </div>        
          </div>  
        </div>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">

	$(document).ready(function(){      
     var i=1;  
     $('#add2').click(function(){  
          i++;  
          $('#dynamic_field2').append('<tr id="row'+i+'" class="dynamic-added"><td><div class="form-group label-float-top"><input type="text" class="form-control control-float-top" name="faq_question"><label for="email">What is the product for ?</label><textarea class="form-control faq-textarea" rows="5" placeholder="About this product"></textarea></div></td><td style="width: 5%;"><button type="button" name="remove" id="'+i+'" class="btn btn-custom-rev btn_remove"><i class="fa fa-trash-o"></i></button></td></tr>');  
     });
     $(document).on('click', '.btn_remove', function(){  
          var button_id = $(this).attr("id");   
          $('#row'+button_id+'').remove();  
     });              
   });

</script>