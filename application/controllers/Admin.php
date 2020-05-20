<?php 
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

Class Admin extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->model('Admin_model','Admin');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');  
    }

    public function index()
    {
    	$this->load->view('admin/login');
    }

    public function dashboard()
    {
    	$this->middle = 'dashboard';
        $this->Admin();
    }
    public function doctors()
    {
        $this->middle = 'doctors_list';
        $this->Admin();
    }
    public function vendors()
    {
        $this->data['vendors'] = $this->Admin->VendorList();
        $this->middle = 'vendor_list';
        $this->Admin();
    }
    public function vendor_add()
    {
        if ($this->input->server('REQUEST_METHOD') == 'POST'){
            $this->form_validation->set_rules('first_name', 'First Name', 'required');
            $this->form_validation->set_rules('last_name', 'Last Name', 'required');
            $this->form_validation->set_rules('email', 'email', 'required|valid_email');
            $this->form_validation->set_rules('mobile', 'mobile', 'required|numeric');
            $this->form_validation->set_rules('company_name', 'Company Name', 'required');
            $this->form_validation->set_rules('company_address', 'Company addresss', 'required');
           
            if ($this->form_validation->run() == FALSE){ 
              $this->session->set_flashdata('error', validation_errors());      
            }
            else{
                $data = array(
                            'company_name'      =>$this->input->post('company_name'),
                            'company_address'   =>$this->input->post('company_address'),
                            'first_name'        =>$this->input->post('first_name'),
                            'last_name'         =>$this->input->post('last_name'),
                            'email'             =>$this->input->post('email'),
                            'mobile'            =>$this->input->post('mobile'),
                            'is_active'         =>'1');
                $result = $this->Admin->VendorAdd($data);
                if ($result > 0) {
                    $this->session->set_flashdata('success', 'Vendor account created successfully');                     
                }
            }
            redirect($_SERVER['HTTP_REFERER']); 
        }
        $this->middle = 'vendor_add';
        $this->Admin();
    }
    public function users()
    {
        $this->middle = 'user_list';
        $this->Admin();
    }
    public function vendorLogin()
    {
        $this->load->view('vendor/vendor_login');
    }
    public function vandorregister()
    {

        $this->load->view('vendor/vandorregister');
    }

    public function adminLogin(){

        $this->form_validation->set_rules('username', 'User Name', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        
        if ($this->form_validation->run() == FALSE){          
          $this->session->set_flashdata('error', validation_errors());      
        }
        else{
            $data = array('username'=> $this->input->post('username'),
                        'password' => $this->input->post('password'));
            $result = $this->Admin_model->login($data);

            if(!empty($result))
            {
                $data = array('username'=>$result->username,
                            'email'=>$result->email,
                            'id'=>$result->id);
                $this->session->set_userdata($data);
                redirect(base_url('admin/dashboard'));
            }
            else
            {
                $this->session->set_flashdata('error', 'Incorrect Username or password');
                redirect($_SERVER['HTTP_REFERER']);    
            }
        }      
        
    }
    public function product_add()
    {
        $this->middle = 'product_add';
        $this->Admin();
         //$this->load->view('admin/product_add');
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('admin'));
    }

    

}
