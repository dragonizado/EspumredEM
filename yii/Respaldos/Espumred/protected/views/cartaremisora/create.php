<?php
/* @var $this CartaremisoraController */
/* @var $model Cartaremisora */

$this->breadcrumbs=array(
	'Cartaremisoras'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Cartaremisora', 'url'=>array('index')),
	array('label'=>'Administrador Cartaremisora', 'url'=>array('admin')),
);
?>

<h1 align="center">Crear Cartaremisora</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>