<?php 
	if (!defined('BASEPATH'))
    	exit('No direct script access allowed');

   	function sendEmail($subject, $body, $to , $from){
   			
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
        
        
        $this->email->from('info@rxkin.com', 'rxkin');
        $this->email->to('mausam.varun22@gmail.com');
        // $this->email->cc('another@another-example.com');
        // $this->email->bcc('them@their-example.com');
        
        $this->email->subject('Email Test');
        $this->email->message('Testing the email class.');
        //print_r($this->upload->display_errors());
        $response =  $this->email->send();
        return $response;
        
   	}
	



?>