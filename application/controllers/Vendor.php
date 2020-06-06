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
      

    }


    public function index()
    {
        $this->load->helper('cookie');
    	$this->load->view('vendor/vandorregister');
    }
    public function vendorregister()
    {   
        $this->load->helper('cookie');
        if ($this->input->server('REQUEST_METHOD') == 'POST'){            
            $this->form_validation->set_rules('email', 'email', 'trim|required|valid_email|is_unique[users.email]');
            $this->form_validation->set_rules('password', 'password', 'trim|required');            
            
            if($this->input->post('remember_password')){                
                set_cookie('email',base64_encode($this->input->post('email')), (86400*30));
                set_cookie('password',base64_encode($this->input->post('password')), (86400*30));
            }
            
            // $this->form_validation->set_rules('mobile', 'mobile', 'required|numeric');
            // $this->form_validation->set_rules('company_name', 'Company Name', 'required');
            // $this->form_validation->set_rules('company_address', 'Company addresss', 'required');
           
            if($this->form_validation->run() == FALSE){ 
              $this->session->set_flashdata('error', validation_errors());      
            }
            else{
                $data = array('email'=>$this->input->post('email'),
                              'password'=>md5($this->input->post('password')),
                              'is_active'=>'0',
                              'type'=>'vendor',
                              'created_by'=>'sign_up');  

                $last_id = $this->Vendor->VendorRegistration($data);               
                if ($last_id > 0) {
                    $data = array('email'=>$this->input->post('email'),
                                  'vendor_id'=>$last_id,
                                  'user_type'=>'vendor'
                              );
                    $this->session->set_userdata($data);
                    $this->session->set_flashdata('success', 'Your account successfully created ');
                    redirect('/Vendor/personalDetails/', 'refresh');
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
            $this->form_validation->set_rules('email', 'Email', 'required|trim');
            $this->form_validation->set_rules('password', 'Password', 'required|trim');
            
            if ($this->form_validation->run() == FALSE){          
                
              $this->session->set_flashdata('error', validation_errors());      
            }
            else{               
                if(empty($this->input->post('remember_password'))){
                    delete_cookie("email");                
                    delete_cookie("password");                
                }

                $data = array('email'=> $this->input->post('email'),
                            'password' =>md5($this->input->post('password'))
                            );
                $result = $this->Vendor->login($data);
                if(!empty($result))
                {
                    $data = array('email'=>$result->email,
                                'vendor_id'=>$result->id,
                                'user_type'=>$result->type);

                    $this->session->set_userdata($data);
                    // redirect(base_url('admin/dashboard'));
                    if(!empty($result->email) && !empty($result->first_name) && !empty($result->last_name) && !empty($result->mobile) && !empty($result->address)){
                        redirect('/vendor/vendor_dashboard/', 'refresh');
                    }else{                        
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
        $this->data['bank'] = $this->Vendor->getData('bank','*','');
        $this->data['account_type'] = $this->config->item('account_type'); 
        $this->data['profile_data'] = $this->config->item('working_experience'); 
        $this->middle = 'personalDetails';
        $this->Vendor();
    }
    public function editPersonalDetails()
    {
        $this->data['bank'] = $this->Vendor->getData('bank','*','');
        $this->data['edit_data'] = $this->Vendor->getRowData('users','*',array('id'=>$this->session->userdata('vendor_id')));
        $this->data['bank_data'] = $this->Vendor->getRowData('bank_account','*',array('vendor_id'=>$this->session->userdata('vendor_id')));

        $this->data['working_experience'] = $this->config->item('working_experience'); 
        $this->data['account_type'] = $this->config->item('account_type'); 
        $this->middle = 'edit_personalDetails';
        $this->Vendor();
    }
    public function vendor_profile()
    {
        // echo "<pre>";
        //   print_r($_POST);
        //   die();
        $msg = '';
        if ($this->input->server('REQUEST_METHOD') == 'POST'){
            $this->form_validation->set_rules('first_name', 'First Name', 'required');
            $this->form_validation->set_rules('last_name', 'Last Name', 'required');
            $this->form_validation->set_rules('email', 'email', 'required');
            $this->form_validation->set_rules('mobile', 'mobile', 'required|numeric');
            $this->form_validation->set_rules('company_name', 'Medical Name', 'required');
            $this->form_validation->set_rules('address', 'Addresss', 'required');
            // $this->form_validation->set_rules('licence', 'Licence', 'required');
            
            
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
                            'first_name'=>$this->input->post('first_name'),
                            'last_name'=>$this->input->post('last_name'),
                            'email'=>$this->input->post('email'),
                            'mobile'=>$this->input->post('mobile'),
                            'country'=>$this->input->post('country'),
                            'state'=>$this->input->post('state'),
                            'city'=>$this->input->post('city'),
                            'pin_code'=>$this->input->post('pin_code'),
                            'degree'=>$this->input->post('degree'),
                            'working_from'=>$this->input->post('working_from'),
                            'experience'=>$this->input->post('experience'),
                            'marital_status'=>$this->input->post('marital_status'),
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
                            'vendor_id'=>$this->session->userdata('vendor_id'),
                            'bank_id'=>$this->input->post('bank_name'),
                            'account_number'=>$this->input->post('account_number'),
                            'ifc_code'=>$this->input->post('ifc_code'),
                            'account_type_id'=>$this->input->post('account_type'));                

                $result = $this->Vendor->vendorProfileUpdate($data,array('id'=>$this->session->userdata('vendor_id')));
                
                $bankExist = $this->Vendor->getRowData('bank_account','id',array('vendor_id'=>$this->session->userdata('vendor_id')));
                //////////////////////// INSET AND UPDATE BANK

                if(!empty($bankExist)){                    
                    $result1 = $this->Vendor->updateData('bank_account',$bankData,array('vendor_id'=>$this->session->userdata('vendor_id')));
                }else{
                    $result1 = $this->Vendor->addBankAccount($bankData);
                }
                // echo "string";
                // print_r($result);
                // die();
                if ($result > 0) {
                    $this->session->set_flashdata('success', 'Profile successfully Updated');                    
                        redirect($_SERVER['HTTP_REFERER']); 
                    // if($_SERVER['HTTP_REFERER']== base_url()."vendor/editPersonalDetails"){
                    // }else{
                    //     redirect(base_url('vendor/vendor_dashboard'));
                    // }
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
        $this->data['all_product'] = $this->Vendor->getAllProductData();        
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
        $this->data['product'] = $this->Vendor->getData('product','*','');
        $this->middle = 'vendor_dashboard';
        $this->Vendor();
    }    
    public function addSingleProduct()
    {
        if ($this->input->server('REQUEST_METHOD') == 'POST'){
            $data = array('upload_source'=>'single_upload',
                        'created_by' =>$this->session->userdata('user_id'),
                        'category_id'=>$this->input->post('category_id'),
                        'sucategory_id'=>$this->input->post('sucategory_id'),
                        'manufacturer_id'=>$this->input->post('manufacturer_id'),
                        'name'=>$this->input->post('name'),
                        'product_form_id'=>$this->input->post('product_form_id'),
                        'salt_composition'=>$this->input->post('salt_composition'),
                        'about_product'=>$this->input->post('about_product'),
                        'side_effect'=>$this->input->post('side_effect'),
                        'when_to_use'=>$this->input->post('when_to_use'),
                        'how_to_use'=>$this->input->post('how_to_use'),
                        'how_to_work'=>$this->input->post('how_to_work'),
                        'how_to_store'=>$this->input->post('how_to_store'),
                        'safety_info'=>$this->input->post('safety_info'),
                        'created_at'=>date('Y-m-d H:i:s'));
            $lastID = $this->Vendor->insertData('product',$data);
            if ($lastID) {
                foreach ($this->input->post('mrp') as $key => $value) {
                    $dataItem = array('product_id'=>$lastID,
                                'mrp'=>$this->input->post('mrp')[$key],
                                'sale_price'=>$this->input->post('sellprice')[$key],
                                'unit'=>$this->input->post('unit')[$key],
                                'quantity'=>$this->input->post('quantity')[$key],
                                'expiry_date'=>$this->input->post('expiry_date')[$key]);
                    $lastID = $this->Vendor->insertData('product_item',$dataItem);
                }
                $this->session->set_flashdata('success', 'Product updated successfully'); 
            }
            else{
                $this->session->set_flashdata('error', 'error! Please try again'); 
                
            }
            redirect($_SERVER['HTTP_REFERER']);
        }
        $this->data['category'] = $this->Vendor->getData('category','category_name,id',array('status'=>"active"));
        $this->data['manufacturer'] = $this->Vendor->getData('manufacturer','name,id',array('status'=>"active"));
        $this->data['product_form'] = $this->Vendor->getData('product_form','name,id',array('status'=>"active"));
        $this->middle = 'add_single_product';
        $this->Vendor();
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

                    $productdata = array('name'              =>  $product_name,
                                    'manufacturer_id'    =>  $manufacturer_id,
                                    'product_form'       =>  $product_form,
                                    'varieties'          =>  $varieties,
                                    'prescription'       =>  $prescription,
                                    'vendor_id'          =>  $this->session->userdata('vendor_id'),
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
        if ($this->input->server('REQUEST_METHOD') == 'POST'){
            print_r($this->input->post());
            exit();
        }
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
}
