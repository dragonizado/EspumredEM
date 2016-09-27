<?php
/* @var $this SeguridadsocialController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Seguridadsocials',
);

$this->menu=array(
	array('label'=>'Crear Seguridadsocial', 'url'=>array('create')),
	array('label'=>'Administrar Seguridadsocial', 'url'=>array('admin')),
);
?>

<h1>Seguridad social</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
