<?php
/* @var $this ArticulosController */
/* @var $data Articulos */
?>
<div class="col-md-6">
<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nombre_Articulo')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Nombre_Articulo),array('view', 'id'=>$data->id));?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::encode($data->id);?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('Descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->Descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Valor')); ?>:</b>
	<?php echo CHtml::encode($data->Valor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Fecha_Creacion')); ?>:</b>
	<?php echo CHtml::encode($data->Fecha_Creacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Fecha_Modificacion')); ?>:</b>
	<?php echo CHtml::encode($data->Fecha_Modificacion); ?>
	<br />
	<br /><br />
</div>

</div>