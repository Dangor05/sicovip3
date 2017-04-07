<?php

$msg = null;
     
    $asunto = "Visado de Planos, favor no responder este mensaje";
      $mensaje = '<html>
    <head>
      <title>Solicitud de Tramite</title>
    </head>
    <body>
      <p>Hemos recibido su solicitud visado.</p>
      <p>Para ver el resultado de su solicitud puede hacerlo en la pagina de la <a href="http://www.santacruz.go.cr/">Municipalidad Santa Cruz</a>. Mediante los siguientes datos:</p>
      <p><strong>Consecutivo:&nbsp;</strong>"'.$conse.'"</p>
      <p><strong>Cedula del Propietario:&nbsp;</strong>"'.$cedpr.'"</p>
      <p><strong>Numero de Finca:&nbsp;</strong>"'.$nfin.'"</p>
      
    </body>
    </html>';
        
        require "phpmailer/class.phpmailer.php";
    
          $mail = new PHPMailer;
		  
		  //indico a la clase que use SMTP
          $mail->IsSMTP();
		  
          //permite modo debug para ver mensajes de las cosas que van ocurriendo
          //$mail->SMTPDebug = 2;

		  //Debo de hacer autenticación SMTP
          $mail->SMTPAuth = true;
          $mail->SMTPSecure = "ssl";

		  //indico el servidor de Gmail para SMTP
          $mail->Host = "smtp.gmail.com";

		  //indico el puerto que usa Gmail
          $mail->Port = 465;

		  //indico un usuario / clave de un usuario de gmail
          $mail->Username = "dani.ramos92@gmail.com";
          $mail->Password = "r4ind4nc3";
       
          $mail->From = "tuemail@gmail.com";
        
          $mail->FromName = "Municipalidad de Santa Cruz";
        
          $mail->Subject = $asunto;
        
          $mail->addAddress($email, $nombre);
        
          $mail->MsgHTML($mensaje);  
        
          if($mail->Send())
        {
    $msg= "En hora buena el mensaje ha sido enviado con exito a $eml";
    }
        else
        {
    $msg = "Lo siento, ha habido un error al enviar el mensaje a $eml";
    }
 
?>