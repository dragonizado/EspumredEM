<?php
/* @var $this FormacionController */
/* @var $dataProvider CActiveDataProvider */

// $this->breadcrumbs=array(
// 	'Formacions',
// );

$this->menu=array(
	array('label'=>'Crear Formacion', 'url'=>array('create')),
	array('label'=>'Administrador Formacion', 'url'=>array('admin')),
);
?>

<h1>Formacion</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
