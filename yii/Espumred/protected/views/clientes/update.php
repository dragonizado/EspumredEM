<?php


$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	$model->cod=>array('view','id'=>$model->cod),
	'Actualizar',
);

$this->menu=array(
	//array('label'=>'Listar Cliente', 'url'=>array('index')),
	array('label'=>'Crear Cliente', 'url'=>array('create')),
	array('label'=>'Vista Cliente', 'url'=>array('view', 'id'=>$model->cod)),
	array('label'=>'Administrador Cliente', 'url'=>array('admin')),
);
?>

<center><h1>Actualizar Cliente <?php echo $model->cod; ?></h1><center>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>