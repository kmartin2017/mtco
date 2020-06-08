<?php


$field_name = $_POST['name'];
$field_email = $_POST['email'];
$field_phone = $_POST['phone'];
$field_message = $_POST['message'];


$mail_to = 'management@themtco.com';
$subject = 'New Message from theMTCo website!';

// $body_message = 'From: '.$field_name."\n";
// $body_message .= 'E-mail: '.$field_email."\n";
// $body_message .= 'Phone: '.$field_phone."\n";
// $body_message .= 'Message: '.$field_message;

$body_message = $field_message;

$headers = 'From: $field_email \r\n';

$mail_status = mail($mail_to, $subject, $body_message, $headers) or die("Error Message");
echo "Thank You!" . " -" . "<a href='index.html'> Return Home</a>";
?>