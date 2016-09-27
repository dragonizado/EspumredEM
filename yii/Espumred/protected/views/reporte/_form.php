<?php
/* @var $this ReporteController */
/* @var $model Reporte */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'reporte-form',
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
		<?php echo $form->labelEx($model,'fechaFormacion'); ?>
		<?php echo $form->textField($model,'fechaFormacion',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'fechaFormacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fechaCorte'); ?>
		<?php echo $form->textField($model,'fechaCorte',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'fechaCorte'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'codSap'); ?>
		<?php echo $form->textField($model,'codSap',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'codSap'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lote'); ?>
		<?php echo $form->textField($model,'lote',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'lote'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipoEspumas'); ?>
		<?php echo $form->textField($model,'tipoEspumas',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'tipoEspumas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'densidad'); ?>
		<?php echo $form->textField($model,'densidad',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'densidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'color'); ?>
		<?php echo $form->textField($model,'color',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'color'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ancho'); ?>
		<?php echo $form->textField($model,'ancho',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'ancho'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'alto'); ?>
		<?php echo $form->textField($model,'alto',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'alto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'largo'); ?>
		<?php echo $form->textField($model,'largo',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'largo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kilo'); ?>
		<?php echo $form->textField($model,'kilo',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'kilo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'metroConforme'); ?>
		<?php echo $form->textField($model,'metroConforme',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'metroConforme'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'metroNoConforme'); ?>
		<?php echo $form->textField($model,'metroNoConforme',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'metroNoConforme'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kiloConforme'); ?>
		<?php echo $form->textField($model,'kiloConforme',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'kiloConforme'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kiloNoConforme'); ?>
		<?php echo $form->textField($model,'kiloNoConforme',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'kiloNoConforme'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'motivo'); ?>
		<?php echo $form->textField($model,'motivo',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'motivo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->