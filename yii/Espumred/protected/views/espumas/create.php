<?php
/* @var $this EspumasController */
/* @var $model Espumas */

$this->breadcrumbs=array(
	'Espumases'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Administrar Espumas', 'url'=>array('admin')),
);
?>


<h1 align="center">Crear Espumas</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>