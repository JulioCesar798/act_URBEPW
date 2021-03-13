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



    <form action ="edit_archive_text1.php" method ="POST"> 


        <div class="form">
            <h1>Editar un Archivo de Texto existente (.txt)</h1>
</br>
            </br>
<h2 align ="center"> Archivos de texto y carpetas, creadas por el usuario, en el servidor: </h2>
</br>
<p align ="center"> Los archivos de texto, son representados mediante extension .txt</p>
<p align ="center"> Las Carpetas no tienen extension</p>



<?php

// Listar Carpetas del directorio
$thefolder = "text_archives/";
if ($handler = opendir($thefolder)) {
	echo "<ul>";
    while (false !== ($file = readdir($handler))) {
            echo "<li>$file</li>";
    }
    echo "</ul>";
    closedir($handler);
}
?>


<style>

   

ul{

        

        background: black;
        color: white;
        font-size: 15px;
        display: block;
    }


    button{

        
    }
    
    </style>


    


        
<div class="grupo">
                <input type="text" name="name_of_1txt" id="" required><span class="barra"></span>
                <label>Nombre del Archivo de texto a Editar</label>
            </div>

<h1>Ingresa los nuevos datos</h1>

            <div class="grupo">
                <input type="text" name="nombre" id="" required><span class="barra"></span>
                <label>Nombre del Usuario</label>
            </div>
 
            </div>
            <div class="grupo">
                <textarea name="direccion" id="" rows="3" required></textarea><span class="barra"></span>
                <label>Mensaje</label>
            </div>

            <div class="grupo">
            
            <p>Condiciones </br>Al darle un nombre a tu archivo se comprobara si este archivo ya existe, en el caso de que sea asi, se modificara el archivo de texto existente, con los datos nuevos introducidos, si no existe el archivo, no se completara el procedimiento
            </br>Nota: no colocar .txt en el nombre del archivo de texto</p>

            </div>

            
<section align ="right" color = blue>



<button type="submit">Guardar y Editar Archivo de Texto</button>
</br>
<button onclick="location.href='index.php'">Volver a la Pagina Principal</button>
</section>


    </form>


   


</body>
</html>


