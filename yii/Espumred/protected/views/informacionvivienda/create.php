<?php
/* @var $this InformacionviviendaController */
/* @var $model Informacionvivienda */

$this->breadcrumbs=array(
	'Informacionviviendas'=>array('index'),
	'Crear',
);

?>

<h1 align="center">Crear Informacion vivienda</h1><br>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>