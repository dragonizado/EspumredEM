<?php
/* @var $this CargarespumasController */
/* @var $model Cargarespumas */

$this->breadcrumbs=array(
	'Cargarespumas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Cargarespumas', 'url'=>array('index')),
	array('label'=>'Crear Cargarespumas', 'url'=>array('create')),
	array('label'=>'Vista Cargarespumas', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrador Cargarespumas', 'url'=>array('admin')),
);
?>

<h1>Actualizar Cargarespumas <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>