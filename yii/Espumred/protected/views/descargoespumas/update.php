<?php
/* @var $this DescargoespumasController */
/* @var $model Descargoespumas */

$this->breadcrumbs=array(
	'Descargoespumases'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar Descargoespumas', 'url'=>array('index')),
	array('label'=>'Crear Descargoespumas', 'url'=>array('create')),
	array('label'=>'Vista Descargoespumas', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrador Descargoespumas', 'url'=>array('admin')),
);
?>

<h1 align="center">Actualizar Descargoespumas <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>