<?php
/* @var $this InformacionpersonalController */
/* @var $model Informacionpersonal */

$this->breadcrumbs=array(
	'Informacionpersonals'=>array('index'),
	'Administrador',
);

$this->menu=array(
	array('label'=>'Listar Informacionpersonal', 'url'=>array('index')),
	array('label'=>'Crear Informacionpersonal', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#informacionpersonal-grid').yiiGridView('update', {
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
	'id'=>'informacionpersonal-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'cc',
		'nombre',
		'fechaNacimiento',
		'lugarNacimiento',
		'sexo',
		'rh',
		/*
		'estadoCivil',
		'numeroHijos',
		'direccionResidencia',
		'barrio',
		'municipio',
		'telefono',
		'celular',
		'libretaMilitar',
		'claseLibretaMilitar',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
