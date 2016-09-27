<?php
/* @var $this IngresopersonalController */
/* @var $model Ingresopersonal */

// $this->breadcrumbs=array(
// 	'Ingresopersonal'=>array('index'),
// 	'Manage',
// );

$this->menu=array(
	array('label'=>'List Ingresopersonal', 'url'=>array('index')),
	array('label'=>'Create Ingresopersonal', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#ingresopersonal-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrador Ingreso Personal</h1>

<p>
También puede escribir un operador de comparación (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) al principio de cada uno de los valores de búsqueda para especificar cómo se debe hacer la comparación. 
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'ingresopersonal-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'nombre',
		'area',
		'pertenencia',
		'fecha',
		/*
		'observacion',
		'fecha',
		'hora',
		*/
		array(
			'class' => 'CButtonColumn',
            //'template'=>'{update}', // botones a mostrar
            'updateButtonUrl'=>'Yii::app()->createUrl("/Ingresopersonal/update&id=$data->id" )', // url de la acción 'update'
             'viewButtonUrl'=>'Yii::app()->createUrl("/Ingresopersonal/view&id=$data->id" )', // url de la acción 'update'
             'deleteButtonUrl'=>'Yii::app()->createUrl("/Ingresopersonal/eliminar&id=$data->id")', // url de la acción 'delete'
             'deleteConfirmation'=>'Seguro que quiere eliminar el elemento?', // mensaje de confirmación de borrado
             'afterDelete'=>'$.fn.yiiGridView.update("admin-grid");', // actualiza el grid después de borrar
		),
	),
)); ?>
