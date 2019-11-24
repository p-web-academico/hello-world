<?php

$nome = addslashes($_POST['name']);
$email = addslashes($_POST['email']);
$assunto = addslashes($_POST['subject']);
$mensagem = addslashes($_POST['message']);

$to = "p.web.academico@gmail.com";
$subject = "Formulario - P.WEB";
$body = "Nome: ".$nome. "\r\n".
        "Email: ".$email."\r\n".
        "Assunto: ".$assunto."\r\n".
        "Mensagem: ".$mensagem;
$header = "From:p.web.academico@gmail.com"."\r\n".
            "Reply-To:".$email."\r\n".
            "X=Mailer:PHP/".phpversion();

?>
