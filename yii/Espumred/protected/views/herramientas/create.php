<?php
/* @var $this HerramientasController */
/* @var $model Herramientas */

$this->breadcrumbs=array(
	'Herramientases'=>array('index'),
	'Crer',
);

$this->menu=array(
	array('label'=>'Listar Herramientas', 'url'=>array('index')),
	array('label'=>'Administrador Herramientas', 'url'=>array('admin')),
);
?>

<h1 align="center">Crear Herramientas</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>