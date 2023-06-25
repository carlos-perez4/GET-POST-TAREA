<?php

$nombre = $_POST ['txtNombre'];
$email = $_POST ['txtEmail'];
$telefono = $_POST ['txtTel'];
$sitioweb = $_POST ['txtSitio'];
$asunto = $_POST ['txtAsunto'];
$mensaje = $_POST ['txtMensaje'];
/*$nombre = $_GET ['txtNombre'];
$email = $_GET ['txtEmail'];
$telefono = $_GET ['txtTel'];
$sitioweb = $_GET ['txtSitio'];
$asunto = $_GET ['txtAsunto'];
$mensaje = $_GET ['txtMensaje'];*/



echo $nombre . "/" . $email . "/" . $telefono . "/" . $sitioweb . "/" . $asunto . "/" . $mensaje;

?>