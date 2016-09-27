<?php
/* @var $this AreaController */
/* @var $model Area */

$this->breadcrumbs=array(
	'Areas'=>array('index'),
	$model->idArea=>array('view','id'=>$model->idArea),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar Area', 'url'=>array('index')),
	array('label'=>'Crear Area', 'url'=>array('create')),
	array('label'=>'Vista Area', 'url'=>array('view', 'id'=>$model->idArea)),
	array('label'=>'Administrador Area', 'url'=>array('admin')),
);
?>

<h1>Actualizar Area <?php echo $model->idArea; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>