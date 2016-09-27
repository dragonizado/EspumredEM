<?php
/* @var $this RegistroingresovehiculoController */
/* @var $model Registroingresovehiculo */

$this->breadcrumbs=array(
	'Registroingresovehiculos'=>array('index'),
	'Create',
);


?>

<h1 align="center"> Registro ingreso vehiculo</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>