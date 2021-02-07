<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recogida de datos</title>
    <link rel="stylesheet" href="css/form-style1.css">
</head>
<body>


<style>


body{
    background : rgb(42, 169, 211);
    color: white;
    text-align: left;
    padding-left: 39%;
}

button{
    font-family: Roboto Regular;
  width: 30%;
  background: white;
  border: none;
  padding: 10px;
  color: white;
  margin: 16px 0;
  font-size: 16px;
  color: rgb(42, 169, 211);



 </style>

<?php


$registro1= array(
    'Nombre'=> $_POST['nombre'],
    'Apellido'=> $_POST['lastname'],
    'Cedula'=> $_POST['cedula'],
    'Departamento'=> $_POST['departamento'],
    'Sueldo'=> $_POST['sueldo'],
    'LugarDeTrabajo'=> $_POST['LugarTrabajo']);


$registro2= array(
    'Nombre'=> $_POST['nombre2'],
    'Apellido'=> $_POST['lastname2'],
    'Cedula'=> $_POST['cedula2'],
    'Departamento'=> $_POST['departamento2'],
    'Sueldo'=> $_POST['sueldo2'],
    'LugarDeTrabajo'=> $_POST['LugarTrabajo2']);

$registro3= array(
    'Nombre'=> $_POST['nombre3'],
    'Apellido'=> $_POST['lastname3'],
    'Cedula'=> $_POST['cedula3'],
    'Departamento'=> $_POST['departamento3'],
    'Sueldo'=> $_POST['sueldo3'],
    'LugarDeTrabajo'=> $_POST['LugarTrabajo3']);


   echo "<h1> USUARIO 1</h1>";
   echo "Nombre: ".$registro1['Nombre'];
   echo "</br>";
   echo "-----------------------------------------";
   echo "</br>";
   echo "Apellido: ".$registro1['Apellido'];
   echo "</br>";
   echo "-----------------------------------------";
   echo "</br>";
   echo "Cedula: ".$registro1['Cedula'];
    echo "</br>";
   echo "-----------------------------------------";
   echo "</br>";
   echo "Departamento: ".$registro1['Departamento'];
     echo "</br>";
   echo "-----------------------------------------";
   echo "</br>";
   echo "Sueldo: $".$registro1['Sueldo'];
     echo "</br>";
   echo "-----------------------------------------";
   echo "</br>";
   echo "Lugar de Trabajo: ".$registro1['LugarDeTrabajo'];
    echo "</br>";
   echo "-----------------------------------------";

   echo "<h1> USUARIO 2</h1>";
   echo "Nombre: ".$registro1['Nombre'];
   echo "</br>";
   echo "-----------------------------------------";
   echo "</br>";
   echo "Apellido: ".$registro1['Apellido'];
   echo "</br>";
   echo "-----------------------------------------";
   echo "</br>";
   echo "Cedula: ".$registro1['Cedula'];
   echo "</br>";
   echo "-----------------------------------------";
   echo "</br>";
   echo "Departamento: ".$registro1['Departamento'];
   echo "</br>";
   echo "-----------------------------------------";
   echo "</br>";
   echo "Sueldo: $".$registro1['Sueldo'];
   echo "</br>";
   echo "-----------------------------------------";
   echo "</br>";
   echo "Lugar de Trabajo: ".$registro1['LugarDeTrabajo'];
   echo "</br>";
   echo "-----------------------------------------";

   echo "<h1> USUARIO 3</h1>";
   echo "Nombre: ".$registro3['Nombre'];
   echo "</br>";
   echo "-----------------------------------------";
   echo "</br>";
   echo "Apellido: ".$registro3['Apellido'];
   echo "</br>";
   echo "-----------------------------------------";
   echo "</br>";
   echo "Cedula: ".$registro3['Cedula'];
   echo "</br>";
   echo "-----------------------------------------";
   echo "</br>";
   echo "Departamento: ".$registro3['Departamento'];
   echo "</br>";
   echo "-----------------------------------------";
   echo "</br>";
   echo "Sueldo: $".$registro3['Sueldo'];
   echo "</br>";
   echo "-----------------------------------------";
   echo "</br>";
   echo "Lugar de Trabajo: ".$registro3['LugarDeTrabajo'];
   echo "</br>";
   echo "-----------------------------------------";
echo "</br>";
echo "</br>";

echo "</br>";
?>



<footer style="color:white">
    <h3>¿Volver a la Pagina Anterior?</h3>
    <button onclick="location.href='index.html'">OK</button>
</footer>

</body>
</html>