<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$subject = $_POST['subject'];
$message= $_POST['message'];
$to = "katotichaitra@gmail.com";

$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Subject = " . $subject . "Message =" . $message;
$headers = "From: $name" . "\r\n" .
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
    echo "<h1>Thank you</h1>";
}
//redirect

?>