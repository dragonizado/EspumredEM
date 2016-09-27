<?php
/* @var $this PrestamosController */
/* @var $model Prestamos */

$this->breadcrumbs=array(
	'Prestamos'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Prestamos', 'url'=>array('index')),
	array('label'=>'Administrador Prestamos', 'url'=>array('admin')),
);
?>

<h1 align="center">Crear Carta Prestamos</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>