<?php
/* @var $this VehiculoController */
/* @var $model Vehiculo */

$this->breadcrumbs=array(
	'Vehiculos'=>array('index'),
	$model->placa,
);


?>

<h1>View Vehiculo #<?php echo $model->placa; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'placa',
		'modelo',
		'propietario',
		'conductor',
		'ayudante',
	),
)); ?>
