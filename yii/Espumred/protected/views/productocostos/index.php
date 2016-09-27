<?php
/* @var $this ProductocostosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Productocostoses',
);

$this->menu=array(
	array('label'=>'Crear Productocostos', 'url'=>array('create')),
	array('label'=>'Administrador Productocostos', 'url'=>array('admin')),
);
?>

<h1>Productocostos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
