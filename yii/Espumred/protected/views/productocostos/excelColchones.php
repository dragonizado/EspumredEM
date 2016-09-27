<?php 
$Rol= Yii::app()->user->rol;
$busquedad=Yii::app()->session['busquedad'];
if ($Rol=="costo"&& $busquedad=="MAYORISTAS") {
	$Rol="costoMayorista";
}

if ($Rol=="costo"&& $busquedad=="CORRERIA") {
	$Rol="costoExterno";
}
$medidas =array();
$medidas[0]="80*190";
$medidas[1]="90*190";
$medidas[2]="100*190";
$medidas[3]="110*190";
$medidas[4]="120*190";
$medidas[5]="130*190";
$medidas[6]="140*190";
$medidas[7]="150*190";
$medidas[8]="160*190";
$medidas[9]="170*190";
$medidas[10]="180*190";
$medidas[11]="190*190";
$medidas[12]="200*190";

$medidasEco =array();
$medidasEco[0]="90*190*15";
$medidasEco[1]="100*190*15";
$medidasEco[2]="120*190*15";
$medidasEco[3]="140*190*15";
$medidasEco[4]="100*190*18";
$medidasEco[5]="120*190*18";
$medidasEco[6]="140*190*18";
$medidasEco[7]="90*190*20";
$medidasEco[8]="100*190*20";
$medidasEco[9]="120*190*20";
$medidasEco[10]="140*190*20";


$medidasEcoCol =array();
$medidasEcoCol[0]="100*190*15";
$medidasEcoCol[1]="120*190*15";
$medidasEcoCol[2]="140*190*15";
$medidasEcoCol[3]="100*190*20";
$medidasEcoCol[4]="120*190*20";
$medidasEcoCol[5]="140*190*20";
$medidasEcoCol[6]="100*190*25";
$medidasEcoCol[7]="120*190*25";
$medidasEcoCol[8]="140*190*25";

$fecha = date("d-m-Y"); // fecha actual 
$mes = date("m"); // Mes actual 
$año=date("Y");
$meses=array();
$meses[0]="";
$meses[1]="ENERO";
$meses[2]="FEBRERO";
$meses[3]="MARZO";
$meses[4]="ABRIL";
$meses[5]="MAYO";
$meses[6]="JUNIO";
$meses[7]="JULIO";
$meses[8]="AGOSTO";
$meses[9]="SEPTIEMBRE";
$meses[10]="OCTUBRE";
$meses[11]="NOVIEMBRE";
$meses[12]="DICEIMBRE";


$FechaInforme=array();
$FechaInforme=Estadocosto::model()->findAll();


?>

<table border="1">
<br>
<br>
<tr rowspan="5">
<td  colspan="17"  rowspan="5" ><img src="http://sia1.subirimagenes.net/img/2014/11/13/141113124905320769.png" width='80px' height="25px"></td><!-- EMPIEZA LA CABEZERA DEL EXCEL-->
</tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr>
<td  colspan="17"  align="center" style="COLOR: #000000; BACKGROUND-COLOR: #FF8D4B">LISTA PRECIO COLCHONES</td>
<!-- EMPIEZA LA CABEZERA DEL EXCEL-->
</tr>


<tr>
<td></td>
<td  colspan="8"  align="center" style="COLOR: #000000; BACKGROUND-COLOR: #FF8D4B">LINEA PLUS</td>
<td  colspan="8"  align="center" style="COLOR: #000000; BACKGROUND-COLOR: #FF8D4B">LINEA JACKAR</td>
</tr>
<tr>
<td></td>
<td  colspan="2"  align="center" style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">EMPERADOR PLUS</td>
<td  colspan="2"  align="center" style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">EMPERADOR</td>
<td  colspan="2"  align="center" style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">SENSAFLEX C 30 PLUS</td>
<td  colspan="2"  align="center" style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">ORTOPEDICO PRO PLUS</td>
<td  colspan="2"  align="center" style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">SUPER ORTOPEDICO</td>
<td  colspan="2"  align="center" style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">ORTOPEDICO PRO</td>
<td  colspan="2"  align="center" style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">SENSAFLEX C 30</td>
<td  colspan="2"  align="center" style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">DUPLEX	</td>
</tr>
<tr>
<td align="center">Medida\Calibre</td>
<td></td>
<td align="center">34</td>
<td></td>
<td align="center">28</td>
<td></td>
<td align="center">25</td>
<td></td>
<td align="center">25</td>
<td></td>
<td align="center">22</td>
<td></td>
<td align="center">22</td>
<td></td>
<td align="center">22</td>
<td></td>
<td align="center">22</td>
</tr>

