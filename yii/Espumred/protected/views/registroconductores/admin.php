<?php
/* @var $this RegistroconductoresController */
/* @var $model Registroconductores */

$this->breadcrumbs=array(
	'Registroconductores'=>array('admin'),
	'Manage',
);

// $this->menu=array(
// 	array('label'=>'List Registroconductores', 'url'=>array('index')),
// 	array('label'=>'Create Registroconductores', 'url'=>array('create')),
// );

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#registroconductores-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrador De Conductores</h1>

<p>
También puede escribir un operador de comparación (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) al principio de cada uno de los valores de búsqueda para especificar cómo se debe hacer la comparación. 
</p>

<div class="search-form">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'registroconductores-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'cc',
		'nombre',
		'cargo',
	    'eps',
		'afp',
		'vigenciaSeguridad',
		/*
		'arl',
		*/
		array(
			'class' => 'CButtonColumn',
            //'template'=>'{update}', // botones a mostrar
            'updateButtonUrl'=>'Yii::app()->createUrl("/registroconductores/update&id=$data->cc" )', // url de la acción 'update'
             'viewButtonUrl'=>'Yii::app()->createUrl("/registroconductores/view&id=$data->cc" )', // url de la acción 'update'
             'deleteButtonUrl'=>'Yii::app()->createUrl("/registroconductores/eliminar&id=$data->cc")', // url de la acción 'delete'
             'deleteConfirmation'=>'Seguro que quiere eliminar el elemento?', // mensaje de confirmación de borrado
             'afterDelete'=>'$.fn.yiiGridView.update("admin-grid");', // actualiza el grid después de borrar
		),
	),
)); ?>
