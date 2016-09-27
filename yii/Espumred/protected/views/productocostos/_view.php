<?php
/* @var $this ProductocostosController */
/* @var $data Productocostos */
?>

<div class="col-md-4">
<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cod), array('view', 'id'=>$data->cod)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('medidas')); ?>:</b>
	<?php echo CHtml::encode($data->medidas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calibre')); ?>:</b>
	<?php echo CHtml::encode($data->calibre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('precioMayoristas')); ?>:</b>
	<?php echo CHtml::encode($data->precioMayoristas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('precioCorreria')); ?>:</b>
	<?php echo CHtml::encode($data->precioCorreria); ?>
	<br />

</div>
</div>