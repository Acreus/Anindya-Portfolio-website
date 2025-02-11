<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$email_from = 'https://8fca0086-4fd8-4253-a868-f40e63bed600-00-25yx0uf340kar.pike.replit.dev/index.html';
$email_subject = "New Form Submission";
$email_body = "user name: $name.\n".
              "user email: $email.\n".
              "user message: $message.\n".
$to = "buildneo.23@gmail.com";
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $email \r\n";
mail($to,$email_subject,$email_body,$headers);
header("Location: contact.html");
?>