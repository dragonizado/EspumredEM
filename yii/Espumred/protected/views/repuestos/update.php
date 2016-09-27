<?php
/* @var $this RepuestosController */
/* @var $model Repuestos */

$this->breadcrumbs=array(
	'Repuestoses'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizacion',
);

$this->menu=array(
	array('label'=>'Listar Repuestos', 'url'=>array('index')),
	array('label'=>'Crear Repuestos', 'url'=>array('create')),
	array('label'=>'Vista Repuestos', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administador Repuestos', 'url'=>array('admin')),
);
?>

<h1>Actualizacion Repuestos <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>