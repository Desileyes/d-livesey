<?php
$name = $_POST['name'] ;
$visitor_email = $_POST['email'] ;
$subject = $_POST['subject'] ;
$message = $_POST['message'] ;

$email_from = 'desileyesosa@gmail.com';

$email_subect = 'New Form Suubmission';

$email_body = "User Name: $name.\n". 
               "User Email: $vistitor_email.\n". 
                "Subject: $subject.\n". 
                 "User Message: $message.\n".;


$to = 'desileyesosa@gmail.com';

$headers = "From: $email_from \r\n";

$headers = "Reply-To: $visitor_email \r\n";


mail($to,$email_subect,$email_body,$headers);

header("Location: contact.html");


?>


