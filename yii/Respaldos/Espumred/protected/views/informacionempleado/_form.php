<?php
/* @var $this InformacionempleadoController */
/* @var $model Informacionempleado */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'informacionempleado-form',
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
		<?php echo $form->labelEx($model,'codigoNomina'); ?>
		<?php echo $form->textField($model,'codigoNomina',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'codigoNomina'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estado'); ?>
		<?php echo $form->textField($model,'estado',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'estado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'carnet'); ?>
		<?php echo $form->textField($model,'carnet',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'carnet'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'informacionAcademica'); ?>
		<?php echo $form->textField($model,'informacionAcademica',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'informacionAcademica'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'informacionPersonal'); ?>
		<?php echo $form->textField($model,'informacionPersonal'); ?>
		<?php echo $form->error($model,'informacionPersonal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'informacionFamiliar'); ?>
		<?php echo $form->textField($model,'informacionFamiliar',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'informacionFamiliar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estadoEstudiantil'); ?>
		<?php echo $form->textField($model,'estadoEstudiantil',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'estadoEstudiantil'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'seguridadSocial'); ?>
		<?php echo $form->textField($model,'seguridadSocial',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'seguridadSocial'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'area'); ?>
		<?php echo $form->textField($model,'area',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'area'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contrato'); ?>
		<?php echo $form->textField($model,'contrato',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'contrato'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->