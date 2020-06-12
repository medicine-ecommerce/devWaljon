
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller 
{ 
   //set the class variable.
    public $template  = array();
    public $data      = array();

    public function __construct() {    
      parent::__construct();    
      $this->load->library('session');

    }

    public function Admin(){

      $this->template['header']        = $this->load->view('admin/layout/header',$this->data);      
      $this->template['sidebar']        = $this->load->view('admin/layout/sidebar');  
      $this->template['middle']        = $this->load->view('admin/'.$this->middle,$this->data);
      $this->template['footer']        = $this->load->view('admin/layout/footer');
      return  $this->template;
      // $this->load->view('developer/index', $this->template);

    }
    public function Vendor(){
      $this->data['status'] = $this->Vendor->getRowData('users','is_active,created_at,full_name',array('id'=>$this->session->userdata('vendor_id')));        

      $this->template['header']        = $this->load->view('admin/layout/header',$this->data);      
      $this->template['sidebar']        = $this->load->view('admin/layout/sidebar',$this->data);  
      $this->template['middle']        = $this->load->view('vendor/'.$this->middle,$this->data);
      $this->template['footer']        = $this->load->view('admin/layout/footer');
      return  $this->template;
      // $this->load->view('developer/index', $this->template);

    }
}
?>