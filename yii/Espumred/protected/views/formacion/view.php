<?php
/* @var $this FormacionController */
/* @var $model Formacion */

// $this->breadcrumbs=array(
// 	'Formacions'=>array('index'),
// 	$model->cod,
// );

$this->menu=array(
	array('label'=>'List Formacion', 'url'=>array('index')),
	array('label'=>'Create Formacion', 'url'=>array('create')),
	array('label'=>'Update Formacion', 'url'=>array('update', 'id'=>$model->cod)),
	array('label'=>'Delete Formacion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->cod),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Formacion', 'url'=>array('admin')),
);
?>

<h1>View Formacion #<?php echo $model->cod; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'cod',
		'codlote',
		'altura',
		'ancho',
		'largo',
		'peso',
		'tipo',
	),
)); ?>
