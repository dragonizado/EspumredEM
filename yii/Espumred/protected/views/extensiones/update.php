<?php
/* @var $this ExtensionesController */
/* @var $model Extensiones */

$this->breadcrumbs=array(
	'Extensiones'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar Extensiones', 'url'=>array('index')),
	array('label'=>'Crer Extensiones', 'url'=>array('create')),
	array('label'=>'Vista Extensiones', 'url'=>array('view', 'extension'=>$model->extension)),
	array('label'=>'Administrador Extensiones', 'url'=>array('admin')),
);
?>

<h1>Update Extensiones <?php echo $model->extension; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>