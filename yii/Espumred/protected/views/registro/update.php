<?php
/* @var $this RegistroController */
/* @var $model Registro */

$this->breadcrumbs=array(
	'Registros'=>array('index'),
	$model->idMecanico=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Registro', 'url'=>array('index')),
	array('label'=>'Crear Registro', 'url'=>array('create')),
	array('label'=>'Vista Registro', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrador Registro', 'url'=>array('admin')),
);
?>

<h1>Actualizar Registro <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>