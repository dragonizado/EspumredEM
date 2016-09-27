<?php
/* @var $this MecanicosController */
/* @var $model Mecanicos */

$this->breadcrumbs=array(
	'Mecanicoses'=>array('index'),
	$model->cc=>array('view','id'=>$model->cc),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Mecanicos', 'url'=>array('index')),
	array('label'=>'Crear Mecanicos', 'url'=>array('create')),
	array('label'=>'Vista Mecanicos', 'url'=>array('view', 'id'=>$model->cc)),
	array('label'=>'Administrador Mecanicos', 'url'=>array('admin')),
);
?>

<h1>Actualizar Mecanicos <?php echo $model->cc; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>