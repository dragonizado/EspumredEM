<?php
/* @var $this ArticulosdedotacionController */
/* @var $model Articulosdedotacion */

$this->breadcrumbs=array(
	'Articulosdedotacions'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Articulosdedotacion', 'url'=>array('index')),
	array('label'=>'Crear Articulosdedotacion', 'url'=>array('create')),
	array('label'=>'Vista Articulosdedotacion', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrador Articulosdedotacion', 'url'=>array('admin')),
);
?>

<h1>ACtualizar Articulosdedotacion <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>