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

<table border="1">
<tr rowspan="5">
<td  colspan="21"  rowspan="5" ><img src="http://sia1.subirimagenes.net/img/2014/11/13/141113124905320769.png" width='80px' height="25px"></td><!-- EMPIEZA LA CABEZERA DEL EXCEL-->
</tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr>
<td  colspan="21"  align="center" style="COLOR: #000000; BACKGROUND-COLOR: #FF8D4B">COLCHONETA ALGOD&Oacute;N COLORES SENCILLA SIN HILADILLO</td>
<!-- EMPIEZA LA CABEZERA DEL EXCEL-->
</tr>


<tr>
<td></td>
<td  colspan="8"  align="center" style="COLOR: #000000; BACKGROUND-COLOR: #FF8D4B">TSE</td>
<td  colspan="6"  align="center" style="COLOR: #000000; BACKGROUND-COLOR: #FF8D4B">SF</td>
<td  colspan="6"  align="center" style="COLOR: #000000; BACKGROUND-COLOR: #FF8D4B">EX</td>
</tr>

<tr>
<td align="center" >Medida\Calibre</td>
<td></td>
<td  align="center" style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">8</td>
<td></td>
<td  align="center" style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">10</td>
<td></td>
<td  align="center" style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">14</td>
<td></td>
<td  align="center" style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">18</td>
<td></td>
<td  align="center" style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">8</td>
<td></td>
<td  align="center" style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">10</td>
<td></td>
<td  align="center" style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">14</td>
<td></td>
<td  align="center" style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">8</td>
<td></td>
<td  align="center" style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">10</td>
<td></td>
<td  align="center" style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">14</td>
</tr>

<!-- FOR PARA RECORRER EL MODELO EMPLEADO IDENTIFICANDO CADA EMPLEADO Y REGISTRANDOLO-->

<?php   for ($j=0; $j <count($medidas) ; $j++) { 

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


		for ($h=0; $h <count($model) ; $h++) { 
			

			if ($model[$h]["nombre"]=="CTA SF ALGODÓN COLORES SENCILLA SIN HILADILLO"&& $model[$h]["medidas"]==$medidas[$j] &&$model[$h]["calibre"]=="8") {
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



		for ($h=0; $h <count($model) ; $h++) { 
			

			if ($model[$h]["nombre"]=="CTA EX ALGODÓN COLORES SENCILLA SIN HILADILLO"&& $model[$h]["medidas"]==$medidas[$j] &&$model[$h]["calibre"]=="8") {
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


	 	


}


?>
</table>
<br>
<br>


<table border="1">
<br>
<br>
<tr>
<td  colspan="19"  align="center" style="COLOR: #000000; BACKGROUND-COLOR: #FF8D4B">COLCHONETA ALGOD&Oacute;N COLORES SENCILLA SIN HILADILLO. C/C</td>
<!-- EMPIEZA LA CABEZERA DEL EXCEL-->
</tr>


<tr>
<td></td>
<td  colspan="6"  align="center" style="COLOR: #000000; BACKGROUND-COLOR: #FF8D4B">TSE</td>
<td  colspan="6"  align="center" style="COLOR: #000000; BACKGROUND-COLOR: #FF8D4B">SF</td>
<td  colspan="6"  align="center" style="COLOR: #000000; BACKGROUND-COLOR: #FF8D4B">EX</td>
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
<td align="center" style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">8</td>
<td></td>
<td align="center" style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">10</td>
<td></td>
<td align="center" style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">14</td>
<td></td>
<td align="center" style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">8</td>
<td></td>
<td align="center" style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">10</td>
<td></td>
<td align="center" style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">14</td>
</tr>

<!-- FOR PARA RECORRER EL MODELO EMPLEADO IDENTIFICANDO CADA EMPLEADO Y REGISTRANDOLO-->

<?php   for ($j=0; $j <count($medidas) ; $j++) { 

	for ($i=0; $i <count($model) ; $i++) { 
	

	if ($model[$i]["nombre"]=="CTA TSE ALGODÓN COLORES SENCILLA SIN HILADILL.C/C"&& $model[$i]["medidas"]==$medidas[$j]&&$model[$i]["calibre"]=="8") {
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
	

	if ($model[$i]["nombre"]=="CTA TSE ALGODÓN COLORES SENCILLA SIN HILADILL.C/C"&& $model[$i]["medidas"]==$medidas[$j]&&$model[$i]["calibre"]=="10") {
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
	

	if ($model[$i]["nombre"]=="CTA TSE ALGODÓN COLORES SENCILLA SIN HILADILL.C/C"&& $model[$i]["medidas"]==$medidas[$j]&&$model[$i]["calibre"]=="14") {
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



		for ($h=0; $h <count($model) ; $h++) { 
			

			if ($model[$h]["nombre"]=="CTA  SF ALGODÓN COLORES SENCILLA SIN HILADILL.C/C"&& $model[$h]["medidas"]==$medidas[$j] &&$model[$h]["calibre"]=="8") {
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
			

			if ($model[$h]["nombre"]=="CTA SF ALGODÓN COLORES SENCILLA SIN HILADILLO.C/C"&& $model[$h]["medidas"]==$medidas[$j] &&$model[$h]["calibre"]=="10") {
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
			

			if ($model[$h]["nombre"]=="CTA SF ALGODÓN COLORES SENCILLA SIN HILADILLO.C/C"&& $model[$h]["medidas"]==$medidas[$j] &&$model[$h]["calibre"]=="14") {
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
			

			if ($model[$h]["nombre"]=="CTA EX ALGODÓN COLORES SENCILLA SIN HILADILLO.C/C"&& $model[$h]["medidas"]==$medidas[$j] &&$model[$h]["calibre"]=="8") {
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
			

			if ($model[$h]["nombre"]=="CTA EX ALGODÓN COLORES SENCILLA SIN HILADILLO.C/C"&& $model[$h]["medidas"]==$medidas[$j] &&$model[$h]["calibre"]=="10") {
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
			

			if ($model[$h]["nombre"]=="CTA EX ALGODÓN COLORES SENCILLA SIN HILADILLO.C/C"&& $model[$h]["medidas"]==$medidas[$j] &&$model[$h]["calibre"]=="14") {
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


	 	


}


?>
</table>

<br>
<br>
<table>
<td colspan="5"  align="center">Precios netos sujetos a cambios sin previo aviso - M&aacute;s IVA 16% - <?php echo $FechaInforme[0]["fechaCosto"];?> DE <?php echo  $año;?>- #<?php echo $FechaInforme[0]["consecutivo"];?></td>
</tr>


<tr>
<td colspan="20" align="center"><h1>ESTA LISTA ANULA TODAS LAS ANTERIORES</h1></td>
</tr>



</table>

