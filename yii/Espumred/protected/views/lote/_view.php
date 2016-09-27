<?php
/* @var $this LoteController */
/* @var $data Lote */
?>
<div class="col-md-4">
<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('codLote')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->codLote), array('view', 'id'=>$data->codLote)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('densidad')); ?>:</b>
	<?php echo CHtml::encode($data->densidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('altura')); ?>:</b>
	<?php echo CHtml::encode($data->altura); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ancho')); ?>:</b>
	<?php echo CHtml::encode($data->ancho); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('largo')); ?>:</b>
	<?php echo CHtml::encode($data->largo); ?>
	<br />
</div>

</div>