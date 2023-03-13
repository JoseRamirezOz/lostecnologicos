<?php
$destinatario = "";

// Llamando campos 
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

//datos para el correo
$asunto = "Contacto desde nuestra web | LOS TECNOLOGICOS | Proyectos de fotografia y video";

$carta = "De: $nombre \n";
$carta .= "Telefono: $telefono \n";
$carta .= "Correo: $correo \n";
$carta .= "Mensaje: $mensaje";

//enviando mensaje
mail($destinatario, $asunto, $carta);
header('Location:mensajeEnviadoPorCorre.html');

?>