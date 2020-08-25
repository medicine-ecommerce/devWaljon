<?php

//include_once('./ses/aws-autoloader.php');

Class CustomEmail_model extends CI_Model {    
    
    public function __construct() {
        parent::__construct();
    }
    
    function sendEmail($subject,$body, $to , $from){
   			
        $this->load->library('email');
        
        $config = Array(
            'protocol'  => 'smtp',
            'smtp_host' => 'mail.rxkin.com',
            'smtp_port' => '587',
            'smtp_user' => 'info@rxkin.com',
            'smtp_pass' => ')!](K+c~&@{*',
            'mailtype'  => 'html',
            'starttls'  => true,
            'newline'   => "\r\n"
        );
        
        $config['protocol'] = 'SMTP';
        $config['smtp_host'] = 'rxkin.com';
        $config['smtp_user'] = 'info@rxkin.com';
        $config['smtp_pass'] = ')!](K+c~&@{*';
        $config['smtp_port'] = 465;
        $config['mailpath'] = '/usr/sbin/sendmail';
        $config['charset'] = 'iso-8859-1';
        
        
        $this->email->initialize($config);
        
        
        $this->email->from('info@rxkin.com', 'Rxkin');
        $this->email->to($to);
        // $this->email->cc('another@another-example.com');
        // $this->email->bcc('them@their-example.com');
        
        $this->email->subject($subject);
        $this->email->message($body);
        //print_r($this->upload->display_errors());
        $response =  $this->email->send();
        return $response;
        
   	}
    
}