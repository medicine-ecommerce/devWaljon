<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Razorpay extends CI_Controller {
    // construct
    public function __construct() {
        parent::__construct();      
    }
    // index page
    public function index() {
        $data['title'] = 'Razorpay ';  
        $data['productInfo'] = $this->site->getProduct();           
        $this->load->view('razorpay/index', $data);
    }
    
    // checkout page
    public function checkout($id) {
        $data['title'] = 'Checkout payment ';  
        $this->site->setProductID($id);
        $data['itemInfo'] = $this->site->getProductDetails(); 
        $data['return_url'] = site_url().'razorpay/callback';
        $data['surl'] = site_url().'razorpay/success';;
        $data['furl'] = site_url().'razorpay/failed';;
        $data['currency_code'] = 'INR';
        $this->load->view('razorpay/checkout', $data);
    }

    // initialized cURL Request
    private function get_curl_handle($payment_id, $amount)  {
        $url = 'https://api.razorpay.com/v1/payments/'.$payment_id.'/capture';
        $key_id = 'rzp_test_5dkJeHNXcrjQR6';
        $key_secret = 'xBetVQtJpY76G4IHOavZGhSh';
        $fields_string = "amount=$amount";
        //cURL Request
        $ch = curl_init();
        //set the url, number of POST vars, POST data
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_USERPWD, $key_id.':'.$key_secret);
        curl_setopt($ch, CURLOPT_TIMEOUT, 60);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_CAINFO, dirname(__FILE__).'/ca-bundle.crt');
        return $ch;
    }   
        
    // callback method
    public function callback() {        
        if (!empty($this->input->post('razorpay_payment_id')) && !empty($this->input->post('merchant_order_id'))) {
            $razorpay_payment_id = $this->input->post('razorpay_payment_id');
            $merchant_order_id = $this->input->post('merchant_order_id');
            $currency_code = 'INR';
            $amount = $this->input->post('merchant_total');
            $success = false;
            $error = '';
            try {             
                $ch = $this->get_curl_handle($razorpay_payment_id, $amount);
                //execute post
                $result = curl_exec($ch);
                $http_status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
                if ($result === false) {
                    $success = false;
                    $error = 'Curl error: '.curl_error($ch);
                } else {
                    $response_array = json_decode($result, true);
                    //echo "<pre>";print_r($response_array);exit;
                        //Check success response
                        if ($http_status === 200 and isset($response_array['error']) === false) {
                            $success = true;
                            $exp = explode('#',$response_array['description']);
                            $order_number = trim($exp[1]);
                            $array = array('TXNID'=>$response_array['id'],
                                            'TXNSTATUS'=>'success',
                                            'TXNDATE'=>date('Y-m-d'),
                                            'PAYMENTMODE'=>$response_array['method'],
                                            'BANKNAME'=>$response_array['bank'],
                                            'TXN_email'=>$response_array['email'],
                                            'TXN_mobile'=>$response_array['contact']);
                            $this->db->where('order_number',$order_number);
                            $this->db->update('orders',$array);

                        } else {
                            $success = false;
                            if (!empty($response_array['error']['code'])) {
                                $error = $response_array['error']['code'].':'.$response_array['error']['description'];
                            } else {
                                $error = 'RAZORPAY_ERROR:Invalid Response <br/>'.$result;
                            }
                        }
                }
                //close connection
                curl_close($ch);
            } catch (Exception $e) {
                $success = false;
                $error = 'OPENCART_ERROR:Request to Razorpay Failed';
            }
            if ($success === true) {
                if(!empty($this->session->userdata('ci_subscription_keys'))) {
                    $this->session->unset_userdata('ci_subscription_keys');
                 }
                if (!$order_info['order_status_id']) {
                    redirect($this->input->post('merchant_surl_id'));
                } else {
                    redirect($this->input->post('merchant_surl_id'));
                }

            } else {
                redirect($this->input->post('merchant_furl_id'));
            }
        } else {
            echo 'An error occured. Contact site administrator, please!';
        }
    } 
    public function success() {
        
        $this->load->view('front/layout/header');
        $this->load->view('front/order_placed');
        $this->load->view('front/layout/footer');
    }  
    public function failed() {
        $this->load->view('front/layout/header');
        $this->load->view('front/paymentFailed');
        $this->load->view('front/layout/footer');
        
    } 
}
?>
