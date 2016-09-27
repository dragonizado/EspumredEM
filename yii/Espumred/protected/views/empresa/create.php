<?php
/* @var $this EmpresaController */
/* @var $model Empresa */

$this->breadcrumbs=array(
	'Empresas'=>array('index'),
	'Crear',
);


?>

<h1 align="center">Crear Empresa</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>