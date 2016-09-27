<?php
/* @var $this EstadocostoController */
/* @var $model Estadocosto */

$this->breadcrumbs=array(
	'Estadocostos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);


?>

<h1 align="center";>Fecha Informe</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>