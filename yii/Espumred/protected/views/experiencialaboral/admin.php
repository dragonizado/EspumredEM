<?php
/* @var $this ExperiencialaboralController */
/* @var $model Experiencialaboral */

$this->menu=array(
// 	array('label'=>'List Experiencialaboral', 'url'=>array('index')),
	array('label'=>'Crear Experiencialaboral', 'url'=>array('crear')),
 );

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#experiencialaboral-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrador de  Informacion personal</h1>

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
	'id'=>'experiencialaboral-grid',
	'dataProvider'=>$model->search2(),
	'filter'=>$model,
	'columns'=>array(
		//'id',
		'cedula',
		'empresa',
		'cargo',
		'funciones',
		'fecha_inicio',
		'fecha_retiro',
		/*
		'fecha_retiro',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
