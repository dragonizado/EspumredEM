<?php
/* @var $this ContratoController */
/* @var $model Contrato */

// $this->breadcrumbs=array(
// 	'Contratos'=>array('index'),
// 	$model->id,
// );

// $this->menu=array(
// 	array('label'=>'Listar Contrato', 'url'=>array('index')),
// 	array('label'=>'Crear Contrato', 'url'=>array('create')),
// 	array('label'=>'Actualizar Contrato', 'url'=>array('update', 'id'=>$model->id)),
// 	array('label'=>'Eliminar Contrato', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
// 	array('label'=>'Administrador Contrato', 'url'=>array('admin')),
// );
?>

<h1 align="center">View Contrato #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'tipoContrato',
		'fechaPrimerContrato',
		'fechaIngreso',
		'fechaDeRetiro',
	),
)); ?>
