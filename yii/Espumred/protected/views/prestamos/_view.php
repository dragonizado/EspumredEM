<?php
/* @var $this PrestamosController */
/* @var $data Prestamos */
?>
<div class="col-md-4">
<div class="view">
	<b><?php echo CHtml::encode($data->getAttributeLabel('consecutivo')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->consecutivo), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::encode($data->id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_Cliente')); ?>:</b>
	<?php echo CHtml::encode($data->id_Cliente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_Usuario')); ?>:</b>
	<?php echo CHtml::encode($data->id_Usuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_Ciudad')); ?>:</b>
	<?php echo CHtml::encode($data->id_Ciudad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_Articulo')); ?>:</b>
	<?php echo CHtml::encode($data->id_Articulo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('valorUnitario')); ?>:</b>
	<?php echo CHtml::encode($data->valorUnitario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('valortotal')); ?>:</b>
	<?php echo CHtml::encode($data->valortotal); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('cantidad')); ?>:</b>
	<?php echo CHtml::encode($data->cantidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Fecha_Creacion')); ?>:</b>
	<?php echo CHtml::encode($data->Fecha_Creacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Fecha_Modificacion')); ?>:</b>
	<?php echo CHtml::encode($data->Fecha_Modificacion); ?>
	<br />

	

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	*/ ?>
</div>
</div>