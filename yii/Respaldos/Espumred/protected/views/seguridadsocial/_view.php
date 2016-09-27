<?php
/* @var $this SeguridadsocialController */
/* @var $data Seguridadsocial */
?>
<div class="col-md-4">
<div class="view">
	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('censantias')); ?>:</b>
	<?php echo CHtml::encode($data->censantias); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('afp')); ?>:</b>
	<?php echo CHtml::encode($data->afp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('eps')); ?>:</b>
	<?php echo CHtml::encode($data->eps); ?>
	<br />
</div>

</div>