<?php
$name = $_POST['Name'];
$Visitor_Email = $_POST['Email'];
$Subject = $_POST['Subject'];
$Message = $_POST['Message'];

$Email_from = 'pratik0611patil@gmail.com';

$Email_Subject = 'New Form Submission';

$Email_body =  "User Name: $name.\n".
               "User Email: $Visitor_Email.\n".
               "User Subject: $Subject.\n".
               "User Message: $Message.\n";

               
$to = 'pp6276816@gmail.com';

$headers = "From : $Email_from \r\n";

$headers .= "Reply-To : $Visitor_Email \r\n";

mail($to,$Email_Subject,$Email_body,$headers);

header("Lacation :Contact.html");



?>