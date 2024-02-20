<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$to = "vqrenders@gmail.com";
$subject = "Mail from website";
$txt = "Name = ". $name . "\r\n Email = " . $email . "\r\n Message = " . $message;
$headers = "From: noreply@vqrendersstudio.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header('Location: https://vqrendersstudio.com/pages/exito.html')
?>
