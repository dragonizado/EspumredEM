<?php
/* @var $this RegistroconductoresController */
/* @var $model Registroconductores */

$this->breadcrumbs=array(
	'Registroconductores'=>array('index'),
	$model->cc=>array('view','id'=>$model->cc),
	'Update',
);

?>

<h1 align="center"> Registro Conductor <?php echo $model->cc; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>