<?php

if(isset($_POST['email']) && !empty($_POST['email'])) {

    $nome = $_POST['name'];
    $email = $_POST['email'];
    $mensagem = $_POST['message'];

    $to = "hub@hubdigitals.com";
    $subject = "Profile";
    $body = "Nome: ".$nome. "\r\n".
            "Email: ".$email."\r\n".
            "Mensagem: ".$mensagem;
    $header = "From: hub@hubdigitals.com"."\r\n".
                "Reply-to: ".$email."\r\n".
                "X-Mailer: PHP/".phpversion();

    if(mail($to,$subject,$body,$header)) {
        echo("Email enviado!");
    } else {
        echo("Email não enviado");
    }

} else {
    echo("Email não enviado. Campo email vazio.");
}
