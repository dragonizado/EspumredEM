<?php
/* @var $this EstadoestudiantilController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Estadoestudiantils',
);

$this->menu=array(
	array('label'=>'Crear Estadoestudiantil', 'url'=>array('create')),
	array('label'=>'Administrar Estadoestudiantil', 'url'=>array('admin')),
);
?>

<h1>Estado estudiantil</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	'pager'=>array("htmlOptions"=>array("class"=>"pagination"))
)); ?>
