<?php
/* @var $this ReporteController */
/* @var $model Reporte */

$this->breadcrumbs=array(
	'Reportes'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Reporte', 'url'=>array('index')),
	array('label'=>'Create Reporte', 'url'=>array('create')),
	array('label'=>'Update Reporte', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Reporte', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Reporte', 'url'=>array('admin')),
);
?>

<h1>View Reporte #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'fechaFormacion',
		'fechaCorte',
		'codSap',
		'lote',
		'tipoEspumas',
		'densidad',
		'color',
		'ancho',
		'alto',
		'largo',
		'kilo',
		'metroConforme',
		'metroNoConforme',
		'kiloConforme',
		'kiloNoConforme',
		'motivo',
	),
)); ?>
