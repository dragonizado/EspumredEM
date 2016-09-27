<?php
/* @var $this SeguridadsocialController */
/* @var $model Seguridadsocial */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'seguridadsocial-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	
	<div class="col-md-4"></div>
<div class="col-md-4">
	<?php echo $form->errorSummary($model); ?>

	<div>
		<?php echo $form->labelEx($model,'censantias'); ?>
		<?php echo $form->textField($model,'censantias',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'censantias'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'afp'); ?>
		<?php echo $form->textField($model,'afp',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'afp'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'eps'); ?>
		<?php echo $form->textField($model,'eps',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'eps'); ?>
	</div>


	<div align="center" class="buttons">
		<br>
		 <?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar', array("class"=>"btn btn-primary btn-large")); ?>
	</div>
	</div>
<div class="col-md-4"></div>

<?php $this->endWidget(); ?>

</div><!-- form -->