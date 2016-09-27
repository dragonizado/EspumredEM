<?php
/* @var $this EspumasController */
/* @var $model Espumas */

$this->breadcrumbs=array(
	'Espumases'=>array('index'),
	$model->cod=>array('view','id'=>$model->cod),
	'Update',
);

$this->menu=array(
	array('label'=>'Crear Espumas', 'url'=>array('create')),
	array('label'=>'Vista Espumas', 'url'=>array('view', 'id'=>$model->cod)),
	array('label'=>'Administrar Espumas', 'url'=>array('admin')),
);
?>

<h1>Actualizar Espumas <?php echo $model->cod; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>