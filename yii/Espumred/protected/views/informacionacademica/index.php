<?php
/* @var $this InformacionacademicaController */
/* @var $dataProvider CActiveDataProvider */

// $this->breadcrumbs=array(
// 	'Informacionacademicas',
// );

$this->menu=array(
	array('label'=>'Crear Informacion academica', 'url'=>array('create')),
	array('label'=>'Administrar Informacion academica', 'url'=>array('admin')),
);
?>

<h1 align="center">Informacion academicas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	'pager'=>array("htmlOptions"=>array("class"=>"pagination"))
)); ?>
