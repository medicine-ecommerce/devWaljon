  <!-- page content -->
  <div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left hamburger">
          <h3 class="product_form_heading">Inventory</h3>
        </div>

        <div class="title_right">
          <div class="col-md-6 col-sm-6 form-group pull-right top_search">
            <div class="input-group">
              <input type="text" class="form-control product-form" placeholder="Search ">
            </div>
          </div>
        </div>
      </div>
      <div class="">
        <div class="col-md-12 col-sm-12 home-module-pages">
          <div class="x_panel">
            <div class="x_title">
              <div class="card-box table-responsive">                
                <table id="datatable-responsive" class="table user-detail-table" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Product Name</th>
                      <th>Manufacturer</th>
                      <th>MRP</th>
                      <th>Sell Price</th>
                      <th>Type</th>
                      <th>Form</th>
                      <th>Stock Quantity</th>
                      <th>Unit Available</th>
                      <th>Added On</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Nixon</td>
                      <td>System Architect</td>
                      <td>200</td>
                      <td>220</td>
                      <td>Powder</td>
                      <td>Nixon</td>
                      <td>System Architect</td>
                      <td>200</td>
                      <td>220</td>
                      <td>
                        <span> 
                          <button type="button" data-toggle="tooltip" data-placement="top" title="" data-original-title="Refill"><i class="fa fa-check"></i></button>
                        </span> 
                        <span>
                          <button type="button" data-toggle="tooltip" data-placement="top" title="" data-original-title="Remove"><i class="fa fa-trash-o"></i></button>
                        </span>
                      </td>  
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>Nixon</td>
                      <td>System Architect</td>
                      <td>200</td>
                      <td>220</td>
                      <td>Powder</td>
                      <td>Nixon</td>
                      <td>System Architect</td>
                      <td>200</td>
                      <td>220</td>
                      <td>
                        <span> 
                          <button type="button" data-toggle="tooltip" data-placement="top" title="" data-original-title="Refill"><i class="fa fa-check"></i></button>
                        </span> 
                        <span>
                          <button type="button" data-toggle="tooltip" data-placement="top" title="" data-original-title="Remove"><i class="fa fa-trash-o"></i></button>
                        </span>
                      </td>  
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>Nixon</td>
                      <td>System Architect</td>
                      <td>200</td>
                      <td>220</td>
                      <td>Powder</td>
                      <td>Nixon</td>
                      <td>System Architect</td>
                      <td>200</td>
                      <td>220</td>
                      <td>
                        <span> 
                          <button type="button" data-toggle="tooltip" data-placement="top" title="" data-original-title="Refill"><i class="fa fa-check"></i></button>
                        </span> 
                        <span>
                          <button type="button" data-toggle="tooltip" data-placement="top" title="" data-original-title="Remove"><i class="fa fa-trash-o"></i></button>
                        </span>
                      </td>  
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>Nixon</td>
                      <td>System Architect</td>
                      <td>200</td>
                      <td>220</td>
                      <td>Powder</td>
                      <td>Nixon</td>
                      <td>System Architect</td>
                      <td>200</td>
                      <td>220</td>
                      <td>
                        <span> 
                          <button type="button" data-toggle="tooltip" data-placement="top" title="" data-original-title="Refill"><i class="fa fa-check"></i></button>
                        </span> 
                        <span>
                          <button type="button" data-toggle="tooltip" data-placement="top" title="" data-original-title="Remove"><i class="fa fa-trash-o"></i></button>
                        </span>
                      </td>  
                    </tr>
                  </tbody>
                </table>
              </div>
              <div>
                <button class="open-button" onclick="openForm()"><i class="fa fa-minus"></i></button>
                <div class="chat-popup" id="myForm">
                  <div class="form-container">
                    <div class="bulk-upload-div">
                      <span class="upload-span">Bulk Upload <span class="rotate-div"></span></span>
                      <button type="button" class="btn bulk-upload-btn"><i class="fa fa-clone"></i></button>
                    </div>
                    <div class="single-upload-div">
                      <span class="upload-span">Single Upload <span class="rotate-div"></span></span>
                      <button type="button" class="btn single-upload-icon"><i class="fa fa-upload"></i></button>
                    </div>
                    <button type="button" class="btn cancel" onclick="closeForm()"><i class="fa fa-close"></i></button>
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
  function openForm() {
    document.getElementById("myForm").style.display = "block";
  }

  function closeForm() {
    document.getElementById("myForm").style.display = "none";
  }
</script>

