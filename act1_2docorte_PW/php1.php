<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TxtEditor</title>
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,800,900" rel="stylesheet">
</head>

<style>

body{
    color:white;
}

ul{
    align: center;

}
    

section{

margin-top: 50%;

}

</style>



<body>

<section align ="center" color = blue>
<h3> ¿Volver a la pagina principal? </h3>
<button onclick="location.href='index.php'">Si, volver</button>
<h3> ¿Ir a la Pagina de Crear un Nuevo Archivo de Texto? </h3>
<button onclick="location.href='formulario.html'">Si</button>
</section>




</body>


</html>






<?php

 
$nombre = $_POST['nombre'];
$direccion = $_POST['direccion'];
$name_of_1txt =  $_POST['name_of_1txt'];


 // Abrir el archivo, creándolo si no existe:

    $archivo = "text_archives/$name_of_1txt.txt";
    

    // Comprueba si el archivo existe

    if (file_exists($archivo)){
        echo "Ya existe un archivo de texto</br> con este nombre</br>";
        echo "</br>";
        echo "Nombre del archivo de texto ya existente: </br>   $name_of_1txt.txt ";
        echo "</br>";
        echo "</br>";

        echo " Directorio dentro del servidor ----------------> ";
        $thefolder = "text_archives/";
        if ($handler = opendir($thefolder)) {
	echo "<ul>";
    while (false !== ($file = readdir($handler))) {
            echo "<li>$file</li>";
    }
    echo "</ul>";
    closedir($handler);
}




    }

    else{
        echo "De acuerdo, creando archivo de texto con el siguiente nombre: $name_of_1txt";
        echo "</br>";
        echo "</br>";
        echo "Archivo de texto, creado exitosamente";

          $archivo = fopen("text_archives/$name_of_1txt.txt","w+b"); 
        
        // w Modo borrar y escribir, se borra el texto anterior y se escribe el texto nuevo en su lugar.

        if( $archivo == false ) {
        echo "Error al crear el archivo";
        }
        else {
            // Escribir en el archivo:
            fwrite($archivo, "========================================\r\n");
            fwrite($archivo, "Nombre de Usuario: '$nombre'\r\n");
            fwrite($archivo, "========================================\r\n");
            fwrite($archivo, "Mensaje: '$direccion'\r\n");
            fwrite($archivo, "========================================\r\n");
            // Fuerza a que se escriban los datos pendientes en el buffer:
            fflush($archivo);
        }
        // Cerrar el archivo:
        fclose($archivo);
        
    }


