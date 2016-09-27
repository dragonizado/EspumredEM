<?php 
$Rol= Yii::app()->user->rol;
$busquedad=Yii::app()->session['busquedad'];
if ($Rol=="costo"&& $busquedad=="MAYORISTAS") {
	$Rol="costoMayorista";
}

if ($Rol=="costo"&& $busquedad=="CORRERIA") {
	$Rol="costoExterno";
}
$fecha = date("d-m-Y"); // fecha actual 
$mes = date("m"); // Mes actual 
$año=date("Y");
$meses=array();
$meses[0]="";
$meses[1]="ENERO";
$meses[2]="FEBRERO";
$meses[3]="MARZO";
$meses[4]="ABRIL";
$meses[5]="MAYO";
$meses[6]="JUNIO";
$meses[7]="JULIO";
$meses[8]="AGOSTO";
$meses[9]="SEPTIEMBRE";
$meses[10]="OCTUBRE";
$meses[11]="NOVIEMBRE";
$meses[12]="DICEIMBRE";



$FechaInforme=array();
$FechaInforme=Estadocosto::model()->findAll();


?>

<table border="1">
<tr rowspan="5">
<td  colspan="5"  rowspan="5" ><img src="http://sia1.subirimagenes.net/img/2014/11/13/141113124905320769.png" width='80px' height="25px"></td><!-- EMPIEZA LA CABEZERA DEL EXCEL-->
</tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr>
<td  colspan="5"  align="center" style="COLOR: #000000; BACKGROUND-COLOR: #FF8D4B">LISTA DE PRECIOS  ESQUINEROS Y SOF&Aacute;S</td>
<!-- EMPIEZA LA CABEZERA DEL EXCEL-->
</tr>

	

<tr>
<td></td>
<td  colspan="3"  align="center" style="COLOR: #000000; BACKGROUND-COLOR: #FF8D4B"></td>
</tr>



<!-- FOR PARA RECORRER EL MODELO EMPLEADO IDENTIFICANDO CADA EMPLEADO Y REGISTRANDOLO-->

<?php


	for ($i=0; $i <count($model) ; $i++) { 
		
		$nombre=substr($model[$i]["nombre"], 0, 3);
				if ($nombre=="ESQ") {
			?>			<td></td>
						<td align="center"><?php echo $model[$i]["cod"];?></td>
						<td align="center"><?php echo $model[$i]["nombre"];?></td>
						<?php if ($Rol=="costoMayorista"){
							?><td align="center"><?php echo "$".$model[$i]["precioMayoristas"];?></td><?php
						}else{
							?><td align="center"><?php echo "$".$model[$i]["precioCorreria"];?></td><?php

						}

						 ?>
							
						
						
						<td></td></tr>
						
			<?php 
			};

			};

			for ($i=0; $i <count($model) ; $i++) { 
		
		$nombre=substr($model[$i]["nombre"], 0, 3);
				if ($nombre=="SOF") {
			?>			<td></td>
						<td align="center"><?php echo $model[$i]["cod"];?></td>
						<td align="center"><?php echo $model[$i]["nombre"];?></td>
							<?php if ($Rol=="costoMayorista"){
							?><td align="center"><?php echo "$".$model[$i]["precioMayoristas"];?></td><?php
						}else{
							?><td align="center"><?php echo "$".$model[$i]["precioCorreria"];?></td><?php

						}

						 ?>
							
						<td></td></tr>
						
			<?php 
			};

			}; 		

			for ($i=0; $i <count($model) ; $i++) { 
		
		$nombre=substr($model[$i]["nombre"], 0, 5);
				if ($nombre=="COJIN") {
			?>			<td></td>
						<td align="center"><?php echo $model[$i]["cod"];?></td>
						<td align="center"><?php echo $model[$i]["nombre"];?></td>
							<?php if ($Rol=="costoMayorista"){
							?><td align="center"><?php echo "$".$model[$i]["precioMayoristas"];?></td><?php
						}else{
							?><td align="center"><?php echo "$".$model[$i]["precioCorreria"];?></td><?php

						}

						 ?>
							
						<td></td></tr>
						
			<?php 
			};

			}; 	
			

				for ($i=0; $i <count($model) ; $i++) { 
		
		$nombre=substr($model[$i]["nombre"], 0, 8);
				if ($nombre=="POLTRONA") {
			?>			<td></td>
						<td align="center"><?php echo $model[$i]["cod"];?></td>
						<td align="center"><?php echo $model[$i]["nombre"];?></td>
							<?php if ($Rol=="costoMayorista"){
							?><td align="center"><?php echo "$".$model[$i]["precioMayoristas"];?></td><?php
						}else{
							?><td align="center"><?php echo "$".$model[$i]["precioCorreria"];?></td><?php

						}

						 ?>
							
						<td></td></tr>
						
			<?php 
			};

			}; 		




?>
</table>
<br>
<br>

<table>
<td colspan="5"  align="center">Precios netos sujetos a cambios sin previo aviso - M&aacute;s IVA 16% - <?php echo $FechaInforme[0]["fechaCosto"];?> DE <?php echo  $año;?>- #<?php echo $FechaInforme[0]["consecutivo"];?></td>
</tr>


<tr>
<td colspan="5" align="center"><h1>ESTA LISTA ANULA TODAS LAS ANTERIORES</h1></td>
</tr>



</table>

