<?php 
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

Class User extends MY_Controller {

    public function __construct() 
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('User_model','User');
        $this->load->helper(array('form', 'url'));
        $this->load->library(array('ajax_pagination','cart','form_validation')); 
               $this->load->library('pagination');
        $loginMethod = array('cart','checkout');
        if (empty($this->session->userdata('user_id')) && in_array($this->router->fetch_method(), $loginMethod)) {
            redirect(base_url('user'));
        }

        // if (empty($this->session->userdata('user_id'))){ 
        //     // Allow some methods?
        //     $allowed = array('shop','signup','login','category','product_category','filter1','getSearchProduct','product','index','ajaxFilterData','search','getAllProductComments','product_comment','cart','add_to_cart','update_cart');
        //     if (!in_array($this->router->fetch_method(), $allowed)){
        //         redirect(base_url('user/login'));
        //     }
        // }       
    }
    // public function index()
    // {
    //     $this->load->view('user/layout/header'); 
    //     $this->load->view('user/home');	
    //     $this->load->view('user/layout/footer'); 
    // }
    // public function index()
    // {
    //     $this->middle = 'index';
    //     $this->User();
    // }
    public function index()
    {
        $this->data['banner'] = $this->User->getData('banner_images','image',array('status'=>'active'));
        $this->data['brand'] = $this->User->getData('brand','brand_img,id',array('status'=>'active'));
        $this->data['product'] = $this->User->HomeProduct();
        $this->data['home_module'] = $this->User->getRowData('home_module','*',array('id'=>1));
       
        $this->middle = 'index1';
        $this->User();
    }
    public function shop()
    {
        $this->middle = 'shop';
        $this->User();
    }
    public function product($id)
    {   
        $productId = base64_decode($id);          
        $this->data['product'] = $this->User->getProductByID($productId);
        $this->data['alternate_product'] = $this->User->getAlternateBrandsByID();        
        $this->middle = 'product';
        $this->User();
    }
    public function signup()
    {
        $this->load->view('front/signup');
    }
    public function login()
    {
        $this->load->helper('cookie');
        $this->load->view('front/login');
    }
    public function category()
    {   
        $mainCategoryId = base64_decode($this->uri->segment(3));        
        $CategoryId = base64_decode($this->uri->segment(4));        
        $this->data['selected_category_id'] = $CategoryId;
        $this->data['category'] = $this->User->getData('category','id,main_category_id,category_name,status',array('main_category_id'=>$mainCategoryId));
        $this->data['main_category'] = $this->User->getRowData('main_category','category_name',array('id'=>$mainCategoryId));
        $this->data['brand'] = $this->User->getData('brand','id,brand_name,status',array('status'=>'active'));
        $this->data['product_form'] = $this->User->getData('product_form','id,name,status',array('status'=>'active'));
        
        $this->middle = 'category';
        $this->User();        
    }

   
    public function product_category()
    {
        $this->data['sub_category'] = $this->User->getData('subcategory','id,category_id,subcategory,status',array('status'=>'active'));
        $this->data['brand'] = $this->User->getData('brand','id,brand_name,status',array('status'=>'active'));
        $this->data['product_form'] = $this->User->getData('product_form','id,name,status',array('status'=>'active'));
        
        $this->middle = 'filter';
        $this->User();        
    }

    public function ajaxFilterData($rowno)
    {
        $rowperpage = 16;
 
        if($rowno != 0){
          $rowno = ($rowno-1) * $rowperpage;
        }
        // All records count
        $allcount = $this->User->getAllProduct();

        // Get records
        $data['product'] = $this->User->getAllProductWithLimit($rowperpage, $rowno);
     
        // Pagination Configuration
        //$config['target']      = '#dataList'; 
        $config['base_url'] = base_url().'/user/ajaxFilterData';
        $config['use_page_numbers'] = TRUE;
        $config['total_rows'] = $allcount;
        $config['per_page'] = $rowperpage;
        //$config['link_func']   = 'searchFilter'; 

        $config['full_tag_open']    = '<div class="category-pagination category-pagination-section"><nav><ul class="pagination product-category-pagination"><p class="productCount">';
        $config['full_tag_close']   = '</p></ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link"><a class="active">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></a></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tag_close']   = '<span aria-hidden="true"></span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tag_close']   = '</span></li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tag_close']  = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tag_close']   = '</span></li>';

        // Initialize
        $this->pagination->initialize($config); 
     
        $data['pagination'] = $this->pagination->create_links();

        //$data['product'] = $this->User->getAllProductWithLimit($rowno,$rowperpage);
        return $this->load->view('front/product_item',$data);
    }
    public function filter1()
    {
        $this->load->view('user/filter'); 
    }
    public function checkout()
    {
       /* if(empty($this->session->userdata('user_id'))){
            redirect(base_url('user/login'));
        }*/
        // $this->data['user_address'] = $this->User->getData('user_address','address', array('user_id' => '2' ));
        $this->data['user_address'] = $this->User->getData('user_address','id,address,state,country', array('user_id' => $this->session->userdata('user_id') ));
        // print_r($this->data);die();
        $this->middle = 'checkout';
        $this->User();
    }
    public function cart()
    {
        $this->middle = 'cart';
        $this->User();
    }
    public function form()
    {
       
        $this->middle = 'form.php';
        $this->User();
    }
    public function orderListing()
    {
        $this->data['order_list'] = $this->User->orderList();
        
        $this->middle = 'order_listing';
        $this->User();
    }
    public function orderView($id)
    {
        $this->data['order'] = $this->User->OrderView($id);
       /* echo "<pre>";
        print_r($this->data['order']);
        exit();*/
        $this->middle = 'order_view';
        $this->User();
    }

    public function order_with_prescription()
    {
        $this->data['prescription'] = $this->User->getData('order_prescription','prescription',array('user_id'=>$this->session->userdata('user_id'),'is_active'=>1));
        $this->middle = 'order-with-prescription';
        $this->User();
    }
    public function saved_prescription()
    {
        $this->data['prescription'] = $this->User->getData('order_prescription','prescription,id,is_active',array('user_id'=>$this->session->userdata('user_id')));
        $this->middle = 'saved_prescription';
        $this->User();
    }

    public function order_with_prescription_medicine()
    {
        $this->middle = 'order-with-prescription-medicine';
        $this->User();
    }

    public function profile()
    {        

        $this->data['edit_data'] = $this->User->getRowData('users','*',array('id'=>$this->session->userdata('user_id')));
        $this->data['address'] = $this->User->getRowData('user_address','address',array('user_id'=>$this->session->userdata('user_id')));
        $this->middle = 'profile';
        $this->User();
    }
    public function update_profile($userId){
        $user_id = base64_decode($userId);
        
        if ($this->input->server('REQUEST_METHOD') == 'POST'){
                
                if(empty($this->input->post('password'))){                    
                    $this->form_validation->set_rules('full_name', 'First Name', 'trim|required');            
                    $this->form_validation->set_rules('last_name', 'Last Name', 'trim');
                    $this->form_validation->set_rules('mobile', 'mobile', 'trim|required|numeric');
                    $this->form_validation->set_rules('email', 'Email', 'required');
                    $this->form_validation->set_rules('address', 'Addresss', 'required');
                    if ($this->form_validation->run() == FALSE){                    
                        $this->session->set_flashdata('error', validation_errors());      
                    }else{

                        if(!empty($_FILES['profile_image'])){
                            $uploadedImg = $this->User->upload("profile_image","user-profile");
                        }
                        $data = array(                            
                                'last_name'=>$this->input->post('last_name'),
                                'full_name'=>$this->input->post('full_name'),
                                'email'=>$this->input->post('email'),
                                'mobile'=>$this->input->post('mobile'),
                                'address'=>$this->input->post('address'),
                                'image'=>!empty($uploadedImg['file_name']) ? $uploadedImg['file_name'] : $this->input->post('edit_profile_image'),
                            );
                        $addressData = array('address'=>$this->input->post('address'),
                                            'user_id'=>$user_id);
                        $result1 = $this->User->updateData('users',$data,array('id'=>$user_id));

                        $result = $this->User->insertData('user_address',$addressData);
                        if($result1){
                            $this->session->set_flashdata('success', 'Your profile updated ');
                            redirect($_SERVER['HTTP_REFERER']); 
                        }
                }
                    // $exist = $this->Vendor->getData('user_address','id',array('user_id'=>$user_id));
                    // if(empty($exist)){
                    // }


                }else if(!empty($this->input->post('password'))){
                        $result2 = $this->User->updateData('users',array('password'=>md5($this->input->post('password'))),array('id'=>$user_id));
                        if($result2){
                            $this->session->set_flashdata('success', 'Your password updated ');
                            redirect($_SERVER['HTTP_REFERER']); 
                        }
                }

        }
    }

    public function product_comment()
    {        
        if(empty($this->session->userdata('user_id'))){
            echo  json_encode(array('status'=>0,'message'=>'Error','stage'=>0));
            return;
        }

        if(!empty($this->input->post('product_comment'))){
            $result = $this->User->insertData('product_comment',array('comments'=>$this->input->post('product_comment'),'product_id'=>$this->input->post('product_id'),'user_id'=>$this->session->userdata('user_id')));
            if($result){
                echo json_encode(array('status'=>1,'message'=>'Comment inserted'));
            }else{
                echo  json_encode(array('status'=>0,'message'=>'Error'));
            }
        }
     
    }
    public function getAllProductComments($id)
    {
        $data = $this->User->getAllProductComments($id);        
        return  $data;
        
    }
    public function add_to_cart(){
  
        if(!empty($this->input->post('id')))            

            $product = $this->User->getData('product','id,name,category_id,brand_id',array('id'=>$this->input->post('id')));
            $category = $this->User->getData('subcategory','subcategory',array('id'=>$product[0]->category_id ));
            $brand = $this->User->getData('brand','brand_name',array('id'=>$product[0]->brand_id ));
            $price = $this->User->getData('product_item','sale_price',array('product_id'=>$product[0]->id ));
            $product_image = $this->User->getData('product_images','image',array('product_id'=>$this->input->post('id')));

            $data = array(                    
                    'id'     => $this->input->post('id'),
                    'qty'     => $this->input->post('quantity'),
                    'price'   =>$price[0]->sale_price,
                    'name'    => $product[0]->name, 
                    'product_id'=>$product[0]->id, 
                    'image'=>$product_image[0]->image,
                    'category_name'=>$category[0]->subcategory,
                    'brand_name'=>$brand[0]->brand_name,
            );            
            $catInsert = $this->cart->insert($data);              
            $quantity = count($this->cart->contents());
            
            if($catInsert){
                echo json_encode(array('status'=>1,'message'=>'Product Added','quantity'=>$quantity,'cart'=>$this->cart->contents()));
                return;
            }
    }
    public function update_cart(){

        if(!empty($this->input->post('id')))            
            $rowId = "";
            foreach ($this->cart->contents() as $key => $value) {
                foreach ($value as $value1) {                    
                    if($value1==$this->input->post('id')){
                        $rowId = $key;
                    }
                }                          
            }
            if($this->input->post('type')=="minus"){                
                $data = array(                    
                        'rowid'=> $rowId,
                        'qty'  => $this->input->post('quantity'),
                );            
            }else if($this->input->post('type')=="remove"){                
                $data = array(                    
                        'rowid'=> $rowId,
                        'qty'  => 0,
                ); 
            }
            else{
                $data = array(                    
                        'rowid'=> $rowId,
                        'qty'     => $this->input->post('quantity'),
                );           
            }
            $catUpdate = $this->cart->update($data);  
            $quantity = count($this->cart->contents());
            if($catUpdate){                    
                echo json_encode(array('status'=>1,'message'=>'Product Added','quantity'=>$quantity,'cart'=>$this->cart->contents()));
                
                return;
            }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('user/login'));
    }
    public function SaveUserAdddress()
    {        
        $array = array('country'=>$this->input->post('country'),
                        'city'=>$this->input->post('city'),
                        'state'=>$this->input->post('state'),
                        'address'=>$this->input->post('address'),
                        'user_id'=>$this->session->userdata('user_id'));
        echo $this->User->insertData('user_address',$array);
    }
    public function placeorder()
    {
        $array = array('user_id'=>$this->session->userdata('user_id'),
                        'order_number'=> 'ORDER'. rand(10000,99999999),
                        'address_id'=>$this->input->post('address_id'),
                        'created_at'=>date('Y-m-d H:i:s'));
        $lastID = $this->User->insertData('orders',$array);
        if ($lastID) {
          $item = $this->cart->contents();
          $total = 0;
            foreach ($item as $key => $value) {
              $total = $total + $value['subtotal'];
              $data = array('order_id'=>$lastID,
                          'item_id'=>$value['id'],
                          'qty'=>$value['qty'],
                          'price'=>$value['price'],
                          'subtotal'=>$value['subtotal']);
              $this->User->insertData('order_item',$data);                
            }
            $this->User->updateData('orders',array('total_amount'=>$total),array('id'=>$lastID));
            if ($this->input->post('payment_mode')=='online') {
              $data = array('ORDER_ID'=>$array['order_number'],
                            'CUST_ID'=>$this->session->userdata('user_id'),
                            'TXN_AMOUNT'=>$total);
              $this->PaytmPostForm($data);
            }
        }

    } 

    function PaytmPostForm($data)
    {

        // following files need to be included
        require_once(APPPATH . "/third_party/paytmlib/config_paytm.php");
        require_once(APPPATH . "/third_party/paytmlib/encdec_paytm.php");

        $checkSum = "";
        $paramList = array();

        // Create an array having all required parameters for creating checksum.
        $paramList["CALLBACK_URL"] = base_url('user/PaytmResponse');
        $paramList["MID"] = $this->config->item('PAYTM_MERCHANT_MID');
        $paramList["ORDER_ID"] = $data['ORDER_ID'];
        $paramList["CUST_ID"] = $data['CUST_ID'];
        $paramList["INDUSTRY_TYPE_ID"] = 'Retail';
        $paramList["CHANNEL_ID"] = $this->config->item('PAYTM_CHANNEL_ID');
        $paramList["TXN_AMOUNT"] = $data['TXN_AMOUNT'];
        $paramList["WEBSITE"] = $this->config->item('PAYTM_MERCHANT_WEBSITE');
        $checkSum = getChecksumFromArray($paramList,$this->config->item('PAYTM_MERCHANT_KEY'));
        echo "<center><h1>Please do not refresh this page...</h1></center>
            <form method='post' action='".$this->config->item('PAYTM_TXN_URL')."' name='f1'>";
            foreach($paramList as $name => $value) {
              echo '<input type="hidden" name="' . $name .'" value="' . $value .'">';
            }
            echo "<input type='hidden' name='CHECKSUMHASH' value='". $checkSum . "'>
            <script type='text/javascript'>
             document.f1.submit();
            </script>
            </form>";
     }
    public function PaytmResponse()
    {
      if ($this->input->server('REQUEST_METHOD') == 'POST'){
        $paytmChecksum = "";
        $paramList = array();
        $isValidChecksum = "FALSE";
        $paramList = $_POST;
        if ($paramList['STATUS']=='TXN_SUCCESS') {
          $array = array('TXNDATE'=>$paramList['TXNDATE'],
                        'TXNID'=>$paramList['TXNID'],
                        'PAYMENTMODE'=>$paramList['PAYMENTMODE'],
                        'BANKNAME'=>$paramList['BANKNAME'],
                        'GATEWAYNAME'=>$paramList['GATEWAYNAME'],                        
                        'TXNSTATUS'=>'success');
          $this->User->updateData('orders',$array,array('order_number'=>$paramList['ORDERID']));
          $array['ORDERID'] = $paramList['ORDERID'];
          $array['TXNAMOUNT'] = $paramList['TXNAMOUNT'];
          
          $this->data['result'] = $array;
          $this->middle = 'paymentSuccess';
          $this->User();
        }
        else{
          $array = array('TXNDATE'=>(!empty($paramList['TXNDATE']))?$paramList['TXNDATE']:date('Y-m-d H:i:s'),
                        'TXNID'=>$paramList['TXNID'],
                        'RESPMSG'=>$paramList['RESPMSG'],
                        'PAYMENTMODE'=>$paramList['PAYMENTMODE'],
                        'BANKNAME'=>$paramList['BANKNAME'],
                        'GATEWAYNAME'=>$paramList['GATEWAYNAME'],
                        'TXNSTATUS'=>'failed');
          $this->User->updateData('orders',$array,array('order_number'=>$paramList['ORDERID']));
          $array['ORDERID'] = $paramList['ORDERID'];
          $array['TXNAMOUNT'] = $paramList['TXNAMOUNT'];
          $this->data['result'] = $array;
          $this->middle = 'paymentFailed';
          $this->User();
        }
        $this->cart->destroy();
      }
      else{
        redirect(base_url('user/cart'));
      }
    }   
    public function getSearchProduct()
    {

        $data['productOne'] = json_decode($this->User->getSearchProduct());                
        $this->load->view('front/search-priscription-product',$data);
    }
    public function AjaxSavePrescription()
    {
        if (!empty($_FILES['file'])) {
            $data = $this->User->upload('file','prescription');
            $insertData = array('prescription' => 'assets/prescription/'.$data['file_name'],
                'user_id'=> $this->session->userdata('user_id'));
            $this->User->insertData('order_prescription',$insertData);
        }
    }
    public function UpdatePrescription($id,$status)
    {
        $this->User->updateData('order_prescription',array('is_active'=>$status),array('id'=>$id));
    }
    public function AjaxUpdatePrescriptionSession()
    {
        $this->session->set_userdata('prescription_short_desc',$this->input->post('prescription_short_desc'));
        echo true;
    }
    public function search()
    {
        header('Content-Type: application/json');
        $this->db->select('product.name');
        $this->db->from('product');
        $query = $this->db->get();
        $arr = array_column($query->result_array(),"name");

 
        echo json_encode($arr);
 
        /*echo json_encode(
            array(
                "Acura", "Audi", "BMW", "Buick", "Cadillac", "Chevrolet", "Dodge", "Chrysler", "Ford", "GMC", "Hyunday",
                "Infinity", "Jaguar", "Jeep", "Kia Motors", "Land Rover", "Lexus", "Lincoln", "Mazda", "Mercedes-benz",
                "Mitsubishi", "Nissan", "Pontiac", "Porsche", "Saab", "Saturn", "Scion", "Subaru", "Suzuki", "Toyota",
                "Honda", "Hummer", "Mercury", "Mini", "Volkswagen", "Volvo"
            )
        );*/
    }

    public function paymentSuccess()
    {
        $this->middle = 'paymentSuccess';
        $this->User();
    }

    public function paymentFailed()
    {
        $this->middle = 'paymentFailed';
        $this->User();
    }
}
