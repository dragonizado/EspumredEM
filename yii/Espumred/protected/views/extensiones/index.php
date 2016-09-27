<?php
/* @var $this ExtensionesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Extensiones',
);

$this->menu=array(
	array('label'=>'Crear Extensiones', 'url'=>array('create')),
	array('label'=>'Administrar Extensiones', 'url'=>array('admin')),
);
?>

<h1>Extensiones</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	'pager'=>array("htmlOptions"=>array("class"=>"pagination"))
)); ?>
