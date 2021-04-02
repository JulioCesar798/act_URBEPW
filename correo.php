<?php

if(isset($_POST['enviar'])){
   if (!empty($_POST['name']) && !empty($_POST['asunto']) && !empty($_POST['msg']) &&
   !empty($_POST['email'])) {
     $name = $_POST['name'];
     $asunto = $_POST['asunto'];
     $msg = $_POST['msg'];
     $file = $_POST['file'];
     $email = $_POST['email'];
     $header = "From: juliocesarchacin2@gmail.com" . "\r\n";
     $header.= "Reply-to: juliocesarchacin2@gmail.com" . "\r\n";
     $header.= "X-Mailer: PHP/".phpversion();
    $mail = @mail($email,$asunto,$file,$msg,$header);
    if ($mail) {
       echo "<h4> Mail enviado exitosamente </h4>";
      }
   }
}


?>