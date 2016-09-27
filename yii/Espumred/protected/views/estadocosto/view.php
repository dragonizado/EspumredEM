<?php
/* @var $this EstadocostoController */
/* @var $model Estadocosto */

$this->breadcrumbs=array(
	'Estadocostos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Estadocosto', 'url'=>array('index')),
	array('label'=>'Crear Estadocosto', 'url'=>array('create')),
	array('label'=>'Actualizar Estadocosto', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Estadocosto', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrador Estadocosto', 'url'=>array('admin')),
);
?>

<h1>Vista Estadocosto #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'fechaCosto',
	),
)); ?>
