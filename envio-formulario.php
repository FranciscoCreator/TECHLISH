<?php
$nombre_usuario=$_POST['nombre'];
$apellido_usuario=$_POST['apellido'];
$email_usuario=$_POST['email'];
$consulta_usuario=$_POST['mensaje'];
$select=-$POST['programa-interes'];
// Creo 3 variables que me toman lo que se envía por POST de cada valor del formulario

$destino="hurley.creador@gmail.com";

$asunto="Contacto desde WEB TECH-LISH www.techlish.com.mx";

$mensaje="Tu Nombre es: ".$nombre_usuario."\r\n";
$mensaje.="Tu Apellido es: ".$apellido."\r\n";
$mensaje.="Tu Email es: ".$email_usuario."\r\n";
$mensaje.="Consulta: ".$consulta_usuario."\r\n";
$mensaje.="programa de interes: ".$select."\r\n";

$remitente="From: algo@jonylif.com.ar";

mail($destino, $asunto, $mensaje, $remitente);


header("Location:index.php?i=ok");
// SI EL FORMULARIO SE ENVIO CORRECTAMENTE, PONEME EN LA URL DESPUES DEL INDEX.PHP UN SIGNO DE PREGUNTA, UNA LETRA I, Y UN IGUAL OK
?>
