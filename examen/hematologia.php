<?php 


require_once('../vendor/autoload.php');

$mpdf = new \Mpdf\Mpdf([

]);

$hemoglobina = (random_int(12, 17));
$hematocrito = (random_int(36, 50));
$promVolumenC = (random_int(80, 98));
$promHemoglobina = (random_int(27, 31));
$Rplaquetas = (random_int(200000, 400000)); 
$eosinofilos = (random_int(0,2));
$segmetados = (random_int(50,70)); 
$linfocitos = (random_int(20,40));
$monocitos = (random_int(2,12));  
$basofilos = (random_int(0,2)); 
  
  


$mpdf->writehtml(' <div style="text-align: center;"> <img src="../img/logo1.png"  width="170">  <h1 >Laboratorio BioHealth</h1></div>'.'<div style="text-align: center; font-size: 30px;">------------------------HEMATOLOGIA ------------------------</div>'.'<br>'."Hemoglobina ".$hemoglobina." g/dl -----------------------------------------------------------------------------  Referencia: 12-17".'<br>'.'<br>'.
"Hematocrito " .$hematocrito."%----------------------------------------------------------------------------------- Referencia: 36-50".'<br>'.'<br>'.
 "Promedio volumen corpuscular ".$promVolumenC." fL ----------------------------------------------------- Referencia: 80-98".'<br>'.'<br>'.
 "Promedio hemoglobina corpuscular ".$promHemoglobina." pg ---------------------------------------------- Referencia: 27-31".'<br>'. '<br>'.
 "Recuento de plaquetas ".$Rplaquetas." uL --------------------------------------------------------- Referencia: 200000-400000".'<br>'. '<br>'.
 "Eosinofilos ".$eosinofilos." % --------------------------------------------------------------------------------------  Referencia: 0-2".'<br>'.'<br>'.
 "Segmetados ".$segmetados." % ----------------------------------------------------------------------------------  Referencia: 50-70".'<br>'. '<br>'.
 "Linfocitos ".$linfocitos." % -------------------------------------------------------------------------------------- Referencia: 20-40 ".'<br>'.'<br>'.
 "Monocitos ".$monocitos." % --------------------------------------------------------------------------------------  Referencia: 2-12".'<br>'.'<br>'.
 "Basofilos ".$basofilos." % -----------------------------------------------------------------------------------------   Referencia: 0-2".'<br>'.'<br>'.'<br>'.'<br>'.'<br>'.
 '<div style=""> <img style="margin-left:20px; margin-right:300px;" src="../img/sello.jpg" width="140"> <img src="../img/firma.png" width="140"></div>'
 , \Mpdf\HTMLParserMode::HTML_BODY);
$mpdf->Output();

?>



         
          