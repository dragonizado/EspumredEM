<?php 
$informe=Yii::app()->session['id'];
       
?>


<table class="table table-bordered ">
	<!-- <caption>HOJA DE VIDA</caption> -->
	<thead>
		<tr>
			<td colspan="8"  align="center" ><h5>INFORME TOTAL </h5></td>
			<td  colspan="1" ><img type="button" name="imprimir" value="Imprimir P&aacute;gina" onclick="window.print();" src="<?php echo Yii::app()->baseUrl;?>/images/logoLimpio.jpg" width='150px' height="50px"></td>
		</tr>
	
	</thead>
	<tbody >
		
		<tr>
			<td  colspan="9"  align="left" style="COLOR: #000000; BACKGROUND-COLOR: #FF8D4B"><h2>Informe <?php echo $informe[0];  ?></h2></td>
			
		</tr>
	</tbody>


</table>

<br>
<table class="table table-bordered ">
	<tbody >
	
			

			
			<?php if ($informe[0]=="Herramientas"): 
				$modeloHerramientas=Herramientas::model()->findAll();

			?>
				<tr>
			    <td    colspan="1" class"col-md-4"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">NOMBRE</td>
				<td    colspan="1" class"col-md-4"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">DESCRIPCION</td>
				<td    colspan="1" class"col-md-4"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">MARCA</td>
				<td    colspan="1" class"col-md-4"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">FECHA DE COMPRA</td>
				<td    colspan="1" class"col-md-4"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">PROVEEDOR</td>
				<td    colspan="1" class"col-md-4"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">FECHA DE BAJA</td>
				<td    colspan="1" class"col-md-4"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">FABRICANTE</td>
				<td    colspan="1" class"col-md-4"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">ESTADO</td>

			</tr>
			<?php
				for ($i=0; $i <count($modeloHerramientas) ; $i++) { 
			?>
				<tr>
				<td    colspan="1" class"col-md-4"   align="center" ><?php echo  $modeloHerramientas[$i]["nombre"];?></td>
				<td    colspan="1" class"col-md-4"   align="center" ><?php echo  $modeloHerramientas[$i]["descripcion"];?></td>
				<td    colspan="1" class"col-md-4"   align="center" ><?php echo  $modeloHerramientas[$i]["marca"]?></td>
				<td    colspan="1" class"col-md-4"   align="center" ><?php echo  $modeloHerramientas[$i]["fechaDeCompra"];?></td>
				<td    colspan="1" class"col-md-4"   align="center" ><?php echo  $modeloHerramientas[$i]["proveedor"];?></td>
				<td    colspan="1" class"col-md-4"   align="center" ><?php echo  $modeloHerramientas[$i]["fechaDeBaja"];?></td>
				<td    colspan="1" class"col-md-4"   align="center" ><?php echo  $modeloHerramientas[$i]["fabricante"];?></td>
				<td    colspan="1" class"col-md-4"   align="center" ><?php echo  $modeloHerramientas[$i]["estado"];?></td>
				</tr>

			<?php }; 


			endif ?>



			<?php if ($informe[0]=="Repuestos"): 
				$modeloRepuestos=Repuestos::model()->findAll();

			?>
				<tr>
			    <td    colspan="1" class"col-md-4"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">NOMBRE</td>
				<td    colspan="1" class"col-md-4"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">DESCRIPCION</td>
				<td    colspan="1" class"col-md-4"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">MARCA</td>
				<td    colspan="1" class"col-md-4"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">FECHA DE COMPRA</td>
				<td    colspan="1" class"col-md-4"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">PORVEEDOR</td>
			
				<td    colspan="1" class"col-md-4"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">FECHA DE BAJA</td>
				<td    colspan="1" class"col-md-4"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">FABRICANTE</td>

			</tr>
			<?php
				for ($i=0; $i <count($modeloRepuestos) ; $i++) { 
			?>
				<tr>
				<td    colspan="1" class"col-md-4"   align="center" ><?php echo  $modeloRepuestos[$i]["nombre"];?></td>
				<td    colspan="1" class"col-md-4"   align="center" ><?php echo  $modeloRepuestos[$i]["descripcion"];?></td>
				<td    colspan="1" class"col-md-4"   align="center" ><?php echo  $modeloRepuestos[$i]["marca"]?></td>
				<td    colspan="1" class"col-md-4"   align="center" ><?php echo  $modeloRepuestos[$i]["fechaDeCompra"];?></td>
				<td    colspan="1" class"col-md-4"   align="center" ><?php echo  $modeloRepuestos[$i]["proveedor"];?></td>
				<td    colspan="1" class"col-md-4"   align="center" ><?php echo  $modeloRepuestos[$i]["fechaDeBaja"];?></td>
				<td    colspan="1" class"col-md-4"   align="center" ><?php echo  $modeloRepuestos[$i]["fabricante"];?></td>
				
				</tr>

			<?php }; 


			endif ?>


			


	</tbody>


</table>

<footer>
		<div align="center"  class="col-md-12">
			<img src="<?php echo Yii::app()->baseUrl;?>/images/logoLimpio.jpg" width='150px' height="50px">
		</div>
</footer>