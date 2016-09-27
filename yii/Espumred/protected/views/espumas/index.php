<?php
/* @var $this EspumasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Espumases',
);

$this->menu=array(
	array('label'=>'Crear Espumas', 'url'=>array('create')),
	array('label'=>'Administrar Espumas', 'url'=>array('admin')),
);
?>

<h1>Espumas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
