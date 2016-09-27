<?php
/* @var $this ReporteController */
/* @var $data Reporte */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaFormacion')); ?>:</b>
	<?php echo CHtml::encode($data->fechaFormacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaCorte')); ?>:</b>
	<?php echo CHtml::encode($data->fechaCorte); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('codSap')); ?>:</b>
	<?php echo CHtml::encode($data->codSap); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lote')); ?>:</b>
	<?php echo CHtml::encode($data->lote); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipoEspumas')); ?>:</b>
	<?php echo CHtml::encode($data->tipoEspumas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('densidad')); ?>:</b>
	<?php echo CHtml::encode($data->densidad); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('color')); ?>:</b>
	<?php echo CHtml::encode($data->color); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ancho')); ?>:</b>
	<?php echo CHtml::encode($data->ancho); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alto')); ?>:</b>
	<?php echo CHtml::encode($data->alto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('largo')); ?>:</b>
	<?php echo CHtml::encode($data->largo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kilo')); ?>:</b>
	<?php echo CHtml::encode($data->kilo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('metroConforme')); ?>:</b>
	<?php echo CHtml::encode($data->metroConforme); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('metroNoConforme')); ?>:</b>
	<?php echo CHtml::encode($data->metroNoConforme); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kiloConforme')); ?>:</b>
	<?php echo CHtml::encode($data->kiloConforme); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kiloNoConforme')); ?>:</b>
	<?php echo CHtml::encode($data->kiloNoConforme); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('motivo')); ?>:</b>
	<?php echo CHtml::encode($data->motivo); ?>
	<br />

	*/ ?>

</div>