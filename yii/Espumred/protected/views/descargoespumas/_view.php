<?php
/* @var $this DescargoespumasController */
/* @var $data Descargoespumas */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numeroLote')); ?>:</b>
	<?php echo CHtml::encode($data->numeroLote); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cantidadConsumida')); ?>:</b>
	<?php echo CHtml::encode($data->cantidadConsumida); ?>
	<br />



</div>