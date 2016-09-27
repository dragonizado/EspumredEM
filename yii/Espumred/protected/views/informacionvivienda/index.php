<?php
/* @var $this InformacionviviendaController */
/* @var $dataProvider CActiveDataProvider */

// $this->breadcrumbs=array(
// 	'Informacionviviendas',
// );

// $this->menu=array(
// 	array('label'=>'Crear Informacionvivienda', 'url'=>array('create')),
// 	array('label'=>'Administrador Informacionvivienda', 'url'=>array('admin')),
// );
?>

<h1 align="center">Informacion viviendas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	'pager'=>array("htmlOptions"=>array("class"=>"pagination"))
)); ?>
