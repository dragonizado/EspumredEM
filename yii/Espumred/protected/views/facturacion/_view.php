<?php
/* @var $this FacturacionController */
/* @var $data Facturacion */
?>
<div class="col-md-6">
<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('provedor')); ?>:</b>
	<?php echo CHtml::encode($data->provedor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numeroFactura')); ?>:</b>
	<?php echo CHtml::encode($data->numeroFactura); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('valorFactura')); ?>:</b>
	<?php echo CHtml::encode($data->valorFactura); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('consecutivo')); ?>:</b>
	<?php echo CHtml::encode($data->consecutivo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idUsuario')); ?>:</b>
	<?php echo CHtml::encode($data->idUsuario); ?>
	<br />



	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
	<?php echo CHtml::encode($data->estado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Fecha_Creacion')); ?>:</b>
	<?php echo CHtml::encode($data->Fecha_Creacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Fecha_Modificacion')); ?>:</b>
	<?php echo CHtml::encode($data->Fecha_Modificacion); ?>
	<br />

	*/ ?>

</div>
</div>