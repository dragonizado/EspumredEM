<?php
	$modes = false;
	$gns="";
	if(isset($notification)){
		echo"existe una notificacion";
		// Funtions_Global::notifyMeD('','');
		var_dump($notificacion);
	}

	if(Yii::app()->user->rol == 'GerenteCartera'){ 
		$gns = "Luis Alfonso Ortega Almario";
	}else if (Yii::app()->user->rol == 'GerenteComercial') {
		// $gns = "Juan Carlos Rios Gómez";
		$gns = "Tomas Enrique Villegas Giraldo";
	}else if (Yii::app()->user->rol == 'Gerente') {
		$gns = "Raúl Ignacio Vergara Kerguelen";
	}else if (Yii::app()->user->rol == 'Test') {
		$gns = "Practicante sistemas";
	}
	// PRIMER IF ESTE IF ES PARA PONER LA PAGINA EN MODO MANTENIMIENTO SOLO EL USUARIO CON ROLL Test PUEDE VER EL CONTENIDO DE LA PAGINA
	if($modes == true && Yii::app()->user->rol != 'Test' ){
		require_once "mantenimiento.php";
	}else{
?>
	<style media="screen">
		.footermediaQuery{
			
			width:100%;
			bottom:0px;
		}
		.footermediaQuerym{
			margin-top:9.5%;
		}
		.caja{
			box-shadow: 4px 4px 4px rgba(0,0,0,0.05) !important;
		} 
		.table>thead>tr>th,
		.table>tbody>tr>th,
		.table>tfoot>tr>th,
		.table>thead>tr>td,
		.table>tbody>tr>td,
		.table>tfoot>tr>td
		{
			padding: 8px !important;
			line-height: 1.42857143 !important;
			vertical-align: top !important;
		}

		.table-bordered>thead>tr>th,
		.table-bordered>tbody>tr>th,
		.table-bordered>tfoot>tr>th,
		.table-bordered>thead>tr>td,
		.table-bordered>tbody>tr>td,
		.table-bordered>tfoot>tr>td
		{
	    border: 1px solid #ddd;
		}
		.table-striped>tbody>tr:nth-child(odd)>td,
		.table-striped>tbody>tr:nth-child(odd)>th
		{
	    background-color: rgba(243, 103, 22, 0.11) !important;
		}
		.radius{
			border-radius: 3px;
			margin-right: 4px;
		}
	</style>
	<!-- <script type="text/javascript">
		function ajaxcount(nom,cam){
				$.ajax({
					url: '/yii/espumred/index.php?r=observaciones/Count',
					data:{nomcli:nom,tipcampo:cam},
					type:'get'
				}).done(function(done){
					// console.log(done);
					if(done > 0){
					$('#countbtn').(done);
				}else{

				}
				}).error(function(er){
					console.log('error en el ajax del administrador para condiciones comerciales. archivo: observaciones/admin.php ');
				});
			}
	</script> -->

	<div class="panel">
		<div class="panel-body">
			<h1 style="text-align:center; margin:0;">Administrador de Condiciones Comerciales</h1>
			<?php 
			// SEGUNDO IF ESTE IF ES PARA AÑADIR EL BOTON DE IR ATRAS CUANDO SE ENTRA EN LA PAGINA DE DETALLES.
				if(isset($detalles)){
			 ?>
			<a href="<?php echo Yii::app()->baseUrl;?>/index.php?r=observaciones/admin" class="btn btn-success" style="position:absolute; top:17px;">Ir Atras</a>
			<?php 
				}
			 ?>
		</div>
	</div>
	<?php
		//ESTE IF MUESTRA A LOS GERENTES LOS BOTONES DE BANDEJA DE ENTRADA Y HISTORIAL PARA PODER CAMBIAR DE CONDICIONES ACEPTADAS Y NO ACEPTADAS
		if(Yii::app()->user->rol != 'Asesor' && Yii::app()->user->rol != 'Revisoria' && Yii::app()->user->rol != 'Cartera' && !isset($detalles)){
			echo '<ul class="nav nav-tabs">';
			echo 	'<li class="active">';
			echo 		'<a href="#nuevas" data-toggle="tab">Bandeja de entrada</a>';
			echo 	'</li>';
			echo 	'<li role="presentation">';
			echo 		'<a href="#aceptadas" data-toggle="tab">Historial</a>';
			echo 	'</li>';
			echo '</ul>';
		}else{
			if(Yii::app()->user->rol == 'Asesor' && !isset($detalles)){
				echo '<ul class="nav nav-tabs">';
				echo 	'<li role="presentation">';
				echo 		'<a href="#tab-aceptadas" data-toggle="tab">Condiciones Aceptadas</a>';
				echo 	'</li>';
				// echo 	'<li role="presentation">';
				// echo 		'<a href="#tab-en-tramites" data-toggle="tab">Condiciones En Tramites</a>';
				// echo 	'</li>';
				echo 	'<li  class="active">';
				echo 		'<a href="#nuevas" data-toggle="tab">Historial</a>';
				echo 	'</li>';
				echo '</ul>';
			}elseif(Yii::app()->user->rol == 'Revisoria'&& !isset($detalles)){
				echo '<ul class="nav nav-tabs">';
				echo 	'<li class="active">';
				echo 		'<a href="#nuevas" data-toggle="tab">Condiciones Comerciales</a>';
				echo 	'</li>';
				echo 	'<li role="presentacion">';
				echo 		'<a href="#tab-aceptadas-revisoria" data-toggle="tab">Condiciones Comerciales Aceptadas</a>';
				echo 	'</li>';
				echo 	'<li role"presentation">';
				echo 		'<a href="#tab-gcomercial" data-toggle="tab">Gerente Comercial</a>';
				echo 	'</li>';
				echo 	'<li role="presentation">';
				echo 		'<a href="#tab-gcartera" data-toggle="tab">Gerente Cartera</a>';
				echo 	'</li>';
				echo 	'<li role="presentation">';
				echo 		'<a href="#tab-ggeneral" data-toggle="tab">Gerente General</a>';
				echo 	'</li>';
				echo '</ul>';
			}
		} //Cierre del if  
	?>
	<div class="tab-content">
		<div id="nuevas" class="tab-pane fade in active">
			<div class="panel">
				<!-- <div class="panel-head" style="text-align:center;">
					<p>
						hola mundo
					</p>
				</div> -->
				<div class="panel-body">
					<div class="table-responsive">
						<table class="table table-hover table-striped table-bordered" style="text-align:center; border: 1px solid #dddddd !important;" id="tabla">
							<?php 
								if(!isset($detalles)){
							 ?>
							 	<!--Tabla general asesores y revisoria-->
							<thead>
								<tr>
									<?php 
										if(Yii::app()->user->rol == 'Cartera'){
									?>
									<td>Nombre Asesor</td>
									<td>Nombre cliente</td>
									<td>Gerente Comercial</td>
									<td>Gerente Cartera</td>
									<td>Gerente General</td>
									<td>Opciones </td>
									<?php
										}else{
									 ?>
									<td>Nombre Asesor</td>
									<td>Nombre cliente</td>
									<?php
									if(Yii::app()->user->rol == 'Revisoria' || Yii::app()->user->rol == 'Asesor'){
										echo "<td>Fecha</td>";
									} 
									 ?>
									<td>Opciones </td>
									<?php 
										}
									 ?>
								</tr>
							</thead>
							<tbody>
								<!--Cuerpo de la tabla en la cual dependiendo del rol se muestran unos datos. 
								aqui se recorren los datos que los gerentes no han aceptado y los muestra si ya los acepto no los muestra-->
								<?php
								$num = 0;
								$direccion= "observaciones";
									foreach ($allobservaciones as $value) {
										if(Yii::app()->user->rol == 'GerenteCartera'){ //Tabla del gerente cartera
									$consul = Observaciones::model()->findAll(array("condition"=>"NombreCliente = '".$value->NombreCliente."' and gerente_cartera = '' "));
									$contador = count($consul);
									$num = $contador;
									if($contador > 0){
										echo '<tr>';
										echo 	'<td>'.$value->NombreAsesor.'</td>';
										echo 	'<td>'.$value->NombreCliente.'</td>';
										echo 	'<td id="countcell">';
										echo '<a  href="'.Yii::app()->baseUrl.'/index.php?r='.$direccion.'/detalles&nc='.$value->NombreCliente.'" ><button class="radius btn-info" style=""data-toggle="tooltip" data-placement="bottom" title="Más Detalles"><i class="fa fa-plus-square" aria-hidden="true"></i></button></a>';
										// if(Yii::app()->user->rol == 'Test'){
											if(Yii::app()->user->rol != 'Asesor' && Yii::app()->user->rol != 'Revisoria'){
												if($num > 0){
													echo '<a  href="'.Yii::app()->baseUrl.'/index.php?r='.$direccion.'/detalles&nc='.$value->NombreCliente.'" ><button class="radius btn-danger" style=""data-toggle="tooltip" data-placement="bottom" title="Hay '.$num.' sin aprobar" id="countbtn">'.$num.'</button></a>';
												}else{
													echo '<button class="radius btn-success" style=""data-toggle="tooltip" data-placement="bottom" title="Excelente no hay ninguna condicion por aprobar" id="countbtn">'.$num.'</button>';
												}
											}
										
										echo 	'</td>';
										echo '</tr>';
									}
									
								}else if (Yii::app()->user->rol == 'GerenteComercial') { //Tabla del gerente comercial
									$consul = Observaciones::model()->findAll(array("condition"=>"NombreCliente = '".$value->NombreCliente."' and gerente_comercial = '' "));
									$contador = count($consul);
									$num = $contador;
									if($contador > 0){
										echo '<tr>';
										echo 	'<td>'.$value->NombreAsesor.'</td>';
										echo 	'<td>'.$value->NombreCliente.'</td>';
										echo 	'<td id="countcell">';
										echo '<a  href="'.Yii::app()->baseUrl.'/index.php?r='.$direccion.'/detalles&nc='.$value->NombreCliente.'" ><button class="radius btn-info" style=""data-toggle="tooltip" data-placement="bottom" title="Más Detalles"><i class="fa fa-plus-square" aria-hidden="true"></i></button></a>';
										// if(Yii::app()->user->rol == 'Test'){
											if(Yii::app()->user->rol != 'Asesor' && Yii::app()->user->rol != 'Revisoria'){
												if($num > 0){
													echo '<a  href="'.Yii::app()->baseUrl.'/index.php?r='.$direccion.'/detalles&nc='.$value->NombreCliente.'" ><button class="radius btn-danger" style=""data-toggle="tooltip" data-placement="bottom" title="Hay '.$num.' sin aprobar" id="countbtn">'.$num.'</button></a>';
												}else{
													echo '<button class="radius btn-success" style=""data-toggle="tooltip" data-placement="bottom" title="Excelente no hay ninguna condicion por aprobar" id="countbtn">'.$num.'</button>';
												}
											}
										
										echo 	'</td>';
										echo '</tr>';
									}
									
								}else if (Yii::app()->user->rol == 'Gerente') { //Tabla del gerente general
									$consul = Observaciones::model()->findAll(array("condition"=>"NombreCliente = '".$value->NombreCliente."' and gerente_general = '' and gerente_comercial != 'CONDICIÓN RECHAZADA' and gerente_cartera != 'CONDICIÓN RECHAZADA' "));
									$contador = count($consul);
									$num = $contador;
									if($contador > 0){
										echo '<tr>';
										echo 	'<td>'.$value->NombreAsesor.'</td>';
										echo 	'<td>'.$value->NombreCliente.'</td>';
										echo 	'<td id="countcell">';
										echo '<a  href="'.Yii::app()->baseUrl.'/index.php?r='.$direccion.'/detalles&nc='.$value->NombreCliente.'" ><button class="radius btn-info" style=""data-toggle="tooltip" data-placement="bottom" title="Más Detalles"><i class="fa fa-plus-square" aria-hidden="true"></i></button></a>';
										// if(Yii::app()->user->rol == 'Test'){
											if(Yii::app()->user->rol != 'Asesor' && Yii::app()->user->rol != 'Revisoria'){
												if($num > 0){
													echo '<a  href="'.Yii::app()->baseUrl.'/index.php?r='.$direccion.'/detalles&nc='.$value->NombreCliente.'" ><button class="radius btn-danger" style=""data-toggle="tooltip" data-placement="bottom" title="Hay '.$num.' sin aprobar" id="countbtn">'.$num.'</button></a>';
												}else{
													echo '<button class="radius btn-success" style=""data-toggle="tooltip" data-placement="bottom" title="Excelente no hay ninguna condicion por aprobar" id="countbtn">'.$num.'</button>';
												}
											}
										
										echo 	'</td>';
										echo '</tr>';
									}

								}else if (Yii::app()->user->rol == 'Test') { //Esta tabla es de pruebas 
									$consul = Observaciones::model()->findAll(array("condition"=>"NombreCliente = '".$value->NombreCliente."' and gerente_cartera = '' "));
									$contador = count($consul);
									$num = $contador;
									if($contador > 0){
										echo '<tr>';
										echo 	'<td>'.$value->NombreAsesor.'</td>';
										echo 	'<td>'.$value->NombreCliente.'</td>';
										echo 	'<td id="countcell">';
										echo '<a  href="'.Yii::app()->baseUrl.'/index.php?r='.$direccion.'/detalles&nc='.$value->NombreCliente.'" ><button class="radius btn-info" style=""data-toggle="tooltip" data-placement="bottom" title="Más Detalles"><i class="fa fa-plus-square" aria-hidden="true"></i></button></a>';
										// if(Yii::app()->user->rol == 'Test'){
											if(Yii::app()->user->rol != 'Asesor' && Yii::app()->user->rol != 'Revisoria'){
												if($num > 0){
													echo '<button class="radius btn-danger" style=""data-toggle="tooltip" data-placement="bottom" title="Hay '.$num.' sin aprobar" id="countbtn">'.$num.'</button>';
												}else{
													echo '<button class="radius btn-success" style=""data-toggle="tooltip" data-placement="bottom" title="Excelente no hay ninguna condicion por aprobar" id="countbtn">'.$num.'</button>';
												}
											}
										
										echo 	'</td>';
										echo '</tr>';
									}
									// Tabla para que ven los asesores y los de revisoria
								}else if (Yii::app()->user->rol == 'Asesor' || Yii::app()->user->rol == 'Revisoria') {
									
										echo '<tr>';
										echo 	'<td>'.$value->NombreAsesor.'</td>';
										echo 	'<td>'.$value->NombreCliente.'</td>';
										echo 	'<td>'.$value->fecha.'</td>';
										echo 	'<td id="countcell">';
										echo '<a  href="'.Yii::app()->baseUrl.'/index.php?r='.$direccion.'/detalles&nc='.$value->NombreCliente.'" ><button class="radius btn-info" style=""data-toggle="tooltip" data-placement="bottom" title="Más Detalles"><i class="fa fa-plus-square" aria-hidden="true"></i></button></a>';
										echo 	'</td>';
										echo '</tr>';
									
								}
									}

									if(Yii::app()->user->rol == 'Cartera'){
										foreach ($allobservaciones as $value) {
											echo '<tr>';
											echo 	'<td>'.$value->NombreAsesor.'</td>';
											echo 	'<td>'.$value->NombreCliente.'</td>';
											echo 	'<td>'.$value->gerente_comercial.'</td>';
											echo 	'<td>'.$value->gerente_cartera.'</td>';
											echo 	'<td>'.$value->gerente_general.'</td>';
											echo 	'<td id="countcell">';
											echo 		'<a href="'.Yii::app()->baseUrl.'/index.php?r='.$direccion.'/view&id='.$value->id.'" ><button class="btn-info radius" style=""data-toggle="tooltip" data-placement="bottom" title="Ver Formulario"><i class="fa fa-search" aria-hidden="true"></i></button></a>';
											echo 	'</td>';
											echo '</tr>';
										}
									}
								?>
							</tbody>
							<?php }else{ ?>
								<thead>
								<tr>
									<td>Nombre Asesor</td>
									<td>Nombre cliente</td>
									<td>Gerente Comercial</td>
									<td>Gerente Cartera</td>
									<td>Gerente General</td>
									<td>Fecha</td>
									<td>Opciones</td>
								</tr>
							</thead>
							<tbody>
								<?php
								$direccion= "observaciones";
								
									foreach ($allobservaciones as $value) {
										echo '<tr>';
										echo 	'<td>'.$value->NombreAsesor.'</td>';
										echo 	'<td>'.$value->NombreCliente.'</td>';
										echo 	'<td>'.$value->gerente_comercial.'</td>';
										echo 	'<td>'.$value->gerente_cartera.'</td>';
										echo 	'<td>'.$value->gerente_general.'</td>';
										echo 	'<td>'.$value->fecha.'</td>';
										echo 	'<td>';
												// '<a href="'.Yii::app()->baseUrl.'/index.php?r=condicionescomerciales/view&id='.$value->id.'" data-toggle="tooltip" data-placement="bottom" title="Ver mas detalles"><img src="'.Yii::app()->theme->baseUrl.'/img/view.png" alt="Ver"></a>';
										echo 		'<a href="'.Yii::app()->baseUrl.'/index.php?r='.$direccion.'/view&id='.$value->id.'" ><button class="btn-info radius" style=""data-toggle="tooltip" data-placement="bottom" title="Ver Formulario"><i class="fa fa-search" aria-hidden="true"></i></button></a>';
												// 	'<a href="'.Yii::app()->baseUrl.'/index.php?r=condicionescomerciales/update&id='.$value->id.'" data-toggle="tooltip" data-placement="bottom" title="Editar"><img src="'.Yii::app()->theme->baseUrl.'/img/update.png" alt="Editar"></a>';
										if(Yii::app()->user->rol != 'Asesor' && Yii::app()->user->rol != 'Revisoria'){
											// echo 		'<a href="'.Yii::app()->baseUrl.'/index.php?r='.$direccion.'/update&id='.$value->id.'" ><button class="radius btn-success" style=""data-toggle="tooltip" data-placement="bottom" title="Aceptar Formulario"><i class="fa fa-pencil" aria-hidden="true"></i></button></a>';
											if(Yii::app()->user->rol == 'GerenteCartera'){ 
												$vas = "" ;
												if($value->gerente_cartera == ""){
													$vas = '0';
												}else{ 
													$vas = '1';
												}
											}else if (Yii::app()->user->rol == 'GerenteComercial') {
												$vas = "" ;
												if($value->gerente_comercial == ""){
													$vas = '0';
												}else{ 
													$vas = '1';
												}
											}else if (Yii::app()->user->rol == 'Gerente') {
												$vas = "" ;
												//validar si el usuario ya a aceptado la condicion
												if($value->gerente_general == ""){

													// valida si alguno de los 2 gerentes no a aceptado la condicon
													if($value->gerente_comercial == "" || $value->gerente_cartera == ""){
														$vas = '2';
													}else{
														$vas = '0';
													}

													// en estos 2 if se verifica cual de los 2 gerentes no ha aceptado la condicion para validarla posteriormente con javascript
													if($value->gerente_cartera == ""){
														echo "<span id='gcarte' class='hidden' gcart='0'></span>";
													}else{
														echo "<span id='gcarte' class='hidden' gcart='1'></span>";
													}
													if($value->gerente_comercial == ""){
														echo "<span id='gcomer' class='hidden' gcorm='0'></span>";
													}else{
														echo "<span id='gcomer' class='hidden' gcorm='1'></span>";
													}
													
												}else{ 
													$vas = '1';
												}
											}else if (Yii::app()->user->rol == 'Test') {
												$vas = "" ;
												if($value->gerente_general == ""){
													$vas = '0';
												}else{ 
													$vas = '1';
												}
												
											}
											echo 		'<button  class="btn-default radius btnaction" style="" data-toggle="modal" title="Aceptar o rechazar condiciones" gerente-name="'.$gns.'" client-name="'.$value->NombreCliente.'" cond-num="'.$value->id.'" actions-data="'.$vas.'" ><i class="fa fa-cog" aria-hidden="true"></i></button>';
											
										}
										
										echo 	'</td>';
										echo '</tr>';
									}
								?>
							</tbody>
							<?php } ?>
						</table>
					</div>
				</div>
			</div>
		</div>
		<div id="aceptadas" class="tab-pane fade">
			<div class="panel">
				<div class="panel-body">
					<div class="table-responsive">
						<table class="table table-hover table-striped table-bordered" style="text-align:center; border: 1px solid #dddddd !important; width:100%;" id="tabla2">
							<?php 
								if(!isset($detalles)){
							?>

							<thead>
								<tr>
									<td>Nombre Asesor</td>
									<td>Nombre cliente</td>
									<!-- <td>Fecha</td> -->
									<td>Opciones</td>
								</tr>
							</thead>
							<tbody>
								<?php
									$num = 0;
									$direccion= "observaciones";
									foreach ($allobservaciones as $value) {
										echo '<tr>';
										echo 	'<td>'.$value->NombreAsesor.'</td>';
										echo 	'<td>'.$value->NombreCliente.'</td>';
										echo 	'<td id="countcell">';
										echo '<a  href="'.Yii::app()->baseUrl.'/index.php?r='.$direccion.'/detalles&nc='.$value->NombreCliente.'" ><button class="radius btn-info" style=""data-toggle="tooltip" data-placement="bottom" title="Más Detalles"><i class="fa fa-plus-square" aria-hidden="true"></i></button></a>';
										// if(Yii::app()->user->rol == 'Test'){
											
											// if(Yii::app()->user->rol != 'Asesor' && Yii::app()->user->rol != 'Revisoria'){
											// 	if($num > 0){
											// 		echo '<button class="radius btn-danger" style=""data-toggle="tooltip" data-placement="bottom" title="Hay '.$num.' sin aprobar" id="countbtn">'.$num.'</button>';
											// 	}else{
											// 		echo '<button class="radius btn-success" style=""data-toggle="tooltip" data-placement="bottom" title="Excelente no hay ninguna condicion por aprobar" id="countbtn">'.$num.'</button>';
											// 	}
											// }
										
										echo 	'</td>';
										echo '</tr>';
									}
								?>
							</tbody>
							<script>
								$(document).ready(function(){
									
								$("#tabla2").DataTable({
									    "language":  {
									    "sProcessing":     "Procesando...",
									    "sLengthMenu":     "Mostrar _MENU_ registros",
									    "sZeroRecords":    "No se encontraron resultados",
									    "sEmptyTable":     "Ningún dato disponible en esta tabla",
									    "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
									    "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
									    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
									    "sInfoPostFix":    "",
									    "sSearch":         "Buscar:",
									    "sUrl":            "",
									    "sInfoThousands":  ",",
									    "sLoadingRecords": "Cargando...",
									    "oPaginate": {
									        "sFirst":    "Primero",
									        "sLast":     "Último",
									        "sNext":     "Siguiente",
									        "sPrevious": "Anterior"
									    },
									    "oAria": {
									        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
									        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
									        }
									    }
									});
								});
							</script>
							<?php
								}
							?>
						</table>

					</div>
				</div>
			</div>
		</div>
		<?php
			if(Yii::app()->user->rol == 'Asesor'){
				echo '<div id="tab-aceptadas" class="tab-pane fade">';
				echo	'<div class="panel">';
				echo		'<div class="panel-body">';
				echo			'<div class="table-responsive">';
				echo				'<table class="table table-hover table-striped table-bordered tables" style="text-align:center; border: 1px solid #dddddd !important; width:100%;" id="tabla6">';
				echo					'<thead>';
				echo						'<tr>';
				echo							'<td>Nombre Asesor</td>';
				echo							'<td>Nombre cliente</td>';
				echo							'<td>Fecha</td>';
				echo							'<td>Opciones</td>';		
				echo						'</tr>';
				echo					'</thead>';
				echo 					'<tbody>';
									$nameAsesor = Yii::app()->user->Nombre . Yii::app()->user->Apellido;
									$condaceptadas = Observaciones::model()->findAll(array("condition"=>"NombreAsesor = '".$nameAsesor."' and gerente_cartera != '' and gerente_comercial != '' and gerente_general != '' and estado = 'Vigente' "));
									foreach ($condaceptadas as  $valueconacep) {
										echo '<tr>';
										echo '<td>'.$valueconacep->NombreAsesor.'</td>';
										echo '<td>'.$valueconacep->NombreCliente.'</td>';
										echo 	'<td>'.$valueconacep->fecha.'</td>';
										echo '<td>';
										echo '<a href="'.Yii::app()->baseUrl.'/index.php?r='.$direccion.'/view&id='.$valueconacep->id.'" ><button class="btn-info radius" style=""data-toggle="tooltip" data-placement="bottom" title="Ver Formulario"><i class="fa fa-search" aria-hidden="true"></i></button></a>';
										echo '</td>';
										echo '</tr>';
									}
				echo 					'</tbody>';
				echo				'</table>';
				echo			'</div>';
				echo		'</div>';
				echo	'</div>';
				echo '</div>';
				
				?>
				<script>
				$(document).ready(function(){
					$(".tables").DataTable({
									    "language":  {
									    "sProcessing":     "Procesando...",
									    "sLengthMenu":     "Mostrar _MENU_ registros",
									    "sZeroRecords":    "No se encontraron resultados",
									    "sEmptyTable":     "Ningún dato disponible en esta tabla",
									    "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
									    "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
									    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
									    "sInfoPostFix":    "",
									    "sSearch":         "Buscar:",
									    "sUrl":            "",
									    "sInfoThousands":  ",",
									    "sLoadingRecords": "Cargando...",
									    "oPaginate": {
									        "sFirst":    "Primero",
									        "sLast":     "Último",
									        "sNext":     "Siguiente",
									        "sPrevious": "Anterior"
									    },
									    "oAria": {
									        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
									        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
									        }
									    }
									});
								});
				</script>
				<?php
			}elseif(Yii::app()->user->rol == 'Revisoria'){
				echo '<div id="tab-gcomercial" class="tab-pane fade">';
				echo	'<div class="panel">';
				echo		'<div class="panel-body">';
				echo			'<div class="table-responsive">';
				echo				'<table class="table table-hover table-striped table-bordered tables" style="text-align:center; border: 1px solid #dddddd !important; width:100%;" id="tabla3">';
				echo					'<thead>';
				echo						'<tr>';
				echo							'<td>Nombre Asesor</td>';
				echo							'<td>Nombre cliente</td>';
				// echo							'<td>Fecha</td>';
				echo							'<td>Pendientes</td>';
				echo						'</tr>';
				echo					'</thead>';
				echo 					'<tbody>';
				
					foreach ($allobservaciones as $value2) {
						$consulGCom = Observaciones::model()->findAll(array("condition"=>"NombreCliente = '".$value2->NombreCliente."' and gerente_comercial = '' "));
						$contadorGCom = count($consulGCom);
						$numGCom = $contadorGCom;
						if($contadorGCom > 0){
							echo '<tr>';
							echo 	'<td>'.$value2->NombreAsesor.'</td>';
							echo 	'<td>'.$value2->NombreCliente.'</td>';
							// echo 	'<td>'.$value2->fecha.'</td>';
							echo 	'<td id="countcell">';
							if($numGCom > 0){
								echo '<a  href="'.Yii::app()->baseUrl.'/index.php?r='.$direccion.'/detalles&nc='.$value2->NombreCliente.'" ><button class="radius btn-danger" style=""data-toggle="tooltip" data-placement="bottom" title="Hay '.$numGCom.' sin aprobar" id="countbtn">'.$numGCom.'</button></a>';
							}else{
								echo '<button class="radius btn-success" style=""data-toggle="tooltip" data-placement="bottom" title="Excelente no hay ninguna condicion por aprobar" id="countbtn">'.$numGCom.'</button>';
							}
							echo 	'</td>';
							echo '</tr>';
						}
					}
				echo 					'</tbody>';
				echo				'</table>';
				echo			'</div>';
				echo		'</div>';
				echo	'</div>';
				?>
				<script>
				$(document).ready(function(){
					$("#tabla3").DataTable({
									    "language":  {
									    "sProcessing":     "Procesando...",
									    "sLengthMenu":     "Mostrar _MENU_ registros",
									    "sZeroRecords":    "No se encontraron resultados",
									    "sEmptyTable":     "Ningún dato disponible en esta tabla",
									    "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
									    "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
									    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
									    "sInfoPostFix":    "",
									    "sSearch":         "Buscar:",
									    "sUrl":            "",
									    "sInfoThousands":  ",",
									    "sLoadingRecords": "Cargando...",
									    "oPaginate": {
									        "sFirst":    "Primero",
									        "sLast":     "Último",
									        "sNext":     "Siguiente",
									        "sPrevious": "Anterior"
									    },
									    "oAria": {
									        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
									        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
									        }
									    }
									});
								});
				</script>
				<?php
				echo '</div>';
				echo '<div id="tab-gcartera" class="tab-pane fade">';
				echo	'<div class="panel">';
				echo		'<div class="panel-body">';
				echo			'<div class="table-responsive">';
				echo				'<table class="table table-hover table-striped table-bordered tables" style="text-align:center; border: 1px solid #dddddd !important; width:100%;" id="tabla4">';
				echo					'<thead>';
				echo						'<tr>';
				echo							'<td>Nombre Asesor</td>';
				echo							'<td>Nombre cliente</td>';
				echo							'<td>Pendientes</td>';
				echo						'</tr>';
				echo					'</thead>';
				echo 					'<tbody>';

									foreach ($allobservaciones as $value) {
										$consul = Observaciones::model()->findAll(array("condition"=>"NombreCliente = '".$value->NombreCliente."' and gerente_cartera = '' "));
										$contador = count($consul);
										$num = $contador;
										if($contador > 0){
											echo '<tr>';
											echo 	'<td>'.$value->NombreAsesor.'</td>';
											echo 	'<td>'.$value->NombreCliente.'</td>';
											echo 	'<td id="countcell">';
											
													if($num > 0){
														echo '<a  href="'.Yii::app()->baseUrl.'/index.php?r='.$direccion.'/detalles&nc='.$value->NombreCliente.'" ><button class="radius btn-danger" style=""data-toggle="tooltip" data-placement="bottom" title="Hay '.$num.' sin aprobar" id="countbtn">'.$num.'</button></a>';
														// echo '<button class="radius btn-danger" style=""data-toggle="tooltip" data-placement="bottom" title="Hay '.$num.' sin aprobar" id="countbtn">'.$num.'</button>';
													}else{
														echo '<button class="radius btn-success" style=""data-toggle="tooltip" data-placement="bottom" title="Excelente no hay ninguna condicion por aprobar" id="countbtn">'.$num.'</button>';
													}
												
											
											echo 	'</td>';
											echo '</tr>';
										}
									}
				echo					'</tbody>';
				echo				'</table>';
				echo			'</div>';
				echo		'</div>';
				echo	'</div>';
				?>
				<script>
				$(document).ready(function(){
					$("#tabla4").DataTable({
									    "language":  {
									    "sProcessing":     "Procesando...",
									    "sLengthMenu":     "Mostrar _MENU_ registros",
									    "sZeroRecords":    "No se encontraron resultados",
									    "sEmptyTable":     "Ningún dato disponible en esta tabla",
									    "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
									    "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
									    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
									    "sInfoPostFix":    "",
									    "sSearch":         "Buscar:",
									    "sUrl":            "",
									    "sInfoThousands":  ",",
									    "sLoadingRecords": "Cargando...",
									    "oPaginate": {
									        "sFirst":    "Primero",
									        "sLast":     "Último",
									        "sNext":     "Siguiente",
									        "sPrevious": "Anterior"
									    },
									    "oAria": {
									        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
									        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
									        }
									    }
									});
								});
				</script>
				<?php
				echo '</div>';
				echo '<div id="tab-ggeneral" class="tab-pane fade">';
				echo	'<div class="panel">';
				echo		'<div class="panel-body">';
				echo			'<div class="table-responsive">';
				echo				'<table class="table table-hover table-striped table-bordered revisoria" style="text-align:center; border: 1px solid #dddddd !important; width:100%;" id="tabla5">';
				echo					'<thead>';
				echo						'<tr>';
				echo							'<td>Nombre Asesor</td>';
				echo							'<td>Nombre cliente</td>';
				echo							'<td>Pendientes</td>';
				echo						'</tr>';
				echo					'</thead>';
				echo 					'<tbody>';
				foreach ($allobservaciones as $value) {
					$consul = Observaciones::model()->findAll(array("condition"=>"NombreCliente = '".$value->NombreCliente."' and gerente_general = '' "));
					$contador = count($consul);
					$num = $contador;
					if($contador > 0){
						echo '<tr>';
						echo 	'<td>'.$value->NombreAsesor.'</td>';
						echo 	'<td>'.$value->NombreCliente.'</td>';
						echo 	'<td id="countcell">';
						
								if($num > 0){
									echo '<a  href="'.Yii::app()->baseUrl.'/index.php?r='.$direccion.'/detalles&nc='.$value->NombreCliente.'" ><button class="radius btn-danger" style=""data-toggle="tooltip" data-placement="bottom" title="Hay '.$num.' sin aprobar" id="countbtn">'.$num.'</button></a>';
								}else{
									echo '<button class="radius btn-success" style=""data-toggle="tooltip" data-placement="bottom" title="Excelente no hay ninguna condicion por aprobar" id="countbtn">'.$num.'</button>';
								}
							
						
						echo 	'</td>';
						echo '</tr>';
					}
				}
				echo					'</tbody>';
				echo				'</table>';
				echo			'</div>';
				echo		'</div>';
				echo	'</div>';
				?>
				<script>
				$(document).ready(function(){
					$("#tabla5").DataTable({
									    "language":  {
									    "sProcessing":     "Procesando...",
									    "sLengthMenu":     "Mostrar _MENU_ registros",
									    "sZeroRecords":    "No se encontraron resultados",
									    "sEmptyTable":     "Ningún dato disponible en esta tabla",
									    "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
									    "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
									    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
									    "sInfoPostFix":    "",
									    "sSearch":         "Buscar:",
									    "sUrl":            "",
									    "sInfoThousands":  ",",
									    "sLoadingRecords": "Cargando...",
									    "oPaginate": {
									        "sFirst":    "Primero",
									        "sLast":     "Último",
									        "sNext":     "Siguiente",
									        "sPrevious": "Anterior"
									    },
									    "oAria": {
									        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
									        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
									        }
									    }
									});
								});
				</script>
				<?php
				echo '</div>';
				echo '<div id="tab-aceptadas-revisoria" class="tab-pane fade">';
				echo	'<div class="panel">';
				echo		'<div class="panel-body">';
				echo			'<div class="table-responsive">';
				echo				'<table class="table table-hover table-striped table-bordered tables" style="text-align:center; border: 1px solid #dddddd !important; width:100%;" id="tabla9">';
				echo					'<thead>';
				echo						'<tr>';
				echo							'<td>Nombre Asesor</td>';
				echo							'<td>Nombre cliente</td>';
				echo							'<td>Fecha</td>';
				echo							'<td>Opciones</td>';		
				echo						'</tr>';
				echo					'</thead>';
				echo 					'<tbody>';
									$condaceptadas = Observaciones::model()->findAll(array("condition"=>" gerente_cartera != '' and gerente_comercial != '' and gerente_general != '' and estado = 'Vigente'"));
									foreach ($condaceptadas as  $valueconacep) {
										echo '<tr>';
										echo '<td>'.$valueconacep->NombreAsesor.'</td>';
										echo '<td>'.$valueconacep->NombreCliente.'</td>';
										echo 	'<td>'.$valueconacep->fecha.'</td>';
										echo '<td>';
										echo '<a href="'.Yii::app()->baseUrl.'/index.php?r='.$direccion.'/view&id='.$valueconacep->id.'" ><button class="btn-info radius" style=""data-toggle="tooltip" data-placement="bottom" title="Ver Formulario"><i class="fa fa-search" aria-hidden="true"></i></button></a>';
										echo '</td>';
										echo '</tr>';
									}
				echo 					'</tbody>';
				echo				'</table>';
				echo			'</div>';
				echo		'</div>';
				echo	'</div>';
				?>
				<script>
				$(document).ready(function(){
					$("#tabla9").DataTable({
									    "language":  {
									    "sProcessing":     "Procesando...",
									    "sLengthMenu":     "Mostrar _MENU_ registros",
									    "sZeroRecords":    "No se encontraron resultados",
									    "sEmptyTable":     "Ningún dato disponible en esta tabla",
									    "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
									    "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
									    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
									    "sInfoPostFix":    "",
									    "sSearch":         "Buscar:",
									    "sUrl":            "",
									    "sInfoThousands":  ",",
									    "sLoadingRecords": "Cargando...",
									    "oPaginate": {
									        "sFirst":    "Primero",
									        "sLast":     "Último",
									        "sNext":     "Siguiente",
									        "sPrevious": "Anterior"
									    },
									    "oAria": {
									        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
									        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
									        }
									    }
									});
								});
				</script>
				<?php
				echo '</div>';
				
			}
		?>
	</div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"></h4>
      </div>
      <div class="modal-body">
      </div>
      <div class="modal-footer"> 
      </div>
    </div>
  </div>
</div>



<script type="text/javascript">
	$(document).ready(function(){
		$(function () {
	$('[data-toggle="tooltip"]').tooltip()
});
		// $('section#Footer').css({'margin-top':'9.5%'});
		$('body').css({'background-color':'#EBEEEE'});
		$('.panel').addClass('caja');
		$('table-bordered>thead>tr>th, .table-bordered>tbody>tr>th, .table-bordered>tfoot>tr>th, .table-bordered>thead>tr>td, .table-bordered>tbody>tr>td, .table-bordered>tfoot>tr>td').css({
			'border':'1px solid #ddd !important'
		});
		if ($(window).width() >= 820) {
			$('section#Footer').removeClass('footermediaQuerym');
			$('section#Footer').addClass('footermediaQuery');
		}
		$(window).resize(function(){
			 if ($(window).width() >= 820) {
				 $('section#Footer').removeClass('footermediaQuerym');
				 $('section#Footer').addClass('footermediaQuery');
			 }else if($(window).width() <= 766){
					$('section#Footer').removeClass('footermediaQuery');
					$('section#Footer').addClass('footermediaQuerym');

			 }
		});
		$('.btnaction').click(function(){
			var gname = $(this).attr("gerente-name");
			var cname = $(this).attr("client-name");
			var cod = $(this).attr("cond-num");
			var opt = $(this).attr("actions-data");
			$('#myModal #myModalLabel').html("Cliente: " + cname  );
			if(opt === "0"){
				var dessacep = "aceptarconss('"+cod+"','"+gname+"')";
				var dessrech = "rechasconss('"+cod+"')";
			$('#myModal .modal-body').html("<center>Acciones disponibles para la condición # "+cod+"</center>");
				$('.modal-footer').html(
					'<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>'+
					'<button type="button" class="btn btn-danger" onclick="'+dessrech+'">Rechazar</button>'+
					'<button id="btnacept"type="button" class="btn btn-success" onclick="'+dessacep+'">Aceptar</button>'
					);
			}else if(opt === "1"){
			$('#myModal .modal-body').html("<center>Ya se ha aceptado la condicion #"+cod+"</center>");
				$('.modal-footer').html(
					'<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>'
					);
			}else if(opt === "2"){
				var contens = ""; 
				var gcar = $("#gcarte").attr("gcart");
				var gcom = $("#gcomer").attr("gcorm");
				if(gcom === '0'){
					contens += "<center>El gerente comercial no ha aceptado la condición # "+cod+"</center><br>";
				}else{
					contens = " ";
				}

				if(gcar === '0'){
					contens += "<center>El gerente cartera no ha aceptado la condición #"+cod+"</center>";
				}else{
					contens += " ";
				}
				
				$('#myModal .modal-body').html(contens);
				$('.modal-footer').html(
					'<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>'
					);
			}
			$('#myModal').modal('toggle');
		});
	});
	function aceptarconss(id,name){
		// var dess = confirm("Aceptar la condición #"+id);
		// 	if(dess){
				$.ajax({
					url:"/yii/espumred/index.php?r=observaciones/aceptarcondicion",
					data:{iden:id,nombre:name},
					type:"get"
				}).done(function(done){
					location.reload(); 
					// console.log(done);
				}).error(function(){console.log("Hay un error en el ajax de aceptarconss en el archivo /observaciones/admin.php")});
			// }else{
			// 	alert("Solicitud cancelada.");
			// }
		
	}

	function rechasconss(id){
		var dess = confirm("Rechazar la condición #"+id+"?");
			if(dess){
				$.ajax({
					url:"/yii/espumred/index.php?r=observaciones/aceptarcondicion",
					data:{idren:id},
					type:"get"
				}).done(function(done){
					location.reload(); 
					// console.log(done);
				}).error(function(){console.log("Hay un error en el ajax de aceptarconss en el archivo /observaciones/admin.php")});
			}else{
				alert("Solicitud cancelada.");
			}
		
	}
</script>
<?php }?>