<?php
/* @var $this condicionescomercialesController */
/* @var $model condicionescomerciales */

// $this->breadcrumbs=array(
// 	'Informacionpersonals'=>array('index'),
// 	$model->cc=>array('view','id'=>$model->cc),
// 	'Actualizar',
// );

?>


<h1 align="center">Formulario prueba #<?= $model->id ?></h1>

<?php $this->renderPartial('_formTodo', array('model'=>$model)); ?>