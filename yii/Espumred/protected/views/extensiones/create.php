<?php
/* @var $this ExtencionesController */
/* @var $model Extenciones */

$this->breadcrumbs=array(
	'Extensiones'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Listar Extensiones', 'url'=>array('index')),
	array('label'=>'Administrar Extensiones', 'url'=>array('admin')),
);
?>

<h1 align="center">Crear Extensiones</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>