<?php
/* @var $this LoteController */
/* @var $model Lote */

// $this->breadcrumbs=array(
// 	'Lotes'=>array('index'),
// 	$model->codLote,
// );

$this->menu=array(
	array('label'=>'Listar Lote', 'url'=>array('index')),
	array('label'=>'Crear Lote', 'url'=>array('create')),
	array('label'=>'Actualizar Lote', 'url'=>array('update', 'id'=>$model->codLote)),
	array('label'=>'Eliminar Lote', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->codLote),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Lote', 'url'=>array('admin')),
);
?>

<h1>Vista Lote #<?php echo $model->codLote; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'codLote',
		'densidad',
		'altura',
		'ancho',
		'largo',
	),
)); ?>
