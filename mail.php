<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//get data from form
 $data = file_get_contents("php://linput");
 $user = json_decode($data, true);


 
$name = $user['name'];
$email = $user['email'];
$phone = $user['phone'];
$location = $user['location'];
$message = $user['message'];

// preparing mail content
$messagecontent =  $message;


//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
   
    $mail->isSMTP();
    
    $mail->Host     = 'mail.adaaverse.org';
    $mail->SMTPAuth  = true; 
    
    $mail->Username = '';
    
    $mail->Password  = '';
    
    $mail->Port  = 587;                                   

    //Recipients
    
    $mail->setFrom('admission@emeterr.com', 'Emeter Digital Training');
    $mail->addAddress($user['email'], $user['name']); 
    $mail->addReplyTo('admission@emeterr.com', 'Information');
    $mail->addCC('admission@emeterr.com');
    $mail->addBCC('admission@emeterr.com');
    
    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
   // $mail->addAttachment('photo.jpeg', 'photo.jpeg');    //Optional name

    //Content
    $mail->isHTML(true);                                  
    
//$mail->Subject = $subject;
    $mail->Body    = $messagecontent;
    

    $mail->send();
    echo json_encode(['status'=>'success']);
} catch (Exception $e) {
     echo json_encode(['error'=> $e]);
   // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}