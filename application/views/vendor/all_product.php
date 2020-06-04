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
                      <!-- <th>Type</th> -->
                      <th>Form</th>
                      <th>Quantity</th>
                      <!-- <th>Unit Available</th> -->
                      <th>Added On</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i = 1;
                    foreach ($all_product as $value) { ?>
                    <tr>
                      <td><?php echo $i++; ?></td>
                      <td><?php echo $value->name; ?></td>
                      <td><?php echo $value->manufacturer_name; ?></td>
                      <td><i class="fa fa-inr"></i> <?php echo $value->mrp; ?></td>
                      <td><i class="fa fa-inr"></i> <?php echo $value->sale_price; ?></td>
                      <!-- <td></td> -->
                      <td><?php echo $value->product_form; ?></td>
                      <td><?php echo $value->quantity; ?> (<?php echo $value->unit; ?>)</td>
                      <!-- <td></td> -->
                      <td><?php echo $value->created_at;?></td>
                      <td>
                        <span class="status-approve"> 
                          <a data-toggle="tooltip" data-placement="top" data-original-title="Refill"><i class="fa fa-check"></i></a>
                        </span> 
                        <span class="status-cancle">
                          <a href="<?php echo base_url('vendor/product_delete/'.$value->id); ?>" onclick="return confirm('Are you sure？')" data-toggle="tooltip" data-placement="top" data-original-title="Remove"><i class="fa fa-close"></i></a>
                        </span>
                      </td>  
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
              <div>
                <button class="open-button" onclick="openForm()"><i class="fa fa-minus"></i></button>
                <div class="chat-popup" id="myForm">
                  <div class="form-container">
                    <div class="bulk-upload-div">
                      <a href="<?php echo base_url('vendor/vendor_bulk_upload'); ?>">
                        <span class="upload-span">Bulk Upload <span class="rotate-div"></span></span>
                        <button type="button" class="btn bulk-upload-btn"><i class="fa fa-clone"></i></button>
                      </a>  
                    </div>
                    <div class="single-upload-div">
                      <a href="<?php echo base_url('vendor/addSingleProduct'); ?>">
                        <span class="upload-span">Single Upload <span class="rotate-div"></span></span>
                        <button type="button" class="btn single-upload-icon"><i class="fa fa-upload"></i></button>
                      </a>  
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

