<?php
/* @var $this CargosController */
/* @var $model Cargos */

$this->breadcrumbs=array(
	'Cargos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Lista Cargos', 'url'=>array('index')),
	array('label'=>'Administrador Cargos', 'url'=>array('admin')),
);
?>

<h1 align="center">Crear Cargos</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>