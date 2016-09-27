<?php
/* @var $this MecanicosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Mecanicos',
);

$this->menu=array(
	array('label'=>'Crear Mecanicos', 'url'=>array('create')),
	array('label'=>'Administrador Mecanicos', 'url'=>array('admin')),
);
?>

<h1>Mecanicos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	'pager'=>array("htmlOptions"=>array("class"=>"pagination"))
)); ?>
