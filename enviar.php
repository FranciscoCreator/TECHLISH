<?php  

// Llamando a los campos
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];
$select =$_POST['select-programa'];

// Datos para el correo
$destinatario = "contacto@techlish.com";
$asunto = "Contacto desde nuestra web";

$carta = "De: $nombre \n";
$carta .= "Correo: $correo \n";
$carta .= "Telefono: $telefono \n";
$carta .= "Mensaje: $mensaje";
$carta .= "Programa de interes: $select";

// Enviando Mensaje
mail($destinatario, $asunto, $carta);
header('Location:gracias.html');

?>