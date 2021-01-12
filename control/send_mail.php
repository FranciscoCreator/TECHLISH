<?php
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];
$programa_select = $_POST['programa_select'];


require_once 'mail/lib/swift_required.php';
$transport = Swift_SmtpTransport::newInstance('mail.techlish.com.mx', 587)
    ->setUsername('contacto@techlish.com.mx')
    ->setPassword('Contact@tech$1');

$mailer = Swift_Mailer::newInstance($transport);
$message = Swift_Message::newInstance('Solicitud de información TECHLISH')
    ->setFrom(array('contacto@techlish.com.mx' => 'Solicitud de información TECHLISH'))
    ->setTo(
        array(
            'contacto@techlish.com.mx' => 'Contacto'   
        )
    )
    ->setBody(
            'Nombre: '.$nombre . '
        Email: ' . $email. '
        Teléfono: ' . $telefono . '
        Programa seleccionado: ' . $programa_select. '
        Mensaje: ' .$mensaje);
$mailer->send($message);
echo "Hemos recibido su solicitud, en breve nos pondremos en contácto con usted.";
