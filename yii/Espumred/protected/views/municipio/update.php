<?php
/* @var $this MunicipioController */
/* @var $model Municipio */

$this->breadcrumbs=array(
	'Municipios'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Municipio', 'url'=>array('index')),
	array('label'=>'Crear Municipio', 'url'=>array('create')),
	array('label'=>'Vista Municipio', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Municipio', 'url'=>array('admin')),
);
?>

<h1>Actualizar Municipio <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>