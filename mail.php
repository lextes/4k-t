<?php

    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];

    $header = 'De: '. $email . " \r\n";
    $header .= "X-Mailer: PHP/". phpversion() . " \r\n";
    $header .= "Mime-Version: 1.0 \r\n";
    $header .= "Content-Type: text/plain";

    $mensaje = "Mensaje enviado por: " . $name . " \r\n";
    $mensaje .= "Email: " . $email . " \r\n";
    $mensaje .= "Asunto: " . $subject . " \r\n";
    $mensaje .= "Mensaje: " . $_POST['message'] . " \r\n";
    $mensaje .= "Enviado el: " . date('d/m/Y', time());

    $para = 'forza1708@gmail.com';
    $asunto = 'Mensaje de 4K&T web';

    mail($para, $asunto, utf8_decode($mensaje), $header);

    header("Location:index.html")

?>
