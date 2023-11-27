<?php

$conexion = mysqli_connect("localhost","root","rootroot","bdprueba");
if(!$conexion){
    echo "Error al Conectar a la base de datos";
}
else {
    echo "Conectado a la base de datos";
}

?>