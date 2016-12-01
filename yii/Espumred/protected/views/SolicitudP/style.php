<?php
      Yii::import("ext.Mailer.*");
      $mail=new PHPMailer();
      $mail->IsSMTP(); 
      $mail->Host = "74.125.141.108"; // Servidores SMTP
      $mail->SMTPAuth = true;   // activar la identificacín SMTP
      $mail->SMTPDebug  = 1; //actival el modo debug del correo para ver los detalles de la conexion
      $mail->Port = 587; // Puerto de conexion con gmail
      $mail->SMTPSecure = "tls";  
      $mail->Username = "espm.ftra.yii@gmail.com";
      $mail->Password = "Espumas2016";

                     
        $mail->SetFrom("espm.ftra.yii@gmail.com","Titulo del correo");
        $mail->Subject="Subtitulo del correo";  

      $mail->AddAddress('practicante.sistemas@espumasmedellin.com');

      $mail->isHTML(true);

$varhtml = "";

$varhtml += '<style>
  tr
  {mso-height-source:auto;}
col
  {mso-width-source:auto;}
br
  {mso-data-placement:same-cell;}
.style16
  {mso-number-format:"_-* \#\,\#\#0\.00\\ _€_-\;\\-* \#\,\#\#0\.00\\ _€_-\;_-* \0022-\0022??\\ _€_-\;_-\@_-";
  mso-style-name:Millares;
  mso-style-id:3;}
.style0
  {mso-number-format:General;
  text-align:general;
  vertical-align:bottom;
  white-space:nowrap;
  mso-rotate:0;
  mso-background-source:auto;
  mso-pattern:auto;
  color:black;
  font-size:11.0pt;
  font-weight:400;
  font-style:normal;
  text-decoration:none;
  font-family:Calibri, sans-serif;
  mso-font-charset:0;
  border:none;
  mso-protection:locked visible;
  mso-style-name:Normal;
  mso-style-id:0;}
.style17
  {mso-number-format:0%;
  mso-style-name:Porcentaje;
  mso-style-id:5;}
td
  {mso-style-parent:style0;
  padding:0px;
  mso-ignore:padding;
  color:black;
  font-size:11.0pt;
  font-weight:400;
  font-style:normal;
  text-decoration:none;
  font-family:Calibri, sans-serif;
  mso-font-charset:0;
  mso-number-format:General;
  text-align:general;
  vertical-align:bottom;
  border:none;
  mso-background-source:auto;
  mso-pattern:auto;
  mso-protection:locked visible;
  white-space:nowrap;
  mso-rotate:0;}
.xl65
  {mso-style-parent:style0;
  font-size:28.0pt;
  font-weight:700;
  vertical-align:middle;
  border-top:1.0pt solid windowtext;
  border-right:none;
  border-bottom:none;
  border-left:1.0pt solid windowtext;}
.xl66
  {mso-style-parent:style0;
  font-size:28.0pt;
  font-weight:700;
  vertical-align:middle;
  border-top:1.0pt solid windowtext;
  border-right:none;
  border-bottom:none;
  border-left:none;}
.xl67
  {mso-style-parent:style0;
  font-size:28.0pt;
  font-weight:700;
  vertical-align:middle;
  border-top:none;
  border-right:none;
  border-bottom:none;
  border-left:1.0pt solid windowtext;}
.xl68
  {mso-style-parent:style0;
  font-size:28.0pt;
  font-weight:700;
  vertical-align:middle;}
.xl69
  {mso-style-parent:style0;
  font-weight:700;
  border-top:none;
  border-right:none;
  border-bottom:none;
  border-left:1.0pt solid windowtext;}
.xl70
  {mso-style-parent:style0;
  border-top:none;
  border-right:none;
  border-bottom:1.0pt solid windowtext;
  border-left:none;}
.xl71
  {mso-style-parent:style0;
  font-size:28.0pt;
  font-weight:700;
  text-align:center;
  vertical-align:middle;}
.xl72
  {mso-style-parent:style0;
  font-size:28.0pt;
  font-weight:700;
  text-align:center;
  vertical-align:middle;
  border-top:none;
  border-right:1.0pt solid windowtext;
  border-bottom:none;
  border-left:none;}
.xl73
  {mso-style-parent:style0;
  font-weight:700;}
.xl74
  {mso-style-parent:style0;
  border-top:none;
  border-right:1.0pt solid windowtext;
  border-bottom:none;
  border-left:none;}
.xl75
  {mso-style-parent:style0;
  text-align:center;}
