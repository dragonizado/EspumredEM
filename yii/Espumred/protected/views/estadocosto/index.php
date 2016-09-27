<?php
/* @var $this EstadocostoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Estadocostos',
);

$this->menu=array(
	array('label'=>'Crear Estadocosto', 'url'=>array('create')),
	array('label'=>'Administrador Estadocosto', 'url'=>array('admin')),
);
?>

<h1>Estado costos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
