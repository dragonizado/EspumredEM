<?php
/* @var $this InformacionpersonalController */
/* @var $dataProvider CActiveDataProvider */

// $this->breadcrumbs=array(
// 	'Informacionpersonals',
// );

$this->menu=array(
	array('label'=>'Crear Informacionpersonal', 'url'=>array('create')),
	array('label'=>'Administracion de  Informacion personal', 'url'=>array('admin')),
);
?>

<h1 align="center">Informacionpersonal</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	'pager'=>array("htmlOptions"=>array("class"=>"pagination"))
)); ?>
