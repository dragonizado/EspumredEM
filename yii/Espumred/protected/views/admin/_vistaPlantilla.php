<?php 
//formas para optener el dato particulas filtrandolo por un id
//los datos del empleado estan en el modelo el empleado tiene todos los datos de el trascurso del proceso

$modeloInformacionPersonal=Informacionpersonal::model()->findByPk($model['informacionPersonal']);
$modeloArea=Area::model()->findByPk($model['area']);
//$modeloInformacionFamiliar=Informacionfamiliar::model()->findAll();
$familiar=Informacionfamiliar::model()->findByPk($model['informacionFamiliar']); //es el array
$modeloInformacionFamiliar=Informacionfamiliar::model()->findAllByAttributes(array('ccEmpleado'=>$familiar["ccEmpleado"])); // este es el modelo
$modeloInformacionAcademica=Informacionacademica::model()->findByPk($model['informacionAcademica']);
$modeloEstadoEstudiantil=Estadoestudiantil::model()->findByPk($model['estadoEstudiantil']);
$modeloInformacionVivienda=Informacionvivienda::model()->findByPk($model['InformacionVivienda']);
$modeloInformacionEconomica=Informacioneconomica::model()->findByPk($model['InformacionEconomica']);
$modeloCargo=Cargos::model()->findByPk($model["cargo"]);
$modeloArea=Area::model()->findByPk($model["area"]);
$modeloContrato=Contrato::model()->findByPk($model['contrato']);
$modeloDotacion=Dotacion::model()->findByPk($model['dotacion']);
$modeloSeguridad=Seguridadsocial::model()->findByPk($model['seguridadSocial']);
$cedula=Experiencialaboral::model()->findByPk($model['experiencialaboral']);
$modeloExperienciaLaboral=Experiencialaboral::model()->findAllByAttributes(array('cedula'=>$cedula["cedula"]));
// $arrArticulos = Yii::app()->session['Articulo'];
$id="0";
?>

<style type="text/css">

</style>


<!-- cabecera -->


