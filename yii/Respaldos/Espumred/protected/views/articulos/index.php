<?php
/* @var $this ArticulosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Articulos',
);

$this->menu=array(
	array('label'=>'Crear Producto', 'url'=>array('create')),
	array('label'=>'Administrador Productos', 'url'=>array('admin')),
);
?>

<h1 align="center">Producto</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
