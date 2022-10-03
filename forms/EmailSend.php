<?php
try {

  $nombre= $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $mailto="digital.solutions@gmail.com";
  $header="FROM : ".$mail;
  $text="tienes un mensaje".$nombre."\n\n".$subject;
    Mail($mailto,$name,$txt,$header);
    echo 'Enviado Correctamente';
} catch (Exception $e) {
    echo "Error al Enviar. {$mail->ErrorInfo}";
}
?>