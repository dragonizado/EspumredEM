<?php
$modes = false;
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
		/*border-top: 1px solid #ddd !important;*/
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
			if(isset($detalles)){
		 ?>
		<a href="<?php echo Yii::app()->baseUrl;?>/index.php?r=observaciones/admin" class="btn btn-success" style="position:absolute; top:17px;">Ir Atras</a>
		<?php 
			}
		 ?>
	</div>
</div>
<?php
if(Yii::app()->user->rol != 'Asesor' && Yii::app()->user->rol != 'Revisoria'){
?>
<ul class="nav nav-tabs" id="myTabs">
	<li class="active"><a href="#">Nuevas</a></li>
	<li><a href="#">Aceptada</a></li>
</ul>
<?php 
}
?>
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

				<thead>
					<tr>
						<td>Nombre Asesor</td>
						<td>Nombre cliente</td>
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
								if(Yii::app()->user->rol == 'GerenteCartera'){
									$consul = Observaciones::model()->findAll(array("condition"=>"NombreCliente = '".$value->NombreCliente."' and gerente_cartera = '' "));
									$contador = count($consul);
									$num = $contador;
									
								}else if (Yii::app()->user->rol == 'GerenteComercial') {
									$consul = Observaciones::model()->findAll(array("condition"=>"NombreCliente = '".$value->NombreCliente."' and gerente_comercial = '' "));
									$contador = count($consul);
									$num = $contador;
									
								}else if (Yii::app()->user->rol == 'Gerente') {
									$consul = Observaciones::model()->findAll(array("condition"=>"NombreCliente = '".$value->NombreCliente."' and gerente_general = '' "));
									$contador = count($consul);
									$num = $contador;
								}
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
								echo 		'<a href="'.Yii::app()->baseUrl.'/index.php?r='.$direccion.'/update&id='.$value->id.'" ><button class="radius btn-success" style=""data-toggle="tooltip" data-placement="bottom" title="Aceptar Formulario"><i class="fa fa-pencil" aria-hidden="true"></i></button></a>';
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
		$('#myTabs a').click(function (e) {
		  e.preventDefault()
		  $(this).tab('show')
		});
		
	});

</script>
<?php }?>