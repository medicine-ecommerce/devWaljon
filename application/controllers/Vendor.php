<?php 
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

Class Vendor extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
        // $this->load->model('Admin_model');
        $this->load->helper(array('form', 'url','custome'));
        $this->load->library('form_validation');  
        $this->load->model('Vendor_model','Vendor');        
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
            $this->form_validation->set_rules('email', 'email', 'trim|required|valid_email|is_unique[vendors.email]');
            $this->form_validation->set_rules('password', 'password', 'trim|required');            
            
            if($this->input->post('remember_password')){                
                set_cookie('email',base64_encode($this->input->post('email')),3000);
                set_cookie('password',base64_encode($this->input->post('password')),3000);
            }
            
            // $this->form_validation->set_rules('mobile', 'mobile', 'required|numeric');
            // $this->form_validation->set_rules('company_name', 'Company Name', 'required');
            // $this->form_validation->set_rules('company_address', 'Company addresss', 'required');
           
            if($this->form_validation->run() == FALSE){ 
              $this->session->set_flashdata('error', validation_errors());      
            }
            else{
                $data = array(                            
                            'email'=>$this->input->post('email'),
                            'password'=>md5($this->input->post('password')),
                            'is_active'=>'0');

                $last_id = $this->Vendor->VendorRegistration($data);               
                if ($last_id > 0) {
                    $data = array('email'=>$this->input->post('email'),
                                  'vendor_id'=>$last_id);
                    $this->session->set_userdata($data);
                    $this->session->set_flashdata('success', 'Your account created successfully');                     
                    redirect('/Vendor/personalDetails/', 'refresh');
                }
            }            
            //redirect($_SERVER['HTTP_REFERER']); 
        }        
        $this->load->view('vendor/vandorregister');
        //$this->Admin();
    }
    public function vendor_login(){
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
                $data = array('email'=> $this->input->post('email'),
                            'password' =>md5($this->input->post('password'))
                            );

                $result = $this->Vendor->login($data);
                if(!empty($result))
                {
                    $data = array('email'=>$result->email,
                                'vendor_id'=>$result->id);
                    $this->session->set_userdata($data);
                    // redirect(base_url('admin/dashboard'));
                    redirect('/vendor/personalDetails/', 'refresh');
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
        $this->data['profile_data'] = $this->config->item('working_experience'); 
        $this->middle = 'personalDetails';
        $this->Vendor();
    }
    public function editPersonalDetails()
    {
        $this->data['edit_data'] = $this->Vendor->getRowData('vendors','*',array('id'=>$this->session->userdata('vendor_id')));
        $this->data['bank_data'] = $this->Vendor->getRowData('bank_account','*',array('vendor_id'=>$this->session->userdata('vendor_id')));

        $this->data['working_experience'] = $this->config->item('working_experience'); 
        $this->middle = 'edit_personalDetails';
        $this->Vendor();
    }
    public function vendor_profile()
    {
                
        if ($this->input->server('REQUEST_METHOD') == 'POST'){
            $this->form_validation->set_rules('first_name', 'First Name', 'required');
            $this->form_validation->set_rules('last_name', 'Last Name', 'required');
            $this->form_validation->set_rules('email', 'email', 'required');
            $this->form_validation->set_rules('mobile', 'mobile', 'required|numeric');
            $this->form_validation->set_rules('company_name', 'Company Name', 'required');
            $this->form_validation->set_rules('address', 'Addresss', 'required');
            // $this->form_validation->set_rules('licence', 'Licence', 'required');

            
            if ($this->form_validation->run() == FALSE){                 
                $this->session->set_flashdata('error', validation_errors());      
            }
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
                            'bank_name'=>$this->input->post('bank_name'),
                            'account_number'=>$this->input->post('account_number'),
                            'ifc_code'=>$this->input->post('ifc_code'),
                            'account_type'=>$this->input->post('account_type'));                

                $result = $this->Vendor->vendorProfileUpdate($data,array('id'=>$this->session->userdata('vendor_id')));
                $result1 = $this->Vendor->addBankAccount($bankData);
                if ($result > 0) {
                    $this->session->set_flashdata('success', 'Profile successfully Updated');
                    
                    if($_SERVER['HTTP_REFERER']== base_url()."vendor/editPersonalDetails"){
                        redirect($_SERVER['HTTP_REFERER']); 
                    }else{
                        redirect(base_url('vendor/vendor_dashboard'));
                    }
                }
            }
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
    public function vendor_dashboard()
    {
        $this->middle = 'vendor_dashboard';
        $this->Vendor();
    }    
    public function addSingleProduct()
    {
        $this->middle = 'add_single_product';
        $this->Vendor();
    }
    public function bulk_upload()
    {
        $this->middle = 'bulk_upload';
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
        print_r(error_get_last());
        die();
        if(!$mail->send())
        {
            echo  $mail->ErrorInfo;           
            echo "success";
        } 
        else{          
            echo "failed";
        }
        $mail->ClearAddresses();
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
