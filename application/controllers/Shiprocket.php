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

    public function shiping_order()
    {   
    	
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
		"Authorization:Bearer ".$this->config->item('SHIPROCKET_AUTH_TOKEN')." "),));
		$response = curl_exec($curl);
		curl_close($curl);
		$responseShipping = json_decode($response);
		
			
		if($responseShipping->status_code==1){

			// $data['ids'] = array($responseShipping->order_id);			
			$invoice = $this->invoice($responseShipping->order_id);
			$returnData = array('order_id'=>$orderData['order_id'],'shiprocket_order_id'=>$responseShipping->order_id,'shipment_id'=>$responseShipping->shipment_id,'status'=>$responseShipping->status,'status_code'=>$responseShipping->status_code,'onboarding_completed_now'=>$responseShipping->onboarding_completed_now,'awb_code'=>$responseShipping->awb_code,'courier_company_id'=>$responseShipping->courier_company_id,'courier_name'=>$responseShipping->courier_name,'invoice_url'=>$invoice);
			$exist = $this->Admin->getRowData('shiprocket_order','order_id',array('order_id'=>$responseShipping->order_id ));			
			if(empty($exist)){
				$result = $this->Admin->insertData('shiprocket_order',$returnData);
				if($result){
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
    public function shiping_cancel($id)
    {   
    	
    	
    	$orderNumber = $this->Admin->getRowData('orders','order_number',array('id'=>$id)); 

    	$shippingOrderNumber = $this->Admin->getRowData('shiprocket_order','shiprocket_order_id',array('order_id'=>$orderNumber->order_number)); 

    	
    	if(!empty($shippingOrderNumber)){

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
			"Authorization:Bearer ".$this->config->item('SHIPROCKET_AUTH_TOKEN')." "),));
			$response = curl_exec($curl);
			curl_close($id);
			$invoice = json_decode($response);
			return $invoice->invoice_url;
		}
        //$this->orderPlaceToShipping($data['shipping_order']);

        //$this->load->view('admin/shiping_order',$data);
        // $this->Admin();
    }

    public function invoice($data)
    {   
    	
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
		"Authorization:Bearer ".$this->config->item('SHIPROCKET_AUTH_TOKEN')." "),));
		$response = curl_exec($curl);
		curl_close($curl);
		$invoice = json_decode($response);
		return $invoice->invoice_url;
    }
    public function shiping_auth()
    {        
        // $this->middle = 'shipping_auth';
        $this->load->view('admin/shipping_auth');
        // $this->Admin();
    }

}
