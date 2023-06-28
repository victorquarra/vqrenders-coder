<?php

$nombre = $_POST['name'];
$nombre = $_POST['email'];
$nombre = $_POST['textarea'];

//Como me va a llegar el cuerpo del mail, lo que la gente escribio
$mensaje = "Este mensaje fue enviado por " . $nombre . " \r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "Mensaje: " . $_POST['mensaje'] . " \r\n";
$mensaje .= "Enviado el: " . date('d/m/Y', time());

$para = 'vqrenders@gmail.com';
$asunto = 'Este mail fue enviado desde la web';

//funcion mail
//a quien le mando el mail
mail($para, $asunto, utf8_decode($mensaje), $header);

//Redireccion al haber enviado el form
header('Location:exito.html')


?>