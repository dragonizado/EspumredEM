<?php
/* @var $this ExperiencialaboralController */
/* @var $model Experiencialaboral */



// $this->menu=array(
// 	array('label'=>'List Experiencialaboral', 'url'=>array('index')),
// 	array('label'=>'Create Experiencialaboral', 'url'=>array('create')),
// 	array('label'=>'View Experiencialaboral', 'url'=>array('view', 'id'=>$model->id)),
// 	array('label'=>'Manage Experiencialaboral', 'url'=>array('admin')),
// );
?>

<h1 align="center">Actualizar Experiencialaboral <?php echo $model->cedula; ?></h1>

<?php $this->renderPartial('_formActualizar', array('model'=>$model)); ?>