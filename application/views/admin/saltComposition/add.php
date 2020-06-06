<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- page content -->
  <div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>Invertory > Salt Composition</h3>
        </div>
      </div>

      <div class="col-md-12 col-sm-12 col-xs-12 home-module-pages">
        <div class="x_panel">
          <div class="x_content">
            <div class="product-module">
              <div class="row">
                <div class="col-md-12 col-sm-10 col-xs-6">
                  <div class="home-page-content">
                    <table class="table no-border-table append-table" id="dynamic_field2">
                      <tr>
                        <th>
                          <div class="home-page-head">
                            <h4>Salt Composition</h4>
                          </div>
                        </th>
                        <th style="width: 10%;">
                          <div class="home-page-head">
                            <h4>Action</h4>
                          </div>
                        </th>
                      </tr>
                      <tr>
                        <td>
                          <div class="form-group label-float-top" >
                            <input type="text" class="form-control control-float-top" name="salt_composition" placeholder="Create Salt Composition">
                          </div>
                        </td>
                        <td style="width: 20%;">
                          <div class="home-page-btn">
                            <div class="switch-btn">
                              <a class="close-saltcomposition"><i class="fa fa-trash-o"></i></a>
                              <label class="switch">
                                <input type="checkbox" class="switch-input" name="trending" >
                                <span class="slider round"></span>
                              </label>
                              <button type="button" name="add2" id="add2" class="btn addMore-btn"><i class="fa fa-plus"></i></button>
                            </div>
                          </div>
                        </td>  
                      </tr>
                    </table>
                  </div>
                </div>
              </div> 
              <div class="row">
                <div class="admin-btn padding-top50">
                  <div class="submit-btn pull-right">
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
  </div>
  <!-- /page content -->

      

<script>
  $(document).ready(function(){      
    var i=1;  
    $('#add2').click(function(){  
      i++;  
      $('#dynamic_field2').append('<tr id="row'+i+'" class="dynamic-added"><td><div class="form-group label-float-top" ><input type="text" class="form-control control-float-top" name="salt_composition" placeholder="Create Salt Composition"></div></td><td><div class="home-page-btn"><div class="switch-btn"><button type="button" name="remove" id="'+i+'" class="btn btn-custom-rev btn_remove"><i class="fa fa-trash-o"></i></button><label class="switch"><input type="checkbox" class="switch-input" name="trending" ><span class="slider round"></span></label></div></div></td></tr>');  
    });
    $(document).on('click', '.btn_remove', function(){  
          var button_id = $(this).attr("id");   
          $('#row'+button_id+'').remove();  
     });
  });  
</script>
