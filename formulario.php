<?php 
  include_once('conexion.php');
  session_start();
  
require_once('vendor/autoload.php');

 
 

  
     $nombre = $_POST['nombre'];
     $apellido = $_POST['apellido'];  
     $fecha = $_POST['fecha'];
     $cedula = $_POST['cedula'];
     $examen = $_POST['examen'];
     $correo = $_POST['correo'];
     $genero = $_POST['genero'];

    
    
  
    if (!empty($nombre) && !empty($apellido) && !empty($fecha) 
    && !empty($cedula) && !empty($examen) && !empty($correo) 
    && !empty($genero)) { 
     $sql = "INSERT INTO cliente(nombre,apellido,fecha_nacimiento,cedula,examen,genero,correo)  VALUES('$nombre','$apellido','$fecha','$cedula','$examen','$genero','$correo')";
    
     if($conexion->query($sql) === true){
  
        echo '<div><form action=""> <p style="padding:10px;">Paciente  '.$nombre." ".$apellido.' fue ingresado exitosamente </p></form> </div>';
     }else {
         die("Error al insertar datos: " . $conexion->error);
     }
  
  
  }else{
   echo "Error al ingreso del paciente, por favor verifique los datos";
  }
  
  
 
?>



<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
<table  border="1" class="table table-hover table-bordered" style="color: white;"> 
  <thead>    
  <tr class="color">
          <td>#</td>
          <td>nombre</td>
          <td>apellido</td>
          <td>fecha de nacimiento </td>
          <td>cedula</td>
          <td>genero</td>
          <td>examen</td>
          <td>Correo electronico</td>
          <td>fecha de entrada</td>
       </tr>
</thead>   
      <?php
  

        $sql = "SELECT * FROM cliente"; 
        $resultado = mysqli_query($conexion,$sql);

 
        while ($mostrar = mysqli_fetch_array($resultado)) {
             
      ?>
     
      <tbody>
         
         <tr>
          <td><?php echo $mostrar['id'] ?></td>
          <td><?php echo $mostrar['nombre'] ?></td>
          <td><?php echo $mostrar['apellido'] ?></td>
          <td><?php echo $mostrar['fecha_nacimiento'] ?></td>
          <td><?php echo $mostrar['cedula'] ?></td>
          <td><?php echo $mostrar['genero'] ?></td>
          <td><?php echo $mostrar['examen'] ?></td>
          <td><?php echo $mostrar['correo'] ?></td>
          <td><?php echo $mostrar['fecha_entrada'] ?></td>
       </tr>
       
        </tbody>
      <?php
      } 
      ?> 
  </table>


<?php 

if (!empty($nombre) && !empty($apellido) && !empty($fecha) 
&& !empty($cedula) && !empty($examen) && !empty($correo) 
&& !empty($genero)) { 
   
  echo "<div class='caja2'>"."-------------------------------------------------------------".
  '<br>'."Paciente".
  '<br>'."Nombre: ".$nombre." ".$apellido.
  '<br>'."Fecha de nacimiento: ".$fecha. 
  '<br>'."Cedula: ".$cedula. 
  '<br>'."Genero: ".$genero. 
  '<br>'."Correo Electronico: ".$correo.
  '<br>'."Tipo de examen: ".$examen. 
  '<br>'.'<br>'."-------------------------------------------------------------".'<br>'."</div>";

  if ($examen == 'Hematologia') {
        function hematogia(){
    
      return'<a href="examen/hematologia.php" class="btn btn-danger"> Ver resultado </a>';
   }

   echo hematogia();
  }



   if ($examen == 'Bioquimica') {

      function bioquimica(){
        
         
         return'<a href="examen/bioquimica.php" class="btn btn-danger"> Ver resultado </a>' ;
      }
   
      echo bioquimica();
   }
   
  if ($examen == "Enzimaticas") {
   function enzimaticas(){
      $GOT = (random_int(1,40));
      $GPT = (random_int(1,40));  
      $GT = (random_int(11,50));          

   
    return '<a href="examen/enzimaticas.php" class="btn btn-danger"> Ver resultado </a>' ;
   }

   echo enzimaticas();
  }
   

if ($examen == 'Electrolitos') {
   function electrolitos(){

      $sodio = (random_int(135,145));
      $cloro = (random_int(98,110));  
      $potasio = (random_int(3,5));
      $calcio = (random_int(8,10));        


     return '<a href="examen/electrolitos.php" class="btn btn-danger"> Ver resultado </a>';
   }
     
   echo electrolitos();
}



}




?>