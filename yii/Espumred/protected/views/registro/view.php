<?php
/* @var $this RegistroController */
/* @var $model Registro */

$this->breadcrumbs=array(
	'Registros'=>array('index'),
	$model->idMecanico,
);

$this->menu=array(
	array('label'=>'Listar Registro', 'url'=>array('index')),
	array('label'=>'Crear Registro', 'url'=>array('create')),
	array('label'=>'Actualizar Registro', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Registro', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrador Registro', 'url'=>array('admin')),
);
?>

<h1>Vista Registro #<?php echo $model->idMecanico; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'idMecanico',
		'tipo',
		'descripcion',
	),
)); ?>
