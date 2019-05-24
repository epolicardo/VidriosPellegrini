<?php

$nombre = $_REQUEST['realname'];
$email = $_REQUEST['email'];
$telefono = $_REQUEST['phone'];
$texto = (!$_REQUEST['Mensaje']) ? $_REQUEST['mensaje'] : $_REQUEST['Mensaje'];
$texto = (!$texto) ? $_REQUEST['message'] : $texto;
$destino = $_REQUEST['recipient'];
$subject = $_REQUEST['subject'];
$redirect = $_REQUEST['redirect'];

if ($nombre != '') {
$header = "From: $nombre <$email>\r\n";
}
else {
$header = "From: $email\r\n";
}
$header .= "Return-Path: $email\r\n";

$mensaje = "Nombre: $nombre\r\n";
$mensaje .="Teléfono: $telefono\r\n";
$mensaje .= "Mensaje: $texto";

mail($destino, $subject, $mensaje, $header);
header('Location: ' . $redirect);
?>
