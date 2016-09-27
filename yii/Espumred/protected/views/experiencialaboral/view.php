<?php
/* @var $this ExperiencialaboralController */
/* @var $model Experiencialaboral */



// $this->menu=array(
// 	array('label'=>'List Experiencialaboral', 'url'=>array('index')),
// 	array('label'=>'Create Experiencialaboral', 'url'=>array('create')),
// 	array('label'=>'Update Experiencialaboral', 'url'=>array('update', 'id'=>$model->id)),
// 	array('label'=>'Delete Experiencialaboral', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
// 	array('label'=>'Manage Experiencialaboral', 'url'=>array('admin')),
// );
?>

<h1 align="center">Vista Experiencialaboral #<?php echo $model->cedula; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		
		'cedula',
		'empresa',
		'cargo',
		'funciones',
		'fecha_inicio',
		'fecha_retiro',
	),
)); ?>
