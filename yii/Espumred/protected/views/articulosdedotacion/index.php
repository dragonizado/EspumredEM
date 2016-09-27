<?php
/* @var $this ArticulosdedotacionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Articulosdedotacions',
);

$this->menu=array(
	array('label'=>'Crear Articulosdedotacion', 'url'=>array('create')),
	array('label'=>'Administrador Articulosdedotacion', 'url'=>array('admin')),
);
?>

<h1>Articulosdedotacions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	'pager'=>array("htmlOptions"=>array("class"=>"pagination"))
)); ?>
