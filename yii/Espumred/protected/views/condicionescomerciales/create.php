<?php
/* @var $this condicionescomercialesController */
/* @var $model condicionescomerciales */

// $this->breadcrumbs=array(
// 	'Informacionpersonals'=>array('index'),
// 	'Crear',
// );

 //$this->menu=array(
// 	array('label'=>'List condicionescomerciales, 'url'=>array('index')),
// 	array('label'=>'Manage condicionescomerciales', 'url'=>array('admin')),
// );
$modes = false;
if($modes == true && Yii::app()->user->rol != 'Test' ){
		require_once "mantenimiento.php";
	}else{
?>

<h1 align="center">Crear Condiciones Comerciales del Cliente</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>

<?php } ?>