<?php
/* @var $this ReporteController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Reportes',
);

$this->menu=array(
	array('label'=>'Create Reporte', 'url'=>array('create')),
	array('label'=>'Manage Reporte', 'url'=>array('admin')),
);
?>

<h1>Reportes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
