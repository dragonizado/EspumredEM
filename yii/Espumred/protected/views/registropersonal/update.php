<?php
/* @var $this RegistropersonalController */
/* @var $model Registropersonal */

// $this->breadcrumbs=array(
// 	'Registropersonals'=>array('index'),
// 	$model->cc=>array('view','id'=>$model->cc),
// 	'Update',
// );

$this->menu=array(
	array('label'=>'List Registropersonal', 'url'=>array('index')),
	array('label'=>'Create Registropersonal', 'url'=>array('create')),
	array('label'=>'View Registropersonal', 'url'=>array('view', 'id'=>$model->cc)),
	array('label'=>'Manage Registropersonal', 'url'=>array('admin')),
);
?>

<h1>Update Registropersonal <?php echo $model->cc; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>