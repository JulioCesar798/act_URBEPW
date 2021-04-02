<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/estiloscorreo.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.min.css">
    <title> Biohealth | Contacto </title>
</head>
        <script src="js/jquery-3.5.1.min.js"></script>
        <script src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>

<body>
    <div class="caja">
   <form action="enviar.php">
    <h3 style="margin-bottom: 20px; margin-top: 20px;" class="display-4">Contacto</h3>
        <div class="form-group col-md-8">
         <label>Nombre</label>
         <input class="form-control"  type="text" name="name" id="name">
        </div>

        <div class="form-group col-md-8">
        <label>Correo electronico</label>
            <input class="form-control" type="email"   id="email" name="email" require="">
        </div>  

        <div class="form-group col-md-8">
         <label>Asunto</label>
         <input class="form-control"  type="text" name="asunto" id="asunto">
        </div>

        <div class="form-group col-md-12">
         <input style="background: transparent; color: white; border: transparent;" class="form-control"  type="file" name="file" id="file">
       </div>
     
        <div class="form-group" style="padding:40px"  >
          <label for="exampleFormControlTextarea1">Mensaje</label>
          <textarea  class="form-control" name="msg" id="msg" rows="3"></textarea>
        </div>
     
        
        

    <input type="submit" class="btn btn-danger col-4" value="Enviar" name="enviar" >
    <a  href="index.html" class="btn btn-danger col-4">Inicio</a>
    </form>    
</div>
     <?php 
      include("correo.php");
     ?>
</body>
</html>