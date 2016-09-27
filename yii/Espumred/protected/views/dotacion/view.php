<?php
/* @var $this DotacionController */
/* @var $model Dotacion */

// $this->breadcrumbs=array(
// 	'Dotacions'=>array('index'),
// 	$model->id,
// );

// $this->menu=array(
// 	array('label'=>'List Dotacion', 'url'=>array('index')),
// 	array('label'=>'Create Dotacion', 'url'=>array('create')),
// 	array('label'=>'Update Dotacion', 'url'=>array('update', 'id'=>$model->id)),
// 	array('label'=>'Delete Dotacion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
// 	array('label'=>'Manage Dotacion', 'url'=>array('admin')),
// );
?>

<h1 align="center">View Dotacion #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'camisa',
		'pantalon',
		'delantal',
		'overol',
		'otrasDotaciones',
	),
)); ?>
