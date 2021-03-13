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

form{

}




    </style>

    <form action= "" method ="POST" name ="frm"> 
<h1> Crear una Nueva Carpeta en el Servidor</h1>
        <div class="grupo">
            
            <input type="text" name="name_of_1folder" id="" required><span class="barra"></span>
            <label>Nombre de la Carpeta a Crear</label>
        </div>
        <button type="submit">Crear Nueva Carpeta, en el Servidor</button>
        </br>
        <button onclick="location.href='index.php'">Volver a la Pagina Principal</button>
        </section>
</br>
<p> Nota: Se comprobara si existe una carpeta, con un nombre igual, en el caso de que exista no se creara la carpeta</p>

    </form>
<?php
   
if (isset($_POST['name_of_1folder']))
{   


    //Crear Carpeta
$namefolder = $_POST['name_of_1folder'];
    $ruta1 = "text_archives/$namefolder";

    if (!file_exists($ruta1)) {
        mkdir("$ruta1", 0777, true);
        echo "Carpeta, creada con exito";
    }

    else {

echo "No se ha podido crear una nueva carpeta, debido a que </br>ya existe una carpeta con el mismo nombre";
echo "</br>";
echo "</br>";
echo "Directorio de archivos de texto y carpetas --------------->";
echo "</br>";
echo "</br>";
echo "Las Carpetas no tienen extension";


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




    }


    

}












    
    
?>


    

</body>
</html>


