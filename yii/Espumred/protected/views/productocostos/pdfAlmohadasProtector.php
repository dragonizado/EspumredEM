<?php 
$Rol= Yii::app()->user->rol;
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

     	<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr>
		<td  colspan="5"  align="center" style="COLOR: #000000; BACKGROUND-COLOR: #FF8D4B">ALMOHADAS Y PROTECTORES</td>
		<!-- EMPIEZA LA CABEZERA DEL EXCEL-->
		</tr>
		<tr>
		<td></td>
		<td  colspan="3"  align="center" style="COLOR: #000000; BACKGROUND-COLOR: #FF8D4B">ALMOHADAS</td>
		</tr>
		<tr></tr>
			
	</thead>
	<tbody>
		
<?php
		
			for ($i=0; $i <count($model) ; $i++) { 
		
		$nombre=substr($model[$i]["nombre"], 0, 9);
				if ($nombre=="ALMOHADAS") {
			?>			
			<tr><td></td>
						<td align="center"><?php echo $model[$i]["cod"];?></td>
						<td align="center"><?php echo $model[$i]["nombre"];?></td>
						<?php if ($Rol=="costo"){
							?><td align="center"><?php echo "$".$model[$i]["precioMayoristas"];?></td><?php
						}else{
							?><td align="center"><?php echo "$".$model[$i]["precioCorreria"];?></td><?php

						}

						 ?>
							
						<td></td></tr>
						
			<?php 
			};

			};


				
			?><tr>
		<td></td>
		<td  colspan="3"  align="center" style="COLOR: #000000; BACKGROUND-COLOR: #FF8D4B">PROTECTORES</td>
		</tr>

		<?php
			for ($i=0; $i <count($model) ; $i++) { 
		
		$nombre=substr($model[$i]["nombre"], 0, 9);
				if ($nombre=="PROTECTOR") {

				?>		<tr>
				<td></td>
						<td align="center"><?php echo $model[$i]["cod"];?></td>
						<td align="center"><?php echo $model[$i]["nombre"];?></td>
						<?php if ($Rol=="costo"){
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

