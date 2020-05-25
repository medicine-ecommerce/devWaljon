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
        $this->load->library('upload');

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
            $this->form_validation->set_rules('email', 'email', 'required|valid_email|is_unique[vendors.email]');
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
    public function vendor_login(){
        $this->load->helper('cookie');
        $this->load->view('vendor/vendor_login');    
    }
    
    public function vendorLogin(){
        $this->load->helper('cookie');
        if ($this->input->server('REQUEST_METHOD') == 'POST'){            
            $this->form_validation->set_rules('email', 'Email', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');
            
            if ($this->form_validation->run() == FALSE){          
              $this->session->set_flashdata('error', validation_errors());      
            }
            else{
                $data = array('email'=> $this->input->post('email'),
                            'password' => $this->input->post('password'));
                $result = $this->Vendor->login($data);

                if(!empty($result))
                {
                    $data = array('email'=>$result->email,
                                'id'=>$result->id);
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
        $this->middle = 'personalDetails';
        $this->Vendor();
    }
    public function vendor_profile()
    {
        
        
        if(!empty($_FILES)){            
            
            $config['upload_path'] = './img/vendor_profile/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = 2000;
            $config['max_width'] = 1500;
            $config['max_height'] = 1500;

            $this->load->library('upload', $config);

            if ($this->upload->do_upload()) 
            {                
                $data = array('profile_image' => $this->upload->data());

                redirect($_SERVER['HTTP_REFERER']); 
            }
        }
    
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
