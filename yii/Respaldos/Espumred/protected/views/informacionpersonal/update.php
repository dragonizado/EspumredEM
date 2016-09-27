<?php
/* @var $this InformacionpersonalController */
/* @var $model Informacionpersonal */

$this->breadcrumbs=array(
	'Informacionpersonals'=>array('index'),
	$model->cc=>array('view','id'=>$model->cc),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Informacionpersonal', 'url'=>array('index')),
	array('label'=>'Crear Informacionpersonal', 'url'=>array('create')),
	array('label'=>'VistaInformacionpersonal', 'url'=>array('view', 'id'=>$model->cc)),
	array('label'=>'Administrar Informacionpersonal', 'url'=>array('admin')),
);
?>

<h1>Actualizar Informacion personal <?php echo $model->cc; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>