<?php 

$x=0;
if ($model!==null) { ?>

<table border="1">
<tr>
<!-- EMPIEZA LA CABEZERA DEL EXCEL-->
<th>Nombre Completo</th>
<th>Numero de docuemento</th>
<th>Rh</th>
<th>Sexo</th>
<th>Fecha de nacimiento</th>
<th>Fecha de ingreso</th>
<th>Lugar de nacimiento</th>
<th>Estado civil</th>
<th>DireccionResidencia</th>
<th>Barrio</th>
<th>Municipio</th>
<th>Telefono fijo</th>
<th>Celular</th>
<th>Libreta militar y clase</th>
<th>Vehiculo</th>
<th>Contacto de emergencia</th>
<th>Telefono</th>
<th>Cargo</th>
<th>Area</th>
<th>---informacion familiar----</th>
<th>Tiempo casado</th>
<th>Numero de hijos</th>
<th>Parentesco</th>
<th>Nombre</th>
<th>Fecha de nacimiento</th>
<th>Edad</th>
<th>Escolaridad</th>
<th>Ocupacion</th>
<th>Vive con empleado</th>
<th>Depende de empleado</th>
<th>------------contrato----------</th>
<th>TipoContrato</th>
<th>FechaPrimerContrato</th>
<th>FechaIngreso</th>
<th>FechaDeRetiro</th>
<th>Estado</th>
<th>--------informacion academica----------</th>
<th>Escolaridad</th>
<th>Titulo obtenido</th>
<th>Institucion</th>
<th>Otros cursos1</th>
<th>Otros cursos2</th>
<th>Otros cursos2</th>
<th>----------estado estudiantil---------------</th>
<th>Estudia actualmente</th>
<th>Titulo de la carrera</th>
<th>Semestre actual</th>
<th>Año de terminacion</th>
<th>---------informacion vivienda-------</th>
<th>NumeroDeHabitantes</th>
<th>IndiceHacimiento</th>
<th>Estrato</th>
<th>TenenciaDeLaVivienda</th>
<th>TipoDeVivienda</th>
<th>NumeroDeHabitacion</th>
<th>Cocina</th>
<th>BañoComun</th>
<th>BañoPrivado</th>
<th>Sala</th>
<th>Comedor</th>
<th>SalaComedor</th>
<th>ZonaDeRopa</th>
<th>Agua</th>
<th>Electricidad</th>
<th>Gas</th>
<th>Telefono</th>
<th>Internet</th>
<th>TelevisionPorCable</th>
<th>Otros</th>
<th>Television</th>
<th>EquipoDeSonido</th>
<th>Lavadora</th>
<th>Estufa</th>
<th>Dvd</th>
<th>Microondas</th>
<th>Pc</th>
<th>Paredes</th>
<th>Techo</th>
<th>Piso</th>
<th>--------informacion economica----------</th>
<th>PrimerIngreso</th>
<th>SegundoIngreso</th>
<th>OtrosIngresos</th>
<th>TotalIngresos</th>
<th>Arriendo</th>
<th>ServiciosPublicos</th>
<th>Internet</th>
<th>Telefonia</th>
<th>Cable</th>
<th>Alimentacion</th>
<th>Transporte</th>
<th>Celular</th>
<th>Educacion</th>
<th>Vehiculo</th>
<th>PrestacionesComercial</th>
<th>PrestamosBancario</th>
<th>Hipoteca</th>
<th>VestidoYCalzado</th>
<th>Recreacion</th>
<th>TotalGastos </th>
<th>SaldoFinal</th>
</tr>
<!-- FOR PARA RECORRER EL MODELO EMPLEADO IDENTIFICANDO CADA EMPLEADO Y REGISTRANDOLO-->
<?php   for ($i=0; $i <count($model) ; $i++) { 

//SE LLAMA AL MODELO PARA SIGNARLO A CADA COLUMNA
	$modelFamiliar=Informacionfamiliar::model()->findAll();
	$modelInformacionPersonal=Informacionpersonal::model()->findByPk($model[$i]["informacionPersonal"]);
	$arrFamiliar= array();
	$k=0;
//FOR PARA BUSCAR CORRECTAMENTE LA INFORMACION PERSONAL DEL EMPLEADO
	for ($j=0; $j <count($modelFamiliar); $j++) {
		if ($modelFamiliar[$j]["ccEmpleado"]==$modelInformacionPersonal["cc"]) {
		$arrFamiliar[$k][0]=$modelFamiliar[$j]["ccEmpleado"];
		$arrFamiliar[$k][1]=$modelFamiliar[$j]["nombreFamiliar"];
		$arrFamiliar[$k][2]=$modelFamiliar[$j]["parantesco"];
		$arrFamiliar[$k][3]=$modelFamiliar[$j]["fechaDeNacimiento"];
		$arrFamiliar[$k][4]=$modelFamiliar[$j]["edad"];
		$arrFamiliar[$k][5]=$modelFamiliar[$j]["escolaridad"];
		$arrFamiliar[$k][6]=$modelFamiliar[$j]["ocupacion"];
		$arrFamiliar[$k][7]=$modelFamiliar[$j]["viveConEmpleado"];
		$arrFamiliar[$k][8]=$modelFamiliar[$j]["dependeDelEmpleado"];
		$k++;
		}	
	}
	//SE INICIALIZAN LOS MODELOS PARA UTILIZARLOS MAS ADELANTES
	$modelInformacionAcademica=Informacionacademica::model()->findByPk($model[$i]["informacionAcademica"]);
	$modelEstadoEstudiantil=Estadoestudiantil::model()->findByPk($model[$i]["estadoEstudiantil"]);
	$modelSeguridadSocial=Seguridadsocial::model()->findByPk($model[$i]["seguridadSocial"]);
	$modelInformacionVivienda=Informacionvivienda::model()->findByPk($model[$i]["InformacionVivienda"]);
	$modelInformacionEconomica=Informacioneconomica::model()->findByPk($model[$i]["InformacionEconomica"]);
	$modelContrato= Contrato::model()->findByPk($model[$i]["contrato"]);
	
	?>
<!-- SE COMIENZA EL LLENADO DEL ARCHIVO EXCEL EMPESAMOS PRIMERO POR INFORMACIONPERSONAL-->
<tr<?php echo ($x++)%2==0?"style='background-color:#CCC'":"";?>>
<td><?php echo $modelInformacionPersonal["nombre"];?></td>
<td><?php echo $modelInformacionPersonal["cc"];?></td>
<td><?php echo $modelInformacionPersonal["rh"];?></td>
<td><?php echo $modelInformacionPersonal["sexo"];?></td>
<td><?php echo $modelInformacionPersonal["fechaNacimiento"];?></td>
<td><?php echo $modelContrato["fechaIngreso"];?></td>
<!-- SE INICIA EL MODELO AKA POR SE NECESITA UTILIZARLO MAS ADELANTE ASI PODER TOMAR EL DATO CORRESPONDIENTE-->
<td><?php $modelMunicipio=Municipio::model()->findByPk($modelInformacionPersonal["lugarNacimiento"]);
	echo $modelMunicipio["nombreMunicipio"];
?></td>
<td><?php echo $modelInformacionPersonal["estadoCivil"];?></td>
<td><?php echo $modelInformacionPersonal["direccionResidencia"];?></td>
<td><?php echo $modelInformacionPersonal["barrio"];?></td>
<td><?php $modelMunicipio=Municipio::model()->findByPk($modelInformacionPersonal["municipio"]);
	echo $modelMunicipio["nombreMunicipio"];
?></td>
<td><?php echo $modelInformacionPersonal["telefono"];?></td>
<td><?php echo $modelInformacionPersonal["celular"];?></td>
<td><?php echo $modelInformacionPersonal["libretaMilitar"].",".$modelInformacionPersonal["claseLibretaMilitar"];?></td>
<td><?php echo $model[$i]["vehiculo"];?></td>
<td><?php echo $model[$i]["contactoEmergencia"];?></td>
<td><?php echo $model[$i]["telefonoContacto"];?></td>
<td><?php ;
		$modelcargo=Cargos::model()->findByPk($model[$i]["cargo"]);
		echo $modelcargo["nombreCargo"]
?></td>
<td><?php ;
		$modelArea=Area::model()->findByPk($model[$i]["area"]);
		echo $modelArea["nombreArea"]
?></td>
<?php //termina informacion personal ?>
<td><?php echo " "?></td>
<td><?php echo $modelInformacionPersonal["tiempoCasado"];?></td>
<td><?php echo $modelInformacionPersonal["numeroHijos"];?></td>

<!-- SE INICA EL LLENADO DE LA INFORMACION FAMILIAR-->
<td><?php for ($z=0; $z <count($arrFamiliar) ; $z++){?>
	<?php  echo $arrFamiliar[$z][2];?> <br><?php } ?></td>

<td><?php for ($z=0; $z <count($arrFamiliar) ; $z++){?>
	<?php 	echo $arrFamiliar[$z][1];?><br><?php } ?></td>

<td><?php for ($z=0; $z <count($arrFamiliar) ; $z++){?>
	<?php 	echo $arrFamiliar[$z][3];?><br>
<?php } ?></td>

<td><?php for ($z=0; $z <count($arrFamiliar) ; $z++){?>
	<?php 	echo $arrFamiliar[$z][4];?><br>
<?php } ?></td>

<td><?php for ($z=0; $z <count($arrFamiliar) ; $z++){?>
	<?php 	echo $arrFamiliar[$z][5];?><br>
<?php } ?></td>

<td><?php for ($z=0; $z <count($arrFamiliar) ; $z++){?>
	<?php 	echo $arrFamiliar[$z][6];?><br>
<?php } ?></td>

<td><?php for ($z=0; $z <count($arrFamiliar) ; $z++){?>
	<?php 	echo $arrFamiliar[$z][7];?><br>
<?php } ?></td>

<td><?php for ($z=0; $z <count($arrFamiliar) ; $z++){?>
	<?php 	echo $arrFamiliar[$z][8];?><br>
<?php } ?></td>

<td>	<?php 	echo "";?>
</td>
<!-- SE INICA EL LLENADO DEL CONTRATO-->
<td><?php echo $modelContrato["tipoContrato"];?></td>
<td><?php echo $modelContrato["fechaPrimerContrato"];?></td>
<td><?php echo $modelContrato["fechaIngreso"];?></td>
<td><?php echo $modelContrato["fechaDeRetiro"];?></td>
<td><?php echo $model[$i]["estado"];?></td>
<td><?php echo "";?></td>
<!-- SE INICA EL LLENADO DE LA INFORMACION ACADEMICA-->
<td><?php echo $modelInformacionAcademica["escolaridad"];?></td>
<td><?php echo $modelInformacionAcademica["tituloObtenido"];?></td>
<td><?php echo $modelInformacionAcademica["institucion"];?></td>
<td><?php echo $modelInformacionAcademica["primerCurso"];?></td>
<td><?php echo $modelInformacionAcademica["segundoCurso"];?></td>
<td><?php echo $modelInformacionAcademica["tercerCurso"];?></td>
<td><?php echo "";?></td>
<!-- SE INICA EL LLENADO DEL ESTADO ESDUDIANTIL-->
<td><?php echo $modelEstadoEstudiantil["estadoEstudiante"];?></td>
<td><?php echo $modelEstadoEstudiantil["tituloCarrera"];?></td>
<td><?php echo $modelEstadoEstudiantil["semestreActual"];?></td>
<td><?php echo $modelEstadoEstudiantil["FechaTerminacion"];?></td>
<td><?php echo "";?></td>
<!-- SE INICA EL LLENADO DE LA INFORMACION VIVIENDA-->
<td><?php echo $modelInformacionVivienda["numeroDeHabitantes"];?></td>
<td><?php echo $modelInformacionVivienda["indiceHacimiento"];?></td>
<td><?php echo $modelInformacionVivienda["estrato"];?></td>
<td><?php echo $modelInformacionVivienda["tenenciaDeLaVivienda"];?></td>
<td><?php echo $modelInformacionVivienda["tipoDeVivienda"];?></td>
<td><?php echo $modelInformacionVivienda["numeroDeHabitacion"];?></td>
<td><?php echo $modelInformacionVivienda["cocina"];?></td>
<td><?php echo $modelInformacionVivienda["bañoComun"];?></td>
<td><?php echo $modelInformacionVivienda["bañoPrivado"];?></td>
<td><?php echo $modelInformacionVivienda["sala"];?></td>
<td><?php echo $modelInformacionVivienda["comedor"];?></td>
<td><?php echo $modelInformacionVivienda["salaComedor"];?></td>
<td><?php echo $modelInformacionVivienda["zonaDeRopa"];?></td>
<td><?php echo $modelInformacionVivienda["agua"];?></td>
<td><?php echo $modelInformacionVivienda["electricidad"];?></td>
<td><?php echo $modelInformacionVivienda["gas"];?></td>
<td><?php echo $modelInformacionVivienda["telefono"];?></td>
<td><?php echo $modelInformacionVivienda["internet"];?></td>
<td><?php echo $modelInformacionVivienda["televisionPorCable"];?></td>
<td><?php echo $modelInformacionVivienda["otros"];?></td>
<td><?php echo $modelInformacionVivienda["television"];?></td>
<td><?php echo $modelInformacionVivienda["equipoDeSonido"];?></td>
<td><?php echo $modelInformacionVivienda["lavadora"];?></td>
<td><?php echo $modelInformacionVivienda["estufa"];?></td>
<td><?php echo $modelInformacionVivienda["dvd"];?></td>
<td><?php echo $modelInformacionVivienda["microondas"];?></td>
<td><?php echo $modelInformacionVivienda["pc"];?></td>
<td><?php echo $modelInformacionVivienda["paredes"];?></td>
<td><?php echo $modelInformacionVivienda["techo"];?></td>
<td><?php echo $modelInformacionVivienda["piso"];?></td>
<td><?php echo "";?></td>
<!-- SE INICA EL LLENADO DE LA INFORMACION ECONOMICA-->
<td><?php echo $modelInformacionEconomica["primerIngreso"];?></td>
<td><?php echo $modelInformacionEconomica["segundoIngreso"];?></td>
<td><?php echo $modelInformacionEconomica["otrosIngresos"];?></td>
<td><?php echo $modelInformacionEconomica["totalIngresos"];?></td>
<td><?php echo $modelInformacionEconomica["arriendo"];?></td>
<td><?php echo $modelInformacionEconomica["serviciosPublicos"];?></td>
<td><?php echo $modelInformacionEconomica["internet"];?></td>
<td><?php echo $modelInformacionEconomica["telefonia"];?></td>
<td><?php echo $modelInformacionEconomica["cable"];?></td>
<td><?php echo $modelInformacionEconomica["alimentacion"];?></td>
<td><?php echo $modelInformacionEconomica["transporte"];?></td>
<td><?php echo $modelInformacionEconomica["celular"];?></td>
<td><?php echo $modelInformacionEconomica["educacion"];?></td>
<td><?php echo $modelInformacionEconomica["vehiculo"];?></td>
<td><?php echo $modelInformacionEconomica["prestacionesComercial"];?></td>
<td><?php echo $modelInformacionEconomica["prestamosBancario"];?></td>
<td><?php echo $modelInformacionEconomica["hipoteca"];?></td>
<td><?php echo $modelInformacionEconomica["vestidoYCalzado"];?></td>
<td><?php echo $modelInformacionEconomica["recreacion"];?></td>
<td><?php echo $modelInformacionEconomica["totalGastos"];?></td>
<td><?php echo $modelInformacionEconomica["saldoFinal"];?></td>
</tr>
<?php } ?>
</table>
<?php  } ?>
