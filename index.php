<?php
require "PHPMailer/Exception.php";
require "PHPMailer/PHPMailer.php";
require "PHPMailer/SMTP.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$oMail = new PHPMailer();
$oMail->isSMTP();
$oMail->Host = "dominio.com";
$oMail->Port = "26";
$oMail->SMTPSecure = "tls";
$oMail->SMTPAuth = true;
$oMail->Username = "contacto@dominio.com";
$oMail->Password = "*";
$oMail->setFrom("contacto@dominio.com", "contacto@dominio.com");
$oMail->addAddress("destino@gmail.com", "Destino@gmail.com");
$oMail->Subject = "Nuevo contacto";
$oMail->msgHTML(
    "

<p>Hola tienes un nuevo contacto en tu dominio.com</p>"
);
if (!$oMail->send())
    echo $oMail->ErrorInfo;
?>
