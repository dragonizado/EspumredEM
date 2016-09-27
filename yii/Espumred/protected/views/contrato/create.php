<?php
/* @var $this ContratoController */
/* @var $model Contrato */

// $this->breadcrumbs=array(
// 	'Contratos'=>array('index'),
// 	'Crear',
// );

// $this->menu=array(
// 	array('label'=>'Listar Contrato', 'url'=>array('index')),
// 	array('label'=>'Administrador Contrato', 'url'=>array('admin')),
// );
?>

<h1 align="center">Crear Contrato</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>