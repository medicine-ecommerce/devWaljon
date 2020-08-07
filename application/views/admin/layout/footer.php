
        <!-- footer content -->
        <footer>
          <div class="pull-center">
            copyright <i class="fa fa-copyright"></i> 2020. All Right Reserved
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
   

    <!-- jQuery -->    
    <script type="text/javascript">
        $(document).ready(function() {
            $('#datatable1').DataTable();
        } );

        $(document).ready(function() {
            $('#datatable2').DataTable();
        } );
    </script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url(); ?>vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    

     <!-- Datatables -->
    <script src="<?php echo base_url(); ?>vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url(); ?>build/js/custom.min.js"></script>
	      
   <!--  <script src="<?php echo base_url(); ?>vendors/select2/dist/js/select2.full.min.js" type="4ab41406c87f1a08f7eb842c-text/javascript"></script> -->
  </body>
</html>
<script type="text/javascript">
      $(window).click(function(e) {          
          if(e.target.id=='successModal' || e.target.id=='close-admin-success' || e.target.id=='cancelOrder' || e.target.id=='closeOrder'){
              location.reload();        
                  //window.location.href = "<?php echo base_url() ?>user/orderListing";
           }
      });
      
</script>