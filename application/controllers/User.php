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
        // $this->load->model('Admin_model');
        $this->load->helper(array('form', 'url'));
    }
    public function index()
    {
        $this->load->view('user/home');	
    }
    public function filter()
    {
        $this->load->view('user/filter'); 
    }
    
}
