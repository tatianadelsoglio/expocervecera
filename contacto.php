<?php

    include('config.php');

    include 'phpmailer5226/class.phpmailer.php';
    include 'phpmailer5226/class.smtp.php';


// ------------------------------------------------------------------------------------------------------------------------------------------------------------------------
//    if (isset ($_POST['enviar'])) {

//     $nombre = $_POST['nombre'];
//     $telefono = $_POST['telefono'];
//     $email = $_POST['email'];
//     $mensaje = $_POST['mensaje'];


//     $to = "tatianadelsoglio96@gmail.com";
//     $subject = "Contacto desde el sitio web";

//     $headers = 'From: '.$email."\r\n";
//     $headers .= 'Reply-To: '.$email."\r\n";
//     $headers .= 'X-Mailer: PHP/' . phpversion();

//     // $message = "Nombre: $nombre\n E-Mail: $email\n Mensaje:\n $mensaje"


//     $message = "Detalles del formulario de contacto:\n\n";
//     $message .= "Nombre: " . $nombre . "\n";
//     $message .= "E-mail: " . $telefono . "\n";
//     $message .= "Teléfono: " . $email . "\n";
//     $message .= "Comentarios: " . $mensaje . "\n\n";

    
 
//         if (mail($to, $subject, $message, $headers)) {
//             echo 'El mensaje se ha enviado';
//         } else {
//             echo 'Falló el envio';
//         }


//     };
// ---------------------------------------------------------------------------------------------------------------------------------------------------------------

    if(isset($_POST["nombre"])) $nombre = strtoupper($_POST["nombre"]);	
    if(isset($_POST["telefono"])) $telefono=$_POST["telefono"];
	if(isset($_POST["email"])) $mail=$_POST["email"];	
	if(isset($_POST["mensaje"])) $mensaje = strtoupper($_POST["mensaje"]);
	$asunto='Consulta desde la web';
	
	if(!isset($nombre)) $nombre='';
    if(!isset($telefono)) $telefono='';
	if(!isset($mail)) $mail='';
	if(!isset($mensaje)) $mensaje='';
	
	$errores=array();
	
	if($nombre==''){
		$errores[]="Debe Ingresar su nombre";
	}
	if($mail==''){
		$errores[]="Debe Ingresar su email";
	}

    if($telefono==''){
        $errores[]="Debe Ingresar su teléfono";
    }
    if($mensaje==''){
        $errores[]="Debe Ingresar su mensaje";
    }
	
	if(count($errores)>0){
		$errores=implode("<br>",$errores);
		$errores="<h4>Error</h4><p>".$errores."</p>";
		echo $errores;
		exit();
	}

    $cuerpo="<b>Nombre</b>: ".$nombre."<br>
		<b>Teléfono</b>: ".$telefono."<br>
		<b>Email</b>: ".$mail."<br>
		<b>Mensaje</b>: ".$mensaje."";
	
    //Enviar_Mail($cuerpo, $mail); // Llamo a la función para enviar el mail con los datos.
    //$receptor="marianoturcutto@gmail.com";
	//$receptor="walter@glober.com.ar";
	$receptor="tatianadelsoglio96@gmail.com";
	//$receptor_copia="info@expocervecera.com.ar";
	enviarEmail($receptor,"Expocervecera",$asunto,$cuerpo);	
	/* header("Location: index.php"); */	
	
	function enviarEmail($destinatario_email,$destinatario_nombre,$asunto,$mensaje,$destinatario_copia){		
		$mail = new PHPMailer(); // create a new object			
		$mail->CharSet = 'UTF-8';
		$mail->IsSMTP(); // enable SMTP
		$mail->SMTPDebug = 0; // debugging: 1 = errors and messages, 2 = messages only
		$mail->SMTPAuth = MT_SMTP_AUTH; // authentication enabled
		$mail->SMTPSecure = MT_SMTP_SECURE; // secure transfer enabled REQUIRED for Gmail
		//$mail->SMTPSecure = 'tls'; // secure transfer enabled REQUIRED for Gmail
		$mail->Host = MT_SMTP_HOST;
		$mail->Port = MT_SMTP_PORT; // or 587
		//$mail->Port = 587; // or 587
		$mail->IsHTML(true);
		$mail->Username = MT_SMTP_USER;
		$mail->Password = MT_SMTP_PASS;
		$mail->SetFrom(MT_SMTP_FROM_EMAIL,MT_SMTP_FROM_NAME);
		$mail->Subject = $asunto;		
		$mail->Body = $mensaje;		
		$mail->AddAddress($destinatario_email,$destinatario_nombre);	
		if($destinatario_copia!=''){
			$mail->AddCC($destinatario_copia,$destinatario_nombre);
		}
		 if(!$mail->Send()) {
			echo 'Error';
			return $mail->ErrorInfo;
		 } else {
			echo 'OK';
		 }
	}

?>