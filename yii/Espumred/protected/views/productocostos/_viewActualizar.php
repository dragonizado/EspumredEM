<?php
/* @var $this ProductocostosController */
/* @var $model Productocostos */

$this->breadcrumbs=array(
	'Productocostoses'=>array('index'),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Productocostos', 'url'=>array('index')),
	array('label'=>'Administrador Productocostos', 'url'=>array('admin')),
);
?>

<h1 align="center">Productos</h1>

<?php $this->renderPartial('_formActualizar', array('model'=>$model)); ?>