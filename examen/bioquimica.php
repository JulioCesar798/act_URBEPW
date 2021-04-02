<?php 


require_once('../vendor/autoload.php');

$mpdf = new \Mpdf\Mpdf([

]);

$glucosa = (random_int(70, 110));
$colesterol = (random_int(150, 220));
$HDL = (random_int(35, 65));
$LDL = (random_int(1, 140));
$trigliceridos = (random_int(1, 150));
$urea = (random_int(1, 50));
$AcidoUrico = (random_int(3,7)); 
$Hierro = (random_int(50,160));
$homocisteina= (random_int(5,16));  
$ProteinasT  = (random_int(6,8));
$creatinina = (random_int(0,2)); 
  


 
 




$mpdf->writehtml(' <div style="text-align: center;"> <img src="../img/logo1.png"  width="170">  <h1 >Laboratorio BioHealth</h1></div>'.'<div style="text-align: center; font-size: 30px;">------------------------BIOQUIMICA------------------------</div>'.'<br>'.
"Glucosa " .$glucosa."mg %------------------------------------------------------------------------------------------- Referencia: 70-110".'<br>'.'<br>'.
 "Colesterol ".$colesterol." mg % ------------------------------------------------------------------------------------- Referencia: 150-220".'<br>'.'<br>'.
 "-HDL ".$HDL." mg %  ----------------------------------------------------------------------------------------------- Referencia: 35-65".'<br>'. '<br>'.
 "-LDL ".$LDL." mg % ----------------------------------------------------------------------------------------------- Referencia:  1-140".'<br>'. '<br>'.
 "Trigliceridos ".$trigliceridos." mg % ------------------------------------------------------------------------------------  Referencia: 1-150".'<br>'.'<br>'.
 "Urea ".$urea." mg % ------------------------------------------------------------------------------------------------  Referencia: 1-50".'<br>'. '<br>'.
 "Acido urico ".$AcidoUrico." mg % ---------------------------------------------------------------------------------------- Referencia: 3-7".'<br>'.'<br>'.
 "Hierro ".$Hierro." ug -------------------------------------------------------------------------------------------------  Referencia: 50-150".'<br>'.'<br>'.
 "Homocisteina ".$homocisteina." mmol/L ----------------------------------------------------------------------------------   Referencia: 5-16".'<br>'.'<br>'.
 "Proteinas T ".$ProteinasT." gr % ------------------------------------------------------------------------------------------  Referencia: 6-8".'<br>'.'<br>'.
 "creatinina ".$creatinina." mg % ------------------------------------------------------------------------------------------  Referencia: 0-2".'<br>'.'<br>'.'<br>'.'<br>'.'<br>'.'<br>'.
 '<div style=""> <img style="margin-left:20px; margin-right:300px;" src="../img/sello.jpg" width="140"> <img src="../img/firma.png" width="140"></div>'
 , \Mpdf\HTMLParserMode::HTML_BODY);
$mpdf->Output();

?>



         
          