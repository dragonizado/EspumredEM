<?php 

$x=0;
if ($model!==null) { ?>

<table border="1;">
<tr>

<!-- EMPIEZA LA CABEZERA DEL EXCEL-->
CODIGO	PRENDA	CANTIDAD	PROVISION	TOTAL

<th>CODIGO</th>
<th>PRENDA</th>
<th>CANTIDAD</th>
<th>PROVISION</th>
<th>TOTAL</th>
</tr>
<tr>
<!-- FOR PARA RECORRER EL MODELO EMPLEADO IDENTIFICANDO CADA EMPLEADO Y REGISTRANDOLO-->
<?php  
$modelArticulos=Articulosdedotacion::model()->findAll();
$modelEmpleado=Informacionempleado::model()->findAll();

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
// botas
// tenis
// otrasDotaciones
	
	?>

<td><?php for ($z=0; $z <count($modelArticulos) ; $z++){?>
	<?php  echo $modelArticulos[$z]["id"];?> <br><?php } ?></td>

<td><?php for ($z=0; $z <count($modelArticulos) ; $z++){?>
	<?php  echo $modelArticulos[$z]["nombre"];?> <br><?php } ?></td>


<td><?php 

for ($z=0; $z <count($modelArticulos) ; $z++){?>
	<?php  $suma=0;
			for ($i=0; $i <count($modelEmpleado) ; $i++) { 
				$modelDotacion=Dotacion::model()->findByPk($modelEmpleado[$i]["dotacion"]);
				if ($modelArticulos[$z]["id"]===$modelDotacion["camisa"]||
					$modelArticulos[$z]["id"]===$modelDotacion["calzado"]||
					$modelArticulos[$z]["id"]===$modelDotacion ["pantalon"]||
					$modelArticulos[$z]["id"]===$modelDotacion ["delantal"]||
					$modelArticulos[$z]["id"]===$modelDotacion ["overol"]||
					$modelArticulos[$z]["id"]===$modelDotacion ["otrasDotaciones"]){
					$suma=$suma+1;

				}
			}
	 echo $suma ?><br>


	<?php } ?></td>


</tr>

</table>
<?php  } ?>
