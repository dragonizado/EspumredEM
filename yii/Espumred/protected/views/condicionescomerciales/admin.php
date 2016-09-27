<?php
/* @var $this CondicionescomercialesController */
/* @var $model Condicionescomerciales */

// $this->breadcrumbs=array(
// 	'Informacionpersonals'=>array('index'),
// 	'Administrador',
// );

// $this->menu=array(                                                     //administrador de datos de Condiciones comerciales
// 	array('label'=>'Mostrar Condiciones comerciales', 'url'=>array('condicionescomerciales/admin')),
//
// );
//
// Yii::app()->clientScript->registerScript('search', "
// $('.search-button').click(function(){
// 	$('.search-form').toggle();
// 	return false;
// });
// $('.search-form form').submit(function(){
// 	$('#condicionescomerciales-grid').yiiGridView('update', {
// 		data: $(this).serialize()
// 	});
// 	return false;
// });
// ");
?>
<style media="screen">
	.footermediaQuery{
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
		<h1 style="text-align:center; margin:0;">Administrador de Condiciones Comerciales</h1>
	</div>
</div>

<!-- <p>
También puede escribir un operador de comparación (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) al principio de cada uno de los valores de búsqueda para especificar cómo se debe hacer la comparación.
</p> -->

<?php
// echo CHtml::link('Opciones avanzadas','#',array('class'=>'search-button'));
?>
<div class="search-form" style="display:none">
<?php
// $this->renderPartial('_search',array(
// 	'model'=>$model,
// ));
?>
</div><!-- search-form -->

<?php
//  $this->widget('zii.widgets.grid.CGridView', array(
//  'id'=>'condicionescomerciales-grid',
//  'dataProvider'=>$model->search(),
//  'filter'=>$model,
//  'pager'=>array("htmlOptions"=>array("class"=>"pagination")),
//
//  'columns'=>array(
//  	'cod',
//  	'nombreCliente',
//  	'nombreAsesor',
//  	'vigenciadesde',
//  	'vigenciahasta',
//
//
//  	array(
//  		'class' => 'CButtonColumn',
//             // 'template'=>'{delete}{update}{accion_nueva}', // botones a mostrar
//             'updateButtonUrl'=>'Yii::app()->createUrl("/condicionescomerciales/update&id=$data->TipologiaCliente" )', // url de la acción 'update'
//             'viewButtonUrl'=>'Yii::app()->createUrl("/condicionescomerciales/view&id=$data->TipologiaCliente" )', // url de la acción 'update'
//             //espacio de funcion de eliminacion de condicion comercial//--->
//             'afterDelete'=>'$.fn.yiiGridView.update("admin-grid");', // actualiza el grid después de borrar
//  	),
//  ),
// ));
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
				<thead>
					<tr>
						<td>Codigo</td>
						<td>Nombre cliente</td>
						<td>Nombre del asesor</td>
						<td>Vigencia desde </td>
						<td>Vigencia hasta</td>
						<td>Opciones</td>
					</tr>
				</thead>
				<tbody>
					<?php
						foreach ($allconditions as $value) {
							echo '<tr>';
							echo 	'<td>'.$value->cod.'</td>';
							echo 	'<td>'.$value->nombreCliente.'</td>';
							echo 	'<td>'.$value->nombreAsesor.'</td>';
							echo 	'<td>'.$value->vigenciadesde.'</td>';
							echo 	'<td>'.$value->vigenciahasta.'</td>';
							echo 	'<td>';
									// '<a href="'.Yii::app()->baseUrl.'/index.php?r=condicionescomerciales/view&id='.$value->id.'" data-toggle="tooltip" data-placement="bottom" title="Ver mas detalles"><img src="'.Yii::app()->theme->baseUrl.'/img/view.png" alt="Ver"></a>';
							echo 		'<a href="'.Yii::app()->baseUrl.'/index.php?r=condicionescomerciales/view&id='.$value->id.'" ><button class="btn-info radius" style=""data-toggle="tooltip" data-placement="bottom" title="Más detalles"><i class="fa fa-search" aria-hidden="true"></i></button></a>';
									// 	'<a href="'.Yii::app()->baseUrl.'/index.php?r=condicionescomerciales/update&id='.$value->id.'" data-toggle="tooltip" data-placement="bottom" title="Editar"><img src="'.Yii::app()->theme->baseUrl.'/img/update.png" alt="Editar"></a>';
							echo 		'<a href="'.Yii::app()->baseUrl.'/index.php?r=condicionescomerciales/update&id='.$value->id.'" ><button class="radius btn-info" style=""data-toggle="tooltip" data-placement="bottom" title="Editar"><i class="fa fa-pencil" aria-hidden="true"></i></button></a>';
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
