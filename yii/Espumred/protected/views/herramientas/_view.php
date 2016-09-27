<?php
/* @var $this HerramientasController */
/* @var $data Herramientas */
?>
<div class="col-md-4">
<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('marca')); ?>:</b>
	<?php echo CHtml::encode($data->marca); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
	<?php echo CHtml::encode($data->estado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaDeCompra')); ?>:</b>
	<?php echo CHtml::encode($data->fechaDeCompra); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('proveedor')); ?>:</b>
	<?php echo CHtml::encode($data->proveedor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaDeBaja')); ?>:</b>
	<?php echo CHtml::encode($data->fechaDeBaja); ?>
	<br />
	<br />
	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('fabricante')); ?>:</b>
	<?php echo CHtml::encode($data->fabricante); ?>
	<br />

	*/ ?>
</div>
</div>