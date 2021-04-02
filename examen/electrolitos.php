<?php 


require_once('../vendor/autoload.php');

$mpdf = new \Mpdf\Mpdf([

]);

$sodio = (random_int(135,145));
$cloro = (random_int(98,110));  
$potasio = (random_int(3,5));
$calcio = (random_int(8,10));  
  



$mpdf->writehtml(' <div style="text-align: center;"> <img src="../img/logo1.png"  width="170">  <h1 >Laboratorio BioHealth</h1></div>'.'<div style="text-align: center; font-size: 30px;">-------------------------ELECTROLITOS------------------------</div>'.'<br>'. 
 " "."Sodio ".$sodio." % ---------------------------------------------------------------------------------------------------- Referencia: 135-145 ".'<br>'.'<br>'.
 " "."Cloro ".$cloro." % ----------------------------------------------------------------------------------------------------   Referencia: 98-110".'<br>'.'<br>'.
 " "."Potasio ".$potasio." % -----------------------------------------------------------------------------------------------------   Referencia: 3-5".'<br>'.'<br>'.
 " "."Calcio ".$calcio." % -------------------------------------------------------------------------------------------------------    Referencia: 8-10".'<br>'.'<br>'.'<br>'.'<br>'.'<br>'.'<br>'.'<br>'.'<br>'.'<br>'.
 '<div style=""> <img style="margin-left:20px; margin-right:300px;" src="../img/sello.jpg" width="140"> <img src="../img/firma.png" width="140"></div>'
 , \Mpdf\HTMLParserMode::HTML_BODY);
$mpdf->Output();

?>


