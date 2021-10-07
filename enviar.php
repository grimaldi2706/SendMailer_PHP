<?php

    require 'phpmailer/PHPMailerAutoload.php';
    
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->Host='smtp.office365.com';
    $mail->Port= 587;
    $mail->SMTPAuth=true;
    $mail->SMTPSecure='tls';
    $mail->Username='Correo_origen@...com';
    $mail->Password='contraseña_correo';

    $mail->setFrom('Correo_origen@...com','Alias Correo_origen@...com');
    $mail->addAddress('correo_destio@gmail.com');


    $mail->isHTML(true);
    $mail->Subject='ASUNTO';
    $mail->Body='<h1 align=center><br> Mensaje:</h1>';
    $estadoEnvio = $mail->Send(); 
    if($estadoEnvio){
        echo "El correo fue enviado correctamente.";
        header('Location: ../index.php');
    } else {
        echo "Ocurrio un error inesperado.";
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    }

?>
