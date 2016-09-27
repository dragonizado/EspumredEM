<?php
/* @var $this InformacionempleadoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Informacionempleados',
);

$this->menu=array(
	array('label'=>'Create Informacionempleado', 'url'=>array('create')),
	array('label'=>'Manage Informacionempleado', 'url'=>array('admin')),
);
?>

<h1>Informacionempleados</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
