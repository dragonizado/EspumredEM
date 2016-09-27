<?php
/* @var $this CartaremisoraController */
/* @var $dataProvider CActiveDataProvider */

// $this->breadcrumbs=array(
// 	'Cartaremisoras',
// );

$this->menu=array(
	array('label'=>'Crear Cartaremisora', 'url'=>array('create')),
	array('label'=>'Administrador Cartaremisora', 'url'=>array('admin')),
);
?>

<h1 align="center">Cartaremisoras</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	'pager'=>array("htmlOptions"=>array("class"=>"pagination"))
)); ?>
