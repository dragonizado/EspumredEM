<?php
/* @var $this InformacionacademicaController */
/* @var $data Informacionacademica */
?>
<div class="col-md-4">
	

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombreEmpleado')); ?>:</b>
	<?php echo CHtml::encode($data->nombreEmpleado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('escolaridad')); ?>:</b>
	<?php echo CHtml::encode($data->escolaridad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tituloObtenido')); ?>:</b>
	<?php echo CHtml::encode($data->tituloObtenido); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('institucion')); ?>:</b>
	<?php echo CHtml::encode($data->institucion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('primerCurso')); ?>:</b>
	<?php echo CHtml::encode($data->primerCurso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('segundoCurso')); ?>:</b>
	<?php echo CHtml::encode($data->segundoCurso); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('tercerCurso')); ?>:</b>
	<?php echo CHtml::encode($data->tercerCurso); ?>
	<br />

	*/ ?>

</div>
</div>