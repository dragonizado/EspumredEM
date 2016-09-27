<?php
/* @var $this MunicipioController */
/* @var $model Municipio */

$this->breadcrumbs=array(
	'Municipios'=>array('index'),
	$model->nombreMunicipio,
);

$this->menu=array(
	array('label'=>'Listar Municipio', 'url'=>array('index')),
	array('label'=>'Crear Municipio', 'url'=>array('create')),
	array('label'=>'Actualizar Municipio', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Municipio', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrador Municipio', 'url'=>array('admin')),
);
?>

<h1>View Municipio #<?php echo $model->nombreMunicipio; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombreMunicipio',
	),
)); ?>
