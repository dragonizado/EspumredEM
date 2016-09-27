<?php
/* @var $this PrestamosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Prestamos',
);

$this->menu=array(
	array('label'=>'Crear Prestamos', 'url'=>array('create')),
	array('label'=>'Administrador Prestamos', 'url'=>array('admin')),
);
?>

<h1>Prestamos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
