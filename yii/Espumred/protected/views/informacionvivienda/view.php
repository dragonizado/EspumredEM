<?php
/* @var $this InformacionviviendaController */
/* @var $model Informacionvivienda */

$this->breadcrumbs=array(
	'Informacionviviendas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Informacionvivienda', 'url'=>array('index')),
	array('label'=>'Crear Informacionvivienda', 'url'=>array('create')),
	array('label'=>'Actualizar Informacionvivienda', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Informacionvivienda', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrador Informacionvivienda', 'url'=>array('admin')),
);
?>

<h1>Vista Informacionvivienda #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'numeroDeHabitantes',
		'indiceHacimiento',
		'estrato',
		'tenenciaDeLaVivienda',
		'tipoDeVivienda',
		'numeroDeHabitacion',
		'cocina',
		'bañoComun',
		'bañoPrivado',
		'sala',
		'comedor',
		'salaComedor',
		'zonaDeRopa',
		'agua',
		'electricidad',
		'gas',
		'telefono',
		'internet',
		'televisionPorCable',
		'otros',
		'television',
		'equipoDeSonido',
		'lavadora',
		'estufa',
		'nevera',
		'dvd',
		'microondas',
		'pc',
		'materiaDeLaCasa',

	),
)); ?>
