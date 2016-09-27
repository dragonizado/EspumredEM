<?php
/* @var $this RepuestosController */
/* @var $model Repuestos */

$this->breadcrumbs=array(
	'Repuestos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Repuestos', 'url'=>array('index')),
	array('label'=>'Crear Repuestos', 'url'=>array('create')),
	array('label'=>'Actualizar Repuestos', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Repuestos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrador Repuestos', 'url'=>array('admin')),
);
?>

<h1>Vista Repuestos #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
		'descripcion',
		'marca',
		'fechaDeCompra',
		'proveedor',
		'fechaDeBaja',
		'fabricante',
	),
)); ?>
