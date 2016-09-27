<?php
/* @var $this InformacioneconomicaController */
/* @var $model Informacioneconomica */

// $this->breadcrumbs=array(
// 	'Informacioneconomicas'=>array('index'),
// 	$model->id,
// );

// $this->menu=array(
// 	array('label'=>'Listar Informacioneconomica', 'url'=>array('index')),
// 	array('label'=>'Crear Informacioneconomica', 'url'=>array('create')),
// 	array('label'=>'Actualizar Informacioneconomica', 'url'=>array('update', 'id'=>$model->id)),
// 	array('label'=>'Eleminiar Informacioneconomica', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
// 	array('label'=>'Administrador Informacioneconomica', 'url'=>array('admin')),
// );
?>

<h1 align="center">View Informacion economica #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'primerIngreso',
		'segundoIngreso',
		'otrosIngresos',
		'totalIngresos',
		'arriendo',
		'serviciosPublicos',
		'internet',
		'telefonia',
		'cable',
		'alimentacion',
		'transporte',
		'celular',
		'educacion',
		'vehiculo',
		'prestacionesComercial',
		'prestamosBancario',
		'hipoteca',
		'vestidoYCalzado',
		'recreacion',
	),
)); ?>
