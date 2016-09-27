<?php 
//formas para optener el dato particulas filtrandolo por un id
$modeloCliente=Cliente::model()->findByPk($model['idCliente']);
$modeloCiudad=Ciudad::model()->findByPk($model['Ciudad']);
$modeloEmpresa=Empresa::model()->findByPk($model['Empresa']);
$arrArticulos = Yii::app()->session['Articulo'];

?>

<style type="text/css">
	table { 
  border-collapse: collapse; 
}
</style>

<table class="col-md-12" align="center" >
	<tr>
		<td class="col-md-3"><img type="button" name="imprimir" value="Imprimir P&aacute;gina" onclick="window.print();" src="<?php echo Yii::app()->baseUrl;?>/images/logoLimpio.jpg" width='150px' height="50px"></td>

		<td class="col-md-6" align="center">IVA Régimen Común<br>N°Radcado 11-1471-01<br>Nit.:890.921.665-9</td>
		<td class="col-md-3"><img src="<?php echo Yii::app()->baseUrl;?>/images/colchonesRomance.jpg" width='150px' height="50px"></td>	


	</tr>	
 <tr>
 </table>
<br>
 <table class="col-md-12 " align="center">
	<tr>
		<td class="col-md-3">
		<?php echo CHtml::encode($model['Fecha_Creacion']); ?>
		</td>

		<td class="col-md-6" align="center">
		<h4 align="center">CARTA REMISORIA DE DESPACHO</h4>
		</td>

		<td class="col-md-3" align="center"><?php  echo $model['consecutivo']; ?></td>

	</tr>	
 <tr>
 </table>
 <br>
<!-- empieza el ceurpo de la carta remisora-->

<table class="table table-bordered " id="border" >
      <tbody>
         <tr>
			<td colspan="6">
			Señores: <?php echo CHtml::encode($modeloCliente['Nombre']." ".$modeloCliente['Apellido']); ?>
			</td>
		</tr>
        <tr>
	        <td colspan="2" >
			Direccion: <?php echo CHtml::encode($model['Direccion']); ?>
			</td>
			<td colspan="2">
			Telefono: <?php echo CHtml::encode($model['Telefono']); ?>
			</td>
			<td colspan="2">
			Ciudad: <?php echo CHtml::encode($modeloCiudad['NombreCiudad']); ?>
			</td>
        </tr>
        <tr>
           <td colspan="3" >
			N° de bultos: <?php echo CHtml::encode($model['Numero_Bultos']); ?>
			</td>
			<td colspan="3">
			Transportador: <?php echo CHtml::encode($modeloEmpresa['NombreEmpresa']); ?>
			</td>
        </tr>
        <tr>
          <td colspan="2" >
			Flete Pagadero: <?php echo CHtml::encode($model['Flete_Pagadero']); ?>
			</td>
			<td colspan="2" >
			Factura N°: <?php echo CHtml::encode($model['Numero_Factura']); ?>
			</td>
			<td colspan="2">
			Valor Total$: <?php echo CHtml::encode($model['Valor_Total']); ?>
			</td>
        </tr>
      </tbody>
    </table>




    <table class="table table-bordered" >
      <tbody>
     	 <tr>
	        <td >
			Cantidad:
			</td>
			<td colspan="5">
			Articulos
			</td>
			<td colspan="2">
			Valor Unitario
			</td>

        </tr>
         <tr>
         <td>
         	<?php 
		     	for ($i=0; $i <count($arrArticulos) ; $i++) {           
			       echo $arrArticulos [$i][1]."<br>";		         			
		        	}	
			 ?>
			 </td>
			<td colspan="5">
			<?php 
		     	for ($i=0; $i <count($arrArticulos) ; $i++) {           
			       echo $arrArticulos [$i][0]."<br>";		         			
		        	}	
			 ?>
			</td>
			<td>
			<?php 
		     	for ($i=0; $i <count($arrArticulos) ; $i++) {           
			       echo $arrArticulos [$i][2]."<br>";		         			
		        	}	
			 ?>
			</td>
		</tr>
      </tbody>
    </table>
<?php
/* @var $this ArticulosPrestamoClienteController */
/* @var $model ArticulosPrestamoCliente */
/* @var $form CActiveForm */
?>
<br><br><br><br><br><br><br><br>
<table class="col-md-12" align="center">
	<tr>
		<td class="col-md-6">
		____________________________________________
		Firma Transportador:
		
		</td>

		<td class="col-md-6" align="center">
		____________________________________________
		Firma Cliente:
		</td>

	</tr>	
 <tr>
 </table>
<!--input type="button" name="imprimir" value="Imprimir P&aacute;gina" onclick="window.print();"-->

