<?php 
if($product==0){
  $product = [];
}
?>
  <!-- page content -->
  <div class="right_col" role="main">
  <?php if($this->session->flashdata('success')){ ?>
  <div class="custom-success-alert">    
    <a class="remove-alert"> <span class="glyphicon glyphicon-remove custom-remove"></span></a>
    <p>   
      <span class="glyphicon glyphicon-ok-sign"></span>
      <?= $this->session->flashdata('success');?> 
    </p>
  </div>
  <?php }?>
  <?php if($this->session->flashdata('error')){ ?>
  <div class="custom-error-alert">    
    <a class="remove-red-alert"><span class="glyphicon glyphicon-remove custom-remove"></span></a>
    <span class="glyphicon glyphicon-warning-sign"></span>
    <?= $this->session->flashdata('error');?> 
  </div>
  <?php }?>
    <!-- top tiles -->
    <div class="row">
      <div class="tile_count">
        <h5 class="dashboard-head tile_stats_count">Overview</h5>
          <div class="white-list">
            <div class="col-md-4 col-sm-4 col-xs-6">
              <div class="white-box">
                <div class="link-icon-btn">
                  <span class="pull-right"> 
                    <i class="fa fa-external-link"></i>
                  </span>
                </div>
                <div>
                  <div class="count pull-left">
                    <h2>192</h2>
                    <span class="count_bottom">Pending Orders</span>
                  </div>
                  <div class="count pull-right">
                    <i class="fa fa-file-text-o"></i>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-6">
              <div class="white-box">
                <div class="link-icon-btn">
                  <span class="pull-right"> 
                    <i class="fa fa-external-link"></i>
                  </span>
                </div>
                <div>  
                  <div class="count pull-left">
                    <h2>245</h2>
                    <span class="count_bottom">Pending RX Orders</span>
                  </div>
                  <div class="count pull-right user-icon">
                    <i class="fa fa-file-excel-o"></i>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-6">
              <div class="white-box">
                <div class="link-icon-btn">
                  <span class="pull-right"> 
                    <i class="fa fa-external-link"></i>
                  </span>
                </div>
                <div> 
                  <div class="count pull-left">
                    <h2>71</h2>
                    <span class="count_bottom">Cancel Orders</span>
                  </div>
                  <div class="count pull-right user-icon">
                    <i class="fa fa-file-excel-o"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <div class="vendor-dash-overview">
          <h5 class="dashboard-head tile_stats_count">Overview</h5>
          <div class="col-md-4 col-sm-4 col-xs-6">
            <div class="dash-box blue-box">
              <div class="count pull-left">
                <h2>192</h2>
                <span class="count_bottom">In Stock</span>
              </div>
              <div class="count pull-right">
                <i class="fa fa-cube"></i>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-6">
            <div class="dash-box orange-box">
              <div class="count pull-left">
                <h2>245</h2>
                <span class="count_bottom">Out of stock</span>
              </div>
              <div class="count pull-right user-icon">
                <i class="fa fa-truck"></i>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-6">
            <div class="dash-box light-green-box">
              <div class="count pull-left">
                <h2>71</h2>
                <span class="count_bottom">Low Inventory</span>
              </div>
              <div class="count pull-right user-icon">
                <i class="fa fa-sticky-note-o"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /top tiles -->
    <div class="dashboard-section">
      <div class="row" >
        <div class="col-md-6 col-sm-6 col-xs-12 custom-col-xs">
          <div class="table-data">
            <h5 class="dashboard-head tile_stats_count">Revenue</h5> 
            <div class="pull-right">
              <div id="gender" class="btn-group revenue-btn" data-toggle="buttons">
                <label class="btn label-btn active" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                  <input type="radio" name="graph" value="monthly" class="join-btn"> &nbsp; Monthly &nbsp;
                </label>
                <label class="btn label-btn" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                  <input type="radio" name="graph" value="weekly" class="join-btn"> Weekly
                </label>
              </div>
              <p class="revenu-heading">Total Revenue</p>
              <h3 class="revenu-count"><i class='fas fa-rupee-sign'></i> 1,4877874</h3>
            </div>
            <div class="graph x_panel">
              <div class="x_content2">
                <div id="graph_line" class="graph_line"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12 custom-col-xs">
          <div class="table-data">
            <div class="ven-dash-tab"> 
              <h5 class="dashboard-head tile_stats_count">Stock Details</h5> 
              <div class="pull-right">
                <div id="gender" class="btn-group stock-btn" data-toggle="buttons">
                  <label class="btn label-btn active" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                    <input type="radio" name="graph" value="monthly" class="join-btn"> &nbsp; In Stock &nbsp;
                  </label>
                  <label class="btn label-btn" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                    <input type="radio" name="graph" value="weekly" class="join-btn"> Out of Stock
                  </label>
                  <label class="btn label-btn" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                    <input type="radio" name="graph" value="weekly" class="join-btn"> Low Inventory
                  </label>
                </div> 
              </div>
            </div>
            <div class="card-box table-responsive dashboard-table">
              <table id="datatable" class="table user-detail-table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Product Name</th>
                    <th>Brand</th>
                    <th>Manufacturer</th>
                    <th>Stock Available</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($product as $row ) {
                         ?>
                  <tr>
                    <td><?php echo $row->id; ?></td>
                    <td><?php echo $row->name; ?></td>
                    <td></td>
                    <td><?= $row->manufacturer_name; ?></td>
                    <td><?= $row->quantity ?></td>
                    <td>
                      <span>
                        <a href="#" >
                          <button type="button"  data-toggle="tooltip" data-placement="top" title="" data-original-title="Refill"><i class="fa fa-pencil"></i></button>
                        </a> 
                      </span> 
                      <span>
                        <a href="<?php echo base_url('vendor/product_delete/'.$row->id); ?>" onclick="return confirm('Are you sure？')" >
                          <button type="button"  data-toggle="tooltip" data-placement="top" title="" data-original-title="Remove"><i class="fa fa-trash"></i></button>
                        </a>
                      </span>
                    </td>
                  </tr>
                <?php } ?>
                </tbody>
              </table>
            </div>      
          </div>
        </div>
      </div>
    </div> 
  </div>
  <!-- /page content -->
  <script type="text/javascript">
    $(document).ready(function(){
    // var id = document.getElementsByClassName("hid_id")[0].value;
    // if(id!=''){
    //  $('#error-myModal').modal('show'); 
    // }          
    $('.remove-alert').click(function() {
        $('.custom-success-alert').fadeOut("slow")
    })
    setInterval(function () {
        $('.custom-success-alert').fadeOut("slow")
        }, 7000);
        
        $('.remove-red-alert').click(function() {
        $('.custom-error-alert').fadeOut("slow")
    })
    setInterval(function () {
        $('.custom-error-alert').fadeOut("slow")
        }, 7000);

    });



  </script>
  <script>
  function openForm() {
    document.getElementById("myForm").style.display = "block";
  }

  function closeForm() {
    document.getElementById("myForm").style.display = "none";
  }
</script>