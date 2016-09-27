<?php
/* @var $this InformacionfamiliarController */
/* @var $model Informacionfamiliar */

$this->breadcrumbs=array(
	'Informacionfamiliars'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Informacionfamiliar', 'url'=>array('index')),
	array('label'=>'Crear Informacionfamiliar', 'url'=>array('create')),
	array('label'=>'VistarInformacionfamiliar', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Informacionfamiliar', 'url'=>array('admin')),
);
?>

<h1>Actualizar Informacion familiar <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>