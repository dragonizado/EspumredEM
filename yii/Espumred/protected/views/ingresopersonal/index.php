<?php
/* @var $this IngresopersonalController */
/* @var $dataProvider CActiveDataProvider */

// $this->breadcrumbs=array(
// 	'Ingresopersonal',
// );

?>

<h1 align="center">Ingreso de Visitantes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	'pager'=>array("htmlOptions"=>array("class"=>"pagination")),
)); ?>
