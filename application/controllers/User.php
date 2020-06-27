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
    public function product($id)
    {
        $this->data['product'] = $this->User->getProductByID($id);
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
    public function product_category()
    {
        $this->data['sub_category'] = $this->User->getData('subcategory','id,category_id,subcategory,status',array('status'=>'active'));
        $this->data['brand'] = $this->User->getData('brand','id,brand_name,status',array('status'=>'active'));
        $this->data['product_form'] = $this->User->getData('product_form','id,name,status',array('status'=>'active'));
        $this->middle = 'filter';
        $this->User();        
    }
    public function filter1()
    {
        $this->load->view('user/filter'); 
    }
    public function despatch_develory()
    {
        $this->load->view('user/despatch'); 
    }
    public function despatch_develory1()
    {
        $this->middle = 'despatch';
        $this->User();
    }
    public function cart()
    {
        $this->middle = 'cart';
        $this->User();
    }
}
