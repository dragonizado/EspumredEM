<?php
/* @var $this CargarespumasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cargarespumas',
);

$this->menu=array(
	array('label'=>'Crear Cargarespumas', 'url'=>array('create')),
	array('label'=>'Administrador Cargarespumas', 'url'=>array('admin')),
);
?>

<h1 align="center">Cargar espumas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
