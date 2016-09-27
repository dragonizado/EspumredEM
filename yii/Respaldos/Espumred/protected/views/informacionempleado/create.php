<?php
/* @var $this InformacionempleadoController */
/* @var $model Informacionempleado */

$this->breadcrumbs=array(
	'Informacionempleados'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Informacionempleado', 'url'=>array('index')),
	array('label'=>'Manage Informacionempleado', 'url'=>array('admin')),
);
?>

<h1>Create Informacionempleado</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>