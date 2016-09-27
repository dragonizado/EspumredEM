<?php
/* @var $this CiudadController */
/* @var $data Ciudad */
?>
<div class="col-md-4">
<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('NombreCiudad')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->NombreCiudad), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::encode($data->id); ?>
	<br />
	<br />

</div>

</div>