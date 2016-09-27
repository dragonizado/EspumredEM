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
		<td  colspan="1" ><img type="button" name="imprimir" value="Imprimir P&aacute;gina" onclick="window.print();" src="<?php echo Yii::app()->baseUrl;?>/images/logoLimpio.jpg" width='150px' height="50px"></td>
		</tr>

	
	</thead>
</table>


<table class="table table-bordered ">
	<!-- <caption>HOJA DE VIDA</caption> -->
	<thead>
				<tr>
		<td  colspan="5"  align="center" style="COLOR: #000000; BACKGROUND-COLOR: #FF8D4B">LISTA DE PRECIOS  ESQUINEROS Y SOF&Aacute;S</td>
		<!-- EMPIEZA LA CABEZERA DEL EXCEL-->
		</tr>
		<tr>
		<td></td>
		<td  colspan="3"  align="center" style="COLOR: #000000; BACKGROUND-COLOR: #FF8D4B"></td>
		</tr>

	</thead>
	<tbody>
	<?php

		for ($i=0; $i <count($model) ; $i++) { 
		
		$nombre=substr($model[$i]["nombre"], 0, 3);
				if ($nombre=="ESQ") {
			?>			<tr>
						<td></td>
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
			?>			<tr>
						<td></td>
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
			?>			<tr>
						<td></td>
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
			?>			<tr>
						<td></td>
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

