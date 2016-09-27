<?php
/* @var $this FormacionController */
/* @var $model Formacion */

// $this->breadcrumbs=array(
// 	'Formacions'=>array('index'),
// 	'Create',
// );

$this->menu=array(
	array('label'=>'Listar Formacion', 'url'=>array('index')),
	array('label'=>'Administrador Formacion', 'url'=>array('admin')),
);
?>

<h1 align="center">Crear Formacion</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>