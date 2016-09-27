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
$medidas[0]="80*190";
$medidas[1]="90*190";
$medidas[2]="100*190";
$medidas[3]="120*190";
$medidas[4]="140*190";


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
<td  colspan="13"  align="center" style="COLOR: #000000; BACKGROUND-COLOR: #FF8D4B">LISTA DE PRECIOS COMBO</td>
<!-- EMPIEZA LA CABEZERA DEL EXCEL-->
</tr>

	

<tr>
<td></td>
<td  colspan="2"  align="center" style="COLOR: #000000; BACKGROUND-COLOR: #FF8D4B">COMBO SENSAFLEX C-30 JAC PLUS + BASE CAMA</td>
<td  colspan="2"  align="center" style="COLOR: #000000; BACKGROUND-COLOR: #FF8D4B">COMBO SENSAFLEX C-30 JAC + BASE CAMA</td>
<td  colspan="2"  align="center" style="COLOR: #000000; BACKGROUND-COLOR: #FF8D4B">COMBO SPECIAL LIFE SEMI FIRME + BASE CAMA</td>
<td  colspan="2"  align="center" style="COLOR: #000000; BACKGROUND-COLOR: #FF8D4B">COMBO ECO LINE D-26 + BASE CAMA	</td>
<td  colspan="2"  align="center" style="COLOR: #000000; BACKGROUND-COLOR: #FF8D4B">COMBO SPYRAL SENCILLO+BASE ECO</td>
<td  colspan="2"  align="center" style="COLOR: #000000; BACKGROUND-COLOR: #FF8D4B">COMBO SPYRAL PLUS+BASE ECO</td>

</tr>

<tr>
<td align="center">Medida</td>
<td></td>
<td align="center">25</td>
<td></td>
<td align="center">22</td>
<td></td>
<td align="center">22</td>
<td></td>
<td align="center">15</td>
<td></td>
<td align="center">25</td>
<td></td>
<td align="center">35</td>
</tr>
	
	</thead>
	<tbody>
		
		<?php   for ($j=0; $j <count($medidas) ; $j++) { 
			?><tr><?php

		
					for ($i=0; $i <count($model) ; $i++) { 
					

						if ($model[$i]["nombre"]=="COMBO SENSAFLEX C-30 JAC PLUS + BASE CAMA"&&$model[$i]["medidas"]==$medidas[$j]) {
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
				

						if ($model[$i]["nombre"]=="COMBO SENSAFLEX C-30 JAC + BASE CAMA"&&$model[$i]["medidas"]==$medidas[$j]) {
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
				

						if ($model[$i]["nombre"]=="COMBO SPECIAL LIFE SEMI FIRME + BASE CAMA"&&$model[$i]["medidas"]==$medidas[$j]) {
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
				

						if ($model[$i]["nombre"]=="COMBO ECO LINE D-26 + BASE CAMA"&&$model[$i]["medidas"]==$medidas[$j]) {
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

					if ($j>1) {
						

							for ($i=0; $i <count($model) ; $i++) { 
								

										if ($model[$i]["nombre"]=="COMBO SPYRAL SENCILLO+BASE ECO"&&$model[$i]["medidas"]==$medidas[$j]) {
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
								

										if ($model[$i]["nombre"]=="COMBO SPYRAL PLUS+BASE ECO"&&$model[$i]["medidas"]==$medidas[$j]) {
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

				}	else{

					?>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<?php

				}		



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

