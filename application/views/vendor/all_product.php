
  <!-- page content -->
  <div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left hamburger">
          <h3 class="product_form_heading">All Product</h3>
        </div>
<!-- 
        <div class="title_right">
          <div class="col-md-6 col-sm-6 form-group pull-right top_search">
            <div class="input-group">
              <input type="text" class="form-control product-form" placeholder="Search ">
            </div>
          </div>
        </div> -->
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
                      <th>Category</th>
                      <th>Sub Category</th>
                      <th>Manufacturer</th>
                      <th>MRP</th>
                      <th>Sell Price</th>
                      <th>Form</th>
                      <th>Quantity</th>
                      <th>Added On</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i = 1;
                    if (!empty($all_products)) {
                    foreach($all_products as $value) { ?>
                    <tr>
                      <td><?php echo $i++; ?></td>
                      <td><?php echo $value->name; ?></td>
                      <td><?php echo $value->category_name; ?></td>
                      <td><?php echo $value->subcategory_name; ?></td>
                      <td><?php echo $value->manufacturer_name; ?></td>
                      <td><i class="fa fa-inr"></i> <?php echo $value->mrp; ?></td>
                      <td><i class="fa fa-inr"></i> <?php echo $value->sale_price; ?></td>
                      <!-- <td></td> -->
                      <td><?php echo $value->product_form; ?></td>
                      <td><?php echo $value->quantity; ?> (<?php echo $value->unit; ?>)</td>
                      <td><?php echo $value->created_at;?></td>
                      <td>
                         <?php if ($value->status=='0') {
                            echo '<span class="rejected">Deactive</span>';
                          } else {
                            echo '<span class="approved">Active</span>';
                          } ?>
                      </td>
                      <td>
                        <!-- <span class="status-approve"> 
                          <a data-toggle="tooltip" data-placement="top" data-original-title="Refill"><i class="fa fa-check"></i></a>
                        </span> --> 
                        <span class="status-cancle">
                          <a href="<?php echo base_url('vendor/product_delete/'.$value->id); ?>" onclick="return confirm('Are you sure？')" data-toggle="tooltip" data-placement="top" data-original-title="Remove"><i class="fa fa-trash"></i></a>
                        </span>
                        <a id="drop5" href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false"><span class="status-Review">Action <span class="caret"></span></span></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 44px, 0px);">
                          <?php if ($value->status=='0') { ?>
                            <a class="dropdown-item" href="<?php echo base_url('vendor/product_status/1/'.$value->id);?>">Activate</a>
                          <?php }
                          else { ?>
                            <a class="dropdown-item" href="<?php echo base_url('vendor/product_status/0/'.$value->id);?>">Deactivate</a>
                          <?php } ?>
                        </div>

                      </td>  
                    </tr>
                    <?php }
                    } ?>
                  </tbody>
                </table>
              </div>
              <div>
                <button class="open-button" onclick="openForm()"><i class="fa fa-minus"></i></button>
                <div class="chat-popup" id="myForm">
                  <div class="form-container">
                    <div class="bulk-upload-div">
                      <?php if($_SESSION["user_type"]=='admin'){ ?>
                        <a href="<?php echo base_url('admin/vendor_bulk_upload'); ?>">
                          <span class="upload-span">Bulk Upload <span class="rotate-div"></span></span>
                          <button type="button" class="btn bulk-upload-btn"><i class="fa fa-clone"></i></button>
                        </a> 
                      <?php }
                      elseif($_SESSION["user_type"]=='vendor'){ ?>
                        <a href="<?php echo base_url('vendor/vendor_bulk_upload'); ?>">
                          <span class="upload-span">Bulk Upload <span class="rotate-div"></span></span>
                          <button type="button" class="btn bulk-upload-btn"><i class="fa fa-clone"></i></button>
                        </a>  
                      <?php } ?>  
                    </div>
                    <div class="single-upload-div">
                      <?php if($_SESSION["user_type"]=='admin'){ ?>
                        <a href="<?php echo base_url('admin/addSingleProduct'); ?>">
                          <span class="upload-span">Single Upload <span class="rotate-div"></span></span>
                          <button type="button" class="btn single-upload-icon"><i class="fa fa-upload"></i></button>
                        </a> 
                      <?php }
                      elseif($_SESSION["user_type"]=='vendor'){ ?>
                        <a href="<?php echo base_url('vendor/addSingleProduct'); ?>">
                          <span class="upload-span">Single Upload <span class="rotate-div"></span></span>
                          <button type="button" class="btn single-upload-icon"><i class="fa fa-upload"></i></button>
                        </a>  
                      <?php } ?> 
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

