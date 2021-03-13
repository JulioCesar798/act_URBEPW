<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>TxtEditor</title>
   <link rel="stylesheet" href="css/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,800,900" rel="stylesheet">
</head>
<body>
   


<style>

body{
    color:white;
}

ul{
    align: center;

}
    

section{

margin-top: 30%;

}

</style>






</body>



<section align ="center" color = blue>
<h3> ¿Volver a la pagina principal? </h3>
<button onclick="location.href='index.php'">Si, volver</button>
<h3> ¿Volver a la pagina de Edicion de Archivos de Textos existentes? </h3>
<button onclick="location.href='form_edit_archtext.php'">Si, volver</button>
</section>







</html>



<?php


$nombre = $_POST['nombre'];
$direccion = $_POST['direccion'];
$name_of_1txt =  $_POST['name_of_1txt'];

$archivo = "text_archives/$name_of_1txt.txt";


   if (file_exists($archivo)){

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

         echo "Archivo de texto, con el nombre: $name_of_1txt.txt, modificado de forma exitosa";
    }

    else {
       echo "Procedimiento no completado....</br></br>";

      echo "El archivo de texto que quieres editar, no existe";


    }


?>