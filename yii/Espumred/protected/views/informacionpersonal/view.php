<?php
/* @var $this InformacionpersonalController */
/* @var $model Informacionpersonal */

$this->breadcrumbs=array(
	'Informacionpersonals'=>array('index'),
	$model->cc,
);

$this->menu=array(
	array('label'=>'Listar Informacionpersonal', 'url'=>array('index')),
	array('label'=>'Crear Informacionpersonal', 'url'=>array('create')),
	array('label'=>'Actualizar Informacionpersonal', 'url'=>array('update', 'id'=>$model->cc)),
	array('label'=>'Eliminar Informacionpersonal', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->cc),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administracion de Informacion personal', 'url'=>array('admin')),
);
?>

<h1 align="center">Vista Informacionpersonal #<?php echo $model->cc; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'cc',
		'nombre',
		'fechaNacimiento',
		'lugarNacimiento',
		'sexo',
		'rh',
		'estadoCivil',
		'numeroHijos',
		'direccionResidencia',
		'barrio',
		'municipio',
		'telefono',
		'celular',
		'libretaMilitar',
		'claseLibretaMilitar',
	),
)); ?>
