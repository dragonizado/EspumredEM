<?php
/* @var $this ContratoController */
/* @var $model Contrato */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'contrato-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id'); ?>
		<?php echo $form->textField($model,'id',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipoContrato'); ?>
		<?php echo $form->textField($model,'tipoContrato',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'tipoContrato'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fechaPrimerContrato'); ?>
		<?php echo $form->textField($model,'fechaPrimerContrato',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'fechaPrimerContrato'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fechaIngreso'); ?>
		<?php echo $form->textField($model,'fechaIngreso',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'fechaIngreso'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fechaDeRetiro'); ?>
		<?php echo $form->textField($model,'fechaDeRetiro',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'fechaDeRetiro'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->