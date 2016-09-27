<?php
/* @var $this ProductocostosController */
/* @var $model Productocostos */

$this->breadcrumbs=array(
	'Productocostoses'=>array('index'),
	$model->cod,
);

$this->menu=array(
	array('label'=>'Listar Productocostos', 'url'=>array('index')),
	array('label'=>'Crear Productocostos', 'url'=>array('create')),
	array('label'=>'Actualizar Productocostos', 'url'=>array('update', 'id'=>$model->cod)),
	//array('label'=>'Eleminar Productocostos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->cod),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrador Productocostos', 'url'=>array('admin')),
);
?>

<h1>View Productocostos #<?php echo $model->cod; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'cod',
		'nombre',
		'medidas',
		'calibre',
		'precioMayoristas',
		'precioCorreria',
	),
)); ?>
