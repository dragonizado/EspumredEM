<?php
/* @var $this DescargoespumasController */
/* @var $model Descargoespumas */

$this->breadcrumbs=array(
	'Descargoespumases'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Descargoespumas', 'url'=>array('index')),
	array('label'=>'CrearDescargoespumas', 'url'=>array('create')),
	array('label'=>'Actualizar Descargoespumas', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Descargoespumas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrad Descargoespumas', 'url'=>array('admin')),
);
?>

<h1 align="center">View Descargoespumas #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'numeroLote',
		'CantidadConsumida',
		
	),
)); ?>
