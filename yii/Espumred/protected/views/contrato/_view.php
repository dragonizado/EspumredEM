<?php
/* @var $this ContratoController */
/* @var $data Contrato */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipoContrato')); ?>:</b>
	<?php echo CHtml::encode($data->tipoContrato); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaPrimerContrato')); ?>:</b>
	<?php echo CHtml::encode($data->fechaPrimerContrato); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaIngreso')); ?>:</b>
	<?php echo CHtml::encode($data->fechaIngreso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaDeRetiro')); ?>:</b>
	<?php echo CHtml::encode($data->fechaDeRetiro); ?>
	<br />


</div>