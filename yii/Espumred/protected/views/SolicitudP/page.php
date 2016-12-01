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
  border-bottom:1.0pt solid windowtext;
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

</style>
<body link="#0563C1" vlink="#954F72">'.
 "<table border=0 cellpadding=0 cellspacing=0 width=1055 style='border-collapse:collapse;table-layout:fixed;width:792pt'>
      <col width=13 style='mso-width-source:userset;mso-width-alt:475;width:10pt'>
      <col width=119 style='mso-width-source:userset;mso-width-alt:4352;width:89pt'>
      <col width=101 style='mso-width-source:userset;mso-width-alt:3693;width:76pt'>
      <col width=238 style='mso-width-source:userset;mso-width-alt:8704;width:179pt'>
      <col width=80 span=5 style='width:60pt'>
      <col width=104 style='mso-width-source:userset;mso-width-alt:3803;width:78pt'>
      <col width=80 style='width:60pt'>
      <tr height=21 style='height:15.75pt'>
        <td height=21 width=13 style='height:15.75pt;width:10pt'></td>
        <td width=119 style='width:89pt'></td>
        <td width=101 style='width:76pt'></td>
        <td width=238 style='width:179pt'></td>
        <td width=80 style='width:60pt'></td>
        <td width=80 style='width:60pt'></td>
        <td width=80 style='width:60pt'></td>
        <td width=80 style='width:60pt'></td>
        <td width=80 style='width:60pt'></td>
        <td width=104 style='width:78pt'></td>
        <td width=80 style='width:60pt'></td>
      </tr>
      <tr height=20 style='mso-height-source:userset;height:15.0pt'>
        <td height=20 style='height:15.0pt'></td>
        <td align=left valign=top style='border-top: 1.0pt solid windowtext;border-left: 1.0pt solid windowtext;'>
          <span style='mso-ignore:vglayout;position:absolute;z-index:1;margin-left:4px;margin-top:6px;width:205px;height:67px'>".
            '<img width=205 height=67 src="http://190.85.125.226/yii/espumred/images/image001.png" v:shapes="Imagen_x0020_1">
          </span>'.
          "<span style='mso-ignore:vglayout2'>
          
      </span></td>
      <td class=xl66 style='border-right: 1.0pt solid windowtext;'>&nbsp;</td>
      <td colspan=8 rowspan=2 class=xl109 style='border-right: 1.0pt solid windowtext;' >PEDIDO</td>
    </tr>
    
    <tr height=20 style='mso-height-source:userset;height:15.0pt'>
      <td height=20 style='height:15.0pt'></td>
      <td class=xl67 style='border-bottom: 1.0pt solid windowtext;'>&nbsp;</td>
      <td class=xl68 style='border-bottom: 1.0pt solid windowtext;border-right: 1.0pt solid windowtext;'></td>
    </tr>
    <tr height=24 style='mso-height-source:userset;height:18.0pt'>
      <td height=24 style='height:18.0pt'></td>
      <td class=xl69 colspan=2 style='mso-ignore:colspan'>Fecha cargue de pedido:</td>
      <td class=xl70>&nbsp;".$fecha_cargue."</td>
      <td class=xl71></td>
      <td class=xl71></td>
      <td class=xl71></td>
      <td class=xl71></td>
      <td class=xl71></td>
      <td class=xl71></td>
      <td class=xl72>&nbsp;</td>
    </tr>
    <tr height=26 style='mso-height-source:userset;height:19.5pt'>
      <td height=26 style='height:19.5pt'></td>
      <td class=xl69>Código cliente:</td>
      <td class=xl73></td>
      <td class=xl70>&nbsp;".$codclien."</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td class=xl74>&nbsp;</td>
    </tr>
    <tr height=29 style='mso-height-source:userset;height:21.75pt'>
      <td height=29 style='height:21.75pt'></td>
      <td class=xl69>Nombre cliente:</td>
      <td class=xl73></td>
      <td colspan=4 class=xl113>&nbsp;".$nomclien."</td>
      <td class=xl75></td>
      <td></td>
      <td></td>
      <td class=xl74>&nbsp;</td>
    </tr>
    <tr height=21 style='height:15.75pt'>
      <td height=21 style='height:15.75pt'></td>
      <td class=xl69>&nbsp;</td>
      <td class=xl73></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td class=xl74>&nbsp;</td>
    </tr> <!-- tabla header -->
    <tr height=52 style='mso-height-source:userset;height:39.0pt'>
      <td height=52 style='height:39.0pt'></td>
      <td class=xl76 width=119 style='width:89pt'>Nº Orden de compra cliente</td>
      <td class=xl77 width=101 style='border-left:none;width:76pt'>Código producto</td>
      <td class=xl77 width=238 style='border-left:none;width:179pt'>Descripción</td>
      <td class=xl77 width=80 style='border-left:none;width:60pt'>Cantidad</td>
      <td class=xl77 width=80 style='border-left:none;width:60pt'>Valor unitario</td>
      <td class=xl77 width=80 style='border-left:none;width:60pt'>Valor kilo</td>
      <td class=xl77 width=80 style='border-left:none;width:60pt'>Porcentaje
        Descuento</td>
        <td class=xl77 width=80 style='border-left:none;width:60pt'>Valor
          Descuento<span style='mso-spacerun:yes'> </span></td>
          <td class=xl77 width=104 style='border-left:none;width:78pt'>Valor total</td>
          <td class=xl78 width=80 style='border-left:none;width:60pt'>Fecha de entrega</td>
        </tr>";


 
