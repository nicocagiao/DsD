<?php 
/*Envio por mail*/
//Armar el array POST, reasignando nuevas variables
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$email=$_POST['email'];
$mensaje=$_POST['mensaje'];

//Configurar la funcion mail()
$destinatario="nicolas@cagiao.com";
$asunto="Correo nuevo desde el sitio";
$cuerpoMensaje="Nombre: ".$nombre."<br> Email:".$email."<br> Localidad: ".$localidad."<br> Mensaje: <i>".$mensaje."</i>";
//echo $cuerpoMensaje;

//Cabeceras adicionales
// Para enviar un correo HTML, debe establecerse la cabecera Content-type
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
// Cabeceras adicionales
$cabeceras .= 'From: '.$nombre.' <'.$email.'>' . "\r\n";

//Envío
@$envio=mail($destinatario,$asunto,$cuerpoMensaje,$cabeceras);

//Verificar el envío
if($envio==true){
	echo "<div class='alert alert-success animated tada'>Gracias ".$nombre." por contactarnos. <br> Te respondemos a la brevedad</div>";
}else{
	echo "<div class='alert alert-danger animated wobble'> Hola".$nombre.", hubo un error en el envío. Intenta nuevamente :( </div>";
}



	?>