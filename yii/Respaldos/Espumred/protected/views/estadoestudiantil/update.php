<?php
/* @var $this EstadoestudiantilController */
/* @var $model Estadoestudiantil */

$this->breadcrumbs=array(
	'Estadoestudiantils'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Estadoestudiantil', 'url'=>array('index')),
	array('label'=>'Create Estadoestudiantil', 'url'=>array('create')),
	array('label'=>'View Estadoestudiantil', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Estadoestudiantil', 'url'=>array('admin')),
);
?>

<h1>Update Estadoestudiantil <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>