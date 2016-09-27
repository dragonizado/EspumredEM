<?php
/* @var $this ClienteController */
/* @var $model Cliente */

$this->breadcrumbs=array(
	'Gerente'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Gerente', 'url'=>array('index')),
	array('label'=>'Crear Gerente', 'url'=>array('create')),
	array('label'=>'Actualizar Gerente', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Gerente', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Gerente', 'url'=>array('admin')),
);
?>

<h1>Vista Cliente :<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
		'correo',
		'fecha_creacion',
		'fecha_modificacion',
	),
)); ?>
