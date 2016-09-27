<?php
/* @var $this LoteController */
/* @var $model Lote */

// $this->breadcrumbs=array(
// 	'Lotes'=>array('index'),
// 	$model->codLote=>array('view','id'=>$model->codLote),
// 	'Update',
// );

$this->menu=array(
	array('label'=>'Listar Lote', 'url'=>array('index')),
	array('label'=>'CrearLote', 'url'=>array('create')),
	array('label'=>'Vista Lote', 'url'=>array('view', 'id'=>$model->codLote)),
	array('label'=>'Administrar Lote', 'url'=>array('admin')),
);
?>

<h1>Actulizar Lote <?php echo $model->codLote; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>