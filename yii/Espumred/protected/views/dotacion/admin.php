<?php
/* @var $this DotacionController */
/* @var $model Dotacion */

// $this->breadcrumbs=array(
// 	'Dotacions'=>array('index'),
// 	'Manage',
// );

// $this->menu=array(
// 	array('label'=>'List Dotacion', 'url'=>array('index')),
// 	array('label'=>'Create Dotacion', 'url'=>array('create')),
// );

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#dotacion-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1 align="center">Manage Dotacions</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'dotacion-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'pager'=>array("htmlOptions"=>array("class"=>"pagination")),
	'columns'=>array(
		'id',
		'camisa',
		'pantalon',
		'delantal',
		'overol',
		
		/*
		'tenis',
		'otrasDotaciones',
		*/
		array(
			'class' => 'CButtonColumn',
            // 'template'=>'{delete}{update}{accion_nueva}', // botones a mostrar
            'updateButtonUrl'=>'Yii::app()->createUrl("/dotacion/update&id=$data->id" )', // url de la acción 'update'
            'viewButtonUrl'=>'Yii::app()->createUrl("/dotacion/view&id=$data->id" )', // url de la acción 'update'
            'deleteButtonUrl'=>'Yii::app()->createUrl("/dotacion/eliminar&id=$data->id")', // url de la acción 'delete'
            'deleteConfirmation'=>'Seguro que quiere eliminar el elemento?', // mensaje de confirmación de borrado
            'afterDelete'=>'$.fn.yiiGridView.update("admin-grid");', // actualiza el grid después de borrar
		),
	),
)); ?>
