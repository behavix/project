<?php
$to = "massimiliano.carraro@behavix.it";
$headers = "From: clientehainserito@behavix.it" . "\r\n" .
"CC: engioturri@gmail.com";

$nome = $_POST['nome'];
$emailcliente = $_POST['mail'];
$tel = $_POST['tel'];
$richiesta = $_POST['mex'];

$messaggio = $nome . "\r\n" . "\r\n" .  $richiesta . "\r\n" . "\r\n" .  $tel;

$retval = mail($to,$emailcliente,$messaggio,$headers);

         if( $retval == true ) {
            echo "Message sent successfully...";
         }else {
            echo "Message could not be sent...";
         }

?>