<!-- FOR PARA RECORRER EL MODELO EMPLEADO IDENTIFICANDO CADA EMPLEADO Y REGISTRANDOLO-->

<?php   for ($j=0; $j <count($medidas) ; $j++) { 

	for ($i=0; $i <count($model) ; $i++) { 
	

	if ($model[$i]["nombre"]=="COL EMPERADOR PLUS"&& $model[$i]["medidas"]==$medidas[$j]) {
?>	 	<td align="center"	><?php echo $model[$i]["medidas"];?></td>
			<td align="center"><?php echo $model[$i]["cod"];?></td>
			<?php if ($Rol=="costoMayorista"){
							?><td align="center"><?php echo "$".$model[$i]["precioMayoristas"];?></td><?php
						}else{
							?><td align="center"><?php echo "$".$model[$i]["precioCorreria"];?></td><?php

						}

						 ?>
			
<?php 
};

}; 	


		for ($h=0; $h <count($model) ; $h++) { 
			

			if ($model[$h]["nombre"]=="COL EMPERADOR"&& $model[$h]["medidas"]==$medidas[$j]) {
		?>
					<td align="center"><?php echo $model[$h]["cod"];?></td>
					<?php if ($Rol=="costoMayorista"){
							?><td align="center"><?php echo "$".$model[$h]["precioMayoristas"];?></td><?php
						}else{
							?><td align="center"><?php echo "$".$model[$h]["precioCorreria"];?></td><?php

						}

						 ?>
					
		<?php 
		}

		} 	


	 		for ($a=0; $a <count($model) ; $a++) { 
			

			if ($model[$a]["nombre"]=="COL SENSAFLEX C 30 PLUS"&& $model[$a]["medidas"]==$medidas[$j]) {
		?>
					<td align="center"><?php echo $model[$a]["cod"];?></td>
					<?php if ($Rol=="costoMayorista"){
							?><td align="center"><?php echo "$".$model[$a]["precioMayoristas"];?></td><?php
						}else{
							?><td align="center"><?php echo "$".$model[$a]["precioCorreria"];?></td><?php

						}

						 ?>
					
		<?php 
		}

		}

			for ($b=0; $b <count($model) ; $b++) { 
			

			if ($model[$b]["nombre"]=="COL ORTOPEDICO PRO PLUS"&& $model[$b]["medidas"]==$medidas[$j]) {
		?>
					<td align="center"><?php echo $model[$b]["cod"];?></td>
					<?php if ($Rol=="costoMayorista"){
							?><td align="center"><?php echo "$".$model[$b]["precioMayoristas"];?></td><?php
						}else{
							?><td align="center"><?php echo "$".$model[$b]["precioCorreria"];?></td><?php

						}

						 ?>
					
		<?php 
		}

		}

		for ($c=0; $c <count($model) ; $c++) { 
			

			if ($model[$c]["nombre"]=="COL SUPER ORTOPEDICO"&& $model[$c]["medidas"]==$medidas[$j]) {
		?>
					<td align="center"><?php echo $model[$c]["cod"];?></td>
					<?php if ($Rol=="costoMayorista"){
							?><td align="center"><?php echo "$".$model[$c]["precioMayoristas"];?></td><?php
						}else{
							?><td align="center"><?php echo "$".$model[$c]["precioCorreria"];?></td><?php

						}

						 ?>
					
		<?php 
		}

		}

		if ($j<9) {
			# code...
		

			



	for ($d=0; $d <count($model) ; $d++) { 
			

			if ($model[$d]["nombre"]=="COL ORTOPEDICO PRO"&& $model[$d]["medidas"]==$medidas[$j]) {
		?>
					<td align="center"><?php echo $model[$d]["cod"];?></td>
					<?php if ($Rol=="costoMayorista"){
							?><td align="center"><?php echo "$".$model[$d]["precioMayoristas"];?></td><?php
						}else{
							?><td align="center"><?php echo "$".$model[$d]["precioCorreria"];?></td><?php

						}

						 ?>
					
		<?php 
		}

		}




			for ($e=0; $e <count($model) ; $e++) { 
			

			if ($model[$e]["nombre"]=="COL SENSAFLEX C 30"&& $model[$e]["medidas"]==$medidas[$j]) {
		?>
					<td align="center"><?php echo $model[$e]["cod"];?></td>
					<?php if ($Rol=="costoMayorista"){
							?><td align="center"><?php echo "$".$model[$e]["precioMayoristas"];?></td><?php
						}else{
							?><td align="center"><?php echo "$".$model[$e]["precioCorreria"];?></td><?php

						}

						 ?>
					
		<?php 
		}

		}

			for ($f=0; $f <count($model) ; $f++) { 
			

			if ($model[$f]["nombre"]=="COL DUPLEX"&& $model[$f]["medidas"]==$medidas[$j]) {
			?>
						<td align="center"><?php echo $model[$f]["cod"];?></td>
						<?php if ($Rol=="costoMayorista"){
							?><td align="center"> <?php echo "$".$model[$f]["precioMayoristas"];?></td><?php
						}else{
							?><td align="center"><?php echo "$".$model[$f]["precioCorreria"];?></td><?php

						}

						 ?>
						</tr>
			<?php 
			}



		}

	}else{
		?>
		
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		</tr>

		<?php


	}



}



