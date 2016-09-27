<?php
/* @var $this VehiculoController */
/* @var $model Vehiculo */

$this->breadcrumbs=array(
	'Vehiculos'=>array('index'),
	'Create',
);


?>

<h1 align="center">Crear Vehiculo</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>