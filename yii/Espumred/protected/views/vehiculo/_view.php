<?php
/* @var $this VehiculoController */
/* @var $data Vehiculo */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('placa')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->placa), array('view', 'id'=>$data->placa)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('modelo')); ?>:</b>
	<?php echo CHtml::encode($data->modelo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('propietario')); ?>:</b>
	<?php echo CHtml::encode($data->propietario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('conductor')); ?>:</b>
	<?php echo CHtml::encode($data->conductor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('auxiliar')); ?>:</b>
	<?php echo CHtml::encode($data->ayudante); ?>
	<br />


</div>