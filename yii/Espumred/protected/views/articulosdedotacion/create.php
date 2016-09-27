<?php
/* @var $this ArticulosdedotacionController */
/* @var $model Articulosdedotacion */

$this->breadcrumbs=array(
	'Articulosdedotacions'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Articulosdedotacion', 'url'=>array('index')),
	array('label'=>'Administrador Articulosdedotacion', 'url'=>array('admin')),
);
?>

<h1 align="center">Crear Articulosdedotacion</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>