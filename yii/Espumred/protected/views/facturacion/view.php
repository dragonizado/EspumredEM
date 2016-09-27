<?php
/* @var $this FacturacionController */
/* @var $model Facturacion */

// $this->breadcrumbs=array(
// 	'Facturacion'=>array('index'),
// 	$model->id,
// );

$this->menu=array(
	array('label'=>'Listar Facturacion', 'url'=>array('index')),
	array('label'=>'Crear Facturacion', 'url'=>array('create')),
	array('label'=>'Az¿ctualizar Facturacion', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Facturacion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrador Facturacion', 'url'=>array('admin')),
);
?>

<h1>Vista Facturacion #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'provedor',
		'numeroFactura',
		'valorFactura',
		'consecutivo',
		'idUsuario',
		'Facturacioncol',
		'estado',
		'Fecha_Creacion',
		'Fecha_Modificacion',
	),
)); ?>
