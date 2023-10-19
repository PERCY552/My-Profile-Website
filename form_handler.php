<?php
$name = $_POST['name'];
$vistor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_form = 'moloko@softmeet.co.za';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name./n".
              "User Email: $visitor_email./n".
              "User Subjec: $message ./n".

$to: 'mprakgoale26@gmail.com';

$header = "From: $email_from \r\";

$headers .= "Reply-To: $visitor_email \r\n";


mail($to,$email_subject,$email_body,$header);

header("Location: contact.html");




?>