<?php
/* @var $this RegistropersonalController */
/* @var $model Registropersonal */

// $this->breadcrumbs=array(
// 	'Registropersonals'=>array('index'),
// 	'Create',
// );

$this->menu=array(
	array('label'=>'List Registropersonal', 'url'=>array('index')),
	array('label'=>'Manage Registropersonal', 'url'=>array('admin')),
);
?>

<h1 align="center">Registro Personal</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>