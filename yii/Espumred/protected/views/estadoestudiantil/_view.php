<?php
/* @var $this EstadoestudiantilController */
/* @var $data Estadoestudiantil */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tituloCarrera')); ?>:</b>
	<?php echo CHtml::encode($data->tituloCarrera); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('semestreActual')); ?>:</b>
	<?php echo CHtml::encode($data->semestreActual); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FechaTerminacion')); ?>:</b>
	<?php echo CHtml::encode($data->FechaTerminacion); ?>
	<br />


</div>