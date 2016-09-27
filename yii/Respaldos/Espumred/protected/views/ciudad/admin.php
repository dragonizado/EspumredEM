<?php
/* @var $this CiudadController */
/* @var $model Ciudad */

$this->breadcrumbs=array(
	'Ciudad'=>array('index'),
	'Administrador',
);

$this->menu=array(
	array('label'=>'Listar Ciudad', 'url'=>array('index')),
	array('label'=>'Crear Ciudad', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#ciudad-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrador de  Ciudades</h1>

p>
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
	'id'=>'ciudad-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'NombreCiudad',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
