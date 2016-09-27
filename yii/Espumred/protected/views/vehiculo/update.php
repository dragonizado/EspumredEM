<?php
/* @var $this VehiculoController */
/* @var $model Vehiculo */

$this->breadcrumbs=array(
	'Vehiculos'=>array('index'),
	$model->placa=>array('view','id'=>$model->placa),
	'Update',
);


?>

<h1 align="center"> Registro Vehiculo <?php echo $model->placa; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>