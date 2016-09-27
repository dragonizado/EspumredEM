<?php
/* @var $this ProvedoresfacturasController */
/* @var $dataProvider CActiveDataProvider */

// $this->breadcrumbs=array(
// 	'Provedoresfacturases',
// );

$this->menu=array(
	array('label'=>'Crear Proveedores facturas', 'url'=>array('create')),
	array('label'=>'Administrador Proveedores facturas', 'url'=>array('admin')),
);
?>

<h1>Proveedores facturas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
