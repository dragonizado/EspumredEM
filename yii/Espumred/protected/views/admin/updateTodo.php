<?php
/* @var $this InformacionempleadoController */
/* @var $model Informacionempleado */

// $this->breadcrumbs=array(
// 	'Informacionempleados'=>array('index'),
// 	$model->id=>array('view','id'=>$model->id),
// 	'Update',
// );

// $this->menu=array(
// 	array('label'=>'List Informacionempleado', 'url'=>array('index')),
// 	array('label'=>'Create Informacionempleado', 'url'=>array('create')),
// 	array('label'=>'View Informacionempleado', 'url'=>array('view', 'id'=>$model->id)),
// 	array('label'=>'Manage Informacionempleado', 'url'=>array('admin')),
// );

?>

<h1 align="center">Actualizar Informacion empleado <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_formTodo', array('model'=>$model)); ?>