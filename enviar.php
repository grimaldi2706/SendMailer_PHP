<?php

    require 'phpmailer/PHPMailerAutoload.php';
    
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->Host='smtp.office365.com';
    $mail->Port= 587;
    $mail->SMTPAuth=true;
    $mail->SMTPSecure='tls';
    $mail->Username='no_responder@tvnovedadescolombia.com';
    $mail->Password='Nov3d@des2018*';

    $mail->setFrom('no_responder@tvnovedadescolombia.com','No Responder');
    $mail->addAddress('grimaldi2706@gmail.com');


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
