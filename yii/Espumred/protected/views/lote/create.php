<?php
/* @var $this LoteController */
/* @var $model Lote */

// $this->breadcrumbs=array(
// 	'Lotes'=>array('index'),
// 	'Create',
// );

$this->menu=array(
	array('label'=>'Listar Lote', 'url'=>array('index')),
	array('label'=>'Administrador Lote', 'url'=>array('admin')),
);
?>

<h1 align="center">Crear Lote</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>