?>
</table>


<br>
<br>
<table border="1">
<tr>
<td  colspan="20"  align="center" style="COLOR: #000000; BACKGROUND-COLOR: #FF8D4B">LINEA ECONOMICA</td>
<!-- EMPIEZA LA CABEZERA DEL EXCEL-->
</tr>
<tr>
<td></td>
<td  colspan="2"  align="center" style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">SPECIAL LIFE EXTRA FIRME</td>
<td  colspan="2"  align="center" style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">SPECIAL LIFE FIRME</td>
<td  colspan="2"  align="center" style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">SPECIAL LIFE SEMI FIRME</td>
<td  colspan="2"  align="center" style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">COLCHON SPYRAL SENCILLO</td>
<td  colspan="2"  align="center" style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">COLCHON SPYRAL PLUS	</td>
<td  colspan="3"  align="center" style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">ECO LINE D18</td>
<td  colspan="3"  align="center" style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">ECO LINE D26</td>
<td  colspan="3"  align="center" style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">ECO LINE D30</td>
</tr>
<tr>
<td align="center">Medida\Calibre</td>
<td></td>
<td align="center">22</td>
<td></td>
<td align="center">22</td>
<td></td>
<td align="center">22</td>
<td></td>
<td align="center">25</td>
<td></td>
<td align="center">35</td>

</tr>

<!-- FOR PARA RECORRER EL MODELO EMPLEADO IDENTIFICANDO CADA EMPLEADO Y REGISTRANDOLO-->

