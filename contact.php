<?php


$field_name = $_POST['name'];
$field_email = $_POST['email'];
$field_phone = $_POST['phone'];
$field_message = $_POST['message'];


$mail_to = 'management@themtco.com';
$mail_from = $field_email;
$subject = 'New Message from theMTCo website!';

// $body_message = 'From: '.$field_name."\n";
// $body_message .= 'E-mail: '.$field_email."\n";
// $body_message .= 'Phone: '.$field_phone."\n";
// $body_message .= 'Message: '.$field_message;

$body_message = $field_message;

$headers = 'From: $field_email \r\n';

$myfile = fopen("printing_messages.txt", "a+") or die("Unable to open file!");

fwrite($myfile, $mail_from);
fwrite($myfile, "\r\n");
fwrite($myfile, $subject);
fwrite($myfile, "\r\n");
fwrite($myfile, $body_message);
fwrite($myfile, "\r\n");
fwrite($myfile, $mail_to);
fwrite($myfile, "\r\n");
fwrite($myfile, "\r\n");

alert('Message Sent')
window.location = 'contact.html'


// echo "Thank You!" . " -" . "<a href='index.html'> Return Home</a>";
// $mail_status = mail($mail_to, $subject, $body_message, $headers) or die("Error Message");
// echo "Thank You!" . " -" . "<a href='index.html'> Return Home</a>";
?>