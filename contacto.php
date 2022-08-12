<?php

// if(isset($_POST['email'])) {

//     // Debes editar las próximas dos líneas de código de acuerdo con tus preferencias
//     $email_to = "tatianadelsoglio96@gmail.com";
//     $email_subject = "Contacto desde el sitio web";
    
//     // Aquí se deberían validar los datos ingresados por el usuario
//     if(!isset($_POST['nombre']) ||
// //      !isset($_POST['telefono']) ||
// //      !isset($_POST['email']) ||
// //      !isset($_POST['mensaje'])) {
    
//     echo "<b>Ocurrió un error y el formulario no ha sido enviado. </b><br />";
//     echo "Por favor, vuelva atrás y verifique la información ingresada<br />";
//     die();
//     }


    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];

    $to = "info@expocervecera.com.ar";
    $subject = "Contacto desde el sitio web";

    $headers = 'From: '.$email."\r\n";
    $headers .= 'Reply-To: '.$email."\r\n";
    $headers .= "MIME-Version: 1.0 \r\n";
    $headers .= 'X-Mailer: PHP/' . phpversion();

    


    $message = "Detalles del formulario de contacto:\n\n";
    $message .= "Nombre: " . $nombre . "\n";
    $message .= "E-mail: " . $telefono . "\n";
    $message .= "Teléfono: " . $email . "\n";
    $message .= "Comentarios: " . $mensaje . "\n\n";

    

    mail($to, $subject, utf8_decode($message), $headers);

    echo "¡El mensaje se ha enviado con éxito!";

    // header("Location:index.html");

    // Ahora se envía el e-mail usando la función mail() de PHP

    // if() {
    //     echo "Mensaje Enviado";
    // } else {
    //     echo "Error, al enviar mensaje";
    // }


    // echo "¡El formulario se ha enviado con éxito!";

//}

?>