<?php
/* @var $this MecanicosController */
/* @var $model Mecanicos */

$this->breadcrumbs=array(
	'Mecanicoses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Listar Mecanicos', 'url'=>array('index')),
	array('label'=>'Administrador Mecanicos', 'url'=>array('admin')),
);
?>

<h1 align="center">Crear Mecanicos</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>