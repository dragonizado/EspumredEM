<?php
/* @var $this RegistroconductoresController */
/* @var $data Registroconductores */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('cc')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cc), array('view', 'id'=>$data->cc)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cargo')); ?>:</b>
	<?php echo CHtml::encode($data->cargo); ?>
	<br />

	

	<b><?php echo CHtml::encode($data->getAttributeLabel('eps')); ?>:</b>
	<?php echo CHtml::encode($data->eps); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('afp')); ?>:</b>
	<?php echo CHtml::encode($data->afp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('arl')); ?>:</b>
	<?php echo CHtml::encode($data->arl); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vigenciaSeguridad')); ?>:</b>
	<?php echo CHtml::encode($data->licencia); ?>
	<br />


</div>