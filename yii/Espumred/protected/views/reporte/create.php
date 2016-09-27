<?php
/* @var $this ReporteController */
/* @var $model Reporte */

$this->breadcrumbs=array(
	'Reportes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Reporte', 'url'=>array('index')),
	array('label'=>'Manage Reporte', 'url'=>array('admin')),
);
?>

<h1>Create Reporte</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>