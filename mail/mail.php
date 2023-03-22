<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';
//composer require phpmailer/phpmailer
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
    $mail->addBCC("nhpc.apps@gmail.com");
	$mail->setFrom('test@martvalley.com', 'Name');		
	//$mail->addAddress('testgeo@martvalley.com');
	$mail->addAddress('sun.aec@gmail.com', 'Name');
	$mail->addAddress('krish.ttb@gmail.com', 'Name');
	$mail->addAttachment("uploads/test.xlsx");
	$mail->isHTML(true);								
	$mail->Subject = 'Subject';
	$mail->Body = 'HTML message body in <b>bold</b> ';
	$mail->AltBody = 'Body in plain text for non-HTML mail clients';
	$mail->send();
	echo "Mail has been sent successfully!";
} catch (Exception $e) {
	echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>