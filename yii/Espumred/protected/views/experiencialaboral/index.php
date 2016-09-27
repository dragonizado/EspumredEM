<?php
/* @var $this ExperiencialaboralController */
/* @var $dataProvider CActiveDataProvider */

// $this->breadcrumbs=array(
// 	'Experiencialaborals',
// );

// $this->menu=array(
// 	array('label'=>'Create Experiencialaboral', 'url'=>array('create')),
// 	array('label'=>'Manage Experiencialaboral', 'url'=>array('admin')),
// );
?>

<h1 align="center">Experiencialaboral</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
