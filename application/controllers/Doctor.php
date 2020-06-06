<?php 
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

Class Doctor extends MY_Controller {

    public function __construct() 
    {
        parent::__construct();
        $this->load->database();
        // $this->load->model('Admin_model');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');  
        $this->load->model('Doctor_model','Doctor');        
        $this->load->library('upload');
    }
    public function index()
    {
        if (!empty($this->session->userdata('doctor_id'))) {
            redirect('doctor/dashboard');
        }
        else
        {
            redirect('doctor/login');
        }    	
    }
    public function login()
    {
        $this->load->helper('cookie');
        $this->load->view('doctor/login');
    }
    public function doctorlogin()
    {
        $this->load->helper('cookie');
        if ($this->input->server('REQUEST_METHOD') == 'POST'){            
            $this->form_validation->set_rules('email', 'Email', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');
            
            if ($this->form_validation->run() == FALSE){          
                
              $this->session->set_flashdata('error', validation_errors());      
            }            
            else
            {                
                $data = array('email'=> $this->input->post('email'),
                            'password' =>md5($this->input->post('password'))
                            );

                $result = $this->Doctor->login($data);
                if(!empty($result))
                {
                    $data = array('email'=>$result->email,
                                'doctor_id'=>$result->doctor_id);
                    $this->session->set_userdata($data);
                    // redirect(base_url('admin/dashboard'));
                    redirect('/doctor/personaldashboard/', 'refresh');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Incorrect Username or password');
                    redirect($_SERVER['HTTP_REFERER']);    
                }
            } 
        }           
    }
    public function doctorregister()
    {
        $this->load->helper('cookie');
        $this->load->view('doctor/register');   
    }
    public function doctorregistration()
    {
        $this->load->helper('cookie');
        if ($this->input->server('REQUEST_METHOD') == 'POST'){            
            $this->form_validation->set_rules('email', 'email', 'required|valid_email|is_unique[doctor.email]');
            $this->form_validation->set_rules('password', 'password', 'required');            
            
            if($this->input->post('remember_password')){                
                set_cookie('email',base64_encode($this->input->post('email')),3000);
                set_cookie('password',base64_encode($this->input->post('password')),3000);
            }
            
            // $this->form_validation->set_rules('mobile', 'mobile', 'required|numeric');
            // $this->form_validation->set_rules('company_name', 'Company Name', 'required');
            // $this->form_validation->set_rules('company_address', 'Company addresss', 'required');
           
            if($this->form_validation->run() == FALSE){ 
              $this->session->set_flashdata('error', validation_errors());      
            }
            else{
                $data = array(                            
                            'email'=>$this->input->post('email'),
                            'password'=>md5($this->input->post('password')),
                            'is_active'=>'0');

                $last_id = $this->Doctor->doctorRegistration($data);               
                if ($last_id > 0) {
                    $data = array('email'=>$this->input->post('email'),
                                  'doctor_id'=>$last_id);
                    $this->session->set_userdata($data);
                    $this->session->set_flashdata('success', 'doctor account created successfully');                     
                    redirect('/doctor/personalDetails/', 'refresh');
                }
            }            
            //redirect($_SERVER['HTTP_REFERER']); 
        }
        $this->load->view('doctor/register');
        //$this->Admin();
    }
    public function personaldashboard()
    {
        $this->load->view('doctor/header');
        $this->load->view('doctor/profile');
        $this->load->view('doctor/footer');
    }
    public function doctor_profile()
    { 
        if ($this->input->server('REQUEST_METHOD') == 'POST'){
            $this->form_validation->set_rules('first_name', 'First Name', 'required');
            $this->form_validation->set_rules('last_name', 'Last Name', 'required');
            $this->form_validation->set_rules('email', 'email', 'required|valid_email');
            $this->form_validation->set_rules('mobile', 'mobile', 'required|numeric');
            $this->form_validation->set_rules('specialty', 'Company Name', 'required');
            $this->form_validation->set_rules('address', 'Addresss', 'required');

            
            if ($this->form_validation->run() == FALSE){                 
                $this->session->set_flashdata('error', validation_errors());      
            }
            else{

                if(!empty($_FILES['profile_image'])){
                  $uploadedImg = $this->Doctor->upload("profile_image","doctor_profile");
                }
                if(!empty($_FILES['licence_image'])){
                   $uploadedLicence = $this->Doctor->upload("licence_image","licence");
                } 
                if(!empty($_FILES['licence_image'])){
                   $uploadedDocuments = $this->Doctor->upload("documents","documents");
                }                
                $data = array(
                            'specialty'=>$this->input->post('specialty'),
                            'address'=>$this->input->post('address'),
                            'first_name'=>$this->input->post('first_name'),
                            'last_name'=>$this->input->post('last_name'),
                            'email'=>$this->input->post('email'),
                            'mobile'=>$this->input->post('mobile'),
                            'profile_image'=>!empty($uploadedImg['file_name']) ? $uploadedImg['file_name'] : $this->input->post('edit_profile_image'),
                            'licence_image'=>!empty($uploadedLicence['file_name']) ? $uploadedLicence['file_name'] : $this->input->post('edit_licence_image'),
                            'documents'=>!empty($uploadedDocuments['file_name']) ? $uploadedDocuments['file_name'] : $this->input->post('edit_documents'),
                            'is_active'=>'0');
                $result = $this->Doctor->doctorProfileUpdate($data,array('doctor_id'=>$this->session->userdata('doctor_id')));
                if ($result > 0) {
                    $this->session->set_flashdata('success', 'Doctor account created successfully');
                }
            }
            redirect($_SERVER['HTTP_REFERER']); 
        }
    }
    public function dashboard()
    {
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('doctor'));
    }
}
