<?php

if (isset($_POST['enviar'])) {
    if (!empty($_POST['nombre']) && !empty($_POST['email']) && !empty($_POST['mensaje']) && !empty($_POST['asunto'])) {
        $name = $_POST['nombre'];
        $asunto = $_POST['asunto'];
        $msg = $_POST['mensaje'];
        $email = $_POST['email'];
        $header = "From: noreply@example.com" . "\r\n";
        $header.= "Reply-To: noreply@example.com" . "\r\n";
        $header.= "X-Mailer: PHP/" . phpversion();
        $mail = @mail("ignaciodta@gmail.com",$asunto,$msg,$header);
        if ($mail) {
            echo "<h4>Mail enviado exitosamente!!</h4>";
        }
    }
}