<?php 

if(!empty($track_data[0])){
	$shipmentDetails = $track_data[0]->tracking_data->shipment_track[0] ;
}else{
	$shipmentDetails = [];
}

?>
<div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left order-heading">
          <h3 class="product_form_heading">Orders > Track Orders</h3>
        </div>
      </div>
      <div class="row">
      	<?php if(empty($track_data)){ ?>
      		<h5>No tracking records</h5>
      	<?php }else{ ?>
      	<div class="col-md-4 col-sm-4">          
          <div class="x_panel">
            <div class="x_title">                 
            <?php if(!empty($shipmentDetails)){ ?>
              <div class="card-boxs">                              	
              	<h6>Pickup Date : <?= $shipmentDetails->pickup_date; ?> 12-06-2020</h6>
                <p>Delivered to <?= $shipmentDetails->delivered_to; ?></p>
                <p>Consignee Name : <?= $shipmentDetails->consignee_name; ?></p>
                <p>Status : <?= $shipmentDetails->current_status; ?></p>
                <h5>Courier Details</h5>
                <p>Name : <?=  $shipmentDetails->courier_agent_details->name; ?></p>
                <p>Phone : <?= $shipmentDetails->courier_agent_details->phone; ?></p>
                <!-- <p>Phone : $shipmentDetails->courier_agent_details->phone</p> -->
              </div>
          	<?php } ?>
            </div>
          </div>
        </div>        
        <div class="col-md-8 col-sm-8">          
          <div class="x_panel">
            <div class="x_title">  
            <?php if(!empty($track_data)){ 
            	foreach ($track_data[0]->tracking_data->shipment_track_activities as $key => $value) { ?>
              <div class="card-box ">                
              	<h4><?= $value->date; ?> </h4>
                <p>Status : <?= $value->status; ?></p>
                <p>Activity : <?= $value->activity; ?></p>
                <p>Location : <?= $value->location; ?></p>
              </div>
          	<?php }} ?>
            </div>
          </div>
        </div>        
    	<?php } ?>
      </div>
    </div>
  </div>