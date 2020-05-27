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
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');  
        $this->load->model('Vendor_model','Vendor');        

    }

    public function index()
    {
        $this->load->helper('cookie');
    	$this->load->view('vendor/vendor_login');
    }
    public function vendorregister()
    {   
        $this->load->helper('cookie');
        if ($this->input->server('REQUEST_METHOD') == 'POST'){            
            $this->form_validation->set_rules('email', 'email', 'required|valid_email');
            $this->form_validation->set_rules('password', 'password', 'required');            
            if($this->input->post('remember_password')){                
                set_cookie('email',base64_encode($this->input->post('email')),3000);
                set_cookie('password',base64_encode($this->input->post('password')),3000);
            }
            
            // $this->form_validation->set_rules('mobile', 'mobile', 'required|numeric');
            // $this->form_validation->set_rules('company_name', 'Company Name', 'required');
            // $this->form_validation->set_rules('company_address', 'Company addresss', 'required');
           
            if ($this->form_validation->run() == FALSE){ 
              $this->session->set_flashdata('error', validation_errors());      
            }
            else{
                $data = array(                            
                            'email'             =>$this->input->post('email'),
                            'password'            =>md5($this->input->post('password')),
                            'is_active'         =>'0');
                $result = $this->Vendor->VendorRegistration($data);
                if ($result > 0) {
                    $this->session->set_flashdata('success', 'Vendor account created successfully');                     
                }
            }            
            redirect('/Vendor/personalDetails/', 'refresh');
            //redirect($_SERVER['HTTP_REFERER']); 
        }
        $this->load->view('vendor/vandorregister');
        //$this->Admin();
    }
    
    public function vendorLogin(){
        $this->load->helper('cookie');
        if ($this->input->server('REQUEST_METHOD') == 'POST'){            
            $this->form_validation->set_rules('username', 'User Name', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');
            
            if ($this->form_validation->run() == FALSE){          
              $this->session->set_flashdata('error', validation_errors());      
            }
            else{
                $data = array('username'=> $this->input->post('username'),
                            'password' => $this->input->post('password'));
                $result = $this->Vendor->login($data);

                if(!empty($result))
                {
                    $data = array('username'=>$result->username,
                                'email'=>$result->email,
                                'id'=>$result->id);
                    $this->session->set_userdata($data);
                    // redirect(base_url('admin/dashboard'));
                    redirect('/admin/dashboard/', 'refresh');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Incorrect Username or password');
                    //redirect($_SERVER['HTTP_REFERER']);    
                }
            } 
        }   
        $this->load->view('vendor/vendor_login');    
    }
    public function dashboard()
    {
    	$this->middle = 'dashboard';
        $this->Admin();
    }
    public function personalDetails()
    {
        $this->middle = 'personalDetails';
        $this->Vendor();
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
        redirect(base_url('vendor'));
    }

}