.xl76
  {mso-style-parent:style0;
  font-weight:700;
  text-align:center;
  vertical-align:middle;
  border-top:1.0pt solid windowtext;
  border-right:.5pt solid windowtext;
  border-bottom:none;
  border-left:1.0pt solid windowtext;
  background:#D9D9D9;
  mso-pattern:black none;
  white-space:normal;}
.xl77
  {mso-style-parent:style0;
  font-weight:700;
  text-align:center;
  vertical-align:middle;
  border-top:1.0pt solid windowtext;
  border-right:.5pt solid windowtext;
  border-bottom:none;
  border-left:.5pt solid windowtext;
  background:#D9D9D9;
  mso-pattern:black none;
  white-space:normal;}
.xl78
  {mso-style-parent:style0;
  font-weight:700;
  text-align:center;
  vertical-align:middle;
  border-top:1.0pt solid windowtext;
  border-right:1.0pt solid windowtext;
  border-bottom:none;
  border-left:.5pt solid windowtext;
  background:#D9D9D9;
  mso-pattern:black none;
  white-space:normal;}
.xl79
  {mso-style-parent:style0;
  border-top:1.0pt solid windowtext;
  border-right:.5pt solid windowtext;
  border-bottom:.5pt solid windowtext;
  border-left:1.0pt solid windowtext;}
.xl80
  {mso-style-parent:style0;
  border-top:1.0pt solid windowtext;
  border-right:.5pt solid windowtext;
  border-bottom:.5pt solid windowtext;
  border-left:.5pt solid windowtext;}
.xl81
  {mso-style-parent:style16;
  mso-number-format:"_-* \#\,\#\#0\\ _€_-\;\\-* \#\,\#\#0\\ _€_-\;_-* \0022-\0022??\\ _€_-\;_-\@_-";
  border-top:1.0pt solid windowtext;
  border-right:.5pt solid windowtext;
  border-bottom:.5pt solid windowtext;
  border-left:.5pt solid windowtext;}
.xl82
  {mso-style-parent:style16;
  mso-number-format:"\[$$-240A\]\#\,\#\#0\.00";
  border-top:1.0pt solid windowtext;
  border-right:.5pt solid windowtext;
  border-bottom:.5pt solid windowtext;
  border-left:.5pt solid windowtext;}
.xl83
  {mso-style-parent:style17;
  mso-number-format:0%;
  border-top:1.0pt solid windowtext;
  border-right:.5pt solid windowtext;
  border-bottom:.5pt solid windowtext;
  border-left:.5pt solid windowtext;}
.xl84
  {mso-style-parent:style0;
  mso-number-format:"\[$-C0A\]dd\\-mmm\\-yy\;\@";
  border-top:1.0pt solid windowtext;
  border-right:1.0pt solid windowtext;
  border-bottom:.5pt solid windowtext;
  border-left:.5pt solid windowtext;}
.xl85
  {mso-style-parent:style0;
  border-top:.5pt solid windowtext;
  border-right:.5pt solid windowtext;
  border-bottom:.5pt solid windowtext;
  border-left:1.0pt solid windowtext;}
.xl86
  {mso-style-parent:style0;
  border:.5pt solid windowtext;}
.xl87
  {mso-style-parent:style16;
  mso-number-format:"_-* \#\,\#\#0\\ _€_-\;\\-* \#\,\#\#0\\ _€_-\;_-* \0022-\0022??\\ _€_-\;_-\@_-";
  border:.5pt solid windowtext;}
.xl88
  {mso-style-parent:style16;
  mso-number-format:"\[$$-240A\]\#\,\#\#0\.00";
  border:.5pt solid windowtext;}
.xl89
  {mso-style-parent:style17;
  mso-number-format:0%;
  border:.5pt solid windowtext;}
.xl90
  {mso-style-parent:style0;
  mso-number-format:"\[$-C0A\]dd\\-mmm\\-yy\;\@";
  border-top:.5pt solid windowtext;
  border-right:1.0pt solid windowtext;
  border-bottom:.5pt solid windowtext;
  border-left:.5pt solid windowtext;}
.xl91
  {mso-style-parent:style0;
  border-top:.5pt solid windowtext;
  border-right:.5pt solid windowtext;
  border-bottom:1.0pt solid windowtext;
  border-left:1.0pt solid windowtext;}
.xl92
  {mso-style-parent:style0;
  border-top:.5pt solid windowtext;
  border-right:.5pt solid windowtext;
  border-bottom:1.0pt solid windowtext;
  border-left:.5pt solid windowtext;}
.xl93
  {mso-style-parent:style16;
  mso-number-format:"_-* \#\,\#\#0\\ _€_-\;\\-* \#\,\#\#0\\ _€_-\;_-* \0022-\0022??\\ _€_-\;_-\@_-";
  border-top:.5pt solid windowtext;
  border-right:.5pt solid windowtext;
  border-bottom:1.0pt solid windowtext;
  border-left:.5pt solid windowtext;}
