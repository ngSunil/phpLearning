<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

function send_mail($name, $email, $rollno, $class, $photo){
    $mail = new PHPMailer(true);

    try {
        $mail->SMTPDebug = 0;									
        $mail->isSMTP();										
        $mail->Host	 = 'mail.martvalley.com';				
        $mail->SMTPAuth = true;							
        $mail->Username = 'test@martvalley.com';				
        $mail->Password = 'test@martvalley';					
        $mail->SMTPSecure = 'ssl';							
        $mail->Port	 = 465;

        $mail->setFrom('test@martvalley.com', 'Name');		
        //$mail->addAddress('testgeo@martvalley.com');
        $mail->addAddress($email, $name);
        $mail->addAttachment($photo, "Student Pic");
        $mail->isHTML(true);								
        $mail->Subject = 'Form Submit';
        $mail->Body = "Thank you <b>$name </b> ";
        $mail->AltBody = 'Body in plain text for non-HTML mail clients';
        $mail->send();
        return true;
    } catch (Exception $e) {
        return false;
    }

}