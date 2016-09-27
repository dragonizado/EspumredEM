<?php 

$id="0";
 $arrMecanicos = array();
            $model["cc"];
            $modeloRegistro=Registro::model()->findAll();
            

                      for ($i=0; $i <count($modeloRegistro); $i++) { 
                      		$cont =0;
                          if ($modeloRegistro[$i]['idMecanico']== $model["cc"]) {
                        	$modelHerramienta=Herramientas::model()->findByPk($modeloRegistro[$i]['descripcion']);
                        		for ($j=0; $j <count($modeloRegistro); $j++) { 
                        			if ($modeloRegistro[$j]['idMecanico']== $model["cc"]) {
                        				$comparar=Herramientas::model()->findByPk($modeloRegistro[$j]['descripcion']);
                        				if ($modelHerramienta["nombre"]==$comparar["nombre"]) {
                        						$cont=$cont+1;
                        				}
                        			
                        			}
                        		}
                        	$item = array($modeloRegistro[$i] ["tipo"], $modelHerramienta["descripcion"], $modelHerramienta["nombre"],
                        	$modelHerramienta["marca"],$modelHerramienta["fechaDeBaja"],
                        	$modelHerramienta["fabricante"],$modelHerramienta["estado"],$modeloRegistro[$i]["cantidad"]);
                           	array_push($arrMecanicos,$item );
                           }

                      }
                      $arr = array();
                      $arrEliminar = array();
                      $indice;
                      $arr=$arrMecanicos;
                       

	                   for ($i=0; $i <count($arrMecanicos) ; $i++) { 
	                   	   $arrEliminar = array();
	                      for ($j=$i; $j <count($arr) ; $j++) { 	                     
	                      		if ($arr[$j][2]==$arrMecanicos[$i][2]) {
	                      		 	array_push($arrEliminar,$j );
	                      		}  

	                      		           
                      			
                      		}  
                      			 

                      	      

                      		
                      }

                      	//  for ($h=0; $h <count($arrEliminar) ; $h++) { 
                      	// 	     unset($arr[$arrEliminar[$h]]);
                      	// 	     $arr = array_values($arr);
                      	// 	   }   
                     
                      	// $arrMecanicos = $arr;
            
?>


<table class="table table-bordered ">
	<!-- <caption>HOJA DE VIDA</caption> -->
	<thead>
		<tr>
			<td colspan="8"  align="center" ><h5>Detalle Mecanico </h5></td>
			<td  colspan="1" ><img type="button" name="imprimir" value="Imprimir P&aacute;gina" onclick="window.print();" src="<?php echo Yii::app()->baseUrl;?>/images/logoLimpio.jpg" width='150px' height="50px"></td>
		</tr>
	
	</thead>
	<tbody >
		
		<tr>
			<td  colspan="9"  align="left" style="COLOR: #000000; BACKGROUND-COLOR: #FF8D4B"><h2><?php echo ($model["Nombre"]." ". $model["Apellido"])?></h2></td>
			
		</tr>
	</tbody>


</table>

<br>
<table class="table table-bordered ">
	<tbody >
	

			 
			<tr>
			    <td    colspan="1" class"col-md-4"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">HERRAMIENTAS</td>
				<td    colspan="1" class"col-md-4"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">DESCRIPCION</td>
				<td    colspan="1" class"col-md-4"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">CANTIDAD</td>
				<td    colspan="1" class"col-md-4"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">ESTADO HERRAMIENTA</td>
				<td    colspan="1" class"col-md-4"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">MARCA</td>
				<td    colspan="1" class"col-md-4"   style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">FABRICANTE</td>

			</tr>

			
			    <?php $cont=0; for ($i=0; $i <count($arrMecanicos) ; $i++) { 
			    	
			   ?>
			   <tr>
				<td    colspan="1" class"col-md-4"   align="center" ><?php echo  $arrMecanicos[$i][2];?></td>
				<td    colspan="1" class"col-md-4"   align="center" ><?php echo  $arrMecanicos[$i][0];?></td>
				<td    colspan="1" class"col-md-4"   align="center" ><?php echo  $arrMecanicos[$i][7]?></td>
				<td    colspan="1" class"col-md-4"   align="center" ><?php echo  $arrMecanicos[$i][6];?></td>
				<td    colspan="1" class"col-md-4"   align="center" ><?php echo  $arrMecanicos[$i][3];?></td>
				<td    colspan="1" class"col-md-4"   align="center" ><?php echo  $arrMecanicos[$i][5];?></td>
				</tr>
				<?php $cont++;} 

				?>
			


	</tbody>


</table>

<footer>
		<div align="center"  class="col-md-12">
			<img src="<?php echo Yii::app()->baseUrl;?>/images/logoLimpio.jpg" width='150px' height="50px">
		</div>
</footer>