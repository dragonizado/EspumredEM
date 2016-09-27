<?php
/* @var $this InformacionempleadoController */
/* @var $model Informacionempleado */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'codigoNomina'); ?>
		<?php echo $form->textField($model,'codigoNomina',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'estado'); ?>
		<?php echo $form->textField($model,'estado',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'carnet'); ?>
		<?php echo $form->textField($model,'carnet',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'informacionAcademica'); ?>
		<?php echo $form->textField($model,'informacionAcademica',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'informacionPersonal'); ?>
		<?php echo $form->textField($model,'informacionPersonal'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'informacionFamiliar'); ?>
		<?php echo $form->textField($model,'informacionFamiliar',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'estadoEstudiantil'); ?>
		<?php echo $form->textField($model,'estadoEstudiantil',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'seguridadSocial'); ?>
		<?php echo $form->textField($model,'seguridadSocial',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'area'); ?>
		<?php echo $form->textField($model,'area',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'contrato'); ?>
		<?php echo $form->textField($model,'contrato',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->