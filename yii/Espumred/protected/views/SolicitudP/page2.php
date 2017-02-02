<?php 

$nomclien = $_POST['nom_client'];
$codclien = $_POST['cod_client'];
$obs_entrega = $_POST['Obs_entrega'];
$apli_bon = $_POST['Apl_bon'];
$otra_bon;
if($apli_bon != "otros"){
  $otra_bon = "";
}else{
  $otra_bon = $_POST['inp_otros'];
  $apli_bon = "";
}

// $all_form = $_POST['Formyiis'];
$htmls = "";
$fecha_cargue = date('d/m/Y');
setlocale(LC_MONETARY, 'en_US');






$htmls .= '<style>
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
  font-size:12.0pt;
  font-weight:400;
  font-style:normal;
  text-decoration:none;
  font-family:"Segoe UI", sans-serif;
  mso-font-charset:0;
  border:none;
  mso-protection:locked visible;
  mso-style-name:Normal;
  mso-style-id:0;}
.style18
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
  mso-style-name:"Normal 3";}
.style17
  {mso-number-format:0%;
  mso-style-name:Porcentaje;
  mso-style-id:5;}
td
  {mso-style-parent:style0;
  padding:0px;
  mso-ignore:padding;
  color:black;
  font-size:12.0pt;
  font-weight:400;
  font-style:normal;
  text-decoration:none;
  font-family:"Segoe UI", sans-serif;
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
.xl68
  {mso-style-parent:style0;
  background:white;
  mso-pattern:black none;}
.xl69
  {mso-style-parent:style0;
  font-size:14.0pt;
  text-align:center;
  vertical-align:middle;
  border-top:1.0pt solid windowtext;
  border-right:.5pt solid windowtext;
  border-bottom:.5pt solid windowtext;
  border-left:1.0pt solid windowtext;
  background:white;
  mso-pattern:black none;
  mso-protection:unlocked visible;
  white-space:normal;}
.xl70
  {mso-style-parent:style0;
  font-size:14.0pt;
  text-align:center;
  vertical-align:middle;
  border-top:1.0pt solid windowtext;
  border-right:.5pt solid windowtext;
  border-bottom:.5pt solid windowtext;
  border-left:.5pt solid windowtext;
  background:white;
  mso-pattern:black none;
  mso-protection:unlocked visible;
  white-space:normal;}
.xl71
  {mso-style-parent:style16;
  font-size:14.0pt;
  mso-number-format:"\[$$-240A\]\#\,\#\#0\.00";
  text-align:center;
  vertical-align:middle;
  border-top:1.0pt solid windowtext;
  border-right:.5pt solid windowtext;
  border-bottom:.5pt solid windowtext;
  border-left:.5pt solid windowtext;
  background:white;
  mso-pattern:black none;
  mso-protection:unlocked visible;
  white-space:normal;}
.xl72
  {mso-style-parent:style17;
  font-size:14.0pt;
  mso-number-format:0%;
  text-align:center;
  vertical-align:middle;
  border-top:1.0pt solid windowtext;
  border-right:.5pt solid windowtext;
  border-bottom:.5pt solid windowtext;
  border-left:.5pt solid windowtext;
  background:white;
  mso-pattern:black none;
  mso-protection:unlocked visible;
  white-space:normal;}
.xl73
  {mso-style-parent:style0;
  font-size:14.0pt;
  text-align:center;
  vertical-align:middle;
  border-top:.5pt solid windowtext;
  border-right:.5pt solid windowtext;
  border-bottom:.5pt solid windowtext;
  border-left:1.0pt solid windowtext;
  background:white;
  mso-pattern:black none;
  mso-protection:unlocked visible;
  white-space:normal;}
.xl74
  {mso-style-parent:style0;
  font-size:14.0pt;
  text-align:center;
  vertical-align:middle;
  border:.5pt solid windowtext;
  background:white;
  mso-pattern:black none;
  mso-protection:unlocked visible;
  white-space:normal;}
.xl75
  {mso-style-parent:style16;
  font-size:14.0pt;
  mso-number-format:"\[$$-240A\]\#\,\#\#0\.00";
  text-align:center;
  vertical-align:middle;
  border:.5pt solid windowtext;
  background:white;
  mso-pattern:black none;
  mso-protection:unlocked visible;
  white-space:normal;}
.xl76
  {mso-style-parent:style17;
  font-size:14.0pt;
  mso-number-format:0%;
  text-align:center;
  vertical-align:middle;
  border:.5pt solid windowtext;
  background:white;
  mso-pattern:black none;
  mso-protection:unlocked visible;
  white-space:normal;}
.xl77
  {mso-style-parent:style0;
  font-size:14.0pt;
  mso-number-format:"\[$-C0A\]dd\\-mmm\\-yy\;\@";
  text-align:center;
  vertical-align:middle;
  border-top:1.0pt solid windowtext;
  border-right:1.0pt solid windowtext;
  border-bottom:.5pt solid windowtext;
  border-left:.5pt solid windowtext;
  background:white;
  mso-pattern:black none;
  mso-protection:unlocked visible;
  white-space:normal;}
.xl78
  {mso-style-parent:style0;
  font-size:14.0pt;
  mso-number-format:"\[$-C0A\]dd\\-mmm\\-yy\;\@";
  text-align:center;
  vertical-align:middle;
  border-top:.5pt solid windowtext;
  border-right:1.0pt solid windowtext;
  border-bottom:.5pt solid windowtext;
  border-left:.5pt solid windowtext;
  background:white;
  mso-pattern:black none;
  mso-protection:unlocked visible;
  white-space:normal;}
.xl79
  {mso-style-parent:style18;
  color:windowtext;
  font-size:10.0pt;
  background:white;
  mso-pattern:black none;}
.xl80
  {mso-style-parent:style18;
  color:white;
  font-size:10.0pt;
  font-weight:700;
  text-align:center;
  vertical-align:middle;
  border-top:1.0pt solid windowtext;
  border-right:1.0pt solid windowtext;
  border-bottom:none;
  border-left:1.0pt solid windowtext;
  background:black;
  mso-pattern:black none;}
.xl81
  {mso-style-parent:style18;
  color:windowtext;
  font-size:10.0pt;
  text-align:center;
  vertical-align:middle;
  border-top:1.0pt solid windowtext;
  border-right:.5pt solid windowtext;
  border-bottom:.5pt solid windowtext;
  border-left:1.0pt solid windowtext;}
.xl82
  {mso-style-parent:style18;
  color:windowtext;
  font-size:10.0pt;
  text-align:left;
  vertical-align:middle;
  border-top:1.0pt solid windowtext;
  border-right:.5pt solid windowtext;
  border-bottom:.5pt solid windowtext;
  border-left:.5pt solid windowtext;
  white-space:normal;}
.xl83
  {mso-style-parent:style18;
  color:windowtext;
  font-size:10.0pt;
  mso-number-format:"Short Date";
  text-align:center;
  vertical-align:middle;
  border-top:1.0pt solid windowtext;
  border-right:1.0pt solid windowtext;
  border-bottom:.5pt solid windowtext;
  border-left:.5pt solid windowtext;}
.xl84
  {mso-style-parent:style18;
  color:windowtext;
  font-size:10.0pt;
  text-align:center;
  vertical-align:middle;
  border-top:.5pt solid windowtext;
  border-right:.5pt solid windowtext;
  border-bottom:.5pt solid windowtext;
  border-left:1.0pt solid windowtext;}
.xl85
  {mso-style-parent:style18;
  color:windowtext;
  font-size:10.0pt;
  text-align:left;
  vertical-align:middle;
  border:.5pt solid windowtext;
  white-space:normal;}
.xl86
  {mso-style-parent:style18;
  color:windowtext;
  font-size:10.0pt;
  mso-number-format:"Short Date";
  text-align:center;
  vertical-align:middle;
  border-top:.5pt solid windowtext;
  border-right:1.0pt solid windowtext;
  border-bottom:.5pt solid windowtext;
  border-left:.5pt solid windowtext;}
.xl87
  {mso-style-parent:style18;
  color:windowtext;
  font-size:10.0pt;
  text-align:center;
  vertical-align:middle;
  border-top:.5pt solid windowtext;
  border-right:.5pt solid windowtext;
  border-bottom:1.0pt solid windowtext;
  border-left:1.0pt solid windowtext;}
.xl88
  {mso-style-parent:style18;
  color:windowtext;
  font-size:10.0pt;
  text-align:left;
  vertical-align:middle;
  border-top:.5pt solid windowtext;
  border-right:.5pt solid windowtext;
  border-bottom:1.0pt solid windowtext;
  border-left:.5pt solid windowtext;
  white-space:normal;}
.xl89
  {mso-style-parent:style18;
  color:windowtext;
  font-size:10.0pt;
  mso-number-format:"Short Date";
  text-align:center;
  vertical-align:middle;
  border-top:.5pt solid windowtext;
  border-right:1.0pt solid windowtext;
  border-bottom:1.0pt solid windowtext;
  border-left:.5pt solid windowtext;}
.xl90
  {mso-style-parent:style0;
  font-size:14.0pt;
  text-align:left;
  vertical-align:middle;
  border-top:.5pt solid windowtext;
  border-right:none;
  border-bottom:.5pt solid windowtext;
  border-left:.5pt solid windowtext;
  background:white;
  mso-pattern:black none;
  mso-protection:unlocked visible;
  white-space:normal;}
.xl91
  {mso-style-parent:style0;
  font-size:14.0pt;
  text-align:left;
  vertical-align:middle;
  border-top:.5pt solid windowtext;
  border-right:.5pt solid windowtext;
  border-bottom:.5pt solid windowtext;
  border-left:none;
  background:white;
  mso-pattern:black none;
  mso-protection:unlocked visible;
  white-space:normal;}
.xl92
  {mso-style-parent:style0;
  font-size:14.0pt;
  text-align:left;
  vertical-align:middle;
  border-top:1.0pt solid windowtext;
  border-right:none;
  border-bottom:.5pt solid windowtext;
  border-left:.5pt solid windowtext;
  background:white;
  mso-pattern:black none;
  mso-protection:unlocked visible;
  white-space:normal;}
.xl93
  {mso-style-parent:style0;
  font-size:14.0pt;
  text-align:left;
  vertical-align:middle;
  border-top:1.0pt solid windowtext;
  border-right:.5pt solid windowtext;
  border-bottom:.5pt solid windowtext;
  border-left:none;
  background:white;
  mso-pattern:black none;
  mso-protection:unlocked visible;
  white-space:normal;}
.xl94
  {mso-style-parent:style18;
  color:windowtext;
  font-size:16.0pt;
  font-weight:700;
  text-align:center;
  background:white;
  mso-pattern:black none;}
.xl95
  {mso-style-parent:style0;
  font-size:11.0pt;
  font-weight:700;
  text-align:center;
  vertical-align:middle;
  border-top:1.0pt solid windowtext;
  border-right:none;
  border-bottom:none;
  border-left:1.0pt solid windowtext;
  background:white;
  mso-pattern:black none;
  white-space:normal;}
.xl96
  {mso-style-parent:style0;
  font-size:11.0pt;
  font-weight:700;
  text-align:center;
  vertical-align:middle;
  border-top:1.0pt solid windowtext;
  border-right:1.0pt solid windowtext;
  border-bottom:none;
  border-left:none;
  background:white;
  mso-pattern:black none;
  white-space:normal;}
.xl97
  {mso-style-parent:style0;
  font-size:11.0pt;
  font-weight:700;
  text-align:center;
  vertical-align:middle;
  border-top:1.0pt solid windowtext;
  border-right:none;
  border-bottom:none;
  border-left:none;
  background:white;
  mso-pattern:black none;
  white-space:normal;}
.xl98
  {mso-style-parent:style0;
  font-size:11.0pt;
  font-weight:700;
  text-align:center;
  vertical-align:middle;
  border-top:none;
  border-right:none;
  border-bottom:none;
  border-left:1.0pt solid windowtext;
  background:white;
  mso-pattern:black none;
  white-space:normal;}
.xl99
  {mso-style-parent:style0;
  font-size:11.0pt;
  font-weight:700;
  text-align:center;
  vertical-align:middle;
  border-top:none;
  border-right:1.0pt solid windowtext;
  border-bottom:none;
  border-left:none;
  background:white;
  mso-pattern:black none;
  white-space:normal;}
.xl100
  {mso-style-parent:style0;
  font-size:11.0pt;
  font-weight:700;
  text-align:center;
  vertical-align:middle;
  background:white;
  mso-pattern:black none;
  white-space:normal;}
.xl101
  {mso-style-parent:style0;
  font-size:11.0pt;
  font-weight:700;
  text-align:center;
  vertical-align:middle;
  border-top:none;
  border-right:none;
  border-bottom:1.0pt solid windowtext;
  border-left:1.0pt solid windowtext;
  background:white;
  mso-pattern:black none;
  white-space:normal;}
.xl102
  {mso-style-parent:style0;
  font-size:11.0pt;
  font-weight:700;
  text-align:center;
  vertical-align:middle;
  border-top:none;
  border-right:1.0pt solid windowtext;
  border-bottom:1.0pt solid windowtext;
  border-left:none;
  background:white;
  mso-pattern:black none;
  white-space:normal;}
.xl103
  {mso-style-parent:style0;
  font-size:11.0pt;
  font-weight:700;
  text-align:center;
  vertical-align:middle;
  border-top:none;
  border-right:none;
  border-bottom:1.0pt solid windowtext;
  border-left:none;
  background:white;
  mso-pattern:black none;
  white-space:normal;}
.xl104
  {mso-style-parent:style0;
  font-size:11.0pt;
  font-weight:700;
  text-align:left;
  vertical-align:middle;
  background:#D9D9D9;
  mso-pattern:black none;
  white-space:normal;}
.xl105
  {mso-style-parent:style0;
  font-size:11.0pt;
  font-weight:700;
  vertical-align:middle;
  background:white;
  mso-pattern:black none;
  white-space:normal;}
.xl106
  {mso-style-parent:style0;
  font-size:11.0pt;
  font-weight:700;
  text-align:center;
  vertical-align:middle;
  border:1.0pt solid windowtext;
  background:#FFC000;
  mso-pattern:black none;
  white-space:normal;}
.xl107
  {mso-style-parent:style0;
  font-size:11.0pt;
  font-weight:700;
  text-align:center;
  vertical-align:middle;
  border-top:1.0pt solid windowtext;
  border-right:none;
  border-bottom:1.0pt solid windowtext;
  border-left:1.0pt solid windowtext;
  background:#FFC000;
  mso-pattern:black none;
  white-space:normal;}
.xl108
  {mso-style-parent:style0;
  font-size:11.0pt;
  font-weight:700;
  text-align:center;
  vertical-align:middle;
  border-top:1.0pt solid windowtext;
  border-right:1.0pt solid windowtext;
  border-bottom:1.0pt solid windowtext;
  border-left:none;
  background:#FFC000;
  mso-pattern:black none;
  white-space:normal;}
.xl109
  {mso-style-parent:style0;
  font-size:9.0pt;
  font-weight:700;
  text-align:left;
  vertical-align:middle;
  background:#D9D9D9;
  mso-pattern:black none;
  white-space:normal;}
.xl110
  {mso-style-parent:style0;
  font-size:9.0pt;
  vertical-align:middle;
  background:white;
  mso-pattern:black none;
  white-space:normal;}
.xl111
  {mso-style-parent:style0;
  font-size:9.0pt;
  font-weight:700;
  vertical-align:middle;
  background:white;
  mso-pattern:black none;
  white-space:normal;}
.xl112
  {mso-style-parent:style0;
  font-size:10pt;
  font-weight:700;
  vertical-align:middle;
  border:1.0pt solid windowtext;
  background:white;
  mso-pattern:black none;
  white-space:normal;}
.xl113
  {mso-style-parent:style0;
  font-size:9.0pt;
  text-align:center;
  vertical-align:middle;
  border-top:.5pt solid windowtext;
  border-right:.5pt solid windowtext;
  border-bottom:1.0pt solid windowtext;
  border-left:1.0pt solid windowtext;
  background:white;
  mso-pattern:black none;
  mso-protection:unlocked visible;
  white-space:normal;}
.xl114
  {mso-style-parent:style0;
  font-size:9.0pt;
  text-align:center;
  vertical-align:middle;
  border-top:.5pt solid windowtext;
  border-right:.5pt solid windowtext;
  border-bottom:1.0pt solid windowtext;
  border-left:.5pt solid windowtext;
  background:white;
  mso-pattern:black none;
  mso-protection:unlocked visible;
  white-space:normal;}
.xl115
  {mso-style-parent:style0;
  font-size:9.0pt;
  text-align:left;
  vertical-align:middle;
  border-top:.5pt solid windowtext;
  border-right:none;
  border-bottom:1.0pt solid windowtext;
  border-left:.5pt solid windowtext;
  background:white;
  mso-pattern:black none;
  mso-protection:unlocked visible;
  white-space:normal;}
.xl116
  {mso-style-parent:style0;
  font-size:9.0pt;
  text-align:left;
  vertical-align:middle;
  border-top:.5pt solid windowtext;
  border-right:.5pt solid windowtext;
  border-bottom:1.0pt solid windowtext;
  border-left:none;
  background:white;
  mso-pattern:black none;
  mso-protection:unlocked visible;
  white-space:normal;}
.xl117
  {mso-style-parent:style16;
  font-size:9.0pt;
  mso-number-format:"\[$$-240A\]\#\,\#\#0\.00";
  text-align:center;
  vertical-align:middle;
  border-top:.5pt solid windowtext;
  border-right:.5pt solid windowtext;
  border-bottom:1.0pt solid windowtext;
  border-left:.5pt solid windowtext;
  background:white;
  mso-pattern:black none;
  mso-protection:unlocked visible;
  white-space:normal;}
.xl118
  {mso-style-parent:style16;
  font-size:9.0pt;
  mso-number-format:"\#\,\#\#0\.00\;\\-\#\,\#\#0\.00";
  text-align:center;
  vertical-align:middle;
  border-top:.5pt solid windowtext;
  border-right:.5pt solid windowtext;
  border-bottom:1.0pt solid windowtext;
  border-left:.5pt solid windowtext;
  background:white;
  mso-pattern:black none;
  mso-protection:unlocked visible;
  white-space:normal;}
.xl119
  {mso-style-parent:style17;
  font-size:9.0pt;
  mso-number-format:0%;
  text-align:center;
  vertical-align:middle;
  border-top:.5pt solid windowtext;
  border-right:.5pt solid windowtext;
  border-bottom:1.0pt solid windowtext;
  border-left:.5pt solid windowtext;
  background:white;
  mso-pattern:black none;
  mso-protection:unlocked visible;
  white-space:normal;}
.xl120
  {mso-style-parent:style0;
  font-size:9.0pt;
  mso-number-format:"\[$-C0A\]dd\\-mmm\\-yy\;\@";
  text-align:center;
  vertical-align:middle;
  border-top:.5pt solid windowtext;
  border-right:1.0pt solid windowtext;
  border-bottom:1.0pt solid windowtext;
  border-left:.5pt solid windowtext;
  background:white;
  mso-pattern:black none;
  mso-protection:unlocked visible;
  white-space:normal;}
.xl121
  {mso-style-parent:style0;
  font-size:9.0pt;
  background:white;
  mso-pattern:black none;}
.xl122
  {mso-style-parent:style0;
  font-size:9.0pt;
  font-weight:700;
  text-align:right;
  vertical-align:middle;
  background:white;
  mso-pattern:black none;
  white-space:normal;}
.xl123
  {mso-style-parent:style0;
  font-size:9.0pt;
  font-weight:700;
  text-align:right;
  vertical-align:middle;
  border-top:none;
  border-right:1.0pt solid windowtext;
  border-bottom:none;
  border-left:none;
  background:white;
  mso-pattern:black none;
  white-space:normal;}
.xl124
  {mso-style-parent:style16;
  color:white;
  font-size:9.0pt;
  font-weight:700;
  mso-number-format:"\[$$-240A\]\#\,\#\#0\.00";
  text-align:center;
  vertical-align:middle;
  border-top:none;
  border-right:none;
  border-bottom:1.0pt solid windowtext;
  border-left:1.0pt solid windowtext;
  background:black;
  mso-pattern:black none;
  white-space:normal;}
.xl125
  {mso-style-parent:style0;
  font-size:12pt;
  text-align:left;
  vertical-align:middle;
  border-top:none;
  border-right:none;
  border-bottom:1.0pt solid windowtext;
  border-left:none;
  background:white;
  mso-pattern:black none;
  mso-protection:unlocked visible;
  white-space:normal;}
.xl126
  {mso-style-parent:style0;
  font-size:9.0pt;
  text-align:left;
  vertical-align:middle;
  background:white;
  mso-pattern:black none;
  white-space:normal;}
.xl127
  {mso-style-parent:style0;
  font-size:9.0pt;
  text-align:left;
  vertical-align:middle;
  border-top:1.0pt solid windowtext;
  border-right:none;
  border-bottom:1.0pt solid windowtext;
  border-left:none;
  background:white;
  mso-pattern:black none;
  mso-protection:unlocked visible;
  white-space:normal;}
.xl128
  {mso-style-parent:style0;
  font-size:9.0pt;
  border-top:none;
  border-right:none;
  border-bottom:1.0pt solid windowtext;
  border-left:none;
  background:white;
  mso-pattern:black none;}
.xl129
  {mso-style-parent:style0;
  font-size:9.0pt;
  border-top:none;
  border-right:1.0pt solid windowtext;
  border-bottom:1.0pt solid windowtext;
  border-left:none;
  background:white;
  mso-pattern:black none;}
.xl130
  {mso-style-parent:style0;
  font-size:11.0pt;
  font-weight:700;
  text-align:center;
  vertical-align:middle;
  background:#D9D9D9;
  mso-pattern:black none;
  white-space:normal;}
.xl131
  {mso-style-parent:style0;
  font-size:11.0pt;
  font-weight:700;
  mso-number-format:"\[$-F800\]dddd\\\,\\ mmmm\\ dd\\\,\\ yyyy";
  text-align:center;
  vertical-align:middle;
  border-top:none;
  border-right:none;
  border-bottom:1.0pt solid windowtext;
  border-left:none;
  background:white;
  mso-pattern:black none;
  mso-protection:unlocked visible;
  white-space:normal;}
.xl132
  {mso-style-parent:style0;
  font-size:11.0pt;
  font-weight:700;
  text-align:left;
  vertical-align:middle;
  border-top:none;
  border-right:none;
  border-bottom:none;
  border-left:1.0pt solid windowtext;
  background:#D9D9D9;
  mso-pattern:black none;
  white-space:normal;}
.xl133
  {mso-style-parent:style0;
  font-size:11.0pt;
  font-weight:700;
  mso-number-format:"\[$-F800\]dddd\\\,\\ mmmm\\ dd\\\,\\ yyyy";
  text-align:center;
  vertical-align:middle;
  border-top:none;
  border-right:1.0pt solid windowtext;
  border-bottom:1.0pt solid windowtext;
  border-left:none;
  background:white;
  mso-pattern:black none;
  mso-protection:unlocked visible;
  white-space:normal;}
.xl134
  {mso-style-parent:style0;
  font-size:11.0pt;
  font-weight:700;
  vertical-align:middle;
  border-top:none;
  border-right:1.0pt solid windowtext;
  border-bottom:none;
  border-left:none;
  background:white;
  mso-pattern:black none;
  white-space:normal;}
.xl135
  {mso-style-parent:style0;
  font-size:11.0pt;
  font-weight:700;
  vertical-align:middle;
  border-top:none;
  border-right:none;
  border-bottom:none;
  border-left:1.0pt solid windowtext;
  background:white;
  mso-pattern:black none;
  white-space:normal;}
.xl136
  {mso-style-parent:style0;
  font-size:9.0pt;
  vertical-align:middle;
  border-top:none;
  border-right:none;
  border-bottom:none;
  border-left:1.0pt solid windowtext;
  background:white;
  mso-pattern:black none;
  white-space:normal;}
.xl137
  {mso-style-parent:style0;
  font-size:9.0pt;
  vertical-align:middle;
  border-top:none;
  border-right:1.0pt solid windowtext;
  border-bottom:none;
  border-left:none;
  background:white;
  mso-pattern:black none;
  white-space:normal;}
.xl138
  {mso-style-parent:style0;
  font-size:9.0pt;
  font-weight:700;
  text-align:left;
  vertical-align:middle;
  border-top:none;
  border-right:none;
  border-bottom:none;
  border-left:1.0pt solid windowtext;
  background:#D9D9D9;
  mso-pattern:black none;
  white-space:normal;}
.xl139
  {mso-style-parent:style0;
  font-size:9.0pt;
  text-align:left;
  vertical-align:middle;
  border-top:none;
  border-right:none;
  border-bottom:none;
  border-left:1.0pt solid windowtext;
  background:white;
  mso-pattern:black none;
  white-space:normal;}
.xl140
  {mso-style-parent:style0;
  font-size:9.0pt;
  border-top:none;
  border-right:none;
  border-bottom:1.0pt solid windowtext;
  border-left:1.0pt solid windowtext;
  background:white;
  mso-pattern:black none;}
.xl141
  {mso-style-parent:style0;
  font-size:9.0pt;
  font-weight:700;
  vertical-align:middle;
  border-top:none;
  border-right:none;
  border-bottom:none;
  border-left:1.0pt solid windowtext;
  background:#D9D9D9;
  mso-pattern:black none;
  white-space:normal;}
.xl142
  {mso-style-parent:style0;
  font-size:9.0pt;
  font-weight:700;
  text-align:center;
  vertical-align:middle;
  border-top:none;
  border-right:none;
  border-bottom:1.0pt solid windowtext;
  border-left:none;
  background:white;
  mso-pattern:black none;
  mso-protection:unlocked visible;
  white-space:normal;}
.xl143
  {mso-style-parent:style0;
  font-size:9.0pt;
  font-weight:700;
  border-top:none;
  border-right:none;
  border-bottom:1.0pt solid windowtext;
  border-left:none;
  background:white;
  mso-pattern:black none;}
.xl144
  {mso-style-parent:style0;
  font-size:9.0pt;
  font-weight:700;
  text-align:left;
  vertical-align:middle;
  border-top:none;
  border-right:none;
  border-bottom:1.0pt solid windowtext;
  border-left:none;
  background:white;
  mso-pattern:black none;
  mso-protection:unlocked visible;}
.xl145
  {mso-style-parent:style0;
  font-size:9.0pt;
  font-weight:700;
  vertical-align:middle;
  border-top:none;
  border-right:none;
  border-bottom:1.0pt solid windowtext;
  border-left:none;
  background:white;
  mso-pattern:black none;
  mso-protection:unlocked visible;}
.xl146
  {mso-style-parent:style0;
  font-size:9.0pt;
  font-weight:700;
  vertical-align:middle;
  border-top:none;
  border-right:none;
  border-bottom:1.0pt solid windowtext;
  border-left:none;
  background:white;
  mso-pattern:black none;
  white-space:normal;}
.xl147
  {mso-style-parent:style0;
  font-size:9.0pt;
  font-weight:700;
  text-align:left;
  vertical-align:middle;
  border-top:none;
  border-right:none;
  border-bottom:1.0pt solid windowtext;
  border-left:none;
  background:white;
  mso-pattern:black none;
  white-space:normal;}
.xl148
  {mso-style-parent:style0;
  font-size:11.0pt;
  font-weight:700;
  text-align:center;
  vertical-align:middle;
  border-top:1.0pt solid windowtext;
  border-right:none;
  border-bottom:1.0pt solid windowtext;
  border-left:none;
  background:white;
  mso-pattern:black none;
  white-space:normal;}
.xl149
  {mso-style-parent:style0;
  font-size:9.0pt;
  font-weight:700;
  text-align:center;
  vertical-align:middle;
  background:#D9D9D9;
  mso-pattern:black none;
  white-space:normal;}
</style>';

$htmls .= '<body link="#0563C1" vlink="#954F72" class=xl68>';

$htmls .= "<table border=0 cellpadding=0 cellspacing=0 width=1342 style='border-collapse:
 collapse;table-layout:fixed;width:1010pt'>
 <col class=xl68 width=106 style='mso-width-source:userset;mso-width-alt:3015;
 width:80pt'>
 <col class=xl68 width=129 style='mso-width-source:userset;mso-width-alt:3669;
 width:97pt'>
 <col class=xl68 width=90 span=2 style='mso-width-source:userset;mso-width-alt:
 2560;width:68pt'>
 <col class=xl68 width=69 style='mso-width-source:userset;mso-width-alt:1962;
 width:52pt'>
 <col class=xl68 width=111 style='mso-width-source:userset;mso-width-alt:3157;
 width:83pt'>
 <col class=xl68 width=97 style='mso-width-source:userset;mso-width-alt:2759;
 width:73pt'>
 <col class=xl68 width=82 style='mso-width-source:userset;mso-width-alt:2332;
 width:62pt'>
 <col class=xl68 width=109 style='mso-width-source:userset;mso-width-alt:3100;
 width:82pt'>
 <col class=xl68 width=130 style='mso-width-source:userset;mso-width-alt:3697;
 width:98pt'>
 <col class=xl68 width=121 style='mso-width-source:userset;mso-width-alt:3441;
 width:91pt'>
 <col class=xl68 width=104 style='width:78pt'>
 <col class=xl68 width=104 style='width:78pt'>
 <tr height=18 style='mso-height-source:userset;height:13.5pt'>
  <td colspan=2 rowspan=3 height=63 width=235 style='border-right:1.0pt solid black;
  border-bottom:1.0pt solid black;border-top: 1.0pt solid black; border-left: 1.0pt solid black; height:47.25pt;width:177pt' align=left
  valign=top><span style='mso-ignore:vglayout;
  position:absolute;z-index:2;margin-left:41px;margin-top:6px;width:149px;
  height:53px'>";

  $htmls .= '<img width=149 height=53 src="http://190.85.125.226/yii/espumred/images/logosolicitudp002.png" v:shapes="Imagen_x0020_10"></span>';
  // $htmls .= "<span style='mso-ignore:vglayout2'>
  // <table cellpadding=0 cellspacing=0>
  //  <tr>
  //   <td colspan=2 rowspan=3 height=63 class=xl95 width=235 style='/*border-right:1.0pt solid black;*/ /*border-bottom:1.0pt solid black;*/height:52.25pt; width:177pt'>";
  // $htmls .= '<a name="Print_Area">&nbsp;</a></td>';
  // $htmls .= "</tr>
  // </table>
  // </span>";

  $htmls .= "</td>
  <td colspan=8 rowspan=3 class=xl95 width=778 style='border-right:1.0pt solid black;
  border-bottom:1.0pt solid black;width:586pt'>SOLICITUD DE PEDIDOS</td>
  <td class=xl112 width=121 style='border-left:none;width:91pt'>Código: FGC-04</td>
  <td class=xl68 width=104 style='width:78pt'>&nbsp;</td>
  <td class=xl68 width=104 style='width:78pt'>&nbsp;</td>
 </tr>
 <tr height=18 style='mso-height-source:userset;height:13.5pt'>
  <td height=18 class=xl112 width=121 style='height:13.5pt;border-top:none;
  border-left:none;width:91pt'>Versión: 01</td>
  <td class=xl68>&nbsp;</td>
  <td class=xl68>&nbsp;</td>
 </tr>
 <tr height=27 style='mso-height-source:userset;height:20.25pt'>
  <td height=27 class=xl112 width=121 style='height:20.25pt;border-top:none;
  border-left:none;width:91pt'>Fecha: 10/10/2016</td>
  <td class=xl68>&nbsp;</td>
  <td class=xl68>&nbsp;</td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td colspan=11 height=24 class=xl98 width=1134 style='border-right:1.0pt solid black;
  height:18.0pt;width:854pt'>&nbsp;</td>
  <td class=xl68>&nbsp;</td>
  <td class=xl68>&nbsp;</td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.75pt'>
  <td colspan=2 height=21 class=xl132 width=235 style='height:15.75pt;
  width:177pt'>Nombre del Asesor:</td>
  <td colspan=4 class=xl103 width=360 style='width:271pt'>&nbsp;".Yii::app()->user->Nombre . Yii::app()->user->Apellido."</td>
  <td class=xl68>&nbsp;</td>
  <td colspan=2 class=xl130 width=191 style='width:144pt'>Fecha Solicitud
  Pedido:</td>
  <td colspan=2 class=xl131 width=251 style='border-right:1.0pt solid black;
  width:189pt'>&nbsp;".$fecha_cargue."</td>
  <td class=xl68>&nbsp;</td>
  <td class=xl68>&nbsp;</td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.75pt'>
  <td colspan=2 height=21 class=xl132 width=235 style='height:15.75pt;
  width:177pt'>Nombre cliente:</td>
  <td colspan=8 class=xl103 width=778 style='width:586pt'>&nbsp;".$nomclien."</td>
  <td class=xl134 width=121 style='width:91pt'>&nbsp;</td>
  <td class=xl68>&nbsp;</td>
  <td class=xl68>&nbsp;</td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.75pt'>
  <td colspan=2 height=21 class=xl132 width=235 style='height:15.75pt;
  width:177pt'>Código Cliente:</td>
  <td colspan=8 class=xl148 width=778 style='width:586pt'>&nbsp;".$codclien."</td>
  <td class=xl134 width=121 style='width:91pt'>&nbsp;</td>
  <td class=xl68>&nbsp;</td>
  <td class=xl68>&nbsp;</td>
 </tr>
 <tr height=22 style='mso-height-source:userset;height:16.5pt'>
  <td height=22 class=xl135 width=106 style='height:16.5pt;width:80pt'>&nbsp;</td>
  <td class=xl105 width=129 style='width:97pt'>&nbsp;</td>
  <td class=xl105 width=90 style='width:68pt'>&nbsp;</td>
  <td class=xl105 width=90 style='width:68pt'>&nbsp;</td>
  <td class=xl105 width=69 style='width:52pt'>&nbsp;</td>
  <td class=xl105 width=111 style='width:83pt'>&nbsp;</td>
  <td class=xl105 width=97 style='width:73pt'>&nbsp;</td>
  <td class=xl105 width=82 style='width:62pt'>&nbsp;</td>
  <td class=xl105 width=109 style='width:82pt'>&nbsp;</td>
  <td class=xl105 width=130 style='width:98pt'>&nbsp;</td>
  <td class=xl134 width=121 style='width:91pt'>&nbsp;</td>
  <td class=xl68>&nbsp;</td>
  <td class=xl68>&nbsp;</td>
 </tr>
 <tr height=44 style='mso-height-source:userset;height:33.0pt'>
  <td height=44 class=xl106 width=106 style='height:33.0pt;width:80pt'>Nº OC
  Cliente</td>
  <td class=xl106 width=129 style='border-left:none;width:97pt'>Código Producto</td>
  <td colspan=2 class=xl107 width=180 style='border-right:1.0pt solid black;
  border-left:none;width:136pt'>Descripción</td>
  <td class=xl106 width=69 style='border-left:none;width:52pt'>Cantidad</td>
  <td class=xl106 width=111 style='border-left:none;width:83pt'>Valor unitario</td>
  <td class=xl106 width=97 style='border-left:none;width:73pt'>Valor kilo</td>
  <td class=xl106 width=82 style='border-left:none;width:62pt'>Porcentaje
  Descuento</td>
  <td class=xl106 width=109 style='border-left:none;width:82pt'>Valor
  Descuento<span style='mso-spacerun:yes'> </span></td>
  <td class=xl106 width=130 style='border-left:none;width:98pt'>Valor total</td>
  <td class=xl106 width=121 style='border-left:none;width:91pt'>Fecha de
  entrega</td>
  <td class=xl68>&nbsp;</td>
  <td class=xl68>&nbsp;</td>
 </tr>";


$i = 0;
  foreach ($_POST['Formyiis']['N_orden2'] as $value) {
    // echo $_POST['Formyiis']['value_kl2'][$i];
    $N_orden2 = (isset($_POST['Formyiis']['N_orden2'][$i]) && $_POST['Formyiis']['N_orden2'][$i] != "")?$_POST['Formyiis']['N_orden2'][$i]:"Vacio";
    $cod_prod2 = (isset($_POST['Formyiis']['cod_prod2'][$i]) && $_POST['Formyiis']['cod_prod2'][$i] != "")?$_POST['Formyiis']['cod_prod2'][$i]:"Vacio";
    $description2 = (isset($_POST['Formyiis']['description2'][$i]) && $_POST['Formyiis']['description2'][$i] != "")?$_POST['Formyiis']['description2'][$i]:"Vacio";
    $cantidad2 = (isset($_POST['Formyiis']['cantidad2'][$i]) && $_POST['Formyiis']['cantidad2'][$i] != "")?$_POST['Formyiis']['cantidad2'][$i]:"0";
    $value_unit2 = (isset($_POST['Formyiis']['value_unit2'][$i]) && $_POST['Formyiis']['value_unit2'][$i] != "")?money_format('%!.3n',$_POST['Formyiis']['value_unit2'][$i]):"0";
    $value_kl2 = (isset($_POST['Formyiis']['value_kl2'][$i]) && $_POST['Formyiis']['value_kl2'][$i] != "")? money_format('%!.3n',$_POST['Formyiis']['value_kl2'][$i]):"0";
    $descuentoP2 = (isset($_POST['Formyiis']['descuentoP2'][$i]) && $_POST['Formyiis']['descuentoP2'][$i] != "")?$_POST['Formyiis']['descuentoP2'][$i]:"0";
    $value_descount2 = (isset($_POST['Formyiis']['value_descount2'][$i]) && $_POST['Formyiis']['value_descount2'][$i] != "")?number_format($_POST['Formyiis']['value_descount2'][$i]):"0";
    $amount2 = (isset($_POST['Formyiis']['amount2'][$i]) && $_POST['Formyiis']['amount2'][$i] != "")?money_format('%!.3n',$_POST['Formyiis']['amount2'][$i]):"0";
    $date2 = (isset($_POST['Formyiis']['date2'][$i]) && $_POST['Formyiis']['date2'][$i] != "")?$_POST['Formyiis']['date2'][$i]:$fecha_cargue;
    
$htmls .= "
      
<tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl69 width=106 style='height:18.0pt;border-top:none; width:80pt'>&nbsp;".$N_orden2."</td>
  <td class=xl70 width=129 style='border-top:none;border-left:none;width:97pt'>&nbsp;".$cod_prod2."</td>
  <td colspan=2 class=xl92 width=180 style='border-right:.5pt solid black; border-left:none;width:136pt'>&nbsp;".$description2."</td>
  <td class=xl70 width=69 style='border-top:none;border-left:none;width:52pt'>&nbsp;".$cantidad2."</td>
  <td class=xl71 width=111 style='border-top:none;border-left:none;width:83pt;word-break:break-all;'>&nbsp;$".$value_unit2."</td>
  <td class=xl71 width=97 style='border-top:none;border-left:none;width:73pt;word-break:break-all;'>&nbsp;$".$value_kl2."</td>
  <td class=xl72 width=82 style='border-top:none;border-left:none;width:62pt;word-break:break-all;'>&nbsp;".$descuentoP2."%</td>
  <td class=xl71 width=109 style='border-top:none;border-left:none;width:82pt;word-break:break-all;'>&nbsp;$".$value_descount2."</td>
  <td class=xl71 width=130 style='border-top:none;border-left:none;width:98pt;word-break:break-all;'>&nbsp;$".$amount2."</td>
  <td class=xl77 width=121 style='border-top:none;border-left:none;width:91pt;word-break:break-all;'>&nbsp;".$date2."</td>
  <td class=xl68>&nbsp;</td>
  <td class=xl68>&nbsp;</td>
 </tr>";
 $i++;
}

$htmls .= "
<tr height=29 style='mso-height-source:userset;height:21.75pt'>
  <td height=29 class=xl136 width=106 style='height:21.75pt;width:80pt'>&nbsp;</td>
  <td class=xl110 width=129 style='width:97pt'>&nbsp;</td>
  <td class=xl110 width=90 style='width:68pt'>&nbsp;</td>
  <td class=xl121>&nbsp;</td>
  <td class=xl111 width=69 style='width:52pt'>&nbsp;</td>
  <td class=xl110 width=111 style='width:83pt'>&nbsp;</td>
  <td colspan=3 class=xl122 width=288 style='border-right:1.0pt solid black;
  width:217pt'>VALOR TOTAL DEL PEDIDO</td>
  <td class=xl124 width=130 style='border-left:none;width:98pt'>$".money_format('%!.3n',$_POST['valor_total_pedido'])."</td>
  <td class=xl137 width=121 style='width:91pt'>&nbsp;</td>
  <td class=xl121>&nbsp;</td>
  <td class=xl68>&nbsp;</td>
 </tr>
 <tr height=25 style='mso-height-source:userset;height:18.75pt'>
  <td colspan=2 height=25 class=xl138 width=235 style='height:18.75pt;
  width:177pt'>Observaciones de entrega:</td>
  <td class=xl109 width=90 style='width:68pt'>&nbsp;</td>
  <td colspan=7 class=xl125 width=688 style='width:518pt'>&nbsp;".$obs_entrega."</td>
  <td class=xl137 width=121 style='width:91pt'>&nbsp;</td>
  <td class=xl121>&nbsp;</td>
  <td class=xl68>&nbsp;</td>
 </tr>
 <tr height=25 style='mso-height-source:userset;height:18.75pt'>
  <td height=25 class=xl139 width=106 style='height:18.75pt;width:80pt'>&nbsp;</td>
  <td class=xl126 width=129 style='width:97pt'>&nbsp;</td>
  <td class=xl126 width=90 style='width:68pt'>&nbsp;</td>
  <td colspan=7 class=xl127 width=688 style='width:518pt'>&nbsp;</td>
  <td class=xl137 width=121 style='width:91pt'>&nbsp;</td>
  <td class=xl121>&nbsp;</td>
  <td class=xl68>&nbsp;</td>
 </tr>
 <tr height=25 style='mso-height-source:userset;height:18.75pt'>
  <td height=25 class=xl139 width=106 style='height:18.75pt;width:80pt'>&nbsp;</td>
  <td class=xl126 width=129 style='width:97pt'>&nbsp;</td>
  <td class=xl126 width=90 style='width:68pt'>&nbsp;</td>
  <td class=xl110 width=90 style='width:68pt'>&nbsp;</td>
  <td class=xl110 width=69 style='width:52pt'>&nbsp;</td>
  <td class=xl110 width=111 style='width:83pt'>&nbsp;</td>
  <td class=xl110 width=97 style='width:73pt'>&nbsp;</td>
  <td class=xl110 width=82 style='width:62pt'>&nbsp;</td>
  <td class=xl110 width=109 style='width:82pt'>&nbsp;</td>
  <td class=xl110 width=130 style='width:98pt'>&nbsp;</td>
  <td class=xl137 width=121 style='width:91pt'>&nbsp;</td>
  <td class=xl121>&nbsp;</td>
  <td class=xl68>&nbsp;</td>
 </tr>";
 if(isset($_POST['formyiid']['bonifi'])){
  $o = 0;
  foreach ($_POST['formyiid']['bonifi'] as $key => $value) {
    
   $htmls .= "<tr height=25 style='mso-height-source:userset;height:18.75pt'>
    <td height=25 class=xl141 width=106 style='height:18.75pt;width:80pt'>Bonificación N°1.</td>
    <td class=xl142 width=129 style='width:97pt'>&nbsp;".(isset($_POST['formyiid']['bonifi'][$o]))?$_POST['formyiid']['bonifi'][$o]:" "."</td>
    <td class=xl149 width=90 style='width:68pt'>Referencia:</td>
    <td class=xl143>&nbsp;".(isset($_POST['formyiid']['Ref'][$o]))?$_POST['formyiid']['Ref'][$o]:" "."</td>
    <td class=xl149 width=69 style='width:52pt'>Código:</td>
    <td colspan=3 class=xl144>&nbsp;".(isset($_POST['formyiid']['cod'][$o]))?$_POST['formyiid']['cod'][$o]:" "."</td>
    <td class=xl149 width=109 style='width:82pt'>Cantidad</td>
    <td class=xl145>&nbsp;".(isset($_POST['formyiid']['cant'][$o]))?$_POST['formyiid']['cant'][$o]:" "."</td>
    <td class=xl137 width=121 style='width:91pt'>&nbsp;</td>
    <td class=xl121>&nbsp;</td>
    <td class=xl68>&nbsp;</td>
   </tr>";
   $o++;
  }



  $htmls .=  "<tr height=25 style='mso-height-source:userset;height:18.75pt'>
      <td height=25 class=xl140 style='height:18.75pt'>&nbsp;</td>
      <td class=xl128>&nbsp;</td>
      <td class=xl128>&nbsp;</td>
      <td class=xl128>&nbsp;</td>
      <td class=xl128>&nbsp;</td>
      <td class=xl128>&nbsp;</td>
      <td class=xl128>&nbsp;</td>
      <td class=xl128>&nbsp;</td>
      <td class=xl128>&nbsp;</td>
      <td class=xl128>&nbsp;</td>
      <td class=xl129>&nbsp;</td>
      <td class=xl121>&nbsp;</td>
      <td class=xl68>&nbsp;</td>
    </tr>";
}
 // <tr height=25 style='mso-height-source:userset;height:18.75pt'>
 //  <td height=25 class=xl141 width=106 style='height:18.75pt;width:80pt'>Bonificación N°2.</td>
 //  <td class=xl142 width=129 style='width:97pt'>&nbsp;</td>
 //  <td class=xl149 width=90 style='width:68pt'>Referencia:</td>
 //  <td class=xl146 width=90 style='width:68pt'>&nbsp;</td>
 //  <td class=xl149 width=69 style='width:52pt'>Código:</td>
 //  <td colspan=3 class=xl147 width=290 style='width:218pt'>&nbsp;</td>
 //  <td class=xl149 width=109 style='width:82pt'>Cantidad</td>
 //  <td class=xl146 width=130 style='width:98pt'>&nbsp;</td>
 //  <td class=xl137 width=121 style='width:91pt'>&nbsp;</td>
 //  <td class=xl121>&nbsp;</td>
 //  <td class=xl68>&nbsp;</td>
 // </tr>
 // <tr height=25 style='mso-height-source:userset;height:18.75pt'>
 //  <td height=25 class=xl141 width=106 style='height:18.75pt;width:80pt'>Bonificación N°3.</td>
 //  <td class=xl142 width=129 style='width:97pt'>&nbsp;</td>
 //  <td class=xl149 width=90 style='width:68pt'>Referencia:</td>
 //  <td class=xl146 width=90 style='width:68pt'>&nbsp;</td>
 //  <td class=xl149 width=69 style='width:52pt'>Código:</td>
 //  <td colspan=3 class=xl147 width=290 style='width:218pt'>&nbsp;</td>
 //  <td class=xl149 width=109 style='width:82pt'>Cantidad</td>
 //  <td class=xl146 width=130 style='width:98pt'>&nbsp;</td>
 //  <td class=xl137 width=121 style='width:91pt'>&nbsp;</td>
 //  <td class=xl121>&nbsp;</td>
 //  <td class=xl68>&nbsp;</td>
 // </tr>
 // <tr height=25 style='mso-height-source:userset;height:18.75pt'>
 //  <td height=25 class=xl140 style='height:18.75pt'>&nbsp;</td>
 //  <td class=xl128>&nbsp;</td>
 //  <td class=xl128>&nbsp;</td>
 //  <td class=xl128>&nbsp;</td>
 //  <td class=xl128>&nbsp;</td>
 //  <td class=xl128>&nbsp;</td>
 //  <td class=xl128>&nbsp;</td>
 //  <td class=xl128>&nbsp;</td>
 //  <td class=xl128>&nbsp;</td>
 //  <td class=xl128>&nbsp;</td>
 //  <td class=xl129>&nbsp;</td>
 //  <td class=xl121>&nbsp;</td>
 //  <td class=xl68>&nbsp;</td>
 // </tr>
 // <tr class=xl68 height=23 style='height:17.25pt'>
 //  <td height=23 class=xl68 style='height:17.25pt'>&nbsp;</td>
 //  <td class=xl68>&nbsp;</td>
 //  <td class=xl68>&nbsp;</td>
 //  <td class=xl68>&nbsp;</td>
 //  <td class=xl68>&nbsp;</td>
 //  <td class=xl68>&nbsp;</td>
 //  <td class=xl68>&nbsp;</td>
 //  <td class=xl68>&nbsp;</td>
 //  <td class=xl68>&nbsp;</td>
 //  <td class=xl68>&nbsp;</td>
 //  <td class=xl68>&nbsp;</td>
 //  <td class=xl68>&nbsp;</td>
 //  <td class=xl68>&nbsp;</td>
 // </tr>
 // <tr height=23 style='height:17.25pt'>
 //  <td height=23 class=xl68 style='height:17.25pt'>&nbsp;</td>
 //  <td class=xl68>&nbsp;</td>
 //  <td class=xl68>&nbsp;</td>
 //  <td class=xl68>&nbsp;</td>
 //  <td class=xl68>&nbsp;</td>
 //  <td class=xl68>&nbsp;</td>
 //  <td class=xl68>&nbsp;</td>
 //  <td class=xl68>&nbsp;</td>
 //  <td class=xl68>&nbsp;</td>
 //  <td class=xl68>&nbsp;</td>
 //  <td class=xl68>&nbsp;</td>
 //  <td class=xl68>&nbsp;</td>
 //  <td class=xl68>&nbsp;</td>
 // </tr>
$htmls .=" <![if supportMisalignedColumns]>
 <tr height=0 style='display:none'>
  <td width=106 style='width:80pt'></td>
  <td width=129 style='width:97pt'></td>
  <td width=90 style='width:68pt'></td>
  <td width=90 style='width:68pt'></td>
  <td width=69 style='width:52pt'></td>
  <td width=111 style='width:83pt'></td>
  <td width=97 style='width:73pt'></td>
  <td width=82 style='width:62pt'></td>
  <td width=109 style='width:82pt'></td>
  <td width=130 style='width:98pt'></td>
  <td width=121 style='width:91pt'></td>
  <td width=104 style='width:78pt'></td>
  <td width=104 style='width:78pt'></td>
 </tr>
 <![endif]>
</table>
</body>";



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

                     
        $mail->SetFrom("espm.ftra.yii@gmail.com",Yii::app()->user->Nombre . Yii::app()->user->Apellido."-Pedido");
        $mail->Subject="Pedido cargado desde ESPUMRED";  

  //     $mail->AddAddress('pedidos@espumasmedellin.com');
  //     $mail->AddCC('sistemas@espumasmedellin.com');
  //     $mail->AddCC('auditor@espumasmedellin.com');
  //     $mail->AddCC('practicante.sistemas@espumasmedellin.com');
      $mail->AddAddress('practicante.sistemas@espumasmedellin.com');
      $mail->AddAddress('auxiliar.sistemas@espumasmedellin.com');

      $mail->isHTML(true);

  $mail->Body = utf8_decode($htmls);

     // echo $htmls;
                        
     //------------------------------------------------------------------------------------------------>//

      // $mail->AddAddress($correo,"observaciones"); No descomentar.        
          
          if($mail->send() == false){
            echo $mail->ErrorInfo;
            echo "No envio";
            echo "<br>";
            echo $htmls;

            // echo "<a href='/yii/espumred/index.php?r=solicitudP/Test'>Volver</a>";
            // $this->redirect(array('site/index&notification=error&t=Error al Enviar&c=Error al enviar el correo de confirmación'));
          }else{
             echo "si envio";
            echo "<br>";
            echo $htmls;
            // echo "<a href='/yii/espumred/index.php?r=solicitudP/Test'>Volver</a>";
             // $this->render(array('site/index'),array('notification'=>array('titulo'=>'Exito al Enviar','cuerpo'=>'El formato se ha enviado con exito.')));
          }

  ?>