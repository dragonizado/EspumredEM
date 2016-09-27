<?php
/* @var $this EstadoestudiantilController */
/* @var $model Estadoestudiantil */

$this->breadcrumbs=array(
	'Estadoestudiantils'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

?>

<h1>Actualizar Estadoestudiantil </h1>

<?php $this->renderPartial('_formTodo', array('model'=>$model)); ?>