<?php
/* @var $this ClienteController */
/* @var $model Cliente */


?>

<h1>Vista Condiciones comerciales :<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'cod',
		'nombreCliente',
		'nombreAsesor',
		'TipologiaCliente',

	),
)); ?>
