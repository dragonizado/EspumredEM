<?php
/* @var $this RegistroController */
/* @var $data Registro */
?>
<div class="col-md-4">
<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idMecanico')); ?>:</b>
	<?php echo CHtml::encode($data->idMecanico); ?>
	<br />

</div>
</div>