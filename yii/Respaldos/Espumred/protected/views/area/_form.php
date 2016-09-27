<?php
/* @var $this AreaController */
/* @var $model Area */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'area-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'idArea'); ?>
		<?php echo $form->textField($model,'idArea',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'idArea'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombreArea'); ?>
		<?php echo $form->textField($model,'nombreArea',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'nombreArea'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcionArea'); ?>
		<?php echo $form->textField($model,'descripcionArea',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'descripcionArea'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cargo'); ?>
		<?php echo $form->textField($model,'cargo',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'cargo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->