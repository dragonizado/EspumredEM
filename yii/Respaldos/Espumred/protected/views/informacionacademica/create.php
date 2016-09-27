<?php
/* @var $this InformacionacademicaController */
/* @var $model Informacionacademica */

$this->breadcrumbs=array(
	'Informacionacademicas'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Informacionacademica', 'url'=>array('index')),
	array('label'=>'Administrar Informacionacademica', 'url'=>array('admin')),
);
?>

<h1 align="center">Crear Informacion academica</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>