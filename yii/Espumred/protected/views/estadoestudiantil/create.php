<?php
/* @var $this EstadoestudiantilController */
/* @var $model Estadoestudiantil */

$this->breadcrumbs=array(
	'Estadoestudiantils'=>array('index'),
	'Crear',
);
?>

<h1 align="center">Crear Estado estudiantil</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>