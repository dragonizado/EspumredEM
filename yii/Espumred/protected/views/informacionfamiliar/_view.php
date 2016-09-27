<?php
/* @var $this InformacionfamiliarController */
/* @var $data Informacionfamiliar */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ccEmpleado')); ?>:</b>
	<?php echo CHtml::encode($data->ccEmpleado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombreFamiliar')); ?>:</b>
	<?php echo CHtml::encode($data->nombreFamiliar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('parantesco')); ?>:</b>
	<?php echo CHtml::encode($data->parantesco); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaDeNacimiento')); ?>:</b>
	<?php echo CHtml::encode($data->fechaDeNacimiento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('edad')); ?>:</b>
	<?php echo CHtml::encode($data->edad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('escolaridad')); ?>:</b>
	<?php echo CHtml::encode($data->escolaridad); ?>
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