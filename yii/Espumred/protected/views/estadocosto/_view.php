<?php
/* @var $this EstadocostoController */
/* @var $data Estadocosto */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaCosto')); ?>:</b>
	<?php echo CHtml::encode($data->fechaCosto); ?>
	<br />


</div>