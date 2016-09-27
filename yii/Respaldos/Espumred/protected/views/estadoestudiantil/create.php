<?php
/* @var $this EstadoestudiantilController */
/* @var $model Estadoestudiantil */

$this->breadcrumbs=array(
	'Estadoestudiantils'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Estadoestudiantil', 'url'=>array('index')),
	array('label'=>'Administrar Estadoestudiantil', 'url'=>array('admin')),
);
?>

<h1 align="center">Crear Estado estudiantil</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>