$i = 0;
  foreach ($_POST['Formyiis']['N_orden2'] as $value) {
  $htmls .= "<tr height=52 style='mso-height-source:userset;height:39.0pt'>
   <td height=52 style='height:39.0pt'></td>
   <td class=xl79 align=right>".$_POST['Formyiis']['N_orden2'][$i]."</td>
   <td class=xl80 align=right style='border-left:none'>".$_POST['Formyiis']['cod_prod2'][$i]."</td>
   <td class=xl80 style='border-left:none'>&nbsp;".$_POST['Formyiis']['description2'][$i]."</td>
    <td class=xl81 style='border-left:none; border-top: 1.0pt solid windowtext; border-right: .5pt solid windowtext; border-bottom: .5pt solid;'>
     ".$_POST['Formyiis']['cantidad2'][$i]."
   </td>
   <td class=xl82 align=right style='border-left:none'>$".number_format($_POST['Formyiis']['value_unit2'][$i])."</td>
   <td class=xl82 align=right style='border-left:none'>$".number_format($_POST['Formyiis']['value_kl2'][$i])."</td>
   <td class=xl83 align=right style='border-left:none'>".$_POST['Formyiis']['descuentoP2'][$i]."%</td>
    <td class=xl82 align=right style='border-left:none'>$".number_format($_POST['Formyiis']['value_descount2'][$i])."</td>
    <td class=xl82 align=right style='border-left:none'>$".number_format($_POST['Formyiis']['amount2'][$i])."</td>
    <td class=xl84 align=right style='border-left:none'>".$_POST['Formyiis']['date2'][$i]."</td>
   </tr>";
    $i++;
  }
  
