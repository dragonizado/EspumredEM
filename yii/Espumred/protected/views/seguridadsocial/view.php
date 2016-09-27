<?php
/* @var $this SeguridadsocialController */
/* @var $model Seguridadsocial */

$this->breadcrumbs=array(
	'Seguridadsocials'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Seguridadsocial', 'url'=>array('index')),
	array('label'=>'CrearSeguridadsocial', 'url'=>array('create')),
	array('label'=>'Actualizar Seguridadsocial', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Seguridadsocial', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrador Seguridadsocial', 'url'=>array('admin')),
);
?>

<h1>Vista Seguridad social #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'censantias',
		'afp',
		'eps',
	),
)); ?>
