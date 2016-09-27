<?php
/* @var $this SeguridadsocialController */
/* @var $model Seguridadsocial */

$this->breadcrumbs=array(
	'Seguridadsocials'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);

?>

<h1>Actualizar Seguridad social </h1>

<?php $this->renderPartial('_formTodo', array('model'=>$model)); ?>