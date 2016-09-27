<?php
/* @var $this ProvedoresfacturasController */
/* @var $model Provedoresfacturas */

// $this->breadcrumbs=array(
// 	'Provedoresfacturases'=>array('index'),
// 	$model->id,
// );

$this->menu=array(
	array('label'=>'Listar Provedoresfacturas', 'url'=>array('index')),
	array('label'=>'Crear Provedoresfacturas', 'url'=>array('create')),
	array('label'=>'Actualizar Provedoresfacturas', 'url'=>array('update', 'id'=>$model->id)),
	//array('label'=>'Eliminar Provedoresfacturas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrador Provedoresfacturas', 'url'=>array('admin')),
);
?>

<h1>View Provedoresfacturas #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
		'codigoPago',
		'ciudad',
		'direccion',
		'telefono',
		'fax',
		'correoelectronico',
		'Fecha_Creacion',
		'Fecha_Modificacion',
	),
)); ?>
