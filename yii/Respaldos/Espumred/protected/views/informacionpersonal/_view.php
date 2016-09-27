<?php
/* @var $this InformacionpersonalController */
/* @var $data Informacionpersonal */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('cc')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cc), array('view', 'id'=>$data->cc)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaNacimiento')); ?>:</b>
	<?php echo CHtml::encode($data->fechaNacimiento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lugarNacimiento')); ?>:</b>
	<?php echo CHtml::encode($data->lugarNacimiento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sexo')); ?>:</b>
	<?php echo CHtml::encode($data->sexo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rh')); ?>:</b>
	<?php echo CHtml::encode($data->rh); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estadoCivil')); ?>:</b>
	<?php echo CHtml::encode($data->estadoCivil); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('numeroHijos')); ?>:</b>
	<?php echo CHtml::encode($data->numeroHijos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direccionResidencia')); ?>:</b>
	<?php echo CHtml::encode($data->direccionResidencia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('barrio')); ?>:</b>
	<?php echo CHtml::encode($data->barrio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('municipio')); ?>:</b>
	<?php echo CHtml::encode($data->municipio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefono')); ?>:</b>
	<?php echo CHtml::encode($data->telefono); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('celular')); ?>:</b>
	<?php echo CHtml::encode($data->celular); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('libretaMilitar')); ?>:</b>
	<?php echo CHtml::encode($data->libretaMilitar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('claseLibretaMilitar')); ?>:</b>
	<?php echo CHtml::encode($data->claseLibretaMilitar); ?>
	<br />

	*/ ?>

</div>