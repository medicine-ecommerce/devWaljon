<?php 
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

Class Shiprocket extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->model('Admin_model','Admin');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');

        // if (empty($this->session->userdata('user_id')) && $this->router->fetch_method()!='index' && $this->router->fetch_method() !='adminLogin') {
        //     redirect(base_url('admin'));
        // }

    }
    public function getAuthToken()
    {   
    	$curl = curl_init();
		curl_setopt_array($curl, array(
		CURLOPT_URL =>"https://apiv2.shiprocket.in/v1/external/auth/login",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING =>"",
		CURLOPT_MAXREDIRS =>10,
		CURLOPT_TIMEOUT =>0,
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_HTTP_VERSION =>CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "POST",
		CURLOPT_POSTFIELDS =>"{\n \"email\":\"saimedicinesship_api@gmail.com\",\n \"password\":\"newrocket0\"\n}",
		//CURLOPT_POSTFIELDS =>"{\n \"email\":\"mausam.api@gmail.com\",\n \"password\":\"mausam@123\"\n}",
		CURLOPT_HTTPHEADER =>array(
		"Content-Type: application/json" ),));
		$response = curl_exec($curl);
		curl_close($curl);
		$ATUTH = json_decode($response);
		return $ATUTH->token;

    }

    public function shiping_order()
    {   
    	
    	$AUTHTOKEN = $this->getAuthToken();

        $orderData = $this->Admin->shippingOrderData($this->input->post('order_id'));        
        
        $orderData['length'] = $this->input->post('length');
		$orderData['breadth'] = $this->input->post('breadth');
		$orderData['height'] = $this->input->post('height');
		$orderData['weight'] = $this->input->post('weight');

		$curl = curl_init();

		curl_setopt_array($curl, array(
		CURLOPT_URL =>"https://apiv2.shiprocket.in/v1/external/orders/create/adhoc",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING =>"",
		CURLOPT_MAXREDIRS =>10,
		CURLOPT_TIMEOUT =>0,
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_HTTP_VERSION =>CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "POST",
		CURLOPT_POSTFIELDS =>json_encode($orderData),
		CURLOPT_HTTPHEADER =>array(
		"Content-Type: application/json",
		"Authorization:Bearer ".$AUTHTOKEN." "),));
		$response = curl_exec($curl);
		curl_close($curl);
		$responseShipping = json_decode($response);
		
			
		if($responseShipping->status_code==1){

			// $data['ids'] = array($responseShipping->order_id);			
			$invoice = $this->invoice($responseShipping->order_id);
			$returnData = array('shiprocket_order_id'=>$responseShipping->order_id,'shiprocket_shipment_id'=>$responseShipping->shipment_id,'shiprocket_onboarding_completed_now'=>$responseShipping->onboarding_completed_now,'shiprocket_courier_company_id'=>$responseShipping->courier_company_id,'shiprocket_courier_name'=>$responseShipping->courier_name,'shiprocket_invoice_url'=>$invoice,'status'=>'on_shipping','length'=>$this->input->post('length'),'breadth'=>$this->input->post('breadth'),'height'=>$this->input->post('height'),'weight'=>$this->input->post('weight'));

			$exist = $this->Admin->getRowData('orders','id',array('order_number'=>$orderData['order_id']));			
			if(!empty($exist)){
				//$result = $this->Admin->insertData('shiprocket_order',$returnData);
				$update = $this->Admin->updateData('orders',$returnData,array('order_number'=>$orderData['order_id']));

				if($update){
					echo json_encode(array('status'=>1,'data'=>$responseShipping));
	            	return ;
				}
			}else{
					echo json_encode(array('status'=>0,'msg'=>'order Exist'));
			}  
		}else{
				echo $response;
				echo json_encode(array('status'=>0,'msg'=>'Could not place order'));
				return ;
		}

        //$this->orderPlaceToShipping($data['shipping_order']);

        //$this->load->view('admin/shiping_order',$data);
        // $this->Admin();
    }
    public function shiping_cancel()
    {   
    	// $this->generate_label();
    	// die();
    	$AUTHTOKEN = $this->getAuthToken();
    	$id = $this->input->post('order_number');

    	
    	$shippingOrderNumber = $this->Admin->getRowData('orders','shiprocket_order_id,order_number',array('id'=>$id)); 
    	
    	//$shippingOrderNumber = $this->Admin->getRowData('shiprocket_order','shiprocket_order_id',array('order_id'=>$orderNumber->order_number)); 

    	
    	if(!empty($shippingOrderNumber->shiprocket_order_id)){

	        $curl = curl_init();
			curl_setopt_array($curl, array(
			CURLOPT_URL =>"https://apiv2.shiprocket.in/v1/external/orders/cancel",
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING =>"",
			CURLOPT_MAXREDIRS =>10,
			CURLOPT_TIMEOUT =>0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION =>CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "POST",
			CURLOPT_POSTFIELDS =>'{
			  "ids": ["'.$shippingOrderNumber->shiprocket_order_id.'"]}',
			CURLOPT_HTTPHEADER =>array(
			"Content-Type: application/json",
			"Authorization:Bearer ".$AUTHTOKEN." "),));
			$response = curl_exec($curl);
			curl_close($curl);
			
			$ordersCancel = json_decode($response);
			if($ordersCancel->status_code=='200'){
							
				//$this->Admin->updateData('shiprocket_order',array('order_status'=>'cancel'),array('shiprocket_order_id'=>$shippingOrderNumber->shiprocket_order_id));
				$this->Admin->updateData('orders',array('status'=>'cancel'),array('shiprocket_order_id'=>$shippingOrderNumber->shiprocket_order_id));

				echo json_encode(array('status'=>1,'message'=>$ordersCancel->message));
	            return ;
			}else{
				echo json_encode(array('status'=>0,'message'=>$ordersCancel->message));
	            return ;
			}			
		}else{
			if(!empty($shippingOrderNumber->order_number)){				
				$this->Admin->updateData('orders',array('status'=>'cancel'),array('order_number'=>$shippingOrderNumber->order_number));
				echo json_encode(array('status'=>1,'message'=>'Order Successfully cancel'));
	            return ;
			}	
		}
        //$this->orderPlaceToShipping($data['shipping_order']);

        //$this->load->view('admin/shiping_order',$data);
        // $this->Admin();
    }

    public function invoice($data)
    {   
    	$AUTHTOKEN = $this->getAuthToken();
    	$curl = curl_init();
		curl_setopt_array($curl, array(
		CURLOPT_URL =>"https://apiv2.shiprocket.in/v1/external/orders/print/invoice",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING =>"",
		CURLOPT_MAXREDIRS =>10,
		CURLOPT_TIMEOUT =>0,
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_HTTP_VERSION =>CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "POST",
		CURLOPT_POSTFIELDS =>'{
		  "ids": ["'.$data.'"]}',
		CURLOPT_HTTPHEADER =>array(
		"Content-Type: application/json",
		"Authorization:Bearer ".$AUTHTOKEN." "),));
		$response = curl_exec($curl);
		curl_close($curl);
		$invoice = json_decode($response);
		return $invoice->invoice_url;
    }
    public function shiping_order_return()
    {   
    	
    	$AUTHTOKEN = $this->getAuthToken();
    	$id = $this->input->post('order_number');    	
    	$shippingOrderNumber = $this->Admin->getRowData('orders','shiprocket_order_id,order_number',array('id'=>$id));     	
    	if(!empty($shippingOrderNumber)){

			$curl = curl_init();
			curl_setopt_array($curl, array(
			CURLOPT_URL =>"https://apiv2.shiprocket.in/v1/external/orders/show/".$shippingOrderNumber->shiprocket_order_id,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING =>"",
			CURLOPT_MAXREDIRS =>10,
			CURLOPT_TIMEOUT =>0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION =>CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "GET",
			// CURLOPT_POSTFIELDS =>'{
			//   "ids": ["'.$shippingOrderNumber->shiprocket_order_id.'"]}',
			CURLOPT_HTTPHEADER =>array(
			"Content-Type: application/json",
			"Authorization:Bearer ".$AUTHTOKEN." "),));
			$response = json_decode(curl_exec($curl));
			curl_close($curl);
			$retrivedData = $response->data;


		
			$now = new DateTime();
			$now->setTimezone(new DateTimezone('Asia/Kolkata'));
			
			

			$returnData['order_id']			=	'RETURNORDER'. rand(10000,99999999); 
			$returnData['order_date']		= 	$now->format('d-m-Y H:i:s') ;
			$returnData['channel_id']		=	$retrivedData->channel_id ;
			$returnData['pickup_customer_name']	= $retrivedData->customer_name ;
			// $returnData['pickup_last_name']= $retrivedData->customer_name ;
			$returnData['pickup_address']	= $retrivedData->customer_address ;
			$returnData['pickup_address_2']	= $retrivedData->customer_address_2 ;
			$returnData['pickup_city']		= $retrivedData->customer_city ;
			$returnData['pickup_state']		= $retrivedData->customer_state ;
			$returnData['pickup_country']	= $retrivedData->customer_country ;
			$returnData['pickup_pincode']	= $retrivedData->customer_pincode ;
			$returnData['pickup_email']		= $retrivedData->customer_email ;
			$returnData['pickup_phone']		= $retrivedData->customer_phone ;
			$returnData['pickup_isd_code']	= "91" ;
			$returnData['pickup_location_id']= $retrivedData->pickup_location_id ;

			$returnData['shipping_customer_name']= $retrivedData->pickup_address->name ;
			// $returnData['shipping_last_name']= $retrivedData->pickup_location_id
			$returnData['shipping_address']		= $retrivedData->pickup_address->address ;
			$returnData['shipping_address_2']	= $retrivedData->pickup_address->address_2 ;
			$returnData['shipping_city']		= $retrivedData->pickup_address->city ;
			$returnData['shipping_country']		= $retrivedData->pickup_address->country ;
			$returnData['shipping_pincode']		= $retrivedData->pickup_address->pin_code ;
			$returnData['shipping_state']		= $retrivedData->pickup_address->state ;
			$returnData['shipping_email']		= $retrivedData->pickup_address->email ;
			$returnData['shipping_isd_code']	= "91";
			$returnData['shipping_phone']		= $retrivedData->pickup_address->phone ;

			$returnData['payment_method']		= $retrivedData->payment_method ;
			$returnData['total_discount']		= $retrivedData->discount ;	
			$returnData['sub_total']			= $retrivedData->total;
			$returnData['length']				= $retrivedData->shipments->length;
			$returnData['breadth']				= $retrivedData->shipments->breadth;
			$returnData['height']				= $retrivedData->shipments->height;
			$returnData['weight']				= $retrivedData->shipments->weight;

			foreach ($retrivedData->products as $key => $value) {
					$returnData['order_items'][$key]['sku'] = $value->sku;			
					$returnData['order_items'][$key]['name'] = $value->name;			
					$returnData['order_items'][$key]['units'] = 1;			
					$returnData['order_items'][$key]['selling_price'] = $value->price;			
					$returnData['order_items'][$key]['discount'] = $value->discount;			
					$returnData['order_items'][$key]['hsn'] = $value->hsn;			
			}		
				//$ordersCancel = json_decode($response);

	    	if(!empty($retrivedData)){

		        $curl = curl_init();
				curl_setopt_array($curl, array(
				CURLOPT_URL =>"https://apiv2.shiprocket.in/v1/external/orders/create/return",
				CURLOPT_RETURNTRANSFER => true,
				CURLOPT_ENCODING =>"",
				CURLOPT_MAXREDIRS =>10,
				CURLOPT_TIMEOUT =>0,
				CURLOPT_FOLLOWLOCATION => true,
				CURLOPT_HTTP_VERSION =>CURL_HTTP_VERSION_1_1,
				CURLOPT_CUSTOMREQUEST => "POST",
				CURLOPT_POSTFIELDS =>json_encode($returnData),			
				CURLOPT_HTTPHEADER =>array(
				"Content-Type: application/json",
				"Authorization:Bearer ".$AUTHTOKEN." "),));
				$response = curl_exec($curl);
				curl_close($curl);
				
				$orderReturn = json_decode($response);

				if($orderReturn->status_code=='21'){
					$returnDataArr = array('shiprocket_return_order_id'=>$orderReturn->order_id,'shiprocket_return_shipment_id'=>$orderReturn->shipment_id,'shipment_return_status'=>$orderReturn->status,'status'=>'return');
					$update = $this->Admin->updateData('orders',$returnDataArr,array('order_number'=>$shippingOrderNumber->order_number));
					echo json_encode(array('status'=>1,'message'=>'Successfully return'));
		            return ;
				}else{
					echo json_encode(array('status'=>0,'message'=>'Error'));
		            return ;
				}
				// return $invoice->invoice_url;
			}
		}
        //$this->orderPlaceToShipping($data['shipping_order']);

        //$this->load->view('admin/shiping_order',$data);
        // $this->Admin();
    }

    public function generateLabel(){
		
		$AUTHTOKEN = $this->getAuthToken();    	
    	$orderData = $this->Admin->shippingOrderData(32);        


    	$curl = curl_init();
		curl_setopt_array($curl, array(
		CURLOPT_URL =>"https://apiv2.shiprocket.in/v1/external/shipments/create/forward-shipment",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING =>"",
		CURLOPT_MAXREDIRS =>10,
		CURLOPT_TIMEOUT =>0,
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_HTTP_VERSION =>CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "POST",
		CURLOPT_POSTFIELDS =>json_encode($orderData),
		// CURLOPT_POSTFIELDS =>'{
		//   "shipment_id": ["50406293"]}',
		CURLOPT_HTTPHEADER =>array(
		"Content-Type: application/json",
		"Authorization:Bearer ".$AUTHTOKEN." "),));
		$response = curl_exec($curl);
		curl_close($curl);
		print_r($response);
		// $invoice = json_decode($response);
		// return $invoice->invoice_url;
    }
    public function forwardShipment(){
		
		$AUTHTOKEN = $this->getAuthToken();    	
    	$orderData = $this->Admin->shippingOrderData(32);        


    	$curl = curl_init();
		curl_setopt_array($curl, array(
		CURLOPT_URL =>"https://apiv2.shiprocket.in/v1/external/shipments/create/forward-shipment",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING =>"",
		CURLOPT_MAXREDIRS =>10,
		CURLOPT_TIMEOUT =>0,
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_HTTP_VERSION =>CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "POST",
		CURLOPT_POSTFIELDS =>json_encode($orderData),
		// CURLOPT_POSTFIELDS =>'{
		//   "shipment_id": ["50406293"]}',
		CURLOPT_HTTPHEADER =>array(
		"Content-Type: application/json",
		"Authorization:Bearer ".$AUTHTOKEN." "),));
		$response = curl_exec($curl);
		curl_close($curl);
		print_r($response);
		// $invoice = json_decode($response);
		// return $invoice->invoice_url;
    }
    public function getOrderStatus($id){

		
		$getOrderId = $this->Admin->getRowData('orders','order_number',array('id'=>$id));

		if(!empty($getOrderId->order_number)){

			$AUTHTOKEN = $this->getAuthToken();    	
			
			//$orderID = "1596966759857";

	    	$curl = curl_init();
			curl_setopt_array($curl, array(
			CURLOPT_URL =>"https://apiv2.shiprocket.in/v1/external/courier/track?order_id=".$getOrderId->order_number,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING =>"",
			CURLOPT_MAXREDIRS =>10,
			CURLOPT_TIMEOUT =>0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION =>CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "GET",
			// CURLOPT_POSTFIELDS =>json_encode($orderData),
			// CURLOPT_POSTFIELDS =>'{
			//   "shipment_id": ["50406293"]}',
			CURLOPT_HTTPHEADER =>array(
			"Content-Type: application/json",
			"Authorization:Bearer ".$AUTHTOKEN." "),));
			$response = curl_exec($curl);
			curl_close($curl);
			$this->data['track_data'] = json_decode($response);
		}else{
			$this->data['track_data'] = [];
		}
		// echo "<pre>";
		// print_r(json_decode($response));

        $this->middle = 'trackOrder';
        $this->Admin();
		// $invoice = json_decode($response);
		// return $invoice->invoice_url;
    }
    // public function shiping_auth()
    // {        
    //     // $this->middle = 'shipping_auth';
    //     $this->load->view('admin/shipping_auth');
    //     // $this->Admin();
    // }


}
