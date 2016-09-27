<?php
/* @var $this ProvedoresfacturasController */
/* @var $model Provedoresfacturas */

// $this->breadcrumbs=array(
// 	'Provedoresfacturases'=>array('index'),
// 	'Create',
// );

$this->menu=array(
	array('label'=>'Listar Provedoresfacturas', 'url'=>array('index')),
	array('label'=>'administrador Provedoresfacturas', 'url'=>array('admin')),
);
?>

<h1 align="center">Crear Proveedores facturas</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>