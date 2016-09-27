<?php
/* @var $this InformacionacademicaController */
/* @var $model Informacionacademica */

// $this->breadcrumbs=array(
// 	'Informacionacademicas'=>array('index'),
// 	$model->id,
// );

// $this->menu=array(
// 	array('label'=>'Listar Informacionacademica', 'url'=>array('index')),
// 	array('label'=>'Crear Informacionacademica', 'url'=>array('create')),
// 	array('label'=>'Actualizar Informacionacademica', 'url'=>array('update', 'id'=>$model->id)),
// 	array('label'=>'Eliminar Informacionacademica', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Estas seguro de eliminar este item')),
// 	array('label'=>'Adminstrar Informacionacademica', 'url'=>array('admin')),
// );
?>

<h1 align="center">View Informacionacademica #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombreEmpleado',
		'escolaridad',
		'tituloObtenido',
		'institucion',
		'primerCurso',
		'segundoCurso',
		'tercerCurso',
	),
)); ?>
