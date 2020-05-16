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
        $this->load->model('Admin_model');
        $this->load->helper(array('form', 'url')); 
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

    public function adminLogin(){
         
        $userName = $this->input->post('userName');
        $password = $this->input->post('password');
            
        $query = $this->Admin_model->login($userName,$password,'admin');

        if(!empty($query))
        {
            echo "success";
            //redirect(base_url('admin/dashboard'));
        }
        else
        {
            echo "failed";
        }
    }

}