<table class="table table-bordered ">
	<!-- <caption>HOJA DE VIDA</caption> -->
	<thead>
		<tr align="center" >

			<td olspan="1" ><img type="button" name="imprimir" value="Imprimir P&aacute;gina" onclick="window.print();" src="<?php echo Yii::app()->baseUrl;?>/images/logoLimpio.jpg" width='150px' height="50px"></td>
		</tr>
	
	</thead>
	<tbody >
		
		<tr>
			<td  colspan="9"  align="center" style="COLOR: #000000; BACKGROUND-COLOR: #FF8D4B"><h5>INFORMACION PERSONAL </h5></td>
			
		</tr>
		<tr>
			<td  colspan="1"class"col-md-2" style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA"> FECHA DE INGRESO</td>
			<td  colspan="7" class"col-md-8"  >2014/25/08</td>
			<td   class"col-md-2" align="center" rowspan=" 6">
			<?php 
             if(file_exists("images/Informacionempleado/thumbs/t_".$model->id.".jpg")){
                 echo "<img src='images/fotos/".$model->id.".jpg'> ";
             }else{    
                echo "<img src='images/fotos/".$model->id.".jpg'> ";
             }
             ?>
			</td>
		</tr>

		<tr>
			<td    colspan="1" class"col-md-2"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">NOMBRE COMPLETO</td>
			<td    colspan="7" class"col-md-6" ><?php echo  $modeloInformacionPersonal["nombre"];?></td>	
		</tr>

		<tr>
			<td    colspan="1" class"col-md-4"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">NÚMERO DE DOCUMENTO</td>
			<td    colspan="3" class"col-md-2" ><?php echo  $modeloInformacionPersonal["cc"];?></td>	
			<td    colspan="2" class"col-md-4"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">RH</td>
			<td    colspan="2" class"col-md-2" ><?php echo  $modeloInformacionPersonal["rh"]?></td>	
		</tr>
		<tr>
			<td    colspan="1" class"col-md-4"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">FECHA DE NACIMIENTO</td>
			<td    colspan="3" class"col-md-2" ><?php echo  $modeloInformacionPersonal["fechaNacimiento"];?></td>	
			<td    colspan="2" class"col-md-4"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">LUGAR DE NACIMIENTO</td>
			<td    colspan="2" class"col-md-2" ><?php 
							$modeloMunicipio=Municipio::model()->findByPk($modeloInformacionPersonal["lugarNacimiento"]);
							echo $modeloMunicipio["nombreMunicipio"] ;?>


			</td>	
		</tr>
		<tr>
			<td    colspan="1" class"col-md-4"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">SEXO</td>
			<td    colspan="3" class"col-md-2" ><?php echo  $modeloInformacionPersonal["sexo"];?></td>	
			<td    colspan="2" class"col-md-4"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">ESTADO CIVIL</td>
			<td    colspan="2" class"col-md-2" ><?php echo  $modeloInformacionPersonal["estadoCivil"];?></td>	
		</tr>
		<tr>
			<td    colspan="1" class"col-md-4"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">DIRECCION DE RESIDENCIA</td>
			<td    colspan="7" class"col-md-2" ><?php echo  $modeloInformacionPersonal["direccionResidencia"];?></td>	
			
		</tr>
		<tr>
			<td    colspan="1" class"col-md-4"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">BARRIO</td>
			<td    colspan="3" class"col-md-2" ><?php echo  $modeloInformacionPersonal["barrio"];?></td>	
			<td    colspan="2" class"col-md-4"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">MUNICIPIO</td>
			<td    colspan="3" class"col-md-2" >
				<?php
					$modeloMunicipio=Municipio::model()->findByPk($modeloInformacionPersonal["municipio"]);
							echo $modeloMunicipio["nombreMunicipio"] ;?>


			</td>	
		</tr>
		<tr>
			<td    colspan="1" class"col-md-4"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">TELEFONO FIJO</td>
			<td    colspan="3" class"col-md-2" ><?php echo  $modeloInformacionPersonal["telefono"];?></td>	
			<td    colspan="2" class"col-md-4"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">TELEFONO CELULAR</td>
			<td    colspan="3" class"col-md-2" ><?php echo  $modeloInformacionPersonal["celular"];?></td>	
		</tr>
		<tr>
			<td    colspan="1" class"col-md-4"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">LIBRETA MILITAR N° Y CLASE</td>
			<td    colspan="3" class"col-md-2" ><?php echo  $modeloInformacionPersonal["libretaMilitar"]." , ".$modeloInformacionPersonal["claseLibretaMilitar"];?></td>	
			<td    colspan="2" class"col-md-4"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">VEHICULO</td>
			<td    colspan="3" class"col-md-2" ><?php echo  $model["vehiculo"];?></td>	
		</tr>
		<tr>
			<td    colspan="1" class"col-md-4"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">CARGO</td>
			<td    colspan="3" class"col-md-2" ><?php echo  $modeloCargo["nombreCargo"];?></td>	
			<td    colspan="2" class"col-md-4"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">AREA</td>
			<td    colspan="3" class"col-md-2" ><?php echo  $modeloArea["nombreArea"];?></td>	
		</tr>
		<tr>
			<td    colspan="1" class"col-md-4"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">CONTACTO DE EMERGENCIA</td>
			<td    colspan="3" class"col-md-2" ><?php echo  $model["contactoEmergencia"];?></td>	
			<td    colspan="2" class"col-md-4"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">TELEFONO</td>
			<td    colspan="3" class"col-md-2" ><?php echo  $model["telefonoContacto"];?></td>	
		</tr>
		<tr>
			<td    colspan="1" class"col-md-4"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">CARNET</td>
			<td    colspan="3" class"col-md-2" ><?php echo  $model["carnet"];?></td>	
			<td    colspan="2" class"col-md-4"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">NUMERO DE CUENTA</td>
			<td    colspan="3" class"col-md-2" ><?php echo  $model["numeroCuenta"];?></td>	
		</tr>

	    <tr>
				<td    colspan="1" class"col-md-4"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">CÓDIGO NOMINA</td>
				<td    colspan="3" class"col-md-4"   ><?php echo $model["codigoNomina"];?></td>
				<td    colspan="2" class"col-md-4"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA"> ESTADO</td>
				<td    colspan="2" class"col-md-4"   ><?php echo $model["estado"];?></td>
		</tr>
		<tr>
				<td    colspan="1" class"col-md-4"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">EMAIL</td>
				<td    colspan="3" class"col-md-4"   ><?php echo $modeloInformacionPersonal["correo"];?></td>
				
		
		<tr>
			<td  colspan="9"  align="center" style="COLOR: #000000; BACKGROUND-COLOR: #FF8D4B"><h5>INFORMACION FAMILIAR </h5></td>
		</tr>
		<tr>
			<td    colspan="1" class"col-md-4"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">TIEMPO DE CASADO</td>
			<td    colspan="3" class"col-md-2" ><?php echo  $modeloInformacionPersonal["tiempoCasado"];?></td>	
			<td    colspan="2" class"col-md-4"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">NUMERO DE HIJOS</td>
			<td    colspan="3" class"col-md-2" ><?php echo  $modeloInformacionPersonal["numeroHijos"];?></td>	
		</tr>
		<tr>
			<td    colspan="1" class"col-md-1"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA"><h6>PARENTESCO</h6></td>
			<td    colspan="2" class"col-md-5"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA"><h6>NOMBRE</h6></td>
			<td    colspan="1" class"col-md-1"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA"><h6>FECHA DE NACIMIENTO<h6></td>
			<td    colspan="1" class"col-md-1"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA"><h6>EDAD</h6></td>
			<td    colspan="1" class"col-md-1"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA"><h6>ESCOLARIDAD</td>
			<td    colspan="1" class"col-md-1"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA"><h6>OCUPACION</h6></td>
			<td    class"col-md-1"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA"><h6>VIVE CON EMPLEADO</h6></td>
			<td    colspan="1" class"col-md-1"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA"><h6>DEPENDE DE EMPLEADO</h6></td>
		</tr>
		<?php 
		     	// for ($i=0; $i <count($arrArticulos) ; $i++) {           
			     //   echo $arrArticulos [$i][1]."<br>";		         			
		      //   	}	
		      		 			
 ?>
			 <?php if ($id =="0"): 
				
		     	 for ($i=0; $i <count($modeloInformacionFamiliar) ; $i++) { 
		
		     	 			 	$edad=$modeloInformacionFamiliar[$i]["fechaDeNacimiento"];
		     	 			 	$dia = substr($edad, 8, 2);
								$mes   = substr($edad, 5, 2);
							 	$año=substr($edad, 0,4);
		     	 			  	$hoy =date("Y"); 
		     	 			 	$hoymes = date("m"); 
		     	 			 	$hoydia=date("d"); 
		     	 			 	$edad=($hoy-$año);
		     	 			 	//var_dump($edad);

		     	 			 	if ($mes>$hoymes) {
		     	 			 		
		     	 			 			$edad=$edad-1;
		     	 			 		     	 			 		
		     	 			 	}

		     	 			 	if ($mes==$hoymes) {
		     	 			 		if ($dia<$hoydia) {
		     	 			 			$edad=$edad-1;
		     	 			 		}		     	 			 		
		     	 			 	}


		     	 			 	// $interval->format('%R%a year');
		     	 			 	// $interval = date_diff($edad, $hoy);
		     	 			 	
		     	 						 //1990-06-30 year
			 ?>
			
			 	<tr>
						<td    colspan="1" class"col-md-1"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">
															    <?php echo  $modeloInformacionFamiliar[$i]["parantesco"];?></td>
						<td    colspan="2" class"col-md-5" ><?php echo  $modeloInformacionFamiliar[$i]["nombreFamiliar"];?></td>
						<td    colspan="1" class"col-md-1" ><?php echo  $modeloInformacionFamiliar[$i]["fechaDeNacimiento"];?></td>
						<td    colspan="1" align="center" class"col-md-1" ><?php echo $edad ?></td>
						<td    colspan="1" class"col-md-1" ><?php echo  $modeloInformacionFamiliar[$i]["escolaridad"];?></td>
						<td    colspan="1" class"col-md-1" ><?php echo  $modeloInformacionFamiliar[$i]["ocupacion"];?></td>
						<td    colspan="1" align="center" class"col-md-1" ><?php echo  $modeloInformacionFamiliar[$i]["viveConEmpleado"];?></td>
						<td    colspan="1" align="center" class"col-md-1" ><?php echo  $modeloInformacionFamiliar[$i]["dependeDelEmpleado"];?></td>
						
					</tr>
			 <?php 
			 	 
			 }	
			 endif ?>
		<tr>
			<td  colspan="9"  align="center" style="COLOR: #000000; BACKGROUND-COLOR: #FF8D4B"><h5>INFORMACION ACADEMICO </h5></td>
		</tr>

		<tr>
			<td    colspan="3" class"col-md-4"   align="center" style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">ESCOLARIDAD</td>
			<td    colspan="3" class"col-md-4"   align="center" style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">TITULO OBTENIDO</td>
			<td    colspan="3" class"col-md-4"   align="center" style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">INSTITUCION</td>
			
		</tr>
		<tr>

			<td    colspan="3" class"col-md-4"  align="center">
				<?php echo  $modeloInformacionAcademica["escolaridad"];?></td>
			<td    colspan="3" class"col-md-4"   align="center">
				<?php echo  $modeloInformacionAcademica["tituloObtenido"];?></td>
			<td    colspan="3" class"col-md-4"  align="center">
				<?php echo  $modeloInformacionAcademica["institucion"];?></td>
			
		</tr>

		<tr>
			<td    colspan="3" class"col-md-4"   align="center" style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">ESTUDIA ACTUALMENTE</td>
			<td    colspan="6" class"col-md-4"   align="center" ><?php echo  $modeloEstadoEstudiantil["estadoEstudiante"];?></td>

		</tr>

		<?php if ( $modeloEstadoEstudiantil["estadoEstudiante"]=="Si"): ?>
		
			<tr>
				<td    colspan="2" class"col-md-4"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">TITULO DE LA CARRERA</td>
				<td    colspan="3" class"col-md-4"   align="center" ><?php echo  $modeloEstadoEstudiantil["tituloCarrera"];?></td>	
				<td    colspan="1" class"col-md-4"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">SEMESTRE ACTUALMENTE</td>
				<td    colspan="1" class"col-md-4"   align="center" ><?php echo  $modeloEstadoEstudiantil["semestreActual"];?></td>
				<td    colspan="1" class"col-md-4"    style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">AÑO DE TERMINACION</td>
				<td    colspan="1" class"col-md-4"   align="center" ><?php echo  $modeloEstadoEstudiantil["FechaTerminacion"];?></td>
			</tr>
	<?php endif ?>
		<tr>
			<td  colspan="9"  align="center" style="COLOR: #000000; BACKGROUND-COLOR: #FF8D4B"><h5>INFORMACION VIVIENDA </h5></td>
		</tr>

		<tr>
				<td    colspan="3" class"col-md-4"   align="center" style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">N°DE PERSONAS QUE HABITAN LA VIVIENDA</td>
				<td    colspan="1" class"col-md-4"   align="center" ><?php echo  $modeloInformacionVivienda["numeroDeHabitantes"];?></td>	
				<td    colspan="2" class"col-md-4"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">INDICE DE HACIMIENTO</td>
				<td    colspan="1" class"col-md-4"   align="center" ><?php echo  $modeloInformacionVivienda["indiceHacimiento"];?></td>
				<td    colspan="1" class"col-md-4"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">ESTRATO SOCIOECONOMICO</td>
				<td    colspan="1" class"col-md-4"   align="center" ><?php echo  $modeloInformacionVivienda["estrato"];?></td>
			</tr>

			<tr>
				<td    colspan="1" class"col-md-4"   align="center" style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">TENDENCIA DE LA VIVIENDA</td>
				<td    colspan="3" class"col-md-4"   align="center" ><?php echo  $modeloInformacionVivienda["tenenciaDeLaVivienda"];?></td>	
				<td    colspan="2" class"col-md-4"   align="center" style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">TIPO DE VIVIENDA</td>
				<td    colspan="3" class"col-md-4"   align="center" ><?php echo  $modeloInformacionVivienda["tipoDeVivienda"];?></td>
				
			</tr>

			<tr>
				<td    colspan="3" class"col-md-4"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">COMODIDADES DE LA VIVIENDA</td>
				<td    colspan="3" class"col-md-4"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">SERVICIO DE LA VIVIENDA</td>			
				<td    colspan="3" class"col-md-4"    style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">MOBILARIO DE LA VIVIENDA</td>	
			</tr>

			<tr>
				<td    colspan="3" class"col-md-4"   align="center" style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">COCINA</td>
				<td    colspan="1" class"col-md-4"   align="center" ><?php echo  $modeloInformacionVivienda["cocina"];?></td>	
				<td    colspan="2" class"col-md-4"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">AGUA</td>
				<td    colspan="1" class"col-md-4"   align="center" ><?php echo  $modeloInformacionVivienda["agua"];?></td>
				<td    colspan="1" class"col-md-4"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">TELEVISION</td>
				<td    colspan="1" class"col-md-4"   align="center" ><?php echo  $modeloInformacionVivienda["television"];?></td>
			</tr>

			<tr>
				<td    colspan="3" class"col-md-4"   align="center" style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">BAÑOCOMUN</td>
				<td    colspan="1" class"col-md-4"   align="center" ><?php echo  $modeloInformacionVivienda["bañoComun"];?></td>
				<td    colspan="2" class"col-md-4"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">BAÑOPRIVADO</td>
				<td    colspan="1" class"col-md-4"   align="center" ><?php echo  $modeloInformacionVivienda["bañoPrivado"];?></td>
				<td    colspan="1" class"col-md-4"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">SALA</td>
				<td    colspan="1" class"col-md-4"   align="center" ><?php echo  $modeloInformacionVivienda["sala"];?></td>
			</tr>

			<tr>
			    <td    colspan="3" class"col-md-4"   align="center" style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">COMEDOR</td>
				<td    colspan="1" class"col-md-4"   align="center" ><?php echo  $modeloInformacionVivienda["comedor"];?></td>
				<td    colspan="2" class"col-md-4"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">SALACOMEDOR</td>
				<td    colspan="1" class"col-md-4"   align="center" ><?php echo  $modeloInformacionVivienda["salaComedor"];?></td>
				<td    colspan="1" class"col-md-4"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">ZONADEROPA</td>
				<td    colspan="1" class"col-md-4"   align="center" ><?php echo  $modeloInformacionVivienda["zonaDeRopa"];?></td>
			</tr>
			<tr>
			    <td    colspan="3" class"col-md-4"   align="center" style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">AGUA</td>
				<td    colspan="1" class"col-md-4"   align="center" ><?php echo  $modeloInformacionVivienda["agua"];?></td>
				<td    colspan="2" class"col-md-4"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">ELECTRICIDAD</td>
				<td    colspan="1" class"col-md-4"   align="center" ><?php echo  $modeloInformacionVivienda["electricidad"];?></td>
				<td    colspan="1" class"col-md-4"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">GAS</td>
				<td    colspan="1" class"col-md-4"   align="center" ><?php echo  $modeloInformacionVivienda["gas"];?></td>
			</tr>
			<tr>
			    <td    colspan="3" class"col-md-4"   align="center" style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">TELEFONO</td>
				<td    colspan="1" class"col-md-4"   align="center" ><?php echo  $modeloInformacionVivienda["telefono"];?></td>
				<td    colspan="2" class"col-md-4"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">INTERNET</td>
				<td    colspan="1" class"col-md-4"   align="center" ><?php echo  $modeloInformacionVivienda["internet"];?></td>
				<td    colspan="1" class"col-md-4"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">TELEVISIONPORCABLE</td>
				<td    colspan="1" class"col-md-4"   align="center" ><?php echo  $modeloInformacionVivienda["televisionPorCable"];?></td>
			</tr>
			<tr>
			    <td    colspan="3" class"col-md-4"   align="center" style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">OTROS</td>
				<td    colspan="1" class"col-md-4"   align="center" ><?php echo  $modeloInformacionVivienda["otros"];?></td>
				<td    colspan="2" class"col-md-4"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">TELEVISION</td>
				<td    colspan="1" class"col-md-4"   align="center" ><?php echo  $modeloInformacionVivienda["television"];?></td>
				<td    colspan="1" class"col-md-4"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">EQUIPODESONIDO</td>
				<td    colspan="1" class"col-md-4"   align="center" ><?php echo  $modeloInformacionVivienda["equipoDeSonido"];?></td>
			</tr>
			<tr>
			    <td    colspan="3" class"col-md-4"   align="center" style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">LAVADORA</td>
				<td    colspan="1" class"col-md-4"   align="center" ><?php echo  $modeloInformacionVivienda["lavadora"];?></td>
				<td    colspan="2" class"col-md-4"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">ESTUFA</td>
				<td    colspan="1" class"col-md-4"   align="center" ><?php echo  $modeloInformacionVivienda["estufa"];?></td>
				<td    colspan="1" class"col-md-4"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">DVD</td>
				<td    colspan="1" class"col-md-4"   align="center" ><?php echo  $modeloInformacionVivienda["dvd"];?></td>
			</tr>
			<tr>
			    <td    colspan="3" class"col-md-4"   align="center" style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">MICROONDAS</td>
				<td    colspan="1" class"col-md-4"   align="center" ><?php echo  $modeloInformacionVivienda["microondas"];?></td>
				<td    colspan="2" class"col-md-4"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">PC</td>
				<td    colspan="3" class"col-md-4"   align="center" ><?php echo  $modeloInformacionVivienda["pc"];?></td>

				
			</tr>
			<tr>
			<td  colspan="9"  align="center" style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA"><h5>MATERIAL PREDOMINANTE EN LA CONSTRUCCION DE LA 
			 VIVIENDA </h5></td>
			</tr>
			<tr>
				<td    colspan="3" class"col-md-4"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">PAREDES</td>
				<td    colspan="1" class"col-md-4"   align="center" ><?php echo  $modeloInformacionVivienda["paredes"];?></td>
			    <td    colspan="2" class"col-md-4"   align="center" style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">TECHO</td>
				<td    colspan="1" class"col-md-4"   align="center" ><?php echo  $modeloInformacionVivienda["techo"];?></td>
				 <td    colspan="1" class"col-md-4"   align="center" style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">PISO</td>
				<td    colspan="1" class"col-md-4"   align="center" ><?php echo  $modeloInformacionVivienda["piso"];?></td>
			</tr>

		<tr>
			<td  colspan="9"  align="center" style="COLOR: #000000; BACKGROUND-COLOR: #FF8D4B"><h5>INFORMACION ECONOMICA </h5></td>
		</tr>

		<tr>
				<td    colspan="3" class"col-md-4"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">INGRESO 1</td>
				<td    colspan="2" class"col-md-4"   align="center" ><?php echo  $modeloInformacionEconomica["primerIngreso"];?></td>
				<td    colspan="2" class"col-md-4"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">ARRIENDO</td>
				<td    colspan="2" class"col-md-4"   align="center" ><?php echo  $modeloInformacionEconomica["arriendo"];?></td>
				
			  
			</tr>
			<tr>
				 <td    colspan="3" class"col-md-4"    style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">INGRESO2</td>
				<td    colspan="2" class"col-md-4"   align="center" ><?php echo  $modeloInformacionEconomica["segundoIngreso"];?></td>
				<td    colspan="2" class"col-md-4"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">SERVICIOS PUBLICO</td>
				<td    colspan="2" class"col-md-4"   align="center" ><?php echo  $modeloInformacionEconomica["serviciosPublicos"];?></td>
				
			</tr>

			<tr>

				 <td    colspan="3" class"col-md-4"    style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">OTROS INGRESOS</td>
				<td    colspan="2" class"col-md-4"   align="center" ><?php echo  $modeloInformacionEconomica["otrosIngresos"];?></td>
				<td    colspan="2" class"col-md-4"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">INTERNET</td>
				<td    colspan="2" class"col-md-4"   align="center" ><?php echo  $modeloInformacionEconomica["internet"];?></td>
				
			</tr>

			<tr>
				<td    colspan="5" class"col-md-4"></td>
				<td    colspan="2" class"col-md-4"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">TELEFONIA</td>
				<td    colspan="2" class"col-md-4"   align="center" ><?php echo  $modeloInformacionEconomica["telefonia"];?></td>
				
				
			</tr>
			<tr>
				<td    colspan="5" class"col-md-4"></td>
				<td    colspan="2" class"col-md-4"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">CABLE</td>
				<td    colspan="2" class"col-md-4"   align="center" ><?php echo  $modeloInformacionEconomica["cable"];?></td>
			</tr>

				<tr>
				<td    colspan="5" class"col-md-4"></td>
				<td    colspan="2" class"col-md-4"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">ALIMENTACION</td>
				<td    colspan="2" class"col-md-4"   align="center" ><?php echo  $modeloInformacionEconomica["alimentacion"];?></td>
				</tr>

				<tr>
				<td    colspan="5" class"col-md-4"></td>
				<td    colspan="2" class"col-md-4"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">TRANSPORTE</td>
				<td    colspan="2" class"col-md-4"   align="center" ><?php echo  $modeloInformacionEconomica["transporte"];?></td>
				</tr>

				<tr>
				<td    colspan="5" class"col-md-4"></td>
				<td    colspan="2" class"col-md-4"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">CELULAR</td>
				<td    colspan="2" class"col-md-4"   align="center" ><?php echo  $modeloInformacionEconomica["celular"];?></td>
				</tr>

				<tr>
				<td    colspan="5" class"col-md-4"></td>
				<td    colspan="2" class"col-md-4"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">EDUCACION</td>
				<td    colspan="2" class"col-md-4"   align="center" ><?php echo  $modeloInformacionEconomica["educacion"];?></td>
				</tr>

				<tr>
				<td    colspan="5" class"col-md-4"></td>
				<td    colspan="2" class"col-md-4"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">VEHICULO</td>
				<td    colspan="2" class"col-md-4"   align="center" ><?php echo  $modeloInformacionEconomica["vehiculo"];?></td>
				</tr>

				<tr>
				<td    colspan="5" class"col-md-4"></td>
				<td    colspan="2" class"col-md-4"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">PRESTACIONESCOMERCIAL</td>
				<td    colspan="2" class"col-md-4"   align="center" ><?php echo  $modeloInformacionEconomica["prestacionesComercial"];?></td>
				</tr>

				<tr>
				<td    colspan="5" class"col-md-4"></td>
				<td    colspan="2" class"col-md-4"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">PRESTAMOSBANCARIO</td>
				<td    colspan="2" class"col-md-4"   align="center" ><?php echo  $modeloInformacionEconomica["prestamosBancario"];?></td>
				</tr>

				<tr>
				<td    colspan="5" class"col-md-4"></td>
				<td    colspan="2" class"col-md-4"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">HIPOTECA</td>
				<td    colspan="2" class"col-md-4"   align="center" ><?php echo  $modeloInformacionEconomica["hipoteca"];?></td>
				</tr>

				<tr>
				<td    colspan="5" class"col-md-4"></td>
				<td    colspan="2" class"col-md-4"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">VESTIDOYCALZADO</td>
				<td    colspan="2" class"col-md-4"   align="center" ><?php echo  $modeloInformacionEconomica["vestidoYCalzado"];?></td>
				</tr>

				<tr>
				<td    colspan="5" class"col-md-4"></td>
				<td    colspan="2" class"col-md-4"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">RECREACION</td>
				<td    colspan="2" class"col-md-4"   align="center" ><?php echo  $modeloInformacionEconomica["recreacion"];?></td>
				</tr>


			<tr>
			    <td    colspan="3" class"col-md-4"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">TOTAL INGRESOS</td>
				<td    colspan="2" class"col-md-4"   align="center" ><?php echo  $modeloInformacionEconomica["totalIngresos"];?></td>
				<td    colspan="1" class"col-md-4"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">TOTAL GASTOS</td>
				<td    colspan="1" class"col-md-4"   align="center" ><?php echo  $modeloInformacionEconomica["totalGastos"];?></td>
				<td    colspan="1" class"col-md-4"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">SALDO FINAL</td>
				<td    colspan="1" class"col-md-4"   align="center" ><?php echo  $modeloInformacionEconomica["saldoFinal"];?></td>
			</tr>
			<tr>
			<td  colspan="9"  align="center" style="COLOR: #000000; BACKGROUND-COLOR: #FF8D4B"><h5>EXPERIENCIA LABORAL</h5></td>
		   </tr>
		   <tr>
			    <td    colspan="1" class"col-md-2"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">EMPRESA</td>
				<td    colspan="2" class"col-md-2"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">CARGO</td>
				<td    colspan="2" class"col-md-4"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">FUNCIONES</td>
				<td    colspan="2" class"col-md-4"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">FECHA INICIO</td>
				<td    colspan="2" class"col-md-4"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">FECHA RETIRO</td>
									
			</tr>
				 <?php if ($id =="0"): 
				
		     	 for ($i=0; $i <count($modeloExperienciaLaboral) ; $i++) { 
		 
			 ?>
			 	<tr>				
						<td    colspan="1" class"col-md-2" ><?php echo  $modeloExperienciaLaboral[$i]["empresa"];?></td>
						<td    colspan="2" class"col-md-2" ><?php echo  $modeloExperienciaLaboral[$i]["cargo"];?></td>
						<td    colspan="2" class"col-md-2" ><?php echo  $modeloExperienciaLaboral[$i]["funciones"];?></td>
						<td    colspan="2" class"col-md-4" ><?php echo  $modeloExperienciaLaboral[$i]["fecha_inicio"];?></td>
						<td    colspan="2" class"col-md-4" ><?php echo  $modeloExperienciaLaboral[$i]["fecha_retiro"];?></td>						
					</tr>
			 <?php 
			 	 
			 }	
			 endif ?>



			<tr>
			<td  colspan="9"  align="center" style="COLOR: #000000; BACKGROUND-COLOR: #FF8D4B"><h5>INFORMACION CONTRATO </h5></td>
		   </tr>
		   	<tr>
			    <td    colspan="2" class"col-md-4"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">TIPO CONTRATO</td>
				<td    colspan="2" class"col-md-4"   align="center" ><?php echo  $modeloContrato["tipoContrato"];?></td>
				<td    colspan="2" class"col-md-4"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">FECHA PRIMER CONTRATO</td>
				<td    colspan="3" class"col-md-4"   align="center" ><?php echo  $modeloContrato["fechaPrimerContrato"];?></td>
			
			</tr>
			<tr>
			    <td    colspan="2" class"col-md-4"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">FECHA INGRESO</td>
				<td    colspan="2" class"col-md-4"   align="center" ><?php echo  $modeloContrato["fechaIngreso"];?></td>
				<td    colspan="2" class"col-md-4"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">FECHA RETIRO</td>
				<td    colspan="3" class"col-md-4"   align="center" ><?php echo  $modeloContrato["fechaDeRetiro"];?></td>
			</tr>
		 

		  <tr>
			<td  colspan="9"  align="center" style="COLOR: #000000; BACKGROUND-COLOR: #FF8D4B"><h5>INFORMACION DOTACION </h5></td>
		   </tr>

		
		   	<tr>
			    <td    colspan="4" class"col-md-4"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">CAMISA</td>
				<td    colspan="5" class"col-md-4"   align="center" ><?php

					$modeloArticuloDotacion=Articulosdedotacion::model()->findByPk($modeloDotacion["camisa"]);
					//echo $modeloArticuloDotacion["nombre"];
					echo $modeloArticuloDotacion["nombre"];

					



				 ?></td>
			</tr>

			<tr>
				<td    colspan="4" class"col-md-4"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">CALZADO</td>
				<td    colspan="5" class"col-md-4"   align="center" ><?php 

				$modeloArticuloDotacion=Articulosdedotacion::model()->findByPk($modeloDotacion["calzado"]);
					echo $modeloArticuloDotacion["nombre"];
					
					
					//echo $modeloDotacion["calsado"];
					
					?></td>
			</tr>
			   <tr>
			    <td    colspan="4" class"col-md-4"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">PANTALON</td>
				<td    colspan="5" class"col-md-4"   align="center" ><?php 

				$modeloArticuloDotacion=Articulosdedotacion::model()->findByPk($modeloDotacion["pantalon"]);
					//echo $modeloArticuloDotacion["nombre"];
					echo $modeloArticuloDotacion["nombre"];

					
					?></td>
			</tr>
			<tr>
				<td    colspan="4" class"col-md-4"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">DELANTE</td>
				<td    colspan="5" class"col-md-4"   align="center" ><?php 

				$modeloArticuloDotacion=Articulosdedotacion::model()->findByPk($modeloDotacion["delantal"]);
					echo $modeloArticuloDotacion["nombre"];
					//echo $modeloDotacion["nombre"];

					
					?></td>
			</tr>
			<tr>
				<td    colspan="4" class"col-md-4"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">OVEROL</td>
				<td    colspan="5" class"col-md-4"   align="center" ><?php 

				$modeloArticuloDotacion=Articulosdedotacion::model()->findByPk($modeloDotacion["overol"]);
					echo $modeloArticuloDotacion["nombre"];
					//echo $modeloDotacion["nombre"];

					
					?></td>
			</tr>
			<tr>
				<td    colspan="4" class"col-md-4"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">OTRAS DOTACIONES</td>
				<td    colspan="5" class"col-md-4"   align="center" ><?php 

				$modeloArticuloDotacion=Articulosdedotacion::model()->findByPk($modeloDotacion["otrasDotaciones"]);
					echo $modeloArticuloDotacion["nombre"];
					//echo $modeloDotacion["nombre"];

					
					?></td>
			</tr>

		 <tr>
			<td  colspan="9"  align="center" style="COLOR: #000000; BACKGROUND-COLOR: #FF8D4B"><h5>SEGURIDAD SOCIAL </h5></td>
		 </tr>
		 
		  <tr>
			    <td    colspan="4" class"col-md-4"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">CENSANTIAS</td>
				<td    colspan="5" class"col-md-4"   align="center" ><?php echo  $modeloSeguridad["censantias"];?></td>
		  </tr>
		 <tr>
				<td    colspan="4" class"col-md-4"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">AFP</td>
				<td    colspan="5" class"col-md-4"   align="center" ><?php echo  $modeloSeguridad["afp"];?></td>
		</tr>	
		 <tr>
				<td    colspan="4" class"col-md-4"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">EPS</td>
				<td    colspan="5" class"col-md-4"   align="center" ><?php echo  $modeloSeguridad["eps"];?></td>
			
		 </tr>
		

	</tbody>

