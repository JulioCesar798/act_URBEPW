<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo de la Hipotenusa TR</title>
</head>


<style>

body{
    font-family: Segoe UI Light;
    color: white;
    background: #24303c;
}

</style>

<body>
    <?php

    $catetoA = 3;
    $catetoB = 4;
    $hipotenusa = null;

    $hipotenusa = sqrt(pow($catetoA,2) + pow($catetoB,2));


    echo "<h1 align ='center'>Calculo de la Hipotenusa de un Triangulo Rectangulo</h1>";
    echo"<h1 align ='center'>------------------------------------------------------------------------------</h1>";
    echo"<h1 align ='center'>Cateto A: $catetoA</h1>";
    echo"<h1 align ='center'>------------------------------------------------------------------------------</h1>";
    echo"<h1 align ='center'>Cateto B: $catetoB</h1>";
    echo"<h1 align ='center'>------------------------------------------------------------------------------</h1>";
    echo"<h1 align ='center'>Hipotenusa: $hipotenusa</h1>";
    echo"<h1 align ='center'>------------------------------------------------------------------------------</h1>";




    ?>
<footer align ="center">
-- URBE PROGRAMACION WEB | Julio Chacin, C.I 27.197.182 --
</footer>

</body>
</html>