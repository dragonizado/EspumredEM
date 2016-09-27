<?php
/* @var $this IngresopersonalController */
/* @var $model Ingresopersonal */

// $this->breadcrumbs=array(
// 	'Ingresopersonal'=>array('index'),
// 	$model->cc,
// );

// $this->menu=array(
// 	array('label'=>'List Ingresopersonal', 'url'=>array('index')),
// 	array('label'=>'Create Ingresopersonal', 'url'=>array('create')),
// 	array('label'=>'Update Ingresopersonal', 'url'=>array('update', 'id'=>$model->cc)),
// 	array('label'=>'Delete Ingresopersonal', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->cc),'confirm'=>'Are you sure you want to delete this item?')),
// 	array('label'=>'Manage Ingresopersonal', 'url'=>array('admin')),
// );
?>

<h1>Vista Visitante #<?php echo $model->nombre; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'nombre',
		'area',
		'pertenencia',
		'observacion',
		'fecha',
		'hora',
		
	),
)); ?>
