<?php
/* @var $this AreaController */
/* @var $data Area */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idArea')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idArea), array('view', 'id'=>$data->idArea)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombreArea')); ?>:</b>
	<?php echo CHtml::encode($data->nombreArea); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcionArea')); ?>:</b>
	<?php echo CHtml::encode($data->descripcionArea); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cargo')); ?>:</b>
	<?php echo CHtml::encode($data->cargo); ?>
	<br />


</div>