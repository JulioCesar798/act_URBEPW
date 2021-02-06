<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="css/form-style.css">
</head>
<body>


<style>
    body{
        background: #24303c;
        color: white;
        font-family: Roboto Thin;
    }    

    button{
        font-family: Roboto Thin;
        
        width: 30%;
         background: #1f53c5;
        border: none;
        padding: 12px;
        color: white;
        margin: 16px 0;
        font-size: 16px;
    }
</style>


<?php
   


   if(isset($_POST['btn']) && $_POST['btn'] == 'Calcular') {
        $lado = $_POST['base'];
        $area = null;
        $perimetro = null; 
        $apotema = null;

        if(!empty($lado) or !empty($apotema)) {
           
            //Calcular el perimetro
           
            $perimetro = 8 * $lado;
            
            echo "<h3>Lado introducido: $lado</h3>";
            echo "<h3>---------------------------------------------------------------------</h3>";
            echo "<h3>PERIMETRO: $perimetro</h3>";
            echo "<h3>---------------------------------------------------------------------</h3>";

            // Calcular la apotema

            $apotema = $lado * 1.207;
            echo "<h3> APOTEMA: $apotema</h3>";
            echo "<h3>---------------------------------------------------------------------</h3>";

            // Calcular el area

           echo "<h3> AREA = (PERIMETRO * APOTEMA) /2</h2>";
           echo "<h3>---------------------------------------------------------------------</h3></br>";
           $area = ($perimetro * $apotema)/2;
            echo "<h3> RESULTADO: $area </h3> </br>";
            echo "<h3>---------------------------------------------------------------------</h3>";

        }
           
    }


?>





<section align ="center" color = blue>
<h2> ¿Volver a la pagina anterior? </h2>
<button onclick="location.href='index.html'">Si, quiero hacer otro calculo</button>
</section>





</body>
</html>