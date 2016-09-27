<?php
/* @var $this MunicipioController */
/* @var $data Municipio */
?>
<div class="col-md-4">
<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombreMunicipio')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->nombreMunicipio), array('view', 'id'=>$data->id)); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::encode($data->id); ?>
	<br />

	
<br />
</div>
</div>