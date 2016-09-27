<?php
/* @var $this FacturacionController */
/* @var $model Facturacion */

// $this->breadcrumbs=array(
// 	'Facturacions'=>array('index'),
// 	$model->id=>array('view','id'=>$model->id),
// 	'Actualizar',
// );
?>

<h1 align="center">Actualizar  Estado Factura# <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_formInforme', array('model'=>$model)); ?>