<?php
/* @var $this CartaremisoraController */
/* @var $model Cartaremisora */

$this->breadcrumbs=array(
	'Cartaremisoras'=>array('index'),
	"#".$model->consecutivo=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Cartaremisora', 'url'=>array('index')),
	array('label'=>'Crear Cartaremisora', 'url'=>array('create')),
	array('label'=>'VistaCartaremisora', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrador Cartaremisora', 'url'=>array('admin')),
);
?>

<h1>Actualizar Cartaremisora #<?php echo $model->consecutivo; ?></h1>

<?php $this->renderPartial('_formActualizar', array('model'=>$model)); ?>