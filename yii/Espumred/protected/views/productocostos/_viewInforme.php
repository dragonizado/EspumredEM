<?php
/* @var $this ProductocostosController */
/* @var $model Productocostos */

$this->breadcrumbs=array(
	'Productocostoses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Listar Productocostos', 'url'=>array('index')),
	array('label'=>'Administrador Productocostos', 'url'=>array('admin')),
);
?>

<h1 align="center">Productos</h1>

<?php $this->renderPartial('_formInforme', array('model'=>$model)); ?>