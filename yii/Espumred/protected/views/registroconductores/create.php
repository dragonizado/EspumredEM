<?php
/* @var $this RegistroconductoresController */
/* @var $model Registroconductores */

$this->breadcrumbs=array(
	'Registroconductores'=>array('create'),
	'Create',
);

?>

<h1 align="center">Registro Conductores</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>