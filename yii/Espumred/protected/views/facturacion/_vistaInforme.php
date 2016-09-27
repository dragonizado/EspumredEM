
<?php
/* @var $this FacturacionController */
/* @var $model Facturacion */

// $this->breadcrumbs=array(
// 	'Facturacions'=>array('index'),
// 	'Administrador',
// );


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
	'dataProvider'=>$model->searchfiltro(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'provedor',
		'numeroFactura',
		'valorFactura',
		'consecutivo',
		'Fecha_Vencimiento',
		'estado',
		'Fecha_Envio',
		/*
		'Facturacioncol',
		
		'Fecha_Creacion',
		'Fecha_Modificacion',
		*/
		array(
			'class' => 'CButtonColumn',
            'template'=>'{view}{Aceptar}', // botones a mostrar
            'updateButtonUrl'=>'Yii::app()->createUrl("/facturacion/updateInfo&id=$data->id" )', // url de la acción 'update'
            'viewButtonUrl'=>'Yii::app()->createUrl("/facturacion/view&id=$data->id" )', // url de la acción 'update'
            'deleteButtonUrl'=>'Yii::app()->createUrl("/facturacion/eliminar&id=$data->id")', // url de la acción 'delete'
            'deleteConfirmation'=>'Seguro que quiere eliminar el elemento?', // mensaje de confirmación de borrado
            'afterDelete'=>'$.fn.yiiGridView.update("admin-grid");', // actualiza el grid después de borrar
            'buttons'=>array(
			'Aceptar' => array( //botón para la acción nueva
		    'label'=>'Aceptar', // titulo del enlace del botón nuevo
		    'imageUrl'=>Yii::app()->request->baseUrl.'/images/aceptar2.jpg', //ruta icono para el botón
		    'url'=>'Yii::app()->createUrl("/facturacion/aceptar&id=$data->id" )', //url de la acción nueva
		    'afterAceptar'=>'$.fn.yiiGridView.update("admin-grid");', // actualiza el grid después de borrar
		    ),
		),
		),
	),
)); ?>
