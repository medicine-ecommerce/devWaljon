
  <!-- page content -->
  <div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3> Invertory </h3>
        </div>
      </div>

      <div class="col-md-12 col-sm-12 col-xs-12 home-module-pages">
        <div class="x_panel">
          <div class="x_content">
            <div class="invertory-module excelFormateContent">
              <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="text-center"> 
                    <div>
                      <div class="invertory-box-head">
                        <h4>Bulk Upload</h4> 
                      </div> 
                      <div class="invertory-box-img">
                        <img src="<?php echo base_url(); ?>assets/img/imgpsh_fullsize_anim (1).png">  
                      </div>  
                    </div>
                    <div class="invertory-content text-center">
                      <p>Please download your excel formate before you want to upload your excel file. You can also check the preview of our excel formate before download. To check the preview <a data-toggle="modal" data-target="#excelFormateModal" class="modal-btn">click here</a></p> 
                    </div>
                    <form id="import_form" method="post"  enctype="multipart/form-data">      
                    <a type="button" href="<?php echo base_url(); ?>assets/bulk_format/" download="products_format.xls" class="btn active-btn btn-round Bulk-upload-btn" value="Download" onchange="fileUpload()">Download</a>                    


                      <input type="file" name="file" class="bulk-excel-upload">
                      <button type="submit" id="file_upload"  class="btn active-btn btn-round Bulk-upload-btn"><i class="fa fa-file-excel-o"></i> Upload</button>
                      
                    </form>
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

 <!-- Modal -->
  <div class="modal fade imageuploadModel" id="excelFormateModal" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-body">
          <div class="excel-formate-table"> 
            <table class="table">
              <thead>
                <tr>
                  <th>Product SKU ID</th>
                  <th>Product Name</th>
                  <th>Product Manufacturer</th>
                  <th>Product Form</th>
                  <th>Varieties</th>
                  <th>Unit Type</th>
                  <th>MRP</th>
                  <th>Sell Price</th>
                  <th>Stock Quantity</th>
                  <th>Prescription Yes/No</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>SKU-000001</td>
                  <td>Product1</td>
                  <td>Manufacturer1</td>
                  <td>Tablets, Syrup, Powder etc..</td>
                  <td>3 Varieties</td>
                  <td>gm</td>
                  <td>420</td>
                  <td>400</td>
                  <td>250</td>
                  <td>yes</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="bulk-upload-notes">
            <div class="">
              <div class="text-center"> 
                <div class="invertory-content text-center notes">
                  <p>Please download this excel file to upload your bulk product. After when you're done upload that excel file here.</p> 
                </div>
                <div class="excel-logo">
                  <img src="<?php echo base_url(); ?>assets/img/excel-logo.jpg">  
                </div>
                <button type="button" class="btn active-btn btn-round" data-dismiss="modal">Cancle</button>
                <a type="button" href="<?php echo base_url(); ?>assets/bulk_format/" download="products_format.xls" class="btn btn active-btn btn-round" value="Download" onchange="fileUpload()">Download Excel</a>                    
                <!-- <button type="button" class="btn active-btn btn-round"> Download Excel </button> -->
              </div>      
            </div>  
          </div> 
        </div>
      </div> 
    </div>
  </div>   
  <div class="loader-div">    
      <img src="<?php echo base_url(); ?>assets/img/rolling_data.gif" class="image-loader loader-hide">  
  </div>



<script type="text/javascript">
  
  $('#import_form').on('submit', function(event){

    $(".image-loader").removeClass("loader-hide");
    $(".image-loader").addClass("loader-show");
    event.preventDefault();
    $.ajax({
      url:"<?php echo base_url() ?>vendor/import_data",
      method:"POST",
      data:new FormData(this),
      contentType:false,
      cache:false,
      processData:false,
      success:function(data){
        $('#file').val('');
        window.location.href = "<?php echo base_url() ?>vendor/bulk_upload";        
      }
    })
  });

  $('.bulk-excel-upload').on('change', function(event){       
       $( "#file_upload" ).trigger( "click" );

  });


</script>