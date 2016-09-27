<?php
/* @var $this EspumasController */
/* @var $model Espumas */

$this->breadcrumbs=array(
	'Espumases'=>array('index'),
	$model->cod,
);

$this->menu=array(
	array('label'=>'Crear Espumas', 'url'=>array('create')),
	array('label'=>'Actualizar Espumas', 'url'=>array('update', 'id'=>$model->cod)),
	array('label'=>'Eliminar Espumas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->cod),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Espumas', 'url'=>array('admin')),
);
?>

<h1>Vista Espumas #<?php echo $model->cod; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'cod',
		'tipo',
		'descripcion',
		'ancho',
		'largo',
		'alto',
		'densidad',
	),
)); ?>
