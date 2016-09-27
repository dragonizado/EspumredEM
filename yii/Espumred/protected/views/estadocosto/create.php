<?php
/* @var $this EstadocostoController */
/* @var $model Estadocosto */

$this->breadcrumbs=array(
	'Estadocostos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Listar Estadocosto', 'url'=>array('index')),
	array('label'=>'Adminstrador Estadocosto', 'url'=>array('admin')),
);
?>

<h1>Crear Estadocosto</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>