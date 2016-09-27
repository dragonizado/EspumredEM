<?php
/* @var $this DescripcionController */
/* @var $model Descripcion */

$this->breadcrumbs=array(
	'Informacionfamiliars'=>array('index'),  //añadir al modelo
	'Crear',
);

// $this->menu=array(
// 	array('label'=>'Listar Informacionfamiliar', 'url'=>array('index')),
// 	array('label'=>'Administrador Informacionfamiliar', 'url'=>array('admin')),
// );
?>

<h1  align="center">Crear Descripcion</h1>



<?php $this->renderPartial('_formcreateNuevo', array('model'=>$model )); ?>