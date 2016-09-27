<?php 
$informe=Yii::app()->session['id'];

ini_set('date.timezone','America/Bogota'); 
$fecha = date("d/m/Y");
$hora = date("g:i A");       
//$modeloRegistro=Registroingresovehiculo::model()->findAll();
$modeloRegistro=Registroingresovehiculo::model()->findAll(array('order' => 'fecha ASC'));

?>

<script>
function myFunction() {
	event.preventDefault();
    document.getElementById("demo").innerHTML = "Hello World";
}
</script>

<table class="table table-bordered ">
	<!-- <caption>HOJA DE VIDA</caption> -->
	<thead>
		<tr>
			<td colspan="8"  align="center" ><h5>INFORME VEHICULO </h5></td>
			<td  colspan="1" ><img type="button" name="imprimir" value="Imprimir P&aacute;gina" onclick="window.print();" src="<?php echo Yii::app()->baseUrl;?>/images/logoLimpio.jpg" width='150px' height="50px"></td>
		</tr>
	
	</thead>
	<tbody >
		
		<tr>
			<td  colspan="9"  align="center" style="COLOR: #000000; BACKGROUND-COLOR: #FF8D4B"><h2>Informe Vehiculo placa <?php echo $informe[0];  ?></h2></td>
			
		</tr>
	</tbody>


</table>

<br>
<table class="table table-bordered ">
	<tbody >
	
			

			
			<?php 
				$modeloVehiculo=Vehiculo::model()->findByPk($informe[0]);


			?>
			<tr>
				<td    colspan="2" class"col-md-4" align="center"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">PLACA</td>
				<td    colspan="1" class"col-md-2" align="center"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">MODELO</td>
				<td    colspan="3" class"col-md-4" align="center"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">PROPIETARIO</td>
			</tr>
			
				<tr>
				<td    colspan="2" class"col-md-4"   align="center" ><?php echo  $modeloVehiculo["placa"];?></td>
				<td    colspan="1" class"col-md-2"   align="center" ><?php echo  $modeloVehiculo["modelo"];?></td>
				<td    colspan="3" class"col-md-4"   align="center" ><?php echo  $modeloVehiculo["propietario"]?></td>
			
				</tr>

				<tr>
				<td    colspan="2" class"col-md-4" align="center"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">SOAT</td>
				<td    colspan="2" class"col-md-4"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA" align="center" ></td>
				<td    colspan="2" class"col-md-4" align="center"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">RTM</td>
				
			</tr>
			
				<tr>
				<td    colspan="2" class"col-md-4"   align="center" ><?php echo  $modeloVehiculo["soat"];?></td>
				<td    colspan="2" class"col-md-4"   align="center" ></td>
				<td    colspan="2" class"col-md-4"   align="center" ><?php echo  $modeloVehiculo["rtm"];?></td>
				</tr>


			?>


				<tr>
				<td  colspan="6" align="center"  ><img src="<?php echo Yii::app()->baseUrl;?>/images/Vehiculos/<?php echo $informe[0];?>.jpg" width='500px' height="200px"></td>
				

				</tr>


			<?php 
				
				$modeloConductor=Registroconductores::model()->findByAttributes(array('nombre'=>$modeloVehiculo["conductor"]));
				$modeloAyudante=Registroconductores::model()->findByAttributes(array('nombre'=>$modeloVehiculo["ayudante"]));
				

			?>
			<tr>
				<td    colspan="3" class"col-md-4" align="center"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">CONDUCTOR</td>
				<td    colspan="3" class"col-md-4" align="center"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">AUXILIAR</td>
				
			</tr>

			<tr>
				<td  colspan="3" align="center"  ><img src="<?php echo Yii::app()->baseUrl;?>/images/Conductores/CONDUCTOR-<?php echo $informe[0];?>.jpg" width='130px' height="100px"></td>
				<td  colspan="3" align="center"  ><img src="<?php echo Yii::app()->baseUrl;?>/images/Conductores/AUXILIAR-<?php echo $informe[0];?>.jpg" width='130px' height="100px"></td>
				
			</tr>
			
			
				<tr>
				<td    colspan="1" class"col-md-4" align="center"   style="COLOR: #000000; BACKGROUND-COLOR: #FF8D4B">CEDULA</td>
				<td    colspan="2" class"col-md-4"   align="center" ><?php echo  $modeloConductor["cc"];?></td>
				<td    colspan="1" class"col-md-4" align="center"   style="COLOR: #000000; BACKGROUND-COLOR: #FF8D4B">CEDULA</td>
				<td    colspan="2" class"col-md-4"   align="center" ><?php echo  $modeloAyudante["cc"];?></td>
				</tr>

				<tr>
				<td    colspan="1" class"col-md-4" align="center"   style="COLOR: #000000; BACKGROUND-COLOR: #FF8D4B">NOMBRE</td>
				<td    colspan="2" class"col-md-4"   align="center" ><?php echo  $modeloConductor["nombre"];?></td>
				<td    colspan="1" class"col-md-4" align="center"   style="COLOR: #000000; BACKGROUND-COLOR: #FF8D4B">NOMBRE</td>
				<td    colspan="2" class"col-md-4"   align="center" ><?php echo  $modeloAyudante["nombre"];?></td>
				</tr>
			

				<tr>
				<td    colspan="1" class"col-md-4" align="center"   style="COLOR: #000000; BACKGROUND-COLOR: #FF8D4B">EPS</td>
				<td    colspan="2" class"col-md-4"   align="center" ><?php echo  $modeloConductor["eps"];?></td>
				<td    colspan="1" class"col-md-4" align="center"   style="COLOR: #000000; BACKGROUND-COLOR: #FF8D4B">EPS</td>
				<td    colspan="2" class"col-md-4"   align="center" ><?php echo  $modeloAyudante["eps"];?></td>
				</tr>

				<tr>
				<td    colspan="1" class"col-md-4" align="center"   style="COLOR: #000000; BACKGROUND-COLOR: #FF8D4B">AFP</td>
				<td    colspan="2" class"col-md-4"   align="center" ><?php echo  $modeloConductor["afp"];?></td>
				<td    colspan="1" class"col-md-4" align="center"   style="COLOR: #000000; BACKGROUND-COLOR: #FF8D4B">AFP</td>
				<td    colspan="2" class"col-md-4"   align="center" ><?php echo  $modeloAyudante["afp"];?></td>
				</tr>

				<tr>
				<td    colspan="1" class"col-md-4" align="center"   style="COLOR: #000000; BACKGROUND-COLOR: #FF8D4B">ARL</td>
				<td    colspan="2" class"col-md-4"   align="center" ><?php echo  $modeloConductor["arl"];?></td>
				<td    colspan="1" class"col-md-4" align="center"   style="COLOR: #000000; BACKGROUND-COLOR: #FF8D4B">ARL</td>
				<td    colspan="2" class"col-md-4"   align="center" ><?php echo  $modeloAyudante["arl"];?></td>
				</tr>

					<tr>
				<td   colspan="1" class"col-md-4" align="center"   style="COLOR: #000000; BACKGROUND-COLOR: #FF8D4B">VIGENCIA SEGURIDAD</td>
				<td   colspan="2" class"col-md-4"   align="center" ><?php echo  $modeloConductor["vigenciaSeguridad"];?></td>
				<td   colspan="1" class"col-md-4" align="center"   style="COLOR: #000000; BACKGROUND-COLOR: #FF8D4B">VIGENCIA SEGURIDAD</td>
				<td   colspan="2" class"col-md-4"   align="center" ><?php echo  $modeloAyudante["vigenciaSeguridad"];?></td>
				</tr>
				
			?>




			


	</tbody>


