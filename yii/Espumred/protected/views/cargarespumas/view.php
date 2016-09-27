<?php
/* @var $this CargarespumasController */
/* @var $model Cargarespumas */

$this->breadcrumbs=array(
	'Cargarespumas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Cargarespumas', 'url'=>array('index')),
	array('label'=>'Crear Cargarespumas', 'url'=>array('create')),
	array('label'=>'Actualiza Cargarespumas', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Cargarespumas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrador Cargarespumas', 'url'=>array('admin')),
);
?>

<h1>Vista Cargarespumas #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'numeroBloque',
		'lote',
		'cantidadKilo',
		'altura',
		'ancho',
		'largo',
	),
)); ?>