.xl94
  {mso-style-parent:style16;
  mso-number-format:"\[$$-240A\]\#\,\#\#0\.00";
  border-top:.5pt solid windowtext;
  border-right:.5pt solid windowtext;
  border-bottom:1.0pt solid windowtext;
  border-left:.5pt solid windowtext;}
.xl95
  {mso-style-parent:style16;
  mso-number-format:"\#\,\#\#0\.00\;\\-\#\,\#\#0\.00";
  border-top:.5pt solid windowtext;
  border-right:.5pt solid windowtext;
  border-bottom:1.0pt solid windowtext;
  border-left:.5pt solid windowtext;}
.xl96
  {mso-style-parent:style17;
  mso-number-format:0%;
  border-top:.5pt solid windowtext;
  border-right:.5pt solid windowtext;
  border-bottom:1.0pt solid windowtext;
  border-left:.5pt solid windowtext;}
.xl97
  {mso-style-parent:style0;
  mso-number-format:"\[$-C0A\]dd\\-mmm\\-yy\;\@";
  border-top:.5pt solid windowtext;
  border-right:1.0pt solid windowtext;
  border-bottom:1.0pt solid windowtext;
  border-left:.5pt solid windowtext;}
.xl98
  {mso-style-parent:style0;
  border-top:1.0pt solid windowtext;
  border-right:none;
  border-bottom:none;
  border-left:1.0pt solid windowtext;}
.xl99
  {mso-style-parent:style0;
  border-top:1.0pt solid windowtext;
  border-right:none;
  border-bottom:none;
  border-left:none;}
.xl100
  {mso-style-parent:style0;
  font-weight:700;
  border-top:1.0pt solid windowtext;
  border-right:none;
  border-bottom:none;
  border-left:none;}
.xl101
  {mso-style-parent:style16;
  mso-number-format:"\[$$-240A\]\#\,\#\#0\.00";
  border:1.0pt solid windowtext;}
.xl102
  {mso-style-parent:style0;
  border-top:1.0pt solid windowtext;
  border-right:1.0pt solid windowtext;
  border-bottom:none;
  border-left:none;}
.xl103
  {mso-style-parent:style0;
  border-top:none;
  border-right:none;
  border-bottom:none;
  border-left:1.0pt solid windowtext;}
.xl104
  {mso-style-parent:style0;
  border-top:none;
  border-right:none;
  border-bottom:none;
  border-left:1.0pt solid windowtext;
  background:#D9D9D9;
  mso-pattern:black none;}
.xl105
  {mso-style-parent:style0;
  background:#D9D9D9;
  mso-pattern:black none;}
.xl106
  {mso-style-parent:style0;
  border-top:none;
  border-right:1.0pt solid windowtext;
  border-bottom:1.0pt solid windowtext;
  border-left:none;}
.xl107
  {mso-style-parent:style0;
  border-top:1.0pt solid windowtext;
  border-right:none;
  border-bottom:1.0pt solid windowtext;
  border-left:none;}
.xl108
  {mso-style-parent:style0;
  border-top:none;
  border-right:none;
  border-bottom:1.0pt solid windowtext;
  border-left:1.0pt solid windowtext;}
.xl109
  {mso-style-parent:style0;
  font-size:28.0pt;
  font-weight:700;
  text-align:center;
  vertical-align:middle;
  border-top:1.0pt solid windowtext;
  border-right:none;
  border-bottom:none;
  border-left:none;
  background:#D9D9D9;
  mso-pattern:black none;}
.xl110
  {mso-style-parent:style0;
  font-size:28.0pt;
  font-weight:700;
  text-align:center;
  vertical-align:middle;
  border-top:1.0pt solid windowtext;
  border-right:1.0pt solid windowtext;
  border-bottom:none;
  border-left:none;
  background:#D9D9D9;
  mso-pattern:black none;}
.xl111
  {mso-style-parent:style0;
  font-size:28.0pt;
  font-weight:700;
  text-align:center;
  vertical-align:middle;
  background:#D9D9D9;
  mso-pattern:black none;}
.xl112
  {mso-style-parent:style0;
  font-size:28.0pt;
  font-weight:700;
  text-align:center;
  vertical-align:middle;
  border-top:none;
  border-right:1.0pt solid windowtext;
  border-bottom:none;
  border-left:none;
  background:#D9D9D9;
  mso-pattern:black none;}
.xl113
  {mso-style-parent:style0;
  text-align:center;
  border-top:none;
  border-right:none;
  border-bottom:1.0pt solid windowtext;
  border-left:none;}

</style>';

?>