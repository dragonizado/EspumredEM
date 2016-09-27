<?php
/* @var $this SeguridadsocialController */
/* @var $model Seguridadsocial */

$this->breadcrumbs=array(
	'Seguridadsocials'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Seguridadsocial', 'url'=>array('index')),
	array('label'=>'Administrar Seguridadsocial', 'url'=>array('admin')),
);
?>

<h1 align="center">Create Seguridad social</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>