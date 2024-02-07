<?php

$name = $_POST['name'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];


$formcontent="
    Nombre: $name \n
    E-mail: $email \n
    Mensaje: $mensaje
";

$recipient = "luemadiaz1@gmail.com";

$subject = "Respuesta";

$header = "From: $email \r\n";
$header .= "Content-Type: text/plain; charset=UTF-8";
mail($recipient, $subject, $formcontent, $header) or die("Error!");
header("Location: index.html");

?>
