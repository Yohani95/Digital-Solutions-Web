<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
//   $receiving_email_address = 'digital.solutions.spa22@gmail.com';

//   $contact = new PHP_Email_Form;
//   $contact->ajax = true;
//   $contact->to = $receiving_email_address;
//   $contact->from_name = $_POST['name'];
//   $contact->from_email = $_POST['email'];
//   $contact->subject = $_POST['subject'];
//   $contact->add_message( $_POST['name'], 'From');
//   $contact->add_message( $_POST['email'], 'Email');
//   $contact->add_message( $_POST['message'], 'Message', 10);
//   echo $contact->send();
// ?>

<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'PHPMiler/Exception.php';
require 'PHPMiler/PHPMailer.php';
require 'PHPMiler/SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 2;                      //Habilitar salida de depuración detallada
    $mail->isSMTP();                                            //Enviar Usando SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Configurar el servidor SMTP para enviar a través de
    $mail->SMTPAuth   = true;                                   //Habilitar autenticación SMTP
    $mail->Username   = 'digital.solutions.spa22@gmail.com';                     //SMTP nombre de usuario
    $mail->Password   = '2022DigitalSolutions';                               //SMTP contraseña
    $mail->SMTPSecure = 'ssl';            //Habilitar el cifrado TLS implícito
    $mail->Port       = 587;                                    //Puerto TCP para conectarse; use 587 si configuró `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('digital.solutions.spa22@gmail.com', 'Digital Solutions');
    $mail->addAddress('yohani95301@gmail.com', 'Yohani Espinoza');     //Agregar un destinatario
    $mail->addAddress('estebancardenas1996@hotmail.com', 'Esteban');               //Nombre es opcional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Agregar archivos Adjuntos
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Nombre opcional

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Asunto de Prueba';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Enviado Correctamente';
} catch (Exception $e) {
    echo "Error al Enviar. {$mail->ErrorInfo}";
}