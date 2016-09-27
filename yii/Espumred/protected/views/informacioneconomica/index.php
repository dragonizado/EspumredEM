<?php
/* @var $this InformacioneconomicaController */
/* @var $dataProvider CActiveDataProvider */

// $this->breadcrumbs=array(
// 	'Informacioneconomicas',
// );

// $this->menu=array(
// 	array('label'=>'Crear Informacioneconomica', 'url'=>array('create')),
// 	array('label'=>'Administrador Informacioneconomica', 'url'=>array('admin')),
// );
?>

<h1 align="center">Informacion economicas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	'pager'=>array("htmlOptions"=>array("class"=>"pagination"))
)); ?>
