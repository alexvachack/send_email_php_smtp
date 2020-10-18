<?php
require "PHPMailer/Exception.php";
require "PHPMailer/PHPMailer.php";
require "PHPMailer/SMTP.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$oMail = new PHPMailer();
$oMail->isSMTP();
$oMail->Host = "mail.mud-arte.com";
$oMail->Port = "26";
$oMail->SMTPSecure = "tls";
$oMail->SMTPAuth = true;
$oMail->Username = "contacto2@mud-arte.com";
$oMail->Password = "mud-arte0101*";
$oMail->setFrom("contacto2@mud-arte.com", "contacto2@mud-arte.com");
//$oMail->addAddress("jbrown@brandsolutions.com.mx", "jbrown@brandsolutions.com.mx");
$oMail->addAddress("heyyouvc@gmail.com", "heyyouvc@gmail.com");
//$oMail->addAddress("contactomudarte@gmail.com", "contactomudarte@gmail.com");
$oMail->Subject = "Nueva cotizacion express de Heyyouvc";
$oMail->msgHTML(
    "
<div style='align-content: center'>
<img src='http://mud-arte.com/wp-content/uploads/2019/10/logo.png' alt='MUD-ARTE' style='text-align: center'/>
<br>
<img src='http://mud-arte.com/calculadoras/mudanzaCajasFelices.jpg' alt='MUD-ARTE' style='text-align: center'/>
<br>
</div>
<p>Hola jbrown@brandsolutions.com.mx, tienes una nueva cotización local y esta es la información:</p>
<p>Nombre: nombre</p>
<p>Correo: correo</p>
<p>Teléfono:   telefono</p>
<p>Origen: origen</p>
<p>Destino:    destino</p>
<p>Transporte: transporte</p>
<p>Personal:   personal</p>
<p>Cotización: pesos</p>
 <br>
 <br>"
);
if (!$oMail->send())
    echo $oMail->ErrorInfo;
?>
