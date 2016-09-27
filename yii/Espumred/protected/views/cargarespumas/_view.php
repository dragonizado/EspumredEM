<?php
/* @var $this CargarespumasController */
/* @var $data Cargarespumas */
?>
<div class="col-md-4">
<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cantidadKilo')); ?>:</b>
	<?php echo CHtml::encode($data->cantidadKilo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('altura')); ?>:</b>
	<?php echo CHtml::encode($data->altura); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ancho')); ?>:</b>
	<?php echo CHtml::encode($data->ancho); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('largo')); ?>:</b>
	<?php echo CHtml::encode($data->largo); ?>
	<br />


</div>
</div>