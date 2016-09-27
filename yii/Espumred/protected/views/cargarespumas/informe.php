<?php
/* @var $this CargarespumasController */
/* @var $model Cargarespumas */

$this->breadcrumbs=array(
	'Cargarespumas'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Cargarespumas', 'url'=>array('index')),
	array('label'=>'Administrador Cargarespumas', 'url'=>array('admin')),
);
?>

<h1 align="center">Informe Espumas consumida</h1>

<?php $this->renderPartial('_formInforme', array('model'=>$model)); ?>