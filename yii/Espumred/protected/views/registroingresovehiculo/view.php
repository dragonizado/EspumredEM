<?php
/* @var $this RegistroingresovehiculoController */
/* @var $model Registroingresovehiculo */

$this->breadcrumbs=array(
	'Registroingresovehiculos'=>array('index'),
	$model->id,
);


?>

<h1>View Registroingresovehiculo #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'placa',
		'horaingreso',
		'horasalida',
		'fecha',
		'estado',
	),
)); ?>
