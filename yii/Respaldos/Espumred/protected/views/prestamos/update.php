<?php
/* @var $this PrestamosController */
/* @var $model Prestamos */

$this->breadcrumbs=array(
	'Prestamos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Prestamos', 'url'=>array('index')),
	array('label'=>'Crear Prestamos', 'url'=>array('create')),
	array('label'=>'Vista Prestamos', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrador Prestamos', 'url'=>array('admin')),
);
?>

<h1>Actualizar Prestamos <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>