<?php
/* @var $this ClientesController */
/* @var $model Clientes */

$this->breadcrumbs=array(
	'clientes'=>array('index'),
	$model->cod,
);

$this->menu=array(
	//array('label'=>'Listar Cliente', 'url'=>array('index')),
	array('label'=>'Crear Cliente', 'url'=>array('create')),
	array('label'=>'Actualizar Cliente', 'url'=>array('update', 'id'=>$model->cod)),
	array('label'=>'Eliminar Cliente', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','cod'=>$model->cod),'confirm'=>'¿Esta seguro de eliminar este Cliente?')),
	array('label'=>'Administrar Cliente', 'url'=>array('admin')),
);


?>

   <h1>Vista Cliente #<?php echo $model->cod; ?></h1>
   
   <?php $this->widget('zii.widgets.CDetailView', array(
	   'data'=>$model,
	   'attributes'=>array(
	   	
	   'cod',
	   'nombreCliente',
		
	),
)); ?>
