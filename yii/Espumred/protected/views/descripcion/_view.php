<?php
/* @var $this InformacionfamiliarController */
/* @var $data Informacionfamiliar */
?>

<div class="view">

	
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('codigo')); ?>:</b>
	<?php echo CHtml::encode($data->codigo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('referencia')); ?>:</b>
	<?php echo CHtml::encode($data->referencia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('precioanterior')); ?>:</b>
	<?php echo CHtml::encode($data->precioanterior); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nuevoprecio')); ?>:</b>
	<?php echo CHtml::encode($data->nuevoprecio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('piefactura')); ?>:</b>
	<?php echo CHtml::encode($data->piefactura); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rebate')); ?>:</b>
	<?php echo CHtml::encode($data->rebate); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('ocupacion')); ?>:</b>
	<?php echo CHtml::encode($data->ocupacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('viveConEmpleado')); ?>:</b>
	<?php echo CHtml::encode($data->viveConEmpleado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dependeDelmpleado')); ?>:</b>
	<?php echo CHtml::encode($data->dependeDelmpleado); ?>
	<br />

	*/ ?>

</div>