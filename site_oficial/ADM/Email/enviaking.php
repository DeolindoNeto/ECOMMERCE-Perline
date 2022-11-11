<?php
/*
 * This example shows settings to use when sending via Google's Gmail servers.
 */
session_start();
$userEmail = $_SESSION['usuariologado']['email'];

//SMTP needs accurate times, and the PHP time zone MUST be set
date_default_timezone_set('Etc/UTC');

//Carrega as bibliotecas de classes
require 'PHPMailer/PHPMailerAutoload.php';

//Cria uma nova instância da classe PHPMailer
$mail = new PHPMailer;

//Diz ao PHPMailer para usar SMTP
$mail->isSMTP();

//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 2;

//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';

//Set the hostname of the mail server
$mail->Host = 'smtp.kinghost.net';

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;

//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = '';

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = 'marke@projetoscti.com.br'; //Preencher com o usuário da sua conta Gmail

//Password to use for SMTP authentication
//$mail->Password = 'YfTvkhprsLC0OJn5'; //Preencher com a senha do usuário da sua conta Gmail
$mail->Password = 'M4rk3#2022';

//Set who the message is to be sent from
$mail->From='marke@projetoscti.com.br'; //Preencher com a sua conta Gmail

$mail->FromName='Equipe Perline Art'; //Preencher com o nome do remetente

//Set who the message is to be sent to
$mail->addAddress("$userEmail"); //Preencher com o email e nome de quem receberá a mensagem

//Set the subject line
$mail->Subject = 'Compra confirmada com sucesso'; //Preencher com o assunto do email

$mail->isHTML(true); //Configurar mensagem como HTML

$mail->CharSet='UTF-8'; //Configurar conjunto de caracteres da mensagem em HTML

//Replace the plain text body with one created manually
$mail->Body = '<html><head><meta charset="utf-8"></head><body> Obrigado por comprar em nossa loja! Volte sempre! </body></html>'; //Mensagem em HTML

//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
}
