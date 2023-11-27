<?php
include 'conexion.php';

/*-----------Varieable-----------*/

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$usuario = $_POST["usuario"];
$correo = $_POST["correo"];
$clave = $_POST["clave"];

/*------------Isertar------------*/

$insertar = "INSERT INTO registro(nombre,apellido,usuario,correo,clave) VALUES ('$nombre','$apellido','$usuario','$correo','$clave')";

/*-----------Resultado-----------*/
     
$resultado = mysqli_query($conexion,$insertar);
if(!$resultado){
    echo "Error al Registrar";
}
else {
    header("location:../graciasdos.html");
}
/*--------Cerrar conexion--------*/

mysqli_close($conexion);

?>