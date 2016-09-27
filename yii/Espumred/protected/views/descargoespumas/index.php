<?php
/* @var $this DescargoespumasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Descargoespumases',
);

$this->menu=array(
	array('label'=>'Crear Descargoespumas', 'url'=>array('create')),
	array('label'=>'Administrar Descargoespumas', 'url'=>array('admin')),
);
?>

<h1>Descargo espumas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
