<?php
/* @var $this IngresopersonalController */
/* @var $data Ingresopersonal */
ini_set('date.timezone','America/Bogota'); 
$fecha = date("Y-m-d");
//var_dump($data);
?>

<div class="col-md-3">
		<div class="view">
			<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
			<?php echo CHtml::link(CHtml::encode($data->nombre), array('ingreso', 'id'=>$data->id)); ?>
			<br />
			<b><?php echo CHtml::encode($data->getAttributeLabel('apellidos')); ?>:</b>
			<?php echo CHtml::encode($data->apellidos); ?>
			<br />
			<b><?php echo CHtml::encode($data->getAttributeLabel('area a dirigir')); ?>:</b>
			<?php echo CHtml::encode($data->area); ?>
			<br />

			<b><?php echo CHtml::encode($data->getAttributeLabel('pertenencia')); ?>:</b>
			<?php echo CHtml::encode($data->pertenencia); ?>
			<br />

			<b><?php echo CHtml::encode($data->getAttributeLabel('nombreempresa')); ?>:</b>
			<?php echo CHtml::encode($data->nombreempresa); ?>
			<br />

			<b><?php echo CHtml::encode($data->getAttributeLabel('asunto')); ?>:</b>
			<?php echo CHtml::encode($data->asunto); ?>
			<br />

			<b><?php echo CHtml::encode($data->getAttributeLabel('observacion')); ?>:</b>
			<?php echo CHtml::encode($data->observacion); ?>
			<br />
			<br />
			
		</div>
</div>

