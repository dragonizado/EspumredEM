<?php
/* @var $this SeguridadsocialController */
/* @var $model Seguridadsocial */

$this->breadcrumbs=array(
	'Seguridadsocials'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Seguridadsocial', 'url'=>array('index')),
	array('label'=>'Crear Seguridadsocial', 'url'=>array('create')),
	array('label'=>'VistaSeguridadsocial', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Seguridadsocial', 'url'=>array('admin')),
);
?>

<h1>Actualizar Seguridad social <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>