<?php   for ($j=0; $j <count($medidas)-2 ; $j++) { 

				for ($i=0; $i <count($model) ; $i++) { 
				

				if ($model[$i]["nombre"]=="COL SPECIAL LIFE EXTRA FIRME"&& $model[$i]["medidas"]==$medidas[$j]) {
			?>	 	<td align="center"><?php echo $model[$i]["medidas"];?></td>
						<td align="center"><?php echo $model[$i]["cod"];?></td>
						<?php if ($Rol=="costoMayorista"){
							?><td align="center"><?php echo "$".$model[$i]["precioMayoristas"];?></td><?php
						}else{
							?><td align="center"><?php echo "$".$model[$i]["precioCorreria"];?></td><?php

						}

						 ?>
						
			<?php 
			};

			}; 	


		 	

		if ($j<8) {

			for ($h=0; $h <count($model) ; $h++) { 
			

			if ($model[$h]["nombre"]=="COL SPECIAL LIFE FIRME"&& $model[$h]["medidas"]==$medidas[$j]) {
		?>
					<td align="center"><?php echo $model[$h]["cod"];?></td>
					<?php if ($Rol=="costoMayorista"){
							?><td align="center"><?php echo "$".$model[$h]["precioMayoristas"];?></td><?php
						}else{
							?><td align="center"><?php echo "$".$model[$h]["precioCorreria"];?></td><?php

						}

						 ?>
					
		<?php 
		}

		}
		
		
	 		for ($a=0; $a <count($model) ; $a++) { 
			

			if ($model[$a]["nombre"]=="COL SPECIAL LIFE SEMI FIRME"&& $model[$a]["medidas"]==$medidas[$j]) {
		?>
					<td align="center"><?php echo $model[$a]["cod"];?></td>
					<?php if ($Rol=="costoMayorista"){
							?><td align="center"><?php echo "$".$model[$a]["precioMayoristas"];?></td><?php
						}else{
							?><td align="center"><?php echo "$".$model[$a]["precioCorreria"];?></td><?php

						}

						 ?>
					
		<?php 
		}

		}

		

		}else{
			?>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<?php
		}


	
				
		if ($j==2||$j==4||$j==6||$j==8) {
			
			for ($b=0; $b <count($model) ; $b++) { 
			

			if ($model[$b]["nombre"]=="COL SPYRAL SENCILLO"&& $model[$b]["medidas"]==$medidas[$j]) {
		?>
					<td align="center"><?php echo $model[$b]["cod"];?></td>
					<?php if ($Rol=="costoMayorista"){
							?><td align="center"><?php echo "$".$model[$b]["precioMayoristas"];?></td><?php
						}else{
							?><td align="center"><?php echo "$".$model[$b]["precioCorreria"];?></td><?php

						}

						 ?>

					
				<?php 
				}

				}

				for ($b=0; $b <count($model) ; $b++) { 
			

			if ($model[$b]["nombre"]=="COL SPYRAL PLUS"&& $model[$b]["medidas"]==$medidas[$j]) {
		?>
					<td align="center"><?php echo $model[$b]["cod"];?></td>
					<?php if ($Rol=="costoMayorista"){
							?><td align="center"><?php echo "$".$model[$b]["precioMayoristas"];?></td><?php
						}else{
							?><td align="center"><?php echo "$".$model[$b]["precioCorreria"];?></td><?php

						}

						 ?>

					
				<?php 
				}

				}

				}else{
					?>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<?php
				}
				
				

			if ($j==4||$j==5||$j==6) {
					?>

						<td></td>
						<td></td>
						<td></td>
						<?php

				
				}else{
						for ($b=0; $b <count($model) ; $b++) { 
							

							if ($model[$b]["nombre"]=="COL ECO LINE"&& $model[$b]["medidas"]==$medidasEco[$j]&&$model[$b]["calibre"]=="D18") {
						?>			<td align="center"	><b><?php echo $model[$b]["medidas"];?></b></td>
									<td align="center"><?php echo $model[$b]["cod"];?></td>
									<?php if ($Rol=="costoMayorista"){
											?><td align="center"><?php echo "$".$model[$b]["precioMayoristas"];?></td><?php
										}else{
											?><td align="center"><?php echo "$".$model[$b]["precioCorreria"];?></td><?php

										}

										 ?>

									
								<?php 
								}

						}

				
				}


			for ($b=0; $b <count($model) ; $b++) { 
							

							if ($model[$b]["nombre"]=="COL ECO LINE"&& $model[$b]["medidas"]==$medidasEco[$j]&&$model[$b]["calibre"]=="D26") {
						?>			<td align="center"	><b><?php echo $model[$b]["medidas"];?></b></td>
									<td align="center"><?php echo $model[$b]["cod"];?></td>
									<?php if ($Rol=="costoMayorista"){
										?><td align="center"><?php echo "$".$model[$b]["precioMayoristas"];?></td><?php
									}else{
										?><td align="center"><?php echo "$".$model[$b]["precioCorreria"];?></td><?php

									}

									 ?>

									
								<?php 
								}

			}


			

			if ($j==4||$j==5||$j==6) {
					?>

						<td></td>
						<td></td>
						<td></td></tr>
						<?php

				
				}else{
						for ($b=0; $b <count($model) ; $b++) { 
							

							if ($model[$b]["nombre"]=="COL ECO LINE"&& $model[$b]["medidas"]==$medidasEco[$j]&&$model[$b]["calibre"]=="D30") {
						?>			<td align="center"><b><?php echo $model[$b]["medidas"];?></b></td>
									<td align="center"><?php echo $model[$b]["cod"];?></td>
									<?php if ($Rol=="costoMayorista"){
										?><td align="center"><?php echo "$".$model[$b]["precioMayoristas"];?></td><?php
									}else{
										?><td align="center"><?php echo "$".$model[$b]["precioCorreria"];?></td><?php

									}

									 ?></tr>

									
								<?php 
								}

						}

				
				}


				}



