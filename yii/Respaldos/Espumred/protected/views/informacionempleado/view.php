<?php
/* @var $this InformacionempleadoController */
/* @var $model Informacionempleado */

$this->breadcrumbs=array(
	'Informacionempleados'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Informacionempleado', 'url'=>array('index')),
	array('label'=>'Create Informacionempleado', 'url'=>array('create')),
	array('label'=>'Update Informacionempleado', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Informacionempleado', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Informacionempleado', 'url'=>array('admin')),
);
?>

<h1>View Informacionempleado #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'codigoNomina',
		'estado',
		'carnet',
		'informacionAcademica',
		'informacionPersonal',
		'informacionFamiliar',
		'estadoEstudiantil',
		'seguridadSocial',
		'area',
		'contrato',
	),
)); ?>
