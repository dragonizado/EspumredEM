<?php
/* @var $this DescargoespumasController */
/* @var $model Descargoespumas */

$this->breadcrumbs=array(
	'Descargoespumases'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Listar Descargoespumas', 'url'=>array('index')),
	array('label'=>'Administrador Descargoespumas', 'url'=>array('admin')),
);
?>

<h1 align="center">Crear Descargoespumas</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>