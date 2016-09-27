<?php
/* @var $this PrestamosController */
/* @var $model Prestamos */

$this->breadcrumbs=array(
	'Prestamoses'=>array('index'),
	'Administrador',
);

$this->menu=array(
	array('label'=>'Listar Prestamos', 'url'=>array('index')),
	array('label'=>'Crear Prestamos', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#prestamos-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrador  de Prestamos</h1>

<p>
También puede escribir un operador de comparación (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) al principio de cada uno de los valores de búsqueda para especificar cómo se debe hacer la comparación. 
</p>
<?php echo CHtml::link('Opciones avanzadas','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'prestamos-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'id_Cliente',
		'id_Usuario',
		'id_Ciudad',
		'id_Articulo',
		'valorUnitario',
		/*
		'valortotal',
		'cantidad',
		'Fecha_Creacion',
		'Fecha_Modificacion',
		'consecutivo',
		'descripcion',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
