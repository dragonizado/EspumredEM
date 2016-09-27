<?php
/* @var $this ProvedoresfacturasController */
/* @var $model Provedoresfacturas */

// $this->breadcrumbs=array(
// 	'Provedoresfacturases'=>array('index'),
// 	$model->id=>array('view','id'=>$model->id),
// 	'Actualizar',
// );

$this->menu=array(
	array('label'=>'Listar Provedoresfacturas', 'url'=>array('index')),
	array('label'=>'Crear Provedoresfacturas', 'url'=>array('create')),
	array('label'=>'Vista Provedoresfacturas', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrador Provedoresfacturas', 'url'=>array('admin')),
);
?>

<h1>Actualizar Proveedores facturas <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>