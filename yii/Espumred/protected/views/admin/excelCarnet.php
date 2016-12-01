<?php 

$x=0;
if ($model!==null) { ?>

<table border="1">
<tr>
<!-- EMPIEZA LA CABEZERA DEL EXCEL-->
<th>Cedula</th>
<th>Nombre</th>
<th>Carnet</th>

</tr>

<!-- FOR PARA RECORRER EL MODELO EMPLEADO IDENTIFICANDO CADA EMPLEADO Y REGISTRANDOLO-->
<?php   $modelEmpleado=Informacionempleado::model()->findAll();
for ($i=0; $i <count($modelEmpleado) ; $i++) { 

	//SE INICIALIZAN LOS MODELOS PARA UTILIZARLOS MAS ADELANTES
	
	?>
<!-- SE COMIENZA EL LLENADO DEL ARCHIVO EXCEL EMPESAMOS PRIMERO POR INFORMACIONPERSONAL-->
<tr<?php echo ($x++)%2==0?"style='background-color:#CCC'":"";?>>
<!-- SE INICA EL LLENADO DE LA INFORMACION FAMILIAR-->
<td>
	<?php  
	$modelInformacionPersonal=Informacionpersonal::model()->findByPk($modelEmpleado[$i]["informacionPersonal"]);
		echo $modelInformacionPersonal["cc"];?></td>

<td>
	<?php 	
	$modelInformacionPersonal=Informacionpersonal::model()->findByPk($modelEmpleado[$i]["informacionPersonal"]);
	echo $modelInformacionPersonal["nombre"];?></td>

<td><?php 	echo $modelEmpleado[$i]["carnet"];?></td>

</tr>
<?php } ?>
</table>
<?php  } ?>