</table>



<table class="table table-bordered ">
<tbody >
		
		<tr>
			<td  colspan="12"  align="center" style="COLOR: #000000; BACKGROUND-COLOR: #FF8D4B"><h2>Informe Ingreso Vehiculo</h2></td>
			
		</tr>
</tbody>

		
		<tbody>
			<tr>
				<td    colspan="3" class"col-md-4" align="center"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">FECHA</td>
				<td    colspan="3" class"col-md-4" align="center"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">PLACA</td>
				<td    colspan="3" class"col-md-4" align="center"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">HORA INGRESO</td>
				<td    colspan="3" class"col-md-4" align="center"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">HORA SALIDA</td>
				
			</tr>
		<?php
		for ($i=0; $i <count($modeloRegistro); $i++) { 
			$rest = substr($modeloRegistro[$i]["fecha"], 3, 2); 
			$mes = date("m");
			if ($modeloRegistro[$i]["placa"]==$informe[0] && $rest==$mes) {
				?>
				<tr align="center">
				<td colspan="3" class"col-md-4"   align="center" ><?php echo $modeloRegistro[$i]["fecha"];?></td>
				<td colspan="3" class"col-md-4"   align="center" ><?php echo $modeloRegistro[$i]["placa"];?></td>
				<td colspan="3" class"col-md-4"   align="center" ><?php echo $modeloRegistro[$i]["horaingreso"];?></td>
				<td colspan="3" class"col-md-4"   align="center" ><?php echo $modeloRegistro[$i]["horasalida"];?></td>
				</tr>
				<?php
			}
		}?>
		</tbody>
</table>

<footer>
		<div align="center"  class="col-md-12">
			<img src="<?php echo Yii::app()->baseUrl;?>/images/logoLimpio.jpg" width='150px' height="50px">
		</div>
</footer>


