<?php
$name = $_POST['name'] ;
$email = $_POST['email'] ;
$comments = $_POST['message'] ;

/**
 * This example shows making an SMTP connection with authentication.
 */

//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('Etc/UTC');

require '../PHPMailerAutoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer;
//Tell PHPMailer to use SMTP
$mail->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 0;
//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';
//Set the hostname of the mail server
$mail->Host = "mail.sonalmendis.com";
//Set the SMTP port number - likely to be 25, 465 or 587
$mail->Port = 25;
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication
$mail->Username = "contactform@sonalmendis.com";
//Password to use for SMTP authentication
$mail->Password = "Klop123az3ery";
//Set who the message is to be sent from
$mail->setFrom('contactform@sonalmendis.com', 'Portfolio :D');
//Set an alternative reply-to address
$mail->addReplyTo('the_jack_sparrow@hotmail.co.uk', 'Portfolio :D');
//Set who the message is to be sent to
$mail->addAddress('sonal.cmendis@gmail.com', 'SCM');
//Set the subject line
$mail->Subject = 'Contact Form Submission';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
//$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));
//Replace the plain text body with one created manually
$mail->Body = "Name: $name
Email: $email
Comments: $comments";
//Attach an image file
// $mail->addAttachment('images/phpmailer_mini.png');

//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}