</table>

<footer>
		<div align="center"  class="col-md-12">
			<img src="<?php echo Yii::app()->baseUrl;?>/images/logoLimpio.jpg" width='150px' height="50px">
		</div>
	</footer>

 <?php 
/*
<table class="table table-bordered ">
	<tr>
		

		<td class="col-md-12" align="center"><h4>
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		&nbsp&nbsp&nbsp&nbsp&nbsp
		HOJA DE VIDA 
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		&nbsp&nbsp&nbsp
	</h4></td>
		<td class="col-md-2"><img type="button" name="imprimir" value="Imprimir P&aacute;gina" onclick="window.print();" src="<?php //echo Yii::app()->baseUrl;?>/images/logoLimpio.jpg" width='150px' height="50px"></td>

	</tr>	
 
 </table>
<br>

 <table class="col-md-12 " align="center">
	<tr>
		<td class="col-md-2"></td>
		<td class="col-md-2"></td>
		<td class="col-md-2"></td>
		<td class="col-md-2"></td>
		<td class="col-md-2"></td>
		<td class="col-md-2"></td>

	</tr>	
 
 </table>
 <br>
<!-- empieza el ceurpo de la carta remisora-->


<!--table class="table table-bordered " id="border" >
      <tbody>
         <tr>
			<td colspan="1" style="COLOR: #000000; BACKGROUND-COLOR: #f36815">
				
			FECHA DE INGRESO
			</td>
			<td colspan="6">
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		&nbsp&nbsp&nbsp&nbsp&nbsp
			</td>
			<td  class="col-md-1" rowspan=" 8">
			<?php 
             //if(file_exists("images/Informacionempleado/thumbs/t_".$model->id.".jpg")){
              //   echo "<img src='images/fotos/".$model->id.".jpg'> ";
             //}else{    
             //   echo "<img src='images/fotos/".$model->id.".jpg'> ";
             }
             ?>
			</td>
		</tr>
        <tr>
	        <td >
			NOMBRE COMPLETO
			</td>
			<td colspan="2">
			
			</td>
			 <td >
				RH
			</td>
			<td colspan="2">
			
			</td>
        </tr>
        <tr>
           <td >
			NÚMERO DE DOCUMENTO
			</td>
			<td colspan="6">
			
			</td
        </tr>
        <tr>
          <td >
			FECHA DE NACIMIENTO
			</td>
			<td colspan="6">
			
			</td
        </tr>
      </tbody>
    </table>




    <!--table class="table table-bordered" >
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
		     	// for ($i=0; $i <count($arrArticulos) ; $i++) {           
			     //   echo $arrArticulos [$i][1]."<br>";		         			
		      //   	}	
			 ?>
			 </td>
			<td colspan="5">
			<?php 
		     	// for ($i=0; $i <count($arrArticulos) ; $i++) {           
			     //   echo $arrArticulos [$i][0]."<br>";		         			
		      //   	}	
			 ?>
			</td>
			<td>
			<?php 
		     	// for ($i=0; $i <count($arrArticulos) ; $i++) {           
			     //   echo $arrArticulos [$i][2]."<br>";		         			
		      //   	}	
			 ?>
			</td>
		</tr>
      </tbody>
    </table>
<?php
/* @var $this ArticulosPrestamoClienteController */
/* @var $model ArticulosPrestamoCliente */
/* @var $form CActiveForm 

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

*/
  ?>
