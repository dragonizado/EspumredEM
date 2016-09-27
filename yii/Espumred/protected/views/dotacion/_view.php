<?php
/* @var $this DotacionController */
/* @var $data Dotacion */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('camisa')); ?>:</b>
	<?php echo CHtml::encode($data->camisa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pantalon')); ?>:</b>
	<?php echo CHtml::encode($data->pantalon); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('delantal')); ?>:</b>
	<?php echo CHtml::encode($data->delantal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('overol')); ?>:</b>
	<?php echo CHtml::encode($data->overol); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('otrasDotaciones')); ?>:</b>
	<?php echo CHtml::encode($data->otrasDotaciones); ?>
	<br />

	*/ ?>

</div>