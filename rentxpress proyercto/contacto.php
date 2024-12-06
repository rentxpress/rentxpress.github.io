<?php
//Llamado de los campos
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$project = $_POST['project'];
$subject = $_POST['subject'];
$mensaje = $_POST['mensaje'];

//Datos para correo
$destinatario = "pressrentx@gmail.com";

$carta = "De: $nombre \n";
$carta .= "Correo: $email \n";
$carta .= "Ubicacion: $project";
$carta .= "Mensaje: $subject";
$carta .="phone: $phone";

//Enviando mensaje
mail($destinatario, $titulo, $carta);
header('Location: mensaje.html');
?>