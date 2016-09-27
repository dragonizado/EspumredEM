<?php
/* @var $this RepuestosController */
/* @var $model Repuestos */

$this->breadcrumbs=array(
	'Repuestoses'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Repuestos', 'url'=>array('index')),
	array('label'=>'Administrador Repuestos', 'url'=>array('admin')),
);
?>

<h1 align="center">Crear Repuestos</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>