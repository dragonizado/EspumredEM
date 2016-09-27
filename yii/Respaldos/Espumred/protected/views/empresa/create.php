<?php
/* @var $this EmpresaController */
/* @var $model Empresa */

$this->breadcrumbs=array(
	'Empresas'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Empresa', 'url'=>array('index')),
	array('label'=>'Administrador Empresa', 'url'=>array('admin')),
);
?>

<h1 align="center">Crear Empresa</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>