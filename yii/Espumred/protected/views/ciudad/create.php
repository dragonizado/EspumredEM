<?php
/* @var $this CiudadController */
/* @var $model Ciudad */

$this->breadcrumbs=array(
	'Ciudad'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Ciudad', 'url'=>array('index')),
	array('label'=>'Administrador Ciudad', 'url'=>array('admin')),
);
?>

<h1 align="center">Crear Ciudad</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>