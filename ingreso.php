<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.min.css">
    <title>Biohealth | Ingreso de Pacientes </title>
</head>
<script src="js/jquery-3.5.1.min.js"></script>
<script src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
<script>


    function calcular(nombre,apellido,fecha,cedula,correo,examen,genero){
        var parametros = {
            "nombre": nombre,
            "apellido": apellido,
            "fecha": fecha,
            "cedula": cedula,
            "correo": correo,
            "examen": examen,
            "genero":genero
        };
        $.ajax({
            url: "formulario.php",
            type: "post",
            data: parametros,
            beforeSend: function () {
                $("#resp").html("Procesando, espere por favor...");
            },
            fail: function () {
                $("#resp").html("Error al realizar la consulta");
            },
            success: function (response) {
                $("#resp").html(response);
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.log(textStatus, errorThrown);
            }
        });
    }
</script>



     
     
    <body>



        <div class="caja" style=" margin-top: 40px;">
        
          
        <h1 class="display-4" style="padding:10px;">Ingreso del paciente</h1>
        
        <div class="form-group col-md-8">
        <label>Nombre</label>
        <input class="form-control" type="text" name="nombre" id="nombre">
        </div>
        
        <div class="form-group col-md-8">
        <label>Apellido</label>
            <input class="form-control" type="text" name="apellido" id="apellido"> 
        </div>
        
        <div class="form-group col-md-8">
        <label>Fecha de nacimiento </label>
            <input class="form-control" type="date" name="fecha" id="fecha">
        </div>
        
        <div class="form-group col-md-8">
        <label>Cedula</label>
            <input class="form-control" type="number" name="cedula" id="cedula">
        </div>
    
      

        <div class="col-md-8" style=" margin: 10px auto;">
            <label>Genero</label>
            <select class="form-control" id="genero">
              <option>Selecionar</option>
              <option value="Masculino">Masculino</option>
              <option value="Femenino">Femenino</option>

            </select>
            <br>
          </div>
    
      

        <div class="col-md-8" style=" margin: 10px auto;">
            <label>Tipo de examen</label>
            <select class="form-control" id="examen">
              <option>Selecionar</option>
              <option value="Hematologia">Hematologia</option>
              <option value="Bioquimica">Bioquimica</option>
              <option value="Electrolitos">Electrolitos</option>
              <option value="Enzimaticas">Enzimaticas</option>

            </select>
            <br>
          </div>
    

      
        
        <div class="form-group col-md-8" style="margin-bottom:20px">
        <label>Correo electronico</label>
            <input class="form-control" type="email" name="correo" id="correo">
        </div>  
  </div>
      
         <div style=" text-align: center;"> 

            <button onclick="calcular($('#nombre').val(),$('#apellido').val(),$('#fecha').val(),$('#cedula').val(),$('#correo').val(),$('#examen').val(),$('#genero').val())" class="btn btn-danger btnn" type="submit"  name="action">  Registrar
            </button>
           <a href="index.html" class="btn btn-danger">Inicio</a>
        </div>

        </div>
<div id="resp" class="caja1">

        <h3 style="text-align: center; padding:5px">Resultado</h3>


  </div>

</body>

</html>

