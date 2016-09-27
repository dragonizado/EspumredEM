<?php
/* @var $this AreaController */
/* @var $data Area */
?>
<div class="col-md-4">
	

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombreArea')); ?>:</b>
	<?php echo CHtml::encode($data->nombreArea); ?>
	<br /> <br />

</div>
</div>