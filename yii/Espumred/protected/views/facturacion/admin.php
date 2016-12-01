<?php
/* @var $this FacturacionController */
/* @var $model Facturacion */

// $this->breadcrumbs=array(
// 	'Facturacions'=>array('index'),
// 	'Administrador',
// );

$this->menu=array(
	array('label'=>'Listar Facturacion', 'url'=>array('index')),
	array('label'=>'Crear Facturacion', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#facturacion-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrador de  Facturacion</h1>

<p>
También puede escribir un operador de comparación (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) al principio de cada uno de los valores de búsqueda para especificar cómo se debe hacer la comparación. 
</p>

<?php echo CHtml::link('Opciones Avanzadas','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'facturacion-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'provedor',
		'numeroFactura',
		'valorFactura',
		//'consecutivo',
		//'observacion',
		'estado',
		'Fecha_Creacion',
		'Fecha_Envio',
		'Fecha_Pagado',
		//'Fecha_Modificacion',
		'Fecha_Vencimiento',	
		array(
			'class' => 'CButtonColumn',
            // 'template'=>'{delete}{update}{accion_nueva}', // botones a mostrar
            'updateButtonUrl'=>'Yii::app()->createUrl("/facturacion/update&id=$data->id" )', // url de la acción 'update'
            'viewButtonUrl'=>'Yii::app()->createUrl("/facturacion/view&id=$data->id" )', // url de la acción 'update'
            'deleteButtonUrl'=>'Yii::app()->createUrl("/facturacion/eliminar&id=$data->id")', // url de la acción 'delete'
            'deleteConfirmation'=>'Seguro que quiere eliminar el elemento?', // mensaje de confirmación de borrado
            'afterDelete'=>'$.fn.yiiGridView.update("admin-grid");', // actualiza el grid después de borrar
		),
	
	),
)); ?>


<style media="screen">
	/*.footermediaQuery{
		position:fixed;
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
		border-top: 1px solid #ddd !important;
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
	}*/
</style>

<!-- <div class="panel">
	<div class="panel-body">
		<h1 style="text-align:center; margin:0;">Administrador de Facturacion</h1>
	</div>
</div> -->

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
						<td>id</td>
						<td>Proveedor</td>
						<td>Numero de factura</td>
						<td>Valor de factura </td>
						<td>Consecutivo</td>
						<td>Fecha de vencimiento</td>
						<td>Estado</td>
						<td>Fecha de Envio</td>
						<td>Fecha Pagado</td>
						
						<td>Opciones</td>
					</tr>
				</thead>
				<tbody>
					<?php
					// $link = "facturacion";
					// 	foreach ($AllFacturations as $value) {
					// 		echo '<tr>';
					// 		echo 	'<td>'.$value->cod.'</td>';
					// 		echo 	'<td>'.$value->provedor.'</td>';
					// 		echo 	'<td>'.$value->numeroFactura.'</td>';
					// 		echo 	'<td>'.$value->valorFactura.'</td>';
					// 		echo 	'<td>'.$value->estado.'</td>';
					// 		echo 	'<td>'.$value->Fecha_Creacion.'</td>';
					// 		echo 	'<td>'.$value->Fecha_Envio.'</td>';
					// 		echo 	'<td>'.$value->Fecha_Pagado.'</td>';
					// 		echo 	'<td>'.$value->Fecha_Vencimiento.'</td>';
					// 		echo 	'<td>';
					// 				// '<a href="'.Yii::app()->baseUrl.'/index.php?r=condicionescomerciales/view&id='.$value->id.'" data-toggle="tooltip" data-placement="bottom" title="Ver mas detalles"><img src="'.Yii::app()->theme->baseUrl.'/img/view.png" alt="Ver"></a>';
					// 		echo 		'<a href="'.Yii::app()->baseUrl.'/index.php?r='.$link.'/view&id='.$value->id.'" ><button class="btn-info radius" style=""data-toggle="tooltip" data-placement="bottom" title="Más detalles"><i class="fa fa-search" aria-hidden="true"></i></button></a>';
					// 				// 	'<a href="'.Yii::app()->baseUrl.'/index.php?r=condicionescomerciales/update&id='.$value->id.'" data-toggle="tooltip" data-placement="bottom" title="Editar"><img src="'.Yii::app()->theme->baseUrl.'/img/update.png" alt="Editar"></a>';
					// 		echo 		'<a href="'.Yii::app()->baseUrl.'/index.php?r='.$link.'/Aceptar&id='.$value->id.'" ><button class="radius btn-info" style=""data-toggle="tooltip" data-placement="bottom" title="Aceptar"><i class="fa fa-check" aria-hidden="true"></i></button></a>';
					// 		echo 	'</td>';
					// 		echo '</tr>';
					// 	}
					?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<script type="text/javascript">
// 	$(document).ready(function(){
// 		$(function () {
// 	$('[data-toggle="tooltip"]').tooltip()
// });
// 		// $('section#Footer').css({'margin-top':'9.5%'});
// 		$('body').css({'background-color':'#EBEEEE'});
// 		$('.panel').addClass('caja');
// 		$('table-bordered>thead>tr>th, .table-bordered>tbody>tr>th, .table-bordered>tfoot>tr>th, .table-bordered>thead>tr>td, .table-bordered>tbody>tr>td, .table-bordered>tfoot>tr>td').css({
// 			'border':'1px solid #ddd !important'
// 		});
// 		if ($(window).width() >= 820) {
// 			$('section#Footer').removeClass('footermediaQuerym');
// 			$('section#Footer').addClass('footermediaQuery');
// 		}
// 		$(window).resize(function(){
// 			 if ($(window).width() >= 820) {
// 				 $('section#Footer').removeClass('footermediaQuerym');
// 				 $('section#Footer').addClass('footermediaQuery');
// 			 }else if($(window).width() <= 766){
// 					$('section#Footer').removeClass('footermediaQuery');
// 					$('section#Footer').addClass('footermediaQuerym');

// 			 }
// 		});
// 	});
</script>