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

<div class="panel">
	<div class="panel-body">
		<h1 style="text-align:center; margin:0;">Administrador de Quejas,Reclamos y/o Sugerencias</h1>
	</div>
</div>


<div class="panel">
	<!-- <div class="panel-head" style="text-align:center;">
		<p>
			hola mundo
		</p>
	</div> -->
	<div class="panel-body">
		<div class="table-responsive">
			<table class="table table-hover table-striped table-bordered" style="text-align:center; border: 1px solid #dddddd !important;" id="tabla">
				<thead>
					<tr>
						<td>Codigo</td>
						<td>Nombre Asesor</td>
						<td>Nombre Cliente</td>
						<td>Empresa</td>
						<td>Fecha</td>
						<td>Opciones</td>
					</tr>
				</thead>
				<tbody>
					<?php
					$direccion= "Quejasreclamos";
						foreach ($allquejas as $value) {
							echo '<tr>';
							echo 	'<td>'.$value->codigo.'</td>';
							echo 	'<td>'.$value->NombreApellido.'</td>';
							echo 	'<td>'.$value->NombreCliente.'</td>';
							echo 	'<td>'.$value->Empresa.'</td>';
							echo 	'<td>'.$value->Fecha.'</td>';
							echo 	'<td>';
									// '<a href="'.Yii::app()->baseUrl.'/index.php?r=condicionescomerciales/view&id='.$value->id.'" data-toggle="tooltip" data-placement="bottom" title="Ver mas detalles"><img src="'.Yii::app()->theme->baseUrl.'/img/view.png" alt="Ver"></a>';
							echo 		'<a href="'.Yii::app()->baseUrl.'/index.php?r='.$direccion.'/view&id='.$value->id.'" ><button class="btn-info radius" style=""data-toggle="tooltip" data-placement="bottom" title="Ver Formulario"><i class="fa fa-search" aria-hidden="true"></i></button></a>';
									// 	'<a href="'.Yii::app()->baseUrl.'/index.php?r=condicionescomerciales/update&id='.$value->id.'" data-toggle="tooltip" data-placement="bottom" title="Editar"><img src="'.Yii::app()->theme->baseUrl.'/img/update.png" alt="Editar"></a>';
							echo 		'<a href="'.Yii::app()->baseUrl.'/index.php?r='.$direccion.'/update&id='.$value->id.'" ><button class="radius btn-success" style=""data-toggle="tooltip" data-placement="bottom" title="ModificarFormulario"><i class="fa fa-pencil" aria-hidden="true"></i></button></a>';
							echo 	'</td>';
							echo '</tr>';
						}
					?>
				</tbody>
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
	});
</script>
