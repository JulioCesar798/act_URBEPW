<?php 


require_once('../vendor/autoload.php');

$mpdf = new \Mpdf\Mpdf([

]);

$GOT = (random_int(1,40));
$GPT = (random_int(1,40));  
$GT = (random_int(11,50));  


  
  


$mpdf->writehtml(' <div style="text-align: center;"> <img src="../img/logo1.png"  width="170">  <h1 >Laboratorio BioHealth</h1></div>'.'<div style="text-align: center; font-size: 30px;">--------------------------ENZIMATICAS-------------------------</div>'.'<br>'. 
 " "."GOT ".$GOT." % -------------------------------------------------------------------------------------- Referencia: 1-40 ".'<br>'.'<br>'.
 " "."GTP ".$GPT." % --------------------------------------------------------------------------------------  Referencia: 1-40".'<br>'.'<br>'.
 " "."GT ".$GT." % -----------------------------------------------------------------------------------------   Referencia: 11-50".'<br>'.'<br>'.'<br>'.'<br>'.'<br>'.'<br>'.'<br>'.'<br>'.'<br>'.
 '<div style=""> <img style="margin-left:20px; margin-right:300px;" src="../img/sello.jpg" width="140"> <img src="../img/firma.png" width="140"></div>'
 , \Mpdf\HTMLParserMode::HTML_BODY);
$mpdf->Output();

?>


