<?php
/* @var $this RegistroController */
/* @var $model Registro */

$this->breadcrumbs=array(
	'Registros'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Listar Registro', 'url'=>array('index')),
	array('label'=>'Crear Registro', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#registro-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrador Registros</h1>

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
	'id'=>'registro-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'idMecanico',
		'tipo',
		'descripcion',
		array(
			'class' => 'CButtonColumn',
            // 'template'=>'{delete}{update}{accion_nueva}', // botones a mostrar
            'updateButtonUrl'=>'Yii::app()->createUrl("/registro/update&id=$data->id" )', // url de la acción 'update'
            'viewButtonUrl'=>'Yii::app()->createUrl("/registro/view&id=$data->id" )', // url de la acción 'update'
            'deleteButtonUrl'=>'Yii::app()->createUrl("/registro/eliminar&id=$data->id")', // url de la acción 'delete'
            'deleteConfirmation'=>'Seguro que quiere eliminar el elemento?', // mensaje de confirmación de borrado
            'afterDelete'=>'$.fn.yiiGridView.update("admin-grid");', // actualiza el grid después de borrar
		),
	),
)); ?>
