<?php
/* @var $this ProductocostosController */
/* @var $model Productocostos */

$this->breadcrumbs=array(
	'Productocostoses'=>array('index'),
	$model->cod=>array('view','id'=>$model->cod),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Productocostos', 'url'=>array('index')),
	array('label'=>'Crear Productocostos', 'url'=>array('create')),
	array('label'=>'Vista Productocostos', 'url'=>array('view', 'id'=>$model->cod)),
	array('label'=>'Administrador Productocostos', 'url'=>array('admin')),
);
?>

<h1>Actualizar Producto costos <?php echo $model->cod; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>