?>
</table>

<br>
<br>


<table border="1">
<tr>
<td  colspan="19"  align="center" style="COLOR: #000000; BACKGROUND-COLOR: #FF8D4B">LISTA ORIGEN</td>
<!-- EMPIEZA LA CABEZERA DEL EXCEL-->
</tr>
<tr>
<td></td>
<td  colspan="2"  align="center" style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">ORTOPEDICO PRO PLUS BEIGE</td>
<td  colspan="2"  align="center" style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">EUROTOP NARANJA</td>
<td  colspan="2"  align="center" style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">EMPERADOR PLUS ORIGEN</td>
<td  colspan="2"  align="center" style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">EMPERADOR HILADILLO GRIS</td>
<td  colspan="2"  align="center" style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">SUPER ORTOPEDICO BLACK</td>
<td  colspan="2"  align="center" style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">ORTOPEDICO PRO BEIGE</td>
<td  colspan="2"  align="center" style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">SENSAFLEX C30 NARANJA</td>
<td  colspan="2"  align="center" style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">SPYRAL ESENCIAL</td>
<td  colspan="2"  align="center" style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">SPYRAL AZURE</td>
</tr>
<tr>
<td align="center">Medida\Calibre</td>
<td></td>
<td align="center">25</td>
<td></td>
<td align="center">29</td>
<td></td>
<td align="center">34</td>
<td></td>
<td align="center">30</td>
<td></td>
<td align="center">22</td>
<td></td>
<td align="center">22</td>
<td></td>
<td align="center">22</td>
<td></td>
<td align="center">25</td>
<td></td>
<td align="center">35</td>
</tr>

