<?php
/* @var $this RegistroController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Registros',
);

$this->menu=array(
	array('label'=>'Crear Registro', 'url'=>array('create')),
	array('label'=>'Administrador Registro', 'url'=>array('admin')),
);
?>

<h1>Registros</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	'pager'=>array("htmlOptions"=>array("class"=>"pagination"))
)); ?>
