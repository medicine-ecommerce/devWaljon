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
    public function personalDetails()
    {
        $this->middle = 'personalDetails';
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

    // public function adminLogin(){

    //     $this->form_validation->set_rules('username', 'User Name', 'required');
    //     $this->form_validation->set_rules('password', 'Password', 'required');
        
    //     if ($this->form_validation->run() == FALSE){          
    //       $this->session->set_flashdata('error', validation_errors());      
    //     }
    //     else{
    //         $data = array('username'=> $this->input->post('username'),
    //                     'password' => $this->input->post('password'));
    //         $result = $this->Admin_model->login($data);

    //         if(!empty($result))
    //         {
    //             $data = array('username'=>$result->username,
    //                         'email'=>$result->email,
    //                         'id'=>$result->id);
    //             $this->session->set_userdata($data);
    //             redirect(base_url('admin/dashboard'));
    //         }
    //         else
    //         {
    //             $this->session->set_flashdata('error', 'Incorrect Username or password');
    //             redirect($_SERVER['HTTP_REFERER']);    
    //         }
    //     }      
        
    // }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('admin'));
    }

}
