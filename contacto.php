<?php
   if (isset ($_POST['enviar'])) {

    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];


    $to = "tatianadelsoglio96@gmail.com";
    $subject = "Contacto desde el sitio web";

    $headers = 'From: '.$email."\r\n";
    $headers .= 'Reply-To: '.$email."\r\n";
    $headers .= 'X-Mailer: PHP/' . phpversion();

    // $message = "Nombre: $nombre\n E-Mail: $email\n Mensaje:\n $mensaje"


    $message = "Detalles del formulario de contacto:\n\n";
    $message .= "Nombre: " . $nombre . "\n";
    $message .= "E-mail: " . $telefono . "\n";
    $message .= "Teléfono: " . $email . "\n";
    $message .= "Comentarios: " . $mensaje . "\n\n";

    
 
        if (mail($to, $subject, $message, $headers)) {
            echo 'El mensaje se ha enviado';
        } else {
            echo 'Falló el envio';
        }


    };

?>