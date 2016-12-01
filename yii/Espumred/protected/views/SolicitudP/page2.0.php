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
  border-top:1.0pt solid windowtext;
  border-right:none;
  border-bottom:none;
  border-left:none;
  background:white;
  mso-pattern:black none;}
.xl96
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
.xl97
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
.xl98
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
.xl99
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
.xl100
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
.xl101
  {mso-style-parent:style0;
  font-size:11.0pt;
  font-weight:700;
  text-align:center;
  vertical-align:middle;
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
  border-right:none;
  border-bottom:1.0pt solid windowtext;
  border-left:1.0pt solid windowtext;
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
  border-right:1.0pt solid windowtext;
  border-bottom:1.0pt solid windowtext;
  border-left:none;
  background:white;
  mso-pattern:black none;
  white-space:normal;}
.xl104
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
.xl105
  {mso-style-parent:style0;
  font-size:11.0pt;
  font-weight:700;
  text-align:left;
  vertical-align:middle;
  background:#D9D9D9;
  mso-pattern:black none;
  white-space:normal;}
.xl106
  {mso-style-parent:style0;
  font-size:11.0pt;
  font-weight:700;
  vertical-align:middle;
  background:white;
  mso-pattern:black none;
  white-space:normal;}
.xl107
  {mso-style-parent:style0;
  font-size:11.0pt;
  font-weight:700;
  text-align:center;
  vertical-align:middle;
  border:1.0pt solid windowtext;
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
  border-right:none;
  border-bottom:1.0pt solid windowtext;
  border-left:1.0pt solid windowtext;
  background:#FFC000;
  mso-pattern:black none;
  white-space:normal;}
.xl109
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
.xl110
  {mso-style-parent:style0;
  font-size:9.0pt;
  font-weight:700;
  text-align:left;
  vertical-align:middle;
  background:#D9D9D9;
  mso-pattern:black none;
  white-space:normal;}
.xl111
  {mso-style-parent:style0;
  font-size:9.0pt;
  vertical-align:middle;
  background:white;
  mso-pattern:black none;
  white-space:normal;}
.xl112
  {mso-style-parent:style0;
  font-size:9.0pt;
  vertical-align:middle;
  border-top:none;
  border-right:none;
  border-bottom:1.0pt solid windowtext;
  border-left:none;
  background:white;
  mso-pattern:black none;
  white-space:normal;}
.xl113
  {mso-style-parent:style0;
  font-size:9.0pt;
  font-weight:700;
  vertical-align:middle;
  background:white;
  mso-pattern:black none;
  white-space:normal;}
.xl114
  {mso-style-parent:style0;
  font-size:8.0pt;
  font-weight:700;
  vertical-align:middle;
  border:1.0pt solid windowtext;
  background:white;
  mso-pattern:black none;
  white-space:normal;}
.xl115
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
.xl116
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
.xl117
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
.xl118
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
.xl119
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
.xl120
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
.xl121
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
.xl122
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
.xl123
  {mso-style-parent:style0;
  font-size:9.0pt;
  background:white;
  mso-pattern:black none;}
.xl124
  {mso-style-parent:style0;
  font-size:9.0pt;
  font-weight:700;
  text-align:right;
  vertical-align:middle;
  background:white;
  mso-pattern:black none;
  white-space:normal;}
