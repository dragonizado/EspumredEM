<?php
/* @var $this LoteController */
/* @var $model Lote */

// $this->breadcrumbs=array(
// 	'Lotes'=>array('index'),
// 	'Manage',
// );

$this->menu=array(
	array('label'=>'Listar Lote', 'url'=>array('index')),
	array('label'=>'Crear Lote', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#lote-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrador Lotes</h1>


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
	'id'=>'lote-grid',
	'dataProvider'=>$model->search2(),
	'filter'=>$model,
	'columns'=>array(
		'codLote',
		'densidad',
		'altura',
		'ancho',
		'largo',
		array(
			'class' => 'CButtonColumn',
            'updateButtonUrl'=>'Yii::app()->createUrl("/lote/update&id=$data->codLote" )', // url de la acción 'update'
           // 'viewButtonUrl'=>'Yii::app()->createUrl("/lote/view&id=$data->codLote" )', // url de la acción 'update'
            'deleteButtonUrl'=>'Yii::app()->createUrl("/lote/eliminar&id=$data->codLote")', // url de la acción 'delete'
            'deleteConfirmation'=>'Seguro que quiere eliminar el elemento?', // mensaje de confirmación de borrado
            'afterDelete'=>'$.fn.yiiGridView.update("admin-grid");', // actualiza el grid después de borrar
		),
	),
)); ?>
