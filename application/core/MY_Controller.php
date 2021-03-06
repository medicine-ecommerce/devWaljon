<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller 
{ 
   //set the class variable.
    public $template  = array();
    public $data      = array();

    public function __construct() {    
      parent::__construct();    
      $this->load->library('session');
      $this->load->model('Custom_model','Custom');        

    }

    public function Admin(){
      if($this->session->userdata('user_type')=='vendor'){
        $this->data['status'] = $this->Admin->getRowData('users','is_active,created_at,full_name',array('id'=>$this->session->userdata('user_id'))); 
      }
      $this->template['header']        = $this->load->view('admin/layout/header',$this->data);      
      $this->template['sidebar']        = $this->load->view('admin/layout/sidebar',$this->data);  
      $this->template['middle']        = $this->load->view('admin/'.$this->middle,$this->data);
      $this->template['footer']        = $this->load->view('admin/layout/footer');
      return  $this->template;
      // $this->load->view('developer/index', $this->template);

    }
    public function Vendor(){
      if($this->session->userdata('user_type')=='vendor'){
        $this->data['status'] = $this->Vendor->getRowData('users','is_active,created_at,full_name',array('id'=>$this->session->userdata('user_id')));        
      }

      $this->template['header']        = $this->load->view('admin/layout/header',$this->data);      
      $this->template['sidebar']        = $this->load->view('admin/layout/sidebar',$this->data);  
      $this->template['middle']        = $this->load->view('vendor/'.$this->middle,$this->data);
      $this->template['footer']        = $this->load->view('admin/layout/footer');
      return  $this->template;
      // $this->load->view('developer/index', $this->template);

    }
    public function User(){  

      if(!empty($this->cart->contents())){
          $this->data['cart_quantity'] = count($this->cart->contents());        
      }  
      if($this->session->userdata('user_type')=='user'){    
          $this->data['profile'] = $this->User->getRowData('users','created_at,full_name,last_name,image',array('id'=>$this->session->userdata('user_id')));        
      }
      $this->data['product_subcategory'] = $this->User->getCategoryData();        
      

      $this->template['header']        = $this->load->view('front/layout/header',$this->data);      
      // $this->template['sidebar']        = $this->load->view('front/layout/sidebar',$this->data);  
      $this->template['middle']        = $this->load->view('front/'.$this->middle,$this->data);
      $this->template['footer']        = $this->load->view('front/layout/footer');
      return  $this->template;
      // $this->load->view('developer/index', $this->template);

    }
}
?>