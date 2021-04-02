<?php 
$servidor = "sql310.epizy.com";
$nombreusuario = "epiz_27865138";
$password = "mGlZEYVU9OWCM0";
$db = "epiz_27865138_3521537_clinica";

$conexion = new mysqli($servidor, $nombreusuario, $password, $db);

if($conexion->connect_error){
    die("Conexion fallida: " . $conexion->connect_error);

}

?>