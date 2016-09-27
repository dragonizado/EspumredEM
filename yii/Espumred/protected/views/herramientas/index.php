<?php
/* @var $this HerramientasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Herramientas',
);

$this->menu=array(
	array('label'=>'Crear Herramientas', 'url'=>array('create')),
	array('label'=>'Administrador Herramientas', 'url'=>array('admin')),
);
?>

<h1>Herramientas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	'pager'=>array("htmlOptions"=>array("class"=>"pagination"))
)); ?>