$htmls .= "<tr height=21 style='height:15.75pt'>
    <td height=21 style='height:15.75pt'></td>
    <td class=xl98 style='border-top:none'>&nbsp;</td>
    <td class=xl99 style='border-top:none'>&nbsp;</td>
    <td class=xl100 style='border-top:none'>Valor total pedido</td>
    <td class=xl99 style='border-top:none'>&nbsp;</td>
    <td class=xl99 style='border-top:none'>&nbsp;</td>
    <td class=xl99 style='border-top:none'>&nbsp;</td>
    <td class=xl99 style='border-top:none'>&nbsp;</td>
    <td class=xl99 style='border-top:none'>&nbsp;</td>
    <td class=xl101 align=right style='border-top:none'>$".number_format($_POST['valor_total_pedido'])."</td>
    <td class=xl102 style='border-top:none'>&nbsp;</td>
  </tr>
  <tr height=20 style='height:15.0pt'>
    <td height=20 style='height:15.0pt'></td>
    <td class=xl103>&nbsp;</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td class=xl74>&nbsp;</td>
  </tr>
  <tr height=21 style='height:15.75pt'>
    <td height=21 style='height:15.75pt'></td>
    <td class=xl104 colspan=2 style='mso-ignore:colspan'>Observaciones de
      entrega:</td>
      <td class=xl70>&nbsp;".$obs_entrega."</td>
      <td class=xl70>&nbsp;</td>
      <td class=xl70>&nbsp;</td>
      <td class=xl70>&nbsp;</td>
      <td class=xl70>&nbsp;</td>
      <td class=xl70>&nbsp;</td>
      <td class=xl70>&nbsp;</td>
      <td class=xl106>&nbsp;</td>
    </tr>
    <tr height=39 style='mso-height-source:userset;height:29.25pt'>
      <td height=39 style='height:29.25pt'></td>
      <td class=xl104 colspan=2 style='mso-ignore:colspan'>Aplica
        bonificación?<span style='mso-spacerun:yes'> </span></td>
        <td>Si ___";
        if($apli_bon == "si"){
            $htmls .= "<u>X</u>";
        }
        $htmls .= "___<span style='mso-spacerun:yes'>      </span></td>
        <td>NO ___";
          if($apli_bon == "no"){
            $htmls .= "<u>X</u>";
        }
        $htmls .= "___</td>
        <td>Cual:<span style='mso-spacerun:yes'> </span></td>
        <td class=xl107 style='border-top:none'>&nbsp;".$otra_bon."</td>
        <td class=xl107 style='border-top:none'>&nbsp;</td>
        <td class=xl107 style='border-top:none'>&nbsp;</td>
        <td class=xl107 style='border-top:none'>&nbsp;</td>
        <td class=xl74>&nbsp;</td>
      </tr>
      <tr height=20 style='height:15.0pt'>
        <td height=20 style='height:15.0pt'></td>
        <td class=xl103>&nbsp;</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td class=xl74>&nbsp;</td>
      </tr>
      <tr height=21 style='height:15.75pt'>
        <td height=21 style='height:15.75pt'></td>
        <td class=xl108>&nbsp;</td>
        <td class=xl70>&nbsp;</td>
        <td class=xl70>&nbsp;</td>
        <td class=xl70>&nbsp;</td>
        <td class=xl70>&nbsp;</td>
        <td class=xl70>&nbsp;</td>
        <td class=xl70>&nbsp;</td>
        <td class=xl70>&nbsp;</td>
        <td class=xl70>&nbsp;</td>
        <td class=xl106>&nbsp;</td>
      </tr>
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

      // $mail->AddAddress('pedidos@espumasmedellin.com');
      // $mail->AddCC('sistemas@espumasmedellin.com');
      // $mail->AddCC('auditor@espumasmedellin.com');
      // $mail->AddCC('practicante.sistemas@espumasmedellin.com');
      $mail->AddAddress('practicante.sistemas@espumasmedellin.com');

      $mail->isHTML(true);

  $mail->Body = utf8_decode($htmls);

     // echo $htmls;
                        
     //------------------------------------------------------------------------------------------------>//

      // $mail->AddAddress($correo,"observaciones"); No descomentar.        
          
          if($mail->send() == false){
            echo "No envio";

            echo "<br>";

            echo "<a href='/yii/espumred/index.php?r=solicitudP/Test'>Volver</a>";
            // $this->redirect(array('site/index'),array('notification'=>array('titulo'=>'Error al Enviar','cuerpo'=>'Error al enviar el correo de confirmación')));
          }else{
             echo "si envio";
            echo "<br>";

            echo "<a href='/yii/espumred/index.php?r=solicitudP/Test'>Volver</a>";
          //    // $this->redirect(array('site/index'),array('notification'=>array('titulo'=>'Exito al Enviar','cuerpo'=>'El formato se ha enviado con exito.')));
          }

  ?>