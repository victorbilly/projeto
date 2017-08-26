<?php

// Passando os dados obtidos pelo formulário para as variáveis abaixo
$nomeremetente     = $_POST['nome'];
$emailremetente    = trim($_POST['email']);
$emaildestinatario = 'contato@gamercollection.com.br';
$assunto          = $_POST['assunto'];
$mensagem          = $_POST['mensagem'];

 
/* Montando a mensagem a ser enviada no corpo do e-mail. */
$mensagemHTML = '
<p><b>Nome:</b> '.$nomeremetente.'
<p><b>E-Mail:</b> '.$emailremetente.'
<p><b>Assunto:</b> '.$assunto.'
<p><b>Mensagem:</b> '.$mensagem.'</p>
<hr>';


// O remetente deve ser um e-mail do seu domínio conforme determina a RFC 822.
// O return-path deve ser ser o mesmo e-mail do remetente.
$headers = "MIME-Version: 1.1\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";
$headers .= "From: $emailremetente\r\n"; // remetente
$headers .= "Return-Path: $emailremetente \r\n"; // return-path
$envio = mail($emaildestinatario, $assunto, $mensagemHTML, $headers); 
 
if($envio){
    echo "<script> window.location.href = 'envio_concluido.html'; </script>";
}else{
    echo "<script> window.location.href = 'envio_erro.html'; </script>";
 }
?>