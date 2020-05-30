<?php 

    //PHP Mailer Function File
    require_once('_lib/class.phpmailer.php');
    require("_lib/class.smtp.php");

      $mail = new PHPMailer();
        $mail->IsSMTP();                                      
        $mail->Host = "webmail.wealthmaxsolution.com";  
        $mail->SMTPAuth = true;
        $mail->Port = 587;     
        $mail->Username = "info@wealthmaxsolution.com";  
        $mail->Password = "Aindore@123$";

    //Email Script For Contact Form...
    if(isset($_POST['contact'])){
        //$mail = new PHPMailer();
        extract($_POST);
        $sub = 'Email Regarding Contact To You...';
        $mail->From = 'info@wealthmaxsolution.com';
        $mail->FromName = "$name";
        //To address and name
        $mail->addAddress('info@wealthmaxsolution.com', 'info@wealthmaxsolution.com');
        //Address to which recipient will reply
        $mail->addReplyTo('info@wealthmaxsolution.com', 'Reply');
        //Send HTML or Plain Text email
        $mail->isHTML(true);
        $mail->Subject = "$sub";
        $mail->Body = '<!DOCTYPE html>
                            <html>
                            <head>
                                <title>'.$sub.'</title>
                            </head>
                            <body>
                                <table>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email ID</th>
                                        <th>Mobile Number</th>
                                        <th>City</th>
                                        <th>Message</th>
                                    </tr>
                                    <tr>
                                        <td>'.$name.'</td>
                                        <td>'.$email.'</td>
                                        <td>'.$mob.'</td>
                                        <td>'.$city.'</td>
                                        <td>'.$msg.'</td>
                                    </tr>
                                </table>
                            </body>
                            </html>';
        if(!$mail->send()){
            echo '<script>window.location.href = "http://wealthmaxsolution.com?msg=fail"</script>';
        } 
        else{
          echo '<script>window.location.href = "http://wealthmaxsolution.com?msg=success"</script>';
            
        }
        $mail->ClearAddresses();
    }

    //Email Script For Main Free Trial Form (In Free Trial Page)...
   

    //Email Script For Career Form...
    if(isset($_POST['career'])){
                //$mail = new PHPMailer();
                extract($_POST);
                $sub = 'Email Regarding Career With You...';
                $mail->From = 'info@wealthmaxsolution.com';
                $mail->FromName = "$name";
                if (isset($_FILES['resume']) && $_FILES['resume']['error'] == UPLOAD_ERR_OK){
                    $mail->AddAttachment($_FILES['resume']['tmp_name'], $_FILES['resume']['name']);
                }
                 //To address and name
                $mail->addAddress('info@wealthmaxsolution.com', 'Capital Life Research');
                //Address to which recipient will reply
                $mail->addReplyTo('info@wealthmaxsolution.com', 'Reply');
                //Send HTML or Plain Text email
                $mail->isHTML(true);
                $mail->Subject = "$sub";
                $mail->Body = '<!DOCTYPE html>
                            <html>
                            <head>
                                <title>'.$sub.'</title>
                            </head>
                            <body>
                                <table>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email ID</th>
                                        <th>Message</th>
                                    </tr>
                                    <tr>
                                        <td>'.$name.'</td>
                                        <td>'.$email.'</td>
                                        <td>'.$msg.'</td>
                                    </tr>
                                </table>
                            </body>
                            </html>';
                if(!$mail->send()){
            echo '<script>window.location.href = "http://shreemarutigroup.com?msg=fail"</script>';
        } 
        else{

          echo '<script>window.location.href = "http://shreemarutigroup.com?msg=success"</script>';
            //echo 'window.location.href = "http://capitalliferesearch.com?msg=fail"';
        }
                $mail->ClearAddresses();
                $mail->ClearAttachments();
      
    }


if(isset($_POST['Registration'])){
        //$mail = new PHPMailer();
        extract($_POST);
        $sub = 'Email Regarding Free Trial To You...';
        $mail->From = 'info@wealthmaxsolution.com';
        $mail->FromName = "$name";
        //To address and name
        $mail->addAddress('info@wealthmaxsolution.com', 'info@wealthmaxsolution.com');
        //Address to which recipient will reply
        $mail->addReplyTo('info@wealthmaxsolution.com', 'Reply');
        //Send HTML or Plain Text email
        $mail->isHTML(true);
        $mail->Subject = "$sub";
        $mail->Body = '<!DOCTYPE html>
                            <html>
                            <head>
                                <title>'.$sub.'</title>
                            </head>
                            <body>
                                <table>
                                    <tr>
                                        <th>Name</th>
                                        <th>Mobile Number</th>
                                        <th>Select Services</th>
                                    </tr>
                                    <tr>
                                        <td>'.$name.'</td>
                                        <td>'.$cell.'</td>
                                        <td>'.$service.'</td>   
                                    </tr>
                                </table>
                            </body>
                            </html>';
        if(!$mail->send()){
            echo '<script>window.location.href = "http://wealthmaxsolution.com?msg=fail"</script>';
        } 
        else{
          echo '<script>window.location.href = "http://wealthmaxsolution.com?msg=success"</script>';
            //echo 'window.location.href = "http://capitalliferesearch.com?msg=fail"';
        }
        $mail->ClearAddresses();
    }



    if(isset($_POST['daybtn'])){
        //$mail = new PHPMailer();
        extract($_POST);
        $sub = 'Email Regarding Free Trial To You...';
        $mail->From = 'info@wealthmaxsolution.com';
        $mail->FromName = "$name";
        //To address and name
        $mail->addAddress('info@wealthmaxsolution.com', 'info@wealthmaxsolution.com');
        //Address to which recipient will reply
        $mail->addReplyTo('info@wealthmaxsolution.com', 'Reply');
        //Send HTML or Plain Text email
        $mail->isHTML(true);
        $mail->Subject = "$sub";
        $mail->Body = '<!DOCTYPE html>
                            <html>
                            <head>
                                <title>'.$sub.'</title>
                            </head>
                            <body>
                                <table>
                                    <tr>
                                        <th>Name</th>
                                        <th>Mobile Number</th>
                                    
                                    </tr>
                                    <tr>
                                        <td>'.$name.'</td>
                                        <td>'.$cell.'</td>
                                           
                                    </tr>
                                </table>
                            </body>
                            </html>';
        if(!$mail->send()){
            echo '<script>window.location.href = "http://wealthmaxsolution.com?msg=fail"</script>';
        } 
        else{
          echo '<script>window.location.href = "http://wealthmaxsolution.com?msg=success"</script>';
            //echo 'window.location.href = "http://capitalliferesearch.com?msg=fail"';
        }
        $mail->ClearAddresses();
    }

    
?>