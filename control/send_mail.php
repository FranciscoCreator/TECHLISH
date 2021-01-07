<?php
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];
$programa_select = $_POST['programa_select'];


require_once 'mail/lib/swift_required.php';
$transport = Swift_SmtpTransport::newInstance('mail.dmmvission.com', 587)
    ->setUsername('soporte@dmmvission.com')
    ->setPassword('soporte123');

$mailer = Swift_Mailer::newInstance($transport);
$message = Swift_Message::newInstance('Solicitud de información TECHLISH')
    ->setFrom(array('soporte@dmmvission.com' => 'Solicitud de información TECHLISH'))
    ->setTo(
        array(
            'mauricio2769@gmail.com' => 'Mauricio'
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
