<?php
/* @var $this EspumasController */
/* @var $data Espumas */
?>

<div class="col-md-4">
<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cod), array('view', 'id'=>$data->cod)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo')); ?>:</b>
	<?php echo CHtml::encode($data->tipo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ancho')); ?>:</b>
	<?php echo CHtml::encode($data->ancho); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('largo')); ?>:</b>
	<?php echo CHtml::encode($data->largo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alto')); ?>:</b>
	<?php echo CHtml::encode($data->alto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('densidad')); ?>:</b>
	<?php echo CHtml::encode($data->densidad); ?>
	<br />


</div>
</div>