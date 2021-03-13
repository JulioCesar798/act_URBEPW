<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TxtEditor | Homepage</title>
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,800,900" rel="stylesheet">
</head>

<body>

    <form>
        <div class="form">
            <h1>Te damos la Bienvenida.</h1>
            <h2>Opciones Disponibles:</h2> 
        <div class="grupo">
    
        
        
        <input type="button" onclick=" location.href='formulario.html' " value="Crear un nuevo archivo de texto" name="boton" />
        <input type="button" onclick=" location.href='form_edit_archtext.php' " value="Editar Archivo de Texto ya existente" name="boton" />
        <input type="button" onclick=" location.href='folder_create.php' " value="Crear una Nueva Carpeta en el Servidor" name="boton" />



</form>
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



</body>

</br>
<h2 align ="center"> Archivos de texto y carpetas, creadas por el usuario, en el servidor: </h2>
</br>
<p > Los archivos de texto, son representados mediante extension .txt</p>
<p> Las Carpetas no tienen extension</p>
<?php
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

        <footer align ="center" style="color:gray">
</br>
    -- URBE  PROGRAMACION WEB --</br> -- Julio Chacin, C.I 27.197.182 --
</footer>

</html>