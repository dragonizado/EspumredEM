<?php
/* @var $this CargosController */
/* @var $model Cargos */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'cargos-form',
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
		<?php echo $form->labelEx($model,'nombreCargo'); ?>
		<?php echo $form->textField($model,'nombreCargo',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'nombreCargo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcionCargo'); ?>
		<?php echo $form->textField($model,'descripcionCargo',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'descripcionCargo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'codigoSena'); ?>
		<?php echo $form->textField($model,'codigoSena',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'codigoSena'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nivelCargo'); ?>
		<?php echo $form->textField($model,'nivelCargo',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'nivelCargo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idArea'); ?>
		<?php echo $form->textField($model,'idArea',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'idArea'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->