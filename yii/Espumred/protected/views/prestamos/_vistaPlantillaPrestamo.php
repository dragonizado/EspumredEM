<?php 

 $modeloCliente=Cliente::model()->findByPk($model['id_Cliente']);
 $modeloCiudad=Ciudad::model()->findByPk($model['id_Ciudad']);
// $modeloEmpresa=Empresa::model()->findByPk($model['Empresa']);
$arrArticulos = Yii::app()->session['Articulo'];

?>

<style type="text/css">
	table { 
  border: hidden
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
		<h4 align="center">REMISIÓN</h4>
		</td>

		<td class="col-md-3" align="center"><?php  echo $model['consecutivo']; ?></td>

	</tr>	
 <tr>
 </table>
 <br>
<!-- empieza el ceurpo de la carta remisora-->

<table class="table table-striped " id="border"  >
      <tbody>
         <tr>
			<td colspan="3">
			Señores: <?php echo CHtml::encode($modeloCliente['Nombre']." ".$modeloCliente['Apellido']); ?>
			</td>

			<td colspan="4">
			Fecha: <?php echo CHtml::encode($model['Fecha_Creacion']); ?>
			</td>
		</tr>
        <tr>
	        <td colspan="3" >
			Direccion: <?php echo CHtml::encode($modeloCliente['Direccion']); ?>
			</td>
			<td colspan="4">
			Ciudad: <?php echo CHtml::encode($modeloCiudad['NombreCiudad']); ?>
			</td>
        </tr>
        <tr>
           <td colspan="3" >
			Condicion de Pago: <?php echo CHtml::encode(""/*$model['Numero_Bultos']*/); ?>
			</td>
			<td colspan="4">
			Vendedor: <?php echo CHtml::encode(""/*$modeloEmpresa['NombreEmpresa']*/); ?>
			</td>
        </tr>
        <tr>
        	<td colspan="3" ></td>
        	<td colspan="4" ></td>
        </tr>
        </tbody>
    </table>




    <table class="table table-bordered">
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
			<td colspan="2">
			Valor Total
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
			<td colspan="2">
			<?php 
		     	for ($i=0; $i <count($arrArticulos) ; $i++) {           
			       echo $arrArticulos [$i][2]."<br>";		         			
		        	}	
			 ?>
			</td>
			<td colspan="2">
				<?php 
				$valor;
				
		     	for ($i=0; $i <count($arrArticulos) ; $i++) {           
			       	$valor=$arrArticulos [$i][1]*$arrArticulos [$i][2];	
			      	 echo $valor."<br>";
		        	}	
		        	
				 ?>
			</td>
		</tr>
		</tbody>
    </table>

    <table class=" table" >
  		
		  	<td class="col-md-4" >  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</td>	  	
			<td class="col-md-4" colspan="5"> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</td>
			<td class="col-md-2" align="right"  colspan="2"> VALOR TOTAL</td>
			<td class="col-md-2" align="right" colspan="2">
				<?php 
				$valor;
				$valorTotal=0;
		     	for ($i=0; $i <count($arrArticulos) ; $i++) {           
			       	$valor=$arrArticulos [$i][1]*$arrArticulos [$i][2];	
			       	$valorTotal=$valorTotal+$valor;
		        	}	
		        	echo $valorTotal;
				 ?>

			</td>

    </table>
    <br><br>
<?php
/* @var $this ArticulosPrestamoClienteController */
/* @var $model ArticulosPrestamoCliente */
/* @var $form CActiveForm */
?>



