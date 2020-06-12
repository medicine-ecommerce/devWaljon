  <!-- page content -->
  <div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>Inventory > Linking</h3>
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
            <div class="tab-content" id="myTabContent">
              <div class="card-box">                
                <table class="table user-detail-table linking-table" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Home Categories</th>
                      <th></th>
                      <th>Product Categories</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Featured Brans</td>
                      <td></td>
                      <td>
                        <select class="form-control">
                          <option>Select Brands</option>
                          <option>Option one</option>
                          <option>Option two</option>
                          <option>Option three</option>
                          <option>Option four</option>
                        </select>
                      </td>  
                    </tr> 
                  </tbody>
                </table>
              </div>
              <div class="pull-right padding-top50">
                <div class="submit-btn">
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
  <!-- /page content -->

      
