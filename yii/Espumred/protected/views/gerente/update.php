<?php
/* @var $this ClienteController */
/* @var $model Cliente */

$this->breadcrumbs=array(
	'Gerente'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Gerente', 'url'=>array('index')),
	array('label'=>'Crear Gerente', 'url'=>array('create')),
	array('label'=>'Vista Gerente', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrador Gerente', 'url'=>array('admin')),
);
?>

<h1>Actualizar Gerente <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>