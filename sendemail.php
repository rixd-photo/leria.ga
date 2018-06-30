<?php
$name       = @trim(stripslashes($_POST['name'])); 
$company    = @trim(stripslashes($_POST['company'])); 
$from       = @trim(stripslashes($_POST['email'])); 
$subject    = "Contacto - Lería.ga";//@trim(stripslashes($_POST['subject'])); 
$message    = $name." ".$company."\r\n";
$message   .= $email."\r\n";
$message   .= @trim(stripslashes($_POST['message'])); 
$to   		= 'leria.ga@gmail.com';//This will be replaced with your email

$headers   = array();
$headers[] = "MIME-Version: 1.0";
$headers[] = "Content-type: text/plain; charset=iso-8859-1";
$headers[] = "From: {$name} <{$from}>";
$headers[] = "Reply-To: <{$from}>";
$headers[] = "Subject: {$subject}";
$headers[] = "X-Mailer: PHP/".phpversion();

mail($to, $subject, $message, $headers);

die;
?>