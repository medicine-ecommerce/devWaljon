  <!-- page content -->
  <div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>Category</h3>
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
          <?php if (!empty($this->session->flashdata('error'))) {
            echo '<div class="alert alert-danger">
                  '.$this->session->flashdata('error').'
                </div>';
          }
          elseif (!empty($this->session->flashdata('success'))) {
            echo '<div class="alert alert-success">
                  '.$this->session->flashdata('success').'
                </div>';
          } ?>  
          <div class="x_panel">
            <div class="x_title">
              <div class="clearfix"></div>
            </div>
            <div class="tab-content" id="myTabContent">
              <div class="card-box">                
                <table class="table user-detail-table" cellspacing="0" width="70%">
                  <thead>
                    <tr>
                      <th>Home Categories</th>
                      <th>Product Categories</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td></td>
                      <td></td>  
                    </tr> 
                  </tbody>
                </table>
              </div>
            </div>            
          </div>
        </div>        
      </div>
    </div>
  </div>
  <!-- /page content -->

      
