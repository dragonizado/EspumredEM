<?php 

$x=0;
if ($model!==null) { ?>

<table border="1;">
<tr>

<!-- EMPIEZA LA CABEZERA DEL EXCEL-->
CODIGO	PRENDA	CANTIDAD	PROVISION	TOTAL

<th>CODIGO</th>
<th>NOMBRE</th>
<th>AREA</th>
<th>CARGO</th>
<th>CAMISA</th>
<th>CALZADO</th>
<th>PANTALON</th>
<th>DELANTAL</th>
<th>OVEROL</th>
<th>OTRASDOTACIONES</th>
</tr>
<tr>
<!-- FOR PARA RECORRER EL MODELO EMPLEADO IDENTIFICANDO CADA EMPLEADO Y REGISTRANDOLO-->
<?php  
$modelArticulos=Articulosdedotacion::model()->findAll();
$modelEmpleado=Informacionempleado::model()->findAll();
$modeloDotacion=Dotacion::model()->findAll();

// $modelArticulos=Dotacion::model()->findAll();
//  for ($i=0; $i <count($model) ; $i++) { 


// //FOR PARA BUSCAR CORRECTAMENTE LA INFORMACION PERSONAL DEL EMPLEADO
// 		if ($modelFamiliar[$j]["ccEmpleado"]==$modelInformacionPersonal["cc"]) {
// 		$arrFamiliar[$k][0]=$modelFamiliar[$j]["ccEmpleado"];
// 		$arrFamiliar[$k][1]=$modelFamiliar[$j]["nombreFamiliar"];
// 		$arrFamiliar[$k][2]=$modelFamiliar[$j]["parantesco"];
// 		$arrFamiliar[$k][3]=$modelFamiliar[$j]["fechaDeNacimiento"];
// 		$arrFamiliar[$k][4]=$modelFamiliar[$j]["edad"];
// 		$arrFamiliar[$k][5]=$modelFamiliar[$j]["escolaridad"];
// 		$arrFamiliar[$k][6]=$modelFamiliar[$j]["ocupacion"];
// 		$arrFamiliar[$k][7]=$modelFamiliar[$j]["viveConEmpleado"];
// 		$arrFamiliar[$k][8]=$modelFamiliar[$j]["dependeDelEmpleado"];
// 		$k++;
// 		}	
// 	}
	// //SE INICIALIZAN LOS MODELOS PARA UTILIZARLOS MAS ADELANTES
	// $modelInformacionAcademica=Informacionacademica::model()->findByPk($model[$i]["informacionAcademica"]);
	// $modelEstadoEstudiantil=Estadoestudiantil::model()->findByPk($model[$i]["estadoEstudiantil"]);
	// $modelSeguridadSocial=Seguridadsocial::model()->findByPk($model[$i]["seguridadSocial"]);
	// $modelInformacionVivienda=Informacionvivienda::model()->findByPk($model[$i]["InformacionVivienda"]);
	// $modelInformacionEconomica=Informacioneconomica::model()->findByPk($model[$i]["InformacionEconomica"]);
	// $modelContrato= Contrato::model()->findByPk($model[$i]["contrato"]);
// camisa
// calsado
// pantalon
// delantal
// overol
// otrasDotaciones
	
	?>

<td><?php for ($z=0; $z <count($modelEmpleado) ; $z++){?>
	<?php  echo $modelEmpleado[$z]["id"];?> <br><?php } ?></td>

<td><?php for ($z=0; $z <count($modelEmpleado) ; $z++){?>
	<?php  
	$modelpersonal=Informacionpersonal::model()->findByPk($modelEmpleado[$z]["informacionPersonal"]);
	echo $modelpersonal["nombre"];
	?> <br><?php } ?></td>

<td><?php for ($z=0; $z <count($modelEmpleado) ; $z++){?>
	<?php  
	$modelArea=Area::model()->findByPk($modelEmpleado[$z]["area"]);
	echo $modelArea["nombreArea"];
	?> <br><?php } ?></td>

<td><?php for ($z=0; $z <count($modelEmpleado) ; $z++){?>
	<?php  
	$modelCargo=Cargos::model()->findByPk($modelEmpleado[$z]["cargo"]);
	echo $modelCargo["nombreCargo"];
	?> <br><?php } ?></td>


<td><?php 

for ($z=0; $z <count($modelEmpleado) ; $z++){?>

		<?php  
			$modelDotacion2=Dotacion::model()->findByPk($modelEmpleado[$z]["dotacion"]);
			$camisa=Articulosdedotacion::model()->findByPk($modelDotacion2["camisa"]);
			?>	
			<?php echo $camisa["nombre"];?><br>
		
	<?php } ?></td>


<td><?php 

for ($z=0; $z <count($modelEmpleado) ; $z++){?>

		<?php  
			$modelDotacion2=Dotacion::model()->findByPk($modelEmpleado[$z]["dotacion"]);
			$calzado=Articulosdedotacion::model()->findByPk($modelDotacion2["calzado"]);
			?>	
			<?php echo $calzado["nombre"];?><br>
		
	<?php } ?></td>

	<td><?php 

for ($z=0; $z <count($modelEmpleado) ; $z++){?>

		<?php  
			$modelDotacion2=Dotacion::model()->findByPk($modelEmpleado[$z]["dotacion"]);
			$pantalon=Articulosdedotacion::model()->findByPk($modelDotacion2["pantalon"]);
			?>	
			<?php echo $pantalon["nombre"];?><br>
		
	<?php } ?></td>

	<td><?php 

for ($z=0; $z <count($modelEmpleado) ; $z++){?>

		<?php  
			$modelDotacion2=Dotacion::model()->findByPk($modelEmpleado[$z]["dotacion"]);
			$delantal=Articulosdedotacion::model()->findByPk($modelDotacion2["delantal"]);
			?>	
			<?php echo $delantal["nombre"];?><br>
		
	<?php } ?></td>

	<td><?php 

for ($z=0; $z <count($modelEmpleado) ; $z++){?>

		<?php  
			$modelDotacion2=Dotacion::model()->findByPk($modelEmpleado[$z]["dotacion"]);
			$overol=Articulosdedotacion::model()->findByPk($modelDotacion2["overol"]);
			?>	
			<?php echo $overol["nombre"];?><br>
		
	<?php } ?></td>

	<td><?php 

for ($z=0; $z <count($modelEmpleado) ; $z++){?>

		<?php  
			$modelDotacion2=Dotacion::model()->findByPk($modelEmpleado[$z]["dotacion"]);
			$otrasDotaciones=Articulosdedotacion::model()->findByPk($modelDotacion2["otrasDotaciones"]);
			?>	
			<?php echo $otrasDotaciones["nombre"];?><br>
		
	<?php } ?></td>


</tr>





</table>
<?php  } ?>
