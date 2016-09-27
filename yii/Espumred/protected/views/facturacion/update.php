<?php
/* @var $this FacturacionController */
/* @var $model Facturacion */

// $this->breadcrumbs=array(
// 	'Facturacions'=>array('index'),
// 	$model->id=>array('view','id'=>$model->id),
// 	'Actualizar',
// );

$this->menu=array(
	//array('label'=>'Listar Factura', 'url'=>array('index')),
	array('label'=>'Crear Factura', 'url'=>array('create')),
	array('label'=>'Vista Factura', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrador Factura', 'url'=>array('admin')),
);
?>

<h1>Actualizar Factura <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>