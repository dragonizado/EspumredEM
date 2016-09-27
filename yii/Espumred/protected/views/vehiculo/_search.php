<?php
/* @var $this VehiculoController */
/* @var $model Vehiculo */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>
<div class="col-md-12">
	
		<div class="col-md-4">
			<?php echo $form->label($model,'placa'); ?>
			<?php echo $form->textField($model,'placa',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
		</div>

		<div class="col-md-4">
			<?php echo $form->label($model,'modelo'); ?>
			<?php echo $form->textField($model,'modelo',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
		</div>

		<div class="col-md-4">
			<?php echo $form->label($model,'propietario'); ?>
			<?php echo $form->textField($model,'propietario',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
		</div>
	

		<div class="col-md-4">
			<?php echo $form->label($model,'conductor'); ?>
			<?php echo $form->textField($model,'conductor',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
		</div>

		<div class="col-md-4">
			<?php echo $form->label($model,'ayudante'); ?>
			<?php echo $form->textField($model,'ayudante',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
			<br><br>
		</div>
		
</div>
	
	<div class="buttons" align="center">
		<?php echo CHtml::submitButton('Buscar',array("class"=>'btn btn-primary btn-large')); ?>
		<br><br>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->