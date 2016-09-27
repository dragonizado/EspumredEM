<?php
/* @var $this ArticulosController */
/* @var $model Articulos */

$this->breadcrumbs=array(
	'Articulos'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Producto', 'url'=>array('index')),
	array('label'=>'Administrador de Producto', 'url'=>array('admin')),
);
?>

<h1 align="center">Crear Productos</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>