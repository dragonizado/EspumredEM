<?php
/* @var $this UsuarioController */
/* @var $data Usuario */
?>
<div class="col-md-4">
<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nombre')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Nombre), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::encode($data->id); ?>
	<br />

	
	<b><?php echo CHtml::encode($data->getAttributeLabel('Apellido')); ?>:</b>
	<?php echo CHtml::encode($data->Apellido); ?>
	<br />
	<?php if (Yii::app()->user->rol=='admin'): ?>
		
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('CC')); ?>:</b>
	<?php echo CHtml::encode($data->CC); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NombreUsuario')); ?>:</b>
	<?php echo CHtml::encode($data->NombreUsuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Password')); ?>:</b>
	<?php echo CHtml::encode($data->Password); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Rol')); ?>:</b>
	<?php echo CHtml::encode($data->Rol); ?>
	<?php endif ?>
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