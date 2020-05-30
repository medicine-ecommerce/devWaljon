<?php 
	if (!defined('BASEPATH'))
    	exit('No direct script access allowed');

   	function sendEmail($subject, $body, $to , $from){
   				       // require_once("./mail/PHPMailerAutoload.php");
            ini_set('display_errors', 0);  


 		//PHP Mailer Function File
    require_once("./phpmailer/_lib/class.phpmailer.php");
    require("./phpmailer/_lib/class.smtp.php");
    

      $mail = new PHPMailer();
        $mail->IsSMTP();                                      
        $mail->Host = "webmail.waljon.com";  
        $mail->SMTPAuth = true;
        $mail->Port = 587;     
        $mail->Username = "portalwal";  
        $mail->Password = "w}z66PW@IU7M";

    //Email Script For Contact Form...
    // if(isset($_POST['contact'])){
        //$mail = new PHPMailer();
        // extract($_POST);
        $sub = 'Email Regarding Contact To You...';
        $mail->From = 'test@waljon.com';
        $mail->FromName = "Mausam";
        //To address and name
        $mail->addAddress('mausam.varun22@gmail.com', 'Testing Purpose');
        //Address to which recipient will reply
        $mail->addReplyTo('test1@waljon.com', 'Reply');
        //Send HTML or Plain Text email
        $mail->isHTML(true);
        $mail->Subject = "$sub";
        $mail->Body = "Testing";
        // $mail->Body = '<!DOCTYPE html>
        //                     <html>
        //                     <head>
        //                         <title>'.$sub.'</title>
        //                     </head>
        //                     <body>
        //                         <table>
        //                             <tr>
        //                                 <th>Name</th>
        //                                 <th>Email ID</th>
        //                                 <th>Mobile Number</th>
        //                                 <th>City</th>
        //                                 <th>Message</th>
        //                             </tr>
        //                             <tr>
        //                                 <td>'.$name.'</td>
        //                                 <td>'.$email.'</td>
        //                                 <td>'.$mob.'</td>
        //                                 <td>'.$city.'</td>
        //                                 <td>'.$msg.'</td>
        //                             </tr>
        //                         </table>
        //                     </body>
        //                     </html>';
        if($mail->send())
        {
            // echo '<script>window.location.href = "http://http://waljon.com.com?msg=fail"</script>';
            echo "success";
        } 
        else{
          // echo '<script>window.location.href = "http://wealthmaxsolution.com?msg=success"</script>';
        	echo "failed";
            
        }
        $mail->ClearAddresses();
   	}
	



?>