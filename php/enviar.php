<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$motivo = $_POST['motivo'];
$mensagem = $POST['conteudo'];
$data = date('d/m/y');
$hora = date('H:i:s')

 $arquivo = "
    <html>
        <p> Nome:$nome</p>
        <br>
        <p> Email:$email</p>
        <br>
        <p> Data:$data Hora:$hora</p>
        <br>
        <p> Motivo:$motivo</p>
        <br>
        <br>
        <p> Mensagem:$mensagem</p>
    	<br>
    </html>
";

$emailenviar = "aromas.flordocampo@gmail.com";
  $destino = $emailenviar;
  $assunto = $motivo;

  $headers  = 'MIME-Version: 1.0' . "\r\n";
      $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
      $headers .= 'From: $nome <$email>';

  $enviaremail = mail($destino, $assunto, $arquivo, $headers);

?>