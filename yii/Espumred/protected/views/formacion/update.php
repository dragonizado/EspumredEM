<?php
/* @var $this FormacionController */
/* @var $model Formacion */

// $this->breadcrumbs=array(
// 	'Formacions'=>array('index'),
// 	$model->cod=>array('view','id'=>$model->cod),
// 	'Actualizar',
// );

$this->menu=array(
	array('label'=>'Listar Formacion', 'url'=>array('index')),
	array('label'=>'Crear Formacion', 'url'=>array('create')),
	array('label'=>'Vista Formacion', 'url'=>array('view', 'id'=>$model->cod)),
	array('label'=>'Administrar Formacion', 'url'=>array('admin')),
);
?>

<h1>Actualizar Formacion <?php echo $model->cod; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>