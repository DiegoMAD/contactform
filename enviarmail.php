<?php
//Importamos las variables del formulario de contacto

@$nombre = addslashes($_POST['nombre']);
@$email = addslashes($_POST['email']);
@$telefono = addslashes($_POST['telefono']);
@$mensaje = addslashes($_POST['mensaje']);



//Preparamos el mensaje de contacto
$cabeceras = "From: $email\n" //La persona que envia el correo
 . "Reply-To: $email\n";
$asunto = "Mensaje de AUDESistemas.com.ve"; //asunto aparecera en la bandeja del servidor de correo
$email_to = "danielmortell@audesistemas.com.ve"; //cambiar por tu email
$contenido = "$nombre ha utilizado el Formulario de Contacto de www.audesistemas.com.ve y te ha enviado un mensaje :D!\n"
. "\n"
. "Nombre: $nombre\n"
. "Email: $email\n"
. "Telefono: $telefono\n"
. "Mensaje: $mensaje\n"
. "\n";
//Enviamos el mensaje y comprobamos el resultado
if (@mail($email_to, $asunto ,$contenido ,$cabeceras )) {

//Si el mensaje se envía muestra una confirmación
die("Gracias, su mensaje ha sido enviado correctamente. <a href='javascript:history.back(1)'>Click aqui, para regresar al Sitio Web!</a>");
}else{
//Si el mensaje no se envía muestra el mensaje de error
die("Error: Su información no pudo ser enviada, intente más tarde o consulte con el Administrador del Sistema.");
}
?>