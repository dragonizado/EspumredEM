<?php
/* @var $this ClienteController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Gerente',
);

$this->menu=array(
	array('label'=>'Crear Gerente', 'url'=>array('create')),
	array('label'=>'Administrador Gerente', 'url'=>array('admin')),
);
?>

<h1 align="center">Gerentes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	'pager'=>array("htmlOptions"=>array("class"=>"pagination"))
)); ?>
