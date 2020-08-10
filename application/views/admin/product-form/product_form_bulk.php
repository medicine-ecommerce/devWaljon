
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
                    <a type="button" href="<?php echo base_url(); ?>assets/bulk_format/bulk_name_format.xlsx" download="bulk_name_format" class="btn btn active-btn btn-round" value="Download" onchange="fileUpload()">Download</a>
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
                  <th>Brand Name</th>
                  <th>Brand Description</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>My Brand</td>
                  <td>brand descriptions</td>                  
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
                <a type="button" href="<?php echo base_url(); ?>assets/bulk_format/bulk_name_format.xlsx" download="bulk_name_format" class="btn btn active-btn btn-round" value="Download" onchange="fileUpload()">Download Excel</a>                    
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

    var user_type = '<?php echo $this->session->userdata('user_type'); ?>';
    $(".image-loader").removeClass("loader-hide");
    $(".image-loader").addClass("loader-show");
    event.preventDefault();
    $.ajax({
      url:"<?php echo base_url() ?>admin/upload_product_form_bulk",
      method:"POST",
      data:new FormData(this),
      contentType:false,
      dataType: 'JSON',
      cache:false,
      processData:false,
      success:function(data){                
        if(data.status){          
          $('#file').val('');
            if(user_type=='admin'){
                window.location.href = "<?php echo base_url() ?>admin/product_form_list";        
            }else{
              window.location.href = "<?php echo base_url() ?>vendor/product_form_list";        
            }
            
        }else{
          alert('Brand Name Alreay Exist');
          $(".image-loader").removeClass("loader-show");
          $(".image-loader").addClass("loader-hide");
        }
      }
    })
  });

  $('.bulk-excel-upload').on('change', function(event){       
       $( "#file_upload" ).trigger( "click" );

  });


</script>