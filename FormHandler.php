<?php
$name=$_POST['name'];
$visitor_Email=$_POST['Email'];
$sub=$_POST['subject'];
$Msg=$_POST['message'];

$email_from='swaranjalikulkarni45@gmail.com';

$email_subject='New Form Submission';

$email_body= "User Name : $name.\n"
             "User Email : $visitor_Email.\n"
             "Subject: "$sub.\n"
             "message: $Msg.\n";

$to='swaranjalikulkarni832@gmail.com';

$headers="From: $email_from\n";

$headers=Reply To: $visitor_Email\n;

mail($to,$email_subject,$email_body,$header);

header("Location :Contact.html");

?>