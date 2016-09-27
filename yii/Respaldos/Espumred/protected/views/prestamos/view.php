<?php
/* @var $this PrestamosController */
/* @var $model Prestamos */

$this->breadcrumbs=array(
	'Prestamos'=>array('index'),
	$model->consecutivo,
);

$this->menu=array(
	array('label'=>'Listar Prestamos', 'url'=>array('index')),
	array('label'=>'Crear Prestamos', 'url'=>array('create')),
	array('label'=>'Actualizar Prestamos', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Prestamos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrador Prestamos', 'url'=>array('admin')),
);
?>

<h1>Vista Prestamos #<?php echo $model->consecutivo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		// 'id',
		// 'id_Cliente',
		// 'id_Usuario',
		// 'id_Ciudad',
		// 'id_Articulo',
		'consecutivo',
		'valorUnitario',
		'valortotal',
		'cantidad',
		'Fecha_Creacion',
		'Fecha_Modificacion',
		'descripcion',
	),
)); ?>
