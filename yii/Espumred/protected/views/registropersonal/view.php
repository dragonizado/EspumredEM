<?php
/* @var $this RegistropersonalController */
/* @var $model Registropersonal */

// $this->breadcrumbs=array(
// 	'Registropersonals'=>array('index'),
// 	$model->cc,
// );

$this->menu=array(
	array('label'=>'List Registropersonal', 'url'=>array('index')),
	array('label'=>'Create Registropersonal', 'url'=>array('create')),
	array('label'=>'Update Registropersonal', 'url'=>array('update', 'id'=>$model->cc)),
	array('label'=>'Delete Registropersonal', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->cc),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Registropersonal', 'url'=>array('admin')),
);
?>

<h1>View Registropersonal #<?php echo $model->cc; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'nombre',
		'estado',
		'horaingreso',
		'horasalida',
	),
)); ?>
