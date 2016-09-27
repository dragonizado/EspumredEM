<?php
/* @var $this MecanicosController */
/* @var $model Mecanicos */

$this->breadcrumbs=array(
	'Mecanicos'=>array('index'),
	$model->cc,
);

$this->menu=array(
	array('label'=>'Listar Mecanicos', 'url'=>array('index')),
	array('label'=>'Crear Mecanicos', 'url'=>array('create')),
	array('label'=>'Actualizar Mecanicos', 'url'=>array('update', 'id'=>$model->cc)),
	array('label'=>'Eliminar Mecanicos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('eliminar','id'=>$model->cc),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrador Mecanicos', 'url'=>array('admin')),
);
?>

<h1>Vista Mecanicos #<?php echo $model->cc; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'cc',
		'Nombre',
		'Apellido',
		'Direccion',
		'Telefono',
		'Fecha_Creacion',
		'Fecha_Modificacion',
	),
)); ?>
