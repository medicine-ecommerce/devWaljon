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
        $this->load->library(array('ajax_pagination','cart')); 
    }
    // public function index()
    // {
    //     $this->load->view('user/layout/header'); 
    //     $this->load->view('user/home');	
    //     $this->load->view('user/layout/footer'); 
    // }
    public function index()
    {
        $this->middle = 'index';
        $this->User();
    }
    public function index1()
    {
        $this->data['banner'] = $this->User->getData('banner_images','image',array('status'=>'active'));
        $this->data['brand'] = $this->User->getData('brand','brand_img,id',array('status'=>'active'));
        $this->data['product'] = $this->User->HomeProduct();
        
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
        $this->data['product'] = $this->User->getProductByID($id);
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
    
    // public function login_code(){


    //     $this->load->helper('cookie');
    //     if ($this->input->server('REQUEST_METHOD') == 'POST'){            

    //         if(ctype_digit($this->input->post('email'))){                
    //             $this->form_validation->set_rules('email', 'mobile', 'trim|required');    
    //         }else{                
    //             $this->form_validation->set_rules('email', 'email', 'trim|required|valid_email');    
    //         }
    //         // $this->form_validation->set_rules('email', 'Email', 'required|trim');
    //         $this->form_validation->set_rules('password', 'Password', 'required|trim');
            
    //         if ($this->form_validation->run() == FALSE){                                          
    //           $this->session->set_flashdata('error', validation_errors());      
    //         }
    //         else{               
    //             if(empty($this->input->post('remember_password'))){
    //                 delete_cookie("email");                
    //                 delete_cookie("password");                
    //             }else{
    //                     $unexpired_cookie_exp_time = 2147483647 - time();               
    //                     set_cookie('email',base64_encode($this->input->post('email')), $unexpired_cookie_exp_time);
    //                     set_cookie('password',base64_encode($this->input->post('password')), $unexpired_cookie_exp_time);
    //             }
    //             // echo $this->input->post('email');
    //             // die();
    //             $data = array('email'=> $this->input->post('email'),
    //                         'password' =>md5($this->input->post('password')),
    //                         'type' => $this->input->post('type')
    //                         );
    //             $result = $this->Vendor->login($data);
               
    //             if(!empty($result))
    //             {
    //                 if(ctype_digit($this->input->post('email'))){
    //                     $data = array('mobile'=>trim($result->mobile),                                
    //                             'user_id'=>$result->id,
    //                             'user_type'=>$result->type);
    //                 }else{                        
    //                     $data = array('email'=>$result->email,
    //                                 'user_id'=>$result->id,
    //                                 'user_type'=>$result->type);
    //                 }

    //                 $this->session->set_userdata($data);
    //                 // redirect(base_url('admin/dashboard'));
    //                 if ($result->type=='user') {
    //                     redirect('user/index');
    //                 }
    //                 elseif(!empty($result->email) && !empty($result->full_name) && !empty($result->mobile) && !empty($result->address) && $result->is_active > 0 ){
    //                     redirect('/vendor/vendor_dashboard/', 'refresh');
    //                 }else if(!empty($result->mobile) && !empty($result->email) && !empty($result->full_name) && $result->is_active == 0 ){
    //                     redirect('/vendor/profile_waiting_approval', 'refresh');
    //                 }
    //                 else{                        
    //                     redirect('/vendor/personalDetails/', 'refresh');
    //                 }
    //             }
    //             else
    //             {
    //                 $this->session->set_flashdata('error', 'Incorrect Username or password');
    //                 redirect($_SERVER['HTTP_REFERER']);    
    //             }
    //         } 
    //     }           
    // }
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
        // Row per page
        $rowperpage = 50;
        // Row position
        if($rowno != 0){
          $rowno = ($rowno-1) * $rowperpage;
        }
        // All records count
        $allcount = $this->User->getAllProduct();

        // Get records
        $users_record = $this->User->getAllProductWithLimit($rowno,$rowperpage);
     
        // Pagination Configuration
        $config['target']      = '#dataList'; 
        $config['base_url'] = base_url().'/user/ajaxFilterData';
        $config['use_page_numbers'] = TRUE;
        $config['total_rows'] = $allcount;
        $config['per_page'] = $rowperpage;
        $config['link_func']   = 'searchFilter'; 

        // Initialize
        $this->ajax_pagination->initialize($config); 
     
        $data['pagination'] = $this->ajax_pagination->create_links();

        $data['product'] = $this->User->getAllProductWithLimit($rowno,$rowperpage);
        return $this->load->view('front/product_item',$data);
    }
    public function filter1()
    {
        $this->load->view('user/filter'); 
    }
    public function checkout()
    {
        // if(empty($this->session->userdata('user_id'))){
        //     redirect(base_url('user/login'));
        // }
        // $this->data['user_address'] = $this->User->getData('user_address','address', array('user_id' => '2' ));
        $this->data['user_address'] = $this->User->getData('user_address','id,address,state,country', array('user_id' => $this->session->userdata('user_id') ));
        // print_r($this->data);die();
        $this->middle = 'despatch';
        $this->User();
    }
    public function cart()
    {
        $this->middle = 'cart';
        $this->User();
    }

    public function orderListing()
    {
        $this->middle = 'order_listing';
        $this->User();
    }
    public function profile()
    {
        $this->middle = 'profile';
        $this->User();
    }

    public function product_comment()
    {        

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
            }else{
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
    public function SaveUserAdddress()
    {        
        $array = array('country'=>$this->input->post('country'),
                        'city'=>$this->input->post('city'),
                        'state'=>$this->input->post('state'),
                        'address'=>$this->input->post('address'),
                        'user_id'=>$this->session->userdata('user_id'));
        echo $this->User->insertData('user_address',$array);
    }

}
