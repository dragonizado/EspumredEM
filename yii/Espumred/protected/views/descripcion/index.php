<?php
/* @var $this CondicionescomercialesController */
/* @var $dataProvider CActiveDataProvider */

// $this->breadcrumbs=array(
// 	'Informacionpersonals',
// );

//$this->menu=array(
	//array('label'=>'Crear Condiciones Comerciales', 'url'=>array('create')),
	//array('label'=>'Mostrar Condiciones Comerciales', 'url'=>array('admin')),
//);
?>

<h1 align="center">Descripcion</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	'pager'=>array("htmlOptions"=>array("class"=>"pagination"))
)); ?>
