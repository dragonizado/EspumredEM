<?php
/* @var $this InformacionfamiliarController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Informacionfamiliar',
);

$this->menu=array(
	array('label'=>'Crear Informacionfamiliar', 'url'=>array('create')),
	array('label'=>'Administrador Informacionfamiliar', 'url'=>array('admin')),
);
?>

<h1>Informacion familiar</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
