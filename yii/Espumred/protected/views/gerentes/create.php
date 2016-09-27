<?php
/* @var $this ClienteController */
/* @var $model Cliente */

$this->breadcrumbs=array(
	'Gerente'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Gerente', 'url'=>array('index')),
	array('label'=>'Administrador Gerente', 'url'=>array('admin')),
);
?>

<h1 align="center">Crear Gerente</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>