<?php
/* @var $this InformacionacademicaController */
/* @var $model Informacionacademica */

$this->breadcrumbs=array(
	'Informacionacademicas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Informacionacademica', 'url'=>array('index')),
	array('label'=>'Crear Informacionacademica', 'url'=>array('create')),
	array('label'=>'Vista Informacionacademica', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Admiistrar Informacionacademica', 'url'=>array('admin')),
);
?>

<h1>Actualizar Informacionacademica <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>