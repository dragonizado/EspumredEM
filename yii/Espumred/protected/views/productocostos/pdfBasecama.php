<?php 
$Rol= Yii::app()->user->rol;
$busquedad=Yii::app()->session['busquedad'];
if ($Rol=="costo"&& $busquedad=="MAYORISTAS") {
	$Rol="costoMayorista";
}

if ($Rol=="costo"&& $busquedad=="CORRERIA") {
	$Rol="costoExterno";
}
$medidas =array();
$medidas[0]="90*190";
$medidas[1]="100*190";
$medidas[2]="120*190";
$medidas[3]="140*190";


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

<style type="text/css">
table {
  width:100%;
  border: 1px solid #000;
}

tr, td {
	  width:10%;
  text-align: left; 
  vertical-align: top;
  border: 1px solid #000;
  border-spacing: 0;
}
</style>
<table >
	<!-- <caption>HOJA DE VIDA</caption> -->
	<thead>

		<tr>
		<td  colspan="1" ><img type="button" name="imprimir" value="Imprimir P&aacute;gina" onclick="window.print();" src="<?php echo Yii::app()->baseUrl;?>/images/EspumasmedellinPdf.png" width='500px' height="100px"></td>
		</tr>
	
	</thead>
</table>



<table class="table table-bordered ">
	<!-- <caption>HOJA DE VIDA</caption> -->
	<thead>
	<tr>
<td  colspan="13"  align="center" style="COLOR: #000000; BACKGROUND-COLOR: #FF8D4B">BASES CAMAS</td>
<!-- EMPIEZA LA CABEZERA DEL EXCEL-->
</tr>

	

<tr>
		<td></td>
		<td  colspan="2"  align="center" style="COLOR: #000000; BACKGROUND-COLOR: #FF8D4B">BASE CAMA LINEA</td>
		<td  colspan="2"  align="center" style="COLOR: #000000; BACKGROUND-COLOR: #FF8D4B">BASE CAMA OBSEQUIO</td>
		<td  colspan="2"  align="center" style="COLOR: #000000; BACKGROUND-COLOR: #FF8D4B">BASE CAMA ECO</td>
		<td  colspan="2"  align="center" style="COLOR: #000000; BACKGROUND-COLOR: #FF8D4B">BASE CAMA FOX GRIS</td>
		<td  colspan="2"  align="center" style="COLOR: #000000; BACKGROUND-COLOR: #FF8D4B">BASE CAMA CHANEL CHOCOLATE</td>
		<td  colspan="2"  align="center" style="COLOR: #000000; BACKGROUND-COLOR: #FF8D4B">BASE CAMA MONTANA SINTETICA NEGRA</td>
		</tr>

		<tr>
		<td align="center">Medida</td>
		<td  colspan="2"></td>
		<td  colspan="2"></td>
		<td  colspan="2"></td>
		<td  colspan="2"></td>
		<td  colspan="2"></td>

		</tr>
	
	</thead>
	<tbody>
		
		<?php   for ($j=0; $j <count($medidas) ; $j++) { 
			?><tr><?php

		
			for ($i=0; $i <count($model) ; $i++) { 
		

				if ($model[$i]["nombre"]=="BASE CAMA LINEA"&&$model[$i]["medidas"]==$medidas[$j]) {
			?>			<td align="center"><?php echo $model[$i]["medidas"];?></td>
						<td align="center"><?php echo $model[$i]["cod"];?></td>
						<?php if ($Rol=="costoMayorista"){
							?><td align="center"><?php echo "$".$model[$i]["precioMayoristas"];?></td><?php
						}else{
							?><td align="center"><?php echo "$".$model[$i]["precioCorreria"];?></td><?php

						}

						 ?>
							
						
			<?php 
			};

			}; 		



	for ($i=0; $i <count($model) ; $i++) { 
		

				if ($model[$i]["nombre"]=="BASE CAMA OBSEQUIO"&&$model[$i]["medidas"]==$medidas[$j]) {
			?>		
						<td align="center"><?php echo $model[$i]["cod"];?></td>
							<?php if ($Rol=="costoMayorista"){
							?><td align="center"><?php echo "$".$model[$i]["precioMayoristas"];?></td><?php
						}else{
							?><td align="center"><?php echo "$".$model[$i]["precioCorreria"];?></td><?php

						}

						 ?>
							
						
			<?php 
			};

			}; 		



	for ($i=0; $i <count($model) ; $i++) { 
		

				if ($model[$i]["nombre"]=="BASE CAMA ECO"&&$model[$i]["medidas"]==$medidas[$j]) {
			?>		
						<td align="center"><?php echo $model[$i]["cod"];?></td>
							<?php if ($Rol=="costoMayorista"){
							?><td align="center"><?php echo "$".$model[$i]["precioMayoristas"];?></td><?php
						}else{
							?><td align="center"><?php echo "$".$model[$i]["precioCorreria"];?></td><?php

						}

						 ?>
							
						
			<?php 
			};

			}; 		



	for ($i=0; $i <count($model) ; $i++) { 
		

				if ($model[$i]["nombre"]=="BASE CAMA FOX GRIS"&&$model[$i]["medidas"]==$medidas[$j]) {
			?>		
						<td align="center"><?php echo $model[$i]["cod"];?></td>
							<?php if ($Rol=="costoMayorista"){
							?><td align="center"><?php echo "$".$model[$i]["precioMayoristas"];?></td><?php
						}else{
							?><td align="center"><?php echo "$".$model[$i]["precioCorreria"];?></td><?php

						}

						 ?>
							
						
			<?php 
			};

			}; 		

	for ($i=0; $i <count($model) ; $i++) { 
		

				if ($model[$i]["nombre"]=="BASE CAMA CHANEL CHOCOLATE"&&$model[$i]["medidas"]==$medidas[$j]) {
			?>		
						<td align="center"><?php echo $model[$i]["cod"];?></td>
							<?php if ($Rol=="costoMayorista"){
							?><td align="center"><?php echo "$".$model[$i]["precioMayoristas"];?></td><?php
						}else{
							?><td align="center"><?php echo "$".$model[$i]["precioCorreria"];?></td><?php

						}

						 ?>
							
						
			<?php 
			};

			}; 		


	for ($i=0; $i <count($model) ; $i++) { 
		

				if ($model[$i]["nombre"]=="BASE CAMA MONTANA SINTETICA NEGRA"&&$model[$i]["medidas"]==$medidas[$j]) {
			?>		
						<td align="center"><?php echo $model[$i]["cod"];?></td>
							<?php if ($Rol=="costoMayorista"){
							?><td align="center"><?php echo "$".$model[$i]["precioMayoristas"];?></td><?php
						}else{
							?><td align="center"><?php echo "$".$model[$i]["precioCorreria"];?></td><?php

						}

						 ?>
							<tr>
						
			<?php 
			};

			}; 		



		?></tr><?php	
		}

		?>

	</tbody>
</table>





<table>
	<tr>
<td colspan="20"  align="center">Precios netos sujetos a cambios sin previo aviso - M&aacute;s IVA 16% - <?php echo $FechaInforme[0]["fechaCosto"];?> DE <?php echo  $año;?>- #<?php echo $FechaInforme[0]["consecutivo"];?></td>
</tr>


<tr>
<td colspan="20" align="center">ESTA LISTA ANULA TODAS LAS ANTERIORES</td>
</tr>



</table>