.xl125
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
.xl126
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
.xl127
  {mso-style-parent:style0;
  font-size:9.0pt;
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
.xl128
  {mso-style-parent:style0;
  font-size:9.0pt;
  text-align:left;
  vertical-align:middle;
  background:white;
  mso-pattern:black none;
  white-space:normal;}
.xl129
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
.xl130
  {mso-style-parent:style0;
  font-size:9.0pt;
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
.xl131
  {mso-style-parent:style0;
  font-size:9.0pt;
  border-top:none;
  border-right:none;
  border-bottom:1.0pt solid windowtext;
  border-left:none;
  background:white;
  mso-pattern:black none;}
.xl132
  {mso-style-parent:style0;
  font-size:9.0pt;
  text-align:left;
  vertical-align:middle;
  border-top:none;
  border-right:none;
  border-bottom:1.0pt solid windowtext;
  border-left:none;
  background:white;
  mso-pattern:black none;
  mso-protection:unlocked visible;}
.xl133
  {mso-style-parent:style0;
  font-size:9.0pt;
  vertical-align:middle;
  border-top:none;
  border-right:none;
  border-bottom:1.0pt solid windowtext;
  border-left:none;
  background:white;
  mso-pattern:black none;
  mso-protection:unlocked visible;}
.xl134
  {mso-style-parent:style0;
  font-size:9.0pt;
  text-align:left;
  vertical-align:middle;
  border-top:none;
  border-right:none;
  border-bottom:1.0pt solid windowtext;
  border-left:none;
  background:white;
  mso-pattern:black none;
  white-space:normal;}
.xl135
  {mso-style-parent:style0;
  font-size:9.0pt;
  border-top:none;
  border-right:1.0pt solid windowtext;
  border-bottom:1.0pt solid windowtext;
  border-left:none;
  background:white;
  mso-pattern:black none;}
.xl136
  {mso-style-parent:style0;
  font-size:9.0pt;
  text-align:left;
  vertical-align:middle;
  background:#D9D9D9;
  mso-pattern:black none;
  white-space:normal;}
.xl137
  {mso-style-parent:style0;
  font-size:11.0pt;
  border-top:1.0pt solid windowtext;
  border-right:none;
  border-bottom:none;
  border-left:none;
  background:white;
  mso-pattern:black none;}
.xl138
  {mso-style-parent:style0;
  font-size:11.0pt;
  font-weight:700;
  vertical-align:middle;
  border-top:none;
  border-right:none;
  border-bottom:1.0pt solid windowtext;
  border-left:none;
  background:white;
  mso-pattern:black none;
  white-space:normal;}
.xl139
  {mso-style-parent:style0;
  font-size:11.0pt;
  font-weight:700;
  text-align:center;
  vertical-align:middle;
  background:#D9D9D9;
  mso-pattern:black none;
  white-space:normal;}
.xl140
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
.xl141
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
.xl142
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
.xl143
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
.xl144
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
.xl145
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
.xl146
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
.xl147
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
.xl148
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
.xl149
  {mso-style-parent:style0;
  font-size:9.0pt;
  vertical-align:middle;
  border-top:none;
  border-right:none;
  border-bottom:none;
  border-left:1.0pt solid windowtext;
  background:#D9D9D9;
  mso-pattern:black none;
  white-space:normal;}
.xl150
  {mso-style-parent:style0;
  font-size:9.0pt;
  border-top:none;
  border-right:none;
  border-bottom:1.0pt solid windowtext;
  border-left:1.0pt solid windowtext;
  background:white;
  mso-pattern:black none;}
</style>';

$htmls .= '<body link="#0563C1" vlink="#954F72" class=xl68>';

$htmls .= "<table border=0 cellpadding=0 cellspacing=0 width=1159 style='border-collapse:
 collapse;table-layout:fixed;width:871pt'>
 <col class=xl68 width=106 style='mso-width-source:userset;mso-width-alt:3015;
 width:80pt'>
 <col class=xl68 width=78 style='mso-width-source:userset;mso-width-alt:2218;
 width:59pt'>
 <col class=xl68 width=90 span=2 style='mso-width-source:userset;mso-width-alt:
 2560;width:68pt'>
 <col class=xl68 width=79 style='mso-width-source:userset;mso-width-alt:2247;
 width:59pt'>
 <col class=xl68 width=72 span=2 style='mso-width-source:userset;mso-width-alt:
 2048;width:54pt'>
 <col class=xl68 width=89 style='mso-width-source:userset;mso-width-alt:2531;
 width:67pt'>
 <col class=xl68 width=88 style='mso-width-source:userset;mso-width-alt:2503;
 width:66pt'>
 <col class=xl68 width=72 style='mso-width-source:userset;mso-width-alt:2048;
 width:54pt'>
 <col class=xl68 width=115 style='mso-width-source:userset;mso-width-alt:3271;
 width:86pt'>
 <col class=xl68 width=104 style='width:78pt'>
 <col class=xl68 width=104 style='width:78pt'>
 <tr height=10 style='mso-height-source:userset;height:7.5pt'>
  <td height=10 class=xl137 width=106 style='height:7.5pt;width:80pt'>&nbsp;</td>
  <td class=xl137 width=78 style='width:59pt'>&nbsp;</td>
  <td class=xl137 width=90 style='width:68pt'>&nbsp;</td>
  <td class=xl137 width=90 style='width:68pt'>&nbsp;</td>
  <td class=xl137 width=79 style='width:59pt'>&nbsp;</td>
  <td class=xl137 width=72 style='width:54pt'>&nbsp;</td>
  <td class=xl137 width=72 style='width:54pt'>&nbsp;</td>
  <td class=xl137 width=89 style='width:67pt'>&nbsp;</td>
  <td class=xl137 width=88 style='width:66pt'>&nbsp;</td>
  <td class=xl137 width=72 style='width:54pt'>&nbsp;</td>
  <td class=xl137 width=115 style='width:86pt'>&nbsp;</td>
  <td class=xl95 width=104 style='width:78pt'>&nbsp;</td>
  <td class=xl68 width=104 style='width:78pt'>&nbsp;</td>
 </tr>
 <tr height=18 style='mso-height-source:userset;height:13.5pt'>
  <td colspan=2 rowspan=3 height=54 width=184 style='border-right:1.0pt solid black;
  border-bottom:1.0pt solid black;height:40.5pt;width:139pt' align=left
  valign=top>
  <span style='mso-ignore:vglayout;
  position:absolute;z-index:1;margin-left:28px;margin-top:3px;width:134px;
  height:48px'>";

$htmls .=  '<img width=134 height=48 src="http://190.85.125.226/yii/espumred/images/logosolicitudp002.png" v:shapes="Imagen_x0020_10"></span>';
$htmls .= "<span style='mso-ignore:vglayout2'>
  <table cellpadding=0 cellspacing=0>
   <tr>
    <td colspan=2 rowspan=3 height=54 class=xl96 width=184 style='/*border-right:
    1.0pt solid black;*/ /*border-bottom:1.0pt solid black;*/height:47.5pt;width:139pt'>";
$htmls .= '<a name="Print_Area">&nbsp;</a></td>';
$htmls .= "</tr>
  </table>
  </span></td>
  <td colspan=8 rowspan=3 class=xl96 width=652 style='border-right:1.0pt solid black;
  border-bottom:1.0pt solid black;width:490pt'>SOLICITUD DE PEDIDOS</td>
  <td class=xl114 width=115 style='border-left:none;width:86pt'>Código: FGC-04</td>
  <td class=xl68>&nbsp;</td>
  <td class=xl68>&nbsp;</td>
 </tr>
 <tr height=18 style='mso-height-source:userset;height:13.5pt'>
  <td height=18 class=xl114 width=115 style='height:13.5pt;border-top:none;
  border-left:none;width:86pt'>Versión: 01</td>
  <td class=xl68>&nbsp;</td>
  <td class=xl68>&nbsp;</td>
 </tr>
 <tr height=18 style='mso-height-source:userset;height:13.5pt'>
  <td height=18 class=xl114 width=115 style='height:13.5pt;border-top:none;
  border-left:none;width:86pt'>Fecha: 10/10/2016</td>
  <td class=xl68>&nbsp;</td>
  <td class=xl68>&nbsp;</td>
 </tr>
 <tr height=5 style='mso-height-source:userset;height:3.75pt'>
  <td colspan=11 height=5 class=xl99 width=951 style='border-right:1.0pt solid black;
  height:3.75pt;width:715pt'>&nbsp;</td>
  <td class=xl68>&nbsp;</td>
  <td class=xl68>&nbsp;</td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.75pt'>
  <td colspan=2 height=21 class=xl141 width=184 style='height:15.75pt;
  width:139pt'>Nombre del Asesor:</td>
  <td class=xl138 width=250 style='width:90pt'>&nbsp;</td>
  <td class=xl138 width=250 style='width:68pt'>&nbsp;</td>
  <td class=xl138 width=79 style='width:59pt'>&nbsp;</td>
  <td class=xl138 width=72 style='width:54pt'>&nbsp;</td>
  <td colspan=3 class=xl139 width=249 style='width:187pt'>Fecha Solicitud
  Pedido:</td>
  <td colspan=2 class=xl140 width=187 style='border-right:1.0pt solid black;
  width:140pt'>&nbsp;".$fecha_cargue."</td>
  <td class=xl68>&nbsp;</td>
  <td class=xl68>&nbsp;</td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.75pt'>
  <td colspan=2 height=21 class=xl141 width=184 style='height:15.75pt;
  width:139pt'>Nombre cliente:</td>
  <td colspan=8 class=xl104 width=652 style='width:490pt'>&nbsp;".$nomclien."</td>
  <td class=xl143 width=115 style='width:86pt'>&nbsp;</td>
  <td class=xl68>&nbsp;</td>
  <td class=xl68>&nbsp;</td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.75pt'>
  <td colspan=2 height=21 class=xl141 width=184 style='height:15.75pt;
  width:139pt'>Código Cliente:</td>
  <td colspan=2 class=xl104 width=180 style='width:136pt'>&nbsp;</td>
  <td class=xl138 width=79 style='width:59pt'>&nbsp;".$codclien."</td>
  <td class=xl138 width=72 style='width:54pt'>&nbsp;</td>
  <td class=xl138 width=72 style='width:54pt'>&nbsp;</td>
  <td class=xl104 width=89 style='width:67pt'>&nbsp;</td>
  <td class=xl138 width=88 style='width:66pt'>&nbsp;</td>
  <td class=xl138 width=72 style='width:54pt'>&nbsp;</td>
  <td class=xl143 width=115 style='width:86pt'>&nbsp;</td>
  <td class=xl68>&nbsp;</td>
  <td class=xl68>&nbsp;</td>
 </tr>
 <tr height=5 style='mso-height-source:userset;height:3.75pt'>
  <td height=5 class=xl144 width=106 style='height:3.75pt;width:80pt'>&nbsp;</td>
  <td class=xl106 width=78 style='width:59pt'>&nbsp;</td>
  <td class=xl106 width=90 style='width:68pt'>&nbsp;</td>
  <td class=xl106 width=90 style='width:68pt'>&nbsp;</td>
  <td class=xl106 width=79 style='width:59pt'>&nbsp;</td>
  <td class=xl106 width=72 style='width:54pt'>&nbsp;</td>
  <td class=xl106 width=72 style='width:54pt'>&nbsp;</td>
  <td class=xl106 width=89 style='width:67pt'>&nbsp;</td>
  <td class=xl106 width=88 style='width:66pt'>&nbsp;</td>
  <td class=xl106 width=72 style='width:54pt'>&nbsp;</td>
  <td class=xl143 width=115 style='width:86pt'>&nbsp;</td>
  <td class=xl68>&nbsp;</td>
  <td class=xl68>&nbsp;</td>
 </tr>
 <tr height=37 style='mso-height-source:userset;height:27.75pt'>
  <td height=37 class=xl107 width=106 style='height:27.75pt;width:80pt'>Nº OC
  Cliente</td>
  <td class=xl107 width=78 style='border-left:none;width:59pt'>Código Producto</td>
  <td colspan=2 class=xl108 width=180 style='border-right:1.0pt solid black;
  border-left:none;width:136pt'>Descripción</td>
  <td class=xl107 width=79 style='border-left:none;width:59pt'>Cantidad</td>
  <td class=xl107 width=72 style='border-left:none;width:54pt'>Valor unitario</td>
  <td class=xl107 width=72 style='border-left:none;width:54pt'>Valor kilo</td>
  <td class=xl107 width=89 style='border-left:none;width:67pt'>Porcentaje
  Descuento</td>
  <td class=xl107 width=88 style='border-left:none;width:66pt'>Valor
  Descuento<span style='mso-spacerun:yes'> </span></td>
  <td class=xl107 width=72 style='border-left:none;width:54pt'>Valor total</td>
  <td class=xl107 width=115 style='border-left:none;width:86pt'>Fecha de
  entrega</td>
  <td class=xl68>&nbsp;</td>
  <td class=xl68>&nbsp;</td>
 </tr>";

$i = 0;
  foreach ($_POST['Formyiis']['N_orden2'] as $value) {
$htmls .= "
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl69 width=106 style='height:18.0pt;border-top:none; width:80pt'>&nbsp;".$_POST['Formyiis']['N_orden2'][$i]."</td>
  <td class=xl70 width=78 style='border-top:none;border-left:none;width:59pt'>&nbsp;".$_POST['Formyiis']['cod_prod2'][$i]."</td>
  <td colspan=2 class=xl92 width=180 style='border-right:.5pt solid black; border-left:none;width:136pt'>&nbsp;".$_POST['Formyiis']['description2'][$i]."</td>
  <td class=xl70 width=79 style='border-top:none;border-left:none;width:59pt'>&nbsp;".$_POST['Formyiis']['cantidad2'][$i]."</td>
  <td class=xl71 width=72 style='border-top:none;border-left:none;width:54pt'>&nbsp;$".number_format($_POST['Formyiis']['value_unit2'][$i])."</td>
  <td class=xl71 width=72 style='border-top:none;border-left:none;width:54pt'>&nbsp;$".number_format($_POST['Formyiis']['value_kl2'][$i])."</td>
  <td class=xl72 width=89 style='border-top:none;border-left:none;width:67pt'>&nbsp;".$_POST['Formyiis']['descuentoP2'][$i]."%</td>
  <td class=xl71 width=88 style='border-top:none;border-left:none;width:66pt'>&nbsp;$".number_format($_POST['Formyiis']['value_descount2'][$i])."</td>
  <td class=xl71 width=72 style='border-top:none;border-left:none;width:54pt'>&nbsp;$".number_format($_POST['Formyiis']['amount2'][$i])."</td>
  <td class=xl77 width=115 style='border-top:none;border-left:none;width:86pt'>&nbsp;".$_POST['Formyiis']['date2'][$i]."</td>
  <td class=xl68>&nbsp;</td>
  <td class=xl68>&nbsp;</td>
 </tr>";
 $i++;
}

$htmls .= "
 <tr height=29 style='mso-height-source:userset;height:21.75pt'>
  <td height=29 class=xl145 width=106 style='height:21.75pt;width:80pt'>&nbsp;</td>
  <td class=xl111 width=78 style='width:59pt'>&nbsp;</td>
  <td class=xl111 width=90 style='width:68pt'>&nbsp;</td>
  <td class=xl123>&nbsp;</td>
  <td class=xl113 width=79 style='width:59pt'>&nbsp;</td>
  <td class=xl111 width=72 style='width:54pt'>&nbsp;</td>
  <td colspan=3 class=xl124 width=249 style='border-right:1.0pt solid black;
  width:187pt'>VALOR TOTAL DEL PEDIDO</td>
  <td class=xl126 width=72 style='border-left:none;width:54pt'>$".number_format($_POST['valor_total_pedido'])."</td>
  <td class=xl146 width=115 style='width:86pt'>&nbsp;</td>
  <td class=xl123>&nbsp;</td>
  <td class=xl68>&nbsp;</td>
 </tr>
 <tr height=25 style='mso-height-source:userset;height:18.75pt'>
  <td colspan=2 height=25 class=xl147 width=184 style='height:18.75pt;
  width:139pt'>Observaciones de entrega:</td>
  <td class=xl110 width=90 style='width:68pt'>&nbsp;</td>
  <td colspan=7 class=xl127 width=562 style='width:422pt'>&nbsp;".$obs_entrega."</td>
  <td class=xl146 width=115 style='width:86pt'>&nbsp;</td>
  <td class=xl123>&nbsp;</td>
  <td class=xl68>&nbsp;</td>
 </tr>
 <tr height=25 style='mso-height-source:userset;height:18.75pt'>
  <td height=25 class=xl148 width=106 style='height:18.75pt;width:80pt'>&nbsp;</td>
  <td class=xl128 width=78 style='width:59pt'>&nbsp;</td>
  <td class=xl128 width=90 style='width:68pt'>&nbsp;</td>
  <td colspan=7 class=xl129 width=562 style='width:422pt'>&nbsp;</td>
  <td class=xl146 width=115 style='width:86pt'>&nbsp;</td>
  <td class=xl123>&nbsp;</td>
  <td class=xl68>&nbsp;</td>
 </tr>
 <tr height=25 style='mso-height-source:userset;height:18.75pt'>
  <td height=25 class=xl148 width=106 style='height:18.75pt;width:80pt'>&nbsp;</td>
  <td class=xl128 width=78 style='width:59pt'>&nbsp;</td>
  <td class=xl128 width=90 style='width:68pt'>&nbsp;</td>
  <td class=xl111 width=90 style='width:68pt'>&nbsp;</td>
  <td class=xl111 width=79 style='width:59pt'>&nbsp;</td>
  <td class=xl111 width=72 style='width:54pt'>&nbsp;</td>
  <td class=xl111 width=72 style='width:54pt'>&nbsp;</td>
  <td class=xl111 width=89 style='width:67pt'>&nbsp;</td>
  <td class=xl111 width=88 style='width:66pt'>&nbsp;</td>
  <td class=xl111 width=72 style='width:54pt'>&nbsp;</td>
  <td class=xl146 width=115 style='width:86pt'>&nbsp;</td>
  <td class=xl123>&nbsp;</td>
  <td class=xl68>&nbsp;</td>
 </tr>
 <tr height=25 style='mso-height-source:userset;height:18.75pt'>
  <td height=25 class=xl149 width=106 style='height:18.75pt;width:80pt'>Bonificación
  N°1.</td>
  <td class=xl130 width=78 style='width:59pt'>&nbsp;</td>
  <td class=xl136 width=90 style='width:68pt'>Referencia:</td>
  <td class=xl131>&nbsp;</td>
  <td class=xl136 width=79 style='width:59pt'>Código:</td>
  <td colspan=3 class=xl132>&nbsp;</td>
  <td class=xl136 width=88 style='width:66pt'>Cantidad</td>
  <td class=xl133>&nbsp;</td>
  <td class=xl146 width=115 style='width:86pt'>&nbsp;</td>
  <td class=xl123>&nbsp;</td>
  <td class=xl68>&nbsp;</td>
 </tr>
 <tr height=25 style='mso-height-source:userset;height:18.75pt'>
  <td height=25 class=xl149 width=106 style='height:18.75pt;width:80pt'>Bonificación
  N°2.</td>
  <td class=xl130 width=78 style='width:59pt'>&nbsp;</td>
  <td class=xl136 width=90 style='width:68pt'>Referencia:</td>
  <td class=xl112 width=90 style='width:68pt'>&nbsp;</td>
  <td class=xl136 width=79 style='width:59pt'>Código:</td>
  <td colspan=3 class=xl134 width=233 style='width:175pt'>&nbsp;</td>
  <td class=xl136 width=88 style='width:66pt'>Cantidad</td>
  <td class=xl112 width=72 style='width:54pt'>&nbsp;</td>
  <td class=xl146 width=115 style='width:86pt'>&nbsp;</td>
  <td class=xl123>&nbsp;</td>
  <td class=xl68>&nbsp;</td>
 </tr>
 <tr height=25 style='mso-height-source:userset;height:18.75pt'>
  <td height=25 class=xl149 width=106 style='height:18.75pt;width:80pt'>Bonificación
  N°3.</td>
  <td class=xl130 width=78 style='width:59pt'>&nbsp;</td>
  <td class=xl136 width=90 style='width:68pt'>Referencia:</td>
  <td class=xl112 width=90 style='width:68pt'>&nbsp;</td>
  <td class=xl136 width=79 style='width:59pt'>Código:</td>
  <td colspan=3 class=xl134 width=233 style='width:175pt'>&nbsp;</td>
  <td class=xl136 width=88 style='width:66pt'>Cantidad</td>
  <td class=xl112 width=72 style='width:54pt'>&nbsp;</td>
  <td class=xl146 width=115 style='width:86pt'>&nbsp;</td>
  <td class=xl123>&nbsp;</td>
  <td class=xl68>&nbsp;</td>
 </tr>
 <tr height=25 style='mso-height-source:userset;height:18.75pt'>
  <td height=25 class=xl150 style='height:18.75pt'>&nbsp;</td>
  <td class=xl131>&nbsp;</td>
  <td class=xl131>&nbsp;</td>
  <td class=xl131>&nbsp;</td>
  <td class=xl131>&nbsp;</td>
  <td class=xl131>&nbsp;</td>
  <td class=xl131>&nbsp;</td>
  <td class=xl131>&nbsp;</td>
  <td class=xl131>&nbsp;</td>
  <td class=xl131>&nbsp;</td>
  <td class=xl135>&nbsp;</td>
  <td class=xl123>&nbsp;</td>
  <td class=xl68>&nbsp;</td>
 </tr>
 <tr class=xl68 height=23 style='height:17.25pt'>
  <td height=23 class=xl68 style='height:17.25pt'>&nbsp;</td>
  <td class=xl68>&nbsp;</td>
  <td class=xl68>&nbsp;</td>
  <td class=xl68>&nbsp;</td>
  <td class=xl68>&nbsp;</td>
  <td class=xl68>&nbsp;</td>
  <td class=xl68>&nbsp;</td>
  <td class=xl68>&nbsp;</td>
  <td class=xl68>&nbsp;</td>
  <td class=xl68>&nbsp;</td>
  <td class=xl68>&nbsp;</td>
  <td class=xl68>&nbsp;</td>
  <td class=xl68>&nbsp;</td>
 </tr>
 <![if supportMisalignedColumns]>
 <tr height=0 style='display:none'>
  <td width=106 style='width:80pt'></td>
  <td width=78 style='width:59pt'></td>
  <td width=90 style='width:68pt'></td>
  <td width=90 style='width:68pt'></td>
  <td width=79 style='width:59pt'></td>
  <td width=72 style='width:54pt'></td>
  <td width=72 style='width:54pt'></td>
  <td width=89 style='width:67pt'></td>
  <td width=88 style='width:66pt'></td>
  <td width=72 style='width:54pt'></td>
  <td width=115 style='width:86pt'></td>
  <td width=104 style='width:78pt'></td>
  <td width=104 style='width:78pt'></td>
 </tr>
 <![endif]>
</table>

</body>";



  //   Yii::import("ext.Mailer.*");
  //     $mail=new PHPMailer();
  //     $mail->IsSMTP(); 
  //     $mail->Host = "74.125.141.108"; // Servidores SMTP
  //     $mail->SMTPAuth = true;   // activar la identificacín SMTP
  //     $mail->SMTPDebug  = 1; //actival el modo debug del correo para ver los detalles de la conexion
  //     $mail->Port = 587; // Puerto de conexion con gmail
  //     $mail->SMTPSecure = "tls";  
  //     $mail->Username = "espm.ftra.yii@gmail.com";
  //     $mail->Password = "Espumas2016";

                     
  //       $mail->SetFrom("espm.ftra.yii@gmail.com",Yii::app()->user->Nombre . Yii::app()->user->Apellido."-Pedido");
  //       $mail->Subject="Pedido cargado desde ESPUMRED";  

  // //     $mail->AddAddress('pedidos@espumasmedellin.com');
  // //     $mail->AddCC('sistemas@espumasmedellin.com');
  // //     $mail->AddCC('auditor@espumasmedellin.com');
  // //     $mail->AddCC('practicante.sistemas@espumasmedellin.com');
  //     $mail->AddAddress('practicante.sistemas@espumasmedellin.com');

  //     $mail->isHTML(true);

  // $mail->Body = utf8_decode($htmls);

     echo $htmls;
                        
     //------------------------------------------------------------------------------------------------>//

      // $mail->AddAddress($correo,"observaciones"); No descomentar.        
          
          // if($mail->send() == false){
          //   echo "No envio";

          //   echo "<br>";

          //   echo "<a href='/yii/espumred/index.php?r=solicitudP/Test'>Volver</a>";
          //   // $this->redirect(array('site/index'),array('notification'=>array('titulo'=>'Error al Enviar','cuerpo'=>'Error al enviar el correo de confirmación')));
          // }else{
          //    echo "si envio";
          //   echo "<br>";

          //   echo "<a href='/yii/espumred/index.php?r=solicitudP/Test'>Volver</a>";
          // //    // $this->redirect(array('site/index'),array('notification'=>array('titulo'=>'Exito al Enviar','cuerpo'=>'El formato se ha enviado con exito.')));
          // }

  ?>