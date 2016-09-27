<?php
/* @var $this RegistroconductoresController */
/* @var $model Registroconductores */

$this->breadcrumbs=array(
	'Registroconductores'=>array('index'),
	$model->cc,
);

$this->menu=array(
	array('label'=>'List Registroconductores', 'url'=>array('index')),
	array('label'=>'Create Registroconductores', 'url'=>array('create')),
	array('label'=>'Update Registroconductores', 'url'=>array('update', 'id'=>$model->cc)),
	array('label'=>'Delete Registroconductores', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->cc),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Registroconductores', 'url'=>array('admin')),
);
?>

<h1>View Registroconductores #<?php echo $model->cc; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'cc',
		'nombre',
		'cargo',
		'vigenciaSeguridad',
		'eps',
		'afp',
		'arl',
	),
)); ?>
