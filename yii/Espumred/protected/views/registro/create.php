<?php
/* @var $this RegistroController */
/* @var $model Registro */

$this->breadcrumbs=array(
	'Registros'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Listar Registro', 'url'=>array('index')),
	array('label'=>'Administrador Registro', 'url'=>array('admin')),
);
?>

<h1 align="center">Registrar  Herramientas a Mecanico</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>