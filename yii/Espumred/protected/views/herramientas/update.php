<?php
/* @var $this HerramientasController */
/* @var $model Herramientas */

$this->breadcrumbs=array(
	'Herramientases'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Herramientas', 'url'=>array('index')),
	array('label'=>'Crear Herramientas', 'url'=>array('create')),
	array('label'=>'Vista Herramientas', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrador Herramientas', 'url'=>array('admin')),
);
?>

<h1>Actualizar Herramientas <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>