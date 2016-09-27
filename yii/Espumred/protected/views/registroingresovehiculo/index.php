<?php
/* @var $this RegistroingresovehiculoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Registroingresovehiculos',
);

$this->menu=array(
	array('label'=>'Create Registroingresovehiculo', 'url'=>array('create')),
	array('label'=>'Manage Registroingresovehiculo', 'url'=>array('admin')),
);
?>

<h1>Registroingresovehiculos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
