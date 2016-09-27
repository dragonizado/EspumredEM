<?php
/* @var $this InformacionpersonalController */
/* @var $model Informacionpersonal */

$this->breadcrumbs=array(
	'Informacionpersonals'=>array('index'),
	'Crear',
);

// $this->menu=array(
// 	array('label'=>'List Informacionpersonal', 'url'=>array('index')),
// 	array('label'=>'Manage Informacionpersonal', 'url'=>array('admin')),
// );
?>

<h1 align="center">Crear Informacionpersonal</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>