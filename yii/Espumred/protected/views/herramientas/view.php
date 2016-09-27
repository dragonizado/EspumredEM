<?php
/* @var $this HerramientasController */
/* @var $model Herramientas */

$this->breadcrumbs=array(
	'Herramientases'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Herramientas', 'url'=>array('index')),
	array('label'=>'Crear Herramientas', 'url'=>array('create')),
	array('label'=>'Actualizar Herramientas', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Herramientas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrador Herramientas', 'url'=>array('admin')),
);
?>

<h1>Vista Herramientas #<?php echo $model->id; ?></h1>

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
		'estado',
	),
)); ?>
