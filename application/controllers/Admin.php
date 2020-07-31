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
        // if (empty($this->session->userdata('user_id')) && $this->router->fetch_method()!='index' && $this->router->fetch_method() !='adminLogin') {
        //     redirect(base_url('admin'));
        // }

    }

    public function index()
    {
        if (!empty($this->session->userdata('user_id'))) {
            redirect('admin/dashboard');
        }
    	$this->load->view('admin/login');
    }    


    public function dashboard()
    {
        $this->data['vendorsCount'] = $this->Admin->rowsCount('users','*',array('type'=>'vendor'));
        $this->data['vendors'] = $this->Admin->getData('users','*',array('type'=>'vendor'));
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
        $this->data['vendors'] = $this->Admin->getData('users','*',array('type'=>'vendor'));
        $this->middle = 'vendor_list';
        $this->Admin();
    }
    public function vendor_add()
    {
        if ($this->input->server('REQUEST_METHOD') == 'POST'){
            $this->form_validation->set_rules('full_name', 'Full Name', 'required');
            //$this->form_validation->set_rules('last_name', 'Last Name', 'required');
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
                            'full_name'        =>$this->input->post('full_name'),
                            //'last_name'         =>$this->input->post('last_name'),
                            'email'             =>$this->input->post('email'),
                            'mobile'            =>$this->input->post('mobile'),
                            'password'          => md5('123456'),
                            'type'              =>'vendor',
                            'is_active'         =>'1');
                $result = $this->Admin->insertData('users',$data);
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
            $this->form_validation->set_rules('full_name', 'First Name', 'required');
            //$this->form_validation->set_rules('last_name', 'Last Name', 'required');
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
                            'full_name'        =>$this->input->post('full_name'),
                            //'last_name'         =>$this->input->post('last_name'),
                            'email'             =>$this->input->post('email'),
                            'mobile'            =>$this->input->post('mobile'));
                $result = $this->Admin->updateData('users',$data,array('id'=>$id));
                if ($result > 0) {
                    $this->session->set_flashdata('success', 'Vendor account updated successfully');                     
                }
            }
            redirect($_SERVER['HTTP_REFERER']); 
        }
        $this->data['vendor'] = $this->Admin->getRowData('users','*',array('id'=>$id));        
        $this->middle = 'vendor_add';
        $this->Admin();

    }

    public function vendor_status($status,$id)
    {
        $result =$this->Admin->updateData('users',array('is_active'=>$status),array('id'=>$id));
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
        $result = $this->Admin->deleteData('users',array('id'=>$id));
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
                $data = array('full_name'=>$result->full_name,                            
                            'user_type'=>$result->type,
                            'email'=>$result->email,
                            'user_id'=>$result->id);
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
    public function product_form()
    {
        $this->middle = 'product_form';
        $this->Admin();
         //$this->load->view('admin/product_add');
    }
    public function parent_category_add()
    {
        if ($this->input->server('REQUEST_METHOD') == 'POST'){
            $this->form_validation->set_rules('category_name', 'category', 'required');
            if ($this->form_validation->run() == FALSE){ 
              $this->session->set_flashdata('error', validation_errors());      
            }
            else{
                $data = array(
                            'category_name'=>$this->input->post('category_name'),
                            'created_by'=> $this->session->userdata('user_id'),
                            'status'=>($this->session->userdata('user_type')=='admin')?'active':'pending',
                            'created_at'=> date('Y-m-d H:i:s')
                        );
                $result = $this->Admin->insertData('main_category',$data);
                if (!empty($result)) {
                    $this->session->set_flashdata('success', 'Parent Category added successfully');                    
                }
                else{
                    $this->session->set_flashdata('error','error! Please try again');
                }
                redirect($_SERVER['HTTP_REFERER']); 
            }
        }
        $this->middle = 'parent-category/add';
        $this->Admin();
    }
    public function parent_category_list()
    {
        $this->data['category'] = $this->Admin->ParentCategoryList();
        $this->middle = 'parent-category/list';
        $this->Admin();
    }
    public function parent_category_edit($id)
    {
        if ($this->input->server('REQUEST_METHOD') == 'POST'){
            $this->form_validation->set_rules('category_name', 'category', 'required');
            if ($this->form_validation->run() == FALSE){ 
              $this->session->set_flashdata('error', validation_errors());      
            }
            else{
                $data = array(
                            'category_name'=>$this->input->post('category_name')
                        );
                $result = $this->Admin->updateData('main_category',$data,array('id'=>$id));
                if (!empty($result)) {
                    $this->session->set_flashdata('success', 'Category updated successfully');                    
                }
                else{
                    $this->session->set_flashdata('error','error! Please try again');
                }
                redirect($_SERVER['HTTP_REFERER']); 
            }
        }
        $this->data['category'] = $this->Admin->getRowData('main_category','*',array('id'=>$id));
        $this->middle = 'parent-category/add';
        $this->Admin();
    }
    public function parent_category_delete($id)
    {
        $result = $this->Admin->deleteData('main_category',array('id'=>$id));
        if (!empty($result)) {
            $this->session->set_flashdata('success', 'Category deleted successfully');
        }else{
            $this->session->set_flashdata('error', 'error! Please try again');
        }
        redirect($_SERVER['HTTP_REFERER']);
    }
    public function parent_category_status($status,$id)
    {
        $result = $this->Admin->updateData('main_category',array('status'=>$status),array('id'=>$id));
        if (!empty($result)) {
            $this->session->set_flashdata('success', 'status updated successfully'); 
        }
        else{
            $this->session->set_flashdata('error', 'error! Please try again'); 
        }
        redirect($_SERVER['HTTP_REFERER']);
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
                            'created_by'=> $this->session->userdata('user_id'),
                            'status'=>($this->session->userdata('user_type')=='admin')?'active':'pending',
                            'main_category_id' =>$this->input->post('main_category_id'),
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
        $this->data['parentCategory'] = $this->Admin->getData('main_category','*',array('status'=>'active'));
        $this->middle = 'category/add';
        $this->Admin();
    }
    public function category_list()
    {
        $this->data['category'] = $this->Admin->CategoryList();
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
                            'main_category_id' =>$this->input->post('main_category_id')
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
        $this->data['parentCategory'] = $this->Admin->getData('main_category','*',array('status'=>'active'));
        $this->data['category'] = $this->Admin->getRowData('category','*',array('id'=>$id));
        $this->middle = 'category/add';
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
        $result = $this->Admin->updateData('category',array('status'=>$status),array('id'=>$id));
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
                            'created_by'=>$this->session->userdata('user_id'),
                            'category_id'=>$this->input->post('category_id'),
                            'subcategory'=>$this->input->post('subcategory_name'),
                            'created_at'=>date('Y-m-d H:i:s'),
                            'status'=> ($this->session->userdata('user_type')=='admin')?'active':'pending' 
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
        $this->data['category'] = $this->Admin->getData('category','category_name,id',array('status'=>'active'));
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
                    $this->session->set_flashdata('success', 'Product category added successfully');                    
                }
                else{
                    $this->session->set_flashdata('error','error! Please try again');
                }
                redirect($_SERVER['HTTP_REFERER']); 
            }
        }
        $this->data['subcategory'] = $this->Admin->getRowData('subcategory','*',array('id'=>$id));
        $this->data['category'] = $this->Admin->getData('category','category_name,id',array('status'=>'active'));
        $this->middle = 'subcategory/add';
        $this->Admin();
    }
    public function subcategory_delete($id)
    {
        $result = $this->Admin->deleteData('subcategory',array('id'=>$id));
        if (!empty($result)) {
            $this->session->set_flashdata('success', 'Product category deleted successfully');
        }else{
            $this->session->set_flashdata('error', 'error! Please try again');
        }
        redirect($_SERVER['HTTP_REFERER']);
    }
    public function subcategory_status($status,$id)
    {
        $result = $this->Admin->updateData('subcategory',array('status'=>$status),array('id'=>$id));
        if (!empty($result)) {
            $this->session->set_flashdata('success', 'status updated successfully'); 
        }
        else{
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
                            'name'=>$this->input->post('name'),
                            'created_by'=> $this->session->userdata('user_id'),
                            'status'=>($this->session->userdata('user_type')=='admin')?'active':'pending',
                            'created_at'=> date('Y-m-d H:i:s')
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
        $this->data['manufacturer'] = $this->Admin->ManufacturerList();

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
    public function manufacturer_status($status,$id)
    {
        $result = $this->Admin->updateData('manufacturer',array('status'=>$status),array('id'=>$id));
        if (!empty($result)) {
            $this->session->set_flashdata('success', 'status updated successfully'); 
        }
        else{
            $this->session->set_flashdata('error', 'error! Please try again'); 
        }
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function home_banners()
    {
        if ($this->input->server('REQUEST_METHOD') == 'POST'){
            $result = $this->Admin->upload('file','banner-images');
            $this->Admin->insertData('banner_images',array('image'=>$result['file_name'],'created_at'=>date('Y-m-d H:i:s')));
            $this->session->set_flashdata('success', 'Image uploaded successfully');
            redirect($_SERVER['HTTP_REFERER']);
        }
        $this->data['banners'] = $this->Admin->getData('banner_images','*','');
        $this->middle = 'home_banner';
        $this->Admin();
    }

    public function removeBannerImage($id)
    {
        $this->Admin->deleteData('banner_images',array('id'=>$id));
    }
    public function DeactiveBannerImage()
    {        
        $status = ($this->input->post('status')=='true')?'active':'deactive';
        $id = $this->input->post('id');
        $this->Admin->updateData('banner_images',array('status'=>$status),array('id'=>$id));
    }
    public function home_module()
    {
        $this->data['home_module'] = $this->Admin->getRowData('home_module','*',array('id'=>1));
        $this->data['home_category'] = $this->Admin->getData('home_category','*','');
        $this->middle = 'home_module/index';
        $this->Admin();
    }
    public function UpdateHomeModule()
    {
        if ($this->input->server('REQUEST_METHOD') == 'POST'){
            $array = array('feature_brand' => (!empty($this->input->post('feature_brand')))?1:0,
                          'shop_by_health' => (!empty($this->input->post('shop_by_health')))?1:0,
                          'offers' => (!empty($this->input->post('offers')))?1:0);
            $this->Admin->updateData('home_module',$array,array('id'=>1));
        }
    }
    public function add_home_category()
    {
        if ($this->input->server('REQUEST_METHOD') == 'POST'){
            $result = $this->Admin->insertData('home_category',array('home_category'=>$this->input->post('home_category')));
            if (!empty($result)) {
                $this->session->set_flashdata('success', 'Home Category added successfully'); 
            }
            else{
                $this->session->set_flashdata('error','error! Please try again');
            }
            redirect($_SERVER['HTTP_REFERER']);
        }
    }
    public function update_home_category()
    {
        if ($this->input->server('REQUEST_METHOD') == 'POST'){
            $result = $this->Admin->updateData('home_category',array('status'=>$this->input->post('category')),array('id'=>$this->input->post('id')));
            
        }
    }
    public function logout()
    {   
        $this->session->sess_destroy();
        redirect(base_url('admin'));
    }

    public function product_form_add()
    {
        if ($this->input->server('REQUEST_METHOD') == 'POST'){
            $this->form_validation->set_rules('name', 'name', 'required');
            if ($this->form_validation->run() == FALSE){ 
              $this->session->set_flashdata('error', validation_errors());      
            }
            else{
                $data = array(
                            'name'=>$this->input->post('name'),
                            'created_by'=>$this->session->userdata('user_id'),
                            'status'=>($this->session->userdata('user_type')=='admin')?'active':'pending',
                            'created_at'=> date('Y-m-d H:i:s')
                        );
                $result = $this->Admin->insertData('product_form',$data);
                if (!empty($result)) {
                    $this->session->set_flashdata('success', 'Product form added successfully'); 
                }
                else{
                    $this->session->set_flashdata('error','error! Please try again');
                }
                redirect($_SERVER['HTTP_REFERER']); 
            }
        }
        $this->middle = 'product-form/add';
        $this->Admin();
    }
    public function product_form_list()
    {
        $this->data['product_form'] = $this->Admin->ProducFormList();
        $this->middle = 'product-form/list';
        $this->Admin();
    }
    public function product_form_edit($id)
    {
        if ($this->input->server('REQUEST_METHOD') == 'POST'){
            $this->form_validation->set_rules('name', 'name', 'required');
            if ($this->form_validation->run() == FALSE){ 
              $this->session->set_flashdata('error', validation_errors());      
            }
            else{
                $data = array(
                            'name'=>$this->input->post('name'),
                            'created_by'=>$this->session->userdata('user_id'),
                            'status'=>($this->session->userdata('user_type')=='admin')?'active':'pending'
                        );
                $result = $this->Admin->updateData('product_form',$data,array('id'=>$id));
                if (!empty($result)) {
                    $this->session->set_flashdata('success', 'Product form updated successfully');
                }
                else{
                    $this->session->set_flashdata('error','error! Please try again');
                }
                redirect($_SERVER['HTTP_REFERER']); 
            }
        }
        $this->data['product_form'] = $this->Admin->getRowData('product_form','*',array('id'=>$id));
        $this->middle = 'product-form/add';
        $this->Admin();
    }
    public function product_form_delete($id)
    {
        $result = $this->Admin->deleteData('product_form',array('id'=>$id));
        if (!empty($result)) {
            $this->session->set_flashdata('success', 'Product form deleted successfully');
        }else{
            $this->session->set_flashdata('error', 'error! Please try again');
        }
        redirect($_SERVER['HTTP_REFERER']);
    }
    public function product_form_status($status,$id)
    {
        $result = $this->Admin->updateData('product_form',array('status'=>$status),array('id'=>$id));
        if (!empty($result)) {
            $this->session->set_flashdata('success', 'status updated successfully'); 
        }
        else{
            $this->session->set_flashdata('error', 'error! Please try again'); 
        }
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function getSubcategory()
    {
      if (!empty($this->input->post('cat_id'))) {
        $result = $this->Admin->getData('subcategory',array('subcategory','id'),array('category_id'=>$this->input->post('cat_id')));
        $option='';
        foreach ($result as $key => $value) {
          echo $option.='<option value="'.$value->id.'">'.$value->subcategory.'</option>';
        }
      }
    }

    public function brand_add()
    {
        if ($this->input->server('REQUEST_METHOD') == 'POST'){
            $this->form_validation->set_rules('brand_name', 'brand', 'required');
            if ($this->form_validation->run() == FALSE){ 
                $this->session->set_flashdata('error', validation_errors());      
            }
            else{
                $data = array(
                            'brand_name'=>$this->input->post('brand_name'),
                            'brand_desc'=>$this->input->post('brand_desc'),
                            'created_by'=> $this->session->userdata('user_id'),
                            'status'=>($this->session->userdata('user_type')=='admin')?'active':'pending',
                            'created_at'=> date('Y-m-d H:i:s')
                        );

                if(!empty($_FILES['brand_img'])){
                    $uploadedImg = $this->Admin->upload('brand_img','brand-images');
                    $data['brand_img'] = $uploadedImg['file_name'];
                }

                $result = $this->Admin->insertData('brand',$data);
                if (!empty($result)) {
                    $this->session->set_flashdata('success', 'Brand added successfully');                    
                }
                else{
                    $this->session->set_flashdata('error','error! Please try again');
                }
                redirect($_SERVER['HTTP_REFERER']); 
            }
        }
        $this->middle = 'brand/add';
        $this->Admin();
    }
    public function brand_list()
    {
        $this->data['brand'] = $this->Admin->brandList();
        $this->middle = 'brand/list';
        $this->Admin();
    }
    public function brand_edit($id)
    {
        if ($this->input->server('REQUEST_METHOD') == 'POST'){
            $this->form_validation->set_rules('brand_name', 'brand', 'required');
            if ($this->form_validation->run() == FALSE){ 
              $this->session->set_flashdata('error', validation_errors());      
            }
            else{
                $data = array(
                            'brand_name'=>$this->input->post('brand_name'),
                            'brand_desc'=>$this->input->post('brand_desc')
                        );
                if(!empty($_FILES['brand_img'])){
                    $uploadedImg = $this->Admin->upload('brand_img','brand-images');
                    $data['brand_img'] = $uploadedImg['file_name'];
                }
                $result = $this->Admin->updateData('brand',$data,array('id'=>$id));
                if (!empty($result)) {
                    $this->session->set_flashdata('success', 'Brand updated successfully');                    
                }
                else{
                    $this->session->set_flashdata('error','error! Please try again');
                }
                redirect($_SERVER['HTTP_REFERER']); 
            }
        }
        $this->data['brand'] = $this->Admin->getRowData('brand','*',array('id'=>$id));
        $this->middle = 'brand/add';
        $this->Admin();
    }
    public function brand_delete($id)
    {
        $result = $this->Admin->deleteData('brand',array('id'=>$id));
        if (!empty($result)) {
            $this->session->set_flashdata('success', 'Brand deleted successfully');
        }else{
            $this->session->set_flashdata('error', 'error! Please try again');
        }
        redirect($_SERVER['HTTP_REFERER']);
    }
    public function brand_status($status,$id)
    {
        $result = $this->Admin->updateData('brand',array('status'=>$status),array('id'=>$id));
        if (!empty($result)) {
            $this->session->set_flashdata('success', 'status updated successfully'); 
        }
        else{
            $this->session->set_flashdata('error', 'error! Please try again'); 
        }
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function saltComposition_add()
    {
        if ($this->input->server('REQUEST_METHOD') == 'POST'){
            $this->form_validation->set_rules('saltComposition_name', 'saltComposition', 'required');
            if ($this->form_validation->run() == FALSE){ 
                $this->session->set_flashdata('error', validation_errors());      
            }
            else{
                $data = array(
                            'name'=>$this->input->post('saltComposition_name'),
                            'created_by'=> $this->session->userdata('user_id'),
                            'status'=>($this->session->userdata('user_type')=='admin')?'active':'pending',
                            'created_at'=> date('Y-m-d H:i:s')
                        );

                if(!empty($_FILES['saltComposition_img'])){
                    $uploadedImg = $this->Admin->upload('saltComposition_img','saltComposition-images');
                    $data['image'] = $uploadedImg['file_name'];
                }

                $result = $this->Admin->insertData('saltcomposition',$data);
                if (!empty($result)) {
                    $this->session->set_flashdata('success', 'Salt Composition added successfully');                    
                }
                else{
                    $this->session->set_flashdata('error','error! Please try again');
                }
                redirect($_SERVER['HTTP_REFERER']); 
            }
        }
        $this->middle = 'saltComposition/add';
        $this->Admin();
    }
    
    public function saltComposition_list()
    {
        $this->data['saltComposition'] = $this->Admin->saltCompositionList();
        $this->middle = 'saltComposition/list';
        $this->Admin();
    }
    public function saltComposition_edit($id)
    {
        if ($this->input->server('REQUEST_METHOD') == 'POST'){
            $this->form_validation->set_rules('saltComposition_name', 'saltComposition', 'required');
            if ($this->form_validation->run() == FALSE){ 
              $this->session->set_flashdata('error', validation_errors());      
            }
            else{
                $data = array(
                            'name'=>$this->input->post('saltComposition_name')
                        );

                if(!empty($_FILES['saltComposition_img'])){
                    $uploadedImg = $this->Admin->upload('saltComposition_img','saltComposition-images');
                    $data['image'] = $uploadedImg['file_name'];
                }

                $result = $this->Admin->updateData('saltcomposition',$data,array('id'=>$id));
                if (!empty($result)) {
                    $this->session->set_flashdata('success', 'Salt Composition updated successfully');                    
                }
                else{
                    $this->session->set_flashdata('error','error! Please try again');
                }
                redirect($_SERVER['HTTP_REFERER']); 
            }
        }
        $this->data['saltComposition'] = $this->Admin->getRowData('saltComposition','*',array('id'=>$id));
        $this->middle = 'saltComposition/add';
        $this->Admin();
    }
    public function saltComposition_delete($id)
    {
        $result = $this->Admin->deleteData('saltcomposition',array('id'=>$id));
        if (!empty($result)) {
            $this->session->set_flashdata('success', 'saltComposition deleted successfully');
        }else{
            $this->session->set_flashdata('error', 'error! Please try again');
        }
        redirect($_SERVER['HTTP_REFERER']);
    }
    public function saltComposition_status($status,$id)
    {
        $result = $this->Admin->updateData('saltcomposition',array('status'=>$status),array('id'=>$id));
        if (!empty($result)) {
            $this->session->set_flashdata('success', 'status updated successfully'); 
        }
        else{
            $this->session->set_flashdata('error', 'error! Please try again'); 
        }
        redirect($_SERVER['HTTP_REFERER']);
    }  
    public function linking()
    {
        $this->data['main_category'] = $this->Admin->getData('main_category','category_name,id',array('status'=>'active'));
        $this->data['home_category'] = $this->Admin->getData('home_category','home_category,id,main_category_id',array('status'=>'active'));
        $this->middle = 'linking/linking';
        $this->Admin();
    }
    public function ProductLinking()
    {
         $cat_id = $this->input->post('cat_id');
         $subcat_id = $this->input->post('subcat_id');
         $this->Admin->updateData('home_category',array('main_category_id'=>implode(',',$subcat_id)),array('id'=>$cat_id));
    }

    public function pending_orders()
    {
        $this->middle = 'orders/pending_orders';
        $this->Admin();
    }
    public function deliver_orders()
    {
        $this->middle = 'orders/deliver_orders';
        $this->Admin();
    }
    public function cancle_orders()
    {
        $this->middle = 'orders/cancle_orders';
        $this->Admin();
    }
    public function orders($status='')
    {
        $this->data['orders'] = $this->Admin->GetAllOrders($status);
        $this->middle = 'orders/all_orders';
        $this->Admin();
    }
    public function order_view($id)
    {
        $this->data['order'] = $this->Admin->OrderView($id);
        $this->middle = 'orders/order_view';
        $this->Admin();
    }
    // public function shiping_order()
    // {   
    //     $this->load->helper('shiproket_helper');        
    //     $data['shipping_order'] = $this->Admin->shippingOrderData($this->input->post('order_id'));        
    //     $this->orderPlaceToShipping($data['shipping_order']);
    //     //$this->load->view('admin/shiping_order',$data);
    //     // $this->Admin();
    // }
    public function invoice()
    {   
        $this->load->view('admin/invoice_generate');
        // $this->Admin();
    }
    public function shiping_auth()
    {        
        // $this->middle = 'shipping_auth';
        $this->load->view('admin/shipping_auth');
        // $this->Admin();
    }

}
