  <div class="modal fade" id="successModal" role="dialog">
    <div class="modal-dialog registration-done order-success-modal">
    <!-- Modal content-->
      <div class="modal-content welldon-modal">
          <!-- <h4 class="modal-title">Modal Header</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button> -->
        
        <div class="modal-body image-content">
          <div class="text-center">
          <img src="<?php echo base_url(); ?>assets/img/success.gif" class="success-order-image" id="preview">
          <h1> Order Placed</h1>   
          <p>Congratulations your order shipping done</p>
        </div>
          
        <div class="text-center succes-buttons">
          <button type="button" class="btn btn-default view-order-button" ><a href="<?php echo base_url(); ?>user/orderListing" >View Order</a></button>

          <button type="button" class="btn btn-default submit_button cancel-button" data-dismiss="modal" ng-href="<?php echo base_url(); ?>user" >Close</button>
        </div>
        </div>
      </div>  
    </div>
  </div>
  <script type="text/javascript">
    $(document).ready(function(){
        $('#successModal').modal('show');
    });
    
  </script>