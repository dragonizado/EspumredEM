<?php
/* @var $this RepuestosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Repuestos',
);

$this->menu=array(
	array('label'=>'Crear Repuestos', 'url'=>array('create')),
	array('label'=>'Administrador Repuestos', 'url'=>array('admin')),
);
?>

<h1>Repuestos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
