<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
Class Vendor extends MY_Controller {

    public function __construct() 
    {
        parent::__construct();
        $this->load->database();
        // $this->load->model('Admin_model');
        $this->load->helper(array('form', 'url','custome'));
        $this->load->library('form_validation');  
        $this->load->model('Vendor_model','Vendor');        
        $this->load->model('Excel_import_model');        
        $this->load->library('excel');  
        $this->load->library('upload');

        if (empty($this->session->userdata('user_id'))){ 
            // Allow some methods?
            $allowed = array('forgot_password','vendorregister','vendor_login','forgotPassword','createNewPassword','forgotPasswordCheckEmail','checkExistEmail','checkExistMobile','vendorLogin');
            if (!in_array($this->router->fetch_method(), $allowed)){
                redirect(base_url('vendor/vendor_login'));
            }
        }

    }

    public function index()
    {
        $this->load->helper('cookie');
    	$this->load->view('vendor/vandorregister');        
    } 

    public function forgot_password()
    {        
        $this->load->view('vendor/forgot-password');
    }     
    public function forgotPassword()
    {

        if(!empty($this->input->post('email'))){               
                if(empty($this->input->post('verification_code')) && !empty($this->input->post('email'))){                    
                    $this->session->set_userdata('temp_verification_code',999999);                    
                    echo json_encode(array('status'=>1,'message'=>'Verification code sent to your email id','stage'=>1));
                    return;

                }else if(!empty($this->input->post('verification_code'))){
                    if($this->input->post('verification_code')==$this->session->userdata('temp_verification_code')){                        
                        echo json_encode(array('status'=>1,'message'=>'updated','stage'=>2));
                        // $data = array('email'=>$this->input->post('email'));
                        // $updated = $this->Vendor->updateData('users',$data,array('users.id'=>$this->session->userdata('user_id')));
                        // if($updated){
                        //     return;
                        // }
                    }else{
                        echo json_encode(array('status'=>0,'message'=>'Incorrect OTP Code','stage'=>3));
                        return ;

                    }
                }

        
       }
    }   
    public function createNewPassword()
    {
        $this->load->helper('cookie');
        if(!empty($this->input->post('email'))){                            

                if(!empty($this->input->post('email'))){
                        
                        $data = array('password'=>md5($this->input->post('password')));
                        $updated = $this->Vendor->updateData('users',$data,array('users.email'=>$this->input->post('email')));

                        if($updated){
                            $data = array('email'=> $this->input->post('email'),
                            'password' =>md5($this->input->post('password'))
                            );
                            delete_cookie("email");                
                            delete_cookie("password");                
                            $result = $this->Vendor->login($data);
                            if(!empty($result))
                            {
                                                       
                                $data = array('email'=>$result->email,
                                            'user_id'=>$result->id,
                                            'user_type'=>$result->type);
                               

                                $this->session->set_userdata($data);
                                // redirect(base_url('admin/dashboard'));
                                if(!empty($result->email) && !empty($result->full_name) && !empty($result->mobile) && !empty($result->address) && $result->is_active > 0 ){
                                    // redirect('/vendor/vendor_dashboard/', 'refresh');
                                    echo json_encode(array('status'=>1,'stage'=>1,'type'=>$result->type));
                                    return;
                                }else if(!empty($result->mobile) && !empty($result->email) && !empty($result->full_name) && $result->is_active == 0 ){
                                    echo json_encode(array('status'=>1,'stage'=>2,'type'=>$result->type));
                                    return;
                                    // redirect('/vendor/profile_waiting_approval', 'refresh');
                                }
                                else{      
                                    echo json_encode(array('status'=>1,'stage'=>3,'type'=>$result->type));
                                    return;                  
                                    // redirect('/vendor/personalDetails/', 'refresh');
                                }
                            }
                            // echo json_encode(array('status'=>1,'message'=>'updated'));
                            // return;
                        }
                    }else{
                        echo json_encode(array('status'=>0,'message'=>'Incorrect OTP Code'));
                        return ;

                    }
                }

        
      
    }
    public function updateEmail()
    {

        if(!empty($this->input->post('update_email'))){                            

                if(empty($this->input->post('verification_code')) && !empty($this->input->post('update_email'))){                    
                    $this->session->set_userdata('temp_verification_code',999999);                    
                    echo json_encode(array('status'=>1,'message'=>'Verification code sent to your email id','stage'=>2));
                    return;

                }else if(!empty($this->input->post('verification_code'))){
                    if($this->input->post('verification_code')==$this->session->userdata('temp_verification_code')){
                        
                        $data = array('email'=>$this->input->post('update_email'));
                        $updated = $this->Vendor->updateData('users',$data,array('users.id'=>$this->session->userdata('user_id')));
                        if($updated){
                            echo json_encode(array('status'=>1,'message'=>'updated','stage'=>4));
                            return;
                        }
                    }else{
                        echo json_encode(array('status'=>0,'message'=>'Incorrect OTP Code','stage'=>3));
                        return ;

                    }
                }

        
       }
    }   
     public function updateMobile()
    {

        if(!empty($this->input->post('update_mobile'))){                            

                if(empty($this->input->post('verification_code')) && !empty($this->input->post('update_mobile'))){                    
                    $this->session->set_userdata('temp_verification_code',999999);                    
                    echo  json_encode(array('status'=>1,'message'=>'Verification code sent to your mobile number','stage'=>1));                    
                    return;

                }else if(!empty($this->input->post('verification_code'))){
                    if($this->input->post('verification_code')==$this->session->userdata('temp_verification_code')){                        
                        $data = array('mobile'=>$this->input->post('update_mobile'));   
                        
                        $updated = $this->Vendor->updateData('users',$data,array('users.id'=>$this->session->userdata('user_id')));                        
                        if($updated){
                            echo json_encode(array('status'=>1,'message'=>'updated','stage'=>4));
                            return;
                        }
                    }else{
                        echo json_encode(array('status'=>0,'message'=>'Incorrect OTP Code','stage'=>3));
                        return ;

                    }
                }

        
       }
    } 
    public function vendorregister()
    {   

        $this->load->helper('cookie');
        if ($this->input->server('REQUEST_METHOD') == 'POST'){            
            
            if(ctype_digit($this->input->post('email'))){                
                $this->form_validation->set_rules('email', 'mobile', 'trim|required|is_unique[users.mobile]');    
            }else{                
                $this->form_validation->set_rules('email', 'email', 'trim|required|valid_email|is_unique[users.email]');    
            }                       
            $this->form_validation->set_rules('password', 'password', 'trim|required');            
            
            if($this->input->post('remember_password')){ 
                $unexpired_cookie_exp_time = 2147483647 - time();               
                set_cookie('email',base64_encode($this->input->post('email')), $unexpired_cookie_exp_time);
                set_cookie('password',base64_encode($this->input->post('password')), $unexpired_cookie_exp_time);
            }
            
            // $this->form_validation->set_rules('mobile', 'mobile', 'required|numeric');
            // $this->form_validation->set_rules('company_name', 'Company Name', 'required');
            // $this->form_validation->set_rules('company_address', 'Company addresss', 'required');
           
            if($this->form_validation->run() == FALSE){                                 
              $this->session->set_flashdata('error', validation_errors());      
              echo json_encode(array('status'=>0,'message'=>validation_errors(),'stage'=>0));
                    return;

            }
            else{ 
                $registrationBy = '';
                if(ctype_digit($this->input->post('email'))){
                    $data = array('mobile'=> trim($this->input->post('email')),
                                  'password'=>md5($this->input->post('password')),
                                  'is_active'=>'0',
                                  'type'=>$this->input->post('type'),
                                  'created_by'=>'sign_up');  
                    $registrationBy = 'mobile';
                }else{
                    $data = array('email'=>$this->input->post('email'),
                                  'password'=>md5($this->input->post('password')),
                                  'is_active'=>'0',
                                  'type'=>$this->input->post('type'),
                                  'created_by'=>'sign_up');  
                    $registrationBy = 'email';
                }

                if(empty($this->input->post('verification_code')) && !empty($this->input->post('email')) && $registrationBy=="mobile"){                    
                    $this->session->set_userdata('temp_verification_code',999999);                    
                    echo  json_encode(array('status'=>1,'message'=>'Verification code sent to your mobile number','stage'=>1));                    
                    return;

                }else if(empty($this->input->post('verification_code')) && !empty($this->input->post('email')) && $registrationBy=="email"){                    
                    $this->session->set_userdata('temp_verification_code',999999);                    
                    echo json_encode(array('status'=>1,'message'=>'Verification code sent to your email id','stage'=>2));
                    return;

                }else if(!empty($this->input->post('verification_code'))){
                    if($this->input->post('verification_code')==$this->session->userdata('temp_verification_code')){
                        $last_id = $this->Vendor->VendorRegistration($data);               
                    }else{
                        echo json_encode(array('status'=>0,'message'=>'Incorrect OTP Code','stage'=>3));
                        return ;

                    }
                }               
                
                if ($last_id > 0) {
                    
                    if ($this->input->post('type')=='user') {
                        if(ctype_digit($this->input->post('email'))){
                            $data = array('mobile'=>trim($result->mobile),                                
                                    'userID'=>$result->id,
                                    'userType'=>$result->type);
                        }else{                        
                            $data = array('email'=>$result->email,
                                        'userID'=>$result->id,
                                        'userType'=>$result->type);
                        }
                    }
                    else{
                        if(ctype_digit($this->input->post('email'))){
                            $data = array('mobile'=>trim($result->mobile),                                
                                    'user_id'=>$result->id,
                                    'user_type'=>$result->type);
                        }else{                        
                            $data = array('email'=>$result->email,
                                        'user_id'=>$result->id,
                                        'user_type'=>$result->type);
                        }
                    }

                    $this->session->set_userdata($data);
                    $this->session->set_flashdata('success', 'Your account successfully created ');
                    
                    if(!empty($this->session->userdata('state'))){
                        echo json_encode(array('status'=>1,'stage'=>4,'state'=>$this->session->userdata('state')));
                    }else{
                        echo json_encode(array('status'=>1,'stage'=>4));
                    }
                    return;
                    // redirect('/Vendor/personalDetails/', 'refresh');
                }
            }            
            //redirect($_SERVER['HTTP_REFERER']); 
        }        
        $this->load->view('vendor/vandorregister');
        //$this->Admin();
    }
    public function vendor_login()
    {
        $this->load->helper('cookie');
        $this->load->view('vendor/vendor_login');    
    }
    
    public function vendorLogin(){

        $this->load->helper('cookie');
        if ($this->input->server('REQUEST_METHOD') == 'POST'){            

            if(ctype_digit($this->input->post('email'))){                
                $this->form_validation->set_rules('email', 'mobile', 'trim|required');    
            }else{                
                $this->form_validation->set_rules('email', 'email', 'trim|required|valid_email');    
            }
            // $this->form_validation->set_rules('email', 'Email', 'required|trim');
            $this->form_validation->set_rules('password', 'Password', 'required|trim');
            
            if ($this->form_validation->run() == FALSE){                                          
              $this->session->set_flashdata('error', validation_errors());      
            }
            else{               
                if(empty($this->input->post('remember_password'))){
                    delete_cookie("email");                
                    delete_cookie("password");                
                }else{
                        $unexpired_cookie_exp_time = 2147483647 - time();               
                        set_cookie('email',base64_encode($this->input->post('email')), $unexpired_cookie_exp_time);
                        set_cookie('password',base64_encode($this->input->post('password')), $unexpired_cookie_exp_time);
                }
                // echo $this->input->post('email');
                // die();
                $data = array('email'=> $this->input->post('email'),
                            'password' =>md5($this->input->post('password')),
                            'type' => $this->input->post('type')
                            );
                $result = $this->Vendor->login($data);
               
                if(!empty($result))
                {
                    if ($this->input->post('type')=='user') {
                        if(ctype_digit($this->input->post('email'))){
                            $data = array('mobile'=>trim($result->mobile),                                
                                    'userID'=>$result->id,
                                    'userType'=>$result->type);
                        }else{                        
                            $data = array('email'=>$result->email,
                                        'userID'=>$result->id,
                                        'userType'=>$result->type);
                        }
                    }
                    else{
                        if(ctype_digit($this->input->post('email'))){
                            $data = array('mobile'=>trim($result->mobile),                                
                                    'user_id'=>$result->id,
                                    'user_type'=>$result->type);
                        }else{                        
                            $data = array('email'=>$result->email,
                                        'user_id'=>$result->id,
                                        'user_type'=>$result->type);
                        }
                    }
                    

                    $this->session->set_userdata($data);
                    // redirect(base_url('admin/dashboard'));
                    if ($result->type=='user') {
                        // redirect('user/index');
                        if(!empty($this->session->userdata('state')) && $this->session->userdata('state') == 'checkout'){
                            redirect('user/checkout');
                        }else{
                            redirect('user/index');
                        }
                    }
                    elseif(!empty($result->email) && !empty($result->full_name) && !empty($result->mobile) && !empty($result->address) && $result->is_active > 0 ){
                        redirect('/vendor/vendor_dashboard/', 'refresh');
                    }else if(!empty($result->mobile) && !empty($result->email) && !empty($result->full_name) && $result->is_active == 0 ){
                        redirect('/vendor/profile_waiting_approval', 'refresh');
                    }
                    else{                        
                        redirect('/vendor/personalDetails/', 'refresh');
                    }
                }
                else
                {
                    $this->session->set_flashdata('error', 'Incorrect Username or password');
                    redirect($_SERVER['HTTP_REFERER']);    
                }
            } 
        }           
    }
    public function dashboard()
    {
    	$this->middle = 'dashboard';
        $this->Admin();
    }
    public function personalDetails()
    {
        $this->data['bank']   = $this->Vendor->getData('bank','*','');
        $this->data['status'] = $this->Vendor->getRowData('users','is_active',array('id'=>$this->session->userdata('user_id')));        
        $this->data['account_type'] = $this->config->item('account_type'); 
        $this->data['profile_data'] = $this->config->item('working_experience'); 
        $this->middle = 'personalDetails';
        $this->Vendor();
    }
    public function editPersonalDetails($userId)
    {
        $user_id = base64_decode($userId);

        $this->data['bank'] = $this->Vendor->getData('bank','*','');
        $this->data['edit_data'] = $this->Vendor->getRowData('users','*',array('id'=>$user_id));
        $this->data['bank_data'] = $this->Vendor->getRowData('bank_account','*',array('vendor_id'=>$user_id));
        $this->data['status'] = $this->Vendor->getRowData('users','is_active',array('id'=>$user_id));        

        $this->data['working_experience'] = $this->config->item('working_experience'); 
        $this->data['account_type'] = $this->config->item('account_type'); 
        $this->middle = 'edit_personalDetails';
        $this->Vendor();
    }
    public function vendor_profile($userId)
    {   
        
        $user_id = base64_decode($userId);
        $msg = '';
        if ($this->input->server('REQUEST_METHOD') == 'POST'){
            $this->form_validation->set_rules('full_name', 'Full Name', 'required');            
            $this->form_validation->set_rules('email', 'email', 'required');
            $this->form_validation->set_rules('mobile', 'mobile', 'trim|required');
            $this->form_validation->set_rules('company_name', 'Medical Name', 'required');
            $this->form_validation->set_rules('address', 'Addresss', 'required');
            $this->form_validation->set_rules('date_of_birth', 'date_of_birth', 'required');
            $this->form_validation->set_rules('country', 'country', 'required');
            $this->form_validation->set_rules('state', 'state', 'required');
            $this->form_validation->set_rules('city', 'City', 'required');
            $this->form_validation->set_rules('pin_code', 'Pin code', 'required');
            $this->form_validation->set_rules('degree', 'Degree', 'required');
            $this->form_validation->set_rules('working_from', 'Working from', 'required');
            $this->form_validation->set_rules('experience', 'Experience', 'required');
            $this->form_validation->set_rules('medical_since', 'Medical since', 'required');
            $this->form_validation->set_rules('account_number', 'Account number', 'required');
            $this->form_validation->set_rules('branch_name', 'Branch name', 'required');
            $this->form_validation->set_rules('ifc_code', 'IFSC Code', 'required');
            $this->form_validation->set_rules('account_type', 'account_type_id', 'required');
            
            if (empty($_FILES['licence']['name']) && empty($this->input->post('edit_licence'))) {
                $msg.= '<p>Please upload your medical licence</p>';
            }            
            if ($this->form_validation->run() == FALSE){
                $msg.= validation_errors();                
            }

            if (!empty($msg)) {
                $this->session->set_flashdata('error', $msg);      
                redirect($_SERVER['HTTP_REFERER']); 
                //redirect(base_url('vendor/personalDetails'));
            }

            // if ($this->form_validation->run() == FALSE){                                 
            //     $this->session->set_flashdata('error', validation_errors());      
            //     redirect(base_url('vendor/personalDetails'));
            // }
            else{  
                if(!empty($_FILES['profile_image'])){
                    $uploadedImg = $this->Vendor->upload("profile_image","vendor_profile");
                }
                if(!empty($_FILES['licence'])){
                    $uploadedLicence = $this->Vendor->upload("licence","licence");
                }
                
                $data = array(
                            'company_name'=>$this->input->post('company_name'),
                            'address'=>$this->input->post('address'),
                            'full_name'=>$this->input->post('full_name'),                            
                            'date_of_birth'=>$this->input->post('date_of_birth'),
                            'email'=>$this->input->post('email'),
                            'mobile'=>$this->input->post('mobile'),
                            'country'=>$this->input->post('country'),
                            'state'=>$this->input->post('state'),
                            'city'=>$this->input->post('city'),
                            'pin_code'=>$this->input->post('pin_code'),
                            'degree'=>$this->input->post('degree'),
                            'working_from'=>$this->input->post('working_from'),
                            'experience'=>$this->input->post('experience'),                            
                            'medical_since'=>$this->input->post('medical_since'),
                            'medical_phone'=>$this->input->post('medical_phone'),
                            'medical_email'=>$this->input->post('medical_email'),
                            'image'=>!empty($uploadedImg['file_name']) ? $uploadedImg['file_name'] : $this->input->post('edit_profile_image'),
                            'licence'=>!empty($uploadedLicence['file_name']) ? $uploadedLicence['file_name'] : $this->input->post('edit_licence')
                        );
                // echo "<pre>";
                // print_r($data);
                // die();
                $bankData = array(
                            'vendor_id'=>$user_id,
                            'bank_id'=>$this->input->post('bank_name'),
                            'account_number'=>$this->input->post('account_number'),
                            'branch_name'=>$this->input->post('branch_name'),
                            'ifc_code'=>$this->input->post('ifc_code'),
                            'account_type_id'=>$this->input->post('account_type'));                

                $result = $this->Vendor->vendorProfileUpdate($data,array('id'=>$user_id));
                
                $bankExist = $this->Vendor->getRowData('bank_account','id',array('vendor_id'=>$user_id));
                
                //////////////////////// INSERT AND UPDATE BANK
                if(!empty($bankExist)){                    
                    $result1 = $this->Vendor->updateData('bank_account',$bankData,array('vendor_id'=>$user_id));
                }else{
                    $result1 = $this->Vendor->addBankAccount($bankData);
                }
                // echo "string";
                // print_r($result);
                // die();
                if ($result > 0) {
                    $this->session->set_flashdata('success', 'Profile successfully Updated');
                        redirect($_SERVER['HTTP_REFERER']); 
                }
            }
            $this->session->set_flashdata('info', 'No data changes');
            redirect($_SERVER['HTTP_REFERER']);             
        }
    
    }
    
    public function productadd()
    {
        $this->middle = 'productadd';
        $this->Vendor();

    }     

    public function inventory()
    {
        $this->middle = 'inventory';
        $this->Vendor();
    }
    public function all_product()
    {
        $this->data['all_products'] = $this->Vendor->getAllProductData();        
        $this->middle = 'all_product';
        $this->Vendor();
    }
    public function product_delete($id)
    {
        $result = $this->Vendor->productDelete($id);
        if (!empty($result)) {
            $this->session->set_flashdata('success', 'Vendor deleted successfully');
        }else{
            $this->session->set_flashdata('error', 'error! Please try again');
        }
        redirect($_SERVER['HTTP_REFERER']);
    }
     public function add_product()
    {        
        $this->middle = 'add_product';
        $this->Vendor();
    }
    public function vendor_dashboard()
    {        
        $this->data['product'] = $this->Vendor->getProductForStockDetails();        
        $this->middle = 'vendor_dashboard';
        $this->Vendor();
    }
    public function profile_waiting_approval()
    {   
        $this->middle = 'profile_waiting_approval';
        $this->Vendor();
    }    
    public function addSingleProduct()
    {
        if ($this->input->server('REQUEST_METHOD') == 'POST'){
            $data = array('upload_source'=>'single_upload',
                        'created_by' =>$this->session->userdata('user_id'),
                        //'category_id'=>$this->input->post('category_id'),
                        'sucategory_id'=>$this->input->post('sucategory_id'),
                        'manufacturer_id'=>$this->input->post('manufacturer_id'),
                        'brand_id'=>$this->input->post('brand_id'),
                        'country'=>$this->input->post('country'),
                        
                        'name'=>$this->input->post('name'),
                        'product_form_id'=>$this->input->post('product_form_id'),
                        'salt_composition_id'=>$this->input->post('salt_composition_id'),
                        'about_product'=>$this->input->post('about_product'),
                        'side_effect'=>$this->input->post('side_effect'),
                        'when_to_use'=>$this->input->post('when_to_use'),
                        'how_to_use'=>$this->input->post('how_to_use'),
                        'how_to_work'=>$this->input->post('how_to_work'),
                        'how_to_store'=>$this->input->post('how_to_store'),
                        'safety_info'=>$this->input->post('safety_info'),
                        'status'=>'1',
                        'created_at'=>date('Y-m-d H:i:s'));
             $lastProductID = $this->Vendor->insertData('product',$data);
            if ($lastProductID) {
                foreach ($this->input->post('mrp') as $key => $value) {
                    $dataItem = array('product_id'=>$lastProductID,
                                'mrp'=>$this->input->post('mrp')[$key],
                                'sale_price'=>$this->input->post('sellprice')[$key],
                                'unit'=>$this->input->post('unit')[$key],
                                'quantity'=>$this->input->post('quantity')[$key],
                                'offerprice'=>$this->input->post('offerprice')[$key],
                                'expiry_date'=>$this->input->post('expriydate')[$key]);
                        $lastID = $this->Vendor->insertData('product_item',$dataItem);
                }

                foreach ($this->input->post('faq_question') as $key => $value) {
                    $dataItem1 = array('product_id'=>$lastProductID,
                                'question'=>$this->input->post('faq_question')[$key],
                                'answer'=>$this->input->post('faq_answar')[$key]);
                        $lastID = $this->Vendor->insertData('question',$dataItem1);
                }

                
                if (!empty($this->input->post('base64image'))) {
                    $base64image = $this->input->post('base64image');
                    foreach ($base64image as $key => $value) {
                        $data = $value;
                        list($type, $data) = explode(';', $data);
                        list(, $data)      = explode(',', $data);
                        $data = base64_decode($data);
                        $path = 'assets/product-images/'.date('YmdHis').'.png';
                        file_put_contents($path, $data);
                        $this->Vendor->insertData('product_images',array('product_id'=>$lastProductID,'image'=>$path));
                    }
                }
                $this->session->set_flashdata('success', 'Product updated successfully'); 
            }
            else{
                $this->session->set_flashdata('error', 'error! Please try again'); 
                
            }
            redirect($_SERVER['HTTP_REFERER']);
        }
        $this->data['category'] = $this->Vendor->getData('subcategory','subcategory,id',array('status'=>"active"));
        $this->data['manufacturer'] = $this->Vendor->getData('manufacturer','name,id',array('status'=>"active"));
        $this->data['product_form'] = $this->Vendor->getData('product_form','name,id',array('status'=>"active"));
        $this->data['brand'] = $this->Vendor->getData('brand','brand_name,id',array('status'=>"active"));
        $this->data['salt_composition'] = $this->Vendor->getData('saltcomposition','name,id',array('status'=>"active"));
        $this->middle = 'add_single_product';
        $this->Vendor();
    }

    public function UploadProductImage()
    {
        $this->Vendor->upload('file','product-images');
    }
    public function edit_singleProduct($id)
    {
        $id = ($id);
        if ($this->input->server('REQUEST_METHOD') == 'POST'){
            $data = array('upload_source'=>'single_upload',
                        'created_by' =>$this->session->userdata('user_id'),
                        'category_id'=>$this->input->post('category_id'),                        
                        'manufacturer_id'=>$this->input->post('manufacturer_id'),
                        'brand_id'=>$this->input->post('brand_id'),                        
                        'name'=>$this->input->post('name'),
                        'product_form_id'=>$this->input->post('product_form_id'),
                        'salt_composition_id'=>$this->input->post('salt_composition_id'),
                        'about_product'=>$this->input->post('about_product'),
                        'side_effect'=>$this->input->post('side_effect'),
                        'when_to_use'=>$this->input->post('when_to_use'),
                        'how_to_use'=>$this->input->post('how_to_use'),
                        'how_to_work'=>$this->input->post('how_to_work'),
                        'how_to_store'=>$this->input->post('how_to_store'),
                        'safety_info'=>$this->input->post('safety_info'),
                        'status'=>'1',
                        'created_at'=>date('Y-m-d H:i:s'));
            /*echo "<pre>";
            print_r($data);
            echo $id;
            exit();*/
             $this->Vendor->updateData('product',$data,array('id'=>$id));            
            
                foreach ($this->input->post('mrp') as $key => $value) {                    
                    $dataItem = array('mrp'=>$this->input->post('mrp')[$key],
                                'sale_price'=>$this->input->post('sellprice')[$key],
                                'unit'=>$this->input->post('measurement')[$key],
                                'quantity'=>$this->input->post('quantity')[$key],
                                'offerprice'=>$this->input->post('offerprice')[$key],
                                'expiry_date'=>$this->input->post('expriydate')[$key]);
                    $this->Vendor->updateData('product_item',$dataItem,array('product_id'=>$id));
                }
               
                /*foreach ($this->input->post('faq_answar') as $key => $value) {
                                        
                    $dataItem1 = array('question'=>trim($this->input->post('faq_question')[$key]),
                                'answer'=>trim($this->input->post('faq_answar')[$key]));                        

                    $this->Vendor->updateData('question',$dataItem1,array('product_id'=>$id,'id'=>$this->input->post('question_id')[$key]));
                }  */   

                if (!empty($this->input->post('base64image'))) {
                    $base64image = $this->input->post('base64image');
                    foreach ($base64image as $key => $value) {
                        $data = $value;
                        list($type, $data) = explode(';', $data);
                        list(, $data)      = explode(',', $data);
                        $data = base64_decode($data);
                        $path = 'assets/product-images/'.date('YmdHis').$key.'.png';
                        file_put_contents($path, $data);
                        $this->Vendor->insertData('product_images',array('product_id'=>$id,'image'=>$path));
                    }
                }
                $this->session->set_flashdata('success', 'Product updated successfully'); 
            // }
            // else{
            //     $this->session->set_flashdata('error', 'error! Please try again'); 
                
            // }
            redirect($_SERVER['HTTP_REFERER']);
        }
        
        $this->data['product'] = $this->Vendor->getProductByID($id);
        $this->data['category'] = $this->Vendor->getData('subcategory','subcategory,id',array('status'=>"active"));
        $this->data['manufacturer'] = $this->Vendor->getData('manufacturer','name,id',array('status'=>"active"));
        $this->data['product_form'] = $this->Vendor->getData('product_form','name,id',array('status'=>"active"));
        $this->data['brand'] = $this->Vendor->getData('brand','brand_name,id',array('status'=>"active"));
        $this->data['salt_composition'] = $this->Vendor->getData('saltcomposition','name,id',array('status'=>"active"));
        $this->middle = 'edit_singleProduct';
        $this->Vendor();
    }
    public function delete_productImages(){

        if (!empty($this->input->post('id'))) {                                                
            if(file_exists('assets/product-images/'.$this->input->post('image_name'))){
            $result = unlink('assets/product-images/'.$this->input->post('image_name'));
                if($result){
                    if(!empty($this->input->post('id'))){
                        $deleted =  $this->Vendor->deleteData('product_images',array('id'=>$this->input->post('id')));
                        
                    }
                    echo json_encode(array('status'=>1,'keyWord'=>'Image deleted'));
                    return;
                }else{
                    echo json_encode(array('status'=>0));
                    return;
                }
            }else{
                echo json_encode(array('status'=>0));
                return;
            }
        }
    }



     public function import_data()
    {
        if(isset($_FILES["file"]["name"]))
        {
            $path = $_FILES["file"]["tmp_name"];
            $object = PHPExcel_IOFactory::load($path);
            foreach($object->getWorksheetIterator() as $worksheet)
            {
                $highestRow = $worksheet->getHighestRow();
                $highestColumn = $worksheet->getHighestColumn();
                for($row=2; $row<=$highestRow; $row++)
                {
                    $product_id = $worksheet->getCellByColumnAndRow(0, $row)->getValue();
                    $product_name = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
                    $Manufacturer = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
                    $product_form = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
                    $varieties = $worksheet->getCellByColumnAndRow(4, $row)->getValue();
                    $unit = $worksheet->getCellByColumnAndRow(5, $row)->getValue();
                    $mrp = $worksheet->getCellByColumnAndRow(6, $row)->getValue();
                    $sale_price = $worksheet->getCellByColumnAndRow(7, $row)->getValue();
                    $quantity = $worksheet->getCellByColumnAndRow(8, $row)->getValue();
                $prescription = $worksheet->getCellByColumnAndRow(9, $row)->getValue();
                    
                    ///////////// MANUFACTURER CREATE AND UPDATE
                    $manufacturerExist = $this->Vendor->getRowData('manufacturer','id',array('name'=>$Manufacturer));
                    if($manufacturerExist){
                        $manufacturer_id = $manufacturerExist->id;
                    }else{
                        $manufacturer_id = $this->Vendor->insertData('manufacturer',array('name'=>$Manufacturer));
                    }
                    ///////////// PRODUCT FORM CREATE AND UPDATE
                    $productFormExist = $this->Vendor->getRowData('product_form','id',array('name'=>$product_form));
                    if($productFormExist){
                        $product_form = $productFormExist->id;
                    }else{
                        $product_form = $this->Vendor->insertData('product_form',array('name'=>$product_form));
                    }

                    $productdata = array('name'          =>  $product_name,
                                    'manufacturer_id'    =>  $manufacturer_id,
                                    'product_form_id'    =>  $product_form,
                                    'varieties'          =>  $varieties,
                                    'prescription'       =>  $prescription,
                                    'created_by'         =>  $this->session->userdata('user_id'),
                                    'upload_source'      =>  "bulk_upload");                               
                    $product_last_id = $this->Vendor->insertData('product',$productdata);

                    $productItemData = array( 'product_sku_id'   =>  $product_id,
                                    'product_id'     =>  $product_last_id,
                                    'unit'           =>  $unit,
                                    'mrp'            =>  $mrp,
                                    'sale_price'     =>  $sale_price,
                                    'quantity'       =>  $quantity);

                    if($product_last_id){
                     $this->Vendor->insertData('product_item',$productItemData);
                    }
                }
                
            //$this->Vendor->bulkData($data);
            echo 'Data Imported successfully';
            }
        }
    }
    public function bulk_upload()
    {
        $this->data['category'] = $this->Vendor->getData('category','*','');
        $this->data['bulk_data'] = $this->Vendor->getUploadedBulkData();                
        $this->middle = 'bulk_upload';
        $this->Vendor();
    } 
    public function vendor_bulk_upload()
    {
        $this->middle = 'vendor_bulk_upload';
        $this->Vendor();
    } 
    public function bulk_update_product()
    {

        print_r($_FILES);
        // $this->middle = 'vendor_bulk_upload';
        // $this->Vendor();
    } 

    public function faq()
    {
        $this->middle = 'faq';
        $this->Vendor();
    } 
    public function testEmail()
    {
                           // require_once("./mail/PHPMailerAutoload.php");
           // ini_set('display_errors', 0);  


        //PHP Mailer Function File
        require_once("./phpmailer/_lib/class.phpmailer.php");
        require("./phpmailer/_lib/class.smtp.php");    

        $mail = new PHPMailer();
        $mail->IsSMTP();     
        $mail->Host = "mail.test.waljon.com";  
        $mail->SMTPAuth = true;
        $mail->Port = 587;     
        $mail->SMTPSecure = 'tls';
        $mail->Username = "mytest@test.waljon.com";  
        $mail->Password = "Ogg%-C5zO_=x";

   
        $sub = 'Email Regarding Contact To You...';
        $mail->From = 'mytest@test.waljon.com';
        $mail->FromName = "Mausam";
        //To address and name
        $mail->addAddress('mausam.varun22@gmail.com', 'Testing Purpose');
        //Address to which recipient will reply
        $mail->addReplyTo('mytest@test.waljon.com', 'Reply');
        //Send HTML or Plain Text email
        $mail->isHTML(true);
        $mail->Subject = "$sub";
        $mail->Body = "Testing";
        
        $mail->send();        
        //print_r(error_get_last());
        
        if($mail->send())
        {
            echo  $mail->ErrorInfo;           
            echo "success";
        } 
        else{          
            echo "failed";
        }
        $mail->ClearAddresses();
    }  
    public function bulk_product_update(){
        echo "<pre>";
        print_r($_FILES);
        exit();
        if ($this->input->server('REQUEST_METHOD') == 'POST'){
        }
    }
    public function checkExistEmail(){        

        if(!empty($this->input->post('email'))){
            $existEmail = $this->Vendor->checkExistEmail($this->input->post('email'),$this->input->post('user_id'));              
            if($existEmail){
                echo  json_encode(array('status'=>1,'message'=>'Email already Exist'));
                return;
            }else{
                echo  json_encode(array('status'=>0,'message'=>'Email not exist'));
                return;
            }
        }
    }
    public function checkExistMobile(){        

        if(!empty($this->input->post('mobile'))){
            $existMobile = $this->Vendor->checkExistMobile($this->input->post('mobile'),$this->input->post('user_id'));              
            if($existMobile){
                echo  json_encode(array('status'=>1,'message'=>'Mobile already Exist'));
                return;
            }else{
                echo  json_encode(array('status'=>0,'message'=>'Mobile not exist'));
                return;
            }
        }
    }
    public function forgotPasswordCheckEmail(){        

        if(!empty($this->input->post('email'))){                        
            $existEmail = $this->Vendor->forgotPasswordCheckEmail($this->input->post('email'));             
            if($existEmail){
                echo  json_encode(array('status'=>1,'message'=>'Email already Exist'));
                return;
            }else{
                echo  json_encode(array('status'=>0,'message'=>'Email not exist'));
                return;
            }
        }
    }

    public function product_status($status,$product_id)
    {
        $this->Vendor->updateData('product',array('status'=>$status),array('id'=>$product_id));
        redirect($_SERVER['HTTP_REFERER']);
    }
    
    // public function vendors()
    // {
    //     $this->middle = 'vendor_list';
    //     $this->Admin();
    // }
    // public function users()
    // {
    //     $this->middle = 'user_list';
    //     $this->Admin();
    // }    
    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('vendor/vendor_login'));
    }
    ///////////////////// BULK FOR ANY OTHER

     public function import_data_test()
    {
        if(isset($_FILES["file"]["name"]))
        {
            $path = $_FILES["file"]["tmp_name"];
            $object = PHPExcel_IOFactory::load($path);
            foreach($object->getWorksheetIterator() as $worksheet)
            {
                $highestRow = $worksheet->getHighestRow();
                $highestColumn = $worksheet->getHighestColumn();
                for($row=2; $row<=$highestRow; $row++)
                {
                    $product_id = $worksheet->getCellByColumnAndRow(0, $row)->getValue();
                    $product_name = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
                //     $Manufacturer = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
                //     $product_form = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
                //     $varieties = $worksheet->getCellByColumnAndRow(4, $row)->getValue();
                //     $unit = $worksheet->getCellByColumnAndRow(5, $row)->getValue();
                //     $mrp = $worksheet->getCellByColumnAndRow(6, $row)->getValue();
                //     $sale_price = $worksheet->getCellByColumnAndRow(7, $row)->getValue();
                //     $quantity = $worksheet->getCellByColumnAndRow(8, $row)->getValue();
                // $prescription = $worksheet->getCellByColumnAndRow(9, $row)->getValue();
                    
                    ///////////// MANUFACTURER CREATE AND UPDATE
                    // $manufacturerExist = $this->Vendor->getRowData('manufacturer','id',array('name'=>$Manufacturer));
                    // if($manufacturerExist){
                    //     $manufacturer_id = $manufacturerExist->id;
                    // }else{
                    //     $manufacturer_id = $this->Vendor->insertData('manufacturer',array('name'=>$Manufacturer));
                    // }
                    // ///////////// PRODUCT FORM CREATE AND UPDATE
                    // $productFormExist = $this->Vendor->getRowData('product_form','id',array('name'=>$product_form));
                    // if($productFormExist){
                    //     $product_form = $productFormExist->id;
                    // }else{
                    //     $product_form = $this->Vendor->insertData('product_form',array('name'=>$product_form));
                    // }

                    // $productdata = array('name'          =>  $product_name,
                    //                 'manufacturer_id'    =>  $manufacturer_id,
                    //                 'product_form_id'    =>  $product_form,
                    //                 'varieties'          =>  $varieties,
                    //                 'prescription'       =>  $prescription,
                    //                 'created_by'         =>  $this->session->userdata('user_id'),
                    //                 'upload_source'      =>  "bulk_upload");                               
                    // $product_last_id = $this->Vendor->insertData('product',$productdata);

                    // $productItemData = array( 'created_by'   =>  1,
                    //                 'category_name'     =>  $product_id,
                    //                 'status'           =>  'active');

                    //  $this->Vendor->insertData('category',$productItemData);

                     $productItemData = array( 'created_by'   =>  1,
                                    'category_id'     =>  $product_id,
                                    'subcategory'     =>  $product_name,
                                    'status'     =>  'active');

                     $this->Vendor->insertData('subcategory',$productItemData);
                    // if($product_last_id){
                    // }
                }
                
            //$this->Vendor->bulkData($data);
            echo 'Data Imported successfully';
            }
        }
    }
    public function bulk_upload_test()
    {
        $this->data['category'] = $this->Vendor->getData('category','*','');
        $this->data['bulk_data'] = $this->Vendor->getUploadedBulkData();                
        $this->middle = 'bulk_upload';
        $this->Vendor();
    } 
    public function vendor_bulk_upload_test()
    {
        $this->middle = 'vendor_bulk_upload_test';
        $this->Vendor();
    }
}
