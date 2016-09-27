<?php
/* @var $this CargosController */
/* @var $data Cargos */
?>
 <div class="col-md-6">
 	

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombreCargo')); ?>:</b>
	<?php echo CHtml::encode($data->nombreCargo); ?>
	<br />


	<b><?php echo CHtml::encode($data->getAttributeLabel('codigoSena')); ?>:</b>
	<?php echo CHtml::encode($data->codigoSena); ?>
	<br />
	<br />
</div>
 </div>