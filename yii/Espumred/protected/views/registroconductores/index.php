<?php
/* @var $this RegistroconductoresController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Registroconductores',
);
?>

<h1 align="center">Registro conductores</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
