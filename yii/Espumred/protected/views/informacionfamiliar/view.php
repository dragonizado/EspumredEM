<?php
/* @var $this InformacionfamiliarController */
/* @var $model Informacionfamiliar */

$this->breadcrumbs=array(
	'Informacionfamiliar'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Informacionfamiliar', 'url'=>array('index')),
	array('label'=>'Crear Informacionfamiliar', 'url'=>array('create')),
	array('label'=>'Actualizar Informacionfamiliar', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eleminar Informacionfamiliar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrador Informacionfamiliar', 'url'=>array('admin')),
);
?>

<h1>Vista Informacion familiar #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'ccEmpleado',
		'nombreFamiliar',
		'parantesco',
		'fechaDeNacimiento',
		'edad',
		'escolaridad',
		'ocupacion',
		'viveConEmpleado',
		'dependeDelmpleado',
	),
)); ?>
