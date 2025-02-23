<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$email_from='<nitish.1001@gamil.com';
$email_subject = 'New From Submission';
$email_body = "user Name:$name.\n ".
              "user email:$visitor_email.\n".
                "subject:$subject.\n".     
"user message:$message.\n";
$to = 'nitish.1212kum@gmail.com';
$headers = "from : $email_from \r\n";
$hearder . = "reply-to :$visitor_email \r\n ";

mail($to,$email_subject,$email_body,$headers);
header("location: contact.html");

?>