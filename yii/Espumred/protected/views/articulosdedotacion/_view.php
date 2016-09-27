<?php
/* @var $this ArticulosdedotacionController */
/* @var $data Articulosdedotacion */
?>
 <div class="col-md-6">

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipoDotacion')); ?>:</b>
	<?php echo CHtml::encode($data->tipoDotacion); ?>
	<br />

 </div>
</div>