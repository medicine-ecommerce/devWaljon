<?php
  
include("mail/PHPMailerAutoload.php");



$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output
$mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'mail.waljon.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'info@waljon.com';                 // SMTP username
$mail->Password = 'Admin@123';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->From ='info@waljon.com'; 
$mail->FromName = 'Infokotaku';
//$mail->addAddress('dipika.youngdecade@gmail.com', 'sumit ji');  

//$mail->addAddress('sumit.taskmanager@gmail.com', 'sumit ji');  
$mail->addAddress('mahigupta397@gmail.com');    // Add a recipient
/*
$mail->addAddress('ellen@example.com');               // Name is optional
$mail->addReplyTo('info@example.com', 'Information');
$mail->addCC('cc@example.com');
$mail->addBCC('bcc@example.com');

*/

//$mail->addAttachment('PHPMailer-master.zip');         // Add attachments
//$mail->addAttachment($db);    // Optional name



$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Forgot password Mail From Infokotaku';
$mail->Body    = 'test';
 if($mail->send()) {
     echo 'success';
 }
 else{
 
     echo 'failed'.$mail->ErrorInfo;;
 }
 