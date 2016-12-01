<?php
/* @var $this ClientesController */
/* @var $data Clientes */
?>
<div class="col-md-4">
<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Nombre), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombreCliente')); ?>:</b>
	<?php echo CHtml::encode($data->nombreCliente); ?>
	<br />

	

	<br />
	<br />

	
	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('Fecha_Creacion')); ?>:</b>
	<?php echo CHtml::encode($data->Fecha_Creacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Fecha_Modificacion')); ?>:</b>
	<?php echo CHtml::encode($data->Fecha_Modificacion); ?>
	<br />

	*/ ?>

</div>
</div>