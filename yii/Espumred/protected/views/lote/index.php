<?php
/* @var $this LoteController */
/* @var $dataProvider CActiveDataProvider */

// $this->breadcrumbs=array(
// 	'Lotes',
// );

$this->menu=array(
	array('label'=>'Crear Lote', 'url'=>array('create')),
	array('label'=>'Administrar Lote', 'url'=>array('admin')),
);
?>

<h1 align="center">Lotes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
