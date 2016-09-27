<?php
/* @var $this ExtensionesController */
/* @var $model Extensiones */

$this->breadcrumbs=array(
	'Extensiones'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Extensiones', 'url'=>array('index')),
	array('label'=>'Crear Extensiones', 'url'=>array('create')),
	array('label'=>'Actualizar Extensiones', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Extensiones', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrador Extensiones', 'url'=>array('admin')),
);
?>

<h1>View Extensiones #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'area',
		'nombre',
		'correoElectronico',
	),
)); ?>
