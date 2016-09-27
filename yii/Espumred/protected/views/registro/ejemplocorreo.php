<?php
Yii::import("ext.Mailer.*");
$mail=new PHPMailer();
$mail->SetFrom("martinemiliopalacios@gmail.com","martin");
$mail->Subject="Mi asunto";
$mail->MsgHtml("<h1>Hola como estas?<h1>");
$mail->AddAddress("martinemiliopalacios@hotmail.com","martinE");
$mail->send();