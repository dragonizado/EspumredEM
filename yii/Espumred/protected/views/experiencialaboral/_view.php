<?php
/* @var $this ExperiencialaboralController */
/* @var $data Experiencialaboral */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('cedula')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cedula), array('view', 'id'=>$data->cedula)); ?>
	<br />

	

	<b><?php echo CHtml::encode($data->getAttributeLabel('empresa')); ?>:</b>
	<?php echo CHtml::encode($data->empresa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cargo')); ?>:</b>
	<?php echo CHtml::encode($data->cargo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('funciones')); ?>:</b>
	<?php echo CHtml::encode($data->funciones); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_inicio')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_inicio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_retiro')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_retiro); ?>
	<br />


</div>