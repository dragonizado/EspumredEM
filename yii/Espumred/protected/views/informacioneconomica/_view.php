<?php
/* @var $this InformacioneconomicaController */
/* @var $data Informacioneconomica */
?>
<div class="col-md-4">
	

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('primerIngreso')); ?>:</b>
	<?php echo CHtml::encode($data->primerIngreso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('segundoIngreso')); ?>:</b>
	<?php echo CHtml::encode($data->segundoIngreso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('otrosIngresos')); ?>:</b>
	<?php echo CHtml::encode($data->otrosIngresos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('totalIngresos')); ?>:</b>
	<?php echo CHtml::encode($data->totalIngresos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('arriendo')); ?>:</b>
	<?php echo CHtml::encode($data->arriendo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('serviciosPublicos')); ?>:</b>
	<?php echo CHtml::encode($data->serviciosPublicos); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('internet')); ?>:</b>
	<?php echo CHtml::encode($data->internet); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefonia')); ?>:</b>
	<?php echo CHtml::encode($data->telefonia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cable')); ?>:</b>
	<?php echo CHtml::encode($data->cable); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alimentacion')); ?>:</b>
	<?php echo CHtml::encode($data->alimentacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('transporte')); ?>:</b>
	<?php echo CHtml::encode($data->transporte); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('celular')); ?>:</b>
	<?php echo CHtml::encode($data->celular); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('educacion')); ?>:</b>
	<?php echo CHtml::encode($data->educacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vehiculo')); ?>:</b>
	<?php echo CHtml::encode($data->vehiculo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('prestacionesComercial')); ?>:</b>
	<?php echo CHtml::encode($data->prestacionesComercial); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('prestamosBancario')); ?>:</b>
	<?php echo CHtml::encode($data->prestamosBancario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hipoteca')); ?>:</b>
	<?php echo CHtml::encode($data->hipoteca); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vestidoYCalzado')); ?>:</b>
	<?php echo CHtml::encode($data->vestidoYCalzado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('recreacion')); ?>:</b>
	<?php echo CHtml::encode($data->recreacion); ?>
	<br />

	*/ ?>

</div>
</div>