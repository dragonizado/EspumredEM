<?php
/* @var $this ArticulosdedotacionController */
/* @var $model Articulosdedotacion */

$this->breadcrumbs=array(
	'Articulosdedotacions'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Articulosdedotacion', 'url'=>array('index')),
	array('label'=>'Crear Articulosdedotacion', 'url'=>array('create')),
	array('label'=>'Actualizar Articulosdedotacion', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Articulosdedotacion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrador Articulosdedotacion', 'url'=>array('admin')),
);
?>

<h1>Vista Articulosdedotacion #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
		'tipoDotacion',
	),
)); ?>
