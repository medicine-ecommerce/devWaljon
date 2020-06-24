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
    public function product()
    {
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
    public function filter()
    {
        $this->middle = 'filter';
        $this->User();
        // $this->load->view('user/filter'); 
    }
    public function filter1()
    {
        $this->load->view('user/filter'); 
    }
}
