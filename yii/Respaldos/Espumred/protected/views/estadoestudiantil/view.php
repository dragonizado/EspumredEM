<?php
/* @var $this EstadoestudiantilController */
/* @var $model Estadoestudiantil */

$this->breadcrumbs=array(
	'Estadoestudiantils'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Estadoestudiantil', 'url'=>array('index')),
	array('label'=>'Create Estadoestudiantil', 'url'=>array('create')),
	array('label'=>'Update Estadoestudiantil', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Estadoestudiantil', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Estadoestudiantil', 'url'=>array('admin')),
);
?>

<h1>View Estadoestudiantil #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'tituloCarrera',
		'semestreActual',
		'FechaTerminacion',
	),
)); ?>
