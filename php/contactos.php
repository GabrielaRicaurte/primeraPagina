<?php
include 'conexion.php';

/*-----------Variables-----------*/
$destino = "gabyruizricaurte2004@gmail.com";
$asunto = $_POST["asunto"];
$correo = $_POST["correo"];
$usuario = $_POST["usuario"];
$mensaje = $_POST["mensaje"];
$contenido = "Asunto: " . $asunto . "\nCorreo: " . $correo . "\nUsuario: " . $usuario . "\nMensaje: " . $mensaje;

/*-------Verificar usuario-------*/

$insertar = "SELECT * FROM usuarios where usuario='$usuario'";
$resultado = mysqli_query($conexion,$insertar);

/*-----------Resultado-----------*/

mail($destino,"Contacto",$contenido);
header("location:../gracias.html");
?>