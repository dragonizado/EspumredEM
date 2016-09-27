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
$medidas[0]="90";
$medidas[1]="100";
$medidas[2]="120";
$medidas[3]="140";
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
		<br>
		<br>
		<tr rowspan="5">

		</tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr>
		<td  colspan="9"  align="center" style="COLOR: #000000; BACKGROUND-COLOR: #FF8D4B">COLCHONETA ALGOD&Oacute;N COLORES SENCILLA SIN HILADILLO</td>
		<!-- EMPIEZA LA CABEZERA DEL EXCEL-->
		</tr>


		<tr>
		<td></td>
		<td  colspan="8"  align="center" style="COLOR: #000000; BACKGROUND-COLOR: #FF8D4B">TSE</td>
		
		</tr>

		<tr>
		<td align="center">Medida\Calibre</td>
		<td></td>
		<td align="center" style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">8</td>
		<td></td>
		<td align="center" style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">10</td>
		<td></td>
		<td align="center" style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">14</td>
		<td></td>
		<td align="center" style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">18</td>
	
		
		</tr>
	
	</thead>
	<tbody>
		
		<?php   for ($j=0; $j <count($medidas) ; $j++) { 
			?><tr><?php

		
for ($i=0; $i <count($model) ; $i++) { 
	

	if ($model[$i]["nombre"]=="CTA TSE ALGODÓN COLORES SENCILLA SIN HILADILL"&& $model[$i]["medidas"]==$medidas[$j]&&$model[$i]["calibre"]=="8") {
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
	

	if ($model[$i]["nombre"]=="CTA TSE ALGODÓN COLORES SENCILLA SIN HILADILL"&& $model[$i]["medidas"]==$medidas[$j]&&$model[$i]["calibre"]=="10") {
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
	

	if ($model[$i]["nombre"]=="CTA TSE ALGODÓN COLORES SENCILLA SIN HILADILL"&& $model[$i]["medidas"]==$medidas[$j]&&$model[$i]["calibre"]=="14") {
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
	

	if ($model[$i]["nombre"]=="CTA TSE ALGODÓN COLORES SENCILLA SIN HILADILL"&& $model[$i]["medidas"]==$medidas[$j]&&$model[$i]["calibre"]=="18") {
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

?></tr><?php	
		}
	?>



		<tr>
		<td></td>
		<td  colspan="6"  align="center" style="COLOR: #000000; BACKGROUND-COLOR: #FF8D4B">SF</td>
		<td></td>
		<td></td>
		</tr>
		<tr>
		<td align="center">Medida\Calibre</td>
		<td></td>
		<td align="center" style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">8</td>
		<td></td>
		<td align="center" style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">10</td>
		<td></td>
		<td align="center" style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">14</td>
		<td></td>
		<td></td>
		</tr>
	<?php
	 for ($j=0; $j <count($medidas) ; $j++) { 
			?><tr><?php
		for ($h=0; $h <count($model) ; $h++) { 
			

			if ($model[$h]["nombre"]=="CTA SF ALGODÓN COLORES SENCILLA SIN HILADILLO"&& $model[$h]["medidas"]==$medidas[$j] &&$model[$h]["calibre"]=="8") {
		?>			<td align="center"><?php echo $model[$h]["medidas"];?></td>
					<td align="center"> <?php echo $model[$h]["cod"];?></td>
					<?php if ($Rol=="costoMayorista"){
							?><td align="center" ><?php echo "$".$model[$h]["precioMayoristas"];?></td><?php
						}else{
							?><td align="center" ><?php echo "$".$model[$h]["precioCorreria"];?></td><?php

						}

						 ?>
					
		<?php 
		}

		} 	

		for ($h=0; $h <count($model) ; $h++) { 
			

			if ($model[$h]["nombre"]=="CTA SF ALGODÓN COLORES SENCILLA SIN HILADILLO"&& $model[$h]["medidas"]==$medidas[$j] &&$model[$h]["calibre"]=="10") {
		?>
					<td align="center"><?php echo $model[$h]["cod"];?></td>
						<?php if ($Rol=="costoMayorista"){
							?><td align="center"><?php echo "$".$model[$h]["precioMayoristas"];?></td><?php
						}else{
							?><td align="center"><?php echo "$".$model[$h]["precioCorreria"];?></td><?php

						}

						 ?>
					
		<?php 
		}

		} 	

		for ($h=0; $h <count($model) ; $h++) { 
			

			if ($model[$h]["nombre"]=="CTA SF ALGODÓN COLORES SENCILLA SIN HILADILLO"&& $model[$h]["medidas"]==$medidas[$j] &&$model[$h]["calibre"]=="14") {
		?>
					<td align="center"><?php echo $model[$h]["cod"];?></td>
						<?php if ($Rol=="costoMayorista"){
							?><td align="center"><?php echo "$".$model[$h]["precioMayoristas"];?></td><?php
						}else{
							?><td align="center"><?php echo "$".$model[$h]["precioCorreria"];?></td><?php

						}

						 ?>
					
		<?php 
		}

		} 

		?><td></td><td></td></tr><?php	
		}	
		?>

		<tr>
		<td></td>
		<td  colspan="6"  align="center" style="COLOR: #000000; BACKGROUND-COLOR: #FF8D4B">EX</td>
		<td></td>
		<td></td>
		</tr>
		<tr>
		<td align="center">Medida\Calibre</td>
		<td></td>
		<td align="center" style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">8</td>
		<td></td>
		<td align="center" style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">10</td>
		<td></td>
		<td align="center" style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">14</td>
		<td></td>
		<td></td>
		</tr>

		<?php
		 for ($j=0; $j <count($medidas) ; $j++) { 
			?><tr><?php

		for ($h=0; $h <count($model) ; $h++) { 
			

			if ($model[$h]["nombre"]=="CTA EX ALGODÓN COLORES SENCILLA SIN HILADILLO"&& $model[$h]["medidas"]==$medidas[$j] &&$model[$h]["calibre"]=="8") {
		?>			<td align="center"><?php echo $model[$h]["medidas"];?></td>
					<td align="center"><?php echo $model[$h]["cod"];?></td>
						<?php if ($Rol=="costoMayorista"){
							?><td align="center"><?php echo "$".$model[$h]["precioMayoristas"];?></td><?php
						}else{
							?><td align="center"><?php echo "$".$model[$h]["precioCorreria"];?></td><?php

						}

						 ?>
					
		<?php 
		}
		}



		for ($h=0; $h <count($model) ; $h++) { 
			

			if ($model[$h]["nombre"]=="CTA EX ALGODÓN COLORES SENCILLA SIN HILADILLO"&& $model[$h]["medidas"]==$medidas[$j] &&$model[$h]["calibre"]=="10") {
		?>
					<td align="center"><?php echo $model[$h]["cod"];?></td>
						<?php if ($Rol=="costoMayorista"){
							?><td align="center"><?php echo "$".$model[$h]["precioMayoristas"];?></td><?php
						}else{
							?><td align="center"><?php echo "$".$model[$h]["precioCorreria"];?></td><?php

						}

						 ?>
					
		<?php 
		}
		}



		for ($h=0; $h <count($model) ; $h++) { 
			

			if ($model[$h]["nombre"]=="CTA EX ALGODÓN COLORES SENCILLA SIN HILADILLO"&& $model[$h]["medidas"]==$medidas[$j] &&$model[$h]["calibre"]=="10") {
		?>
					<td align="center"><?php echo $model[$h]["cod"];?></td>
						<?php if ($Rol=="costoMayorista"){
							?><td align="center"><?php echo "$".$model[$h]["precioMayoristas"];?></td><?php
						}else{
							?><td align="center"><?php echo "$".$model[$h]["precioCorreria"];?></td><?php

						}

						 ?>
					</tr>
					
		<?php 
		}
		}

		?><td></td><td></td></tr><?php	
		}

		?>

	</tbody>
</table>





<table>
	<tr>
<td colspan="10"  align="center">Precios netos sujetos a cambios sin previo aviso - M&aacute;s IVA 16% - <?php echo $FechaInforme[0]["fechaCosto"];?> DE <?php echo  $año;?>- #<?php echo $FechaInforme[0]["consecutivo"];?></td>
</tr>


<tr>
<td colspan="10" align="center">ESTA LISTA ANULA TODAS LAS ANTERIORES</td>
</tr>



</table>

