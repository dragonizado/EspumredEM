<?php
/* @var $this MecanicosController */
/* @var $model Mecanicos */

$this->breadcrumbs=array(
	'Mecanicoses'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Listar Mecanicos', 'url'=>array('index')),
	array('label'=>'Crear Mecanicos', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#mecanicos-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrador Mecanicos</h1>

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
	'id'=>'mecanicos-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'cc',
		'Nombre',
		'Apellido',
		'Direccion',
		'Telefono',
		'Fecha_Creacion',
		/*
		'Fecha_Modificacion',
		*/
		array(
			'class' => 'CButtonColumn',
            // 'template'=>'{delete}{update}{accion_nueva}', // botones a mostrar
            'updateButtonUrl'=>'Yii::app()->createUrl("/mecanicos/update&id=$data->cc" )', // url de la acción 'update'
            'viewButtonUrl'=>'Yii::app()->createUrl("/mecanicos/view&id=$data->cc" )', // url de la acción 'update'
            'deleteButtonUrl'=>'Yii::app()->createUrl("/mecanicos/eliminar&id=$data->cc")', // url de la acción 'delete'
            'deleteConfirmation'=>'Seguro que quiere eliminar el elemento?', // mensaje de confirmación de borrado
            'afterDelete'=>'$.fn.yiiGridView.update("admin-grid");', // actualiza el grid después de borrar
		),
	),
)); ?>
