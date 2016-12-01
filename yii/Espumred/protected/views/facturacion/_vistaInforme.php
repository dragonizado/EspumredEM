<style media="screen">
	.footermediaQuery{
		position: relative;
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

<div class="panel hidden">
	<div class="panel-body">
		<h1 style="text-align:center; margin:0;">Administrador de Ingreso Personal</h1>
	</div>
</div>

<div class="loading" style="width:100%; text-align:center; height:55vh;margin-top:8%;">
	<div>
		<img src="<?php echo Yii::app()->baseUrl;?>/images/loading_Redondo_1.png" alt="Cargando contenido.." style="position:absolute; z-index:9999;">
		<img src="<?php echo Yii::app()->baseUrl;?>/images/loading_Redondo_3.png" alt="Cargando contenido.." class="fa-pulse">
	</div>
	<!-- <i class="fa fa-spinner fa-pulse fa-5x fa-fw" style="margin-top:10%;"></i><br> -->
	<span>Cargando contenido...</span>
</div>

<div class="panel hidden" id="tablaip">
	<!-- <div class="panel-head" style="text-align:center;">
		<p>
			hola mundo
		</p>
	</div> -->
	<div class="panel-body " >
		<div class="table-responsive">
			<table class="table table-hover table-striped table-bordered" style="text-align:center; border: 1px solid #dddddd !important;" id="tablas">
				<thead>
					<tr>
						<td>id</td>
						<td>Proveedor</td>
						<td>Numero factura</td>
						<td>Valor factura</td>
						<td>Consecutivo</td>						
						<td>Fecha Vencimiento</td>
						<td>Estado</td>
						<td>Fecha de Envio</td>
						
						<td>Opciones</td>
					</tr>
				</thead>
				<tbody id="cuerpotabla"></tbody>
			</table>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$.ajax({
			url:'/yii/espumred/index.php?r=facturacion/Cargando',
			type:'get'
		}).done(function(done){
			$('#cuerpotabla').append(done);
			$('.loading').addClass('hidden');
    		$('.panel').removeClass('hidden');
			$("#tablas").DataTable({
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
			
		}).error(function(){console.log("Error en el ajax del informacion Empleado")});
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

