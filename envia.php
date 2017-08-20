<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];
 
//No nosso caso é o e-mail do seu site ou que pertença a seu dominio
$para = 'nandorech@outlook.com';
$assunto = 'Contato do site';
$cabecalho = "MIME-Version: 1.0" . "\r\n".
             "Content-type: text/html; charset=iso-8859-1" . "\r\n".
             "From: nandorech@outlook.com" . "\r\n" .
             "Reply-To: nandorech@outlook.com";
 
$corpoDoEmail = $nome . "<br />";
$corpoDoEmail .= $email . "<br /><br />";
$corpoDoEmail .= $mensagem;
 
$status = mail($para, $assunto, $corpoDoEmail, $cabecalho);
 
if($status)
    echo "<script> window.location.href = 'envio_concluido.html'; </script>";
else
    echo "<script> window.location.href = 'envio_erro.html'; </script>";

?>