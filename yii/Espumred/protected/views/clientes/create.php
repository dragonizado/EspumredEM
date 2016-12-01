<?php


$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	'Crear',
);

?>
<h1 align="center">Crear Cliente</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>