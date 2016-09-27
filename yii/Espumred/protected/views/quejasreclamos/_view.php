<?php
/* @var $this CartaremisoraController */
/* @var $data Cartaremisora */
?>
<div class="col-md-4">
<div class="view">
 	<b><?php echo CHtml::encode($data->getAttributeLabel('consecutivo')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->consecutivo), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo  CHtml::encode($data->id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idArticulo')); ?>:</b>
	<?php echo CHtml::encode($data->idArticulo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idCliente')); ?>:</b>
	<?php echo CHtml::encode($data->idCliente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idUsuario')); ?>:</b>
	<?php echo CHtml::encode($data->idUsuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Direccion')); ?>:</b>
	<?php echo CHtml::encode($data->Direccion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Telefono')); ?>:</b>
	<?php echo CHtml::encode($data->Telefono); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Ciudad')); ?>:</b>
	<?php echo CHtml::encode($data->Ciudad); ?>
	<br />
	<br />
	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('Flete_Pagadero')); ?>:</b>
	<?php echo CHtml::encode($data->Flete_Pagadero); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Numero_Factura')); ?>:</b>
	<?php echo CHtml::encode($data->Numero_Factura); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Cantidad_Articulo')); ?>:</b>
	<?php echo CHtml::encode($data->Cantidad_Articulo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Valor_Unitario_Articulo')); ?>:</b>
	<?php echo CHtml::encode($data->Valor_Unitario_Articulo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Valor_Total')); ?>:</b>
	<?php echo CHtml::encode($data->Valor_Total); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Numero_Bultos')); ?>:</b>
	<?php echo CHtml::encode($data->Numero_Bultos); ?>
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('consecutivo')); ?>:</b>
	<?php echo CHtml::encode($data->consecutivo); ?>
	<br />
	
	*/ ?>

</div>
</div>