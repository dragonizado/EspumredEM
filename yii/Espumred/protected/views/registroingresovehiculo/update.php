<?php
/* @var $this RegistroingresovehiculoController */
/* @var $model Registroingresovehiculo */

$this->breadcrumbs=array(
	'Registroingresovehiculos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

?>

<h1>Update Registroingresovehiculo <?php echo $model->placa; ?></h1>

<?php $this->renderPartial('_form2', array('model'=>$model)); ?>