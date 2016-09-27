<?php
/* @var $this FormacionController */
/* @var $data Formacion */
?>

<div class="col-md-2">
<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cod), array('view', 'id'=>$data->cod)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('codlote')); ?>:</b>
	<?php echo CHtml::encode($data->codlote); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('altura')); ?>:</b>
	<?php echo CHtml::encode($data->altura); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ancho')); ?>:</b>
	<?php echo CHtml::encode($data->ancho); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('largo')); ?>:</b>
	<?php echo CHtml::encode($data->largo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('peso')); ?>:</b>
	<?php echo CHtml::encode($data->peso); ?>

	<b><?php echo CHtml::encode($data->getAttributeLabel('Fecha_Creacion')); ?>:</b>
	<?php echo CHtml::encode($data->Fecha_Creacion); ?>

	
	<br />
	<br />

</div>
</div>