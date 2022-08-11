<?php
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono']
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];
$para = 'info@expocervecera.com.ar';
$titulo = 'Mensaje Web ExpoCervecera';
 
$msjCorreo = "Nombre: $nombre\n E-Mail: $email\n Mensaje:\n $mensaje";
 
if ($ _POST['submit']) {
if (mail ($para, $titulo, $msjCorreo)) {
echo 'El mensaje se ha enviado';
} else {
echo 'Falló el envio';
}
}

?>