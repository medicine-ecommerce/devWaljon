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
              <div class="order-date-detail">
                <h4>Order Details</h4>
                <ul>
                  <li>
                    Ordered on 29 June 2020
                  </li>
                  <li> | </li>
                  <li>
                    Order #1001
                  </li>
                </ul>
              </div>   
              <div class="order-detail">
                <div class="row">
                  <div class="col-md-4">
                    <div class="order-content"> 
                      <div class="order-head">
                        <h4>Shipping Address</h4>
                      </div>
                      <p>Name</p>
                      <p>Address</p>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="order-content"> 
                      <div class="order-head">
                        <h4>Payment Method</h4>
                      </div>
                      <p>Method name</p>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="order-content"> 
                      <div class="order-head">
                        <h4>Order Summary</h4>
                      </div>
                      <div class="price-details"> 
                        <p><span class="order-sum"> Item(s) Subtotal : </span> <span><i class="fa fa-inr"></i> 126548</span></p>
                        <p><span class="order-sum"> Shipping : </span> <span><i class="fa fa-inr"></i> 0</span></p>
                        <p><span class="order-sum"> Total : </span> <span><i class="fa fa-inr"></i> 126548</span></p>
                        <p><span class="order-sum"> <strong>Grand Total : </strong> </span> <span><strong><i class="fa fa-inr"></i> 126548 </strong></span></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div> 
              <div class="order-detail">
                <div>
                  <h4 class="deliver-date">Delivered - 26/2/2020</h4>
                </div>
                <div class="card-box table-responsive">                
                  <table class="table order-detail-table">
                    <tbody>
                      <tr>
                        <td style="width: 15%">
                          <div class="order-product-img">
                            <img src="<?php echo base_url(); ?>assets/brand-images/da1d850aff1b5994c62200e0d3e34ffa.jpg">
                          </div>
                        </td>
                        <td>
                          <div class="order-product-detail">
                            <h6 class="order-product-name"> name</h6>
                            <p>Price- <i class="fa fa-inr"></i> 2000/-</p>
                          </div>
                        </td>
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
  </div>
  <!-- /page content -->

      

