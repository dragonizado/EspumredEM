<?php
/* @var $this FacturacionController */
/* @var $dataProvider CActiveDataProvider */

// $this->breadcrumbs=array(
// 	'Facturacion',
// );

$this->menu=array(
	array('label'=>'Crear Factura', 'url'=>array('create')),
	array('label'=>'Administrador Factura', 'url'=>array('admin')),
);
?>

<h1 align="center">Facturacion</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
