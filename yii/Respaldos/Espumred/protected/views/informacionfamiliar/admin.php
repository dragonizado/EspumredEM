<?php
/* @var $this InformacionfamiliarController */
/* @var $model Informacionfamiliar */

$this->breadcrumbs=array(
	'Informacionfamiliars'=>array('index'),
	'Administrador',
);

$this->menu=array(
	array('label'=>'Listar Informacionfamiliar', 'url'=>array('index')),
	array('label'=>'Crear Informacionfamiliar', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#informacionfamiliar-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1 >Administrador Informacion familiar</h1>

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
	'id'=>'informacionfamiliar-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'ccEmpleado',
		'nombreFamiliar',
		'parantesco',
		'fechaDeNacimiento',
		'edad',
		/*
		'escolaridad',
		'ocupacion',
		'viveConEmpleado',
		'dependeDelmpleado',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