<!-- FOR PARA RECORRER EL MODELO EMPLEADO IDENTIFICANDO CADA EMPLEADO Y REGISTRANDOLO-->

		<?php   for ($j=0; $j <count($medidas) ; $j++) { 

			for ($i=0; $i <count($model) ; $i++) { 
			

			if ($model[$i]["nombre"]=="ORTOPEDICO PRO PLUS BEIGE"&& $model[$i]["medidas"]==$medidas[$j]) {
		?>	    	<td align="center"><?php echo $model[$i]["medidas"];?></td>
					<td align="center"><?php echo $model[$i]["cod"];?></td>
					<?php if ($Rol=="costoMayorista"){
							?><td align="center"><?php echo "$".$model[$i]["precioMayoristas"];?></td><?php
						}else{
							?><td align="center"><?php echo "$".$model[$i]["precioCorreria"];?></td><?php

						}

						 ?>
					
		<?php 
		};

		}; 	


		for ($h=0; $h <count($model) ; $h++) { 
			

			if ($model[$h]["nombre"]=="EUROTOP NARANJA"&& $model[$h]["medidas"]==$medidas[$j]) {
		?>
					<td align="center"><?php echo $model[$h]["cod"];?></td>
					<?php if ($Rol=="costoMayorista"){
							?><td align="center"><?php echo "$".$model[$h]["precioMayoristas"];?></td><?php
						}else{
							?><td align="center"><?php echo "$".$model[$h]["precioCorreria"];?></td><?php

						}

						 ?>
					
		<?php 
		}

		} 	




	 		for ($a=0; $a <count($model) ; $a++) { 
			

			if ($model[$a]["nombre"]=="EMPERADOR PLUS ORIGEN"&& $model[$a]["medidas"]==$medidas[$j]) {
		?>
					<td align="center"><?php echo $model[$a]["cod"];?></td>
					<?php if ($Rol=="costoMayorista"){
							?><td align="center"><?php echo "$".$model[$a]["precioMayoristas"];?></td><?php
						}else{
							?><td align="center"><?php echo "$".$model[$a]["precioCorreria"];?></td><?php

						}

						 ?>
					
		<?php 
		}

		}


			for ($b=0; $b <count($model) ; $b++) { 
			

			if ($model[$b]["nombre"]=="EMPERADOR HILADILLO GRIS"&& $model[$b]["medidas"]==$medidas[$j]) {
		?>
					<td align="center"><?php echo $model[$b]["cod"];?></td>
					<?php if ($Rol=="costoMayorista"){
							?><td align="center"><?php echo "$".$model[$b]["precioMayoristas"];?></td><?php
						}else{
							?><td align="center"><?php echo "$".$model[$b]["precioCorreria"];?></td><?php

						}

						 ?>
					
		<?php 
		}

		}

		for ($c=0; $c <count($model) ; $c++) { 
			

			if ($model[$c]["nombre"]=="SUPER ORTOPEDICO BLACK"&& $model[$c]["medidas"]==$medidas[$j]) {
		?>
					<td align="center"><?php echo $model[$c]["cod"];?></td>
					<?php if ($Rol=="costoMayorista"){
							?><td align="center"><?php echo "$".$model[$c]["precioMayoristas"];?></td><?php
						}else{
							?><td align="center"><?php echo "$".$model[$c]["precioCorreria"];?></td><?php

						}

						 ?>
					
		<?php 
		}

		}


	for ($d=0; $d <count($model) ; $d++) { 
			

			if ($model[$d]["nombre"]=="ORTOPEDICO PRO BEIGE"&& $model[$d]["medidas"]==$medidas[$j]) {
		?>
					<td align="center"><?php echo $model[$d]["cod"];?></td>
					<?php if ($Rol=="costoMayorista"){
							?><td align="center"><?php echo "$".$model[$d]["precioMayoristas"];?></td><?php
						}else{
							?><td align="center"><?php echo "$".$model[$d]["precioCorreria"];?></td><?php

						}

						 ?>
					
		<?php 
		}

		}




			for ($e=0; $e <count($model) ; $e++) { 
			

			if ($model[$e]["nombre"]=="SENSAFLEX C30 NARANJA"&& $model[$e]["medidas"]==$medidas[$j]) {
		?>
					<td align="center"><?php echo $model[$e]["cod"];?></td>
					<?php if ($Rol=="costoMayorista"){
							?><td align="center"><?php echo "$".$model[$e]["precioMayoristas"];?></td><?php
						}else{
							?><td align="center"><?php echo "$".$model[$e]["precioCorreria"];?></td><?php

						}

						 ?>
					
		<?php 
		}

		}

			

	if ($j==2||$j==4||$j==6||$j==8) {

				for ($f=0; $f <count($model) ; $f++) { 
					

					if ($model[$f]["nombre"]=="SPYRAL ESENCIAL"&& $model[$f]["medidas"]==$medidas[$j]) {
					?>
								<td align="center"><?php echo $model[$f]["cod"];?></td>
								<?php if ($Rol=="costoMayorista"){
										?><td align="center"><?php echo "$".$model[$f]["precioMayoristas"];?></td><?php
									}else{
										?><td align="center"><?php echo "$".$model[$f]["precioCorreria"];?></td><?php

									}

									 ?>
								
					<?php 
					}



				}

			for ($f=0; $f <count($model) ; $f++) { 
			

			if ($model[$f]["nombre"]=="SPYRAL AZURE"&& $model[$f]["medidas"]==$medidas[$j]) {
			?>
						<td align="center"><?php echo $model[$f]["cod"];?></td>
						<?php if ($Rol=="costoMayorista"){
							?><td align="center"><?php echo "$".$model[$f]["precioMayoristas"];?></td><?php
						}else{
							?><td align="center"><?php echo "$".$model[$f]["precioCorreria"];?></td><?php

						}

						 ?>
						</tr>
			<?php 
			}



		}

	}else{
		?>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		</tr>

		<?php


	}



}



