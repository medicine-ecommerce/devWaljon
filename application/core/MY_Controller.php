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

      $this->template['header']        = $this->load->view('admin/layout/header');      
      $this->template['sidebar']        = $this->load->view('admin/layout/sidebar');  
      $this->template['middle']        = $this->load->view('admin/'.$this->middle);
      $this->template['footer']        = $this->load->view('admin/layout/footer');
      return  $this->template;
      // $this->load->view('developer/index', $this->template);

    }
    public function Vendor(){

      $this->template['header']        = $this->load->view('admin/layout/header');      
      $this->template['sidebar']        = $this->load->view('admin/layout/sidebar');  
      $this->template['middle']        = $this->load->view('vendor/'.$this->middle);
      $this->template['footer']        = $this->load->view('admin/layout/footer');
      return  $this->template;
      // $this->load->view('developer/index', $this->template);

    }
}
?>