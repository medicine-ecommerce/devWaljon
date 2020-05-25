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

    public function vendor_edit($id)
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
                $result = $this->Admin->VendorUpdate($data,$id);
                if ($result > 0) {
                    $this->session->set_flashdata('success', 'Vendor account updated successfully');                     
                }
            }
            redirect($_SERVER['HTTP_REFERER']); 
        }
        $this->data['vendor'] = $this->Admin->getVendorByID($id);        
        $this->middle = 'vendor_add';
        $this->Admin();

    }

    public function vendor_status($status,$id)
    {
        $result =$this->Admin->VendorStatus($status,$id);
        if (!empty($result)) {
            $this->session->set_flashdata('success', 'status updated successfully'); 
        }
        else{
            $this->session->set_flashdata('error', 'error! Please try again'); 
        }
        redirect($_SERVER['HTTP_REFERER']);
    }
    public function vendor_delete($id)
    {
        $result = $this->Admin->VendorDelete($id);
        if (!empty($result)) {
            $this->session->set_flashdata('success', 'Vendor deleted successfully');
        }else{
            $this->session->set_flashdata('error', 'error! Please try again');
        }
        redirect($_SERVER['HTTP_REFERER']);
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
            $result = $this->Admin->login($data);

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
    public function category_add()
    {
        if ($this->input->server('REQUEST_METHOD') == 'POST'){
            $this->form_validation->set_rules('category_name', 'category', 'required');
            if ($this->form_validation->run() == FALSE){ 
              $this->session->set_flashdata('error', validation_errors());      
            }
            else{
                $data = array(
                            'category_name'=>$this->input->post('category_name'),
                            'is_active'=>'1',
                            'created_at'=> date('Y-m-d H:i:s')
                        );
                $result = $this->Admin->insertData('category',$data);
                if (!empty($result)) {
                    $this->session->set_flashdata('success', 'Category added successfully');                    
                }
                else{
                    $this->session->set_flashdata('error','error! Please try again');
                }
                redirect($_SERVER['HTTP_REFERER']); 
            }
        }
        $this->middle = 'category/add';
        $this->Admin();
    }
    public function category_list()
    {
        $this->data['category'] = $this->Admin->getData('category','*','');
        $this->middle = 'category/list';
        $this->Admin();
    }
    public function category_edit($id)
    {
        if ($this->input->server('REQUEST_METHOD') == 'POST'){
            $this->form_validation->set_rules('category_name', 'category', 'required');
            if ($this->form_validation->run() == FALSE){ 
              $this->session->set_flashdata('error', validation_errors());      
            }
            else{
                $data = array(
                            'category_name'=>$this->input->post('category_name'),
                            'is_active'=>'1',
                            'created_at'=> date('Y-m-d H:i:s')
                        );
                $result = $this->Admin->updateData('category',$data,array('id'=>$id));
                if (!empty($result)) {
                    $this->session->set_flashdata('success', 'Category updated successfully');                    
                }
                else{
                    $this->session->set_flashdata('error','error! Please try again');
                }
                redirect($_SERVER['HTTP_REFERER']); 
            }
        }
        $this->data['category'] = $this->Admin->getRowData('category','*',array('id'=>$id));
        $this->middle = 'home_category';
        $this->Admin();
    }
    public function category_delete($id)
    {
        $result = $this->Admin->deleteData('category',array('id'=>$id));
        if (!empty($result)) {
            $this->session->set_flashdata('success', 'Category deleted successfully');
        }else{
            $this->session->set_flashdata('error', 'error! Please try again');
        }
        redirect($_SERVER['HTTP_REFERER']);
    }
    public function category_status($status,$id)
    {
        $result = $this->Admin->updateData('category',array('is_active'=>$status),array('id'=>$id));
        if (!empty($result)) {
            $this->session->set_flashdata('success', 'status updated successfully'); 
        }
        else{
            $this->session->set_flashdata('error', 'error! Please try again'); 
        }
        redirect($_SERVER['HTTP_REFERER']);
    }
    public function subcategory_add()
    {
        if ($this->input->server('REQUEST_METHOD') == 'POST'){
            $this->form_validation->set_rules('subcategory_name', 'subcategory name', 'required');
            $this->form_validation->set_rules('category_id', 'category', 'required');
            if ($this->form_validation->run() == FALSE){ 
              $this->session->set_flashdata('error', validation_errors());      
            }
            else{
                $data = array(
                            'category_id'=>$this->input->post('category_id'),
                            'subcategory'=>$this->input->post('subcategory_name')
                        );
                $result = $this->Admin->insertData('subcategory',$data);
                if (!empty($result)) {
                    $this->session->set_flashdata('success', 'Sub-Category added successfully');                    
                }
                else{
                    $this->session->set_flashdata('error','error! Please try again');
                }
                redirect($_SERVER['HTTP_REFERER']); 
            }
        }
        $this->data['category'] = $this->Admin->getData('category','category_name,id',array('is_active'=>'1'));
        $this->middle = 'subcategory/add';
        $this->Admin();
    }
    public function subcategory_list()
    {
        $this->data['subcategory'] = $this->Admin->SubCategoryList();

        $this->middle = 'subcategory/list';
        $this->Admin();
    }
    public function subcategory_edit($id)
    {
        if ($this->input->server('REQUEST_METHOD') == 'POST'){
            $this->form_validation->set_rules('subcategory_name', 'subcategory name', 'required');
            $this->form_validation->set_rules('category_id', 'category', 'required');
            if ($this->form_validation->run() == FALSE){ 
              $this->session->set_flashdata('error', validation_errors());      
            }
            else{
                $data = array(
                            'category_id'=>$this->input->post('category_id'),
                            'subcategory'=>$this->input->post('subcategory_name')
                        );
                $result = $this->Admin->updateData('subcategory',$data,array('id'=>$id));
                if (!empty($result)) {
                    $this->session->set_flashdata('success', 'Sub-Category added successfully');                    
                }
                else{
                    $this->session->set_flashdata('error','error! Please try again');
                }
                redirect($_SERVER['HTTP_REFERER']); 
            }
        }
        $this->data['subcategory'] = $this->Admin->getRowData('subcategory','*',array('id'=>$id));
        $this->data['category'] = $this->Admin->getData('category','category_name,id',array('is_active'=>'1'));
        $this->middle = 'subcategory/add';
        $this->Admin();
    }
    public function subcategory_delete($id)
    {
        $result = $this->Admin->deleteData('subcategory',array('id'=>$id));
        if (!empty($result)) {
            $this->session->set_flashdata('success', 'Subcategory deleted successfully');
        }else{
            $this->session->set_flashdata('error', 'error! Please try again');
        }
        redirect($_SERVER['HTTP_REFERER']);
    }
    public function manufacturer_add()
    {
        if ($this->input->server('REQUEST_METHOD') == 'POST'){
            $this->form_validation->set_rules('name', 'name', 'required');
            if ($this->form_validation->run() == FALSE){ 
              $this->session->set_flashdata('error', validation_errors());      
            }
            else{
                $data = array(
                            'name'=>$this->input->post('name')
                        );
                $result = $this->Admin->insertData('manufacturer',$data);
                if (!empty($result)) {
                    $this->session->set_flashdata('success', 'Manufacturer added successfully');                    
                }
                else{
                    $this->session->set_flashdata('error','error! Please try again');
                }
                redirect($_SERVER['HTTP_REFERER']); 
            }
        }
        $this->middle = 'manufacturer/add';
        $this->Admin();
    }
    public function manufacturer_list()
    {
        $this->data['manufacturer'] = $this->Admin->getData('manufacturer','*','');

        $this->middle = 'manufacturer/list';
        $this->Admin();
    }
    public function manufacturer_edit($id)
    {
        if ($this->input->server('REQUEST_METHOD') == 'POST'){
            $this->form_validation->set_rules('name', 'name', 'required');
            if ($this->form_validation->run() == FALSE){ 
              $this->session->set_flashdata('error', validation_errors());      
            }
            else{
                $data = array(
                            'name'=>$this->input->post('name')
                        );
                $result = $this->Admin->updateData('manufacturer',$data,array('id'=>$id));
                if (!empty($result)) {
                    $this->session->set_flashdata('success', 'Manufacturer updated successfully');                    
                }
                else{
                    $this->session->set_flashdata('error','error! Please try again');
                }
                redirect($_SERVER['HTTP_REFERER']); 
            }
        }
        $this->data['manufacturer'] = $this->Admin->getRowData('manufacturer','*',array('id'=>$id));

        $this->middle = 'manufacturer/add';
        $this->Admin();
    }
    public function manufacturer_delete($id)
    {
        $result = $this->Admin->deleteData('manufacturer',array('id'=>$id));
        if (!empty($result)) {
            $this->session->set_flashdata('success', 'Manufacturer deleted successfully');
        }else{
            $this->session->set_flashdata('error', 'error! Please try again');
        }
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function home_banners()
    {
        $this->middle = 'home_banner';
        $this->Admin();
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('admin'));
    }

    

}