?>
</table>
<br>
<br>



<table border="1">
<tr>
<td  colspan="5"  align="center" style="COLOR: #000000; BACKGROUND-COLOR: #FF8D4B">LISTA DE PRECIOS ECO LINE JAC E COLORES</td>
<!-- EMPIEZA LA CABEZERA DEL EXCEL-->
</tr>
<tr>
<td></td>
<td  colspan="2"  align="center" style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">COLCHON ECO LINE JAC E COLORES</td>
<td  colspan="2"  align="center" style="COLOR: #000000; BACKGROUND-COLOR: #CDCBCA">COLCHON ECO LINE JAC E COLORES</td>
</tr>
<tr>
<td>Medida\Densidad</td>
<td></td>
<td align="center">18</td>
<td></td>
<td align="center">30</td>
</tr>

<!-- FOR PARA RECORRER EL MODELO EMPLEADO IDENTIFICANDO CADA EMPLEADO Y REGISTRANDOLO-->

		<?php   for ($j=0; $j <count($medidasEcoCol) ; $j++) { 

			
			

					for ($i=0; $i <count($model) ; $i++) { 
					

					if ($model[$i]["nombre"]=="COL ECO LINE JAC E COLORES"&& $model[$i]["medidas"]==$medidasEcoCol[$j]&&$model[$i]["calibre"]=="D18") {
				?>	 	<td align="center"	><?php echo $model[$i]["medidas"];?></td>
							<td align="center"><?php echo $model[$i]["cod"];?></td>
							<?php if ($Rol=="costoMayorista"){
							?><td align="center"><?php echo "$".$model[$i]["precioMayoristas"];?></td><?php
						}else{
							?><td align="center"><?php echo "$".$model[$i]["precioCorreria"];?></td><?php

						}

						 ?>
							
				<?php 
				};

				}; 	
			
			if ($j>2) {
				# code...
		for ($i=0; $i <count($model) ; $i++) { 
			

			if ($model[$i]["nombre"]=="COL ECO LINE JAC E COLORES"&& $model[$i]["medidas"]==$medidasEcoCol[$j]&&$model[$i]["calibre"]=="D30") {
		?>
					<td align="center"><?php echo $model[$i]["cod"];?></td>
					<?php if ($Rol=="costoMayorista"){
							?><td align="center"><?php echo "$".$model[$i]["precioMayoristas"];?></td><?php
						}else{
							?><td align="center"><?php echo "$".$model[$i]["precioCorreria"];?></td><?php

						}

						 ?></tr>
					
		<?php 
		}

		} 	

		}else{
				?>
					<td></td>
					<td></td></tr>
				

					<?php

			}
}



?>
</table>
<br>
<br>
<table>
<td colspan="5"  align="center">Precios netos sujetos a cambios sin previo aviso - M&aacute;s IVA 16% - <?php echo $FechaInforme[0]["fechaCosto"];?> DE <?php echo  $año;?>- #<?php echo $FechaInforme[0]["consecutivo"];?></td>
</tr>


<tr>
<td colspan="20" align="center"><h1>ESTA LISTA ANULA TODAS LAS ANTERIORES</h1></td>
</tr>



</table>

