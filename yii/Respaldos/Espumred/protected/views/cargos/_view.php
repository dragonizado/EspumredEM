<?php
/* @var $this CargosController */
/* @var $data Cargos */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombreCargo')); ?>:</b>
	<?php echo CHtml::encode($data->nombreCargo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcionCargo')); ?>:</b>
	<?php echo CHtml::encode($data->descripcionCargo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('codigoSena')); ?>:</b>
	<?php echo CHtml::encode($data->codigoSena); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nivelCargo')); ?>:</b>
	<?php echo CHtml::encode($data->nivelCargo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idArea')); ?>:</b>
	<?php echo CHtml::encode($data->idArea); ?>
	<br />


</div>