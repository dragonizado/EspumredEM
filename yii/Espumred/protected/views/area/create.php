<?php
/* @var $this AreaController */
/* @var $model Area */

$this->breadcrumbs=array(
	'Areas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Listar Area', 'url'=>array('index')),
	array('label'=>'Administrador Area', 'url'=>array('admin')),
);
?>

<h1>Crear Area</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>