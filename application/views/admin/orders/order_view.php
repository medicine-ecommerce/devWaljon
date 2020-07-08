  <!-- page content -->
  <div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left order-heading">
          <h3 class="product_form_heading">Viewing order #1002</h3>
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
              <div class="card-box table-responsive">                
                <table id="datatable-responsive" class="table user-detail-table" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                      <th>Billing Address</th>
                      <th>Shiping Address</th>
                      <th>Order Details</th>
                      <th>Shipment Details</th>
                    </tr>
                  </thead>
                    <tbody>
                      <tr>
                        <td></td>
                        <td></td>
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

      

