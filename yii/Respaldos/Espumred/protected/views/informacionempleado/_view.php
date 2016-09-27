<?php
/* @var $this InformacionempleadoController */
/* @var $data Informacionempleado */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('codigoNomina')); ?>:</b>
	<?php echo CHtml::encode($data->codigoNomina); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
	<?php echo CHtml::encode($data->estado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('carnet')); ?>:</b>
	<?php echo CHtml::encode($data->carnet); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('informacionAcademica')); ?>:</b>
	<?php echo CHtml::encode($data->informacionAcademica); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('informacionPersonal')); ?>:</b>
	<?php echo CHtml::encode($data->informacionPersonal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('informacionFamiliar')); ?>:</b>
	<?php echo CHtml::encode($data->informacionFamiliar); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('estadoEstudiantil')); ?>:</b>
	<?php echo CHtml::encode($data->estadoEstudiantil); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('seguridadSocial')); ?>:</b>
	<?php echo CHtml::encode($data->seguridadSocial); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('area')); ?>:</b>
	<?php echo CHtml::encode($data->area); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contrato')); ?>:</b>
	<?php echo CHtml::encode($data->contrato); ?>
	<br />

	*/ ?>

</div>